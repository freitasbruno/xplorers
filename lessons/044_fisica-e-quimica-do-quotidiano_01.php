<?php $reflection_question = 'Sabendo que as vossas células, o ecrã tátil que têm no bolso e o núcleo de uma estrela a anos-luz de distância são construídos exatamente com os mesmos "tijolos" básicos combinados de forma diferente, como é que isso altera a vossa perspetiva sobre a ligação entre os seres humanos, a tecnologia e o resto do universo?'; ?>

<style>
.fqtab-card { background: var(--card-bg); border: 1px solid var(--border); border-radius: 1rem; padding: 1.5rem; }
.fqtab-tab { border: 2px solid var(--border); border-radius: 999px; padding: 0.4rem 1rem; font-size: 0.8rem; font-weight: 600; cursor: pointer; transition: all 0.2s ease; background: var(--bg); color: var(--text); }
.fqtab-tab:hover { border-color: var(--accent); }
.fqtab-tab.active { background: var(--accent); border-color: var(--accent); color: white; }
.fqtab-panel { min-height: 120px; }
.fqtab-fade { animation: fqtabFade 0.3s ease; }
@keyframes fqtabFade { from { opacity: 0; transform: translateY(4px); } to { opacity: 1; transform: none; } }
.fqtab-range { width: 100%; accent-color: var(--accent); }
.fqtab-tile { width: 7rem; height: 7rem; border: 3px solid var(--accent); border-radius: 0.75rem; display: flex; flex-direction: column; align-items: center; justify-content: center; background: var(--bg); flex-shrink: 0; }
.fqtab-tile-z { font-size: 0.75rem; font-weight: 700; color: var(--muted); }
.fqtab-tile-sym { font-size: 2.4rem; font-weight: 800; line-height: 1; color: var(--accent); }
.fqtab-tile-name { font-size: 0.7rem; font-weight: 600; margin-top: 0.2rem; }
.fqtab-grid { display: grid; grid-template-columns: repeat(18, minmax(0, 1fr)); gap: 2px; }
.fqtab-cell { aspect-ratio: 1; display: flex; align-items: center; justify-content: center; font-size: 0.6rem; font-weight: 700; border-radius: 3px; background: var(--bg); border: 1px solid var(--border); color: var(--muted); transition: all 0.25s ease; }
.fqtab-cell.hl { background: var(--accent); border-color: var(--accent); color: white; transform: scale(1.08); }
.fqtab-timeline { border-left: 3px solid var(--border); padding-left: 1.25rem; }
.fqtab-tl-item { position: relative; margin-bottom: 1.25rem; }
.fqtab-tl-item::before { content: ''; position: absolute; left: -1.7rem; top: 0.3rem; width: 0.75rem; height: 0.75rem; border-radius: 999px; background: var(--accent); }
.fqtab-tl-year { font-size: 0.75rem; font-weight: 800; color: var(--accent); }
.fqtab-match { display: flex; align-items: center; justify-content: space-between; gap: 0.75rem; padding: 0.6rem 0; border-bottom: 1px solid var(--border); }
.fqtab-match select { border: 1px solid var(--border); border-radius: 0.5rem; padding: 0.35rem 0.5rem; font-size: 0.85rem; background: var(--bg); color: var(--text); }
.fqtab-ok { color: #16a34a; font-weight: 700; }
.fqtab-bad { color: #dc2626; font-weight: 700; }
.fqtab-btn { background: var(--accent); color: white; border-radius: 999px; padding: 0.5rem 1.2rem; font-size: 0.85rem; font-weight: 600; cursor: pointer; border: none; }
</style>

<section data-label="O LEGO" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">1. O LEGO do Universo 🧩</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Com um número limitado de blocos de LEGO — ou de blocos no Minecraft — consegues construir quase tudo: uma casa, um carro, uma nave espacial. O universo funciona com a mesma lógica, mas os blocos chamam-se <strong>elementos químicos</strong>. A Tabela Periódica não é um póster assustador para decorar: é o <strong>catálogo de peças</strong> de tudo o que existe. E são pouco mais de 100 "tijolos" fundamentais.</p>

  <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
    <div class="fqtab-card text-center"><div class="text-3xl mb-2">📱</div><div class="font-bold text-sm">O teu telemóvel</div></div>
    <div class="fqtab-card text-center"><div class="text-3xl mb-2">⭐</div><div class="font-bold text-sm">As estrelas</div></div>
    <div class="fqtab-card text-center"><div class="text-3xl mb-2">🍎</div><div class="font-bold text-sm">A tua comida</div></div>
    <div class="fqtab-card text-center"><div class="text-3xl mb-2">🧬</div><div class="font-bold text-sm">O teu ADN</div></div>
  </div>
  <p class="text-sm text-center mt-3" style="color:var(--muted);">Tudo isto é feito dos mesmos tijolos, combinados de maneiras diferentes.</p>
</section>

<section data-label="O Átomo" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">2. A Anatomia do Tijolo ⚛️</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Toda a matéria é feita de átomos, e um átomo tem apenas três ingredientes: <strong>protões</strong> (carga positiva) e <strong>neutrões</strong> (sem carga) no núcleo, e <strong>eletrões</strong> (carga negativa) a orbitar à volta. O que distingue o ouro do oxigénio é apenas a <strong>quantidade</strong> de protões — o chamado <strong>Número Atómico</strong>.</p>

  <div class="grid md:grid-cols-3 gap-3 mb-6">
    <div class="fqtab-card"><div class="text-2xl mb-1">➕</div><h3 class="font-bold text-sm">Protões</h3><p class="text-xs" style="color:var(--muted);">Carga positiva. Vivem no núcleo e definem o elemento.</p></div>
    <div class="fqtab-card"><div class="text-2xl mb-1">⚪</div><h3 class="font-bold text-sm">Neutrões</h3><p class="text-xs" style="color:var(--muted);">Sem carga. Também vivem no núcleo.</p></div>
    <div class="fqtab-card"><div class="text-2xl mb-1">➖</div><h3 class="font-bold text-sm">Eletrões</h3><p class="text-xs" style="color:var(--muted);">Carga negativa. Orbitam à volta do núcleo.</p></div>
  </div>

  <div class="fqtab-card">
    <p class="text-sm font-semibold mb-3">🎛️ Arrasta para adicionar protões ao núcleo e vê o elemento mudar:</p>
    <div class="flex items-center gap-4 mb-4">
      <div class="fqtab-tile">
        <div class="fqtab-tile-z" id="fqtabZ">1</div>
        <div class="fqtab-tile-sym" id="fqtabSym">H</div>
        <div class="fqtab-tile-name" id="fqtabName">Hidrogénio</div>
      </div>
      <p class="text-sm leading-relaxed" id="fqtabNote" style="color:#334155;"></p>
    </div>
    <input type="range" class="fqtab-range" id="fqtabRange" min="1" max="92" step="1" value="1" aria-label="Número de protões">
    <div class="flex justify-between text-xs mt-1" style="color:var(--muted);"><span>1 protão</span><span>92 protões</span></div>
    <div class="flex flex-wrap gap-2 mt-4">
      <button class="fqtab-tab" data-z="80">☿️ Mercúrio (80)</button>
      <button class="fqtab-tab" data-z="79">🥇 Tira-lhe 1 protão…</button>
    </div>
  </div>
</section>

<section data-label="Mendeleev" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">3. Mendeleev: O Homem que Previu o Futuro 🔮</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Em 1869, o químico russo <strong>Dmitri Mendeleev</strong> decidiu arrumar os 63 elementos conhecidos. Ordenou-os por peso e reparou que certas propriedades se repetiam <em>periodicamente</em> — daí o nome da tabela.</p>

  <div class="fqtab-timeline mb-6">
    <div class="fqtab-tl-item">
      <div class="fqtab-tl-year">1869</div>
      <p class="text-sm" style="color:#334155;">Mendeleev organiza os <strong>63 elementos</strong> conhecidos por peso e descobre padrões que se repetem.</p>
    </div>
    <div class="fqtab-tl-item">
      <div class="fqtab-tl-year">A grande sacada</div>
      <p class="text-sm" style="color:#334155;">Quando a sequência não batia certo, <strong>deixou espaços em branco</strong>: elementos que existiam, mas ainda ninguém tinha descoberto. Até previu o seu peso e a sua cor.</p>
    </div>
    <div class="fqtab-tl-item">
      <div class="fqtab-tl-year">Anos mais tarde</div>
      <p class="text-sm" style="color:#334155;">São descobertos o <strong>Gálio</strong> e o <strong>Germânio</strong> — e as suas características batem exatamente certo com as previsões dos "elementos fantasma".</p>
    </div>
  </div>

  <div class="fqtab-card" style="background:#1e293b;border-color:#334155;">
    <p class="text-sm leading-relaxed" style="color:#cbd5e1;">🔍 A genialidade de Mendeleev não foi arrumar o que já se conhecia — foi ter a coragem de dizer: <strong style="color:#5eead4;">"aqui falta uma peça, e ela vai aparecer"</strong>. Uma boa teoria científica não só explica o passado, como prevê o futuro.</p>
  </div>
</section>

<section data-label="Famílias" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">4. O "Código Postal" dos Elementos 🏘️</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">A tabela está organizada como uma cidade. As <strong>colunas</strong> (grupos ou famílias) juntam elementos com "feitios" parecidos. As <strong>linhas</strong> (períodos) indicam o número de camadas de eletrões. Clica para destacar uma parte da tabela (aqui estão os primeiros 36 elementos):</p>

  <div class="flex flex-wrap gap-2 mb-4" id="fqtabFamTabs">
    <button class="fqtab-tab active" data-key="g18">🎩 Gases Nobres</button>
    <button class="fqtab-tab" data-key="g1">💥 Metais Alcalinos</button>
    <button class="fqtab-tab" data-key="p2">↔️ Um período</button>
  </div>
  <div class="fqtab-card mb-4">
    <div class="fqtab-grid" id="fqtabGrid"></div>
  </div>
  <div id="fqtabFamPanel" class="fqtab-card fqtab-panel"></div>
</section>

<section data-label="Casos Reais" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">5. Casos Reais 🚨</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <div class="fqtab-card mb-6">
    <div class="text-2xl mb-2">🔋</div>
    <h3 class="font-bold text-sm mb-1">O Lítio e a Revolução Digital</h3>
    <p class="text-sm leading-relaxed" style="color:#334155;">O Lítio (Li) é o elemento número 3 e o <strong>metal mais leve</strong> do universo. É muito reativo e consegue guardar muita energia elétrica num espaço pequeno. Sem ele não existiriam baterias recarregáveis leves — logo, nem <em>smartphones</em>, nem portáteis, nem carros elétricos.</p>
  </div>

  <p class="prose-lesson mb-4"><strong>Carbono: o lápis e o diamante.</strong> A forma como os tijolos se ligam é tão importante como o tijolo em si. Escolhe a ligação:</p>
  <div class="flex flex-wrap gap-2 mb-4" id="fqtabCarbonTabs">
    <button class="fqtab-tab active" data-key="grafite">✏️ Folhas planas</button>
    <button class="fqtab-tab" data-key="diamante">💎 Grelha 3D rígida</button>
  </div>
  <div id="fqtabCarbonPanel" class="fqtab-card fqtab-panel"></div>
</section>

<section data-label="Sabias que" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">6. Sabias que...? 💡</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <div class="callout-sabias mb-4">
    <div class="callout-label">Sabias que?</div>
    <p class="text-sm leading-relaxed" style="color:#334155;"><strong>Somos poeira de estrelas.</strong> O Big Bang criou essencialmente Hidrogénio e Hélio. O Cálcio dos teus ossos, o Ferro do teu sangue e o Oxigénio que respiras foram forjados no núcleo de estrelas gigantes que explodiram como supernovas há milhares de milhões de anos. O teu corpo é reciclagem cósmica!</p>
  </div>
  <div class="callout-sabias">
    <div class="callout-label">Sabias que?</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">A natureza deixou de fabricar elementos estáveis por volta do <strong>Urânio (92)</strong>. Os mais pesados, como o Einsténio ou o Amerício, são criados pelo ser humano em aceleradores de partículas. O <strong>Amerício</strong> salva vidas: está dentro dos detetores de fumo que temos em casa.</p>
  </div>
</section>

<section data-label="Detetive" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">7. Desafio: Detetive de Elementos 🔍</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">A tabela periódica está escondida na tua mochila e na tua cozinha. Associa cada objeto ao elemento que lhe dá funcionalidade.</p>

  <div class="fqtab-card">
    <div id="fqtabMatch"></div>
    <div class="flex items-center gap-3 mt-4">
      <button class="fqtab-btn" id="fqtabCheck">Verificar</button>
      <span class="text-sm font-semibold" id="fqtabScore"></span>
    </div>
  </div>
  <div class="callout-sabias mt-4">
    <div class="callout-label">Para discutir</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">Escolhe um destes elementos: o que aconteceria se ele simplesmente desaparecesse do planeta Terra hoje?</p>
  </div>
</section>

<script>
(function () {
  function bindTabs(groupId, panelId, data, render) {
    var group = document.getElementById(groupId);
    var panel = document.getElementById(panelId);
    var btns = group.querySelectorAll('button');
    function show(key) {
      panel.innerHTML = render(data[key], key);
      panel.classList.remove('fqtab-fade');
      void panel.offsetWidth;
      panel.classList.add('fqtab-fade');
      btns.forEach(function (b) { b.classList.toggle('active', b.dataset.key === key); });
    }
    btns.forEach(function (b) { b.addEventListener('click', function () { show(b.dataset.key); }); });
    show(btns[0].dataset.key);
  }
  function head(icon, title) { return '<h4 class="font-bold text-base mb-2" style="color:var(--accent);">' + icon + ' ' + title + '</h4>'; }
  function body(text) { return '<p class="text-sm leading-relaxed" style="color:#334155;">' + text + '</p>'; }

  /* 2. Slider de protões */
  var EL = 'H Hidrogénio|He Hélio|Li Lítio|Be Berílio|B Boro|C Carbono|N Azoto|O Oxigénio|F Flúor|Ne Néon|Na Sódio|Mg Magnésio|Al Alumínio|Si Silício|P Fósforo|S Enxofre|Cl Cloro|Ar Árgon|K Potássio|Ca Cálcio|Sc Escândio|Ti Titânio|V Vanádio|Cr Crómio|Mn Manganês|Fe Ferro|Co Cobalto|Ni Níquel|Cu Cobre|Zn Zinco|Ga Gálio|Ge Germânio|As Arsénio|Se Selénio|Br Bromo|Kr Crípton|Rb Rubídio|Sr Estrôncio|Y Ítrio|Zr Zircónio|Nb Nióbio|Mo Molibdénio|Tc Tecnécio|Ru Ruténio|Rh Ródio|Pd Paládio|Ag Prata|Cd Cádmio|In Índio|Sn Estanho|Sb Antimónio|Te Telúrio|I Iodo|Xe Xénon|Cs Césio|Ba Bário|La Lantânio|Ce Cério|Pr Praseodímio|Nd Neodímio|Pm Promécio|Sm Samário|Eu Európio|Gd Gadolínio|Tb Térbio|Dy Disprósio|Ho Hólmio|Er Érbio|Tm Túlio|Yb Itérbio|Lu Lutécio|Hf Háfnio|Ta Tântalo|W Tungsténio|Re Rénio|Os Ósmio|Ir Irídio|Pt Platina|Au Ouro|Hg Mercúrio|Tl Tálio|Pb Chumbo|Bi Bismuto|Po Polónio|At Ástato|Rn Rádon|Fr Frâncio|Ra Rádio|Ac Actínio|Th Tório|Pa Protactínio|U Urânio'.split('|').map(function (s) { var i = s.indexOf(' '); return [s.slice(0, i), s.slice(i + 1)]; });
  var NOTES = {
    1: 'O mais simples de todos: 1 protão. Foi um dos dois elementos criados pelo Big Bang.',
    2: 'Gás nobre, o segundo elemento criado pelo Big Bang.',
    3: 'O metal mais leve do universo — o coração das baterias dos telemóveis.',
    6: 'A base da vida. Pode ser grafite de lápis ou diamante.',
    8: 'O gás que respiras foi forjado dentro de estrelas.',
    9: 'Está na pasta de dentes e protege o esmalte.',
    18: 'Gás nobre: não quer misturar-se com ninguém.',
    19: 'Metal alcalino muito reativo — e está nas bananas!',
    20: 'O elemento dos teus ossos.',
    26: 'O Ferro do teu sangue também veio das estrelas.',
    31: 'Um dos "elementos fantasma" previstos por Mendeleev.',
    32: 'Outro "elemento fantasma" previsto por Mendeleev.',
    49: 'Ajuda os ecrãs táteis a funcionar.',
    79: 'Ouro! Exatamente 1 protão a menos do que o Mercúrio.',
    80: 'Mercúrio. Se lhe tirasses 1 protão, viraria Ouro.',
    92: 'Urânio: a natureza deixa de fabricar elementos estáveis por aqui.'
  };
  var range = document.getElementById('fqtabRange');
  function showZ() {
    var z = parseInt(range.value, 10);
    var el = EL[z - 1];
    document.getElementById('fqtabZ').textContent = z;
    document.getElementById('fqtabSym').textContent = el[0];
    document.getElementById('fqtabName').textContent = el[1];
    document.getElementById('fqtabNote').innerHTML = '<strong>' + z + (z === 1 ? ' protão' : ' protões') + '</strong> no núcleo = ' + el[1] + '. ' + (NOTES[z] || '');
  }
  range.addEventListener('input', showZ);
  document.querySelectorAll('[data-z]').forEach(function (b) {
    b.addEventListener('click', function () { range.value = b.dataset.z; showZ(); });
  });
  showZ();

  /* 4. Mini tabela periódica (Z 1–36) */
  var cols = [1, 18, 1, 2, 13, 14, 15, 16, 17, 18, 1, 2, 13, 14, 15, 16, 17, 18];
  for (var c = 1; c <= 18; c++) cols.push(c);
  var rows = [1, 1, 2, 2, 2, 2, 2, 2, 2, 2, 3, 3, 3, 3, 3, 3, 3, 3];
  for (var r = 0; r < 18; r++) rows.push(4);
  var grid = document.getElementById('fqtabGrid');
  var cells = [];
  for (var z = 1; z <= 36; z++) {
    var cell = document.createElement('div');
    cell.className = 'fqtab-cell';
    cell.textContent = EL[z - 1][0];
    cell.title = EL[z - 1][1];
    cell.style.gridColumn = cols[z - 1];
    cell.style.gridRow = rows[z - 1];
    grid.appendChild(cell);
    cells.push({ el: cell, col: cols[z - 1], row: rows[z - 1] });
  }
  var fam = {
    g18: { col: 18, icon: '🎩', title: 'Gases Nobres (Grupo 18)', text: 'Os "snobs" da tabela. Têm a camada de eletrões completa, por isso são extremamente estáveis e recusam-se a reagir ou a misturar-se com os outros elementos.' },
    g1: { col: 1, icon: '💥', title: 'Metais Alcalinos (Grupo 1)', text: 'Altamente instáveis e "emocionais". O Sódio ou o Potássio reagem de forma tão violenta que podem explodir só por tocarem em água. (O Hidrogénio aparece no topo desta coluna, mas não é um metal.)' },
    p2: { row: 2, icon: '↔️', title: 'Um Período (linha 2)', text: 'Todos os elementos da mesma linha têm o mesmo número de camadas de eletrões. Quanto mais para baixo na tabela, mais camadas — e mais complexo é o átomo.' }
  };
  bindTabs('fqtabFamTabs', 'fqtabFamPanel', fam, function (d) {
    cells.forEach(function (c) { c.el.classList.toggle('hl', d.col ? c.col === d.col : c.row === d.row); });
    return head(d.icon, d.title) + body(d.text);
  });

  /* 5. Carbono */
  var carbon = {
    grafite: { icon: '✏️', title: 'Grafite', text: 'Átomos de carbono ligados em <strong>folhas planas e deslizantes</strong>. Resultado: o material macio e escuro na ponta do lápis — o objeto mais barato do estojo.' },
    diamante: { icon: '💎', title: 'Diamante', text: 'Os <strong>mesmos átomos de carbono</strong>, sob pressão extrema, ligados numa grelha tridimensional rígida. Resultado: a substância natural mais dura que conhecemos — e uma das joias mais caras do mundo.' }
  };
  bindTabs('fqtabCarbonTabs', 'fqtabCarbonPanel', carbon, function (d) { return head(d.icon, d.title) + body(d.text); });

  /* 7. Detetive de Elementos */
  var items = [
    { obj: '🍌 Uma banana', ans: 'K' },
    { obj: '🪥 Pasta de dentes', ans: 'F' },
    { obj: '📱 Ecrã tátil do telemóvel', ans: 'In' },
    { obj: '🩸 Sangue humano', ans: 'Fe' }
  ];
  var opts = [['', 'Escolhe…'], ['F', 'Flúor (F)'], ['Fe', 'Ferro (Fe)'], ['K', 'Potássio (K)'], ['In', 'Índio (In)']];
  var match = document.getElementById('fqtabMatch');
  match.innerHTML = items.map(function (it, i) {
    return '<div class="fqtab-match"><span class="text-sm font-semibold">' + it.obj + '</span><span class="flex items-center gap-2"><select data-i="' + i + '">' +
      opts.map(function (o) { return '<option value="' + o[0] + '">' + o[1] + '</option>'; }).join('') +
      '</select><span class="fqtab-res" style="min-width:1.2rem;"></span></span></div>';
  }).join('');
  document.getElementById('fqtabCheck').addEventListener('click', function () {
    var right = 0;
    match.querySelectorAll('select').forEach(function (s) {
      var ok = s.value === items[s.dataset.i].ans;
      if (ok) right++;
      var res = s.parentNode.querySelector('.fqtab-res');
      res.textContent = ok ? '✓' : '✗';
      res.className = 'fqtab-res ' + (ok ? 'fqtab-ok' : 'fqtab-bad');
    });
    document.getElementById('fqtabScore').textContent = right === 4 ? '🎉 4/4 — detetive de elite!' : right + '/4 certas — tenta outra vez.';
  });
}());
</script>
