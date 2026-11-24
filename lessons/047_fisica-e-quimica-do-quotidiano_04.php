<?php $reflection_question = 'Se pudessem desenhar o meio de transporte de 2050 para ir de Lisboa ao Porto, que força da física usariam — e o que teriam de sacrificar: a velocidade, a energia gasta ou o custo de o construir?'; ?>

<style>
.fqtr-card { background: var(--card-bg); border: 1px solid var(--border); border-radius: 1rem; padding: 1.5rem; }
.fqtr-tab { border: 2px solid var(--border); border-radius: 999px; padding: 0.4rem 1rem; font-size: 0.8rem; font-weight: 600; cursor: pointer; transition: all 0.2s ease; background: var(--bg); color: var(--text); }
.fqtr-tab:hover { border-color: var(--accent); }
.fqtr-tab.active { background: var(--accent); border-color: var(--accent); color: white; }
.fqtr-panel { min-height: 120px; }
.fqtr-fade { animation: fqtrFade 0.3s ease; }
@keyframes fqtrFade { from { opacity: 0; transform: translateY(4px); } to { opacity: 1; transform: none; } }
.fqtr-btn { background: var(--accent); color: white; border-radius: 999px; padding: 0.5rem 1.2rem; font-size: 0.85rem; font-weight: 600; cursor: pointer; border: none; }
.fqtr-row { display: grid; grid-template-columns: 9.5rem 1fr 5.5rem; gap: 0.6rem; align-items: center; padding: 0.35rem 0; }
.fqtr-track { height: 0.8rem; border-radius: 999px; background: var(--border); overflow: hidden; }
.fqtr-fill { height: 100%; width: 0; border-radius: 999px; background: var(--accent); transition: width 0.9s ease; }
.fqtr-stack { display: flex; height: 2.2rem; border-radius: 0.75rem; overflow: hidden; border: 1px solid var(--border); font-size: 0.75rem; font-weight: 700; color: white; }
.fqtr-stack div { display: flex; align-items: center; justify-content: center; transition: flex 0.6s ease; white-space: nowrap; overflow: hidden; }
.fqtr-track-mag { display: flex; gap: 4px; }
.fqtr-mag { flex: 1; text-align: center; font-weight: 800; font-size: 0.8rem; padding: 0.35rem 0; border-radius: 0.4rem; color: white; transition: background 0.3s ease; }
.fqtr-check { display: flex; gap: 0.6rem; align-items: flex-start; padding: 0.55rem 0; border-bottom: 1px solid var(--border); cursor: pointer; }
.fqtr-check input { margin-top: 0.2rem; accent-color: var(--accent); }
@media (max-width: 520px) { .fqtr-row { grid-template-columns: 6.5rem 1fr 4.8rem; font-size: 0.75rem; } }
</style>

<section data-label="Mais Rápido" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">1. Mais Rápido, Mais Longe 🚀</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Durante milhares de anos, a coisa mais rápida que um ser humano conseguia fazer era montar um cavalo a galope. Hoje, os astronautas dão a volta à Terra a <strong>28 000 km/h</strong>. As leis da natureza não mudaram: fomos nós que aprendemos a usá-las. Carrega no botão para comparar:</p>

  <div class="fqtr-card">
    <div id="fqtrSpeeds"></div>
    <div class="flex items-center justify-between flex-wrap gap-3 mt-4">
      <button class="fqtr-btn" id="fqtrRaceBtn">Partida! 🏁</button>
      <span class="text-xs" style="color:var(--muted);">Escala comprimida: sem ela, o cavalo seria um ponto invisível ao lado do foguetão.</span>
    </div>
  </div>
</section>

<section data-label="Ação e Reação" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">2. Ação e Reação: A Propulsão a Jato 🎈</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Isaac Newton descobriu que, quando empurramos alguma coisa, essa coisa empurra-nos de volta com a <strong>mesma força, no sentido contrário</strong>. É a 3.ª Lei de Newton, e é ela que move balões, aviões e foguetões. Escolhe um:</p>

  <div class="flex flex-wrap gap-2 mb-4" id="fqtrJetTabs">
    <button class="fqtr-tab active" data-key="balao">🎈 Balão</button>
    <button class="fqtr-tab" data-key="jato">✈️ Motor a jato</button>
    <button class="fqtr-tab" data-key="foguetao">🚀 Foguetão</button>
  </div>
  <div id="fqtrJetPanel" class="fqtr-card fqtr-panel mb-6"></div>

  <div class="fqtr-card" style="background:#1e293b;border-color:#334155;">
    <div class="text-xs font-bold uppercase tracking-wide mb-2" style="color:#5eead4;">Mito ou verdade?</div>
    <p class="text-sm leading-relaxed" style="color:#e2e8f0;">"O foguetão sobe porque empurra o ar." <strong>Mito!</strong> O foguetão empurra os <strong>seus próprios gases</strong> para baixo, e os gases empurram-no para cima. Por isso funciona ainda melhor no vácuo do espaço, onde não há ar nenhum.</p>
  </div>
</section>

<section data-label="Maglev" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">3. O Comboio que Levita 🧲</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Os comboios <strong>Maglev</strong> (de "levitação magnética") usam eletroímanes potentes na via e no comboio. Polos iguais repelem-se, e o comboio <strong>flutua</strong> alguns centímetros acima da via. Compara as forças que travam cada comboio:</p>

  <div class="flex flex-wrap gap-2 mb-4" id="fqtrTrainTabs">
    <button class="fqtr-tab active" data-key="rodas">🚆 Comboio com rodas</button>
    <button class="fqtr-tab" data-key="maglev">🧲 Maglev</button>
  </div>
  <div id="fqtrTrainPanel" class="fqtr-card fqtr-panel mb-6"></div>

  <p class="prose-lesson mb-4"><strong>Mas como avança, sem rodas nem motor a jato?</strong> Os ímanes da via trocam de polo em sequência: puxam o comboio pela frente e empurram-no por trás. Carrega no botão e vê a "onda magnética" a passar:</p>
  <div class="fqtr-card">
    <div class="text-center text-2xl mb-2" id="fqtrTrain" style="transition:transform 0.5s ease;">🚄</div>
    <div class="fqtr-track-mag" id="fqtrMagTrack"></div>
    <div class="flex items-center gap-3 mt-4 flex-wrap">
      <button class="fqtr-btn" id="fqtrMagBtn">Ligar os ímanes ▶</button>
      <span class="text-xs" style="color:var(--muted);"><span style="color:#dc2626;font-weight:700;">N</span> e <span style="color:#2563eb;font-weight:700;">S</span>: os polos de cada íman da via.</span>
    </div>
  </div>
</section>

<section data-label="Carro Elétrico" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">4. Carros Elétricos e Baterias 🔋</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Imagina 100 unidades de energia no depósito ou na bateria. Quantas chegam mesmo às rodas?</p>

  <div class="fqtr-card mb-6">
    <div class="flex flex-wrap gap-2 mb-4" id="fqtrEffTabs">
      <button class="fqtr-tab active" data-key="gasolina">⛽ Motor a gasolina</button>
      <button class="fqtr-tab" data-key="eletrico">🔌 Motor elétrico</button>
    </div>
    <div class="fqtr-stack mb-3">
      <div id="fqtrEffMove" style="background:#16a34a;flex:25;">Movimento</div>
      <div id="fqtrEffLoss" style="background:#dc2626;flex:75;">Calor perdido</div>
    </div>
    <div id="fqtrEffPanel" class="fqtr-panel" style="min-height:70px;"></div>
  </div>

  <div class="grid md:grid-cols-2 gap-4">
    <div class="fqtr-card">
      <div class="text-2xl mb-2">♻️</div>
      <h3 class="font-bold text-sm mb-1">Travar para carregar</h3>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">Quando um carro elétrico trava, o motor funciona ao contrário, como um <strong>gerador</strong>: transforma o movimento outra vez em eletricidade e carrega a bateria. Chama-se <strong>travagem regenerativa</strong>.</p>
    </div>
    <div class="fqtr-card">
      <div class="text-2xl mb-2">🔋</div>
      <h3 class="font-bold text-sm mb-1">O futuro das baterias</h3>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">As baterias de <strong>iões de lítio</strong> guardam energia ao empurrar partículas de lítio para um dos lados. O futuro: baterias mais leves, que carregam mais depressa, usam materiais mais fáceis de encontrar (como o <strong>sódio</strong>) e se podem reciclar.</p>
    </div>
  </div>
</section>

<section data-label="Casos Reais" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">5. Casos Reais 🚨</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <div class="grid md:grid-cols-2 gap-4">
    <div class="fqtr-card">
      <div class="text-2xl mb-2">🇨🇳</div>
      <h3 class="font-bold text-sm mb-1">O Maglev de Xangai</h3>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">Desde 2004 liga o aeroporto à cidade: cerca de <strong>30 km em pouco mais de 7 minutos</strong>, e chegou aos 431 km/h com passageiros. No Japão, um Maglev de testes bateu o recorde mundial em 2015: <strong>603 km/h</strong>.</p>
    </div>
    <div class="fqtr-card">
      <div class="text-2xl mb-2">🌕</div>
      <h3 class="font-bold text-sm mb-1">O gigante Saturn V</h3>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">O foguetão da Apollo media <strong>110 metros</strong>, mais do que a Torre dos Clérigos (75 m). Queimava toneladas de combustível por segundo para cumprir uma regra simples: gases para baixo, foguetão para cima.</p>
    </div>
  </div>
</section>

<section data-label="Sabias que" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">6. Sabias que...? 💡</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <div class="callout-sabias mb-4">
    <div class="callout-label">Sabias que?</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">Os aviões a jato voam a <strong>10 a 12 km de altitude</strong> porque aí o ar é muito mais rarefeito. Menos ar à frente significa menos resistência, e menos combustível gasto.</p>
  </div>
  <div class="callout-sabias mb-4">
    <div class="callout-label">Sabias que?</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">Os <strong>elétricos de Lisboa</strong> andam a eletricidade desde <strong>1901</strong>. Muito antes dos carros elétricos estarem na moda, a cidade já se movia com motores elétricos.</p>
  </div>
  <div class="callout-sabias">
    <div class="callout-label">Sabias que?</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">A Estação Espacial Internacional viaja a cerca de 28 000 km/h. A essa velocidade, iria de <strong>Lisboa ao Porto em menos de 40 segundos</strong>.</p>
  </div>
</section>

<section data-label="Foguetão-Balão" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">7. Experiência: O Foguetão-Balão 🎈</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Vamos ver a 3.ª Lei de Newton em ação, com materiais que há em casa. Marca cada passo:</p>

  <div class="fqtr-card" id="fqtrChecklist">
    <label class="fqtr-check"><input type="checkbox"><span class="text-sm">Passa um fio comprido por dentro de uma palhinha e prende as pontas a duas cadeiras afastadas, bem esticado.</span></label>
    <label class="fqtr-check"><input type="checkbox"><span class="text-sm">Enche um balão, mas não o ates: aperta a ponta com os dedos.</span></label>
    <label class="fqtr-check"><input type="checkbox"><span class="text-sm">Cola o balão à palhinha com fita-cola, com a abertura virada para uma das cadeiras.</span></label>
    <label class="fqtr-check"><input type="checkbox"><span class="text-sm">Larga o balão e vê-o disparar ao longo do fio!</span></label>
    <p class="text-sm font-semibold mt-4" id="fqtrCheckMsg" style="color:var(--muted);">0 de 4 passos feitos.</p>
  </div>
</section>

<script>
(function () {
  function bindTabs(groupId, panelId, data, render) {
    var group = document.getElementById(groupId);
    var panel = document.getElementById(panelId);
    var btns = group.querySelectorAll('[data-key]');
    function show(key) {
      panel.innerHTML = render(data[key]);
      panel.classList.remove('fqtr-fade');
      void panel.offsetWidth;
      panel.classList.add('fqtr-fade');
      btns.forEach(function (b) { b.classList.toggle('active', b.dataset.key === key); });
    }
    btns.forEach(function (b) { b.addEventListener('click', function () { show(b.dataset.key); }); });
    show(btns[0].dataset.key);
  }
  function head(icon, title) { return '<h4 class="font-bold text-base mb-2" style="color:var(--accent);">' + icon + ' ' + title + '</h4>'; }
  function body(text) { return '<p class="text-sm leading-relaxed" style="color:#334155;">' + text + '</p>'; }

  /* 1. Corrida de velocidades (escala logarítmica) */
  var speeds = [
    { icon: '🐎', name: 'Cavalo a galope', v: 70 },
    { icon: '🚗', name: 'Carro na autoestrada', v: 120 },
    { icon: '🚆', name: 'Alfa Pendular', v: 220 },
    { icon: '🧲', name: 'Maglev (recorde)', v: 603 },
    { icon: '✈️', name: 'Avião comercial', v: 900 },
    { icon: '🚀', name: 'Nave em órbita', v: 28000 }
  ];
  var box = document.getElementById('fqtrSpeeds');
  box.innerHTML = speeds.map(function (s, i) {
    return '<div class="fqtr-row"><span class="text-sm">' + s.icon + ' ' + s.name + '</span>' +
      '<div class="fqtr-track"><div class="fqtr-fill" data-i="' + i + '"></div></div>' +
      '<span class="text-xs font-bold text-right">' + s.v.toLocaleString('pt-PT') + ' km/h</span></div>';
  }).join('');
  var fills = box.querySelectorAll('.fqtr-fill');
  var maxLog = Math.log10(30000);
  var raceBtn = document.getElementById('fqtrRaceBtn');
  raceBtn.addEventListener('click', function () {
    fills.forEach(function (f) { f.style.width = '0'; });
    setTimeout(function () {
      fills.forEach(function (f) { f.style.width = (Math.log10(speeds[f.dataset.i].v) / maxLog * 100) + '%'; });
    }, 60);
    raceBtn.textContent = 'De novo! 🏁';
  });

  /* 2. Propulsão */
  var jets = {
    balao: { icon: '🎈', title: 'O balão solto', text: 'Enches um balão e largas sem o atar: o ar sai disparado para trás e o balão voa para a frente. <strong>Ação:</strong> o balão empurra o ar. <strong>Reação:</strong> o ar empurra o balão.' },
    jato: { icon: '✈️', title: 'O motor a jato', text: 'Aspira o ar pela frente, comprime-o, mistura-o com combustível e queima-o. Os gases quentes saem disparados para trás a enorme velocidade, e o avião é empurrado para a frente.' },
    foguetao: { icon: '🚀', title: 'O foguetão', text: 'No espaço não há ar para queimar o combustível, por isso o foguetão leva o seu próprio <strong>oxigénio</strong> (o "oxidante"). Empurra os gases para baixo com uma força gigantesca, e sobe.' }
  };
  bindTabs('fqtrJetTabs', 'fqtrJetPanel', jets, function (d) { return head(d.icon, d.title) + body(d.text); });

  /* 3. Comboios */
  function bar(label, pct, color) {
    return '<div class="mb-2"><div class="flex justify-between text-xs mb-1"><span>' + label + '</span><span style="color:var(--muted);">' + (pct ? '' : 'nenhum') + '</span></div>' +
      '<div class="fqtr-track"><div style="height:100%;border-radius:999px;width:' + pct + '%;background:' + color + ';transition:width 0.5s ease;"></div></div></div>';
  }
  var trains = {
    rodas: { icon: '🚆', title: 'Comboio com rodas', friction: 45, air: 55, text: 'As rodas de aço rolam nos carris e perdem energia com o <strong>atrito</strong>. A alta velocidade, a <strong>resistência do ar</strong> torna-se o maior travão.' },
    maglev: { icon: '🧲', title: 'Maglev', friction: 0, air: 55, text: 'Não toca na via, por isso o atrito das rodas <strong>desaparece</strong>. Só sobra a resistência do ar, e é por isso que o Maglev tem um nariz tão comprido e aerodinâmico.' }
  };
  bindTabs('fqtrTrainTabs', 'fqtrTrainPanel', trains, function (d) {
    return head(d.icon, d.title) + bar('Atrito das rodas nos carris', d.friction, '#f97316') + bar('Resistência do ar', d.air, '#64748b') + '<div class="mt-3">' + body(d.text) + '</div>';
  });

  /* 3b. Onda magnética */
  var track = document.getElementById('fqtrMagTrack');
  var N = 8;
  for (var i = 0; i < N; i++) track.innerHTML += '<div class="fqtr-mag"></div>';
  var mags = track.querySelectorAll('.fqtr-mag');
  var phase = 0, timer = null;
  var train = document.getElementById('fqtrTrain');
  function paint() {
    mags.forEach(function (m, i) {
      var north = (i + phase) % 2 === 0;
      m.textContent = north ? 'N' : 'S';
      m.style.background = north ? '#dc2626' : '#2563eb';
    });
    train.style.transform = 'translateX(' + ((phase % 6) * 12 - 30) + '%)';
  }
  paint();
  var magBtn = document.getElementById('fqtrMagBtn');
  magBtn.addEventListener('click', function () {
    if (timer) { clearInterval(timer); timer = null; magBtn.textContent = 'Ligar os ímanes ▶'; return; }
    timer = setInterval(function () { phase++; paint(); }, 450);
    magBtn.textContent = 'Desligar ⏸';
  });

  /* 4. Eficiência */
  var eff = {
    gasolina: { move: 25, text: 'Só cerca de <strong>um quarto</strong> da energia da gasolina chega às rodas. O resto perde-se, sobretudo em <strong>calor</strong>: é por isso que o motor fica tão quente.' },
    eletrico: { move: 87, text: 'Um motor elétrico transforma cerca de <strong>85 a 90%</strong> da energia da bateria em movimento. E ainda recupera alguma energia sempre que trava.' }
  };
  var effMove = document.getElementById('fqtrEffMove');
  var effLoss = document.getElementById('fqtrEffLoss');
  bindTabs('fqtrEffTabs', 'fqtrEffPanel', eff, function (d) {
    effMove.style.flex = d.move;
    effLoss.style.flex = 100 - d.move;
    effMove.textContent = 'Movimento ~' + d.move;
    effLoss.textContent = 'Perdas ~' + (100 - d.move);
    return body(d.text);
  });

  /* 7. Checklist */
  var boxes = document.querySelectorAll('#fqtrChecklist input');
  var msg = document.getElementById('fqtrCheckMsg');
  boxes.forEach(function (b) {
    b.addEventListener('change', function () {
      var n = Array.prototype.filter.call(boxes, function (x) { return x.checked; }).length;
      msg.innerHTML = n === boxes.length
        ? '🎉 O ar saiu para trás e o balão foi para a frente: acabaste de construir um <strong>motor a jato</strong> de ação e reação!'
        : n + ' de ' + boxes.length + ' passos feitos.';
      msg.style.color = n === boxes.length ? 'var(--accent)' : 'var(--muted)';
    });
  });
}());
</script>
