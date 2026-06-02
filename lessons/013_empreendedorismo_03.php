<?php $reflection_question = 'Pensa num negócio que conheces — pode ser uma loja local, uma app que usas, ou um serviço do dia a dia. Consegues identificar qual é a sua Proposta de Valor (o que a torna diferente) e qual é o seu modelo de receita (como ganha dinheiro)? E achas que existe algum bloco do Canvas que está mais fraco?'; ?>

<style>
.emp3-card { background: var(--card-bg); border: 1px solid var(--border); border-radius: 1rem; padding: 1.5rem; }
.emp3-block { background: var(--card-bg); border: 1px solid var(--border); border-radius: 0.75rem; padding: 1rem; cursor: pointer; transition: all 0.2s ease; }
.emp3-block:hover { border-color: var(--accent); transform: translateY(-2px); }
.emp3-block.selected { border-color: var(--accent); border-width: 2px; }
.emp3-detail { display: none; }
.emp3-detail.visible { display: block; }
.emp3-canvas-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 0.75rem; margin-bottom: 1rem; }
@media (max-width: 640px) { .emp3-canvas-grid { grid-template-columns: 1fr; } }
.swot-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; }
@media (max-width: 640px) { .swot-grid { grid-template-columns: 1fr; } }
</style>

<section data-label="O Mapa" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">1. Para que serve um Plano de Negócios? 🗺️</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">A palavra "Plano de Negócios" assusta. Antigamente era um documento de 100 páginas que ninguém lia. Hoje existe uma ferramenta visual e ágil que permite ver a "fotografia completa" do teu negócio numa só página: o <strong>Business Model Canvas</strong>.</p>

  <div class="grid md:grid-cols-2 gap-4 mb-5">
    <div class="emp3-card">
      <div class="text-2xl mb-2">🧠</div>
      <h3 class="font-bold text-sm mb-2" style="color:var(--accent);">Clarificar o pensamento</h3>
      <p class="text-sm" style="color:#334155;">Obriga-nos a responder às perguntas difíceis: Quem são os nossos clientes? O que lhes estamos realmente a oferecer? Como vamos ganhar dinheiro? Quanto vai custar?</p>
    </div>
    <div class="emp3-card" style="background:#1e293b;border-color:#334155;">
      <div class="text-2xl mb-2">🧭</div>
      <h3 class="font-bold text-sm mb-2" style="color:#5eead4;">O mapa da viagem</h3>
      <p class="text-sm" style="color:#cbd5e1;">É o mapa que liga a nossa ideia (Ponto A) a um negócio sustentável (Ponto B). Sem mapa, é muito fácil perder-se ou gastar energia no sítio errado.</p>
    </div>
  </div>
</section>

<section data-label="O Canvas" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">2. O Business Model Canvas: 9 Blocos 📋</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-4">Clica em cada bloco para perceber o que representa e como se aplica a um negócio real.</p>

  <div class="emp3-canvas-grid" id="emp3-canvas">
    <div class="emp3-block" data-block="clientes" onclick="selectBlock(this)">
      <div class="text-xs font-bold uppercase tracking-wide mb-1" style="color:var(--accent);">1</div>
      <div class="font-bold text-sm">Segmentos de Clientes</div>
      <div class="text-xs mt-1" style="color:var(--muted);">Para quem?</div>
    </div>
    <div class="emp3-block" data-block="valor" onclick="selectBlock(this)">
      <div class="text-xs font-bold uppercase tracking-wide mb-1" style="color:var(--accent);">2</div>
      <div class="font-bold text-sm">Proposta de Valor</div>
      <div class="text-xs mt-1" style="color:var(--muted);">O que oferecemos?</div>
    </div>
    <div class="emp3-block" data-block="canais" onclick="selectBlock(this)">
      <div class="text-xs font-bold uppercase tracking-wide mb-1" style="color:var(--accent);">3</div>
      <div class="font-bold text-sm">Canais</div>
      <div class="text-xs mt-1" style="color:var(--muted);">Como chegamos ao cliente?</div>
    </div>
    <div class="emp3-block" data-block="relacao" onclick="selectBlock(this)">
      <div class="text-xs font-bold uppercase tracking-wide mb-1" style="color:var(--accent);">4</div>
      <div class="font-bold text-sm">Relação c/ Clientes</div>
      <div class="text-xs mt-1" style="color:var(--muted);">Que tipo de relação?</div>
    </div>
    <div class="emp3-block" data-block="recursos" onclick="selectBlock(this)">
      <div class="text-xs font-bold uppercase tracking-wide mb-1" style="color:#7c3aed;">5</div>
      <div class="font-bold text-sm">Recursos-Chave</div>
      <div class="text-xs mt-1" style="color:var(--muted);">O que precisamos?</div>
    </div>
    <div class="emp3-block" data-block="atividades" onclick="selectBlock(this)">
      <div class="text-xs font-bold uppercase tracking-wide mb-1" style="color:#7c3aed;">6</div>
      <div class="font-bold text-sm">Atividades-Chave</div>
      <div class="text-xs mt-1" style="color:var(--muted);">O que fazemos todos os dias?</div>
    </div>
    <div class="emp3-block" data-block="parcerias" onclick="selectBlock(this)">
      <div class="text-xs font-bold uppercase tracking-wide mb-1" style="color:#7c3aed;">7</div>
      <div class="font-bold text-sm">Parcerias-Chave</div>
      <div class="text-xs mt-1" style="color:var(--muted);">Quem nos ajuda?</div>
    </div>
    <div class="emp3-block" data-block="custos" onclick="selectBlock(this)">
      <div class="text-xs font-bold uppercase tracking-wide mb-1" style="color:#0369a1;">8</div>
      <div class="font-bold text-sm">Estrutura de Custos</div>
      <div class="text-xs mt-1" style="color:var(--muted);">Quanto gastamos?</div>
    </div>
    <div class="emp3-block" data-block="receitas" onclick="selectBlock(this)">
      <div class="text-xs font-bold uppercase tracking-wide mb-1" style="color:#15803d;">9</div>
      <div class="font-bold text-sm">Fontes de Receita</div>
      <div class="text-xs mt-1" style="color:var(--muted);">Como ganhamos dinheiro?</div>
    </div>
  </div>

  <div id="emp3-detail-box" class="emp3-card hidden">
    <div id="emp3-detail-content"></div>
  </div>

  <div class="callout-sabias mt-4">
    <div class="callout-label">Caso: O Modelo Nespresso</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">Máquinas baratas (quase sem lucro) + cápsulas proprietárias caras. Clientes: utilizadores domésticos que querem café de luxo. Proposta de Valor: o café perfeito, sem confusão. Receita: o modelo "Isco e Anzol" — vende a ferramenta a preço baixo e ganha nas recargas. A Gillette usa o mesmo modelo: máquinas de barbear baratas, lâminas caras.</p>
  </div>
</section>

<section data-label="SWOT" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">3. Análise SWOT: O Raio-X do Negócio 📊</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">A SWOT ajuda-nos a ver a nossa posição honesta no mercado — os nossos pontos fortes, as nossas fraquezas e o que vem de fora.</p>

  <div class="swot-grid">
    <div class="emp3-card" style="border-top:4px solid #22c55e;">
      <div class="text-xs font-bold uppercase tracking-wide mb-2" style="color:#15803d;">INTERNO</div>
      <div class="font-bold mb-1">💪 Strengths (Forças)</div>
      <p class="text-sm" style="color:#334155;">Em que somos bons? O que nos distingue da concorrência?</p>
      <p class="text-xs mt-2 italic" style="color:var(--muted);">Ex: "A nossa equipa sabe programar muito bem."</p>
    </div>
    <div class="emp3-card" style="border-top:4px solid #ef4444;">
      <div class="text-xs font-bold uppercase tracking-wide mb-2" style="color:#b91c1c;">INTERNO</div>
      <div class="font-bold mb-1">⚠️ Weaknesses (Fraquezas)</div>
      <p class="text-sm" style="color:#334155;">Em que somos maus? O que nos falta?</p>
      <p class="text-xs mt-2 italic" style="color:var(--muted);">Ex: "Não percebemos nada de marketing."</p>
    </div>
    <div class="emp3-card" style="border-top:4px solid #3b82f6;">
      <div class="text-xs font-bold uppercase tracking-wide mb-2" style="color:#1d4ed8;">EXTERNO</div>
      <div class="font-bold mb-1">🌟 Opportunities (Oportunidades)</div>
      <p class="text-sm" style="color:#334155;">O que está a acontecer lá fora que nos pode ajudar?</p>
      <p class="text-xs mt-2 italic" style="color:var(--muted);">Ex: "A escola está a incentivar projetos digitais."</p>
    </div>
    <div class="emp3-card" style="border-top:4px solid #f59e0b;">
      <div class="text-xs font-bold uppercase tracking-wide mb-2" style="color:#b45309;">EXTERNO</div>
      <div class="font-bold mb-1">🌩️ Threats (Ameaças)</div>
      <p class="text-sm" style="color:#334155;">O que está a acontecer que nos pode prejudicar?</p>
      <p class="text-xs mt-2 italic" style="color:var(--muted);">Ex: "Outro grupo de alunos teve a mesma ideia."</p>
    </div>
  </div>
</section>

<script>
(function () {
  var details = {
    clientes: { title: '1. Segmentos de Clientes', color: 'var(--accent)', body: 'Para quem criamos valor? Não podemos dizer "toda a gente". Temos de ser específicos e segmentar. Ex: não "todas as pessoas que bebem café" mas "profissionais urbanos, 25-45 anos, que querem café de qualidade em casa sem complicação". A Nespresso não vende a toda a gente — vende a quem valoriza a conveniência e o prestígio.' },
    valor: { title: '2. Proposta de Valor', color: 'var(--accent)', body: 'O coração do negócio. É a razão pela qual um cliente te escolhe a ti e não à concorrência. Que "dor" estás a resolver? Que benefício único ofereces? Ex: Apple = design e facilidade de uso. Ryanair = preço imbatível. A proposta de valor deve ser possível de descrever numa frase clara.' },
    canais: { title: '3. Canais', color: 'var(--accent)', body: 'Como é que a tua proposta de valor chega ao cliente? Pode ser um website, uma app, redes sociais, uma loja física, distribuidores parceiros, ou uma combinação. A Nespresso usa boutiques próprias e um clube online — recusa deliberadamente os supermercados para manter a aura de exclusividade.' },
    relacao: { title: '4. Relação com Clientes', color: 'var(--accent)', body: 'Que tipo de relação esperas ter? Self-service (como o Google — o cliente resolve sozinho), assistência pessoal (como uma loja de roupa premium), automatizada (como as recomendações do Netflix), ou comunidade (como os jogos online com guilds e fóruns).' },
    recursos: { title: '5. Recursos-Chave', color: '#7c3aed', body: 'O que é essencial ter para o negócio funcionar? Pode ser físico (uma fábrica, um equipamento), intelectual (uma patente, uma marca forte), humano (programadores talentosos, chefs reconhecidos) ou financeiro (capital para operar até à rentabilidade).' },
    atividades: { title: '6. Atividades-Chave', color: '#7c3aed', body: 'O que é que a empresa tem de fazer todos os dias para entregar o valor? Para uma software company: programar. Para a Nespresso: produzir cápsulas e gerir o clube de membros. Para a McDonald\'s: gerir a cadeia de fornecimento. As atividades-chave são o que a empresa não pode parar de fazer.' },
    parcerias: { title: '7. Parcerias-Chave', color: '#7c3aed', body: 'Quem são os parceiros externos que nos ajudam a funcionar? Fornecedores de matérias-primas, parceiros de distribuição, processadores de pagamento (Multibanco, Visa), plataformas (App Store, Google Play). Uma parceria estratégica certa pode mudar o destino de uma startup.' },
    custos: { title: '8. Estrutura de Custos', color: '#0369a1', body: 'Quais são os custos mais importantes do negócio? Salários, servidores, marketing, rendas, matérias-primas. Compreender a estrutura de custos ajuda a perceber qual é o "ponto de equilíbrio" — quantas vendas são precisas para o negócio não perder dinheiro.' },
    receitas: { title: '9. Fontes de Receita', color: '#15803d', body: 'Como é que a empresa ganha dinheiro? Venda direta do produto, subscrição mensal (como o Spotify), modelo freemium (grátis com extras pagos), publicidade (como o Google), licenciamento de tecnologia, ou comissão por transação (como a Airbnb). Muitas empresas combinam várias fontes.' }
  };

  function selectBlock(el) {
    document.querySelectorAll('.emp3-block').forEach(function(b) { b.classList.remove('selected'); });
    el.classList.add('selected');
    var key = el.getAttribute('data-block');
    var d = details[key];
    var box = document.getElementById('emp3-detail-box');
    var content = document.getElementById('emp3-detail-content');
    content.innerHTML = '<div class="text-xs font-bold uppercase tracking-wide mb-2" style="color:' + d.color + '">' + d.title + '</div><p class="text-sm leading-relaxed" style="color:#334155;">' + d.body + '</p>';
    box.classList.remove('hidden');
  }
  window.selectBlock = selectBlock;
}());
</script>
