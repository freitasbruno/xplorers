<?php $reflection_question = 'Imagina que tens poder para implementar três ideias desta aula no teu bairro ou na zona à volta da tua escola. Quais escolherias — energias renováveis, economia circular ou design de cidade sustentável? E qual seria a primeira coisa concreta que mudarias?'; ?>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
.sust2-card { background: var(--card-bg); border: 1px solid var(--border); border-radius: 1rem; padding: 1.5rem; }
.sust2-tab { border: 2px solid var(--border); border-radius: 999px; padding: 0.35rem 0.9rem; font-size: 0.8rem; font-weight: 600; cursor: pointer; transition: all 0.2s ease; background: var(--bg); color: var(--text); }
.sust2-tab.active { background: var(--accent); border-color: var(--accent); color: white; }
.sust2-panel { display: none; }
.sust2-panel.active { display: block; }
.sust2-arrow { display: flex; align-items: center; gap: 0.5rem; font-size: 0.8rem; font-weight: 600; margin-bottom: 0.5rem; }
.sust2-chart-wrap { position: relative; max-width: 300px; margin: 0 auto; height: 200px; }
.sust2-city-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1rem; }
@media (max-width: 640px) { .sust2-city-grid { grid-template-columns: 1fr; } }
</style>

<section data-label="Energia Renovável" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">1. A Revolução da Energia ☀️</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">O maior desafio são as alterações climáticas causadas pelos combustíveis fósseis. A solução tem de começar aqui: <strong>mudar a forma como obtemos energia</strong>. As energias renováveis renovam-se naturalmente e a sua operação liberta pouco ou nenhum CO₂.</p>

  <div class="flex flex-wrap gap-2 mb-4">
    <button class="sust2-tab active" data-panel="sust2-solar" onclick="showSust2(this)">☀️ Solar</button>
    <button class="sust2-tab" data-panel="sust2-eolica" onclick="showSust2(this)">💨 Eólica</button>
    <button class="sust2-tab" data-panel="sust2-hidrica" onclick="showSust2(this)">💧 Hídrica</button>
  </div>

  <div id="sust2-solar" class="sust2-panel active sust2-card">
    <div class="text-xs font-bold uppercase tracking-wide mb-3" style="color:#f59e0b;">ENERGIA SOLAR (FOTOVOLTAICA)</div>
    <div class="grid md:grid-cols-2 gap-4">
      <div>
        <p class="text-sm leading-relaxed mb-3" style="color:#334155;">Painéis de silício que convertem luz solar diretamente em eletricidade. A mais promissora de todas — está a ficar <strong>cada vez mais barata</strong> (o preço caiu 90% nos últimos 10 anos) e pode ser instalada em qualquer lado: telhados de casas, locais industriais, desertos.</p>
        <p class="text-xs px-3 py-2 rounded-lg" style="background:var(--bg);color:var(--muted);">Portugal tem uma das melhores condições solares da Europa — mais de 3.000 horas de sol por ano.</p>
      </div>
      <div class="sust2-chart-wrap">
        <canvas id="solarPriceChart"></canvas>
      </div>
    </div>
  </div>
  <div id="sust2-eolica" class="sust2-panel sust2-card">
    <div class="text-xs font-bold uppercase tracking-wide mb-3" style="color:#3b82f6;">ENERGIA EÓLICA</div>
    <p class="text-sm leading-relaxed mb-3" style="color:#334155;">Turbinas gigantes (como moinhos de vento modernos) que usam a força do vento para gerar eletricidade. Muito eficaz em zonas costeiras, planícies ou zonas de altitude — como vemos bem em Portugal, onde o vento é constante.</p>
    <div class="grid md:grid-cols-2 gap-3">
      <div class="p-3 rounded-lg" style="background:var(--bg);">
        <div class="font-bold text-xs mb-1">🌊 Offshore (no mar)</div>
        <p class="text-xs" style="color:var(--muted);">Os parques eólicos no mar têm ventos mais constantes e fortes. Portugal tem um enorme potencial costeiro ainda por explorar.</p>
      </div>
      <div class="p-3 rounded-lg" style="background:var(--bg);">
        <div class="font-bold text-xs mb-1">⚡ Em números</div>
        <p class="text-xs" style="color:var(--muted);">Portugal já produz mais de 25% da sua eletricidade através da energia eólica — um dos maiores valores da Europa.</p>
      </div>
    </div>
  </div>
  <div id="sust2-hidrica" class="sust2-panel sust2-card">
    <div class="text-xs font-bold uppercase tracking-wide mb-3" style="color:#06b6d4;">ENERGIA HÍDRICA</div>
    <p class="text-sm leading-relaxed mb-3" style="color:#334155;">A forma mais "antiga" de renovável — usa a força da água em barragens para mover turbinas. Hoje explora-se também a energia das marés e das ondas — especialmente relevante para Portugal com a sua extensa costa atlântica.</p>
    <div class="callout-sabias">
      <div class="callout-label">Sabias que?</div>
      <p class="text-sm" style="color:#334155;">A energia solar que atinge a superfície da Terra em <strong>apenas uma hora</strong> é mais do que toda a energia que a humanidade consome num ano inteiro. O desafio não é a falta de energia — é capturá-la, armazená-la e distribuí-la eficientemente.</p>
    </div>
  </div>
</section>

<section data-label="Economia Circular" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">2. Economia Circular: Do "Usar e Deitar" ao "Nunca Perder" ♻️</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">O nosso sistema económico atual é <strong>linear</strong> e insustentável. A natureza nunca funciona assim — na natureza, o resíduo de um processo é sempre o alimento de outro. A Economia Circular copia esta lógica.</p>

  <div class="grid md:grid-cols-2 gap-4 mb-5">
    <div class="sust2-card">
      <div class="text-xs font-bold uppercase tracking-wide mb-3" style="color:#ef4444;">❌ ECONOMIA LINEAR (O Problema)</div>
      <div class="sust2-arrow" style="color:#334155;"><span>⛏️ Extrair</span><span>→</span><span>🏭 Produzir</span><span>→</span><span>🛒 Usar</span><span>→</span><span>🗑️ Deitar Fora</span></div>
      <p class="text-xs" style="color:var(--muted);">Os recursos entram numa extremidade e saem como lixo na outra. É insustentável porque os recursos são finitos e o lixo acumula-se.</p>
    </div>
    <div class="sust2-card" style="background:#f0fdf4;border-color:#bbf7d0;">
      <div class="text-xs font-bold uppercase tracking-wide mb-3" style="color:#15803d;">✅ ECONOMIA CIRCULAR (A Solução)</div>
      <div class="sust2-arrow" style="color:#15803d;"><span>🔄 Reduzir</span><span>→</span><span>🔁 Reutilizar</span><span>→</span><span>🔧 Reparar</span><span>→</span><span>♻️ Reciclar</span></div>
      <p class="text-xs" style="color:#334155;">Inspirada na natureza, onde "nada se perde, tudo se transforma". O foco é manter os materiais em uso o máximo de tempo possível.</p>
    </div>
  </div>

  <div class="sust2-card mb-4" style="border-color:var(--accent);border-left-width:4px;border-radius:0 1rem 1rem 0;">
    <div class="text-xs font-bold uppercase tracking-wide mb-2" style="color:var(--accent);">Exemplo prático: o telemóvel</div>
    <div class="grid md:grid-cols-2 gap-3">
      <div>
        <div class="text-xs font-bold mb-1" style="color:#ef4444;">Linear 📱→🗑️</div>
        <p class="text-xs" style="color:#334155;">A câmara avaria. A reparação é cara. Compras um novo. O velho fica numa gaveta ou vai para o lixo com todos os seus materiais raros (lítio, cobalto, etc.).</p>
      </div>
      <div>
        <div class="text-xs font-bold mb-1" style="color:#15803d;">Circular 📱→🔄</div>
        <p class="text-xs" style="color:#334155;">Telemóvel desenhado por módulos. A câmara avaria? Compras só a câmara nova. Quando fica obsoleto, a empresa recolhe e aproveita 90% dos materiais para o modelo seguinte.</p>
      </div>
    </div>
  </div>
</section>

<section data-label="Cidades Sustentáveis" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">3. As Cidades do Futuro 🏙️</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">Mais de metade da humanidade vive em cidades que são responsáveis por mais de 70% das emissões de CO₂. As <strong>Cidades de 15 Minutos</strong> redesenham o espaço urbano para colocar as pessoas — e não os carros — no centro.</p>

  <div class="sust2-city-grid mb-5">
    <div class="sust2-card text-center">
      <div class="text-3xl mb-2">🚲</div>
      <div class="font-bold text-sm mb-2">Transportes</div>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">Menos carros, mais transportes públicos elétricos e ciclovias seguras. Tudo a 15 minutos a pé ou de bicicleta — escola, supermercado, farmácia, parque.</p>
    </div>
    <div class="sust2-card text-center">
      <div class="text-3xl mb-2">🏢</div>
      <div class="font-bold text-sm mb-2">Edifícios Verdes</div>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">Melhor isolamento (menos energia), painéis solares nos telhados, "telhados verdes" com plantas que arrefecem o edifício e absorvem CO₂.</p>
    </div>
    <div class="sust2-card text-center">
      <div class="text-3xl mb-2">🌳</div>
      <div class="font-bold text-sm mb-2">Espaços Verdes</div>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">Mais parques, árvores nas ruas e hortas urbanas em telhados ou terrenos vazios — produzindo comida localmente.</p>
    </div>
  </div>

  <div class="callout-sabias">
    <div class="callout-label">Copenhaga — a cidade do futuro</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">A capital da Dinamarca tem o objetivo de ser a primeira capital do mundo <strong>neutra em carbono</strong>. Hoje, mais de <strong>50% da população</strong> usa a bicicleta como principal meio de transporte para ir para o trabalho ou escola — mesmo durante o inverno. A cidade investiu durante décadas em ciclovias protegidas, e hoje a bicicleta é mais rápida do que o carro no centro de Copenhaga.</p>
  </div>
</section>

<script>
(function () {
  function showSust2(btn) {
    document.querySelectorAll('.sust2-tab').forEach(function(b) { b.classList.remove('active'); });
    document.querySelectorAll('.sust2-panel').forEach(function(p) { p.classList.remove('active'); });
    btn.classList.add('active');
    var panel = document.getElementById(btn.getAttribute('data-panel'));
    if (panel) panel.classList.add('active');
  }
  window.showSust2 = showSust2;

  var ctx = document.getElementById('solarPriceChart');
  if (ctx) {
    new Chart(ctx.getContext('2d'), {
      type: 'line',
      data: {
        labels: ['2010', '2012', '2014', '2016', '2018', '2020', '2023'],
        datasets: [{
          label: 'Custo relativo (2010=100)',
          data: [100, 72, 52, 36, 22, 15, 10],
          borderColor: '#f43f5e',
          backgroundColor: 'rgba(244,63,94,0.1)',
          fill: true,
          tension: 0.4,
          pointBackgroundColor: '#f43f5e'
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: { display: false },
          tooltip: { callbacks: { label: function(c) { return ' ' + c.parsed.y + '% do custo de 2010'; } } }
        },
        scales: {
          y: { ticks: { font: { size: 10 }, callback: function(v) { return v + '%'; } }, grid: { color: 'rgba(0,0,0,0.05)' } },
          x: { ticks: { font: { size: 10 } }, grid: { display: false } }
        }
      }
    });
  }
}());
</script>
