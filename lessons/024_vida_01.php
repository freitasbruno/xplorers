<?php $reflection_question = 'Se as proteínas precisam do DNA para serem fabricadas, e o DNA precisa de proteínas para se replicar, como é que o primeiro sistema vivo apareceu? Terá sido o DNA primeiro, as proteínas primeiro, ou algo completamente diferente que fazia as duas funções ao mesmo tempo?'; ?>

<style>
.vida-card { background: var(--card-bg); border: 1px solid var(--border); border-radius: 1rem; padding: 1.5rem; }
.vida-gas-grid { display: grid; grid-template-columns: repeat(5, 1fr); gap: 0.75rem; }
@media (max-width: 640px) { .vida-gas-grid { grid-template-columns: repeat(2, 1fr); } }
.vida-gas { background: var(--card-bg); border: 1px solid var(--border); border-radius: 0.75rem; padding: 1rem; text-align: center; }
.vida-gas.no-ox { background: #fff7ed; border-color: #fed7aa; }
.vida-step { display: flex; gap: 1rem; align-items: flex-start; margin-bottom: 1.25rem; }
.vida-step-num { flex-shrink: 0; width: 2rem; height: 2rem; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 0.875rem; color: #fff; }
.vida-chaos-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 1rem; }
@media (max-width: 480px) { .vida-chaos-grid { grid-template-columns: 1fr; } }
</style>

<section data-label="Terra Primitiva" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">1. Um Cenário Apocalíptico ⏳</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">Imagina que tinhas uma máquina do tempo e voltavas 4 mil milhões de anos atrás. Não encontrarias florestas, nem oceanos azuis, nem sequer oxigénio para respirar. Encontrarias um cenário de caos absoluto — e foi precisamente nesse inferno que aconteceu o evento mais extraordinário da história do planeta.</p>

  <div class="vida-chaos-grid mb-5">
    <div class="vida-card text-center">
      <div class="text-3xl mb-3">🌋</div>
      <div class="font-bold text-sm mb-1">Vulcões Omnipresentes</div>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">Erupções constantes libertavam gases tóxicos e moldavam uma superfície em permanente mudança.</p>
    </div>
    <div class="vida-card text-center">
      <div class="text-3xl mb-3">☄️</div>
      <div class="font-bold text-sm mb-1">Chuva de Asteroides</div>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">O Sistema Solar jovem era caótico. Impactos frequentes vaporizavam oceanos inteiros.</p>
    </div>
    <div class="vida-card text-center">
      <div class="text-3xl mb-3">☠️</div>
      <div class="font-bold text-sm mb-1">Atmosfera Tóxica</div>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">O ar era irrespirável — metano, amoníaco, hidrogénio. Zero oxigénio.</p>
    </div>
    <div class="vida-card text-center">
      <div class="text-3xl mb-3">☀️</div>
      <div class="font-bold text-sm mb-1">Radiação UV Intensa</div>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">Sem camada de ozono, a radiação ultravioleta do Sol atingia a superfície a plena potência.</p>
    </div>
  </div>

  <div class="vida-card" style="border-left:4px solid var(--accent); border-radius:0 1rem 1rem 0;">
    <p class="text-sm leading-relaxed" style="color:#334155;">E no entanto… foi neste <strong>caos</strong> que aconteceu a transição mais extraordinária do Universo: a passagem da <strong>química simples</strong> para a <strong>biologia</strong>. O caos não impedia a vida — era o seu ingrediente secreto.</p>
  </div>
</section>

<section data-label="A Atmosfera" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">2. A Atmosfera Redutora 🧪</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">A atmosfera primitiva era radicalmente diferente da atual. Chamamos-lhe "redutora" porque não tinha oxigénio livre — e isso, paradoxalmente, era essencial para o surgimento da vida.</p>

  <div class="vida-gas-grid mb-5">
    <div class="vida-gas">
      <div class="text-2xl mb-2">💨</div>
      <div class="font-bold text-xs mb-1">Metano</div>
      <div class="text-xs font-mono" style="color:var(--muted);">CH₄</div>
    </div>
    <div class="vida-gas">
      <div class="text-2xl mb-2">💨</div>
      <div class="font-bold text-xs mb-1">Amoníaco</div>
      <div class="text-xs font-mono" style="color:var(--muted);">NH₃</div>
    </div>
    <div class="vida-gas">
      <div class="text-2xl mb-2">💨</div>
      <div class="font-bold text-xs mb-1">Hidrogénio</div>
      <div class="text-xs font-mono" style="color:var(--muted);">H₂</div>
    </div>
    <div class="vida-gas">
      <div class="text-2xl mb-2">💧</div>
      <div class="font-bold text-xs mb-1">Vapor de Água</div>
      <div class="text-xs font-mono" style="color:var(--muted);">H₂O</div>
    </div>
    <div class="vida-gas no-ox">
      <div class="text-2xl mb-2">🚫</div>
      <div class="font-bold text-xs mb-1 text-orange-700">Sem Oxigénio</div>
      <div class="text-xs" style="color:#9a3412;">O₂ ausente</div>
    </div>
  </div>

  <div class="vida-card" style="background:#fff7ed; border-color:#fed7aa;">
    <p class="text-sm leading-relaxed" style="color:#7c2d12;">⚠️ <strong>Porquê a ausência de O₂ é crucial?</strong> O oxigénio é extremamente reativo — "queimaria" (oxidaria) as primeiras moléculas orgânicas complexas assim que se formassem. Só numa atmosfera sem oxigénio é que aminoácidos e outras moléculas podiam acumular-se durante tempo suficiente para crescer em complexidade.</p>
  </div>
</section>

<section data-label="Sopa Primordial" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">3. A Sopa Primordial 🍳</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">A Hipótese de Oparin-Haldane é a explicação científica mais aceite para a origem das primeiras moléculas da vida. A lógica é simples e elegante — pensa como se fosse uma receita de cozinha.</p>

  <div class="mb-6">
    <div class="vida-step">
      <div class="vida-step-num" style="background:var(--accent);">1</div>
      <div class="vida-card flex-1">
        <div class="font-bold text-sm mb-1">Ingredientes — Os Átomos CHON 🔬</div>
        <p class="text-xs leading-relaxed" style="color:var(--muted);">Carbono, Hidrogénio, Oxigénio e Azoto são os quatro elementos que constituem mais de 96% de toda a matéria viva. Estavam presentes em abundância na atmosfera e nos oceanos primitivos.</p>
      </div>
    </div>
    <div class="vida-step">
      <div class="vida-step-num" style="background:#6366f1;">2</div>
      <div class="vida-card flex-1">
        <div class="font-bold text-sm mb-1">A Mistura — Os Oceanos Primitivos 🌊</div>
        <p class="text-xs leading-relaxed" style="color:var(--muted);">A chuva arrastava as moléculas da atmosfera para os oceanos. Ao longo de <em>milhões de anos</em>, estas moléculas concentraram-se e interagiram umas com as outras, formando um "caldo" cada vez mais rico.</p>
      </div>
    </div>
    <div class="vida-step">
      <div class="vida-step-num" style="background:#f59e0b;">3</div>
      <div class="vida-card flex-1">
        <div class="font-bold text-sm mb-1">A Energia — Raios, Vulcões e Sol ⚡</div>
        <p class="text-xs leading-relaxed" style="color:var(--muted);">As tempestades elétricas (raios), a radiação UV intensa e o calor vulcânico forneciam a energia necessária para "partir" e "recombinar" moléculas simples em estruturas orgânicas mais complexas — incluindo aminoácidos, os blocos das proteínas.</p>
      </div>
    </div>
    <div class="vida-step" style="margin-bottom:0;">
      <div class="vida-step-num" style="background:#10b981;">?</div>
      <div class="vida-card flex-1" style="background:#f0fdf4; border-color:#bbf7d0;">
        <div class="font-bold text-sm mb-1 text-emerald-800">O Resultado — A Primeira Célula 🦠</div>
        <p class="text-xs leading-relaxed" style="color:#065f46;">Como é que as moléculas orgânicas se "montaram" espontaneamente na primeira célula viva? Este é o <strong>maior mistério da biologia</strong>. Temos hipóteses, mas ainda não temos a resposta completa.</p>
      </div>
    </div>
  </div>

  <div class="callout-sabias">
    <div class="callout-label">Sabias que?</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">Em 1953, Stanley Miller e Harold Urey recriaram em laboratório as condições da Terra primitiva — e conseguiram produzir aminoácidos em apenas uma semana. Esta experiência foi a primeira prova de que a química da atmosfera primitiva podia, de facto, gerar os blocos da vida.</p>
  </div>
</section>

<section data-label="Curiosidades" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">4. Factos que Surpreendem 🤔</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <div class="grid md:grid-cols-3 gap-4 mb-4">
    <div class="vida-card text-center">
      <div class="text-2xl mb-2">💎</div>
      <div class="font-bold text-sm mb-2">Zircões Eternos</div>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">Cristais de zircão na Austrália sugerem que a Terra já tinha <strong>água líquida há 4,4 mil milhões de anos</strong> — apenas 150 milhões de anos após a formação do planeta. As condições para a vida existiram muito mais cedo do que pensávamos.</p>
    </div>
    <div class="vida-card text-center">
      <div class="text-2xl mb-2">💀</div>
      <div class="font-bold text-sm mb-2">O Oxigénio Era Veneno</div>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">Durante os primeiros 2 mil milhões de anos de vida, <strong>nenhum organismo precisava de oxigénio</strong>. Pelo contrário — o oxigénio era mortal para eles. A ironia: o gás que nos mantém vivos era, no início, o maior inimigo da vida.</p>
    </div>
    <div class="vida-card text-center">
      <div class="text-2xl mb-2">🌌</div>
      <div class="font-bold text-sm mb-2">Estatística Cósmica</div>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">Existem <strong>~40 mil milhões de planetas</strong> do tamanho da Terra na zona habitável da Via Láctea. Será que a "Sopa Primordial" está a fervilhar noutros lugares do Universo neste preciso momento?</p>
    </div>
  </div>
</section>

<section data-label="O Paradoxo" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">5. O Paradoxo do Ovo e da Galinha 🥚🐔</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">Para a vida existir, precisamos de duas coisas que parecem depender uma da outra:</p>

  <div class="grid md:grid-cols-2 gap-4 mb-6">
    <div class="vida-card text-center">
      <div class="text-3xl mb-3">🧬</div>
      <div class="font-bold mb-2">DNA / RNA</div>
      <p class="text-sm" style="color:var(--muted);">Guarda as <strong>instruções</strong> para fabricar proteínas. Sem DNA, as proteínas não podem ser produzidas corretamente.</p>
    </div>
    <div class="vida-card text-center">
      <div class="text-3xl mb-3">⚙️</div>
      <div class="font-bold mb-2">Proteínas</div>
      <p class="text-sm" style="color:var(--muted);">Fazem o <strong>trabalho</strong> — incluindo replicar o DNA. Sem proteínas, o DNA não se consegue copiar.</p>
    </div>
  </div>

  <div class="vida-card" style="background:#1e293b; border-color:#334155;">
    <p class="text-sm leading-relaxed text-slate-200">❓ <strong class="text-white">O Paradoxo:</strong> O DNA precisa de proteínas para se replicar. As proteínas precisam do DNA para serem fabricadas. Como é que o <em>primeiro</em> sistema vivo apareceu se cada componente parece depender do outro para existir?</p>
    <p class="text-xs leading-relaxed mt-3" style="color:#94a3b8;">Uma das respostas mais promissoras: o <strong class="text-slate-200">Mundo de RNA</strong> — uma hipótese em que o RNA primitivo fazia as duas funções em simultâneo, funcionando como portador de informação E como catalisador de reações. O RNA é o "ancestral comum" do DNA e das proteínas.</p>
  </div>
</section>
