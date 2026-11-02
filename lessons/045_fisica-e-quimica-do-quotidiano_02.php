<?php $reflection_question = 'A vossa vida digital, conforto diário e exploração tecnológica dependem do domínio de forças eletromagnéticas impossíveis de ver a olho nu. Perante esta dependência de forças invisíveis, que outras fontes de energia ou forças fundamentais da natureza poderão existir à nossa volta que ainda não fomos capazes de dominar?'; ?>

<style>
.fqem-card { background: var(--card-bg); border: 1px solid var(--border); border-radius: 1rem; padding: 1.5rem; }
.fqem-tab { border: 2px solid var(--border); border-radius: 999px; padding: 0.4rem 1rem; font-size: 0.8rem; font-weight: 600; cursor: pointer; transition: all 0.2s ease; background: var(--bg); color: var(--text); }
.fqem-tab:hover { border-color: var(--accent); }
.fqem-tab.active { background: var(--accent); border-color: var(--accent); color: white; }
.fqem-panel { min-height: 120px; }
.fqem-fade { animation: fqemFade 0.3s ease; }
@keyframes fqemFade { from { opacity: 0; transform: translateY(4px); } to { opacity: 1; transform: none; } }
.fqem-range { width: 100%; accent-color: var(--accent); }
.fqem-btn { background: var(--accent); color: white; border-radius: 999px; padding: 0.5rem 1.2rem; font-size: 0.85rem; font-weight: 600; cursor: pointer; border: none; }
.fqem-off-item { transition: all 0.4s ease; }
.fqem-off .fqem-off-item { opacity: 0.25; filter: grayscale(1); transform: scale(0.95); }
.fqem-wire { position: relative; height: 3rem; border-radius: 999px; background: linear-gradient(180deg, #f59e0b 0%, #b45309 100%); overflow: hidden; }
.fqem-e { position: absolute; top: 50%; width: 0.7rem; height: 0.7rem; margin-top: -0.35rem; border-radius: 999px; background: #1e3a8a; box-shadow: 0 0 6px #93c5fd; }
.fqem-nail { height: 1.1rem; border-radius: 0.3rem; background: #94a3b8; position: relative; }
.fqem-coil { position: absolute; inset: -0.35rem 0; background: repeating-linear-gradient(90deg, #d97706 0 3px, transparent 3px 7px); border-radius: 0.3rem; }
.fqem-clips { font-size: 1.3rem; line-height: 1.6; min-height: 2.2rem; letter-spacing: 0.1rem; }
.fqem-rotor { width: 9rem; height: 9rem; margin: 0 auto; position: relative; }
.fqem-rotor-inner { position: absolute; inset: 1.5rem; border-radius: 999px; border: 3px dashed var(--border); display: flex; align-items: center; justify-content: center; }
.fqem-spin { animation: fqemSpin 0.8s linear infinite; }
@keyframes fqemSpin { to { transform: rotate(360deg); } }
.fqem-pole { position: absolute; top: 50%; margin-top: -1.5rem; width: 1.6rem; height: 3rem; border-radius: 0.4rem; display: flex; align-items: center; justify-content: center; color: white; font-weight: 800; font-size: 0.8rem; }
.fqem-step { border-left: 3px solid var(--border); padding: 0.4rem 0 0.4rem 1rem; margin-bottom: 0.6rem; transition: border-color 0.2s ease; }
.fqem-step.active { border-color: var(--accent); }
</style>

<section data-label="Apagão" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">1. Um Mundo Ligado à Ficha 🔌</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Imagina que, de repente, todas as forças elétricas e magnéticas do planeta desapareciam. O <strong>eletromagnetismo</strong> é o "feiticeiro" invisível do mundo moderno. Carrega no botão e vê o que acontecia em menos de um segundo.</p>

  <div class="fqem-card" id="fqemWorld">
    <div class="grid grid-cols-3 md:grid-cols-6 gap-3 text-center mb-4">
      <div class="fqem-off-item"><div class="text-3xl">📱</div><div class="text-xs mt-1">Telemóveis</div></div>
      <div class="fqem-off-item"><div class="text-3xl">🌐</div><div class="text-xs mt-1">Internet</div></div>
      <div class="fqem-off-item"><div class="text-3xl">💡</div><div class="text-xs mt-1">Luzes</div></div>
      <div class="fqem-off-item"><div class="text-3xl">🏥</div><div class="text-xs mt-1">Hospitais</div></div>
      <div class="fqem-off-item"><div class="text-3xl">🚆</div><div class="text-xs mt-1">Transportes</div></div>
      <div class="fqem-off-item"><div class="text-3xl">⚛️</div><div class="text-xs mt-1">Átomos</div></div>
    </div>
    <div class="flex items-center gap-3 flex-wrap">
      <button class="fqem-btn" id="fqemWorldBtn">⚡ Desligar o eletromagnetismo</button>
      <p class="text-sm" id="fqemWorldMsg" style="color:var(--muted);">Tudo a funcionar normalmente.</p>
    </div>
  </div>
</section>

<section data-label="Corrente" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">2. A Autoestrada de Eletrões 🛣️</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">A eletricidade não é magia: é <strong>movimento</strong>. Nos metais (os <strong>condutores</strong>), os eletrões não estão presos a um único átomo e podem saltar livremente. Quando uma pilha aplica uma "pressão" — a <strong>tensão</strong> ou voltagem — obriga milhões de milhões de eletrões a correr todos na mesma direção. Esse fluxo organizado é a <strong>corrente elétrica</strong>.</p>

  <div class="fqem-card">
    <p class="text-sm font-semibold mb-3">🔋 Aumenta a tensão e vê os eletrões dentro do fio de cobre:</p>
    <div class="fqem-wire mb-4" id="fqemWire"></div>
    <input type="range" class="fqem-range" id="fqemVolt" min="0" max="10" step="1" value="0" aria-label="Tensão">
    <div class="flex justify-between text-xs mt-1" style="color:var(--muted);"><span>Sem pilha</span><span id="fqemVoltLabel">0 — eletrões ao acaso, sem corrente</span><span>Muita tensão</span></div>
  </div>
</section>

<section data-label="Eletroíman" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">3. O Eletroíman: O Casamento Perfeito 🧲</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Durante muito tempo achou-se que eletricidade e ímanes não tinham nada a ver um com o outro. No século XIX descobriu-se algo bizarro: <strong>sempre que uma corrente passa num fio, cria um campo magnético à sua volta</strong>. Enrola um fio de cobre num prego de ferro, liga-o a uma pilha… e o prego torna-se um íman!</p>

  <div class="grid md:grid-cols-2 gap-4">
    <div class="fqem-card">
      <div class="text-2xl mb-2">🧲</div>
      <h3 class="font-bold text-sm mb-1">Íman normal</h3>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">Está sempre "ligado". Não o podes desligar quando te apetece.</p>
    </div>
    <div class="fqem-card" style="background:#1e293b;border-color:#334155;">
      <div class="text-2xl mb-2">🔌</div>
      <h3 class="font-bold text-sm mb-1" style="color:#5eead4;">Eletroíman</h3>
      <p class="text-xs leading-relaxed" style="color:#cbd5e1;">Liga-se e desliga-se com um simples interruptor. É por isso que pode erguer um carro num ferro-velho… e largá-lo onde for preciso.</p>
    </div>
  </div>
</section>

<section data-label="Motores" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">4. Motores Elétricos: Magia em Movimento ⚙️</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Como se transforma eletricidade invisível no movimento das rodas de um carro ou da hélice de um drone? Com uma regra simples: <strong>polos iguais repelem-se, polos opostos atraem-se</strong>. Avança passo a passo:</p>

  <div class="grid md:grid-cols-2 gap-4 items-center">
    <div class="fqem-card">
      <div class="fqem-rotor">
        <div class="fqem-pole" style="left:0;background:#dc2626;">N</div>
        <div class="fqem-pole" style="right:0;background:#2563eb;">S</div>
        <div class="fqem-rotor-inner"><div class="text-3xl" id="fqemRotor">🧲</div></div>
      </div>
      <p class="text-xs text-center mt-2" style="color:var(--muted);">Ímanes fixos dos lados, eletroíman a rodar no centro</p>
    </div>
    <div>
      <div class="fqem-step" data-step="0"><strong class="text-sm">1. Atração</strong><p class="text-xs" style="color:var(--muted);">O eletroíman do centro é puxado pelo polo oposto de um íman fixo.</p></div>
      <div class="fqem-step" data-step="1"><strong class="text-sm">2. A corrente inverte</strong><p class="text-xs" style="color:var(--muted);">Mesmo antes de chegar, o motor troca o sentido da corrente — e os polos do eletroíman trocam também.</p></div>
      <div class="fqem-step" data-step="2"><strong class="text-sm">3. Repulsão</strong><p class="text-xs" style="color:var(--muted);">Agora os polos são iguais e empurram-no para a frente, em direção ao outro íman.</p></div>
      <div class="fqem-step" data-step="3"><strong class="text-sm">4. Repete, muito depressa</strong><p class="text-xs" style="color:var(--muted);">Atraído, repelido, atraído… o centro gira num círculo sem fim.</p></div>
      <button class="fqem-btn mt-2" id="fqemStepBtn">Próximo passo ▶</button>
    </div>
  </div>
</section>

<section data-label="Casos Reais" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">5. Casos Reais 🚨</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <div class="fqem-card mb-6" style="background:#1e293b;border-color:#334155;">
    <div class="flex items-center gap-4 flex-wrap">
      <div class="text-4xl font-extrabold" style="color:#5eead4;">603 km/h</div>
      <div class="flex-1" style="min-width:200px;">
        <h3 class="font-bold text-sm mb-1" style="color:#f1f5f9;">🚄 O Comboio que Flutua (SCMaglev, Japão)</h3>
        <p class="text-xs leading-relaxed" style="color:#cbd5e1;">Sem rodas em contacto com a calha. Super-eletroímanes arrefecidos a temperaturas extremas criam campos tão fortes que o empurram para cima, a flutuar alguns centímetros acima dos carris. Sem atrito com o chão, atinge velocidades de avião — em silêncio.</p>
      </div>
    </div>
  </div>

  <p class="prose-lesson mb-4"><strong>Carro a combustão vs. carro elétrico.</strong> Compara os dois motores:</p>
  <div class="flex flex-wrap gap-2 mb-4" id="fqemCarTabs">
    <button class="fqem-tab active" data-key="comb">⛽ Gasolina / gasóleo</button>
    <button class="fqem-tab" data-key="ele">🔋 Elétrico</button>
  </div>
  <div id="fqemCarPanel" class="fqem-card fqem-panel"></div>
</section>

<section data-label="Sabias que" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">6. Sabias que...? 💡</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <div class="callout-sabias mb-4">
    <div class="callout-label">Sabias que?</div>
    <p class="text-sm leading-relaxed" style="color:#334155;"><strong>A Terra é um íman gigante.</strong> O núcleo externo é feito de ferro e níquel líquidos em rotação rápida, o que cria um enorme campo magnético protetor — a <strong>magnetosfera</strong>. Ela desvia as tempestades solares, protege a atmosfera e é o que faz a agulha da bússola apontar para Norte.</p>
  </div>
  <div class="callout-sabias">
    <div class="callout-label">Sabias que?</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">A <strong>enguia-elétrica</strong> (que nem é uma enguia verdadeira, mas um peixe amazónico) dispara descargas de mais de <strong>600 volts</strong>. Tem milhares de células chamadas <strong>eletrócitos</strong>, empilhadas como pilhas ligadas em série dentro do corpo.</p>
  </div>
</section>

<section data-label="Laboratório" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">7. Laboratório do Eletroíman 🔬</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Material: uma pilha de 9 V, 1 metro de fio de cobre isolado, um prego de ferro grosso e uma caixa de clipes. Antes de experimentares a sério, testa aqui: quantas voltas de fio dás e se ligas a pilha.</p>

  <div class="fqem-card">
    <div class="fqem-nail mb-4"><div class="fqem-coil" id="fqemCoil" style="right:70%;"></div></div>
    <label class="text-sm font-semibold" for="fqemTurns">Voltas de fio: <span id="fqemTurnsOut">10</span></label>
    <input type="range" class="fqem-range mb-4" id="fqemTurns" min="0" max="50" step="5" value="10">
    <div class="flex items-center gap-3 mb-4">
      <button class="fqem-btn" id="fqemPower">🔋 Ligar a pilha</button>
      <span class="text-sm font-semibold" id="fqemClipCount" style="color:var(--muted);">Desligado — 0 clipes</span>
    </div>
    <div class="fqem-clips" id="fqemClips"></div>
    <p class="text-xs mt-2" style="color:var(--muted);">Simulação ilustrativa — os números reais dependem do teu prego, do fio e da pilha.</p>
  </div>

  <details class="fqem-card mt-4">
    <summary class="font-bold text-sm cursor-pointer">🤔 O que determina a força de um eletroíman? (clica depois de pensares)</summary>
    <p class="text-sm leading-relaxed mt-3" style="color:#334155;">Três coisas: <strong>quantas voltas</strong> de fio há (e quão juntas estão), <strong>quanta corrente</strong> passa no fio e o <strong>núcleo</strong> — um prego de ferro concentra o campo muito melhor do que o ar. Mais voltas e mais corrente = mais clipes agarrados.</p>
  </details>
</section>

<script>
(function () {
  function bindTabs(groupId, panelId, data, render) {
    var group = document.getElementById(groupId);
    var panel = document.getElementById(panelId);
    var btns = group.querySelectorAll('button');
    function show(key) {
      panel.innerHTML = render(data[key]);
      panel.classList.remove('fqem-fade');
      void panel.offsetWidth;
      panel.classList.add('fqem-fade');
      btns.forEach(function (b) { b.classList.toggle('active', b.dataset.key === key); });
    }
    btns.forEach(function (b) { b.addEventListener('click', function () { show(b.dataset.key); }); });
    show(btns[0].dataset.key);
  }
  function head(icon, title) { return '<h4 class="font-bold text-base mb-2" style="color:var(--accent);">' + icon + ' ' + title + '</h4>'; }
  function body(text) { return '<p class="text-sm leading-relaxed" style="color:#334155;">' + text + '</p>'; }

  /* 1. Apagão */
  var world = document.getElementById('fqemWorld');
  var worldBtn = document.getElementById('fqemWorldBtn');
  var worldMsg = document.getElementById('fqemWorldMsg');
  worldBtn.addEventListener('click', function () {
    var off = world.classList.toggle('fqem-off');
    worldBtn.textContent = off ? '🔄 Voltar a ligar' : '⚡ Desligar o eletromagnetismo';
    worldMsg.innerHTML = off ? 'Tudo parou — e até os <strong>átomos do teu corpo</strong> se desfaziam, porque é o eletromagnetismo que os mantém unidos.' : 'Tudo a funcionar normalmente.';
  });

  /* 2. Eletrões no fio */
  var wire = document.getElementById('fqemWire');
  var volt = document.getElementById('fqemVolt');
  var voltLabel = document.getElementById('fqemVoltLabel');
  var dots = [];
  for (var i = 0; i < 14; i++) {
    var d = document.createElement('div');
    d.className = 'fqem-e';
    wire.appendChild(d);
    dots.push({ el: d, x: Math.random() * 100, j: Math.random() * Math.PI * 2 });
  }
  function voltText(v) {
    if (v === 0) return '0 — eletrões ao acaso, sem corrente';
    if (v < 5) return v + ' — corrente fraca';
    return v + ' — corrente forte';
  }
  volt.addEventListener('input', function () { voltLabel.textContent = voltText(parseInt(volt.value, 10)); });
  function tick() {
    var v = parseInt(volt.value, 10);
    dots.forEach(function (p) {
      p.j += 0.15;
      p.x += v * 0.06 + Math.sin(p.j) * 0.15;
      if (p.x > 102) p.x -= 104;
      if (p.x < -2) p.x += 104;
      p.el.style.left = p.x + '%';
      p.el.style.transform = 'translateY(' + (Math.cos(p.j * 1.3) * 6) + 'px)';
    });
    requestAnimationFrame(tick);
  }
  tick();

  /* 4. Motor passo a passo */
  var steps = document.querySelectorAll('.fqem-step');
  var stepBtn = document.getElementById('fqemStepBtn');
  var rotor = document.getElementById('fqemRotor');
  var stepIdx = -1;
  stepBtn.addEventListener('click', function () {
    stepIdx = stepIdx >= steps.length - 1 ? -1 : stepIdx + 1;
    steps.forEach(function (s, i) { s.classList.toggle('active', i === stepIdx); });
    rotor.classList.toggle('fqem-spin', stepIdx === 3);
    rotor.style.transform = ['rotate(-30deg)', 'rotate(150deg)', 'rotate(200deg)'][stepIdx] || '';
    stepBtn.textContent = stepIdx === steps.length - 1 ? '↺ Recomeçar' : 'Próximo passo ▶';
  });

  /* 5. Carros */
  var cars = {
    comb: { icon: '⛽', title: 'Motor a combustão', text: 'Tem <strong>milhares de peças móveis</strong> complexas que provocam micro-explosões de combustível sem parar. Mais peças = mais coisas para desgastar e avariar.' },
    ele: { icon: '🔋', title: 'Motor elétrico', text: 'Tem essencialmente <strong>uma única peça móvel</strong>: o rotor central, que gira graças ao eletromagnetismo. Por isso acelera quase instantaneamente e precisa de muito menos manutenção.' }
  };
  bindTabs('fqemCarTabs', 'fqemCarPanel', cars, function (d) { return head(d.icon, d.title) + body(d.text); });

  /* 7. Simulador do eletroíman */
  var turns = document.getElementById('fqemTurns');
  var turnsOut = document.getElementById('fqemTurnsOut');
  var coil = document.getElementById('fqemCoil');
  var power = document.getElementById('fqemPower');
  var clipCount = document.getElementById('fqemClipCount');
  var clips = document.getElementById('fqemClips');
  var on = false;
  function updateMagnet() {
    var t = parseInt(turns.value, 10);
    turnsOut.textContent = t;
    coil.style.right = (100 - t * 1.6) + '%';
    var n = on ? Math.round(t / 4) : 0;
    clipCount.textContent = on ? 'Ligado — ' + n + (n === 1 ? ' clipe' : ' clipes') : 'Desligado — 0 clipes';
    clipCount.style.color = on ? 'var(--accent)' : 'var(--muted)';
    clips.textContent = new Array(n + 1).join('📎');
  }
  turns.addEventListener('input', updateMagnet);
  power.addEventListener('click', function () {
    on = !on;
    power.textContent = on ? '⏹ Desligar a pilha' : '🔋 Ligar a pilha';
    updateMagnet();
  });
  updateMagnet();
}());
</script>
