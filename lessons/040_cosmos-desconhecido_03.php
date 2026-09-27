<?php $reflection_question = 'O astrónomo Arthur C. Clarke escreveu: "Existem duas possibilidades: ou estamos sozinhos no Universo, ou não estamos. Ambas são igualmente aterrorizadoras." Para ti, qual das duas hipóteses é mais inquietante e porquê?'; ?>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
.cosmos-desconhecido-card { background: var(--card-bg); border: 1px solid var(--border); border-radius: 1rem; padding: 1.5rem; }
.cosmos-desconhecido-tab { border: 2px solid var(--border); border-radius: 999px; padding: 0.4rem 1rem; font-size: 0.8rem; font-weight: 600; cursor: pointer; transition: all 0.2s ease; background: var(--bg); color: var(--text); }
.cosmos-desconhecido-tab:hover { border-color: var(--accent); }
.cosmos-desconhecido-tab.active { background: var(--accent); border-color: var(--accent); color: white; }
.cosmos-desconhecido-panel { min-height: 150px; }
.cosmos-desconhecido-fade { animation: cosmosDesconhecidoFade3 0.3s ease; }
@keyframes cosmosDesconhecidoFade3 { from { opacity: 0; transform: translateY(4px); } to { opacity: 1; transform: none; } }
.cosmos-desconhecido-stat { display: inline-block; font-size: 0.75rem; font-weight: 600; padding: 0.25rem 0.7rem; border-radius: 999px; background: var(--bg); border: 1px solid var(--border); color: var(--text); margin: 0 0.4rem 0.4rem 0; }

/* Zona habitável slider */
.eb-zone-bar { height: 1.4rem; border-radius: 999px; background: linear-gradient(to right, #ef4444 0%, #ef4444 25%, #22c55e 25%, #22c55e 55%, #3b82f6 55%, #3b82f6 100%); position: relative; margin: 1rem 0 0.5rem; }
.eb-zone-marker { position: absolute; top: 50%; width: 1.6rem; height: 1.6rem; border-radius: 50%; background: white; border: 3px solid var(--accent); transform: translate(-50%, -50%); transition: left 0.3s ease; display: flex; align-items: center; justify-content: center; font-size: 0.8rem; }
.eb-zone-range { width: 100%; accent-color: var(--accent); }

/* Transit method */
.eb-transit-track { position: relative; height: 80px; background: #0f172a; border-radius: 1rem; overflow: hidden; margin-bottom: 0.75rem; }
.eb-transit-star { position: absolute; left: 50%; top: 50%; width: 46px; height: 46px; border-radius: 50%; background: radial-gradient(circle, #fde68a, #f59e0b); transform: translate(-50%, -50%); }
.eb-transit-planet { position: absolute; top: 50%; width: 12px; height: 12px; border-radius: 50%; background: #1e293b; transform: translate(-50%, -50%); transition: left 0.05s linear; }
.eb-transit-chart { max-width: 100%; height: 90px !important; }

/* Bioassinatura table */
.eb-table { width: 100%; border-collapse: collapse; font-size: 0.8rem; }
.eb-table th, .eb-table td { border: 1px solid var(--border); padding: 0.5rem 0.6rem; text-align: left; }
.eb-table th { background: var(--bg); font-weight: 700; }
.eb-table tr.eb-selected { outline: 2px solid var(--accent); }
</style>

<section data-label="Zona Habitável" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">1. A Receita da Vida e a Zona Habitável 🪐</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Procuramos três ingredientes: <strong>água líquida</strong>, os <strong>elementos CHNOPS</strong> e uma <strong>fonte estável de energia</strong>. A Zona Habitável ("Caracolinhos de Ouro") é a distância à estrela onde a água se mantém líquida. Arrasta o cursor para viajar do Sol até aos confins do sistema.</p>

  <div class="cosmos-desconhecido-card">
    <div class="eb-zone-bar">
      <div class="eb-zone-marker" id="ebZoneMarker">☀️</div>
    </div>
    <input type="range" class="eb-zone-range" id="ebZoneRange" min="0" max="100" step="1" value="15" aria-label="Distância à estrela">
    <div class="flex justify-between text-xs mt-1 mb-4" style="color:var(--muted);"><span>🔥 Muito perto</span><span>🟢 Zona habitável</span><span>🧊 Muito longe</span></div>
    <div id="ebZonePanel" class="cosmos-desconhecido-panel"></div>
  </div>

  <div class="callout-sabias mt-6">
    <div class="callout-label">A lição dos extremófilos</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">Microrganismos <strong>extremófilos</strong> na Terra vivem em fontes hidrotermais a 120°C, em lagos ácidos ou no gelo da Antártida — provando que a vida é muito mais tenaz do que imaginávamos.</p>
  </div>
</section>

<section data-label="Caça aos Exoplanetas" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">2. A Caça aos Exoplanetas: Como Vemos Mundos Invisíveis? 🔭</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Fotografar um exoplaneta diretamente é como ver um pirilampo junto ao holofote de um estádio. Carrega em "Iniciar trânsito" e observa como a passagem do planeta revela a sua existência através da luz da estrela.</p>

  <div class="cosmos-desconhecido-card mb-6">
    <h3 class="font-bold text-sm mb-2">Método do Trânsito Planetário</h3>
    <div class="eb-transit-track">
      <div class="eb-transit-star"></div>
      <div class="eb-transit-planet" id="ebTransitPlanet" style="left:-10%;"></div>
    </div>
    <canvas id="ebTransitChart" class="eb-transit-chart"></canvas>
    <button class="cosmos-desconhecido-tab active mt-3" id="ebTransitBtn">▶️ Iniciar trânsito</button>
  </div>

  <div class="cosmos-desconhecido-card" style="background:#1e293b;border-color:#334155;">
    <div class="text-2xl mb-3">⚖️</div>
    <h3 class="font-bold text-base mb-2" style="color:#5eead4;">Método da Velocidade Radial</h3>
    <p class="text-sm leading-relaxed" style="color:#cbd5e1;">O planeta não orbita uma estrela imóvel: ambos orbitam um centro de gravidade comum, fazendo a estrela "bambolear". Esse movimento estica e comprime as suas ondas de luz (Efeito Doppler), revelando a presença e a massa do planeta invisível.</p>
  </div>
</section>

<section data-label="James Webb" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">3. O Telescópio James Webb e as Bioassinaturas 🛰️</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Lançado no Natal de 2021, o JWST observa em infravermelho e consegue "ler" a atmosfera de exoplanetas através da <strong>espectroscopia de transmissão</strong>. Cada molécula deixa um código de barras único na luz. Explora os conceitos-chave:</p>

  <div class="flex flex-wrap gap-2 mb-4" id="ebJwstTabs">
    <button class="cosmos-desconhecido-tab active" data-key="espelho">🪞 O Espelho Dourado</button>
    <button class="cosmos-desconhecido-tab" data-key="espectro">🌈 Código de Barras</button>
    <button class="cosmos-desconhecido-tab" data-key="bio">🧬 Bioassinatura</button>
    <button class="cosmos-desconhecido-tab" data-key="dms">🦠 DMS</button>
  </div>
  <div id="ebJwstPanel" class="cosmos-desconhecido-card cosmos-desconhecido-panel"></div>
</section>

<section data-label="Casos Reais" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">4. Casos Reais e Fronteiras de Exploração 🌍</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <div class="grid md:grid-cols-3 gap-4">
    <div class="cosmos-desconhecido-card">
      <div class="text-3xl mb-2">🔴</div>
      <h3 class="font-bold text-sm mb-1">TRAPPIST-1</h3>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">A 40 anos-luz, uma anã vermelha fria alberga 7 planetas rochosos — 3 na zona habitável. O sistema mais estudado pelo James Webb.</p>
    </div>
    <div class="cosmos-desconhecido-card">
      <div class="text-3xl mb-2">🌊</div>
      <h3 class="font-bold text-sm mb-1">K2-18b</h3>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">Metano, CO₂ e um possível sinal de DMS levantam a hipótese de um oceano global sob atmosfera rica em hidrogénio.</p>
    </div>
    <div class="cosmos-desconhecido-card">
      <div class="text-3xl mb-2">🧊</div>
      <h3 class="font-bold text-sm mb-1">Europa e Encélado</h3>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">Sem sair do Sistema Solar: oceanos subterrâneos e fontes hidrotermais, mantidos líquidos pela fricção de maré.</p>
    </div>
  </div>
</section>

<section data-label="Sabias que" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">5. Sabias que...? 💡</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <div class="callout-sabias mb-4">
    <div class="callout-label">Sabias que?</div>
    <p class="text-sm leading-relaxed" style="color:#334155;"><strong>Em 1995 não conhecíamos nenhum exoplaneta.</strong> Só com a descoberta de 51 Pegasi b (Nobel 2019) confirmámos que existem planetas fora do Sistema Solar. Hoje conhecemos mais de <strong>5 500</strong>.</p>
  </div>
  <div class="callout-sabias mb-4">
    <div class="callout-label">Sabias que?</div>
    <p class="text-sm leading-relaxed" style="color:#334155;"><strong>Os astronautas mais resistentes são microscópicos.</strong> Os Tardígrados sobrevivem entre -200°C e +150°C e até ao vácuo espacial absoluto.</p>
  </div>
  <div class="callout-sabias">
    <div class="callout-label">O Paradoxo de Fermi</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">Com 13 mil milhões de anos de galáxia e milhares de milhões de mundos habitáveis, uma civilização interestelar já teria colonizado tudo. Como resumiu Fermi: <em>"Onde está toda a gente?"</em></p>
  </div>
</section>

<section data-label="Veredito" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">6. O Veredito Astrobiológico 🔍</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-4">A Agência Espacial Europeia só pode enviar uma sonda. Clica em cada planeta para analisar os dados e decidir o destino.</p>

  <table class="eb-table mb-4">
    <thead>
      <tr><th></th><th>Apolo</th><th>Bóreas</th><th>Ceres-X</th></tr>
    </thead>
    <tbody>
      <tr><td>Estrela</td><td>Anã Amarela</td><td>Anã Vermelha Ativa</td><td>Anã Laranja Estável</td></tr>
      <tr><td>Órbita</td><td>Bordo interior da zona habitável</td><td>Fora da zona habitável</td><td>Centro da zona habitável</td></tr>
      <tr><td>Composição</td><td>Rochoso, tamanho da Terra</td><td>Gigante gasoso</td><td>Rochoso, 1,3× a Terra</td></tr>
      <tr><td>Gases</td><td>Água, muito CO₂</td><td>Metano, Amoníaco</td><td>Água, Ozono, Metano</td></tr>
    </tbody>
  </table>

  <div class="flex flex-wrap gap-2 mb-4" id="ebVerdictTabs">
    <button class="cosmos-desconhecido-tab active" data-key="apolo">🟡 Apolo</button>
    <button class="cosmos-desconhecido-tab" data-key="boreas">🔴 Bóreas</button>
    <button class="cosmos-desconhecido-tab" data-key="ceres">🟢 Ceres-X</button>
  </div>
  <div id="ebVerdictPanel" class="cosmos-desconhecido-card cosmos-desconhecido-panel"></div>
</section>

<script>
(function () {
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
    }
    btns.forEach(function (b) { b.addEventListener('click', function () { show(b.dataset.key); }); });
    show(btns[0].dataset.key);
  }
  function head(icon, title) { return '<h4 class="font-bold text-base mb-2" style="color:var(--accent);">' + icon + ' ' + title + '</h4>'; }
  function body(text) { return '<p class="text-sm leading-relaxed" style="color:#334155;">' + text + '</p>'; }

  /* 1. Zona Habitável */
  var zoneRange = document.getElementById('ebZoneRange');
  var zoneMarker = document.getElementById('ebZoneMarker');
  var zonePanel = document.getElementById('ebZonePanel');
  function showZone() {
    var v = parseInt(zoneRange.value, 10);
    zoneMarker.style.left = v + '%';
    var icon, title, text;
    if (v < 25) {
      icon = '🔥'; title = 'Demasiado perto — tipo Vénus';
      text = 'A água ferve e evapora-se num efeito de estufa descontrolado. Inóspito para a vida como a conhecemos.';
    } else if (v < 55) {
      icon = '🟢'; title = 'Zona Habitável — tipo Terra';
      text = 'A temperatura permite que a água se mantenha líquida à superfície: o ponto ideal para a vida como a conhecemos.';
    } else {
      icon = '🧊'; title = 'Demasiado longe — tipo Marte';
      text = 'A água congela à superfície. Ainda assim, o calor interno de algumas luas pode manter oceanos líquidos escondidos.';
    }
    zoneMarker.textContent = icon;
    zonePanel.innerHTML = head(icon, title) + body(text);
  }
  zoneRange.addEventListener('input', showZone);
  showZone();

  /* 2. Trânsito planetário */
  var transitPlanet = document.getElementById('ebTransitPlanet');
  var transitBtn = document.getElementById('ebTransitBtn');
  var transitRunning = false;
  var transitChart = new Chart(document.getElementById('ebTransitChart').getContext('2d'), {
    type: 'line',
    data: {
      labels: Array.from({ length: 60 }, function (_, i) { return i; }),
      datasets: [{ data: Array(60).fill(100), borderColor: '#f59e0b', borderWidth: 2, pointRadius: 0, tension: 0 }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      animation: false,
      plugins: { legend: { display: false }, tooltip: { enabled: false } },
      scales: {
        y: { min: 96, max: 100.5, ticks: { callback: function (v) { return v + '%'; }, font: { size: 9 } }, title: { display: true, text: 'Brilho da estrela', font: { size: 10 } } },
        x: { display: false }
      }
    }
  });
  function runTransit() {
    if (transitRunning) return;
    transitRunning = true;
    var frame = 0;
    var total = 100;
    var brightness = Array(60).fill(100);
    var timer = setInterval(function () {
      var pct = frame / total;
      var left = -10 + pct * 120;
      transitPlanet.style.left = left + '%';
      var dip = (left > 42 && left < 58) ? 100 - (1 - Math.abs(left - 50) / 8) * 3 : 100;
      brightness.shift();
      brightness.push(Math.max(dip, 97));
      transitChart.data.datasets[0].data = brightness.slice();
      transitChart.update('none');
      frame++;
      if (frame > total) { clearInterval(timer); transitRunning = false; transitPlanet.style.left = '-10%'; }
    }, 30);
  }
  transitBtn.addEventListener('click', runTransit);

  /* 3. JWST */
  var jwst = {
    espelho: { icon: '🪞', title: 'O Espelho Dourado', text: 'A 1,5 milhões de km da Terra, o JWST tem um espelho de berílio banhado a ouro com 6,5 metros — observa em infravermelho e perscruta atmosferas como nenhum outro instrumento.' },
    espectro: { icon: '🌈', title: 'O Código de Barras da Luz', text: 'Quando o planeta transita, a luz da estrela atravessa a sua atmosfera. Cada molécula (água, CO₂, metano) absorve comprimentos de onda específicos, deixando uma assinatura única.' },
    bio: { icon: '🧬', title: 'O que é uma Bioassinatura?', text: 'O oxigénio sozinho não chega — pode ser geológico. A chave é o <strong>desequilíbrio químico</strong>: gases que se destroem mutuamente (metano + oxigénio/ozono) só coexistem se algo os estiver a repor continuamente.' },
    dms: { icon: '🦠', title: 'Dimetilsulfureto (DMS)', text: 'Na Terra, este composto é produzido quase exclusivamente por fitoplâncton marinho — por isso é um dos alvos prioritários do James Webb na procura de vida.' }
  };
  bindTabs('ebJwstTabs', 'ebJwstPanel', jwst, function (d) { return head(d.icon, d.title) + body(d.text); });

  /* 6. Veredito */
  var verdict = {
    apolo: { icon: '🟡', title: 'Apolo', text: 'Água e muito CO₂, mas <strong>nenhum par de gases em desequilíbrio</strong> — pode ser apenas geologia, como em Vénus. Não é uma bioassinatura conclusiva.' },
    boreas: { icon: '🔴', title: 'Bóreas', text: 'Fora da zona habitável e orbita uma <strong>anã vermelha ativa</strong>, que liberta erupções de radiação intensas — um ambiente hostil para vida orgânica na superfície.' },
    ceres: { icon: '🟢', title: 'Ceres-X — a escolha mais promissora', text: 'Rochoso, no centro da zona habitável, com <strong>água, ozono e metano em simultâneo</strong>: um verdadeiro desequilíbrio químico, o sinal mais forte de possível atividade biológica.' }
  };
  bindTabs('ebVerdictTabs', 'ebVerdictPanel', verdict, function (d) { return head(d.icon, d.title) + body(d.text); });
}());
</script>
