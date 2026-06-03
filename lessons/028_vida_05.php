<?php $reflection_question = 'Se a evolução é um processo contínuo, qual seria o próximo passo da evolução humana considerando a nossa dependência tecnológica e a medicina moderna que "pausa" alguns aspetos da seleção natural? Justifica com base na biologia evolutiva.'; ?>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
.vida5-card { background: var(--card-bg); border: 1px solid var(--border); border-radius: 1rem; padding: 1.5rem; }
.vida5-tab-btn { border: 2px solid var(--border); border-radius: 999px; padding: 0.35rem 0.85rem; font-size: 0.78rem; font-weight: 600; cursor: pointer; transition: all 0.2s; background: var(--bg); color: var(--text); }
.vida5-tab-btn.active { background: var(--accent); border-color: var(--accent); color: white; }
.vida5-tab-panel { display: none; }
.vida5-tab-panel.active { display: block; }
.vida5-chart-wrap { position: relative; max-width: 340px; margin: 0 auto; }
</style>

<section data-label="O Nosso Lugar" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">1. A Nossa Identidade Biológica 🧬</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">Durante séculos, a humanidade viu-se como o pináculo da criação. A biologia moderna ensina-nos o contrário: somos apenas um ramo sobrevivente de uma árvore imensa e complexa de primatas.</p>

  <div class="grid md:grid-cols-3 gap-4 mb-5">
    <div class="vida5-card text-center">
      <div class="text-3xl mb-2">🐒</div>
      <h3 class="font-bold text-sm mb-1" style="color:var(--accent);">Ordem Primatas</h3>
      <p class="text-xs leading-relaxed" style="color:#334155;">Visão estereoscópica (3D), polegares oponíveis e cérebros grandes. Inclui macacos, símios e humanos.</p>
    </div>
    <div class="vida5-card text-center">
      <div class="text-3xl mb-2">🦍</div>
      <h3 class="font-bold text-sm mb-1" style="color:var(--accent);">Família Hominidae</h3>
      <p class="text-xs leading-relaxed" style="color:#334155;">Os grandes símios: Orangotangos, Gorilas, Chimpanzés e Humanos. Todos partilhamos um ancestral comum.</p>
    </div>
    <div class="vida5-card text-center" style="background:#1e293b;border-color:#334155;">
      <div class="text-3xl mb-2">🚶</div>
      <h3 class="font-bold text-sm mb-1" style="color:#5eead4;">Tribo Hominini</h3>
      <p class="text-xs leading-relaxed" style="color:#cbd5e1;">O nosso grupo: humanos modernos + todos os antepassados extintos desde a separação do chimpanzé (~7 Ma).</p>
    </div>
  </div>

  <div class="callout-sabias">
    <div class="callout-label">Conceito-Chave</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">A evolução humana <strong>não é uma linha reta</strong> — como a famosa e errada imagem da "Marcha do Progresso". É um <strong>arbusto filogenético</strong> onde várias espécies de hominídeos coexistiram, competiram e, por vezes, cruzaram-se.</p>
  </div>
</section>

<section data-label="Adaptações" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">2. As Adaptações que nos Definiram 🦴</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <div class="grid md:grid-cols-2 gap-4 mb-6">
    <div class="vida5-card">
      <h3 class="font-bold text-sm mb-2" style="color:var(--accent);">🚶 Bipedismo: O Primeiro Passo</h3>
      <p class="text-sm leading-relaxed mb-2" style="color:#334155;">Muito antes do aumento do cérebro, os nossos antepassados levantaram-se. O <em>foramen magnum</em> deslocou-se para o centro do crânio, a bacia alargou-se e desenvolveu-se o arco plantar.</p>
      <p class="text-xs" style="color:#475569;"><strong>Porquê?</strong> Ver por cima da erva alta, libertar as mãos para ferramentas e filhos, e reduzir a exposição ao sol do meio-dia.</p>
    </div>
    <div class="vida5-card">
      <h3 class="font-bold text-sm mb-2" style="color:var(--accent);">🧠 Encefalização e Dieta</h3>
      <p class="text-sm leading-relaxed mb-2" style="color:#334155;">O cérebro humano consome <strong>20% da nossa energia total</strong>. Para crescer, outro sistema teve de encolher.</p>
      <p class="text-xs" style="color:#475569;"><strong>Hipótese do Tecido Dispendioso:</strong> Com o fogo e o cozimento, a digestão simplificou-se, o sistema digestivo encolheu e a energia foi redirecionada para o cérebro. Volume craniano: ~450 cm³ → ~1400 cm³.</p>
    </div>
  </div>

  <div class="vida5-chart-wrap">
    <canvas id="vidaEncephalizationChart"></canvas>
  </div>
</section>

<section data-label="Antepassados" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">3. Os Protagonistas da Nossa Linhagem 🦴</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <div class="flex flex-wrap gap-2 mb-4">
    <button class="vida5-tab-btn active" data-vtab="sahel">Sahelanthropus</button>
    <button class="vida5-tab-btn" data-vtab="lucy">Lucy</button>
    <button class="vida5-tab-btn" data-vtab="habilis">H. habilis</button>
    <button class="vida5-tab-btn" data-vtab="erectus">H. erectus</button>
    <button class="vida5-tab-btn" data-vtab="neandertal">Neandertal</button>
  </div>

  <div id="vtab-sahel" class="vida5-tab-panel active vida5-card">
    <div class="flex gap-3 items-start">
      <span class="text-3xl">🌿</span>
      <div>
        <h3 class="font-bold text-sm mb-1" style="color:var(--accent);">Sahelanthropus tchadensis — 7 milhões de anos</h3>
        <p class="text-sm leading-relaxed" style="color:#334155;">Possivelmente o elo mais antigo conhecido. Descoberto no Chade, a sua postura sugere que a separação do ancestral comum com o chimpanzé aconteceu mais cedo do que se pensava.</p>
      </div>
    </div>
  </div>
  <div id="vtab-lucy" class="vida5-tab-panel vida5-card">
    <div class="flex gap-3 items-start">
      <span class="text-3xl">🦴</span>
      <div>
        <h3 class="font-bold text-sm mb-1" style="color:var(--accent);">Australopithecus afarensis "Lucy" — 3,2 milhões de anos</h3>
        <p class="text-sm leading-relaxed" style="color:#334155;">Totalmente bípede, mas com um cérebro do tamanho de um símio. "Lucy" provou que o bipedalismo surgiu muito antes do aumento cerebral — contrariando teorias anteriores.</p>
      </div>
    </div>
  </div>
  <div id="vtab-habilis" class="vida5-tab-panel vida5-card">
    <div class="flex gap-3 items-start">
      <span class="text-3xl">🪨</span>
      <div>
        <h3 class="font-bold text-sm mb-1" style="color:var(--accent);">Homo habilis — 2,4 milhões de anos</h3>
        <p class="text-sm leading-relaxed" style="color:#334155;">O "homem habilidoso" — o primeiro da nossa linhagem associado ao uso sistemático de ferramentas de pedra (Indústria Olduvaiense). Um cérebro maior permitiu resolver problemas que os australopithecus não conseguiam.</p>
      </div>
    </div>
  </div>
  <div id="vtab-erectus" class="vida5-tab-panel vida5-card">
    <div class="flex gap-3 items-start">
      <span class="text-3xl">🔥</span>
      <div>
        <h3 class="font-bold text-sm mb-1" style="color:var(--accent);">Homo erectus — 1,9 milhões de anos</h3>
        <p class="text-sm leading-relaxed" style="color:#334155;">O <strong>primeiro grande viajante</strong>. Saiu de África e colonizou a Ásia e a Europa. Foi o primeiro hominídeo a dominar o fogo — uma revolução que mudou a dieta, a sociabilidade e o próprio desenvolvimento cerebral.</p>
      </div>
    </div>
  </div>
  <div id="vtab-neandertal" class="vida5-tab-panel vida5-card">
    <div class="flex gap-3 items-start">
      <span class="text-3xl">❄️</span>
      <div>
        <h3 class="font-bold text-sm mb-1" style="color:var(--accent);">Homo neanderthalensis — 400 000 anos</h3>
        <p class="text-sm leading-relaxed" style="color:#334155;">Adaptado ao frio europeu, com um cérebro <strong>maior que o nosso</strong> e cultura complexa — enterravam os mortos e usavam ornamentos. Coexistiu e cruzou-se com o Homo sapiens, deixando um legado genético que ainda carregamos.</p>
      </div>
    </div>
  </div>
</section>

<section data-label="DNA Neandertal" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">4. O Fantasma no Nosso DNA ☣️</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <div class="vida5-card mb-5" style="background:#1e293b;border-color:#334155;">
    <h3 class="font-bold text-base mb-2" style="color:#5eead4;">1% a 4% de DNA Neandertal</h3>
    <p class="text-sm leading-relaxed mb-2" style="color:#e2e8f0;">Todos os humanos modernos <strong>fora de África</strong> carregam entre 1% a 4% de DNA Neandertal. Isto prova que quando o Homo sapiens saiu de África, encontrou e cruzou-se com os Neandertais na Europa e Ásia.</p>
    <p class="text-sm" style="color:#94a3b8;">Estes genes Neandertais contribuem para o nosso sistema imunitário, resistência ao frio e possivelmente certos traços físicos. Somos, literalmente, híbridos.</p>
  </div>

  <div class="callout-sabias">
    <div class="callout-label">Sabias que?</div>
    <p class="text-sm leading-relaxed mb-2" style="color:#334155;">O <strong>Homo floresiensis</strong> — o "Hobbit" — viveu na Indonésia até há apenas 50 000 anos. Era um humano com apenas <strong>1 metro de altura</strong> e um cérebro minúsculo, que desenvolveu ferramentas de pedra complexas apesar do tamanho.</p>
    <p class="text-sm leading-relaxed mb-2" style="color:#334155;">A mutação no gene <strong>FOXP2</strong> é considerada crucial para o desenvolvimento da linguagem complexa nos humanos — o mesmo gene que, quando alterado, causa graves dificuldades de fala e linguagem.</p>
    <p class="text-sm leading-relaxed" style="color:#334155;">Há 70 000 anos, a nossa espécie esteve perto da <strong>extinção</strong> devido à super-erupção do vulcão Toba (Indonésia). Estudos genéticos sugerem que restaram apenas cerca de <strong>10 000 adultos reprodutores</strong> em todo o mundo.</p>
  </div>
</section>

<script>
(function () {
  var ctx = document.getElementById('vidaEncephalizationChart').getContext('2d');
  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Australopithecus', 'H. habilis', 'H. erectus', 'Neandertal', 'H. sapiens'],
      datasets: [{
        label: 'Volume craniano (cm³)',
        data: [450, 650, 950, 1500, 1400],
        backgroundColor: ['#94a3b8', '#64748b', '#475569', '#334155', '#f43f5e'],
        borderRadius: 6,
        borderSkipped: false
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: { display: false },
        tooltip: { callbacks: { label: function (c) { return ' ' + c.parsed.y + ' cm³'; } } }
      },
      scales: {
        y: { beginAtZero: true, title: { display: true, text: 'cm³', font: { size: 11 } }, grid: { color: 'rgba(0,0,0,0.06)' } },
        x: { grid: { display: false } }
      }
    }
  });

  document.querySelectorAll('.vida5-tab-btn').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var tab = this.dataset.vtab;
      document.querySelectorAll('.vida5-tab-btn').forEach(function (b) { b.classList.remove('active'); });
      document.querySelectorAll('.vida5-tab-panel').forEach(function (p) { p.classList.remove('active'); });
      this.classList.add('active');
      document.getElementById('vtab-' + tab).classList.add('active');
    });
  });
}());
</script>
