<?php $reflection_question = 'Vivemos em cima de placas que nunca param de se mover, e a ciência ainda não consegue prever o dia exato de um sismo. O que é mais importante: tentar adivinhar o futuro, ou preparar as cidades e as pessoas para ele?'; ?>

<style>
.pdint-card { background: var(--card-bg); border: 1px solid var(--border); border-radius: 1rem; padding: 1.5rem; }
.pdint-tab { border: 2px solid var(--border); border-radius: 999px; padding: 0.4rem 1rem; font-size: 0.8rem; font-weight: 600; cursor: pointer; transition: all 0.2s ease; background: var(--bg); color: var(--text); }
.pdint-tab:hover { border-color: var(--accent); }
.pdint-tab.active { background: var(--accent); border-color: var(--accent); color: white; }
.pdint-panel { min-height: 120px; }
.pdint-fade { animation: pdintFade 0.3s ease; }
@keyframes pdintFade { from { opacity: 0; transform: translateY(4px); } to { opacity: 1; transform: none; } }
.pdint-btn { background: var(--accent); color: white; border-radius: 999px; padding: 0.5rem 1.2rem; font-size: 0.85rem; font-weight: 600; cursor: pointer; border: none; }
.pdint-layers { display: grid; grid-template-columns: 220px 1fr; gap: 1.5rem; align-items: center; }
@media (max-width: 640px) { .pdint-layers { grid-template-columns: 1fr; } .pdint-layers svg { max-width: 200px; margin: 0 auto; } }
.pdint-ring { cursor: pointer; transition: opacity 0.2s ease, stroke-width 0.2s ease; stroke: white; stroke-width: 1.5; }
.pdint-ring:hover { opacity: 0.85; }
.pdint-ring.active { stroke: #0f172a; stroke-width: 3; }
.pdint-stat { display: flex; justify-content: space-between; font-size: 0.8rem; padding: 0.35rem 0; border-bottom: 1px dashed var(--border); }
.pdint-step { display: none; }
.pdint-step.show { display: block; }
.pdint-range { width: 100%; accent-color: var(--accent); }
.pdint-dots { display: flex; flex-wrap: wrap; gap: 3px; min-height: 2rem; }
.pdint-dot { width: 10px; height: 10px; border-radius: 50%; background: #f97316; }
.pdint-check { display: flex; gap: 0.6rem; align-items: flex-start; padding: 0.55rem 0; border-bottom: 1px solid var(--border); cursor: pointer; }
.pdint-check input { margin-top: 0.2rem; accent-color: var(--accent); }
</style>

<section data-label="Chão Vivo" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">1. O Chão Que Nunca Pára 🌍</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Parece-nos que o chão é a coisa mais firme e parada do mundo. Mas não é! Neste preciso momento, Portugal está a mover-se uns milímetros e o Oceano Atlântico está a ficar mais largo. A Terra é uma gigantesca <strong>máquina térmica</strong>: lá no fundo há um calor enorme que tenta escapar, e esse calor faz mexer tudo o que está por cima.</p>

  <div class="pdint-card" style="background:#1e293b;border-color:#334155;">
    <div class="flex items-center gap-4 flex-wrap">
      <div class="text-3xl font-extrabold" style="color:#fb923c;">6 371 km</div>
      <p class="text-xs leading-relaxed flex-1" style="color:#cbd5e1;min-width:200px;">É a distância até ao centro da Terra. O buraco mais fundo alguma vez escavado tem pouco mais de <strong>12 km</strong>. Nunca passámos da "casca"!</p>
    </div>
  </div>
</section>

<section data-label="As Camadas" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">2. Viagem ao Centro da Terra 🥚</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Se cortássemos a Terra ao meio, veríamos camadas, como num ovo cozido. Clica em cada camada:</p>

  <div class="pdint-card pdint-layers">
    <svg viewBox="0 0 200 200" id="pdintEarth" aria-label="Camadas da Terra">
      <circle class="pdint-ring" data-key="crosta" cx="100" cy="100" r="96" fill="#78716c"/>
      <circle class="pdint-ring" data-key="manto" cx="100" cy="100" r="88" fill="#ea580c"/>
      <circle class="pdint-ring" data-key="externo" cx="100" cy="100" r="48" fill="#f59e0b"/>
      <circle class="pdint-ring" data-key="interno" cx="100" cy="100" r="22" fill="#fde047"/>
    </svg>
    <div id="pdintLayerPanel" class="pdint-panel"></div>
  </div>
</section>

<section data-label="Placas" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">3. Os Continentes Andam 🧩</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Em 1912, <strong>Alfred Wegener</strong> reparou que a América do Sul e África encaixam como peças de um puzzle, e que havia os mesmos fósseis dos dois lados do oceano. Propôs que todos os continentes já tinham estado juntos num supercontinente, a <strong>Pangeia</strong>. Quase ninguém acreditou nele: só nos anos 60 a ciência lhe deu razão.</p>

  <p class="prose-lesson mb-4">Hoje sabemos que a crosta está partida em <strong>placas tectónicas</strong>, arrastadas pelas correntes lentas do manto, a uns centímetros por ano (a velocidade a que crescem as unhas). Quando duas placas se encontram, podem:</p>

  <div class="flex flex-wrap gap-2 mb-4" id="pdintPlateTabs">
    <button class="pdint-tab active" data-key="afastar">↔️ Afastar-se</button>
    <button class="pdint-tab" data-key="chocar">➡️⬅️ Chocar</button>
    <button class="pdint-tab" data-key="deslizar">⬆️⬇️ Deslizar</button>
  </div>
  <div id="pdintPlatePanel" class="pdint-card pdint-panel"></div>
</section>

<section data-label="Sismos" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">4. Sismos: O Elástico Que Rebenta 💥</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <div class="grid md:grid-cols-2 gap-4 mb-6">
    <div class="pdint-card">
      <div class="text-2xl mb-2">🪢</div>
      <h3 class="font-bold text-sm mb-1">Tensão acumulada</h3>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">As placas prendem-se umas às outras e vão acumulando tensão, como um elástico esticado. Quando a rocha cede, a energia solta-se de repente em ondas que fazem tremer o chão.</p>
    </div>
    <div class="pdint-card">
      <div class="text-2xl mb-2">🎯</div>
      <h3 class="font-bold text-sm mb-1">Hipocentro e epicentro</h3>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">O <strong>hipocentro</strong> é o ponto, lá em baixo, onde a rocha parte. O <strong>epicentro</strong> é o ponto à superfície mesmo por cima dele, onde normalmente o tremor se sente com mais força.</p>
    </div>
  </div>

  <p class="prose-lesson mb-4">Na escala de magnitude, cada ponto a mais significa cerca de <strong>32 vezes mais energia</strong>. Mexe no seletor e compara com um sismo de magnitude 4:</p>
  <div class="pdint-card">
    <div class="flex items-center justify-between mb-2">
      <span class="text-sm font-semibold">Magnitude</span>
      <span class="text-2xl font-extrabold" id="pdintMagVal" style="color:var(--accent);">5</span>
    </div>
    <input type="range" min="4" max="9" step="1" value="5" class="pdint-range mb-4" id="pdintMag">
    <div class="pdint-dots mb-3" id="pdintDots"></div>
    <p class="text-sm leading-relaxed" id="pdintMagText" style="color:#334155;"></p>
  </div>
</section>

<section data-label="Vulcões" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">5. Vulcões: Rocha Que Derrete 🌋</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Onde as placas se afastam, ou onde uma mergulha por baixo da outra, a rocha derrete e forma <strong>magma</strong>. Como é mais leve, sobe. Quando chega à superfície, passa a chamar-se <strong>lava</strong>. Mas nem todas as erupções são iguais:</p>

  <div class="flex flex-wrap gap-2 mb-4" id="pdintVolcTabs">
    <button class="pdint-tab active" data-key="explosiva">💥 Explosiva</button>
    <button class="pdint-tab" data-key="efusiva">🔥 Efusiva</button>
  </div>
  <div id="pdintVolcPanel" class="pdint-card pdint-panel"></div>
</section>

<section data-label="Casos Reais" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">6. Casos Reais: Portugal Também Treme 🇵🇹</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <div class="pdint-card mb-6">
    <div class="text-xs font-bold uppercase tracking-wide mb-3" style="color:var(--accent);">Lisboa, 1 de novembro de 1755</div>
    <div class="pdint-step show" data-step="0">
      <div class="text-3xl mb-2">⛪</div>
      <p class="text-sm leading-relaxed" style="color:#334155;">Manhã de Todos os Santos. As igrejas estão cheias quando um sismo enorme, de magnitude estimada entre <strong>8,5 e 9</strong>, abala a cidade.</p>
    </div>
    <div class="pdint-step" data-step="1">
      <div class="text-3xl mb-2">🌊🔥</div>
      <p class="text-sm leading-relaxed" style="color:#334155;">Segue-se um <strong>tsunami</strong> que invade a zona ribeirinha, e incêndios que duram dias. Morrem dezenas de milhares de pessoas.</p>
    </div>
    <div class="pdint-step" data-step="2">
      <div class="text-3xl mb-2">🏗️</div>
      <p class="text-sm leading-relaxed" style="color:#334155;">O <strong>Marquês de Pombal</strong> reconstrói a Baixa com a "gaiola pombalina": uma estrutura de madeira dentro das paredes que ajuda os prédios a resistir a novos sismos.</p>
    </div>
    <div class="pdint-step" data-step="3">
      <div class="text-3xl mb-2">📜</div>
      <p class="text-sm leading-relaxed" style="color:#334155;">Pombal envia um <strong>inquérito</strong> a todas as paróquias a perguntar como tinha sido o tremor. Muitos consideram este o início da <strong>sismologia moderna</strong>.</p>
    </div>
    <button class="pdint-btn mt-4" id="pdintStoryBtn">Continuar a história ▶</button>
  </div>

  <div class="pdint-card">
    <div class="text-2xl mb-2">🌋</div>
    <h3 class="font-bold text-sm mb-1">Os Açores, onde três placas se encontram</h3>
    <p class="text-xs leading-relaxed" style="color:var(--muted);">Os Açores ficam no encontro das placas <strong>Norte-Americana, Euroasiática e Africana</strong>. Em 1957, o Vulcão dos Capelinhos, no Faial, esteve 13 meses em erupção e acrescentou terra nova à ilha. E a montanha mais alta de Portugal, o <strong>Pico</strong> (2 351 m), é um vulcão.</p>
  </div>
</section>

<section data-label="Sabias que" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">7. Sabias que...? 💡</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <div class="callout-sabias mb-4">
    <div class="callout-label">Sabias que?</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">Na Islândia há uma fenda chamada <strong>Silfra</strong> onde os mergulhadores nadam entre a placa Norte-Americana e a Euroasiática, e podem tocar nas duas ao mesmo tempo.</p>
  </div>
  <div class="callout-sabias">
    <div class="callout-label">Sabias que?</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">O Atlântico alarga cerca de <strong>2,5 cm por ano</strong>. Desde que Cristóvão Colombo o atravessou, em 1492, a viagem ficou uns <strong>13 metros mais longa</strong>!</p>
  </div>
</section>

<section data-label="Ovo Cozido" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">8. Experiência: A Terra num Ovo Cozido 🥚</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Um ovo cozido é um modelo surpreendentemente bom do nosso planeta. Marca cada passo:</p>

  <div class="pdint-card" id="pdintChecklist">
    <label class="pdint-check"><input type="checkbox"><span class="text-sm">Coze um ovo durante 10 minutos e deixa-o arrefecer.</span></label>
    <label class="pdint-check"><input type="checkbox"><span class="text-sm">Bate de leve com a casca na mesa, só para a rachar. As fissuras são as <strong>placas</strong>: empurra dois bocados um contra o outro e vê as bordas.</span></label>
    <label class="pdint-check"><input type="checkbox"><span class="text-sm">Com a ajuda de um adulto, corta o ovo ao meio, com a casca.</span></label>
    <p class="text-sm font-semibold mt-4" id="pdintCheckMsg" style="color:var(--muted);">0 de 3 passos feitos.</p>
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
      panel.classList.remove('pdint-fade');
      void panel.offsetWidth;
      panel.classList.add('pdint-fade');
      btns.forEach(function (b) { b.classList.toggle('active', b.dataset.key === key); });
    }
    btns.forEach(function (b) { b.addEventListener('click', function () { show(b.dataset.key); }); });
    show(btns[0].dataset.key);
  }
  function head(icon, title) { return '<h4 class="font-bold text-base mb-2" style="color:var(--accent);">' + icon + ' ' + title + '</h4>'; }
  function body(text) { return '<p class="text-sm leading-relaxed" style="color:#334155;">' + text + '</p>'; }
  function stats(rows) {
    return '<div class="mt-3">' + rows.map(function (r) { return '<div class="pdint-stat"><span style="color:var(--muted);">' + r[0] + '</span><strong>' + r[1] + '</strong></div>'; }).join('') + '</div>';
  }

  /* 2. Camadas */
  var layers = {
    crosta: { icon: '🏔️', title: 'A Crosta', text: 'A "casca" onde vivemos. Comparada com o tamanho da Terra, é fininha como a casca de um ovo.', rows: [['Espessura', '5 a 70 km'], ['Estado', 'Sólida'], ['Curiosidade', 'Mais fina debaixo dos oceanos']] },
    manto: { icon: '🫠', title: 'O Manto', text: 'Rocha muito quente. É sólida, mas ao longo de milhões de anos "flui" muito devagar, como plasticina. As suas correntes arrastam as placas.', rows: [['Espessura', 'cerca de 2 900 km'], ['Estado', 'Sólido que flui devagar'], ['Temperatura', '500 a 4 000 °C']] },
    externo: { icon: '🌀', title: 'O Núcleo Externo', text: 'Ferro e níquel <strong>líquidos</strong>. O seu movimento cria o campo magnético da Terra, aquele que faz a bússola apontar para norte.', rows: [['Profundidade', '2 900 a 5 150 km'], ['Estado', 'Líquido'], ['Material', 'Ferro e níquel']] },
    interno: { icon: '☀️', title: 'O Núcleo Interno', text: 'Uma bola de ferro e níquel <strong>sólida</strong>, apesar do calor, porque a pressão é gigantesca. É quase tão quente como a superfície do Sol.', rows: [['Profundidade', '5 150 a 6 371 km'], ['Estado', 'Sólido'], ['Temperatura', 'cerca de 5 000 °C']] }
  };
  var rings = document.querySelectorAll('.pdint-ring');
  var layerPanel = document.getElementById('pdintLayerPanel');
  function showLayer(key) {
    var d = layers[key];
    layerPanel.innerHTML = head(d.icon, d.title) + body(d.text) + stats(d.rows);
    layerPanel.classList.remove('pdint-fade'); void layerPanel.offsetWidth; layerPanel.classList.add('pdint-fade');
    rings.forEach(function (r) { r.classList.toggle('active', r.dataset.key === key); });
  }
  rings.forEach(function (r) { r.addEventListener('click', function () { showLayer(r.dataset.key); }); });
  showLayer('crosta');

  /* 3. Placas */
  var plates = {
    afastar: { icon: '↔️', title: 'Placas que se afastam', text: 'O magma sobe pela fenda e cria <strong>crosta nova</strong>. Acontece no meio do Atlântico, numa enorme cordilheira submarina, e é por isso que este oceano está a ficar mais largo.' },
    chocar: { icon: '🏔️', title: 'Placas que chocam', text: 'Uma placa pode enrugar-se para cima e formar <strong>montanhas</strong>: a Índia, ao chocar contra a Ásia, ergueu os Himalaias. Ou pode mergulhar por baixo da outra, criando vulcões e sismos fortes, como no Japão.' },
    deslizar: { icon: '↕️', title: 'Placas que deslizam', text: 'As placas raspam lado a lado, sem criar nem destruir crosta, mas acumulam muita tensão. O exemplo mais famoso é a <strong>Falha de Santo André</strong>, na Califórnia.' }
  };
  bindTabs('pdintPlateTabs', 'pdintPlatePanel', plates, function (d) { return head(d.icon, d.title) + body(d.text); });

  /* 4. Magnitude */
  var mag = document.getElementById('pdintMag');
  var magVal = document.getElementById('pdintMagVal');
  var dots = document.getElementById('pdintDots');
  var magText = document.getElementById('pdintMagText');
  var feel = { 4: 'Sente-se dentro de casa, os copos tremem.', 5: 'Objetos caem das prateleiras, alguns estragos ligeiros.', 6: 'Estragos sérios em edifícios mal construídos.', 7: 'Sismo forte: grandes estragos numa região inteira.', 8: 'Sismo gigante: destruição em centenas de quilómetros.', 9: 'Dos maiores alguma vez registados, como o de Lisboa em 1755.' };
  function updateMag() {
    var m = parseInt(mag.value, 10);
    var times = Math.round(Math.pow(31.6, m - 4));
    magVal.textContent = m;
    var n = Math.min(times, 60);
    var html = '';
    for (var i = 0; i < n; i++) html += '<div class="pdint-dot"></div>';
    dots.innerHTML = html + (times > 60 ? '<span class="text-xs font-bold ml-1" style="color:var(--muted);">… e muitos mais</span>' : '');
    magText.innerHTML = (m === 4 ? 'Esta é a nossa referência: 1 ponto laranja = a energia de um sismo de magnitude 4. ' : 'Cerca de <strong>' + times.toLocaleString('pt-PT') + ' vezes</strong> a energia de um sismo de magnitude 4. ') + feel[m];
  }
  mag.addEventListener('input', updateMag);
  updateMag();

  /* 5. Vulcões */
  var volc = {
    explosiva: { icon: '💥', title: 'Erupção explosiva', text: 'O magma é espesso e prende os gases, como uma garrafa de refrigerante agitada. Quando rebenta, lança cinzas e pedras a quilómetros de altura.' },
    efusiva: { icon: '🔥', title: 'Erupção efusiva', text: 'O magma é mais líquido e os gases escapam com facilidade. A lava escorre como um rio incandescente e vai construindo a ilha camada a camada, como no Havai ou nos Açores.' }
  };
  bindTabs('pdintVolcTabs', 'pdintVolcPanel', volc, function (d) { return head(d.icon, d.title) + body(d.text); });

  /* 6. História de 1755 */
  var steps = document.querySelectorAll('.pdint-step');
  var storyBtn = document.getElementById('pdintStoryBtn');
  var idx = 0;
  storyBtn.addEventListener('click', function () {
    idx = (idx + 1) % steps.length;
    steps.forEach(function (s, i) { s.classList.toggle('show', i === idx); });
    storyBtn.textContent = idx === steps.length - 1 ? '↺ Recomeçar' : 'Continuar a história ▶';
  });

  /* 8. Checklist */
  var boxes = document.querySelectorAll('#pdintChecklist input');
  var msg = document.getElementById('pdintCheckMsg');
  boxes.forEach(function (b) {
    b.addEventListener('change', function () {
      var n = Array.prototype.filter.call(boxes, function (x) { return x.checked; }).length;
      msg.innerHTML = n === boxes.length
        ? '🎉 Olha para o corte: a casca fina é a <strong>crosta</strong>, a clara é o <strong>manto</strong> e a gema é o <strong>núcleo</strong>. Tens a Terra na mão!'
        : n + ' de ' + boxes.length + ' passos feitos.';
      msg.style.color = n === boxes.length ? 'var(--accent)' : 'var(--muted)';
    });
  });
}());
</script>
