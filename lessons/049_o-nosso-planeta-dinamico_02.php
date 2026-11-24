<?php $reflection_question = 'O efeito de estufa é o que nos permite viver na Terra, mas também é o que a pode tornar mais perigosa. Como explicariam a alguém que uma coisa pode ser, ao mesmo tempo, essencial e um problema — e que a diferença está na quantidade?'; ?>

<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1"></script>

<style>
.pdatm-card { background: var(--card-bg); border: 1px solid var(--border); border-radius: 1rem; padding: 1.5rem; }
.pdatm-tab { border: 2px solid var(--border); border-radius: 999px; padding: 0.4rem 1rem; font-size: 0.8rem; font-weight: 600; cursor: pointer; transition: all 0.2s ease; background: var(--bg); color: var(--text); }
.pdatm-tab:hover { border-color: var(--accent); }
.pdatm-tab.active { background: var(--accent); border-color: var(--accent); color: white; }
.pdatm-panel { min-height: 120px; }
.pdatm-fade { animation: pdatmFade 0.3s ease; }
@keyframes pdatmFade { from { opacity: 0; transform: translateY(4px); } to { opacity: 1; transform: none; } }
.pdatm-btn { background: var(--accent); color: white; border-radius: 999px; padding: 0.5rem 1.2rem; font-size: 0.85rem; font-weight: 600; cursor: pointer; border: none; }
.pdatm-stack { display: flex; flex-direction: column; border-radius: 0.75rem; overflow: hidden; border: 1px solid var(--border); }
.pdatm-layer { padding: 0.7rem 1rem; color: white; cursor: pointer; display: flex; justify-content: space-between; align-items: center; font-size: 0.85rem; font-weight: 600; transition: filter 0.2s ease; }
.pdatm-layer:hover { filter: brightness(1.15); }
.pdatm-layer.active { outline: 3px solid var(--accent); outline-offset: -3px; filter: brightness(1.2); }
.pdatm-range { width: 100%; accent-color: var(--accent); }
.pdatm-thermo { height: 0.8rem; border-radius: 999px; background: linear-gradient(90deg, #3b82f6, #22c55e 45%, #eab308 70%, #dc2626); position: relative; }
.pdatm-marker { position: absolute; top: -0.35rem; width: 0.3rem; height: 1.5rem; background: #0f172a; border-radius: 2px; transition: left 0.3s ease; }
.pdatm-step { display: none; }
.pdatm-step.show { display: block; }
.pdatm-cat { display: flex; gap: 4px; }
.pdatm-cat div { flex: 1; text-align: center; font-size: 0.75rem; font-weight: 800; padding: 0.4rem 0; border-radius: 0.4rem; background: var(--border); color: var(--muted); transition: all 0.25s ease; }
.pdatm-cat div.on { color: white; }
.pdatm-check { display: flex; gap: 0.6rem; align-items: flex-start; padding: 0.55rem 0; border-bottom: 1px solid var(--border); cursor: pointer; }
.pdatm-check input { margin-top: 0.2rem; accent-color: var(--accent); }
</style>

<section data-label="Oceano de Ar" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">1. Um Oceano de Ar 🌤️</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Não o vemos, mas vivemos no fundo de um oceano: um oceano de ar chamado <strong>atmosfera</strong>. Dá-nos oxigénio, protege-nos dos raios perigosos do Sol, queima os meteoritos e mantém o planeta quente durante a noite. Visto do espaço, é tão fino como a casca de uma maçã. Mas de que é feito?</p>

  <div class="pdatm-card">
    <div class="grid md:grid-cols-2 gap-6 items-center">
      <div style="max-width:240px;margin:0 auto;"><canvas id="pdatmAirChart"></canvas></div>
      <div class="text-sm leading-relaxed" style="color:#334155;">
        <p class="mb-2">🟦 <strong>Azoto:</strong> 78%</p>
        <p class="mb-2">🟩 <strong>Oxigénio:</strong> 21%</p>
        <p class="mb-2">🟨 <strong>Árgon:</strong> quase 1%</p>
        <p>🟥 <strong>CO₂ e outros:</strong> uma fatia tão fina que quase não se vê, mas o CO₂ tem um papel gigante no clima.</p>
      </div>
    </div>
  </div>
</section>

<section data-label="As Camadas" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">2. Subir Pelas Camadas 🎈</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">A atmosfera tem camadas, como um bolo. Começa no chão e vai subindo. Clica em cada uma:</p>

  <div class="grid md:grid-cols-2 gap-4">
    <div class="pdatm-stack" id="pdatmLayers">
      <div class="pdatm-layer" data-key="exo" style="background:#020617;"><span>🛰️ Termosfera e Exosfera</span><span class="text-xs">85 km +</span></div>
      <div class="pdatm-layer" data-key="meso" style="background:#1e1b4b;"><span>☄️ Mesosfera</span><span class="text-xs">50–85 km</span></div>
      <div class="pdatm-layer" data-key="estrato" style="background:#1e3a8a;"><span>🛡️ Estratosfera</span><span class="text-xs">12–50 km</span></div>
      <div class="pdatm-layer" data-key="tropo" style="background:#0284c7;"><span>☁️ Troposfera</span><span class="text-xs">0–12 km</span></div>
    </div>
    <div id="pdatmLayerPanel" class="pdatm-card pdatm-panel"></div>
  </div>
</section>

<section data-label="Efeito Estufa" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">3. O Efeito de Estufa 🏡</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">A luz do Sol atravessa a atmosfera e aquece o chão. O chão devolve esse calor sob a forma de luz <strong>infravermelha</strong>, invisível. Alguns gases, como o vapor de água, o <strong>CO₂</strong> e o metano, apanham parte desse calor e devolvem-no à Terra, como um cobertor. Mexe na quantidade de "cobertores":</p>

  <div class="pdatm-card mb-6">
    <input type="range" min="0" max="3" step="1" value="1" class="pdatm-range mb-4" id="pdatmGas">
    <div class="flex justify-between text-xs mb-3" style="color:var(--muted);"><span>Sem gases</span><span>Natural</span><span>Mais CO₂</span><span>Como Vénus</span></div>
    <div class="pdatm-thermo mb-4"><div class="pdatm-marker" id="pdatmMarker"></div></div>
    <div id="pdatmGasPanel" class="pdatm-fade"></div>
  </div>

  <div class="pdatm-card" style="background:#1e293b;border-color:#334155;">
    <div class="flex items-center gap-4 flex-wrap">
      <div class="text-3xl font-extrabold" style="color:#fca5a5;">280 → 420+</div>
      <p class="text-xs leading-relaxed flex-1" style="color:#cbd5e1;min-width:200px;">Partes de CO₂ por milhão no ar, antes da Revolução Industrial e hoje. Ao queimar carvão, petróleo e gás, pusemos mais cobertores no planeta, que já aqueceu <strong>mais de 1 °C</strong>.</p>
    </div>
  </div>
</section>

<section data-label="Furacões" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">4. A Receita de um Furacão 🌀</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <div class="pdatm-card mb-6">
    <div class="pdatm-step show">
      <div class="text-3xl mb-2">🌊</div>
      <p class="text-sm leading-relaxed" style="color:#334155;"><strong>Ingrediente 1:</strong> água do mar muito quente, a pelo menos <strong>26 °C</strong>. A água evapora e enche o ar de humidade.</p>
    </div>
    <div class="pdatm-step">
      <div class="text-3xl mb-2">⬆️</div>
      <p class="text-sm leading-relaxed" style="color:#334155;"><strong>O motor:</strong> o ar quente e húmido sobe. Lá em cima arrefece, forma nuvens e liberta ainda mais calor, que puxa mais ar do mar. Um ciclo que se alimenta a si próprio.</p>
    </div>
    <div class="pdatm-step">
      <div class="text-3xl mb-2">🌀</div>
      <p class="text-sm leading-relaxed" style="color:#334155;"><strong>O giro:</strong> a rotação da Terra põe tudo a rodar numa espiral gigante, com centenas de quilómetros.</p>
    </div>
    <div class="pdatm-step">
      <div class="text-3xl mb-2">👁️</div>
      <p class="text-sm leading-relaxed" style="color:#334155;"><strong>O olho:</strong> no centro fica uma zona estranhamente calma, às vezes com céu azul. À volta, a parede do olho tem os ventos mais violentos de todos.</p>
    </div>
    <div class="pdatm-step">
      <div class="text-3xl mb-2">🗺️</div>
      <p class="text-sm leading-relaxed" style="color:#334155;"><strong>Nomes diferentes, a mesma tempestade:</strong> no Atlântico chama-se <strong>furacão</strong>; no Pacífico, perto da Ásia, <strong>tufão</strong>; no Oceano Índico, <strong>ciclone</strong>.</p>
    </div>
    <button class="pdatm-btn mt-4" id="pdatmRecipeBtn">Próximo passo ▶</button>
  </div>

  <p class="prose-lesson mb-4">Os furacões são medidos de 1 a 5 pela velocidade do vento. Mexe no seletor:</p>
  <div class="pdatm-card">
    <div class="flex items-center justify-between mb-2">
      <span class="text-sm font-semibold">Vento</span>
      <span class="text-2xl font-extrabold" id="pdatmWindVal" style="color:var(--accent);">150 km/h</span>
    </div>
    <input type="range" min="60" max="300" step="10" value="150" class="pdatm-range mb-4" id="pdatmWind">
    <div class="pdatm-cat mb-3" id="pdatmCats"><div>1</div><div>2</div><div>3</div><div>4</div><div>5</div></div>
    <p class="text-sm leading-relaxed" id="pdatmWindText" style="color:#334155;"></p>
  </div>
</section>

<section data-label="Casos Reais" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">5. Casos Reais 🚨</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <div class="grid md:grid-cols-2 gap-4">
    <div class="pdatm-card">
      <div class="text-2xl mb-2">🪂</div>
      <h3 class="font-bold text-sm mb-1">O salto da estratosfera (2012)</h3>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">Felix Baumgartner subiu num balão até <strong>39 km</strong> e saltou. Com o ar tão rarefeito, quase nada o travava: na queda, ultrapassou a <strong>velocidade do som</strong>, sem avião nem motor.</p>
    </div>
    <div class="pdatm-card">
      <div class="text-2xl mb-2">🇵🇹</div>
      <h3 class="font-bold text-sm mb-1">Tempestades à porta</h3>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">Em 2018, a tempestade <strong>Leslie</strong> chegou à Figueira da Foz com rajadas de cerca de 176 km/h. Em 2019, o <strong>Lorenzo</strong> foi o furacão de categoria 5 mais a leste alguma vez registado no Atlântico, e passou pelos Açores.</p>
    </div>
  </div>
</section>

<section data-label="Sabias que" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">6. Sabias que...? 💡</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <div class="callout-sabias mb-4">
    <div class="callout-label">Sabias que?</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">Um relâmpago aquece o ar à sua volta a cerca de <strong>30 000 °C</strong>, umas cinco vezes mais do que a superfície do Sol. O ar expande-se tão depressa que explode: é esse o som do <strong>trovão</strong>.</p>
  </div>
  <div class="callout-sabias">
    <div class="callout-label">Sabias que?</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">O céu é azul porque o ar espalha muito mais a luz <strong>azul</strong> do que a vermelha. Ao pôr do sol, a luz atravessa muito mais ar, o azul perde-se pelo caminho e sobram os <strong>laranjas e vermelhos</strong>.</p>
  </div>
</section>

<section data-label="Estufa" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">7. Experiência: Uma Estufa num Frasco 🫙</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Vamos ver o efeito de estufa a funcionar. Marca cada passo:</p>

  <div class="pdatm-card" id="pdatmChecklist">
    <label class="pdatm-check"><input type="checkbox"><span class="text-sm">Arranja dois termómetros iguais (ou dois copos com a mesma água e um termómetro de cozinha).</span></label>
    <label class="pdatm-check"><input type="checkbox"><span class="text-sm">Põe os dois ao sol. Tapa um com um frasco de vidro virado ao contrário (ou película aderente); o outro fica destapado.</span></label>
    <label class="pdatm-check"><input type="checkbox"><span class="text-sm">Espera 30 minutos e compara as temperaturas.</span></label>
    <p class="text-sm font-semibold mt-4" id="pdatmCheckMsg" style="color:var(--muted);">0 de 3 passos feitos.</p>
  </div>
</section>

<script>
(function () {
  function head(icon, title) { return '<h4 class="font-bold text-base mb-2" style="color:var(--accent);">' + icon + ' ' + title + '</h4>'; }
  function body(text) { return '<p class="text-sm leading-relaxed" style="color:#334155;">' + text + '</p>'; }
  function fade(el) { el.classList.remove('pdatm-fade'); void el.offsetWidth; el.classList.add('pdatm-fade'); }

  /* 1. Composição do ar */
  if (window.Chart) {
    new Chart(document.getElementById('pdatmAirChart'), {
      type: 'doughnut',
      data: {
        labels: ['Azoto', 'Oxigénio', 'Árgon', 'CO₂ e outros'],
        datasets: [{ data: [78.08, 20.95, 0.93, 0.04], backgroundColor: ['#3b82f6', '#22c55e', '#eab308', '#dc2626'], borderWidth: 2 }]
      },
      options: {
        cutout: '60%',
        plugins: { legend: { display: false }, tooltip: { callbacks: { label: function (c) { return c.label + ': ' + c.parsed.toLocaleString('pt-PT') + '%'; } } } }
      }
    });
  }

  /* 2. Camadas */
  var layers = {
    tropo: { icon: '☁️', title: 'Troposfera (0 a 12 km)', text: 'Onde vivemos e onde acontece todo o <strong>tempo</strong>: nuvens, chuva, vento e trovoadas. Quanto mais se sobe, mais frio fica: no topo do Everest pode estar a −30 °C ou menos.' },
    estrato: { icon: '🛡️', title: 'Estratosfera (12 a 50 km)', text: 'Aqui está a <strong>camada de ozono</strong>, um escudo que absorve a maior parte da radiação ultravioleta do Sol. Os aviões a jato voam na parte de baixo, acima das tempestades.' },
    meso: { icon: '☄️', title: 'Mesosfera (50 a 85 km)', text: 'A camada mais fria, abaixo de <strong>−90 °C</strong>. É aqui que a maioria dos meteoros arde e se transforma em "estrelas cadentes".' },
    exo: { icon: '🛰️', title: 'Termosfera e Exosfera (85 km +)', text: 'O ar é tão rarefeito que quase não existe. Aqui dançam as <strong>auroras boreais</strong> e orbita a Estação Espacial Internacional, a cerca de 400 km. Por convenção, o espaço começa aos <strong>100 km</strong>.' }
  };
  var layerEls = document.querySelectorAll('#pdatmLayers .pdatm-layer');
  var layerPanel = document.getElementById('pdatmLayerPanel');
  function showLayer(key) {
    var d = layers[key];
    layerPanel.innerHTML = head(d.icon, d.title) + body(d.text);
    fade(layerPanel);
    layerEls.forEach(function (l) { l.classList.toggle('active', l.dataset.key === key); });
  }
  layerEls.forEach(function (l) { l.addEventListener('click', function () { showLayer(l.dataset.key); }); });
  showLayer('tropo');

  /* 3. Efeito de estufa (ilustrativo) */
  var gas = [
    { pos: 8, icon: '🥶', title: 'Sem gases de estufa: cerca de −18 °C', text: 'O calor escaparia todo para o espaço. A Terra seria uma bola de gelo, e a vida como a conhecemos não existiria.' },
    { pos: 45, icon: '😊', title: 'Efeito natural: cerca de 15 °C', text: 'O "cobertor" certo: guarda calor suficiente para haver água líquida, florestas e vida. Este é o efeito de estufa <strong>bom</strong>.' },
    { pos: 62, icon: '🥵', title: 'Mais CO₂: o planeta aquece', text: 'Ao queimar combustíveis fósseis, pusemos mais cobertores. Mesmo poucos graus a mais derretem glaciares, sobem o nível do mar e tornam as tempestades mais extremas.' },
    { pos: 97, icon: '🔥', title: 'Como Vénus: cerca de 465 °C', text: 'Vénus tem uma atmosfera quase toda de CO₂. Apesar de estar mais longe do Sol do que Mercúrio, é o planeta <strong>mais quente</strong> do Sistema Solar.' }
  ];
  var gasRange = document.getElementById('pdatmGas');
  var marker = document.getElementById('pdatmMarker');
  var gasPanel = document.getElementById('pdatmGasPanel');
  function updateGas() {
    var d = gas[parseInt(gasRange.value, 10)];
    marker.style.left = 'calc(' + d.pos + '% - 0.15rem)';
    gasPanel.innerHTML = head(d.icon, d.title) + body(d.text);
    fade(gasPanel);
  }
  gasRange.addEventListener('input', updateGas);
  updateGas();

  /* 4a. Receita */
  var rSteps = document.querySelectorAll('.pdatm-step');
  var rBtn = document.getElementById('pdatmRecipeBtn');
  var rIdx = 0;
  rBtn.addEventListener('click', function () {
    rIdx = (rIdx + 1) % rSteps.length;
    rSteps.forEach(function (s, i) { s.classList.toggle('show', i === rIdx); });
    rBtn.textContent = rIdx === rSteps.length - 1 ? '↺ Recomeçar' : 'Próximo passo ▶';
  });

  /* 4b. Categorias */
  var wind = document.getElementById('pdatmWind');
  var windVal = document.getElementById('pdatmWindVal');
  var windText = document.getElementById('pdatmWindText');
  var cats = document.querySelectorAll('#pdatmCats div');
  var colors = ['#eab308', '#f59e0b', '#f97316', '#ea580c', '#b91c1c'];
  var limits = [119, 154, 178, 209, 252];
  var desc = [
    'Ainda não é furacão: é uma <strong>tempestade tropical</strong>. Chuva forte e vento, mas sem a força de um furacão.',
    '<strong>Categoria 1:</strong> ramos partidos, telhas no ar e falhas de eletricidade.',
    '<strong>Categoria 2:</strong> árvores arrancadas pela raiz e estragos em telhados.',
    '<strong>Categoria 3:</strong> um furacão "maior". Casas danificadas e eletricidade cortada durante dias.',
    '<strong>Categoria 4:</strong> estragos muito graves. Zonas inteiras ficam inabitáveis durante semanas.',
    '<strong>Categoria 5:</strong> o máximo da escala, com ventos de mais de 250 km/h. Destruição catastrófica.'
  ];
  function updateWind() {
    var v = parseInt(wind.value, 10);
    var c = 0;
    limits.forEach(function (l, i) { if (v >= l) c = i + 1; });
    windVal.textContent = v + ' km/h';
    cats.forEach(function (el, i) {
      var on = i < c;
      el.classList.toggle('on', on);
      el.style.background = on ? colors[i] : '';
    });
    windText.innerHTML = desc[c];
  }
  wind.addEventListener('input', updateWind);
  updateWind();

  /* 7. Checklist */
  var boxes = document.querySelectorAll('#pdatmChecklist input');
  var msg = document.getElementById('pdatmCheckMsg');
  boxes.forEach(function (b) {
    b.addEventListener('change', function () {
      var n = Array.prototype.filter.call(boxes, function (x) { return x.checked; }).length;
      msg.innerHTML = n === boxes.length
        ? '🎉 Dentro do frasco ficou mais quente? O vidro deixou entrar a luz, mas prendeu o calor: é o <strong>efeito de estufa</strong>, em miniatura!'
        : n + ' de ' + boxes.length + ' passos feitos.';
      msg.style.color = n === boxes.length ? 'var(--accent)' : 'var(--muted)';
    });
  });
}());
</script>
