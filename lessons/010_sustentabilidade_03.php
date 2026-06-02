<?php $reflection_question = 'A Pegada Ecológica de Portugal é de cerca de 3 planetas — precisávamos de 3 Terras se toda a gente vivesse como vivemos aqui. Olha para o teu próprio dia a dia: qual é a tua escolha mais insustentável? E qual seria a coisa mais fácil de mudar amanhã, sem sacrificar muito?'; ?>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
.sust3-card { background: var(--card-bg); border: 1px solid var(--border); border-radius: 1rem; padding: 1.5rem; }
.sust3-r { display: flex; gap: 1rem; align-items: flex-start; padding: 0.875rem 1rem; background: var(--card-bg); border: 1px solid var(--border); border-radius: 0.75rem; margin-bottom: 0.5rem; transition: all 0.2s ease; }
.sust3-r:hover { border-color: var(--accent); }
.sust3-r-num { width: 2rem; height: 2rem; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 0.85rem; flex-shrink: 0; color: white; }
.sust3-fashion-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; }
@media (max-width: 640px) { .sust3-fashion-grid { grid-template-columns: 1fr; } }
.sust3-chart-wrap { position: relative; max-width: 320px; margin: 0 auto; height: 200px; }
</style>

<section data-label="Consumo Consciente" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">1. O Teu Superpoder: Consumo Consciente 🛒</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">Nos últimas duas aulas vimos os grandes desafios e as grandes soluções. É fácil pensar que isto são problemas para governos e grandes empresas. Esta aula é sobre o porquê de isso não ser verdade — <strong>as tuas escolhas diárias são, talvez, a ferramenta mais poderosa de todas</strong>.</p>

  <div class="sust3-card mb-5" style="background:#1e293b;border-color:#334155;">
    <div class="text-xs font-bold uppercase tracking-wide mb-3" style="color:#5eead4;">O TU VOTO ECONÓMICO</div>
    <p class="text-sm leading-relaxed" style="color:#cbd5e1;">Cada vez que compras alguma coisa — umas sapatilhas, um lanche, um jogo — estás a <strong style="color:white;">"votar"</strong>. Estás a dar o teu dinheiro e a dizer à empresa: <em>"Sim, continuem a fazer isto desta maneira."</em> Se milhões de pessoas "votarem" em empresas que respeitam os 3 Pilares, as que não o fazem são forçadas a mudar — ou a fechar.</p>
  </div>

  <p class="text-sm font-semibold mb-3" style="color:var(--muted);">Antes de comprar, faz estas perguntas:</p>
  <div class="grid md:grid-cols-2 gap-3 mb-5">
    <div class="sust3-card text-center">
      <div class="text-2xl mb-1">🌍</div>
      <div class="font-bold text-xs mb-1">De onde veio isto?</div>
      <p class="text-xs" style="color:var(--muted);">Morangos em dezembro = avião do outro lado do mundo. Maçãs em dezembro = Portugal, poucos quilómetros.</p>
    </div>
    <div class="sust3-card text-center">
      <div class="text-2xl mb-1">👷</div>
      <div class="font-bold text-xs mb-1">Quem o fez?</div>
      <p class="text-xs" style="color:var(--muted);">O preço baixo tem de ser pago por alguém. Frequentemente, são trabalhadores em países com menos proteção laboral.</p>
    </div>
    <div class="sust3-card text-center">
      <div class="text-2xl mb-1">🏭</div>
      <div class="font-bold text-xs mb-1">Como foi feito?</div>
      <p class="text-xs" style="color:var(--muted);">Poluiu um rio? Usou químicos tóxicos? Libertou CO₂? Algumas empresas publicam os seus relatórios de sustentabilidade.</p>
    </div>
    <div class="sust3-card text-center">
      <div class="text-2xl mb-1">🤔</div>
      <div class="font-bold text-xs mb-1">Preciso mesmo disto?</div>
      <p class="text-xs" style="color:var(--muted);">A compra mais sustentável é a que não se faz. Não comprar não é pobreza — é inteligência.</p>
    </div>
  </div>
</section>

<section data-label="Fast Fashion" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">2. O Custo Real da Fast Fashion 👕</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">A <em>Fast Fashion</em> é o exemplo perfeito da Economia Linear. Roupas muito baratas, feitas para durar pouco e ser substituídas pela próxima tendência. Mas <strong>o preço baixo na etiqueta esconde um custo enorme pago por outros</strong>.</p>

  <div class="sust3-fashion-grid mb-5">
    <div class="sust3-card">
      <div class="text-xs font-bold uppercase tracking-wide mb-3" style="color:#ef4444;">❌ Pilar Ambiental</div>
      <ul class="space-y-2 text-sm" style="color:#334155;">
        <li>💧 <strong>2.500 litros</strong> de água para uma única t-shirt de algodão</li>
        <li>☠️ Químicos tóxicos das tinturarias que acabam nos rios</li>
        <li>🔬 Microplásticos libertados em cada lavagem de roupas sintéticas</li>
      </ul>
    </div>
    <div class="sust3-card">
      <div class="text-xs font-bold uppercase tracking-wide mb-3" style="color:#ef4444;">❌ Pilar Social</div>
      <ul class="space-y-2 text-sm" style="color:#334155;">
        <li>👦 Trabalho infantil em países com menos proteção laboral</li>
        <li>⏰ 14-16 horas de trabalho por dia em fábricas perigosas</li>
        <li>💰 Salários miseráveis para manter os preços da etiqueta baixos</li>
      </ul>
    </div>
  </div>

  <div class="callout-sabias mb-4">
    <div class="callout-label">O número que surpreende</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">A indústria da moda é responsável por cerca de <strong>10% de todas as emissões globais de carbono</strong> — mais do que todos os voos internacionais e transporte marítimo combinados.</p>
  </div>

  <div class="sust3-card" style="background:#f0fdf4;border-color:#bbf7d0;">
    <div class="text-xs font-bold uppercase tracking-wide mb-2" style="color:#15803d;">✅ A alternativa: Slow Fashion</div>
    <div class="flex flex-wrap gap-2">
      <span class="text-xs px-2 py-1 rounded-full" style="background:#dcfce7;color:#15803d;">👗 Comprar em segunda mão</span>
      <span class="text-xs px-2 py-1 rounded-full" style="background:#dcfce7;color:#15803d;">🏷️ Apoiar marcas locais transparentes</span>
      <span class="text-xs px-2 py-1 rounded-full" style="background:#dcfce7;color:#15803d;">🪡 Reparar em vez de deitar fora</span>
      <span class="text-xs px-2 py-1 rounded-full" style="background:#dcfce7;color:#15803d;">🤝 Trocar roupa com amigos</span>
    </div>
  </div>
</section>

<section data-label="Os 5 Rs" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">3. A Hierarquia dos 5 R's ♻️</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-4">Desde pequenos que ouvimos falar nos 3 R's. Mas a <strong>ordem é crucial</strong> e faltam dois ainda mais importantes. A reciclagem deve ser o <em>último</em> recurso — não o primeiro.</p>

  <div>
    <div class="sust3-r">
      <div class="sust3-r-num" style="background:#dc2626;">1</div>
      <div><div class="font-bold text-sm mb-1" style="color:#dc2626;">RECUSAR <span class="text-xs font-normal" style="color:var(--muted);">— O mais poderoso</span></div><p class="text-xs" style="color:#334155;">Dizer simplesmente "não". Recusar o saco de plástico (porque levaste mochila), recusar a palhinha, recusar o panfleto. Se não aceitas, não geras lixo — é a fonte do problema que se elimina.</p></div>
    </div>
    <div class="sust3-r">
      <div class="sust3-r-num" style="background:#ea580c;">2</div>
      <div><div class="font-bold text-sm mb-1" style="color:#ea580c;">REDUZIR</div><p class="text-xs" style="color:#334155;">Comprar menos e comprar melhor. "Preciso mesmo disto?" É a melhor forma de combater a fast fashion e o desperdício. Qualidade sobre quantidade.</p></div>
    </div>
    <div class="sust3-r">
      <div class="sust3-r-num" style="background:#d97706;">3</div>
      <div><div class="font-bold text-sm mb-1" style="color:#d97706;">REUTILIZAR</div><p class="text-xs" style="color:#334155;">Dar uma nova vida às coisas. A garrafa de água reutilizável, os frascos de vidro para guardar comida, a t-shirt velha como pano de limpeza.</p></div>
    </div>
    <div class="sust3-r">
      <div class="sust3-r-num" style="background:#16a34a;">4</div>
      <div><div class="font-bold text-sm mb-1" style="color:#16a34a;">REPARAR</div><p class="text-xs" style="color:#334155;">Não deitar fora só porque está um bocadinho estragado. Substituir o ecrã do telemóvel, mudar o fecho das calças, colar a asa da chávena. Liga-se diretamente à Economia Circular.</p></div>
    </div>
    <div class="sust3-r" style="border-color:var(--muted);">
      <div class="sust3-r-num" style="background:#6b7280;">5</div>
      <div><div class="font-bold text-sm mb-1" style="color:#6b7280;">RECICLAR <span class="text-xs font-normal">— O último recurso</span></div><p class="text-xs" style="color:#334155;">Quando já não dá para mais nada, separar corretamente para que os materiais possam ser transformados em algo novo. É melhor do que o aterro — mas não é a solução; é o último recurso.</p></div>
    </div>
  </div>
</section>

<section data-label="Pegada Ecológica" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">4. A Tua Marca no Planeta: A Pegada Ecológica 🌍</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">A <strong>Pegada Ecológica</strong> mede quantos "planetas Terra" seriam necessários se toda a população mundial vivesse exatamente como tu. Considera a tua alimentação, o transporte, a energia em casa e as compras.</p>

  <div class="sust3-chart-wrap mb-5">
    <canvas id="footprintChart"></canvas>
  </div>

  <div class="grid md:grid-cols-3 gap-3 mb-4">
    <div class="sust3-card text-center">
      <div class="text-2xl font-black mb-1" style="color:#22c55e;">1,0</div>
      <div class="text-xs font-semibold mb-1">Sustentável</div>
      <p class="text-xs" style="color:var(--muted);">O "alvo" — viver com o que a Terra pode regenerar num ano</p>
    </div>
    <div class="sust3-card text-center">
      <div class="text-2xl font-black mb-1" style="color:#f59e0b;">1,7</div>
      <div class="text-xs font-semibold mb-1">Média Mundial</div>
      <p class="text-xs" style="color:var(--muted);">Precisamos de 1,7 Terras para suportar o estilo de vida médio global</p>
    </div>
    <div class="sust3-card text-center">
      <div class="text-2xl font-black mb-1" style="color:#ef4444;">3,0</div>
      <div class="text-xs font-semibold mb-1">Portugal</div>
      <p class="text-xs" style="color:var(--muted);">Precisávamos de 3 Terras se toda a gente vivesse como vivemos em Portugal</p>
    </div>
  </div>

  <div class="callout-sabias">
    <div class="callout-label">O que mais pesa na tua pegada?</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">Em Portugal, as maiores contribuições para a pegada ecológica individual são: <strong>1) Alimentação</strong> (especialmente carne, que precisa de muito mais recursos que vegetais), <strong>2) Transporte</strong> (carro vs. bicicleta/transportes públicos), <strong>3) Energia em casa</strong> e <strong>4) Compras</strong>. A boa notícia: estas são todas escolhas que podes começar a mudar amanhã.</p>
  </div>
</section>

<script>
(function () {
  var ctx = document.getElementById('footprintChart');
  if (ctx) {
    new Chart(ctx.getContext('2d'), {
      type: 'bar',
      data: {
        labels: ['Sustentável', 'Bangladesh', 'Brasil', 'Média Mundial', 'Portugal', 'EUA', 'Qatar'],
        datasets: [{
          label: 'Planetas necessários',
          data: [1.0, 0.8, 1.8, 1.7, 3.0, 5.1, 9.7],
          backgroundColor: ['#22c55e','#86efac','#fde68a','#f59e0b','#ef4444','#dc2626','#991b1b'],
          borderRadius: 6,
          borderSkipped: false
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: { display: false },
          tooltip: { callbacks: { label: function(c) { return ' ' + c.parsed.y + ' Planetas Terra'; } } }
        },
        scales: {
          y: {
            beginAtZero: true,
            ticks: { font: { size: 10 }, callback: function(v) { return v + '🌍'; } },
            grid: { color: 'rgba(0,0,0,0.05)' }
          },
          x: { ticks: { font: { size: 9 } }, grid: { display: false } }
        }
      }
    });
  }
}());
</script>
