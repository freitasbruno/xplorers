<?php $reflection_question = 'Se nem a luz consegue escapar a um buraco negro e o tempo estagna no seu limite, será que a singularidade representa o fim absoluto da matéria ou o portal de nascimento para um Universo inteiramente novo?'; ?>

<style>
.cosmos-desconhecido-card { background: var(--card-bg); border: 1px solid var(--border); border-radius: 1rem; padding: 1.5rem; }
.cosmos-desconhecido-tab { border: 2px solid var(--border); border-radius: 999px; padding: 0.4rem 1rem; font-size: 0.8rem; font-weight: 600; cursor: pointer; transition: all 0.2s ease; background: var(--bg); color: var(--text); }
.cosmos-desconhecido-tab:hover { border-color: var(--accent); }
.cosmos-desconhecido-tab.active { background: var(--accent); border-color: var(--accent); color: white; }
.cosmos-desconhecido-panel { min-height: 150px; }
.cosmos-desconhecido-fade { animation: cosmosDesconhecidoFade2 0.3s ease; }
@keyframes cosmosDesconhecidoFade2 { from { opacity: 0; transform: translateY(4px); } to { opacity: 1; transform: none; } }

/* Trampolim */
.bh-trampoline { position: relative; height: 160px; border-radius: 1rem; background: radial-gradient(ellipse at center, #1e293b, #0f172a); overflow: hidden; margin: 0 auto 1rem; }
.bh-dip { position: absolute; left: 50%; top: 50%; border-radius: 50%; background: radial-gradient(circle, #000 0%, #1e293b 70%, transparent 100%); transform: translate(-50%, -50%); transition: width 0.4s ease, height 0.4s ease; }
.bh-orbit-label { position: absolute; bottom: 0.6rem; left: 50%; transform: translateX(-50%); font-size: 0.75rem; color: #94a3b8; }

/* Anatomia — layered rings */
.bh-anatomy { position: relative; width: 220px; height: 220px; margin: 0 auto; }
.bh-ring { position: absolute; border-radius: 50%; top: 50%; left: 50%; transform: translate(-50%, -50%); transition: box-shadow 0.25s ease, filter 0.25s ease; filter: saturate(0.5) brightness(0.9); cursor: pointer; }
.bh-ring.active { filter: none; box-shadow: 0 0 0 4px var(--accent); }
.bh-ring.disco { width: 220px; height: 220px; background: conic-gradient(from 0deg, #f59e0b, #ef4444, #1e293b, #f59e0b); }
.bh-ring.horizonte { width: 130px; height: 130px; background: #1e293b; }
.bh-ring.singularidade { width: 40px; height: 40px; background: #000; }

/* Dilatação do tempo — slider */
.bh-clock-range { width: 100%; accent-color: var(--accent); }
.bh-clock-row { display: flex; justify-content: space-between; align-items: center; gap: 1rem; margin: 1rem 0; }
.bh-clock { text-align: center; }
.bh-clock-face { font-size: 2.2rem; }
.bh-clock-label { font-size: 0.75rem; color: var(--muted); margin-top: 0.2rem; }

/* Gémeos */
.bh-twin-card { border: 1px solid var(--border); border-radius: 0.8rem; padding: 1rem; text-align: center; background: var(--card-bg); }
.bh-stat { display: inline-block; font-size: 0.75rem; font-weight: 600; padding: 0.25rem 0.7rem; border-radius: 999px; background: var(--bg); border: 1px solid var(--border); color: var(--text); margin: 0 0.4rem 0.4rem 0; }
</style>

<section data-label="Espaço-Tempo" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">1. O Tecido do Espaço-Tempo e a Gravidade Extrema 🕳️</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Durante séculos acreditámos, com Newton, que o espaço era um palco rígido e o tempo um relógio universal. Em 1915, Einstein provou que ambos são <strong>maleáveis</strong> — esticados e dobrados pela massa dos corpos celestes. Arrasta o cursor e escolhe o objeto para ver como cada um deforma o tecido do espaço.</p>

  <div class="cosmos-desconhecido-card">
    <div class="bh-trampoline">
      <div class="bh-dip" id="bhDip"></div>
      <div class="bh-orbit-label" id="bhOrbitLabel">A Terra afunda ligeiramente o lençol elástico</div>
    </div>
    <div class="flex flex-wrap gap-2 justify-center" id="bhMassTabs">
      <button class="cosmos-desconhecido-tab active" data-key="terra">🎾 Bola de ténis (Terra)</button>
      <button class="cosmos-desconhecido-tab" data-key="sol">🎳 Bola de bowling (Sol)</button>
      <button class="cosmos-desconhecido-tab" data-key="buraco">⚫ 10 montanhas (Buraco Negro)</button>
    </div>
  </div>
</section>

<section data-label="Anatomia" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">2. Anatomia de um Buraco Negro 🔬</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Um buraco negro estelar nasce quando uma estrela com mais de 20-30 vezes a massa do Sol esgota o seu combustível e colapsa sobre si própria numa fração de segundo. Clica em cada camada para explorar.</p>

  <div class="grid md:grid-cols-2 gap-6 items-center mb-6">
    <div class="bh-anatomy" id="bhAnatomy">
      <div class="bh-ring disco" data-key="disco"></div>
      <div class="bh-ring horizonte" data-key="horizonte"></div>
      <div class="bh-ring singularidade active" data-key="singularidade"></div>
    </div>
    <div id="bhAnatomyPanel" class="cosmos-desconhecido-card cosmos-desconhecido-panel"></div>
  </div>

  <div class="cosmos-desconhecido-card" style="background:#1e293b;border-color:#334155;">
    <div class="text-2xl mb-3">🍝</div>
    <h3 class="font-bold text-base mb-2" style="color:#5eead4;">A Espargueteificação</h3>
    <p class="text-sm leading-relaxed" style="color:#cbd5e1;">Se te aproximasses dos pés de um buraco negro, a atração sentida nos teus pés seria <strong>triliões de vezes superior</strong> à sentida na tua cabeça. Essa diferença de forças esticaria o teu corpo como um fio de massa crua antes mesmo de tocares no horizonte de eventos.</p>
  </div>
</section>

<section data-label="Tempo" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">3. Dilatação do Tempo e Viagens ao Futuro ⏳</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Regra de ouro da Relatividade Geral: <strong>quanto mais forte a gravidade, mais devagar o relógio avança</strong>. Arrasta o cursor para aproximar a nave do horizonte de eventos e vê quanto tempo passa na Terra.</p>

  <div class="cosmos-desconhecido-card">
    <input type="range" class="bh-clock-range" id="bhTimeRange" min="0" max="4" step="1" value="0" aria-label="Proximidade ao buraco negro">
    <div class="flex justify-between text-xs mt-1 mb-2" style="color:var(--muted);"><span>Longe do buraco negro</span><span>Junto ao horizonte de eventos</span></div>
    <div class="bh-clock-row">
      <div class="bh-clock">
        <div class="bh-clock-face">🚀</div>
        <div class="bh-clock-label">Nave: <strong id="bhShipTime">3 horas</strong></div>
      </div>
      <div class="text-2xl" style="color:var(--muted);">↔</div>
      <div class="bh-clock">
        <div class="bh-clock-face">🌍</div>
        <div class="bh-clock-label">Terra: <strong id="bhEarthTime">3 horas</strong></div>
      </div>
    </div>
    <p class="text-sm leading-relaxed text-center" id="bhTimeMsg" style="color:#334155;">Longe da gravidade extrema, o tempo passa praticamente ao mesmo ritmo dos dois lados.</p>
  </div>

  <p class="prose-lesson mt-6 mb-2"><strong>Buracos de verme:</strong> dobra mentalmente uma folha A4 com Lisboa numa ponta e Andrómeda na outra. Se dobrares a folha até os pontos se tocarem e fizeres um furo, criaste um atalho instantâneo. As equações de Einstein admitem estes túneis — mas ainda não sabemos se sobrevivem na natureza sem colapsar.</p>
</section>

<section data-label="Casos Reais" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">4. Casos Reais e Aplicações Práticas 🛰️</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <div class="grid md:grid-cols-3 gap-4 mb-2">
    <div class="cosmos-desconhecido-card">
      <div class="text-3xl mb-2">📸</div>
      <h3 class="font-bold text-sm mb-1">A Primeira Fotografia</h3>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">Em 2019, o Event Horizon Telescope revelou a sombra do buraco negro de M87. Em 2022, fotografou Sagitário A\*, no centro da nossa galáxia.</p>
    </div>
    <div class="cosmos-desconhecido-card">
      <div class="text-3xl mb-2">📡</div>
      <h3 class="font-bold text-sm mb-1">O Teu GPS</h3>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">Os relógios dos satélites GPS avançam ~45 microssegundos mais depressa por dia. Sem correção, o teu telemóvel erraria 10 km por dia.</p>
    </div>
    <div class="cosmos-desconhecido-card">
      <div class="text-3xl mb-2">🎬</div>
      <h3 class="font-bold text-sm mb-1">Interstellar (2014)</h3>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">O Nobel Kip Thorne calculou o buraco negro Gargantua com tal rigor que gerou artigos científicos reais.</p>
    </div>
  </div>
</section>

<section data-label="Sabias que" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">5. Sabias que...? 💡</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <div class="callout-sabias mb-4">
    <div class="callout-label">Sabias que?</div>
    <p class="text-sm leading-relaxed" style="color:#334155;"><strong>A Terra caberia numa moeda de 1 cêntimo.</strong> Se esmagasses o planeta inteiro mantendo toda a sua massa, tornar-se-ia um buraco negro com apenas <strong>1,8 centímetros</strong> de diâmetro.</p>
  </div>
  <div class="callout-sabias mb-4">
    <div class="callout-label">Sabias que?</div>
    <p class="text-sm leading-relaxed" style="color:#334155;"><strong>Ouvimos o choque de dois monstros cósmicos.</strong> Em 2015, o observatório LIGO captou ondas gravitacionais da colisão de dois buracos negros a 1,3 mil milhões de anos-luz — um som breve de "chirp".</p>
  </div>
  <div class="callout-sabias">
    <div class="callout-label">Sabias que?</div>
    <p class="text-sm leading-relaxed" style="color:#334155;"><strong>A ilusão do observador exterior.</strong> Nunca verias um colega cruzar o horizonte de eventos — a imagem dele ficaria cada vez mais lenta e avermelhada, congelada para sempre na fronteira.</p>
  </div>
</section>

<section data-label="Gémeos" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">6. O Paradoxo dos Gémeos Cósmicos 👥</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">A Sofia orbita a escassos quilómetros do horizonte de eventos de um buraco negro supermassivo. No seu cronómetro passam exatamente <strong>2 anos</strong>. O Pedro fica em Portugal.</p>

  <div class="grid md:grid-cols-2 gap-4 mb-6">
    <div class="bh-twin-card">
      <div class="text-3xl mb-2">👩‍🚀</div>
      <h3 class="font-bold text-sm mb-1">Sofia</h3>
      <span class="bh-stat">2 anos de missão</span>
    </div>
    <div class="bh-twin-card">
      <div class="text-3xl mb-2">🧑</div>
      <h3 class="font-bold text-sm mb-1">Pedro</h3>
      <span class="bh-stat">Fica em Portugal</span>
    </div>
  </div>

  <div class="callout-sabias">
    <div class="callout-label">Para pensar</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">Quando a Sofia regressar, que idade terá cada um? Como será o choque do reencontro? Se soubesses que darias um salto de 100 anos para o futuro da Terra, aceitarias o bilhete — que perdas e que ganhos terias?</p>
  </div>
</section>

<script>
(function () {
  function bindTabs(groupId, panelId, data, render) {
    var group = document.getElementById(groupId);
    var panel = document.getElementById(panelId);
    var btns = group.querySelectorAll('button');
    function show(key) {
      if (panel) {
        panel.innerHTML = render(data[key]);
        panel.classList.remove('cosmos-desconhecido-fade');
        void panel.offsetWidth;
        panel.classList.add('cosmos-desconhecido-fade');
      } else {
        render(data[key]);
      }
      btns.forEach(function (b) { b.classList.toggle('active', b.dataset.key === key); });
    }
    btns.forEach(function (b) { b.addEventListener('click', function () { show(b.dataset.key); }); });
    show(btns[0].dataset.key);
  }
  function head(icon, title) { return '<h4 class="font-bold text-base mb-2" style="color:var(--accent);">' + icon + ' ' + title + '</h4>'; }
  function body(text) { return '<p class="text-sm leading-relaxed" style="color:#334155;">' + text + '</p>'; }

  /* 1. Trampolim */
  var masses = {
    terra: { size: 40, label: 'A Terra afunda ligeiramente o lençol elástico — é uma curvatura suave.' },
    sol: { size: 90, label: 'O Sol, muito mais pesado, cria um afundamento acentuado.' },
    buraco: { size: 220, label: 'Um objeto com a massa de dez montanhas cria um poço vertical sem fundo: gravidade extrema.' }
  };
  var dip = document.getElementById('bhDip');
  var orbitLabel = document.getElementById('bhOrbitLabel');
  bindTabs('bhMassTabs', null, masses, function (d) {
    dip.style.width = d.size + 'px';
    dip.style.height = d.size + 'px';
    orbitLabel.textContent = d.label;
  });

  /* 2. Anatomia */
  var anatomy = {
    disco: { icon: '🌀', title: 'Disco de Acreção', text: 'Um turbilhão de gás, poeira e restos de estrelas a velocidades próximas da luz. O atrito aquece o material a milhões de graus — é este anel brilhante que nos permite "ver" o buraco negro.' },
    horizonte: { icon: '⬛', title: 'Horizonte de Eventos', text: 'A fronteira de não retorno. No seu interior, a velocidade necessária para escapar ultrapassa a da luz (300 000 km/s) — por isso nada consegue regressar.' },
    singularidade: { icon: '⚫', title: 'Singularidade Central', text: 'Toda a massa da estrela esmagada num ponto de volume zero e densidade teoricamente infinita. É o ponto de rutura das leis da física.' }
  };
  var rings = document.querySelectorAll('.bh-ring');
  var anatomyPanel = document.getElementById('bhAnatomyPanel');
  function showAnatomy(key) {
    var d = anatomy[key];
    anatomyPanel.innerHTML = head(d.icon, d.title) + body(d.text);
    rings.forEach(function (r) { r.classList.toggle('active', r.dataset.key === key); });
  }
  rings.forEach(function (r) { r.addEventListener('click', function () { showAnatomy(r.dataset.key); }); });
  showAnatomy('singularidade');

  /* 3. Dilatação do tempo */
  var steps = [
    { ship: '3 horas', earth: '3 horas', msg: 'Longe da gravidade extrema, o tempo passa praticamente ao mesmo ritmo dos dois lados.' },
    { ship: '3 horas', earth: '2 anos', msg: 'A gravidade já é forte o suficiente para o relógio da nave começar a atrasar-se em relação à Terra.' },
    { ship: '3 horas', earth: '15 anos', msg: 'Quanto mais perto do horizonte de eventos, maior a diferença — a nave "viaja" cada vez mais para o futuro da Terra.' },
    { ship: '3 horas', earth: '50 anos', msg: 'Poucas horas na nave equivalem a meio século na Terra.' },
    { ship: '3 horas', earth: '100 anos', msg: 'Junto ao horizonte de eventos, 3 horas na nave correspondem a 100 anos na Terra: uma viagem real para o futuro!' }
  ];
  var timeRange = document.getElementById('bhTimeRange');
  var shipTime = document.getElementById('bhShipTime');
  var earthTime = document.getElementById('bhEarthTime');
  var timeMsg = document.getElementById('bhTimeMsg');
  function showTime() {
    var s = steps[parseInt(timeRange.value, 10)];
    shipTime.textContent = s.ship;
    earthTime.textContent = s.earth;
    timeMsg.textContent = s.msg;
  }
  timeRange.addEventListener('input', showTime);
  showTime();
}());
</script>
