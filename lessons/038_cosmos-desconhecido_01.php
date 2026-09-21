<?php $reflection_question = 'Imagina que a tua equipa desenha o primeiro habitat humano num dos mundos mais extremos do Sistema Solar: o oceano escuro de Europa, a superfície esmagadora de Vénus ou a encosta gelada do Monte Olimpo. Que solução de engenharia usarias para que a base não seja destruída logo na primeira semana — e porquê?'; ?>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
.cosmos-desconhecido-card { background: var(--card-bg); border: 1px solid var(--border); border-radius: 1rem; padding: 1.5rem; }
.cosmos-desconhecido-tab { border: 2px solid var(--border); border-radius: 999px; padding: 0.4rem 1rem; font-size: 0.8rem; font-weight: 600; cursor: pointer; transition: all 0.2s ease; background: var(--bg); color: var(--text); }
.cosmos-desconhecido-tab:hover { border-color: var(--accent); }
.cosmos-desconhecido-tab.active { background: var(--accent); border-color: var(--accent); color: white; }
.cosmos-desconhecido-stat { display: inline-block; font-size: 0.75rem; font-weight: 600; padding: 0.25rem 0.7rem; border-radius: 999px; background: var(--bg); border: 1px solid var(--border); color: var(--text); margin: 0 0.4rem 0.4rem 0; }
.cosmos-desconhecido-panel { min-height: 170px; }
.cosmos-desconhecido-fade { animation: cosmosDesconhecidoFade 0.3s ease; }
@keyframes cosmosDesconhecidoFade { from { opacity: 0; transform: translateY(4px); } to { opacity: 1; transform: none; } }

/* Nascimento do Sistema Solar */
.cosmos-desconhecido-dots { display: flex; gap: 0.4rem; justify-content: center; margin-top: 1rem; }
.cosmos-desconhecido-dot { width: 0.6rem; height: 0.6rem; border-radius: 50%; background: var(--border); transition: all 0.2s ease; }
.cosmos-desconhecido-dot.active { background: var(--accent); transform: scale(1.3); }
.cosmos-desconhecido-nav { border: 2px solid var(--border); border-radius: 999px; padding: 0.4rem 1.1rem; font-size: 0.8rem; font-weight: 600; cursor: pointer; background: var(--bg); color: var(--text); transition: all 0.2s ease; }
.cosmos-desconhecido-nav:hover:not(:disabled) { border-color: var(--accent); color: var(--accent); }
.cosmos-desconhecido-nav:disabled { opacity: 0.35; cursor: default; }

/* Camadas planetárias */
.cosmos-desconhecido-rings { position: relative; width: 210px; height: 210px; margin: 0 auto; }
.cosmos-desconhecido-ring { position: absolute; border-radius: 50%; top: 50%; left: 50%; transform: translate(-50%, -50%); transition: box-shadow 0.25s ease, filter 0.25s ease; filter: saturate(0.55) brightness(0.95); }
.cosmos-desconhecido-ring.active { filter: none; box-shadow: 0 0 0 4px var(--accent); z-index: 2; }
.cosmos-desconhecido-ring.crosta { width: 210px; height: 210px; background: #a8865c; }
.cosmos-desconhecido-ring.manto { width: 150px; height: 150px; background: #d9692b; }
.cosmos-desconhecido-ring.nucleo { width: 80px; height: 80px; background: #64748b; }

/* Mergulho em Júpiter */
.cosmos-desconhecido-depth { height: 0.9rem; border-radius: 999px; background: linear-gradient(to right, #fde68a, #fb923c 40%, #64748b 75%, #1e293b); position: relative; margin: 0.5rem 0 1rem; }
.cosmos-desconhecido-depth-marker { position: absolute; top: 50%; width: 1.4rem; height: 1.4rem; border-radius: 50%; background: white; border: 3px solid var(--accent); transform: translate(-50%, -50%); transition: left 0.3s ease; }
.cosmos-desconhecido-range { width: 100%; accent-color: var(--accent); }

/* Fricção de maré */
.cosmos-desconhecido-heat { height: 1.1rem; border-radius: 999px; background: var(--bg); border: 1px solid var(--border); overflow: hidden; }
.cosmos-desconhecido-heat-fill { height: 100%; width: 0; border-radius: 999px; transition: width 0.25s ease, background 0.25s ease; }
.cosmos-desconhecido-action { border: 2px solid var(--accent); border-radius: 999px; padding: 0.45rem 1.2rem; font-size: 0.85rem; font-weight: 700; cursor: pointer; background: var(--accent); color: white; transition: transform 0.1s ease; }
.cosmos-desconhecido-action:active { transform: scale(0.96); }
.cosmos-desconhecido-ghost { border: 2px solid var(--border); border-radius: 999px; padding: 0.45rem 1rem; font-size: 0.8rem; font-weight: 600; cursor: pointer; background: var(--bg); color: var(--muted); }

/* Comparação Vénus */
.cosmos-desconhecido-bar { height: 2rem; border-radius: 0.6rem; display: flex; align-items: center; padding: 0 0.8rem; font-size: 0.8rem; font-weight: 700; color: white; width: 0; transition: width 0.9s ease; white-space: nowrap; }

/* Desafio */
.cosmos-desconhecido-q { border: 1px solid var(--border); border-radius: 0.8rem; background: var(--card-bg); margin-bottom: 0.6rem; }
.cosmos-desconhecido-q summary { cursor: pointer; padding: 0.8rem 1rem; font-weight: 700; font-size: 0.9rem; list-style: none; }
.cosmos-desconhecido-q summary::-webkit-details-marker { display: none; }
.cosmos-desconhecido-q summary::after { content: '+'; float: right; color: var(--accent); font-weight: 700; }
.cosmos-desconhecido-q[open] summary::after { content: '−'; }
.cosmos-desconhecido-q p { padding: 0 1rem 1rem; font-size: 0.85rem; line-height: 1.6; color: #334155; }
.cosmos-desconhecido-chart { position: relative; max-width: 460px; margin: 0 auto; }
</style>

<!-- ───────────── 1. Bairro Cósmico ───────────── -->
<section data-label="Bairro Cósmico" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">1. A Construção do Nosso Bairro Cósmico 🏗️</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Quando olhamos para representações do Sistema Solar, vemos frequentemente esferas perfeitas alinhadas a distâncias iguais. A realidade é muito diferente: um sistema <strong>caótico e incrivelmente complexo</strong>. Percorre as quatro etapas da sua construção.</p>

  <div class="cosmos-desconhecido-card mb-6">
    <div id="cosmosDesconhecidoBirth" class="cosmos-desconhecido-panel text-center"></div>
    <div class="cosmos-desconhecido-dots" id="cosmosDesconhecidoDots"></div>
    <div class="flex justify-between mt-4">
      <button class="cosmos-desconhecido-nav" id="cosmosDesconhecidoPrev">← Anterior</button>
      <button class="cosmos-desconhecido-nav" id="cosmosDesconhecidoNext">Seguinte →</button>
    </div>
  </div>

  <div class="grid md:grid-cols-2 gap-4 mb-2">
    <div class="cosmos-desconhecido-card">
      <div class="text-2xl mb-3">📖</div>
      <h3 class="font-bold text-base mb-2" style="color:var(--accent);">Como o vemos nos livros</h3>
      <p class="text-sm leading-relaxed" style="color:#334155;">Esferas perfeitas, alinhadas a distâncias iguais, cada uma no seu lugar. Bonito, mas enganador.</p>
    </div>
    <div class="cosmos-desconhecido-card" style="background:#1e293b;border-color:#334155;">
      <div class="text-2xl mb-3">🌪️</div>
      <h3 class="font-bold text-base mb-2" style="color:#5eead4;">Como é na realidade</h3>
      <p class="text-sm leading-relaxed" style="color:#cbd5e1;">Um bairro <strong>dinâmico, perigoso e fascinante</strong>: cada planeta é um sistema estrutural único, moldado pela física e pela química — de desertos de rocha estática a tempestades de gás em movimento constante.</p>
    </div>
  </div>
</section>

<!-- ───────────── 2. Rochosos ───────────── -->
<section data-label="Planetas Rochosos" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">2. A Arquitetura dos Planetas Rochosos 🪨</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Mercúrio, Vénus, Terra e Marte partilham o mesmo design básico: um <strong>núcleo denso de metal</strong> (maioritariamente ferro e níquel), um espesso <strong>manto rochoso</strong> e uma fina <strong>crosta</strong> à superfície. Escolhe uma camada para a explorar.</p>

  <div class="grid md:grid-cols-2 gap-6 items-center mb-8">
    <div class="cosmos-desconhecido-rings" aria-hidden="true">
      <div class="cosmos-desconhecido-ring crosta" data-key="crosta"></div>
      <div class="cosmos-desconhecido-ring manto" data-key="manto"></div>
      <div class="cosmos-desconhecido-ring nucleo" data-key="nucleo"></div>
    </div>
    <div>
      <div class="flex flex-wrap gap-2 mb-4" id="cosmosDesconhecidoLayerTabs">
        <button class="cosmos-desconhecido-tab active" data-key="nucleo">Núcleo</button>
        <button class="cosmos-desconhecido-tab" data-key="manto">Manto</button>
        <button class="cosmos-desconhecido-tab" data-key="crosta">Crosta</button>
      </div>
      <div id="cosmosDesconhecidoLayerPanel" class="cosmos-desconhecido-card" style="min-height:120px;"></div>
    </div>
  </div>

  <p class="prose-lesson mb-4">No entanto, as semelhanças ficam por aqui. Visita cada um dos três mundos:</p>

  <div class="flex flex-wrap gap-2 mb-4" id="cosmosDesconhecidoRockyTabs">
    <button class="cosmos-desconhecido-tab active" data-key="mercurio">🌑 Mercúrio</button>
    <button class="cosmos-desconhecido-tab" data-key="venus">🔥 Vénus</button>
    <button class="cosmos-desconhecido-tab" data-key="marte">🔴 Marte</button>
  </div>
  <div id="cosmosDesconhecidoRockyPanel" class="cosmos-desconhecido-card cosmos-desconhecido-panel mb-8"></div>

  <h3 class="font-bold text-base mb-1">Extremos de temperatura à superfície</h3>
  <p class="text-sm mb-3" style="color:var(--muted);">Mercúrio, sem atmosfera, oscila 610 °C entre o dia e a noite. Vénus, com o seu efeito de estufa, mantém-se sempre em brasa.</p>
  <div class="cosmos-desconhecido-card">
    <div class="cosmos-desconhecido-chart"><canvas id="cosmosDesconhecidoTempChart"></canvas></div>
  </div>
</section>

<!-- ───────────── 3. Gigantes ───────────── -->
<section data-label="Gigantes" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">3. Gigantes Gasosos e de Gelo 🌪️</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Depois da Cintura de Asteroides, a arquitetura muda drasticamente: os gigantes exteriores <strong>não têm crosta sólida onde aterrar</strong>. São imensas esferas de fluidos e gases, onde a pressão aumenta brutalmente à medida que mergulhamos.</p>

  <div class="flex flex-wrap gap-2 mb-4" id="cosmosDesconhecidoGiantTabs">
    <button class="cosmos-desconhecido-tab active" data-key="jupiter">🟠 Júpiter</button>
    <button class="cosmos-desconhecido-tab" data-key="saturno">🪐 Saturno</button>
    <button class="cosmos-desconhecido-tab" data-key="urano">🔵 Úrano</button>
    <button class="cosmos-desconhecido-tab" data-key="neptuno">🌀 Neptuno</button>
  </div>
  <div id="cosmosDesconhecidoGiantPanel" class="cosmos-desconhecido-card cosmos-desconhecido-panel mb-8"></div>

  <h3 class="font-bold text-base mb-1">Mergulho em Júpiter 🤿</h3>
  <p class="text-sm mb-3" style="color:var(--muted);">Arrasta o cursor para descer pela atmosfera e ver o que te esperaria.</p>
  <div class="cosmos-desconhecido-card">
    <div class="cosmos-desconhecido-depth"><div class="cosmos-desconhecido-depth-marker" id="cosmosDesconhecidoDiveMarker" style="left:0%;"></div></div>
    <input type="range" class="cosmos-desconhecido-range" id="cosmosDesconhecidoDive" min="0" max="3" step="1" value="0" aria-label="Profundidade do mergulho em Júpiter">
    <div class="flex justify-between text-xs mt-1 mb-4" style="color:var(--muted);"><span>Topo das nuvens</span><span>Profundezas</span></div>
    <div id="cosmosDesconhecidoDivePanel" class="cosmos-desconhecido-panel"></div>
  </div>
</section>

<!-- ───────────── 4. Luas Oceânicas ───────────── -->
<section data-label="Luas Oceânicas" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">4. As Luas Oceânicas: Cofres da Astrobiologia 🌊</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Durante muito tempo procurou-se vida apenas na <strong>Zona Habitável</strong> — a distância ideal ao Sol onde a água se mantém líquida à superfície. A descoberta de luas dinâmicas nos confins gelados do Sistema Solar <strong>reescreveu todas as regras</strong>. Compara os três locais:</p>

  <div class="flex flex-wrap gap-2 mb-4" id="cosmosDesconhecidoMoonTabs">
    <button class="cosmos-desconhecido-tab active" data-key="terra">🌍 Terra</button>
    <button class="cosmos-desconhecido-tab" data-key="europa">🧊 Europa</button>
    <button class="cosmos-desconhecido-tab" data-key="encelado">💨 Encélado</button>
  </div>
  <div id="cosmosDesconhecidoMoonPanel" class="cosmos-desconhecido-card cosmos-desconhecido-panel mb-8"></div>

  <h3 class="font-bold text-base mb-1">O segredo de Europa: a Fricção de Maré 🔥</h3>
  <p class="text-sm mb-3" style="color:var(--muted);">Dobra um clipe de papel repetidamente — o metal aquece. A gravidade de Júpiter faz o mesmo à lua Europa. Experimenta!</p>
  <div class="cosmos-desconhecido-card mb-6">
    <div class="flex items-center justify-between mb-2 text-sm font-semibold">
      <span>📎 Dobras: <span id="cosmosDesconhecidoBendCount">0</span> / 8</span>
      <span id="cosmosDesconhecidoBendTemp" style="color:var(--muted);">Frio</span>
    </div>
    <div class="cosmos-desconhecido-heat mb-4"><div class="cosmos-desconhecido-heat-fill" id="cosmosDesconhecidoHeatFill"></div></div>
    <div class="flex flex-wrap gap-2 items-center mb-3">
      <button class="cosmos-desconhecido-action" id="cosmosDesconhecidoBend">Dobrar o clipe</button>
      <button class="cosmos-desconhecido-ghost" id="cosmosDesconhecidoBendReset">Recomeçar</button>
    </div>
    <p class="text-sm leading-relaxed" id="cosmosDesconhecidoBendMsg" style="color:#334155;">Cada dobra gera um pouco de calor por atrito interno.</p>
  </div>

  <div class="cosmos-desconhecido-card" style="background:#1e293b;border-color:#334155;">
    <div class="text-2xl mb-3">🛰️</div>
    <h3 class="font-bold text-base mb-2" style="color:#5eead4;">A sonda que atravessou um géiser</h3>
    <p class="text-sm leading-relaxed" style="color:#cbd5e1;">A sonda <em>Cassini</em> voou literalmente através das colunas de água de Encélado e detetou <strong>vapor de água</strong>, <strong>moléculas orgânicas complexas</strong> e sinais de <strong>fontes hidrotermais</strong> no fundo do seu oceano escuro.</p>
  </div>
</section>

<!-- ───────────── 5. Sabias que ───────────── -->
<section data-label="Sabias que" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">5. Sabias que...? 🤔</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <div class="callout-sabias mb-6">
    <div class="callout-label">Sabias que?</div>
    <p class="text-sm leading-relaxed" style="color:#334155;"><strong>Chovem diamantes em Úrano e Neptuno!</strong> A pressão extrema nas profundezas esmaga as moléculas de metano com tanta força que os átomos de carbono se cristalizam em diamantes literais, que "chovem" e afundam lentamente em direção ao núcleo.</p>
  </div>

  <div class="callout-sabias mb-4">
    <div class="callout-label">Sabias que?</div>
    <p class="text-sm leading-relaxed" style="color:#334155;"><strong>Um dia em Vénus é mais longo que um ano.</strong> Carrega no botão para comparar.</p>
  </div>
  <div class="cosmos-desconhecido-card mb-6">
    <div class="mb-3">
      <div class="text-xs font-semibold mb-1" style="color:var(--muted);">Um ano em Vénus (volta ao Sol)</div>
      <div class="cosmos-desconhecido-bar" id="cosmosDesconhecidoBarYear" data-w="92.6" style="background:#f59e0b;">225 dias terrestres</div>
    </div>
    <div class="mb-4">
      <div class="text-xs font-semibold mb-1" style="color:var(--muted);">Um dia em Vénus (rotação completa)</div>
      <div class="cosmos-desconhecido-bar" id="cosmosDesconhecidoBarDay" data-w="100" style="background:#ef4444;">243 dias terrestres</div>
    </div>
    <button class="cosmos-desconhecido-action" id="cosmosDesconhecidoBarBtn">Comparar</button>
    <p class="text-xs leading-relaxed mt-3" style="color:var(--muted);">Além disso, a rotação de Vénus é <strong>retrógrada</strong>: roda no sentido inverso ao da Terra, por isso o Sol nasce a oeste e põe-se a leste.</p>
  </div>

  <div class="callout-sabias">
    <div class="callout-label">Sabias que?</div>
    <p class="text-sm leading-relaxed" style="color:#334155;"><strong>Marte tem o maior desfiladeiro conhecido.</strong> O <em>Valles Marineris</em> tem mais de 4.000 km de comprimento — o suficiente para atravessar o continente europeu de uma ponta à outra — e faz o Grand Canyon parecer minúsculo.</p>
  </div>
</section>

<!-- ───────────── 6. Desafio ───────────── -->
<section data-label="Desafio" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">6. Desafio: Arquitetos de Sobrevivência Extraterrestre 🧠</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Imagina que a tua equipa foi contratada por uma agência espacial para desenhar o primeiro <strong>habitat humano</strong> (ou sonda robótica de longa duração) num ambiente extremo. Escolhe o teu terreno e responde às três perguntas de engenharia.</p>

  <div class="flex flex-wrap gap-2 mb-4" id="cosmosDesconhecidoTerrainTabs">
    <button class="cosmos-desconhecido-tab active" data-key="europa">🧊 Fundo de Europa</button>
    <button class="cosmos-desconhecido-tab" data-key="venus">🔥 Superfície de Vénus</button>
    <button class="cosmos-desconhecido-tab" data-key="marte">🔴 Monte Olimpo, Marte</button>
  </div>
  <div id="cosmosDesconhecidoTerrainPanel" class="mb-6"></div>

  <div class="callout-sabias">
    <div class="callout-label">O teu pitch</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">Prepara uma apresentação de <strong>3 minutos</strong> para convencer os outros de que a tua base <strong>não será destruída logo na primeira semana</strong>. Quem a defender melhor?</p>
  </div>
</section>

<script>
(function () {
  /* ── helpers ── */
  function bindTabs(groupId, panelId, data, render) {
    var group = document.getElementById(groupId);
    var panel = document.getElementById(panelId);
    var btns = group.querySelectorAll('button');
    function show(key) {
      panel.innerHTML = render(data[key]);
      panel.classList.remove('cosmos-desconhecido-fade');
      void panel.offsetWidth;
      panel.classList.add('cosmos-desconhecido-fade');
      btns.forEach(function (b) { b.classList.toggle('active', b.dataset.key === key); });
      return key;
    }
    btns.forEach(function (b) { b.addEventListener('click', function () { show(b.dataset.key); }); });
    show(btns[0].dataset.key);
    return show;
  }
  function stats(list) {
    return '<div class="mb-3">' + list.map(function (s) { return '<span class="cosmos-desconhecido-stat">' + s + '</span>'; }).join('') + '</div>';
  }
  function body(text) { return '<p class="text-sm leading-relaxed" style="color:#334155;">' + text + '</p>'; }
  function head(icon, title) { return '<h4 class="font-bold text-base mb-2" style="color:var(--accent);">' + icon + ' ' + title + '</h4>'; }

  /* ── 1. Nascimento do Sistema Solar ── */
  var birth = [
    { icon: '☁️', title: 'Uma nuvem colossal', text: 'Há cerca de <strong>4,6 mil milhões de anos</strong>, onde hoje existe o Sistema Solar havia apenas uma nuvem gigantesca de gás e poeira.' },
    { icon: '🌀', title: 'A gravidade entra em cena', text: 'A gravidade foi o grande "engenheiro" desta obra: puxou o material da nuvem e fê-lo colapsar em direção ao centro.' },
    { icon: '☀️', title: 'O Sol acende-se', text: 'O material acumulado no centro colapsou até <strong>acender o Sol</strong>, a estrela que domina todo o sistema.' },
    { icon: '🪐', title: 'Os restos tornam-se planetas', text: 'Os restos foram agrupados nos planetas que hoje conhecemos. As leis da física e da química fizeram o resto: deserto de rocha estática ou tempestade de gás em constante movimento.' }
  ];
  var birthIdx = 0;
  var birthPanel = document.getElementById('cosmosDesconhecidoBirth');
  var dotsBox = document.getElementById('cosmosDesconhecidoDots');
  var prevBtn = document.getElementById('cosmosDesconhecidoPrev');
  var nextBtn = document.getElementById('cosmosDesconhecidoNext');
  dotsBox.innerHTML = birth.map(function () { return '<span class="cosmos-desconhecido-dot"></span>'; }).join('');
  function showBirth() {
    var d = birth[birthIdx];
    birthPanel.innerHTML = '<div class="text-5xl mb-3">' + d.icon + '</div>' +
      '<div class="text-xs font-semibold mb-1" style="color:var(--muted);">ETAPA ' + (birthIdx + 1) + ' DE ' + birth.length + '</div>' +
      '<h4 class="font-bold text-lg mb-2">' + d.title + '</h4>' +
      '<p class="text-sm leading-relaxed" style="color:#334155;">' + d.text + '</p>';
    birthPanel.classList.remove('cosmos-desconhecido-fade');
    void birthPanel.offsetWidth;
    birthPanel.classList.add('cosmos-desconhecido-fade');
    dotsBox.querySelectorAll('.cosmos-desconhecido-dot').forEach(function (dot, i) { dot.classList.toggle('active', i === birthIdx); });
    prevBtn.disabled = birthIdx === 0;
    nextBtn.disabled = birthIdx === birth.length - 1;
  }
  prevBtn.addEventListener('click', function () { if (birthIdx > 0) { birthIdx--; showBirth(); } });
  nextBtn.addEventListener('click', function () { if (birthIdx < birth.length - 1) { birthIdx++; showBirth(); } });
  showBirth();

  /* ── 2. Camadas dos planetas rochosos ── */
  var layers = {
    nucleo: { icon: '⚙️', title: 'Núcleo', text: 'O coração do planeta: um núcleo <strong>denso de metal</strong>, maioritariamente ferro e níquel.' },
    manto: { icon: '🌋', title: 'Manto', text: 'Um <strong>espesso manto rochoso</strong> rodeia o núcleo, entre o metal e a crosta.' },
    crosta: { icon: '🪨', title: 'Crosta', text: 'A camada onde pisaríamos: uma <strong>fina crosta externa</strong> a proteger tudo o que está por baixo.' }
  };
  var rings = document.querySelectorAll('.cosmos-desconhecido-ring');
  bindTabs('cosmosDesconhecidoLayerTabs', 'cosmosDesconhecidoLayerPanel', layers, function (d) {
    var key = Object.keys(layers).filter(function (k) { return layers[k] === d; })[0];
    rings.forEach(function (r) { r.classList.toggle('active', r.dataset.key === key); });
    return head(d.icon, d.title) + body(d.text);
  });

  /* ── 2. Mercúrio, Vénus e Marte ── */
  var rocky = {
    mercurio: {
      icon: '🌑', title: 'Mercúrio: o Núcleo Exposto',
      stats: ['☀️ 430 °C de dia', '🌙 −180 °C à noite', 'Planeta mais pequeno'],
      text: 'Quase todo composto por um <strong>núcleo metálico gigante</strong>, com apenas uma fina camada de rocha por cima — é incrivelmente denso. Sem atmosfera para distribuir o calor, sofre o <strong>choque térmico mais violento</strong> do Sistema Solar. Ao arrefecer e contrair-se durante milhares de milhões de anos, a crosta enrugou, criando escarpas com quilómetros de altura.'
    },
    venus: {
      icon: '🔥', title: 'Vénus: a Máquina Térmica Descontrolada',
      stats: ['🌡️ 475 °C constantes', '⬇️ Pressão 90× a da Terra', 'Quase do tamanho da Terra'],
      text: 'A atmosfera, espessa e rica em dióxido de carbono, criou um <strong>efeito de estufa descontrolado</strong>: o calor do Sol entra e não consegue escapar. A 475 °C, derretia chumbo e zinco. A pressão esmagadora equivale a estar a <strong>900 metros de profundidade</strong> no nosso oceano — um pesadelo para qualquer sonda.'
    },
    marte: {
      icon: '🔴', title: 'Marte: o Deserto Congelado',
      stats: ['🌋 Monte Olimpo: 21 km', '≈ 3× o Evereste', 'Tectónica parada'],
      text: 'Mais pequeno, arrefeceu mais depressa e a sua <strong>tectónica de placas parou</strong>. Sem reciclar a superfície, os vulcões cresceram no mesmo local durante milhões de anos. Resultado: o <strong>Monte Olimpo</strong>, o maior vulcão do Sistema Solar, com uma base que cobriria quase toda a Península Ibérica.'
    }
  };
  bindTabs('cosmosDesconhecidoRockyTabs', 'cosmosDesconhecidoRockyPanel', rocky, function (d) {
    return head(d.icon, d.title) + stats(d.stats) + body(d.text);
  });

  /* ── 2. Gráfico de temperaturas ── */
  if (window.Chart) {
    new Chart(document.getElementById('cosmosDesconhecidoTempChart').getContext('2d'), {
      type: 'bar',
      data: {
        labels: ['Mercúrio', 'Vénus'],
        datasets: [
          { label: 'Dia', data: [430, 475], backgroundColor: '#f43f5e', borderRadius: 6 },
          { label: 'Noite', data: [-180, 475], backgroundColor: '#38bdf8', borderRadius: 6 }
        ]
      },
      options: {
        responsive: true,
        plugins: {
          legend: { position: 'bottom', labels: { font: { size: 12, family: 'Inter, sans-serif' } } },
          tooltip: { callbacks: { label: function (c) { return ' ' + c.dataset.label + ': ' + c.parsed.y + ' °C'; } } }
        },
        scales: {
          y: { title: { display: true, text: 'Temperatura (°C)' }, grid: { color: 'rgba(100,80,50,0.12)' } },
          x: { grid: { display: false } }
        }
      }
    });
  }

  /* ── 3. Gigantes ── */
  var giants = {
    jupiter: {
      icon: '🟠', title: 'Júpiter: o Rei dos Planetas', tag: 'Gigante gasoso',
      stats: ['> 2× a massa de todos os outros planetas juntos', 'Mancha Vermelha: 300+ anos'],
      text: 'A atmosfera é uma tela de faixas de nuvens de <strong>amoníaco</strong> varridas por ventos violentos. A <strong>Grande Mancha Vermelha</strong> é um anticiclone gigante, maior do que a própria Terra, que roda há mais de 300 anos.'
    },
    saturno: {
      icon: '🪐', title: 'Saturno: o Senhor dos Anéis', tag: 'Gigante gasoso',
      stats: ['Anéis de gelo e rocha', 'Menos denso que a água'],
      text: 'Os anéis são feitos de <strong>milhares de milhões de fragmentos</strong> de gelo e rocha — uns do tamanho de grãos de areia, outros de arranha-céus. E Saturno é tão pouco denso que, se existisse um oceano cósmico suficientemente grande, <strong>flutuaria</strong>!'
    },
    urano: {
      icon: '🔵', title: 'Úrano: a Sopa Gelada', tag: 'Gigante de gelo',
      stats: ['Água + amoníaco + metano', 'Cor azul vibrante'],
      text: 'Mais distante e frio, é composto por uma <strong>"sopa" densa de água, amoníaco e metano</strong> — o metano confere-lhe a cor azul. Nas profundezas, a pressão é tal que, segundo os cientistas, chovem diamantes!'
    },
    neptuno: {
      icon: '🌀', title: 'Neptuno: o Planeta dos Ventos', tag: 'Gigante de gelo',
      stats: ['💨 Ventos > 2.000 km/h', 'Velocidades supersónicas'],
      text: 'Também uma "sopa" de água, amoníaco e metano, é aqui que se registam os <strong>ventos mais velozes do Sistema Solar</strong>, com velocidades supersónicas que ultrapassam os 2.000 km/h.'
    }
  };
  bindTabs('cosmosDesconhecidoGiantTabs', 'cosmosDesconhecidoGiantPanel', giants, function (d) {
    return head(d.icon, d.title) + '<span class="cosmos-desconhecido-stat" style="background:var(--accent);color:white;border-color:var(--accent);">' + d.tag + '</span>' + stats(d.stats) + body(d.text);
  });

  var dive = [
    { icon: '☁️', title: 'Topo das nuvens', text: 'Estás numa tela de <strong>faixas de nuvens de amoníaco</strong>, varridas por ventos violentos. Ainda não sentes o pior.' },
    { icon: '⬇️', title: 'A pressão sobe', text: 'À medida que mergulhas, a <strong>pressão aumenta brutalmente</strong>. Não há superfície sólida onde parar — só fluidos e gases cada vez mais densos.' },
    { icon: '💧', title: 'Hidrogénio líquido metálico', text: 'A pressão é tão extrema que o gás <strong>hidrogénio é comprimido num estado líquido metálico</strong>, capaz de conduzir eletricidade.' },
    { icon: '🧲', title: 'O campo magnético mais letal', text: 'Esse oceano metálico em movimento gera o <strong>campo magnético mais letal do Sistema Solar</strong>. Fim da viagem!' }
  ];
  var diveInput = document.getElementById('cosmosDesconhecidoDive');
  var diveMarker = document.getElementById('cosmosDesconhecidoDiveMarker');
  var divePanel = document.getElementById('cosmosDesconhecidoDivePanel');
  function showDive() {
    var i = parseInt(diveInput.value, 10);
    var d = dive[i];
    divePanel.innerHTML = head(d.icon, d.title) + body(d.text);
    divePanel.classList.remove('cosmos-desconhecido-fade');
    void divePanel.offsetWidth;
    divePanel.classList.add('cosmos-desconhecido-fade');
    diveMarker.style.left = (i / (dive.length - 1) * 96 + 2) + '%';
  }
  diveInput.addEventListener('input', showDive);
  showDive();

  /* ── 4. Luas ── */
  var moons = {
    terra: {
      icon: '🌍', title: 'Terra: dentro da Zona Habitável',
      stats: ['☀️ À distância certa do Sol', '💧 Água líquida à superfície'],
      text: 'A Terra está na <strong>Zona Habitável</strong>: a distância ideal ao Sol onde a água se consegue manter em estado líquido à superfície. Foi aqui que os cientistas procuraram vida durante muito tempo.'
    },
    europa: {
      icon: '🧊', title: 'Europa (lua de Júpiter): o Oceano Oculto',
      stats: ['❄️ Crosta de gelo com vários km', '🌊 Mais água do que todos os oceanos da Terra'],
      text: 'À superfície, uma crosta de gelo rachada que lembra os oceanos árticos. Por baixo, os cientistas têm a certeza de que existe um vasto <strong>oceano global de água líquida salgada</strong>. Não congela, apesar de estar tão longe do Sol, graças à <strong>fricção de maré</strong>.'
    },
    encelado: {
      icon: '💨', title: 'Encélado (lua de Saturno): os Géiseres Espaciais',
      stats: ['🌊 Oceano subterrâneo', '⛲ Géiseres pelas "listras de tigre"'],
      text: 'Talvez o local mais promissor para procurar vida. Além do oceano subterrâneo, a enorme pressão faz a água <strong>jorrar para o espaço</strong> através de fendas na superfície gelada — as chamadas "listras de tigre".'
    }
  };
  bindTabs('cosmosDesconhecidoMoonTabs', 'cosmosDesconhecidoMoonPanel', moons, function (d) {
    return head(d.icon, d.title) + stats(d.stats) + body(d.text);
  });

  /* ── 4. Fricção de maré ── */
  var MAX_BENDS = 8;
  var bends = 0;
  var bendCount = document.getElementById('cosmosDesconhecidoBendCount');
  var bendTemp = document.getElementById('cosmosDesconhecidoBendTemp');
  var heatFill = document.getElementById('cosmosDesconhecidoHeatFill');
  var bendMsg = document.getElementById('cosmosDesconhecidoBendMsg');
  var bendBtn = document.getElementById('cosmosDesconhecidoBend');
  function renderBends() {
    var p = bends / MAX_BENDS;
    bendCount.textContent = bends;
    heatFill.style.width = (p * 100) + '%';
    heatFill.style.background = 'hsl(' + Math.round(200 - p * 200) + ', 85%, 55%)';
    bendTemp.textContent = p === 0 ? 'Frio' : p < 0.5 ? 'A aquecer…' : p < 1 ? 'Quente!' : 'Escaldante! 🔥';
    bendBtn.disabled = bends >= MAX_BENDS;
    bendBtn.style.opacity = bendBtn.disabled ? '0.5' : '1';
    bendMsg.textContent = bends >= MAX_BENDS
      ? 'O metal aquece com o atrito! Em Europa, a gravidade monstruosa de Júpiter estica e comprime a lua enquanto ela orbita — e gera um calor interno imenso que mantém o oceano líquido.'
      : 'Cada dobra gera um pouco de calor por atrito interno.';
  }
  bendBtn.addEventListener('click', function () { if (bends < MAX_BENDS) { bends++; renderBends(); } });
  document.getElementById('cosmosDesconhecidoBendReset').addEventListener('click', function () { bends = 0; renderBends(); });
  renderBends();

  /* ── 5. Vénus: dia vs ano ── */
  var barYear = document.getElementById('cosmosDesconhecidoBarYear');
  var barDay = document.getElementById('cosmosDesconhecidoBarDay');
  var barBtn = document.getElementById('cosmosDesconhecidoBarBtn');
  var barsOn = false;
  function setBars(on) {
    barsOn = on;
    [barYear, barDay].forEach(function (b) { b.style.width = on ? b.dataset.w + '%' : '0'; });
    barBtn.textContent = on ? 'Repor' : 'Comparar';
  }
  barBtn.addEventListener('click', function () { setBars(!barsOn); });

  /* ── 6. Desafio ── */
  var terrains = {
    europa: {
      icon: '🧊', title: 'Fundo do oceano de Europa',
      conds: ['Pressão extrema', 'Água salgada', 'Radiação externa bloqueada pelo gelo'],
      q: [
        ['🧱 De que materiais será feito?', 'A água é <strong>salgada</strong> e a pressão é extrema. Que materiais aguentam a corrosão do sal e o peso de um oceano sob quilómetros de gelo?'],
        ['⚡ Como gera energia?', 'Debaixo do gelo, o Sol não chega. Que outras fontes de calor e energia existem em Europa? Pensa no que mantém o oceano líquido…'],
        ['🏗️ Como lida com as forças?', 'A pressão empurra de todos os lados. Que formas e estruturas distribuem melhor uma força esmagadora?']
      ]
    },
    venus: {
      icon: '🔥', title: 'Superfície de Vénus',
      conds: ['475 °C', 'Pressão colossal (90× a da Terra)', 'Nuvens de ácido sulfúrico'],
      q: [
        ['🧱 De que materiais será feito?', 'Precisas de materiais que não derretam a <strong>475 °C</strong> (calor que funde chumbo e zinco) nem sejam corroídos pelo <strong>ácido sulfúrico</strong>.'],
        ['⚡ Como gera energia?', 'Com uma atmosfera tão espessa e nuvens permanentes, será fácil aproveitar o Sol? Que alternativas existem para alimentar a base?'],
        ['🏗️ Como lida com as forças?', 'A pressão equivale a estar a <strong>900 metros de profundidade</strong> no oceano. Como evitas que a estrutura seja esmagada?']
      ]
    },
    marte: {
      icon: '🔴', title: 'Encosta do Monte Olimpo, em Marte',
      conds: ['Baixa gravidade', 'Tempestades de areia', 'Frio extremo', 'Sem campo magnético'],
      q: [
        ['🧱 De que materiais será feito?', 'Sem <strong>campo magnético</strong> a proteger, e com frio extremo e areia constantemente em movimento, que materiais escolhes para a estrutura?'],
        ['⚡ Como gera energia?', 'Se as <strong>tempestades de areia</strong> cobrirem o céu, o Sol continua a ser fiável? Precisas de um plano B?'],
        ['🏗️ Como lida com as forças?', 'Com <strong>baixa gravidade</strong> e ventos de areia, o que muda no modo de construir e fixar a base ao terreno?']
      ]
    }
  };
  bindTabs('cosmosDesconhecidoTerrainTabs', 'cosmosDesconhecidoTerrainPanel', terrains, function (d) {
    var chips = d.conds.map(function (c) { return '<span class="cosmos-desconhecido-stat">' + c + '</span>'; }).join('');
    var qs = d.q.map(function (q) {
      return '<details class="cosmos-desconhecido-q"><summary>' + q[0] + '</summary><p>' + q[1] + '</p></details>';
    }).join('');
    return '<div class="cosmos-desconhecido-card mb-4">' + head(d.icon, d.title) + '<div>' + chips + '</div></div>' + qs;
  });
}());
</script>
