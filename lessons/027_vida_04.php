<?php $reflection_question = 'As extinções em massa são uma falha da natureza — um erro trágico que destroça ecossistemas — ou um mecanismo necessário para a inovação biológica, que "reseta" o jogo e abre oportunidades para novas formas de vida? Justifica a tua resposta com um exemplo concreto.'; ?>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<style>
.vida4-card { background: var(--card-bg); border: 1px solid var(--border); border-radius: 1rem; padding: 1.5rem; }
.vida4-ext { border-radius: 0.75rem; padding: 1rem; cursor: pointer; transition: all 0.2s; border: 1px solid transparent; }
.vida4-ext:hover { transform: translateY(-2px); }
.vida4-ext.open { border-color: var(--accent); }
.vida4-ext-detail { display: none; margin-top: 0.75rem; padding-top: 0.75rem; border-top: 1px solid rgba(255,255,255,0.15); }
.vida4-ext-detail.visible { display: block; }
.vida4-cascade { display: flex; flex-direction: column; gap: 0; }
.vida4-cascade-item { display: flex; align-items: flex-start; gap: 0.75rem; padding: 0.75rem 1rem; }
.vida4-cascade-item:not(:last-child) { border-bottom: 1px solid rgba(0,0,0,0.06); }
.vida4-arrow { font-size: 1.25rem; line-height: 1.5; flex-shrink: 0; }
</style>

<section data-label="O que é" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">1. Extinção Normal vs. Catástrofe 📊</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">A extinção faz parte da vida — é tão natural quanto o nascimento de espécies. A questão é a <em>escala</em> e a <em>velocidade</em>.</p>

  <div class="grid md:grid-cols-2 gap-4 mb-5">
    <div class="vida4-card">
      <div class="font-bold text-sm mb-2">📉 Extinção de Fundo (Normal)</div>
      <p class="text-xs leading-relaxed mb-2" style="color:var(--muted);">1 a 5 espécies por ano por cada milhão — o ritmo normal da evolução. Resultado de seleção natural, competição e mudanças graduais.</p>
      <div class="text-xs px-2 py-1 rounded-full inline-block" style="background:#f0fdf4; color:#16a34a; border:1px solid #bbf7d0;">Ritmo constante e natural</div>
    </div>
    <div class="vida4-card" style="background:#fff1f2; border-color:#fecdd3;">
      <div class="font-bold text-sm mb-2" style="color:#be123c;">💥 Extinção em Massa</div>
      <p class="text-xs leading-relaxed mb-2" style="color:#7f1d1d;">Mais de <strong>75% das espécies</strong> eliminadas, em múltiplos grupos e ecossistemas, em menos de 2 milhões de anos — um "instante" geológico.</p>
      <div class="text-xs px-2 py-1 rounded-full inline-block" style="background:#fff1f2; color:#be123c; border:1px solid #fecdd3;">Evento raro e catastrófico</div>
    </div>
  </div>

  <div class="mb-2" style="max-width:480px; margin:0 auto;">
    <canvas id="vidaExtChart" height="180"></canvas>
  </div>
  <p class="text-xs text-center mb-2" style="color:var(--muted);">% de espécies extintas nas Big Five</p>
</section>

<section data-label="As Big Five" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">2. As Cinco Grandes Cicatrizes 🌍</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">A Terra sobreviveu a cinco extinções em massa. A mais famosa — o fim dos dinossauros — não foi sequer a maior. Clica em cada uma para saber o que aconteceu.</p>

  <div class="space-y-2 mb-4">
    <div class="vida4-ext" style="background:#dbeafe;" onclick="toggleExt(this)">
      <div class="flex items-center justify-between">
        <div><span class="font-bold text-sm text-blue-800">1. Ordovícico-Silúrico</span> <span class="text-xs text-blue-600">444 Ma • ~85% das espécies</span></div>
        <span class="text-xs text-blue-500">▼</span>
      </div>
      <div class="vida4-ext-detail">
        <p class="text-xs leading-relaxed" style="color:#1e40af;">Uma glaciação intensa baixou os níveis dos mares, destruindo os habitats marinhos rasos onde vivia a maioria das espécies. Quando o gelo derreteu e os oceanos voltaram a subir, mais espécies morreram. Afetou sobretudo a vida marinha — recifes, braquiópodes, trilobites.</p>
      </div>
    </div>
    <div class="vida4-ext" style="background:#d1fae5;" onclick="toggleExt(this)">
      <div class="flex items-center justify-between">
        <div><span class="font-bold text-sm text-emerald-800">2. Devónico Superior</span> <span class="text-xs text-emerald-600">375 Ma • ~75% das espécies</span></div>
        <span class="text-xs text-emerald-500">▼</span>
      </div>
      <div class="vida4-ext-detail">
        <p class="text-xs leading-relaxed" style="color:#065f46;">Afetou principalmente os recifes de coral e a vida marinha. Uma possível causa: as novas plantas terrestres (fetos e primeiras árvores) começaram a libertar grandes quantidades de nutrientes nos oceanos — criando explosões de algas que consumiam todo o oxigénio da água (eutrofização).</p>
      </div>
    </div>
    <div class="vida4-ext" style="background:#1e293b;" onclick="toggleExt(this)">
      <div class="flex items-center justify-between">
        <div><span class="font-bold text-sm text-white">3. Permiano-Triásico ☠️</span> <span class="text-xs text-slate-400">252 Ma • ~96% das espécies marinhas</span></div>
        <span class="text-xs text-slate-400">▼</span>
      </div>
      <div class="vida4-ext-detail">
        <p class="text-xs leading-relaxed" style="color:#94a3b8;">A "Grande Mortandade" — a maior extinção de sempre. Causada pelas Traps Siberianas (erupção vulcânica massiva), aquecimento global descontrolado, acidificação dos oceanos e envenenamento por H₂S. O ecossistema demorou ~10 milhões de anos a recuperar.</p>
      </div>
    </div>
    <div class="vida4-ext" style="background:#fef3c7;" onclick="toggleExt(this)">
      <div class="flex items-center justify-between">
        <div><span class="font-bold text-sm text-amber-800">4. Triásico-Jurássico</span> <span class="text-xs text-amber-600">201 Ma • ~75% das espécies</span></div>
        <span class="text-xs text-amber-500">▼</span>
      </div>
      <div class="vida4-ext-detail">
        <p class="text-xs leading-relaxed" style="color:#92400e;">Eliminou os principais concorrentes dos dinossauros, abrindo caminho para a sua hegemonia durante os 135 milhões de anos seguintes. A causa provável: erupções vulcânicas no Atlântico Central durante a fragmentação da Pangeia.</p>
      </div>
    </div>
    <div class="vida4-ext" style="background:#fde8e8;" onclick="toggleExt(this)">
      <div class="flex items-center justify-between">
        <div><span class="font-bold text-sm" style="color:#b91c1c;">5. Cretácico-Paleogénico (K-Pg)</span> <span class="text-xs" style="color:#ef4444;">66 Ma • ~75% das espécies</span></div>
        <span class="text-xs" style="color:#ef4444;">▼</span>
      </div>
      <div class="vida4-ext-detail">
        <p class="text-xs leading-relaxed" style="color:#7f1d1d;">O asteroide de Iucatão. Bloqueou a luz solar, colapsou as cadeias alimentares. Eliminou todos os dinossauros não aviários — e abriu o caminho para a dominância dos mamíferos. Sem esta extinção, provavelmente não existiriam humanos.</p>
      </div>
    </div>
  </div>
</section>

<section data-label="O Permiano" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">3. O Apocalipse do Permiano 🌋</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">A extinção Permiano-Triásica foi uma cascata de catástrofes. Cada evento desencadeava o seguinte, num ciclo de destruição que durou centenas de milhar de anos.</p>

  <div class="vida4-card mb-5">
    <div class="vida4-cascade">
      <div class="vida4-cascade-item">
        <div class="vida4-arrow">🌋</div>
        <div>
          <div class="font-bold text-xs mb-1">Traps Siberianas — Erupção Contínua</div>
          <p class="text-xs" style="color:var(--muted);">~4 milhões de km³ de lava ao longo de centenas de milhar de anos. Libertação massiva de CO₂, metano e SO₂.</p>
        </div>
      </div>
      <div class="vida4-cascade-item" style="background:#fff7ed;">
        <div class="vida4-arrow">🌡️</div>
        <div>
          <div class="font-bold text-xs mb-1">Aquecimento Global Descontrolado</div>
          <p class="text-xs" style="color:var(--muted);">Temperatura dos oceanos à superfície atinge ~40°C. Impossível para a maioria das formas de vida marinha.</p>
        </div>
      </div>
      <div class="vida4-cascade-item" style="background:#fff1f2;">
        <div class="vida4-arrow">🧪</div>
        <div>
          <div class="font-bold text-xs mb-1">Anoxia Oceânica + Acidificação</div>
          <p class="text-xs" style="color:var(--muted);">Oceanos quentes perdem O₂. Bactérias anaeróbias proliferam. O CO₂ forma ácido carbónico — conchas dissolvem-se.</p>
        </div>
      </div>
      <div class="vida4-cascade-item" style="background:#1e293b;">
        <div class="vida4-arrow">☠️</div>
        <div>
          <div class="font-bold text-xs mb-1 text-white">Sulfureto de Hidrogénio (H₂S)</div>
          <p class="text-xs" style="color:#94a3b8;">Bactérias anaeróbias libertam H₂S — um gás tóxico. Envenena a atmosfera e destrói a camada de ozono. O planeta torna-se hostil em múltiplas frentes.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="callout-sabias">
    <div class="callout-label">Sabias que?</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">O <em>Lystrosaurus</em> — um antepassado distante dos mamíferos do tamanho de um porco — foi um dos poucos sobreviventes do Permiano. Num mundo quase vazio de concorrentes, proliferou tanto que chegou a representar <strong>95% de todos os vertebrados terrestres</strong> no início do Triásico. Nunca nenhuma espécie dominou tanto o planeta.</p>
  </div>
</section>

<section data-label="O Asteroide" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">4. A Prova do Crime: O Irídio 🔭</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">Em 1980, pai e filho — Luis e Walter Alvarez — fizeram uma descoberta que revolucionou a paleontologia e a nossa compreensão das extinções em massa.</p>

  <div class="grid md:grid-cols-2 gap-4 mb-5">
    <div class="vida4-card">
      <div class="font-bold text-sm mb-2">🔍 A Descoberta</div>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">Uma camada de argila fina — datada de exatamente 66 Ma — encontrada em todo o mundo. Nessa camada: concentrações de <strong>Irídio</strong> centenas de vezes superiores ao normal.</p>
    </div>
    <div class="vida4-card" style="background:#f0fdf4; border-color:#bbf7d0;">
      <div class="font-bold text-sm mb-2 text-emerald-800">🧪 O que significa</div>
      <p class="text-xs leading-relaxed" style="color:#334155;">O Irídio é raro na crosta terrestre mas comum em asteroides. Uma camada global de irídio só pode ter uma origem: um asteroide enorme que se vaporizou no impacto e espalhou os seus materiais por toda a Terra.</p>
    </div>
  </div>

  <div class="vida4-card" style="background:#1e293b; border-color:#334155; margin-bottom:1.25rem;">
    <div class="text-sm font-bold text-white mb-2">💥 A Escala do Impacto</div>
    <div class="grid grid-cols-2 gap-3">
      <div>
        <div class="text-xs" style="color:#94a3b8;">Tamanho do asteroide</div>
        <div class="font-bold text-white">10 – 15 km</div>
      </div>
      <div>
        <div class="text-xs" style="color:#94a3b8;">Energia libertada</div>
        <div class="font-bold text-white">100 teratonas de TNT</div>
      </div>
      <div>
        <div class="text-xs" style="color:#94a3b8;">Comparação</div>
        <div class="font-bold" style="color:#f87171;">2.000.000× maior bomba nuclear</div>
      </div>
      <div>
        <div class="text-xs" style="color:#94a3b8;">Local do impacto</div>
        <div class="font-bold text-white">Iucatão, México</div>
      </div>
    </div>
  </div>

  <div class="vida4-card" style="border-left:4px solid var(--accent); border-radius:0 1rem 1rem 0;">
    <div class="font-bold text-sm mb-2">🐀 Os Vencedores: Os Pequenos Mamíferos</div>
    <p class="text-xs leading-relaxed" style="color:#334155;">Sem luz solar durante anos, as cadeias alimentares colapsaram da base para o topo. Sobreviveram os animais com <strong>metabolismo lento</strong> (precisavam de pouca comida), capacidade de <strong>hibernar</strong>, e que se alimentavam de <strong>detritos e sementes</strong>. Os pequenos mamíferos reuniam estas características. Com os dinossauros extintos, os mamíferos diversificaram-se explosivamente — e 66 milhões de anos depois, um dos seus descendentes está a ler este texto.</p>
  </div>
</section>

<script>
(function () {
  var ctx = document.getElementById('vidaExtChart').getContext('2d');
  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Ordovícico\n(444 Ma)', 'Devónico\n(375 Ma)', 'Permiano\n(252 Ma)', 'Triásico\n(201 Ma)', 'K-Pg\n(66 Ma)'],
      datasets: [{
        label: '% espécies extintas',
        data: [85, 75, 96, 75, 75],
        backgroundColor: ['#60a5fa', '#34d399', '#ef4444', '#fbbf24', '#f87171'],
        borderRadius: 6
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: { display: false },
        tooltip: {
          callbacks: {
            label: function (ctx) { return ctx.parsed.y + '% de espécies extintas'; }
          }
        }
      },
      scales: {
        y: {
          beginAtZero: true,
          max: 100,
          ticks: { callback: function (v) { return v + '%'; } },
          grid: { color: 'rgba(0,0,0,0.05)' }
        },
        x: { grid: { display: false } }
      }
    }
  });

  function toggleExt(el) {
    var detail = el.querySelector('.vida4-ext-detail');
    var isOpen = detail.classList.contains('visible');
    detail.classList.toggle('visible', !isOpen);
    el.classList.toggle('open', !isOpen);
  }
  window.toggleExt = toggleExt;
}());
</script>
