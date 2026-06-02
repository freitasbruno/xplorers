<?php $reflection_question = 'Se as mitocôndrias e os cloroplastos têm o seu próprio ADN e se reproduzem sozinhos dentro de nós, ainda podemos dizer que somos um único organismo, ou somos na verdade uma colónia de diferentes espécies a trabalhar em equipa?'; ?>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<style>
.vida2-card { background: var(--card-bg); border: 1px solid var(--border); border-radius: 1rem; padding: 1.5rem; }
.vida2-timeline { position: relative; padding-left: 2rem; }
.vida2-timeline::before { content: ''; position: absolute; left: 0.625rem; top: 0; bottom: 0; width: 2px; background: var(--border); }
.vida2-event { position: relative; margin-bottom: 1.5rem; }
.vida2-event::before { content: ''; position: absolute; left: -1.5rem; top: 0.25rem; width: 0.75rem; height: 0.75rem; border-radius: 50%; background: var(--accent); border: 2px solid white; }
.vida2-symbiosis { display: grid; grid-template-columns: 1fr auto 1fr; gap: 1rem; align-items: center; }
@media (max-width: 600px) { .vida2-symbiosis { grid-template-columns: 1fr; } }
</style>

<section data-label="Procariontes" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">1. O Mundo dos Micróbios 🦠</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">Imagina a Terra há 3 mil milhões de anos. Não havia florestas, nem peixes, nem dinossauros. O mundo pertencia inteiramente aos <strong>Procariontes</strong> — organismos unicelulares sem núcleo definido. Simples, resistentes, e absolutamente dominantes.</p>

  <div class="grid md:grid-cols-2 gap-4 mb-5">
    <div class="vida2-card">
      <div class="text-2xl mb-2">✅ O que sabiam fazer bem</div>
      <ul class="text-sm space-y-1" style="color:#334155;">
        <li>• Sobreviver em condições extremas (calor, ácido, sem oxigénio)</li>
        <li>• Dividir-se e reproduzir-se muito rapidamente</li>
        <li>• Partilhar genes entre si ("transferência horizontal")</li>
        <li>• Ocupar todos os nichos disponíveis no planeta</li>
      </ul>
    </div>
    <div class="vida2-card" style="background:#fff7ed; border-color:#fed7aa;">
      <div class="text-2xl mb-2">❌ O que não conseguiam</div>
      <ul class="text-sm space-y-1" style="color:#7c2d12;">
        <li>• Tornar-se grandes ou complexos</li>
        <li>• Desenvolver organelos especializados</li>
        <li>• Coordenar funções dentro de um único ser</li>
        <li>• Dar origem a animais, plantas ou fungos</li>
      </ul>
    </div>
  </div>

  <p class="prose-lesson">Durante <strong>2 mil milhões de anos</strong>, este foi o estado da vida na Terra. Depois, aconteceu algo que mudou tudo.</p>
</section>

<section data-label="Grande Oxidação" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">2. O Primeiro "Desastre" Ambiental 🌿</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Há ~2,4 mil milhões de anos, surgiu um organismo que mudou a composição da atmosfera para sempre: as <strong>Cianobactérias</strong>. Elas "inventaram" a fotossíntese oxigénica — e ao fazê-lo, libertaram oxigénio como subproduto.</p>

  <div class="vida2-timeline mb-6">
    <div class="vida2-event">
      <div class="font-bold text-sm mb-1">Surgem as Cianobactérias</div>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">Primeiros organismos a usar a luz solar para produzir energia libertando O₂. Pequenos, mas com um impacto enorme.</p>
    </div>
    <div class="vida2-event">
      <div class="font-bold text-sm mb-1" style="color:#dc2626;">Extinção em Massa (a "Grande Oxidação")</div>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">Para a maioria dos seres vivos da época, o oxigénio era tóxico. A acumulação de O₂ na atmosfera dizimou inúmeras espécies anaeróbias.</p>
    </div>
    <div class="vida2-event">
      <div class="font-bold text-sm mb-1">O Ferro dos Oceanos "Enferruja"</div>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">O oxigénio reagiu com o ferro dissolvido nos oceanos, precipitando-o no fundo. Criou as jazidas de minério de ferro que ainda hoje exploramos para fabricar aço.</p>
    </div>
    <div class="vida2-event" style="margin-bottom:0;">
      <div class="font-bold text-sm mb-1" style="color:#16a34a;">Camada de Ozono + Respiração Aeróbia</div>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">O O₂ formou a camada de ozono (protegendo da radiação UV) e permitiu a respiração aeróbia — 18× mais eficiente que a fermentação. A vida ganhou um motor novo e muito mais potente.</p>
    </div>
  </div>

  <div class="callout-sabias">
    <div class="callout-label">Sabias que?</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">Antes da Grande Oxidação, os oceanos tinham uma coloração esverdeada devido ao ferro dissolvido. Quando o oxigénio apareceu, o ferro <strong>"enferrujou"</strong> e afundou — criando as enormes jazidas de minério de ferro (Banded Iron Formations) que hoje explorámos na Austrália, Brasil e África. O aço da tua bicicleta tem 2,4 mil milhões de anos de história.</p>
  </div>
</section>

<section data-label="Endossimbiose" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">3. A Invasão que Criou a Vida Complexa 🔬</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">Como passámos de uma bactéria simples para uma célula animal com organelos complexos? A resposta chama-se <strong>Endossimbiose</strong> — e foi proposta pela bióloga Lynn Margulis em 1967, numa ideia que levou anos a ser aceite.</p>

  <div class="vida2-symbiosis mb-6">
    <div class="vida2-card text-center">
      <div class="text-3xl mb-2">🦠</div>
      <div class="font-bold text-sm mb-1">Célula Grande</div>
      <p class="text-xs" style="color:var(--muted);">Engole a bactéria por fagocitose. Oferece proteção e nutrientes.</p>
    </div>
    <div class="text-center">
      <div class="text-2xl">🤝</div>
      <div class="text-xs font-bold mt-1" style="color:var(--muted);">Simbiose</div>
    </div>
    <div class="vida2-card text-center">
      <div class="text-3xl mb-2">⚡</div>
      <div class="font-bold text-sm mb-1">Bactéria Pequena</div>
      <p class="text-xs" style="color:var(--muted);">Em vez de ser digerida, fornece energia à célula hospedeira.</p>
    </div>
  </div>

  <div class="grid md:grid-cols-2 gap-4 mb-5">
    <div class="vida2-card" style="border-top: 3px solid #f59e0b;">
      <div class="font-bold text-sm mb-2">🔋 Mitocôndria (em animais e plantas)</div>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">Uma proteobactéria capaz de respiração aeróbia foi engolida e nunca saiu. Tornou-se a "central elétrica" da célula — o organelo que converte glucose em energia (ATP). Tens milhares delas em cada célula do teu corpo.</p>
    </div>
    <div class="vida2-card" style="border-top: 3px solid #22c55e;">
      <div class="font-bold text-sm mb-2">🌿 Cloroplasto (só nas plantas)</div>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">Um segundo evento similar: uma cianobactéria engolida tornou-se o cloroplasto — o organelo da fotossíntese. É por isso que as plantas conseguem fazer o que nós não conseguimos: produzir comida a partir da luz solar.</p>
    </div>
  </div>

  <div class="vida2-card" style="background:#1e293b; border-color:#334155;">
    <p class="text-sm leading-relaxed text-slate-200">🧬 <strong class="text-white">A prova definitiva:</strong> As mitocôndrias têm o seu <em>próprio ADN circular</em> — diferente do ADN linear do núcleo celular, mas idêntico ao ADN das bactérias. Dividem-se de forma independente, como bactérias. Herdas as tuas mitocôndrias exclusivamente da tua mãe — porque são do citoplasma do óvulo, e não do espermatozoide.</p>
  </div>
</section>

<section data-label="Comparação" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">4. Antes e Depois: O Salto Evolutivo 📊</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">A endossimbiose foi o maior salto evolutivo da história da vida — mais significativo, em termos de complexidade, do que a própria origem das células.</p>

  <div class="mb-2" style="max-width:420px; margin:0 auto;">
    <canvas id="vidaCelulasChart" height="200"></canvas>
  </div>
  <p class="text-xs text-center mb-6" style="color:var(--muted);">Comparação de complexidade relativa (escala logarítmica simplificada)</p>

  <div class="callout-sabias">
    <div class="callout-label">Sabias que?</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">Lynn Margulis apresentou a teoria da endossimbiose em 1967, quando era uma jovem investigadora. O seu artigo foi rejeitado por <strong>mais de 15 revistas científicas</strong> antes de ser publicado. Hoje é considerada um dos factos mais bem estabelecidos da biologia celular — e Margulis é reconhecida como uma das biologistas mais influentes do século XX.</p>
  </div>
</section>

<script>
(function () {
  var ctx = document.getElementById('vidaCelulasChart').getContext('2d');
  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Bactéria\n(Procarionte)', 'Célula Eucariótica\n(após endossimbiose)', 'Célula Animal\nModerna'],
      datasets: [{
        label: 'Complexidade relativa',
        data: [1, 50, 100],
        backgroundColor: ['#94a3b8', '#6366f1', 'var(--accent)'],
        borderRadius: 8
      }]
    },
    options: {
      responsive: true,
      plugins: { legend: { display: false } },
      scales: {
        y: {
          beginAtZero: true,
          ticks: { display: false },
          grid: { color: 'rgba(0,0,0,0.05)' }
        },
        x: { grid: { display: false } }
      }
    }
  });
}());
</script>
