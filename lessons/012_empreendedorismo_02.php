<?php $reflection_question = 'Pensa num produto ou serviço que usas todos os dias. É um "analgésico" (resolve uma dor real) ou uma "vitamina" (é bom ter, mas sobreviverias sem ele)? E se fosse uma "vitamina", que mudança na forma como é vendido o tornaria num "analgésico"?'; ?>

<style>
.emp2-card { background: var(--card-bg); border: 1px solid var(--border); border-radius: 1rem; padding: 1.5rem; }
.emp2-pill-row { display: flex; gap: 0.5rem; flex-wrap: wrap; margin-bottom: 1rem; }
.emp2-pill { border: 2px solid var(--border); border-radius: 999px; padding: 0.35rem 0.9rem; font-size: 0.8rem; font-weight: 600; cursor: pointer; transition: all 0.2s ease; background: var(--bg); color: var(--text); }
.emp2-pill.active { background: var(--accent); border-color: var(--accent); color: white; }
.emp2-panel { display: none; }
.emp2-panel.active { display: block; }
.emp2-mvp-step { display: flex; align-items: center; gap: 0.75rem; padding: 0.75rem 1rem; background: var(--card-bg); border: 1px solid var(--border); border-radius: 0.75rem; margin-bottom: 0.5rem; transition: all 0.2s ease; }
.emp2-mvp-step:hover { border-color: var(--accent); }
.emp2-vs { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; }
@media (max-width: 640px) { .emp2-vs { grid-template-columns: 1fr; } }
</style>

<section data-label="Brainstorming" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">1. Brainstorming: Onde Nascem as Ideias 🌩️</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">Ter uma ideia é fácil. A parte difícil é saber se a ideia é <em>boa</em>. Antes de validar, temos de gerar — e para isso usamos o <strong>Brainstorming</strong>: gerar o máximo de ideias possível num curto espaço de tempo. A regra: <strong>quantidade sobre qualidade</strong>. Não há ideias más nesta fase.</p>

  <p class="text-sm font-semibold mb-3" style="color:var(--muted);">Onde encontrar inspiração? Clica em cada fonte:</p>
  <div class="emp2-pill-row">
    <button class="emp2-pill active" data-panel="emp2-pessoal" onclick="showPanel(this)">Problemas Pessoais</button>
    <button class="emp2-pill" data-panel="emp2-observ" onclick="showPanel(this)">Observação</button>
    <button class="emp2-pill" data-panel="emp2-tendencias" onclick="showPanel(this)">Tendências</button>
  </div>
  <div id="emp2-pessoal" class="emp2-panel active emp2-card">
    <div class="text-2xl mb-2">😤</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">O que te frustra no dia a dia? As melhores ideias nascem quando o próprio fundador sente a dor. A Airbnb nasceu porque os fundadores não conseguiam pagar a renda. O WhatsApp nasceu porque as SMS internacionais eram caras. <strong>Olha para as tuas próprias irritações como oportunidades disfarçadas.</strong></p>
  </div>
  <div id="emp2-observ" class="emp2-panel emp2-card">
    <div class="text-2xl mb-2">👀</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">Ver como as outras pessoas lidam (ou lutam) com tarefas do dia a dia. Travis Kalanick observou a dificuldade de chamar um táxi em Paris numa noite de neve — nasceu o Uber. O truque é <strong>não normalizar o incómodo</strong>: quando vês alguém a lutar com algo, pergunta "porque é que isto é assim tão difícil?"</p>
  </div>
  <div id="emp2-tendencias" class="emp2-panel emp2-card">
    <div class="text-2xl mb-2">📈</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">O que está a mudar no mundo? Teletrabalho, preocupação com a sustentabilidade, envelhecimento da população, IA. <strong>As tendências criam novos problemas e novas necessidades</strong> antes de as pessoas saberem que as têm. Quem as identifica cedo ganha uma vantagem enorme.</p>
  </div>
</section>

<section data-label="Analgésico ou Vitamina" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">2. A Dor do Cliente: Analgésico vs. Vitamina 💊</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">A regra de ouro: as pessoas não compram produtos, compram <strong>soluções para os seus problemas</strong>. Por isso, antes de construir qualquer coisa, tens de perceber se a "dor" que identificaste é real.</p>

  <div class="emp2-vs mb-5">
    <div class="emp2-card">
      <div class="text-center mb-3">
        <span class="text-3xl">🍊</span>
        <div class="font-bold text-sm mt-1" style="color:var(--muted);">VITAMINA</div>
      </div>
      <p class="text-sm leading-relaxed mb-3" style="color:#334155;">É bom ter, mas não é essencial. A pessoa vive perfeitamente bem sem isto.</p>
      <div class="p-2 rounded-lg text-xs" style="background:var(--bg);color:var(--muted);">Ex: Uma app de filtros engraçados para fotos. Interessante, mas ninguém fica bloqueado sem ela.</div>
      <div class="mt-2 text-xs font-semibold" style="color:#ef4444;">⚠️ Mais difícil de vender — requer muito marketing para criar o desejo.</div>
    </div>
    <div class="emp2-card" style="background:#f0fdf4;border-color:#bbf7d0;">
      <div class="text-center mb-3">
        <span class="text-3xl">💊</span>
        <div class="font-bold text-sm mt-1" style="color:#15803d;">ANALGÉSICO</div>
      </div>
      <p class="text-sm leading-relaxed mb-3" style="color:#334155;">Resolve uma dor imediata e forte. A pessoa precisa genuinamente disto.</p>
      <div class="p-2 rounded-lg text-xs" style="background:white;color:#334155;">Ex: Uma app que encontra a farmácia de serviço mais próxima às 3h da manhã. A necessidade é urgente e real.</div>
      <div class="mt-2 text-xs font-semibold" style="color:#15803d;">✅ Muito mais fácil de vender — a dor já existe, tu só ofereces o alívio.</div>
    </div>
  </div>

  <div class="callout-sabias">
    <div class="callout-label">A pergunta certa</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">Antes de construir qualquer coisa, pergunta-te: <strong>"Se a minha solução não existisse, a vida das pessoas seria significativamente pior?"</strong> Se a resposta for "sim" — tens um analgésico. Se for "seria um bocadinho menos gira" — tens uma vitamina.</p>
  </div>
</section>

<section data-label="O MVP" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">3. O MVP: A Arte de Começar Pequeno 🛹</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">O <strong>Produto Mínimo Viável</strong> (MVP) é a versão mais simples possível do teu produto, que te permite testar a ideia no mundo real com o mínimo de esforço e dinheiro. Não é um produto mau — é um produto focado em resolver <em>apenas</em> o problema principal.</p>

  <p class="text-sm font-semibold mb-3" style="color:var(--muted);">A analogia da mobilidade — do problema ao produto final:</p>

  <div class="mb-4">
    <div class="emp2-mvp-step">
      <span class="text-xl flex-shrink-0">🛹</span>
      <div><span class="font-bold text-sm">Skate</span> <span class="text-xs ml-2" style="color:var(--muted);">Resolve o problema? Sim, um pouco. O cliente já dá feedback.</span></div>
    </div>
    <div class="emp2-mvp-step">
      <span class="text-xl flex-shrink-0">🛴</span>
      <div><span class="font-bold text-sm">Trotinete</span> <span class="text-xs ml-2" style="color:var(--muted);">Mais rápido, mais confortável. Mais feedback.</span></div>
    </div>
    <div class="emp2-mvp-step">
      <span class="text-xl flex-shrink-0">🚲</span>
      <div><span class="font-bold text-sm">Bicicleta</span> <span class="text-xs ml-2" style="color:var(--muted);">A solução já é séria. Descobre-se o que falta.</span></div>
    </div>
    <div class="emp2-mvp-step">
      <span class="text-xl flex-shrink-0">🏍️</span>
      <div><span class="font-bold text-sm">Mota</span> <span class="text-xs ml-2" style="color:var(--muted);">Melhorias baseadas em dados reais de uso.</span></div>
    </div>
    <div class="emp2-mvp-step" style="border-color:var(--accent);">
      <span class="text-xl flex-shrink-0">🚗</span>
      <div><span class="font-bold text-sm" style="color:var(--accent);">Carro</span> <span class="text-xs ml-2" style="color:var(--muted);">Produto final — construído em cima do que o mercado confirmou que queria.</span></div>
    </div>
  </div>

  <div class="callout-sabias">
    <div class="callout-label">O MVP do Dropbox</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">O fundador Drew Houston queria saber se as pessoas usariam sincronização de ficheiros. Em vez de meses de programação, fez um <strong>vídeo de 3 minutos</strong> que fingia que o produto funcionava. Publicou-o e disse: "Inscreve-te para ter acesso." A lista de espera passou de 5.000 para 75.000 pessoas numa noite. Validou a ideia sem ter escrito (quase) uma linha de código.</p>
  </div>
</section>

<section data-label="Validar" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">4. Validar Antes de Construir 🎯</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">Antes de construir qualquer coisa — mesmo um MVP — valida se a "dor" que encontraste existe mesmo. A forma como perguntas faz toda a diferença.</p>

  <div class="emp2-vs mb-4">
    <div class="emp2-card" style="border-color:#fca5a5;">
      <div class="text-xs font-bold uppercase tracking-wide mb-2" style="color:#ef4444;">❌ Má Validação</div>
      <p class="text-sm italic mb-2" style="color:#334155;">"Olá, achas que a minha ideia de uma app para a fila da cantina é boa?"</p>
      <p class="text-xs" style="color:var(--muted);">As pessoas vão dizer "sim" para ser simpáticas. Não estás a aprender nada sobre a dor real.</p>
    </div>
    <div class="emp2-card" style="background:#f0fdf4;border-color:#bbf7d0;">
      <div class="text-xs font-bold uppercase tracking-wide mb-2" style="color:#15803d;">✅ Boa Validação</div>
      <p class="text-sm italic mb-2" style="color:#334155;">"Conta-me como foi a tua experiência hoje na fila da cantina."</p>
      <p class="text-xs" style="color:var(--muted);">Ouvir, não falar. Deixas a pessoa descrever a dor com as próprias palavras — isso é ouro.</p>
    </div>
  </div>
</section>

<script>
(function () {
  function showPanel(btn) {
    var panelId = btn.getAttribute('data-panel');
    document.querySelectorAll('.emp2-pill').forEach(function(b) { b.classList.remove('active'); });
    document.querySelectorAll('.emp2-panel').forEach(function(p) { p.classList.remove('active'); });
    btn.classList.add('active');
    var panel = document.getElementById(panelId);
    if (panel) panel.classList.add('active');
  }
  window.showPanel = showPanel;
}());
</script>
