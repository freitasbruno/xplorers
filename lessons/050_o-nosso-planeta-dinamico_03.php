<?php $reflection_question = 'Temos mapas melhores de Marte do que do fundo do nosso próprio oceano. Valerá mais a pena explorar o espaço ou o mar profundo? E o que poderíamos perder se começarmos a explorar o fundo do mar, por exemplo para tirar metais, antes de o conhecermos bem?'; ?>

<style>
.pdoce-card { background: var(--card-bg); border: 1px solid var(--border); border-radius: 1rem; padding: 1.5rem; }
.pdoce-tab { border: 2px solid var(--border); border-radius: 999px; padding: 0.4rem 1rem; font-size: 0.8rem; font-weight: 600; cursor: pointer; transition: all 0.2s ease; background: var(--bg); color: var(--text); }
.pdoce-tab:hover { border-color: var(--accent); }
.pdoce-tab.active { background: var(--accent); border-color: var(--accent); color: white; }
.pdoce-panel { min-height: 110px; }
.pdoce-fade { animation: pdoceFade 0.3s ease; }
@keyframes pdoceFade { from { opacity: 0; transform: translateY(4px); } to { opacity: 1; transform: none; } }
.pdoce-dive { border-radius: 1rem; padding: 1.5rem; color: white; transition: background 0.4s ease; border: 1px solid #0f172a; }
.pdoce-range { width: 100%; accent-color: #22d3ee; }
.pdoce-gauge { display: grid; grid-template-columns: repeat(3, 1fr); gap: 0.75rem; }
@media (max-width: 520px) { .pdoce-gauge { grid-template-columns: 1fr; } }
.pdoce-gauge div { background: rgba(255,255,255,0.08); border: 1px solid rgba(255,255,255,0.15); border-radius: 0.75rem; padding: 0.6rem 0.8rem; }
.pdoce-glow-box { background: #020617; border: 1px solid #1e293b; border-radius: 1rem; padding: 1.5rem; }
.pdoce-glow-box .pdoce-tab { background: #0f172a; color: #cbd5e1; border-color: #334155; }
.pdoce-glow-box .pdoce-tab.active { background: #0e7490; border-color: #22d3ee; color: white; }
.pdoce-glow { font-size: 2.5rem; display: inline-block; filter: drop-shadow(0 0 10px #22d3ee) drop-shadow(0 0 22px #22d3ee); animation: pdocePulse 2.2s ease-in-out infinite; }
.pdoce-glow.red { filter: drop-shadow(0 0 10px #ef4444) drop-shadow(0 0 22px #ef4444); }
@keyframes pdocePulse { 0%, 100% { opacity: 0.55; } 50% { opacity: 1; } }
.pdoce-check { display: flex; gap: 0.6rem; align-items: flex-start; padding: 0.55rem 0; border-bottom: 1px solid var(--border); cursor: pointer; }
.pdoce-check input { margin-top: 0.2rem; accent-color: var(--accent); }
</style>

<section data-label="A Fronteira" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">1. A Última Grande Fronteira 🌊</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Os oceanos cobrem cerca de <strong>71% da Terra</strong> e têm, em média, quase 4 km de profundidade. E, no entanto, temos mapas mais detalhados de <strong>Marte</strong> do que do fundo dos nossos próprios mares: só cerca de um quarto está mapeado em detalhe. Lá em baixo é sempre noite, faz frio e a pressão esmagaria um ser humano. Mesmo assim, há vida, e é das mais estranhas do planeta.</p>

  <div class="grid grid-cols-3 gap-3">
    <div class="pdoce-card text-center"><div class="text-2xl font-extrabold" style="color:var(--accent);">71%</div><div class="text-xs mt-1" style="color:var(--muted);">da Terra é oceano</div></div>
    <div class="pdoce-card text-center"><div class="text-2xl font-extrabold" style="color:var(--accent);">~4 km</div><div class="text-xs mt-1" style="color:var(--muted);">profundidade média</div></div>
    <div class="pdoce-card text-center"><div class="text-2xl font-extrabold" style="color:var(--accent);">~¼</div><div class="text-xs mt-1" style="color:var(--muted);">do fundo mapeado em detalhe</div></div>
  </div>
</section>

<section data-label="O Mergulho" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">2. Mergulho até ao Fundo do Mundo 🤿</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">A cada <strong>10 metros</strong> que descemos, a pressão aumenta o equivalente a toda a atmosfera por cima de nós. Arrasta o seletor e desce até ao <strong>Challenger Deep</strong>, na Fossa das Marianas, o ponto mais fundo da Terra:</p>

  <div class="pdoce-dive" id="pdoceDive">
    <div class="flex items-center justify-between mb-2">
      <span class="text-sm font-semibold" id="pdoceZone"></span>
      <span class="text-2xl font-extrabold" id="pdoceDepth"></span>
    </div>
    <input type="range" min="0" max="10900" step="100" value="0" class="pdoce-range mb-4" id="pdoceRange">
    <div class="pdoce-gauge mb-4">
      <div><div class="text-xs opacity-70">Pressão</div><div class="font-bold" id="pdocePress"></div></div>
      <div><div class="text-xs opacity-70">Luz do Sol</div><div class="font-bold" id="pdoceLight"></div></div>
      <div><div class="text-xs opacity-70">Quem anda por aqui</div><div class="font-bold" id="pdoceWho"></div></div>
    </div>
    <p class="text-sm leading-relaxed" id="pdoceNote" style="color:#e2e8f0;"></p>
  </div>
</section>

<section data-label="A Pressão" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">3. Como Se Sobrevive ao Esmagamento? 🐟</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">No fundo da Fossa das Marianas, a pressão é como ter o <strong>peso de um carro em cima da unha do polegar</strong>. Como é que há peixes a viver a mais de 8 000 metros?</p>

  <div class="grid md:grid-cols-3 gap-4">
    <div class="pdoce-card">
      <div class="text-2xl mb-2">🎈</div>
      <h3 class="font-bold text-sm mb-1">Sem bolsas de ar</h3>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">Muitos peixes têm uma bexiga cheia de ar para flutuar. No abismo seria esmagada, por isso os peixes das profundezas não a têm.</p>
    </div>
    <div class="pdoce-card">
      <div class="text-2xl mb-2">🍮</div>
      <h3 class="font-bold text-sm mb-1">Corpos gelatinosos</h3>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">São moles e cheios de água, que quase não se deixa comprimir. Uma estrutura rígida partia-se; uma gelatina aguenta.</p>
    </div>
    <div class="pdoce-card">
      <div class="text-2xl mb-2">🧪</div>
      <h3 class="font-bold text-sm mb-1">Química protetora</h3>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">As suas células têm moléculas especiais que protegem as proteínas da pressão. O peixe-caracol já foi filmado a mais de <strong>8 300 m</strong>.</p>
    </div>
  </div>
</section>

<section data-label="Vida Sem Sol" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">4. Vida Sem Sol: As Fontes Hidrotermais 🌋</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Em <strong>1977</strong>, o submarino Alvin encontrou, perto das Galápagos, fontes de água a <strong>até 400 °C</strong> a sair do fundo do mar. A água não ferve por causa da pressão. E à volta havia um oásis de vida: caranguejos, mexilhões e vermes gigantes. Mas como, sem luz? Compara:</p>

  <div class="flex flex-wrap gap-2 mb-4" id="pdoceFoodTabs">
    <button class="pdoce-tab active" data-key="foto">☀️ Fotossíntese</button>
    <button class="pdoce-tab" data-key="quimio">🧪 Quimiossíntese</button>
  </div>
  <div id="pdoceFoodPanel" class="pdoce-card pdoce-panel mb-6"></div>

  <div class="pdoce-card" style="background:#1e293b;border-color:#334155;">
    <div class="flex items-center gap-4 flex-wrap">
      <div class="text-4xl">🪱</div>
      <p class="text-xs leading-relaxed flex-1" style="color:#cbd5e1;min-width:200px;">Os <strong>vermes tubulares gigantes</strong> chegam aos 2 metros e <strong>não têm boca nem estômago</strong>. As bactérias vivem dentro deles e alimentam-nos. Muitos cientistas pensam que a vida na Terra pode ter começado num sítio parecido com estas fontes.</p>
    </div>
  </div>
</section>

<section data-label="Luzes" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">5. Bioluminescência: Luzes no Escuro ✨</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">No escuro total, a maioria dos animais que nadam no mar profundo <strong>fabrica a sua própria luz</strong>: uma reação química que produz luz "fria", sem calor. Quase sempre é azul-esverdeada, a cor que viaja mais longe na água. Para que serve?</p>

  <div class="pdoce-glow-box">
    <div class="flex flex-wrap gap-2 mb-5" id="pdoceGlowTabs">
      <button class="pdoce-tab active" data-key="cacar">🎣 Caçar</button>
      <button class="pdoce-tab" data-key="esconder">🫥 Esconder</button>
      <button class="pdoce-tab" data-key="defender">💨 Defender</button>
      <button class="pdoce-tab" data-key="segredo">🔴 Lanterna secreta</button>
    </div>
    <div id="pdoceGlowPanel" class="pdoce-panel"></div>
  </div>
</section>

<section data-label="Casos Reais" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">6. Casos Reais 🚨</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <div class="grid md:grid-cols-2 gap-4">
    <div class="pdoce-card">
      <div class="text-2xl mb-2">🛸</div>
      <h3 class="font-bold text-sm mb-1">A primeira descida (1960)</h3>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">Jacques Piccard e Don Walsh desceram ao Challenger Deep no batiscafo <strong>Trieste</strong>: quase 5 horas a descer e só 20 minutos lá em baixo. Só em 2012 alguém voltou: o realizador <strong>James Cameron</strong>, sozinho. À Lua foram 12 pessoas; ao fundo das Marianas, só umas poucas dezenas.</p>
    </div>
    <div class="pdoce-card">
      <div class="text-2xl mb-2">🇵🇹</div>
      <h3 class="font-bold text-sm mb-1">Oásis nos Açores</h3>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">Perto dos Açores há campos de fontes hidrotermais chamados <strong>Lucky Strike</strong>, <strong>Menez Gwen</strong> e <strong>Rainbow</strong>. O Lucky Strike fica a cerca de 1 700 m e é estudado por cientistas de todo o mundo. Algumas destas zonas estão protegidas, porque há interesse em explorar os metais do fundo do mar.</p>
    </div>
  </div>
</section>

<section data-label="Sabias que" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">7. Sabias que...? 💡</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <div class="callout-sabias mb-4">
    <div class="callout-label">Sabias que?</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">A <strong>lula-gigante</strong> pode ter mais de 12 metros e tem uns dos maiores olhos do reino animal, do tamanho de uma bola de futebol. Só foi fotografada viva pela primeira vez em <strong>2004</strong>.</p>
  </div>
  <div class="callout-sabias">
    <div class="callout-label">Sabias que?</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">A <strong>baleia-bicuda-de-Cuvier</strong> já foi registada a quase 3 000 metros de profundidade e consegue ficar mais de <strong>duas horas</strong> sem respirar.</p>
  </div>
</section>

<section data-label="Garrafa" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">8. Experiência: A Garrafa da Pressão 🧴</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Vamos ver como a pressão aumenta com a profundidade. Marca cada passo:</p>

  <div class="pdoce-card" id="pdoceChecklist">
    <label class="pdoce-check"><input type="checkbox"><span class="text-sm">Pede a um adulto para fazer três furos iguais numa garrafa de plástico: perto do fundo, a meio e perto do topo. Tapa-os com fita-cola.</span></label>
    <label class="pdoce-check"><input type="checkbox"><span class="text-sm">Enche a garrafa de água e põe-na no lava-loiça ou no exterior.</span></label>
    <label class="pdoce-check"><input type="checkbox"><span class="text-sm">Tira a fita-cola de uma vez e observa os três jatos.</span></label>
    <p class="text-sm font-semibold mt-4" id="pdoceCheckMsg" style="color:var(--muted);">0 de 3 passos feitos.</p>
  </div>
</section>

<script>
(function () {
  function head(icon, title, color) { return '<h4 class="font-bold text-base mb-2" style="color:' + (color || 'var(--accent)') + ';">' + icon + ' ' + title + '</h4>'; }
  function body(text, color) { return '<p class="text-sm leading-relaxed" style="color:' + (color || '#334155') + ';">' + text + '</p>'; }
  function bindTabs(groupId, panelId, data, render) {
    var group = document.getElementById(groupId);
    var panel = document.getElementById(panelId);
    var btns = group.querySelectorAll('[data-key]');
    function show(key) {
      panel.innerHTML = render(data[key]);
      panel.classList.remove('pdoce-fade'); void panel.offsetWidth; panel.classList.add('pdoce-fade');
      btns.forEach(function (b) { b.classList.toggle('active', b.dataset.key === key); });
    }
    btns.forEach(function (b) { b.addEventListener('click', function () { show(b.dataset.key); }); });
    show(btns[0].dataset.key);
  }

  /* 2. Mergulho */
  var zones = [
    { max: 200, name: '☀️ Zona da luz', light: 'Muita', who: 'Golfinhos, atuns, algas', color: '#0ea5e9' },
    { max: 1000, name: '🌆 Zona do crepúsculo', light: 'Quase nenhuma', who: 'Lulas, peixes-lanterna', color: '#1d4ed8' },
    { max: 4000, name: '🌑 Zona da meia-noite', light: 'Zero', who: 'Cachalotes, peixe-diabo', color: '#1e1b4b' },
    { max: 6000, name: '🕳️ Zona abissal', light: 'Zero', who: 'Pepinos-do-mar, polvos-dumbo', color: '#0f0a2e' },
    { max: 11000, name: '⚫ Zona hadal (as fossas)', light: 'Zero', who: 'Peixe-caracol, anfípodes', color: '#020617' }
  ];
  var notes = [
    [0, 'À superfície: a pressão é a da atmosfera, 1 vez.'],
    [100, 'A 100 m a pressão já é 11 vezes maior. É mais ou menos o limite de um mergulhador experiente sem equipamento especial.'],
    [200, 'Aqui acaba a luz suficiente para as algas fazerem fotossíntese.'],
    [1000, 'A partir daqui é noite eterna: nenhum raio de sol chega cá abaixo.'],
    [2000, 'Os cachalotes descem a esta profundidade para caçar lulas.'],
    [3000, 'A baleia-bicuda-de-Cuvier já foi registada quase aqui, aos 2 992 m.'],
    [3800, '🚢 Os destroços do Titanic estão a esta profundidade.'],
    [6000, 'Começam as fossas oceânicas: vales no fundo do mar, onde uma placa mergulha por baixo de outra.'],
    [8300, 'Aqui foi filmado o peixe mais profundo de sempre, um peixe-caracol.'],
    [8800, '🏔️ O Evereste mede 8 849 m. Posto no fundo da Fossa das Marianas, o seu cume ainda ficaria mais de 2 km debaixo de água.'],
    [10900, '🏁 Challenger Deep! Pressão mais de mil vezes maior do que à superfície: o peso de um carro em cima da unha do polegar.']
  ];
  var range = document.getElementById('pdoceRange');
  var dive = document.getElementById('pdoceDive');
  function updateDive() {
    var d = parseInt(range.value, 10);
    var z = zones.filter(function (x) { return d <= x.max; })[0] || zones[zones.length - 1];
    var note = notes[0][1];
    notes.forEach(function (n) { if (d >= n[0]) note = n[1]; });
    document.getElementById('pdoceDepth').textContent = d.toLocaleString('pt-PT') + ' m';
    document.getElementById('pdoceZone').textContent = z.name;
    document.getElementById('pdocePress').textContent = (1 + d / 10).toLocaleString('pt-PT', { maximumFractionDigits: 0 }) + '× a superfície';
    document.getElementById('pdoceLight').textContent = z.light;
    document.getElementById('pdoceWho').textContent = z.who;
    document.getElementById('pdoceNote').textContent = note;
    dive.style.background = z.color;
  }
  range.addEventListener('input', updateDive);
  updateDive();

  /* 4. Fotossíntese vs Quimiossíntese */
  var food = {
    foto: { icon: '☀️', title: 'Fotossíntese', text: 'As plantas e as algas usam a <strong>luz do Sol</strong> para fabricar alimento. Os animais comem-nas (ou comem quem as come). Quase toda a vida na Terra funciona assim, mas a luz só chega aos primeiros <strong>200 metros</strong> do oceano.' },
    quimio: { icon: '🧪', title: 'Quimiossíntese', text: 'Junto às fontes hidrotermais, há bactérias que usam a energia de <strong>químicos</strong> que saem do fundo, como o sulfureto de hidrogénio (que cheira a ovos podres). São elas a base da cadeia alimentar: <strong>vida sem precisar do Sol</strong>.' }
  };
  bindTabs('pdoceFoodTabs', 'pdoceFoodPanel', food, function (d) { return head(d.icon, d.title) + body(d.text); });

  /* 5. Bioluminescência */
  var glow = {
    cacar: { icon: '🐟', red: false, title: 'A cana de pesca luminosa', text: 'O <strong>peixe-diabo</strong> tem uma espécie de cana de pesca na cabeça com uma ponta que brilha. Os peixes pequenos aproximam-se da luz… e são engolidos.' },
    esconder: { icon: '🦑', red: false, title: 'A barriga iluminada', text: 'Vistos de baixo, os animais fazem sombra contra a pouca luz que vem de cima. Algumas lulas <strong>iluminam a barriga</strong> com a mesma intensidade, e a sombra desaparece. É camuflagem com luz!' },
    defender: { icon: '💨', red: false, title: 'A nuvem brilhante', text: 'Em vez de tinta preta, que no escuro não serve de nada, há lulas que largam uma <strong>nuvem de muco luminoso</strong>. O predador fica a olhar para a luz enquanto elas fogem.' },
    segredo: { icon: '🐉', red: true, title: 'A lanterna secreta', text: 'Quase nenhum animal do abismo consegue ver luz <strong>vermelha</strong>. Um peixe-dragão aproveita isso: acende uma luz vermelha que só ele vê, e caça sem ser visto.' }
  };
  bindTabs('pdoceGlowTabs', 'pdoceGlowPanel', glow, function (d) {
    return '<div class="flex items-start gap-4 flex-wrap"><span class="pdoce-glow' + (d.red ? ' red' : '') + '">' + d.icon + '</span><div style="flex:1;min-width:200px;">' +
      head('', d.title, d.red ? '#fca5a5' : '#67e8f9') + body(d.text, '#cbd5e1') + '</div></div>';
  });

  /* 8. Checklist */
  var boxes = document.querySelectorAll('#pdoceChecklist input');
  var msg = document.getElementById('pdoceCheckMsg');
  boxes.forEach(function (b) {
    b.addEventListener('change', function () {
      var n = Array.prototype.filter.call(boxes, function (x) { return x.checked; }).length;
      msg.innerHTML = n === boxes.length
        ? '🎉 O jato de baixo foi o mais longe? Tem mais água por cima a empurrá-lo. No fundo do mar acontece o mesmo, mas <strong>milhares de vezes mais forte</strong>!'
        : n + ' de ' + boxes.length + ' passos feitos.';
      msg.style.color = n === boxes.length ? 'var(--accent)' : 'var(--muted)';
    });
  });
}());
</script>
