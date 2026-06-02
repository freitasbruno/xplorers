<?php $reflection_question = 'O computador deixou de ser uma máquina de calcular para ser uma extensão da nossa mente. Achas que controlamos a tecnologia, ou é ela que nos começa a controlar a nós? Onde está a linha?'; ?>

<style>
.net-card { background: var(--card-bg); border: 1px solid var(--border); border-radius: 1rem; padding: 1.5rem; }
.net-timeline { position: relative; padding-left: 2rem; }
.net-timeline::before { content: ''; position: absolute; left: 0.55rem; top: 0.4rem; bottom: 0.4rem; width: 2px; background: var(--border); border-radius: 2px; }
.net-timeline-item { position: relative; margin-bottom: 1.5rem; }
.net-timeline-item:last-child { margin-bottom: 0; }
.net-dot { position: absolute; left: -1.8rem; top: 0.25rem; width: 0.7rem; height: 0.7rem; border-radius: 50%; background: var(--accent); border: 2px solid var(--bg); box-shadow: 0 0 0 2px var(--accent); }
.net-ai-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; }
@media (max-width: 640px) { .net-ai-grid { grid-template-columns: 1fr; } }
.net-future-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1rem; }
@media (max-width: 640px) { .net-future-grid { grid-template-columns: 1fr; } }
.net-future-card { text-align: center; padding: 1.25rem 1rem; background: var(--card-bg); border: 1px solid var(--border); border-radius: 1rem; transition: transform 0.2s ease, box-shadow 0.2s ease; }
.net-future-card:hover { transform: translateY(-3px); box-shadow: 0 8px 24px -4px rgba(80,55,20,0.14); }
.net-packet { display: inline-block; padding: 0.2rem 0.5rem; border-radius: 0.375rem; font-size: 0.65rem; font-weight: 700; font-family: monospace; margin: 0.1rem; }
</style>

<section data-label="A ARPANET" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">1. A Origem da Internet: ARPANET 📡</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">A Internet não nasceu para o TikTok. Nasceu como um projeto militar altamente secreto dos EUA durante a Guerra Fria — com um único objetivo: sobreviver a um ataque nuclear.</p>

  <div class="grid md:grid-cols-2 gap-4 mb-5">
    <div class="net-card">
      <div class="text-2xl mb-3">🎯</div>
      <h3 class="font-bold text-sm mb-2" style="color:var(--accent);">O Problema</h3>
      <p class="text-sm leading-relaxed" style="color:#334155;">Se a União Soviética destruísse o centro de comunicações de Washington, toda a rede militar americana ficaria muda. Precisavam de uma rede que sobrevivesse à destruição de qualquer ponto individual.</p>
    </div>
    <div class="net-card" style="background:#f0fdf4;border-color:#bbf7d0;">
      <div class="text-2xl mb-3">🕸️</div>
      <h3 class="font-bold text-sm mb-2" style="color:#15803d;">A Solução: Descentralização</h3>
      <p class="text-sm leading-relaxed" style="color:#334155;">Uma rede sem centro. Se um "nó" fosse destruído, a informação encontraria automaticamente outro caminho para chegar ao destino — como a água que contorna um obstáculo.</p>
    </div>
  </div>

  <div class="net-card mb-5" style="background:#1e293b;border-color:#334155;">
    <div class="text-xs font-bold uppercase tracking-wide mb-3" style="color:#5eead4;">Comutação de Pacotes — A Grande Inovação</div>
    <p class="text-sm leading-relaxed mb-3" style="color:#cbd5e1;">Em vez de enviar um ficheiro inteiro de uma vez (como uma carta), a informação é <strong>partida em pacotes</strong> que viajam por caminhos diferentes e se montam novamente no destino.</p>
    <div class="text-center">
      <div class="text-xs mb-2" style="color:#94a3b8;">A mensagem "OLÁ" viaja assim:</div>
      <div class="flex justify-center flex-wrap gap-1 mb-2">
        <span class="net-packet" style="background:#f43f5e;color:white;">PKT-1: O</span>
        <span class="net-packet" style="background:#8b5cf6;color:white;">PKT-2: L</span>
        <span class="net-packet" style="background:#3b82f6;color:white;">PKT-3: Á</span>
      </div>
      <div class="text-xs" style="color:#64748b;">→ cada pacote segue um caminho diferente → montam-se no destino</div>
    </div>
  </div>

  <div class="callout-sabias">
    <div class="callout-label">O primeiro crash da história</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">Em 1969, a ARPANET tentou enviar a palavra "LOGIN" entre dois computadores — UCLA e Stanford. O sistema crashou após a letra "O". Apenas <strong>"LO"</strong> chegou ao destino. Foi o primeiro erro de rede da história, e inadvertidamente a primeira mensagem de internet do mundo.</p>
  </div>
</section>

<section data-label="A Web" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">2. Da ARPANET à World Wide Web 🕸️</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">A Internet existia desde os anos 70 — mas era apenas para cientistas e militares. Até 1989, os computadores eram ilhas: podias criar um documento, mas ninguém o via a menos que o levasses numa disquete.</p>

  <div class="net-timeline mb-5">
    <div class="net-timeline-item">
      <div class="net-dot"></div>
      <div class="text-xs font-bold uppercase tracking-wide mb-0.5" style="color:var(--accent);">1969</div>
      <div class="font-bold text-sm text-slate-900 mb-1">ARPANET — A Rede Militar Secreta</div>
      <p class="text-sm" style="color:var(--muted);">4 computadores ligados entre si. Apenas para uso militar e científico. O público em geral não sabia que existia.</p>
    </div>
    <div class="net-timeline-item">
      <div class="net-dot"></div>
      <div class="text-xs font-bold uppercase tracking-wide mb-0.5" style="color:var(--accent);">1989</div>
      <div class="font-bold text-sm text-slate-900 mb-1">Tim Berners-Lee inventa a World Wide Web</div>
      <p class="text-sm" style="color:var(--muted);">O cientista do CERN inventou o HTML, os links e o protocolo HTTP. Decisão histórica: <strong>não patenteou</strong> a sua invenção. Deu-a ao mundo de graça.</p>
    </div>
    <div class="net-timeline-item">
      <div class="net-dot"></div>
      <div class="text-xs font-bold uppercase tracking-wide mb-0.5" style="color:var(--accent);">1991–2000</div>
      <div class="font-bold text-sm text-slate-900 mb-1">Web 1.0 — A Web que só se lê</div>
      <p class="text-sm" style="color:var(--muted);">Páginas estáticas. Podias ler notícias, ver informações. Mas não podias comentar, publicar ou interagir. Era uma biblioteca, não uma praça pública.</p>
    </div>
    <div class="net-timeline-item">
      <div class="net-dot" style="background:#4338ca;box-shadow:0 0 0 2px #4338ca;"></div>
      <div class="text-xs font-bold uppercase tracking-wide mb-0.5" style="color:#4338ca;">2004–hoje</div>
      <div class="font-bold text-sm text-slate-900 mb-1">Web 2.0 — O utilizador é o conteúdo</div>
      <p class="text-sm" style="color:var(--muted);">YouTube, Facebook, Instagram, TikTok. Qualquer pessoa pode publicar. O utilizador deixou de ser leitor e tornou-se criador. A internet passou de uma biblioteca para um palco global.</p>
    </div>
    <div class="net-timeline-item">
      <div class="net-dot" style="background:#f43f5e;box-shadow:0 0 0 2px #f43f5e;"></div>
      <div class="text-xs font-bold uppercase tracking-wide mb-0.5" style="color:#f43f5e;">2007</div>
      <div class="font-bold text-sm text-slate-900 mb-1">iPhone — A Internet no Bolso</div>
      <p class="text-sm" style="color:var(--muted);">Steve Jobs apresentou um telemóvel + iPod + browser completo. A computação tornou-se <strong>ubíqua</strong>. Já não "vamos" à internet — vivemos nela 24 horas por dia.</p>
    </div>
  </div>

  <div class="net-card" style="border-left:4px solid var(--accent);border-radius:0 1rem 1rem 0;">
    <div class="text-xs font-bold uppercase tracking-wide mb-2" style="color:var(--accent);">Internet vs. Web — não é a mesma coisa</div>
    <p class="text-sm leading-relaxed" style="color:#334155;"><strong>Internet</strong> = a infraestrutura (cabos, satélites, servidores). <strong>Web</strong> = o que corre por cima (páginas, sites, apps). É como a diferença entre a estrada e os carros que circulam nela.</p>
  </div>
</section>

<section data-label="Inteligência Artificial" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">3. A Era da Inteligência Artificial 🤖</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">Estamos a entrar numa era onde o computador já não se limita a executar ordens — começa a <strong>aprender</strong>, a <strong>criar</strong> e a <strong>agir</strong> por nós.</p>

  <div class="net-ai-grid mb-5">
    <div class="net-card">
      <div class="text-xs font-bold uppercase tracking-wide mb-2" style="color:var(--muted);">ONTEM — IA Analítica</div>
      <div class="text-2xl mb-2">📊</div>
      <div class="font-bold text-sm mb-2 text-slate-900">Analisa e classifica</div>
      <p class="text-sm leading-relaxed" style="color:#334155;">Reconhece faces em fotos, deteta spam no email, recomenda vídeos no YouTube. Muito boa a classificar — mas não cria nada de novo.</p>
    </div>
    <div class="net-card" style="background:#fdf4ff;border-color:#e9d5ff;">
      <div class="text-xs font-bold uppercase tracking-wide mb-2" style="color:#7c3aed;">HOJE — IA Generativa</div>
      <div class="text-2xl mb-2">✨</div>
      <div class="font-bold text-sm mb-2 text-slate-900">Cria do zero</div>
      <p class="text-sm leading-relaxed" style="color:#334155;">ChatGPT, Gemini, DALL-E, Suno. Escreve textos, cria imagens, compõe música, escreve código. A IA passou de ferramenta de análise para ferramenta de criação.</p>
    </div>
  </div>

  <div class="net-card mb-5" style="background:#1e293b;border-color:#334155;">
    <div class="text-xs font-bold uppercase tracking-wide mb-3" style="color:#5eead4;">🚀 AMANHÃ — IA Agente (2026+)</div>
    <p class="text-sm leading-relaxed mb-3" style="color:#cbd5e1;">A próxima fronteira: a IA não só conversa — <strong>executa tarefas</strong> de ponta a ponta. Pedes para organizar férias; ela reserva o voo, escolhe o hotel, cria o itinerário e adiciona ao teu calendário sozinha. O computador passou de "ferramenta" a "assistente".</p>
    <p class="text-xs" style="color:#94a3b8;">Exemplo: em vez de te dar uma receita, ela encomenda os ingredientes, defende uma hora no calendário e guarda o passo a passo no teu telemóvel.</p>
  </div>
</section>

<section data-label="Computação Quântica" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">4. Computação Quântica: Quebrar os Limites ⚛️</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">Os computadores atuais são extraordinários — mas têm um limite fundamental: cada bit é sempre 0 ou 1. A computação quântica ignora essa limitação.</p>

  <div class="grid md:grid-cols-2 gap-4 mb-5">
    <div class="net-card">
      <div class="font-bold text-sm mb-3 text-slate-900">💻 Bit Clássico</div>
      <div class="flex gap-3 mb-3">
        <div class="flex-1 text-center p-3 rounded-lg text-sm font-bold" style="background:#dbeafe;color:#1e40af;">0</div>
        <div class="flex-1 text-center p-3 rounded-lg text-sm font-bold" style="background:#fee2e2;color:#991b1b;">1</div>
      </div>
      <p class="text-xs" style="color:var(--muted);">Cada bit é sempre 0 <strong>ou</strong> 1 — nunca os dois ao mesmo tempo. É como uma moeda que está sempre ou cara ou coroa.</p>
    </div>
    <div class="net-card" style="background:#fdf4ff;border-color:#e9d5ff;">
      <div class="font-bold text-sm mb-3 text-slate-900">⚛️ Qubit Quântico</div>
      <div class="flex gap-3 mb-3">
        <div class="flex-1 text-center p-3 rounded-lg text-sm font-bold" style="background:linear-gradient(135deg,#dbeafe,#f3e8ff);color:#4338ca;">0 + 1</div>
      </div>
      <p class="text-xs" style="color:var(--muted);">Um qubit pode ser 0 e 1 <strong>ao mesmo tempo</strong> (superposição). É como uma moeda a girar — só quando para é que decide o estado.</p>
    </div>
  </div>

  <div class="net-card mb-4">
    <div class="text-xs font-bold uppercase tracking-wide mb-2" style="color:var(--accent);">O poder prático</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">Um computador quântico com 300 qubits pode explorar mais estados simultâneos do que existem átomos no universo observável. Problemas que os supercomputadores atuais demorariam milénios a resolver — simulações moleculares, rotas de logística global, modelos climáticos — podem ser resolvidos em minutos.</p>
  </div>

  <div class="callout-sabias">
    <div class="callout-label">O risco</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">A computação quântica pode <strong>quebrar toda a criptografia atual</strong> — incluindo os sistemas que protegem bancos, emails e comunicações militares. Por isso, investigadores já estão a desenvolver uma nova "Criptografia Pós-Quântica" para o mundo que aí vem.</p>
  </div>
</section>

<section data-label="O Futuro" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">5. O Futuro Profundo: Além do Silício 🧠</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">O que vem depois dos chips de silício? A fronteira seguinte não é mais pequena, mais rápida — é fundamentalmente diferente.</p>

  <div class="net-future-grid mb-6">
    <div class="net-future-card">
      <div class="text-3xl mb-2">🧬</div>
      <div class="font-bold text-sm mb-2">Computadores de DNA</div>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">O DNA é o armazém mais eficiente da natureza. Toda a internet poderia ser guardada num único grama de DNA — com muito espaço a sobrar.</p>
    </div>
    <div class="net-future-card">
      <div class="text-3xl mb-2">🧠</div>
      <div class="font-bold text-sm mb-2">Interface Cérebro-Computador</div>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">Chips que permitem controlar dispositivos apenas com o pensamento. Em 2040, o "rato" poderá ser um impulso elétrico no cérebro — sem mãos, sem voz.</p>
    </div>
    <div class="net-future-card">
      <div class="text-3xl mb-2">🔬</div>
      <div class="font-bold text-sm mb-2">Nanotecnologia</div>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">Computadores microscópicos que viajam pelo sangue para detetar e curar doenças antes de sentires qualquer dor. O médico dentro do teu corpo.</p>
    </div>
  </div>

  <div class="space-y-3">
    <div class="callout-sabias">
      <div class="callout-label">A primeira página web ainda existe</div>
      <p class="text-sm leading-relaxed" style="color:#334155;">A primeira página web da história, criada por Tim Berners-Lee no CERN em 1991, ainda está online: <strong>info.cern.ch</strong>. Era literalmente uma lista de links para outros computadores do laboratório.</p>
    </div>
    <div class="callout-sabias">
      <div class="callout-label">O custo oculto da IA</div>
      <p class="text-sm leading-relaxed" style="color:#334155;">Treinar um modelo de IA de grande escala consome tanta energia elétrica como centenas de casas durante um ano inteiro. O futuro da computação terá de ser obrigatoriamente <strong>mais eficiente</strong> — ou a IA vai consumir uma fração crescente da energia do planeta.</p>
    </div>
    <div class="callout-sabias">
      <div class="callout-label">Já somos ciborgues</div>
      <p class="text-sm leading-relaxed" style="color:#334155;">Se usas um smartwatch que monitoriza o teu ritmo cardíaco, ou se tens um pacemaker implantado, já és tecnicamente um <strong>ciborgue de baixa tecnologia</strong>. A fronteira entre o biológico e o digital está a apagar-se — mais depressa do que imaginamos.</p>
    </div>
  </div>
</section>
