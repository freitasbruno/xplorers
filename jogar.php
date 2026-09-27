<?php
/**
 * Group quiz page — one page for every role.
 *   ?criar=<lesson_id>  host settings form
 *   ?c=<CODE>           join / play / present (rendered by assets/js/jogar.js)
 *   (no params)         enter a room code
 */
require_once __DIR__ . '/includes/data.php';
require_once __DIR__ . '/includes/room_store.php';

$criar  = isset($_GET['criar']) ? trim($_GET['criar']) : '';
$code   = isset($_GET['c']) ? strtoupper(trim($_GET['c'])) : '';
$lesson = null;

if ($criar !== '') {
    $lesson = get_lesson($criar);
    $mode   = ($lesson && get_quiz($lesson)) ? 'create' : 'invalid';
} elseif ($code !== '') {
    $mode = room_valid_code($code) ? 'room' : 'enter';
} else {
    $mode = 'enter';
}

$header_mode = 'catalog';
$page_title  = 'Jogar em grupo';
require_once __DIR__ . '/includes/header.php';
?>

<style>
/* JS toggles .hidden on elements whose own class sets display — hidden must win. */
.hidden { display: none !important; }
.choice { display: block; cursor: pointer; border: 1.5px solid var(--border); border-radius: 14px; padding: 12px 14px; background: var(--card-bg); transition: border-color .15s, background .15s; }
.choice:has(input:checked) { border-color: var(--accent); background: var(--accent-light); }
.choice input { position: absolute; opacity: 0; pointer-events: none; }
.field { width: 100%; border: 1.5px solid var(--border); border-radius: 14px; padding: 12px 14px; background: white; font-size: 16px; }
.field:focus { outline: none; border-color: var(--accent); }
.btn-primary { width: 100%; padding: 14px; border-radius: 16px; font-weight: 700; font-size: 14px; color: white; background: var(--accent); }
.btn-primary[disabled] { opacity: .45; cursor: default; }
.btn-secondary { width: 100%; padding: 14px; border-radius: 16px; font-weight: 700; font-size: 14px; color: var(--muted); border: 1.5px solid var(--border); text-align: center; display: block; }
.code-display { font-family: ui-monospace, monospace; font-weight: 900; letter-spacing: .25em; color: var(--text); }
.chip { display: inline-flex; align-items: center; gap: 6px; padding: 6px 12px; border-radius: 999px; background: var(--card-bg); border: 1px solid var(--border); font-size: 14px; font-weight: 600; animation: fadeUp .25s ease both; }
.chip.me { border-color: var(--accent); background: var(--accent-light); }
.chip.away { opacity: .45; }
.screen { display: none; }
.screen.active { display: block; animation: fadeUp .25s ease both; }
.timer-bar { height: 6px; border-radius: 999px; background: var(--border); overflow: hidden; }
.timer-bar > div { height: 100%; background: var(--accent); transition: width .2s linear; }
.timer-num { font-variant-numeric: tabular-nums; }
.timer-low { color: var(--accent); }
.option-count { margin-left: auto; font-weight: 800; font-size: 13px; padding: 2px 10px; border-radius: 999px; background: rgba(0,0,0,.06); }
.rank-row { display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 12px; }
.rank-row.me { background: var(--accent-light); }
.rank-row.away { opacity: .5; }
.rank-pos { width: 28px; font-weight: 800; color: var(--muted); font-size: 13px; text-align: center; }
.podium { display: flex; align-items: flex-end; justify-content: center; gap: 10px; }
.podium-col { flex: 1; max-width: 120px; text-align: center; }
.podium-step { border-radius: 14px 14px 0 0; display: flex; align-items: flex-start; justify-content: center; padding-top: 8px; font-weight: 900; font-size: 22px; color: white; animation: rise .6s ease both; transform-origin: bottom; }
@keyframes rise { from { transform: scaleY(0); } to { transform: scaleY(1); } }
.banner { position: fixed; left: 50%; transform: translateX(-50%); z-index: 60; padding: 8px 16px; border-radius: 999px; font-size: 13px; font-weight: 600; box-shadow: 0 6px 20px -6px rgba(0,0,0,.25); }
.overlay { position: fixed; inset: 0; z-index: 70; background: rgba(30,41,59,.55); display: flex; align-items: center; justify-content: center; padding: 16px; }
#qr-box img, #qr-box canvas, #modal-qr img, #modal-qr canvas { margin: 0 auto; }

/* Presenter (host with "Só apresento") — read from the back of a room */
body.presenter main { max-width: 64rem; }
body.presenter #q-text { font-size: 2.25rem; line-height: 1.2; }
body.presenter #q-options, body.presenter #r-options { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; }
body.presenter .option-btn { font-size: 20px; padding: 20px; }
body.presenter .option-letter { width: 36px; height: 36px; font-size: 16px; }
body.presenter .timer-num { font-size: 3rem; }
body.presenter #lobby-code { font-size: 5rem; }
body.presenter #r-explanation-text { font-size: 18px; }
</style>

<main class="max-w-xl mx-auto px-4 py-8">

<?php if ($mode === 'invalid'): ?>

  <div class="text-center py-16">
    <div class="text-6xl mb-6">🎯</div>
    <h1 class="text-xl font-bold text-slate-900 mb-2">Quiz não encontrado</h1>
    <p class="text-sm mb-8" style="color:var(--muted);">Não há quiz para esta aula.</p>
    <a href="/" class="btn-secondary">← Voltar ao catálogo</a>
  </div>

<?php elseif ($mode === 'create'): ?>

  <!-- CREATE ROOM -->
  <div class="paper rounded-2xl p-4 mb-6 flex items-center gap-3">
    <span class="badge <?= topic_badge_class($lesson['topic_slug']) ?>"><?= htmlspecialchars($lesson['topic_name']) ?></span>
    <span class="text-sm font-semibold text-slate-900 truncate">Aula <?= (int) $lesson['class_number'] ?> — <?= htmlspecialchars($lesson['title']) ?></span>
  </div>

  <h1 class="text-2xl font-black text-slate-900 mb-1">👥 Jogar em grupo</h1>
  <p class="text-sm mb-8" style="color:var(--muted);">Cada pessoa responde no seu telemóvel.</p>

  <form id="create-form" class="flex flex-col gap-6">
    <fieldset>
      <legend class="text-xs font-bold uppercase tracking-wide mb-2" style="color:var(--muted);">Papel</legend>
      <div class="grid grid-cols-2 gap-3">
        <label class="choice"><input type="radio" name="role" value="play" checked>
          <div class="font-bold text-slate-900">🙋 Vou jogar</div>
          <div class="text-xs mt-0.5" style="color:var(--muted);">Também respondes às perguntas</div>
        </label>
        <label class="choice"><input type="radio" name="role" value="present">
          <div class="font-bold text-slate-900">📺 Só apresento</div>
          <div class="text-xs mt-0.5" style="color:var(--muted);">Ecrã para projetar, sem responder</div>
        </label>
      </div>
    </fieldset>

    <fieldset>
      <legend class="text-xs font-bold uppercase tracking-wide mb-2" style="color:var(--muted);">Ritmo</legend>
      <div class="grid grid-cols-2 gap-3">
        <label class="choice"><input type="radio" name="pace" value="relaxed" checked>
          <div class="font-bold text-slate-900">🐢 Sem pressa</div>
          <div class="text-xs mt-0.5" style="color:var(--muted);">Sem cronómetro, ideal para idades diferentes</div>
        </label>
        <label class="choice"><input type="radio" name="pace" value="timed">
          <div class="font-bold text-slate-900">⏱ Com tempo</div>
          <div class="text-xs mt-0.5" style="color:var(--muted);"><?= ROOM_TIME_LIMIT ?>s por pergunta, respostas rápidas valem mais</div>
        </label>
      </div>
    </fieldset>

    <div id="create-name-wrap">
      <label for="create-name" class="text-xs font-bold uppercase tracking-wide mb-2 block" style="color:var(--muted);">Como te chamas?</label>
      <input id="create-name" class="field" maxlength="<?= ROOM_NAME_MAX ?>" autocomplete="nickname" placeholder="O teu nome">
    </div>

    <p id="create-error" class="hidden text-sm font-semibold" style="color:#b91c1c;"></p>
    <button type="submit" class="btn-primary">Criar sala</button>
    <a href="lesson.php?id=<?= htmlspecialchars($lesson['id']) ?>" class="btn-secondary">← Voltar à aula</a>
  </form>

<?php elseif ($mode === 'enter'): ?>

  <!-- ENTER CODE -->
  <div class="text-center pt-6">
    <div class="text-6xl mb-6">👥</div>
    <h1 class="text-2xl font-black text-slate-900 mb-2">Entrar num jogo</h1>
    <p class="text-sm mb-8" style="color:var(--muted);">Escreve o código que aparece no ecrã do anfitrião.</p>
  </div>
  <form id="enter-form" class="flex flex-col gap-4">
    <input id="enter-code" class="field code-display text-center text-3xl uppercase" maxlength="4"
           autocomplete="off" autocapitalize="characters" spellcheck="false" placeholder="KX4P"
           value="<?= htmlspecialchars($code) ?>">
    <?php if ($code !== ''): ?>
      <p class="text-sm font-semibold text-center" style="color:#b91c1c;">Sala não encontrada.</p>
    <?php endif; ?>
    <button type="submit" class="btn-primary">Continuar</button>
  </form>

<?php else: ?>

  <!-- GAME (rendered by jogar.js) -->
  <div id="game-lesson" class="hidden paper rounded-2xl p-3 mb-6 flex items-center gap-3">
    <span id="game-badge" class="badge"></span>
    <span id="game-title" class="text-sm font-semibold text-slate-900 truncate"></span>
  </div>

  <div id="s-loading" class="screen active text-center py-16"><div class="load-spinner mx-auto"></div></div>

  <div id="s-error" class="screen text-center py-12">
    <div class="text-6xl mb-6">🧭</div>
    <h1 id="error-text" class="text-xl font-bold text-slate-900 mb-8"></h1>
    <a href="jogar.php" class="btn-primary block mb-3">Entrar noutro jogo</a>
    <a href="/" class="btn-secondary">← Voltar ao catálogo</a>
  </div>

  <!-- JOIN -->
  <div id="s-join" class="screen">
    <h1 class="text-2xl font-black text-slate-900 mb-1">Entrar no jogo <span class="code-display" id="join-code"></span></h1>
    <p id="join-sub" class="text-sm mb-8" style="color:var(--muted);"></p>
    <form id="join-form" class="flex flex-col gap-4">
      <label for="join-name" class="text-xs font-bold uppercase tracking-wide" style="color:var(--muted);">Como te chamas?</label>
      <input id="join-name" class="field" maxlength="<?= ROOM_NAME_MAX ?>" autocomplete="nickname" placeholder="O teu nome" required>
      <p id="join-error" class="hidden text-sm font-semibold" style="color:#b91c1c;"></p>
      <button type="submit" class="btn-primary">Entrar</button>
    </form>
  </div>

  <!-- LOBBY -->
  <div id="s-lobby" class="screen">
    <div id="lobby-host" class="hidden text-center mb-8">
      <div class="text-xs font-bold uppercase tracking-wide mb-2" style="color:var(--muted);">Código da sala</div>
      <div id="lobby-code" class="code-display text-6xl mb-4"></div>
      <div id="qr-box" class="paper rounded-2xl p-4 inline-block mb-3"></div>
      <div id="lobby-link" class="text-xs mb-4 break-all" style="color:var(--muted);"></div>
      <button id="btn-share" type="button" class="btn-secondary mb-2">🔗 Partilhar link</button>
    </div>

    <div id="lobby-player" class="hidden text-center mb-8">
      <div id="lobby-me-avatar" class="text-6xl mb-3"></div>
      <div class="text-2xl font-black text-slate-900">Estás dentro!</div>
      <div id="lobby-me-name" class="text-sm font-semibold mt-1" style="color:var(--muted);"></div>
    </div>

    <div class="flex items-baseline justify-between mb-3">
      <div class="text-xs font-bold uppercase tracking-wide" style="color:var(--muted);">Jogadores</div>
      <div id="lobby-count" class="text-xs font-bold" style="color:var(--muted);"></div>
    </div>
    <div id="lobby-players" class="flex flex-wrap gap-2 mb-8"></div>

    <div id="lobby-settings" class="text-xs text-center mb-4" style="color:var(--muted);"></div>
    <button id="btn-start" type="button" class="btn-primary hidden">Começar</button>
    <p id="lobby-start-hint" class="hidden text-xs text-center mt-2" style="color:var(--muted);">À espera de pelo menos 1 jogador</p>
    <p id="lobby-wait" class="hidden text-sm text-center font-medium" style="color:var(--muted);">
      <span class="inline-block animate-pulse">⏳</span> À espera que o anfitrião comece…
    </p>
  </div>

  <!-- LATE JOINER -->
  <div id="s-wait" class="screen text-center py-12">
    <div class="text-6xl mb-6">🚪</div>
    <h1 class="text-2xl font-black text-slate-900 mb-2">Entras na próxima pergunta!</h1>
    <p class="text-sm" style="color:var(--muted);">O jogo já começou — aguarda um momento.</p>
  </div>

  <!-- QUESTION -->
  <div id="s-question" class="screen">
    <div class="flex items-center justify-between mb-2">
      <div id="q-progress" class="text-xs font-bold px-3 py-1.5 rounded-full" style="background:var(--accent-light);color:var(--accent);border:1px solid #fda4af;"></div>
      <div id="q-timer" class="timer-num text-2xl font-black text-slate-900"></div>
    </div>
    <div id="q-timer-bar" class="timer-bar mb-6"><div></div></div>
    <div id="q-text" class="text-xl font-black text-slate-900 leading-snug mb-8"></div>
    <div id="q-options" class="flex flex-col gap-3 mb-6"></div>
    <p id="q-status" class="text-sm text-center font-semibold mb-1" style="color:var(--muted);"></p>
    <p id="q-count" class="text-xs text-center mb-6" style="color:var(--muted);"></p>
    <div id="q-host" class="hidden flex flex-col gap-2">
      <button id="btn-close" type="button" class="btn-primary hidden">Fechar pergunta</button>
      <button type="button" class="btn-secondary btn-show-code">Mostrar código da sala</button>
    </div>
  </div>

  <!-- REVEAL -->
  <div id="s-reveal" class="screen">
    <div id="r-progress" class="inline-block text-xs font-bold px-3 py-1.5 rounded-full mb-4" style="background:var(--accent-light);color:var(--accent);border:1px solid #fda4af;"></div>
    <div id="r-feedback" class="rounded-2xl p-4 mb-5 text-center font-black text-lg"></div>
    <div id="r-text" class="text-lg font-black text-slate-900 leading-snug mb-5"></div>
    <div id="r-options" class="flex flex-col gap-3 mb-5"></div>
    <div class="rounded-2xl p-4 mb-6" style="background:#f8faff;border:1.5px solid #bfdbfe;">
      <div class="text-xs font-bold uppercase tracking-wide mb-1.5" style="color:#2563eb;">Explicação</div>
      <p id="r-explanation-text" class="text-sm leading-relaxed text-slate-700"></p>
    </div>
    <div class="text-xs font-bold uppercase tracking-wide mb-2" style="color:var(--muted);">Classificação</div>
    <div id="r-ranking" class="paper rounded-2xl p-2 mb-6"></div>
    <div id="r-host" class="hidden flex flex-col gap-2">
      <button id="btn-next" type="button" class="btn-primary">Próxima pergunta →</button>
      <button type="button" class="btn-secondary btn-show-code">Mostrar código da sala</button>
    </div>
    <p id="r-wait" class="hidden text-sm text-center font-medium" style="color:var(--muted);">
      <span class="inline-block animate-pulse">⏳</span> À espera do anfitrião…
    </p>
  </div>

  <!-- PODIUM -->
  <div id="s-podium" class="screen">
    <h1 class="text-2xl font-black text-slate-900 text-center mb-8">🏆 Pódio</h1>
    <div id="p-podium" class="podium mb-8"></div>
    <div id="p-me" class="paper rounded-2xl p-4 text-center mb-6 hidden"></div>
    <div class="text-xs font-bold uppercase tracking-wide mb-2" style="color:var(--muted);">Classificação final</div>
    <div id="p-ranking" class="paper rounded-2xl p-2 mb-8"></div>
    <div id="p-host" class="hidden flex flex-col gap-2">
      <button id="btn-restart" type="button" class="btn-primary">🔁 Jogar outra vez</button>
      <a id="btn-end" href="#" class="btn-secondary">Terminar</a>
    </div>
    <a id="p-back" href="#" class="btn-secondary hidden">← Voltar à aula</a>
  </div>

  <!-- Floating notices -->
  <div id="net-banner" class="banner hidden" style="top:72px;background:#1e293b;color:white;">A ligar novamente…</div>
  <div id="host-banner" class="banner hidden" style="top:72px;background:#fef3c7;color:#92400e;">O anfitrião perdeu a ligação — o jogo continua quando voltar.</div>
  <div id="toast" class="banner hidden" style="bottom:24px;background:#1e293b;color:white;"></div>

  <!-- Room code modal (host, mid-game) -->
  <div id="code-modal" class="overlay hidden">
    <div class="paper rounded-2xl p-6 text-center w-full max-w-sm">
      <div class="text-xs font-bold uppercase tracking-wide mb-2" style="color:var(--muted);">Código da sala</div>
      <div id="modal-code" class="code-display text-5xl mb-4"></div>
      <div id="modal-qr" class="mb-4"></div>
      <button id="btn-modal-close" type="button" class="btn-primary">Fechar</button>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>

<?php endif; ?>

</main>

<?php if ($mode !== 'invalid'): ?>
<script>
  const JOGAR = <?= json_encode([
      'mode'     => $mode,
      'code'     => $mode === 'room' ? $code : '',
      'lessonId' => $lesson['id'] ?? '',
      'api'      => 'api/sala.php',
  ], JSON_UNESCAPED_UNICODE) ?>;
</script>
<script src="assets/js/jogar.js"></script>
<?php endif; ?>

<?php
$footer_mode = 'catalog';
require_once __DIR__ . '/includes/footer.php';
?>
