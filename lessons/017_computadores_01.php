<?php $reflection_question = 'Se Babbage tivesse vivido numa era com melhores recursos tecnológicos, a Máquina Analítica poderia ter dado início à Era Digital no século XIX. Achas que a tecnologia surge quando a sociedade está "pronta" para ela, ou é a tecnologia que prepara a sociedade para o futuro?'; ?>

<style>
.comp-card { background: var(--card-bg); border: 1px solid var(--border); border-radius: 1rem; padding: 1.5rem; }
.comp-timeline { position: relative; padding-left: 2rem; }
.comp-timeline::before { content: ''; position: absolute; left: 0.55rem; top: 0.4rem; bottom: 0.4rem; width: 2px; background: var(--border); border-radius: 2px; }
.comp-timeline-item { position: relative; margin-bottom: 1.75rem; }
.comp-timeline-item:last-child { margin-bottom: 0; }
.comp-timeline-dot { position: absolute; left: -1.8rem; top: 0.25rem; width: 0.7rem; height: 0.7rem; border-radius: 50%; background: var(--accent); border: 2px solid var(--bg); box-shadow: 0 0 0 2px var(--accent); }
.comp-timeline-dot.comp-dot-highlight { background: #4338ca; box-shadow: 0 0 0 2px #4338ca; }
.comp-component-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1rem; }
@media (max-width: 640px) { .comp-component-grid { grid-template-columns: 1fr; } }
.comp-component-item { text-align: center; padding: 1.25rem 1rem; background: var(--card-bg); border: 1px solid var(--border); border-radius: 1rem; transition: transform 0.2s ease, box-shadow 0.2s ease; }
.comp-component-item:hover { transform: translateY(-3px); box-shadow: 0 8px 24px -4px rgba(80,55,20,0.14); }
.comp-vs { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; }
@media (max-width: 640px) { .comp-vs { grid-template-columns: 1fr; } }
.comp-fact-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1rem; }
@media (max-width: 640px) { .comp-fact-grid { grid-template-columns: 1fr; } }
</style>

<section data-label="Origem" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">1. A Origem da Necessidade: Os Calculadores Humanos 🌍</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Antes de existirem ecrãs e teclados, o "computador" era uma <strong>profissão</strong>. Na Europa do século XVII e XVIII, governos e marinheiros dependiam de dezenas de pessoas que faziam contas à mão — os <strong>Calculadores Humanos</strong>. Calculavam tabelas de navegação, trajetórias de projéteis, órbitas de estrelas.</p>

  <div class="grid md:grid-cols-2 gap-4 mb-6">
    <div class="comp-card">
      <div class="text-2xl mb-3">📋</div>
      <h3 class="font-bold text-base mb-2" style="color:var(--accent);">O que calculavam?</h3>
      <p class="text-sm leading-relaxed" style="color:#334155;">Tabelas de logaritmos, trajetórias navais, posições de estrelas, eclipses. Qualquer cálculo que hoje fazemos em segundos exigia horas — ou dias — de trabalho humano coordenado.</p>
    </div>
    <div class="comp-card" style="background:#1e293b;border-color:#334155;">
      <div class="text-2xl mb-3">⚠️</div>
      <h3 class="font-bold text-base mb-2" style="color:#f87171;">O custo dos erros</h3>
      <p class="text-sm leading-relaxed" style="color:#cbd5e1;">Os humanos cansam-se e cometem erros. Um único erro numa tabela de navegação podia levar um navio a chocar contra rochas — e matar toda a tripulação. Foi a busca pela <strong style="color:white;">perfeição e velocidade</strong> que impulsionou a criação das primeiras máquinas de calcular.</p>
    </div>
  </div>
</section>

<section data-label="As Máquinas" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">2. A Evolução das Ferramentas Mecânicas ⚙️</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">De pedras numa areia a engrenagens a vapor — a humanidade levou milénios a chegar ao limiar do computador. Cada invenção resolveu um problema e criou um novo.</p>

  <div class="comp-timeline mb-8">
    <div class="comp-timeline-item">
      <div class="comp-timeline-dot"></div>
      <div class="text-xs font-bold uppercase tracking-wide mb-0.5" style="color:var(--accent);">~3000 a.C.</div>
      <div class="font-bold text-sm text-slate-900 mb-1">O Ábaco — A Primeira Interface de Dados</div>
      <p class="text-sm" style="color:var(--muted);">Não era apenas contas num arame. Permitia "armazenar" números enquanto processava outros. Mestres do Soroban japonês ainda hoje batem calculadoras digitais em adições e subtrações. Ensinou-nos que <strong>números podiam ser objetos físicos</strong>.</p>
    </div>
    <div class="comp-timeline-item">
      <div class="comp-timeline-dot"></div>
      <div class="text-xs font-bold uppercase tracking-wide mb-0.5" style="color:var(--accent);">1642</div>
      <div class="font-bold text-sm text-slate-900 mb-1">A Pascaline — Blaise Pascal, 19 anos</div>
      <p class="text-sm" style="color:var(--muted);">Criada para ajudar o pai a calcular impostos. O desafio central: ao chegar ao 9, como fazer a roda seguinte avançar? Pascal resolveu com <strong>gravidade</strong> — o mecanismo do "Vai Um". Só somava e subtraía, e encravava com frequência.</p>
    </div>
    <div class="comp-timeline-item">
      <div class="comp-timeline-dot"></div>
      <div class="text-xs font-bold uppercase tracking-wide mb-0.5" style="color:var(--accent);">1822</div>
      <div class="font-bold text-sm text-slate-900 mb-1">Máquina Diferencial — Charles Babbage</div>
      <p class="text-sm" style="color:var(--muted);">Projetada para calcular polinómios e imprimir tabelas sem erros humanos. Nunca foi concluída — o financiamento acabou e a metalurgia da época não era precisa o suficiente.</p>
    </div>
    <div class="comp-timeline-item">
      <div class="comp-timeline-dot comp-dot-highlight"></div>
      <div class="text-xs font-bold uppercase tracking-wide mb-0.5" style="color:#4338ca;">1837</div>
      <div class="font-bold text-sm text-slate-900 mb-1">Máquina Analítica — O Avô do Computador</div>
      <p class="text-sm" style="color:var(--muted);">A primeira máquina <em>programável</em>. Tinha CPU, memória e input. Nunca foi construída em vida de Babbage — mas o conceito sobreviveu 185 anos até ao silício.</p>
    </div>
  </div>

  <p class="text-sm font-semibold mb-3" style="color:var(--muted);">Os três componentes da Máquina Analítica — e os seus equivalentes modernos:</p>
  <div class="comp-component-grid mb-6">
    <div class="comp-component-item">
      <div class="text-3xl mb-2">⚙️</div>
      <div class="font-bold text-sm mb-1">O "Moinho" (Mill)</div>
      <div class="text-xs leading-relaxed" style="color:var(--muted);">Onde os cálculos aconteciam. Equivalente ao <strong>CPU</strong> moderno — a unidade central de processamento.</div>
    </div>
    <div class="comp-component-item">
      <div class="text-3xl mb-2">📦</div>
      <div class="font-bold text-sm mb-1">O "Armazém" (Store)</div>
      <div class="text-xs leading-relaxed" style="color:var(--muted);">Onde os números eram guardados temporariamente. Equivalente à <strong>Memória RAM</strong> e ao disco rígido.</div>
    </div>
    <div class="comp-component-item">
      <div class="text-3xl mb-2">🃏</div>
      <div class="font-bold text-sm mb-1">Cartões Perfurados</div>
      <div class="text-xs leading-relaxed" style="color:var(--muted);">Inspirados nos teares automáticos de tecidos. Equivalente ao <strong>teclado e ao código</strong> — o input de instruções.</div>
    </div>
  </div>

  <div class="callout-sabias">
    <div class="callout-label">Sabias que?</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">Se tivesse sido terminada, a Máquina Analítica seria do tamanho de uma <strong>locomotiva a vapor</strong>, com <strong>1 KB de memória</strong> — o equivalente a esta frase. O teu smartphone tem cerca de 256 mil vezes mais memória.</p>
  </div>
</section>

<section data-label="Ada Lovelace" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">3. Ada Lovelace: A Visionária do Software ✍️</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Ada não era apenas uma assistente de Babbage. Era uma matemática brilhante que viu o que mais ninguém viu. Enquanto toda a gente olhava para a Máquina Analítica como uma calculadora gigante, ela enxergou algo completamente diferente.</p>

  <div class="grid md:grid-cols-2 gap-4 mb-5">
    <div class="comp-card">
      <div class="text-xs font-bold uppercase tracking-wide mb-3" style="color:var(--muted);">O que Babbage via</div>
      <div class="text-2xl mb-2">🔢</div>
      <p class="text-sm leading-relaxed" style="color:#334155;">Uma máquina para calcular números com perfeição. Rápida, sem erros, incansável. Uma calculadora mecânica de escala industrial.</p>
    </div>
    <div class="comp-card" style="background:#f0fdf4;border-color:#bbf7d0;">
      <div class="text-xs font-bold uppercase tracking-wide mb-3" style="color:#15803d;">O que Ada via</div>
      <div class="text-2xl mb-2">🌌</div>
      <p class="text-sm leading-relaxed" style="color:#334155;font-style:italic;">"A máquina pode vir a agir sobre outras coisas para além dos números... se as notas musicais fossem adaptadas, a máquina poderia compor peças musicais elaboradas e científicas."</p>
      <p class="text-xs mt-2 font-bold" style="color:#15803d;">→ Ela previu a Computação Universal em 1843.</p>
    </div>
  </div>

  <div class="comp-card mb-5" style="border-color:var(--accent);border-left-width:4px;border-radius:0 1rem 1rem 0;">
    <div class="text-xs font-bold uppercase tracking-wide mb-2" style="color:var(--accent);">O Primeiro Programa de Computador do Mundo</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">Nas suas notas sobre a Máquina Analítica, Ada descreveu um método detalhado para calcular os <strong>Números de Bernoulli</strong> — uma sequência lógica de passos para resolver um problema matemático. É considerado o primeiro <em>algoritmo</em> da história, escrito para uma máquina que ainda não existia.</p>
  </div>

  <div class="callout-sabias">
    <div class="callout-label">Sabias que?</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">Ada Lovelace era filha do famoso poeta <strong>Lord Byron</strong>. A sua mãe, preocupada que Ada herdasse a "instabilidade" do pai, incentivou-a desde criança a estudar matemática e ciências. Resultado: a mulher que inventou a programação antes de existirem computadores.</p>
  </div>
</section>

<section data-label="Factos" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">4. Factos que Surpreendem 💡</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <div class="comp-fact-grid">
    <div class="comp-card text-center">
      <div class="text-3xl mb-3">🪨</div>
      <h3 class="font-bold text-sm mb-2">A origem da palavra</h3>
      <p class="text-xs leading-relaxed" style="color:var(--muted);"><strong>Calculadora</strong> vem do latim <em>calculus</em> — "pedrinha". Os romanos usavam pedras num tabuleiro de areia para calcular. Os primeiros "computadores" eram literalmente feitos de rocha e pó.</p>
    </div>
    <div class="comp-card text-center">
      <div class="text-3xl mb-3">🚂</div>
      <h3 class="font-bold text-sm mb-2">Tamanho de locomotiva</h3>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">A Máquina Analítica teria o tamanho de uma locomotiva, movida a vapor, com apenas <strong>1 KB de memória</strong>. O teu smartphone tem ~256 000 000 KB. O progresso é considerável.</p>
    </div>
    <div class="comp-card text-center">
      <div class="text-3xl mb-3">🌫️</div>
      <h3 class="font-bold text-sm mb-2">O inimigo invisível</h3>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">Babbage nunca terminou nenhuma das suas máquinas. A metalurgia da época não conseguia maquinar as engrenagens com precisão suficiente. Um grão de poeira numa engrenagem era suficiente para bloquear tudo.</p>
    </div>
  </div>
</section>

<section data-label="Mecânico vs Digital" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">5. Mecânico vs. Digital: A Mesma Lógica, Meios Diferentes ⚡</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Imagina que queres calcular a trajetória de um foguetão para a Lua. O que mudou entre a era de Babbage e hoje não foi a <em>lógica</em> — foi o <em>meio físico</em>.</p>

  <div class="comp-vs mb-5">
    <div class="comp-card">
      <div class="text-center mb-4">
        <span class="text-3xl">⚙️</span>
        <div class="font-bold text-sm mt-1" style="color:var(--muted);">Era de Babbage</div>
      </div>
      <ul class="space-y-2.5" style="color:#334155;">
        <li class="flex items-start gap-2 text-sm"><span>🏋️</span> Máquina de <strong>15 toneladas</strong></li>
        <li class="flex items-start gap-2 text-sm"><span>🔧</span> Milhares de engrenagens lubrificadas</li>
        <li class="flex items-start gap-2 text-sm"><span>⏳</span> Meses a configurar os cartões perfurados</li>
        <li class="flex items-start gap-2 text-sm"><span>🌫️</span> Um grão de poeira → falha total</li>
        <li class="flex items-start gap-2 text-sm"><span>💨</span> Movida a vapor</li>
      </ul>
    </div>
    <div class="comp-card" style="background:#f0fdf4;border-color:#bbf7d0;">
      <div class="text-center mb-4">
        <span class="text-3xl">📱</span>
        <div class="font-bold text-sm mt-1" style="color:#15803d;">Era Digital</div>
      </div>
      <ul class="space-y-2.5" style="color:#334155;">
        <li class="flex items-start gap-2 text-sm"><span>🪶</span> Cabe no bolso</li>
        <li class="flex items-start gap-2 text-sm"><span>⚡</span> Eletrões em vez de engrenagens</li>
        <li class="flex items-start gap-2 text-sm"><span>⏱️</span> Milissegundos</li>
        <li class="flex items-start gap-2 text-sm"><span>🛡️</span> Resistente a poeira e vibração</li>
        <li class="flex items-start gap-2 text-sm"><span>🔋</span> Movido a bateria</li>
      </ul>
    </div>
  </div>

  <div class="comp-card" style="border-left: 4px solid var(--accent); border-radius: 0 1rem 1rem 0;">
    <div class="text-xs font-bold uppercase tracking-wide mb-2" style="color:var(--accent);">O que não mudou desde Babbage</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">A lógica fundamental — <strong>armazenar</strong> (Store → RAM), <strong>processar</strong> (Mill → CPU), <strong>produzir output</strong> (impressão → ecrã) — é exatamente a mesma. Só o meio físico mudou: de rodas dentadas de aço para eletrões a correr em silício.</p>
  </div>
</section>
