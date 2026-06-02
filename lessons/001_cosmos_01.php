<?php $reflection_question = 'Ao olharmos para esta "receita" do Cosmos, percebemos que a nossa existência visível é apenas a ponta do iceberg. Como te sentes ao saber que fazes parte de um universo cujo funcionamento é, na sua maior parte, um completo mistério?'; ?>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
.cosmos-card { background: var(--card-bg); border: 1px solid var(--border); border-radius: 1rem; padding: 1.5rem; }
.zoo-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 1rem; }
@media (min-width: 640px) { .zoo-grid { grid-template-columns: repeat(3, 1fr); } }
.zoo-card { text-align: center; padding: 1.25rem 1rem; background: var(--card-bg); border: 1px solid var(--border); border-radius: 1rem; transition: transform 0.2s ease, box-shadow 0.2s ease; }
.zoo-card:hover { transform: translateY(-3px); box-shadow: 0 8px 24px -4px rgba(80,55,20,0.14); }
.composition-btn { border: 2px solid var(--border); border-radius: 999px; padding: 0.4rem 1rem; font-size: 0.8rem; font-weight: 600; cursor: pointer; transition: all 0.2s ease; background: var(--bg); color: var(--text); }
.composition-btn.active { background: var(--accent); border-color: var(--accent); color: white; }
.chart-wrap { position: relative; max-width: 280px; margin: 0 auto; }
</style>

<section data-label="O Vácuo" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">1. O Palco Invisível: O Grande Vácuo Silencioso 🌌</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Quando olhamos para o céu noturno, vemos pontos de luz separados por uma imensa escuridão. A nossa intuição diz-nos que essa escuridão é "nada". Na realidade, o espaço não é a ausência de tudo — é o <strong>tecido do próprio universo</strong>, o palco onde toda a existência acontece.</p>

  <div class="grid md:grid-cols-2 gap-4 mb-6">
    <div class="cosmos-card">
      <div class="text-2xl mb-3">🫙</div>
      <h3 class="font-bold text-base mb-2" style="color:var(--accent);">O que é um Vácuo?</h3>
      <p class="text-sm leading-relaxed" style="color:#334155;">Um vácuo é uma região onde a matéria existe em densidades extremamente baixas. Imagina um auditório gigante com apenas 3 ou 4 pessoas. Em cada metro cúbico do espaço flutuam apenas alguns átomos e partículas de poeira cósmica — é um <strong>vácuo quase perfeito</strong>.</p>
    </div>
    <div class="cosmos-card" style="background:#1e293b;border-color:#334155;">
      <div class="text-2xl mb-3">🤫</div>
      <h3 class="font-bold text-base mb-2" style="color:#5eead4;">O Silêncio Absoluto</h3>
      <p class="text-sm leading-relaxed" style="color:#cbd5e1;">O som precisa de um meio para viajar. Como as partículas no espaço estão incrivelmente distantes, as ondas sonoras não se propagam. A frase do filme <em>Alien</em> — "No espaço, ninguém te consegue ouvir a gritar" — está <strong>cientificamente correta</strong>.</p>
    </div>
  </div>
</section>

<section data-label="Receita Secreta" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">2. A Receita Secreta do Universo: O Bolo Cósmico 🍰</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Se pudéssemos meter o universo inteiro numa balança, o resultado desafiaria a nossa perceção. A maior parte do "bolo" cósmico é invisível e misteriosa. Clica em cada fatia para explorar.</p>

  <div class="grid md:grid-cols-2 gap-6 items-center mb-4">
    <div class="chart-wrap">
      <canvas id="universeChart"></canvas>
    </div>
    <div>
      <div class="flex flex-wrap gap-2 mb-4">
        <button class="composition-btn active" data-comp="common">Matéria Comum (5%)</button>
        <button class="composition-btn" data-comp="dark-matter">Matéria Escura (27%)</button>
        <button class="composition-btn" data-comp="dark-energy">Energia Escura (68%)</button>
      </div>
      <div id="comp-panel" class="cosmos-card min-h-[180px]"></div>
    </div>
  </div>

  <div class="callout-sabias mt-4">
    <div class="callout-label">Ponto-chave</div>
    <p class="text-sm leading-relaxed" style="color:#334155;"><strong>95% do universo</strong> é composto por matéria e energia escuras — duas entidades cuja natureza fundamental permanece um dos maiores mistérios da ciência moderna. Somos estranhos no nosso próprio Cosmos.</p>
  </div>
</section>

<section data-label="Zoo Cósmico" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">3. Um Passeio pelo "Zoo" Cósmico 🔭</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Apesar de ser apenas 5% do todo, a matéria comum organiza-se numa variedade espetacular de objetos celestes.</p>

  <div class="zoo-grid">
    <div class="zoo-card">
      <div class="text-4xl mb-3">⭐</div>
      <h3 class="font-bold text-sm mb-1">Estrelas</h3>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">Gigantescas bolas de plasma que produzem luz e calor através de fusão nuclear. O Sol é uma estrela anã amarela de tamanho médio.</p>
    </div>
    <div class="zoo-card">
      <div class="text-4xl mb-3">🪐</div>
      <h3 class="font-bold text-sm mb-1">Planetas</h3>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">Corpos que orbitam uma estrela, não têm luz própria e "limparam" a vizinhança orbital. Podem ser rochosos ou gasosos.</p>
    </div>
    <div class="zoo-card">
      <div class="text-4xl mb-3">✨</div>
      <h3 class="font-bold text-sm mb-1">Nebulosas</h3>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">Nuvens imensas de gás e poeira — os "berçários" do universo, onde nascem novas estrelas.</p>
    </div>
    <div class="zoo-card">
      <div class="text-4xl mb-3">🌌</div>
      <h3 class="font-bold text-sm mb-1">Galáxias</h3>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">"Cidades" cósmicas com milhares de milhões de estrelas unidas pela gravidade. A nossa é a Via Láctea.</p>
    </div>
    <div class="zoo-card">
      <div class="text-4xl mb-3">⚫</div>
      <h3 class="font-bold text-sm mb-1">Buracos Negros</h3>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">Regiões com gravidade tão esmagadora que nada — nem mesmo a luz — consegue escapar.</p>
    </div>
    <div class="zoo-card">
      <div class="text-4xl mb-3">☄️</div>
      <h3 class="font-bold text-sm mb-1">Cometas</h3>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">Corpos de gelo, rocha e poeira. Perto do Sol, criam uma cauda brilhante de milhões de quilómetros.</p>
    </div>
  </div>
</section>

<script>
(function () {
  const compData = {
    common: {
      title: 'Matéria Comum (~5%): O Mundo que Conhecemos',
      body: 'Esta é a única fatia que conseguimos ver e tocar. Inclui tudo o que é feito de átomos: estrelas, planetas, galáxias e até nós próprios. É tudo o que a humanidade já observou diretamente.',
      note: 'Analogia: é a cobertura visível do bolo cósmico — a parte que identificamos e conhecemos.'
    },
    'dark-matter': {
      title: 'Matéria Escura (~27%): A Gravidade Invisível',
      body: 'Não interage com a luz — não a emite, absorve nem reflete. É completamente invisível. Sabemos que existe pelo seu efeito gravitacional: atua como uma "cola" que impede as galáxias de se desintegrarem.',
      note: 'Analogia: uma teia de aranha invisível — não a vês, mas vês as estrelas organizarem-se ao longo da sua estrutura.'
    },
    'dark-energy': {
      title: 'Energia Escura (~68%): O Motor da Expansão',
      body: 'A componente dominante e mais enigmática. É uma força repulsiva intrínseca ao tecido do espaço, responsável pela expansão acelerada do universo — não só ele cresce, como cresce cada vez mais depressa.',
      note: 'Analogia: se o universo fosse um carro, a gravidade seria o travão e a energia escura seria o pé no acelerador.'
    }
  };

  const panel = document.getElementById('comp-panel');

  function showComp(key) {
    const d = compData[key];
    panel.innerHTML = `
      <h4 class="font-bold text-sm mb-2" style="color:var(--accent);">${d.title}</h4>
      <p class="text-sm leading-relaxed mb-3" style="color:#334155;">${d.body}</p>
      <p class="text-xs leading-relaxed px-3 py-2 rounded-lg" style="background:var(--bg);color:var(--muted);">${d.note}</p>`;
    document.querySelectorAll('.composition-btn').forEach(b => {
      b.classList.toggle('active', b.dataset.comp === key);
    });
  }

  document.querySelectorAll('.composition-btn').forEach(btn => {
    btn.addEventListener('click', () => showComp(btn.dataset.comp));
  });

  showComp('common');

  const ctx = document.getElementById('universeChart').getContext('2d');
  new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: ['Matéria Comum', 'Matéria Escura', 'Energia Escura'],
      datasets: [{
        data: [5, 27, 68],
        backgroundColor: ['#f43f5e', '#475569', '#1e293b'],
        borderColor: '#f8f5f0',
        borderWidth: 4,
        hoverOffset: 12
      }]
    },
    options: {
      responsive: true,
      cutout: '62%',
      plugins: {
        legend: { position: 'bottom', labels: { padding: 14, font: { size: 12, family: 'Inter, sans-serif' } } },
        tooltip: { callbacks: { label: ctx => ` ${ctx.label}: ${ctx.parsed}%` } }
      },
      onClick: (e, els) => {
        if (!els.length) return;
        const keys = ['common', 'dark-matter', 'dark-energy'];
        showComp(keys[els[0].index]);
      }
    }
  });
}());
</script>
