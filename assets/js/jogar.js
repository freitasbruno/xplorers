/**
 * Group quiz client — see jogar.php. Reads the JOGAR global.
 * All user and quiz text goes through textContent (never innerHTML).
 */
(function () {
  'use strict';

  var CFG      = JOGAR;
  var LETTERS  = ['A', 'B', 'C', 'D'];
  var GRACE_MS = 1000;           // matches ROOM_GRACE on the server
  var POLL_QUESTION_MS = 1000;   // while a question is open
  var POLL_IDLE_MS     = 2000;   // lobby, reveal, podium
  var POLL_MAX_MS      = 5000;   // backoff ceiling when offline
  var KEY_NAME = 'xp_name';
  function roomKey(c) { return 'xp_room_' + c; }

  // ---------- helpers ----------

  function $(id) { return document.getElementById(id); }

  function el(tag, cls, text) {
    var e = document.createElement(tag);
    if (cls) e.className = cls;
    if (text !== undefined && text !== null) e.textContent = text;
    return e;
  }

  function show(node, visible) { node.classList.toggle('hidden', !visible); }

  function api(action, data) {
    var body = Object.assign({ action: action }, data || {});
    return fetch(CFG.api, {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify(body),
      cache: 'no-store'
    }).then(function (r) {
      return r.json().catch(function () { return {}; }).then(function (b) {
        return { status: r.status, body: b };
      });
    });
  }

  // localStorage can be unavailable (private mode) — identity then lives in memory only.
  function storeGet(key) {
    try { return JSON.parse(localStorage.getItem(key)); } catch (e) { return null; }
  }
  function storeSet(key, val) {
    try { localStorage.setItem(key, JSON.stringify(val)); } catch (e) { /* ignore */ }
  }
  function storeDel(key) {
    try { localStorage.removeItem(key); } catch (e) { /* ignore */ }
  }

  var toastTimer = null;
  function toast(msg) {
    var t = $('toast');
    t.textContent = msg;
    show(t, true);
    clearTimeout(toastTimer);
    toastTimer = setTimeout(function () { show(t, false); }, 3000);
  }

  function roomUrl(code) {
    return location.href.split('?')[0] + '?c=' + code;
  }

  // ---------- create ----------

  function initCreate() {
    var form     = $('create-form');
    var nameWrap = $('create-name-wrap');
    var nameIn   = $('create-name');
    var errEl    = $('create-error');
    nameIn.value = storeGet(KEY_NAME) || '';

    function role() { return form.querySelector('input[name=role]:checked').value; }
    function syncName() { show(nameWrap, role() === 'play'); }
    form.addEventListener('change', syncName);
    syncName();

    form.addEventListener('submit', function (ev) {
      ev.preventDefault();
      var name = nameIn.value.trim();
      if (role() === 'play' && !name) { errEl.textContent = 'Escreve o teu nome.'; show(errEl, true); return; }
      var btn = form.querySelector('button[type=submit]');
      btn.disabled = true;
      api('create', {
        lesson_id: CFG.lessonId,
        role: role(),
        pace: form.querySelector('input[name=pace]:checked').value,
        name: name
      }).then(function (res) {
        if (res.status !== 200) throw new Error(res.body.error || 'Não foi possível criar a sala.');
        if (name) storeSet(KEY_NAME, name);
        storeSet(roomKey(res.body.code), {
          host_token: res.body.host_token,
          token: res.body.token || '',
          player_id: res.body.player_id || ''
        });
        location.href = roomUrl(res.body.code);
      }).catch(function (e) {
        errEl.textContent = e.message || 'Sem ligação. Tenta outra vez.';
        show(errEl, true);
        btn.disabled = false;
      });
    });
  }

  // ---------- enter code ----------

  function initEnter() {
    var input = $('enter-code');
    input.addEventListener('input', function () {
      input.value = input.value.toUpperCase().replace(/[^A-Z0-9]/g, '').slice(0, 4);
    });
    $('enter-form').addEventListener('submit', function (ev) {
      ev.preventDefault();
      if (input.value.length === 4) location.href = roomUrl(input.value);
    });
    input.focus();
  }

  // ---------- game ----------

  var code      = CFG.code;
  var ids       = storeGet(roomKey(code)) || {};
  var view      = null;
  var offset    = 0;      // server clock − local clock (ms)
  var failures  = 0;
  var stopped   = false;
  var pollTimer = null;
  var busy      = false;
  var qrDone    = {};
  var lastQuestionKey = '';
  var expiryPolled    = -1;

  function auth() {
    return { code: code, token: ids.token || '', host_token: ids.host_token || '' };
  }

  function serverNow() { return Date.now() + offset; }

  function setScreen(id) {
    document.querySelectorAll('.screen').forEach(function (s) {
      s.classList.toggle('active', s.id === id);
    });
  }

  function fatal(msg) {
    stopped = true;
    clearTimeout(pollTimer);
    show($('net-banner'), false);
    show($('host-banner'), false);
    $('error-text').textContent = msg;
    setScreen('s-error');
  }

  function showLesson(lesson) {
    $('game-badge').className = 'badge ' + lesson.badge_class;
    $('game-badge').textContent = lesson.topic_name;
    $('game-title').textContent = 'Aula ' + lesson.class_number + ' — ' + lesson.title;
    show($('game-lesson'), true);
    var back = 'lesson.php?id=' + encodeURIComponent(lesson.id);
    $('p-back').href = back;
    $('btn-end').href = back;
  }

  // ----- polling -----

  function poll() {
    clearTimeout(pollTimer);
    if (stopped) return;
    var data = auth();
    if (view) data.v = view.version;
    api('state', data).then(function (res) {
      failures = 0;
      show($('net-banner'), false);
      handle(res);
    }, function () {
      failures++;
      if (failures >= 2) show($('net-banner'), true);
    }).then(schedule);
  }

  function schedule() {
    if (stopped) return;
    clearTimeout(pollTimer);
    var base  = view && view.phase === 'question' ? POLL_QUESTION_MS : POLL_IDLE_MS;
    var delay = failures ? Math.min(POLL_MAX_MS, base * (failures + 1)) : base;
    pollTimer = setTimeout(poll, delay);
  }

  function handle(res) {
    var b = res.body || {};
    if (res.status === 404 || res.status === 410) { fatal(b.error || 'Sala não encontrada.'); return; }
    if (res.status !== 200) { if (b.error) toast(b.error); return; }

    if (b.public) {
      // Not (or no longer) a member of this room.
      storeDel(roomKey(code));
      ids = {};
      stopped = true;
      showJoin(b.public);
      return;
    }
    if (b.unchanged) {
      offset = b.now * 1000 - Date.now();
      if (view) { view.host_online = b.host_online; renderHostBanner(); }
      return;
    }
    if (b.view) apply(b.view);
  }

  function apply(v) {
    offset = v.now * 1000 - Date.now();
    view = v;
    showLesson(v.lesson);
    render();
  }

  // ----- join -----

  function showJoin(pub) {
    showLesson(pub.lesson);
    $('join-code').textContent = pub.code;
    $('join-sub').textContent = pub.full
      ? 'A sala está cheia.'
      : (pub.phase === 'lobby' ? 'O jogo ainda não começou.' : 'O jogo já começou — entras na próxima pergunta.')
        + ' ' + pub.player_count + (pub.player_count === 1 ? ' jogador' : ' jogadores') + ' na sala.';
    $('join-name').value = storeGet(KEY_NAME) || '';
    setScreen('s-join');
  }

  function initJoinForm() {
    $('join-form').addEventListener('submit', function (ev) {
      ev.preventDefault();
      var name = $('join-name').value.trim();
      var errEl = $('join-error');
      if (!name) return;
      var btn = ev.target.querySelector('button[type=submit]');
      btn.disabled = true;
      api('join', { code: code, name: name }).then(function (res) {
        if (res.status !== 200) throw new Error(res.body.error || 'Não foi possível entrar.');
        storeSet(KEY_NAME, name);
        ids = { token: res.body.token, player_id: res.body.player_id };
        storeSet(roomKey(code), ids);
        stopped = false;
        apply(res.body.view);
        schedule();
      }).catch(function (e) {
        errEl.textContent = e.message || 'Sem ligação. Tenta outra vez.';
        show(errEl, true);
      }).then(function () { btn.disabled = false; });
    });
  }

  // ----- actions -----

  function hostAction(name, btn) {
    if (btn) btn.disabled = true;
    api(name, auth()).then(function (res) {
      if (res.status === 200) apply(res.body.view);
      else { toast(res.body.error || 'Algo correu mal.'); poll(); }
    }, function () { toast('Sem ligação. Tenta outra vez.'); })
      .then(function () { if (btn) btn.disabled = false; });
  }

  function answer(choice) {
    if (busy) return;
    busy = true;
    var btns = $('q-options').querySelectorAll('button');
    btns.forEach(function (b, i) {
      b.disabled = true;
      if (i === choice) b.classList.add('selected');
    });
    var data = auth();
    data.choice = choice;
    api('answer', data).then(function (res) {
      if (res.status === 200) apply(res.body.view);
      else { toast(res.body.error || 'Algo correu mal.'); poll(); }
    }, function () {
      toast('Sem ligação — a resposta pode não ter chegado.');
      btns.forEach(function (b) { b.disabled = false; b.classList.remove('selected'); });
    }).then(function () { busy = false; });
  }

  // ----- rendering -----

  function isPresenter() { return view.is_host && view.role === 'present'; }

  function render() {
    document.body.classList.toggle('presenter', isPresenter());
    renderHostBanner();
    if (view.phase === 'lobby')    renderLobby();
    if (view.phase === 'question') renderQuestion();
    if (view.phase === 'reveal')   renderReveal();
    if (view.phase === 'podium')   renderPodium();
  }

  function renderHostBanner() {
    show($('host-banner'), !view.is_host && !view.host_online && view.phase !== 'podium');
  }

  function drawQr(target, key) {
    if (qrDone[key] || typeof QRCode === 'undefined') return;
    var size = isPresenter() ? 280 : 200;
    new QRCode(target, { text: roomUrl(code), width: size, height: size, colorDark: '#1e293b', colorLight: '#fdfaf4' });
    qrDone[key] = true;
  }

  function playerChip(p) {
    var me = view.me && view.me.id === p.id;
    var chip = el('span', 'chip' + (me ? ' me' : '') + (p.active ? '' : ' away'));
    chip.appendChild(el('span', null, p.avatar));
    chip.appendChild(el('span', null, p.name + (p.is_host ? ' ⭐' : '')));
    return chip;
  }

  function settingsText() {
    return (view.role === 'play' ? 'Anfitrião joga' : 'Anfitrião apresenta') + ' · ' +
           (view.pace === 'timed' ? 'Com tempo' : 'Sem pressa') + ' · ' + view.q_total + ' perguntas';
  }

  function renderLobby() {
    lastQuestionKey = '';
    var host = view.is_host;
    show($('lobby-host'), host);
    show($('lobby-player'), !host);
    if (host) {
      $('lobby-code').textContent = code;
      $('lobby-link').textContent = roomUrl(code);
      drawQr($('qr-box'), 'lobby');
    } else if (view.me) {
      $('lobby-me-avatar').textContent = view.me.avatar;
      $('lobby-me-name').textContent = view.me.name;
    }

    var list = $('lobby-players');
    list.textContent = '';
    view.players.forEach(function (p) { list.appendChild(playerChip(p)); });
    var n = view.players.length;
    $('lobby-count').textContent = n + (n === 1 ? ' jogador' : ' jogadores');
    $('lobby-settings').textContent = settingsText();

    var canStart = view.players.some(function (p) { return !p.is_host; });
    show($('btn-start'), host);
    $('btn-start').disabled = !canStart;
    show($('lobby-start-hint'), host && !canStart);
    show($('lobby-wait'), !host);
    setScreen('s-lobby');
  }

  function progressText() {
    return 'Pergunta ' + (view.q_index + 1) + ' / ' + view.q_total;
  }

  function optionNode(text, i, interactive) {
    var node = el(interactive ? 'button' : 'div', 'option-btn');
    if (interactive) node.type = 'button';
    node.appendChild(el('span', 'option-letter', LETTERS[i]));
    node.appendChild(el('span', null, text));
    return node;
  }

  function renderQuestion() {
    var q  = view.question;
    var me = view.me;

    if (me && !me.eligible) { setScreen('s-wait'); return; }

    $('q-progress').textContent = progressText();
    $('q-text').textContent = q.text;

    var answered = me && me.answer;
    var key = view.q_index + ':' + (answered ? answered.choice : '-');
    if (key !== lastQuestionKey) {
      lastQuestionKey = key;
      var box = $('q-options');
      box.textContent = '';
      q.options.forEach(function (opt, i) {
        var node = optionNode(opt, i, !!me);
        if (me) {
          if (answered) {
            node.disabled = true;
            if (answered.choice === i) node.classList.add('selected');
          } else {
            node.addEventListener('click', function () { answer(i); });
          }
        }
        box.appendChild(node);
      });
    }

    $('q-status').textContent = answered ? 'Resposta enviada! À espera dos outros…' : '';
    $('q-count').textContent = q.answered + ' / ' + q.eligible + ' responderam';

    show($('q-host'), view.is_host);
    show($('btn-close'), view.is_host && view.pace === 'relaxed');
    show($('q-timer'), !!q.deadline);
    show($('q-timer-bar'), !!q.deadline);
    tick();
    setScreen('s-question');
  }

  function rankRow(p) {
    var me  = view.me && view.me.id === p.id;
    var row = el('div', 'rank-row' + (me ? ' me' : '') + (p.active ? '' : ' away'));
    row.appendChild(el('span', 'rank-pos', p.rank + '.'));
    row.appendChild(el('span', 'text-xl', p.avatar));
    row.appendChild(el('span', 'flex-1 font-semibold text-slate-900 truncate', p.name + (me ? ' (tu)' : '')));
    row.appendChild(el('span', 'font-black text-slate-900', String(p.score)));
    return row;
  }

  function renderRanking(target, limit) {
    target.textContent = '';
    var shown = view.players.slice(0, limit);
    shown.forEach(function (p) { target.appendChild(rankRow(p)); });
    if (view.me && !shown.some(function (p) { return p.id === view.me.id; })) {
      var mine = view.players.filter(function (p) { return p.id === view.me.id; })[0];
      if (mine) {
        target.appendChild(el('div', 'text-center text-xs py-1', '⋯'));
        target.appendChild(rankRow(mine));
      }
    }
    if (!view.players.length) target.appendChild(el('div', 'text-sm p-3 text-center', 'Sem jogadores.'));
  }

  function renderReveal() {
    var q  = view.question;
    var me = view.me;
    var mine = me && me.answer;

    $('r-progress').textContent = progressText();
    $('r-text').textContent = q.text;

    var fb = $('r-feedback');
    fb.style.cssText = '';
    if (me && !me.eligible) {
      fb.textContent = '🚪 Entras na próxima pergunta!';
      fb.style.cssText = 'background:var(--card-bg);border:1.5px solid var(--border);color:var(--muted);';
    } else if (me && mine && mine.choice === q.correct) {
      fb.textContent = '🎉 Acertaste! +' + mine.points;
      fb.style.cssText = 'background:#f0fdf4;border:1.5px solid #22c55e;color:#15803d;';
    } else if (me && mine) {
      fb.textContent = '😬 Erraste';
      fb.style.cssText = 'background:#fef2f2;border:1.5px solid #ef4444;color:#b91c1c;';
    } else if (me) {
      fb.textContent = '⌛ Não respondeste';
      fb.style.cssText = 'background:var(--card-bg);border:1.5px solid var(--border);color:var(--muted);';
    } else {
      var right = q.counts[q.correct] || 0;
      fb.textContent = right + ' / ' + q.answered + ' acertaram';
      fb.style.cssText = 'background:var(--card-bg);border:1.5px solid var(--border);color:var(--text);';
    }

    var box = $('r-options');
    box.textContent = '';
    q.options.forEach(function (opt, i) {
      var node = optionNode(opt, i, false);
      if (i === q.correct) {
        node.classList.add(mine && mine.choice === i ? 'correct' : 'reveal');
        node.appendChild(el('span', 'feedback-icon', '✓'));
      } else if (mine && mine.choice === i) {
        node.classList.add('wrong');
        node.appendChild(el('span', 'feedback-icon', '✗'));
      }
      if (isPresenter()) node.appendChild(el('span', 'option-count', String(q.counts[i])));
      box.appendChild(node);
    });

    $('r-explanation-text').textContent = q.explanation;
    renderRanking($('r-ranking'), 5);

    var last = view.q_index + 1 >= view.q_total;
    $('btn-next').textContent = last ? 'Ver pódio 🏆' : 'Próxima pergunta →';
    show($('r-host'), view.is_host);
    show($('r-wait'), !view.is_host);
    setScreen('s-reveal');
  }

  function renderPodium() {
    var top    = view.players.slice(0, 3);
    var order  = [1, 0, 2]; // 2nd, 1st, 3rd
    var height = [140, 100, 70];
    var colors = ['#f59e0b', '#94a3b8', '#b45309'];
    var box = $('p-podium');
    box.textContent = '';
    order.forEach(function (idx) {
      var p = top[idx];
      if (!p) return;
      var col = el('div', 'podium-col');
      col.appendChild(el('div', 'text-4xl mb-1', p.avatar));
      col.appendChild(el('div', 'text-sm font-bold text-slate-900 truncate', p.name));
      col.appendChild(el('div', 'text-xs mb-2', p.score + ' pts'));
      var step = el('div', 'podium-step', String(p.rank));
      step.style.height = height[idx] + 'px';
      step.style.background = colors[idx];
      step.style.animationDelay = (idx * 0.2) + 's';
      col.appendChild(step);
      box.appendChild(col);
    });

    var meBox = $('p-me');
    var me = view.me;
    if (me) {
      var mine = view.players.filter(function (p) { return p.id === me.id; })[0];
      meBox.textContent = '';
      meBox.appendChild(el('div', 'text-3xl mb-1', me.avatar));
      meBox.appendChild(el('div', 'text-lg font-black text-slate-900',
        (mine ? mine.rank + '.º lugar' : '') + ' · ' + me.score + ' pontos'));
      meBox.appendChild(el('div', 'text-sm', me.correct + ' / ' + view.q_total + ' certas'));
    }
    show(meBox, !!me);

    renderRanking($('p-ranking'), view.players.length);
    show($('p-host'), view.is_host);
    show($('p-back'), !view.is_host);
    setScreen('s-podium');
  }

  // ----- countdown -----

  function tick() {
    if (!view || view.phase !== 'question' || !view.question.deadline) return;
    var q        = view.question;
    var total    = (q.deadline - q.started_at) * 1000;
    var remain   = q.deadline * 1000 - serverNow();
    var secs     = Math.max(0, Math.ceil(remain / 1000));
    var timer    = $('q-timer');
    timer.textContent = secs + 's';
    timer.classList.toggle('timer-low', secs <= 5);
    $('q-timer-bar').firstElementChild.style.width = Math.max(0, Math.min(100, remain / total * 100)) + '%';

    // Deadline passed — ask the server right away so the question closes promptly.
    if (remain < -GRACE_MS - 200 && expiryPolled !== view.q_index) {
      expiryPolled = view.q_index;
      poll();
    }
  }

  // ----- init -----

  function initGame() {
    initJoinForm();
    $('btn-start').addEventListener('click', function () { hostAction('start', this); });
    $('btn-close').addEventListener('click', function () { hostAction('close', this); });
    $('btn-next').addEventListener('click', function () { hostAction('next', this); });
    $('btn-restart').addEventListener('click', function () { hostAction('restart', this); });
    $('btn-end').addEventListener('click', function () { storeDel(roomKey(code)); });

    $('btn-share').addEventListener('click', function () {
      var url = roomUrl(code);
      if (navigator.share) {
        navigator.share({ title: 'X.Plorers — Jogar em grupo', text: 'Entra no jogo ' + code, url: url }).catch(function () {});
      } else if (navigator.clipboard) {
        navigator.clipboard.writeText(url).then(function () { toast('Link copiado!'); });
      }
    });

    document.querySelectorAll('.btn-show-code').forEach(function (b) {
      b.addEventListener('click', function () {
        $('modal-code').textContent = code;
        drawQr($('modal-qr'), 'modal');
        show($('code-modal'), true);
      });
    });
    $('btn-modal-close').addEventListener('click', function () { show($('code-modal'), false); });

    document.addEventListener('visibilitychange', function () {
      if (document.visibilityState === 'visible' && !stopped) poll();
    });

    setInterval(tick, 200);
    poll();
  }

  document.addEventListener('DOMContentLoaded', function () {
    if (CFG.mode === 'create') initCreate();
    else if (CFG.mode === 'enter') initEnter();
    else if (CFG.mode === 'room') initGame();
  });
}());
