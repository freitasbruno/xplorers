<?php $reflection_question = 'Se tivesses de fazer um "Elevator Pitch" de 30 segundos para a ideia que pensaste ao longo destas aulas — qual seria o problema, a solução e o pedido? Tenta formulá-lo agora, em voz alta. O que é mais difícil de explicar em menos de 30 segundos?'; ?>

<style>
.emp4-card { background: var(--card-bg); border: 1px solid var(--border); border-radius: 1rem; padding: 1.5rem; }
.emp4-funding-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1rem; }
@media (max-width: 640px) { .emp4-funding-grid { grid-template-columns: 1fr; } }
.emp4-pitch-step { display: flex; gap: 1rem; align-items: flex-start; padding: 0.875rem 1rem; background: var(--card-bg); border: 1px solid var(--border); border-radius: 0.75rem; margin-bottom: 0.5rem; }
.emp4-pitch-num { width: 1.75rem; height: 1.75rem; border-radius: 50%; background: var(--accent); color: white; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 0.75rem; flex-shrink: 0; margin-top: 0.1rem; }
.emp4-case-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; }
@media (max-width: 640px) { .emp4-case-grid { grid-template-columns: 1fr; } }
</style>

<section data-label="Financiamento" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">1. Tipos de Financiamento: O "Combustível" ⛽</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">Chegámos à última aula de Empreendedorismo. Tens um problema validado, um MVP e um Canvas. Faltam duas coisas para <em>fazer acontecer</em>: dinheiro para construir e clientes para descobrir que existes. Vamos começar pelo dinheiro.</p>

  <div class="emp4-funding-grid mb-4">
    <div class="emp4-card">
      <div class="text-xs font-bold uppercase tracking-wide mb-2" style="color:var(--accent);">NÍVEL 1</div>
      <div class="text-2xl mb-2">🔧</div>
      <div class="font-bold text-sm mb-2">Bootstrapping</div>
      <p class="text-xs leading-relaxed mb-3" style="color:#334155;">Começar com os teus próprios recursos. Vendes umas t-shirts para comprar o material, trabalhas em part-time para pagar o servidor.</p>
      <div class="text-xs space-y-1">
        <div style="color:#15803d;">✅ Não deves a ninguém</div>
        <div style="color:#ef4444;">⚠️ Muito mais lento</div>
      </div>
    </div>
    <div class="emp4-card">
      <div class="text-xs font-bold uppercase tracking-wide mb-2" style="color:#7c3aed;">NÍVEL 2</div>
      <div class="text-2xl mb-2">👨‍👩‍👧</div>
      <div class="font-bold text-sm mb-2">Os 3 F's</div>
      <p class="text-xs leading-relaxed mb-3" style="color:#334155;"><strong>Friends, Family & Fools.</strong> 50€ da tua avó, 100€ dos teus pais. Investem em <em>ti</em>, não na ideia — porque ainda é um bebé.</p>
      <div class="text-xs space-y-1">
        <div style="color:#15803d;">✅ Relativamente fácil</div>
        <div style="color:#ef4444;">⚠️ Risco emocional — só pede o que podes perder</div>
      </div>
    </div>
    <div class="emp4-card" style="background:#fdf4ff;border-color:#e9d5ff;">
      <div class="text-xs font-bold uppercase tracking-wide mb-2" style="color:#7c3aed;">NÍVEL 3</div>
      <div class="text-2xl mb-2">😇</div>
      <div class="font-bold text-sm mb-2">Investidores-Anjo</div>
      <p class="text-xs leading-relaxed mb-3" style="color:#334155;">Ex-empreendedores com dinheiro e experiência. Investem 5.000–20.000€ muito cedo. Trazem mais do que dinheiro — trazem contactos e experiência ("Smart Money").</p>
      <div class="text-xs space-y-1">
        <div style="color:#15803d;">✅ Smart Money — experiência + rede</div>
        <div style="color:#ef4444;">⚠️ Precisas do Canvas muito bem feito</div>
      </div>
    </div>
  </div>
</section>

<section data-label="O Pitch" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">2. O Elevator Pitch: 30 Segundos para Conquistar 🎤</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">Para conseguir financiamento, parceiros ou os primeiros clientes, precisas de um <strong>Pitch</strong> — uma apresentação curta, clara e convincente da tua ideia. O mais famoso é o <strong>Elevator Pitch</strong>: consegues explicar o teu negócio no tempo de uma viagem de elevador (30 a 60 segundos)?</p>

  <div class="emp4-card mb-5" style="background:#1e293b;border-color:#334155;">
    <div class="text-xs font-bold uppercase tracking-wide mb-3" style="color:#5eead4;">A Lenda do Elevator Pitch</div>
    <p class="text-sm" style="color:#cbd5e1;">Nos anos 80 e 90, os fundadores de startups tentavam literalmente apanhar os investidores nos elevadores dos seus edifícios no Vale do Silício. Tinham 30 segundos — a duração da viagem — para vender a ideia. Daí nasceu o conceito.</p>
  </div>

  <p class="text-sm font-semibold mb-3" style="color:var(--muted);">A estrutura de um pitch que funciona:</p>
  <div>
    <div class="emp4-pitch-step">
      <div class="emp4-pitch-num">1</div>
      <div>
        <div class="font-bold text-sm mb-1">O Problema</div>
        <p class="text-xs" style="color:#334155;">Identifica a dor que o teu público conhece. Ex: <em>"Sabias que os estudantes perdem em média 12 minutos por dia na fila da cantina?"</em></p>
      </div>
    </div>
    <div class="emp4-pitch-step">
      <div class="emp4-pitch-num">2</div>
      <div>
        <div class="font-bold text-sm mb-1">A Solução</div>
        <p class="text-xs" style="color:#334155;">O teu "analgésico", em uma frase. Ex: <em>"Nós criámos uma app que permite pré-encomendar o almoço e saltar a fila."</em></p>
      </div>
    </div>
    <div class="emp4-pitch-step">
      <div class="emp4-pitch-num">3</div>
      <div>
        <div class="font-bold text-sm mb-1">A Oportunidade</div>
        <p class="text-xs" style="color:#334155;">Porque é que isto é um negócio. Ex: <em>"A nossa escola tem 800 alunos. Se 30% pagar 0,50€ por encomenda, faturamos 120€ por dia."</em></p>
      </div>
    </div>
    <div class="emp4-pitch-step" style="border-color:var(--accent);">
      <div class="emp4-pitch-num">4</div>
      <div>
        <div class="font-bold text-sm mb-1" style="color:var(--accent);">O Pedido</div>
        <p class="text-xs" style="color:#334155;">O que precisas. Seja específico. Ex: <em>"Estamos à procura de 500€ para contratar um programador que faça o MVP em 4 semanas."</em></p>
      </div>
    </div>
  </div>
</section>

<section data-label="Marketing Digital" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">3. Marketing Digital: Contar a Tua História 📱</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">Ter o melhor produto do mundo não serve de nada se ninguém souber que existe. Marketing digital não é "pôr no Insta" — é <strong>encontrar os teus clientes onde eles estão</strong> e contar uma história que lhes interesse.</p>

  <div class="grid md:grid-cols-3 gap-4 mb-5">
    <div class="emp4-card text-center">
      <div class="text-3xl mb-2">📸</div>
      <div class="font-bold text-sm mb-2">Redes Sociais</div>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">Para criar comunidade e mostrar os bastidores. Não é para "vender, vender, vender" — é para contar a <strong>história</strong> do produto. As pessoas compram de quem confiam.</p>
    </div>
    <div class="emp4-card text-center">
      <div class="text-3xl mb-2">🔍</div>
      <div class="font-bold text-sm mb-2">SEO (Google)</div>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">Para as pessoas que <strong>já procuram</strong> a tua solução. Se alguém pesquisa "como organizar TPCs", a tua app tem de aparecer. É a fonte de tráfego mais valiosa — a intenção já existe.</p>
    </div>
    <div class="emp4-card text-center">
      <div class="text-3xl mb-2">🤝</div>
      <div class="font-bold text-sm mb-2">Influenciadores</div>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">Pessoas que o teu público-alvo já segue e em quem confia. A recomendação deles tem mais impacto do que qualquer anúncio pago porque é percebida como genuína.</p>
    </div>
  </div>

  <div class="emp4-case-grid">
    <div class="emp4-card" style="background:#f0fdf4;border-color:#bbf7d0;">
      <div class="text-xs font-bold uppercase tracking-wide mb-2" style="color:#15803d;">✅ Caso de Sucesso: Gleba</div>
      <p class="text-xs leading-relaxed" style="color:#334155;">O fundador Diogo filmou o processo, a massa, o forno, a farinha. Criou uma história de "pão a sério" antes de a primeira loja abrir. Quando abriu, tinha filas gigantescas — porque havia já uma legião de fãs que queria aquele produto específico.</p>
    </div>
    <div class="emp4-card" style="background:#fff1f2;border-color:#fda4af;">
      <div class="text-xs font-bold uppercase tracking-wide mb-2" style="color:#be123c;">❌ Caso de Fracasso: A App Fantasma</div>
      <p class="text-xs leading-relaxed" style="color:#334155;">Muitas startups gastaram meses a construir a app "perfeita" e depois mais dinheiro em anúncios. Resultado: ninguém usou. Porquê? Não validaram se o problema era real (Aula #2) e não tinham história — só publicidade.</p>
    </div>
  </div>
</section>
