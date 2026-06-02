<?php $reflection_question = 'A Airbnb e a Netflix começaram por resolver problemas pequenos do dia a dia. Olha à tua volta agora mesmo — consegues identificar um problema que te irrita, que podias tentar resolver? Qual seria a solução mais simples que podias testar amanhã?'; ?>

<style>
.emp-card { background: var(--card-bg); border: 1px solid var(--border); border-radius: 1rem; padding: 1.5rem; }
.emp-myth-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; }
@media (max-width: 640px) { .emp-myth-grid { grid-template-columns: 1fr; } }
.emp-value-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1rem; }
@media (max-width: 640px) { .emp-value-grid { grid-template-columns: 1fr; } }
.emp-value-card { text-align: center; padding: 1.25rem 1rem; background: var(--card-bg); border: 1px solid var(--border); border-radius: 1rem; transition: transform 0.2s ease; }
.emp-value-card:hover { transform: translateY(-3px); }
.emp-vs { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; }
@media (max-width: 640px) { .emp-vs { grid-template-columns: 1fr; } }
</style>

<section data-label="O que é" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">1. O que é Empreendedorismo? 💡</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">Quando ouvimos "empreendedorismo", pensamos em Steve Jobs ou em programas de TV com "tubarões". Mas empreendedorismo não é (apenas) criar empresas multimilionárias. É, acima de tudo, uma <strong>mentalidade</strong>: olhar para o mundo, ver problemas, e ter a inquietação de querer resolvê-los.</p>

  <p class="text-sm font-semibold mb-3" style="color:var(--muted);">No seu núcleo, empreendedorismo é criar <strong>valor</strong>. Esse valor pode ser:</p>
  <div class="emp-value-grid mb-5">
    <div class="emp-value-card">
      <div class="text-3xl mb-2">💰</div>
      <div class="font-bold text-sm mb-1">Valor Económico</div>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">Um produto ou serviço que as pessoas pagam para ter. Uma app, um restaurante, uma plataforma online.</p>
    </div>
    <div class="emp-value-card">
      <div class="text-3xl mb-2">🤝</div>
      <div class="font-bold text-sm mb-1">Valor Social</div>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">Uma solução para um problema da comunidade. Reduzir desperdício alimentar, ajudar idosos, melhorar a escola.</p>
    </div>
    <div class="emp-value-card">
      <div class="text-3xl mb-2">🎨</div>
      <div class="font-bold text-sm mb-1">Valor Cultural</div>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">Uma nova forma de arte ou expressão. Um festival de música local, uma revista independente, um podcast.</p>
    </div>
  </div>

  <div class="emp-card" style="background:#1e293b;border-color:#334155;">
    <p class="text-sm font-bold" style="color:#5eead4;">A ideia central</p>
    <p class="text-sm leading-relaxed mt-1" style="color:#cbd5e1;">Empreendedorismo é ver uma <strong style="color:white;">oportunidade</strong> onde outros veem um problema.</p>
  </div>
</section>

<section data-label="Mitos" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">2. Mitos vs. Realidade 🔍</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">Temos uma imagem muito formatada de quem é um empreendedor. Vamos confrontar os mitos mais comuns com a realidade.</p>

  <div class="space-y-3">
    <div id="emp-myth-0" class="emp-card" style="cursor:pointer;" onclick="toggleMyth(0)">
      <div class="flex items-center justify-between">
        <div class="flex items-center gap-3">
          <span class="text-lg">❌</span>
          <span class="font-bold text-sm text-slate-900">"É preciso ter uma ideia genial e única."</span>
        </div>
        <span class="text-xs font-semibold px-2 py-1 rounded-full" style="background:var(--accent-light);color:var(--accent);">ver resposta</span>
      </div>
      <div class="emp-myth-answer hidden mt-3 pt-3" style="border-top:1px solid var(--border);">
        <div class="flex items-start gap-2">
          <span class="text-lg">✅</span>
          <p class="text-sm leading-relaxed" style="color:#334155;">A maioria dos negócios não nasce de uma ideia 100% nova. Nasce de fazer algo que <em>já existe</em> de forma <strong>melhor, mais rápida ou mais acessível</strong>. O Google não foi o primeiro motor de busca. O Facebook não foi a primeira rede social. A inovação está na execução, não na ideia.</p>
        </div>
      </div>
    </div>
    <div id="emp-myth-1" class="emp-card" style="cursor:pointer;" onclick="toggleMyth(1)">
      <div class="flex items-center justify-between">
        <div class="flex items-center gap-3">
          <span class="text-lg">❌</span>
          <span class="font-bold text-sm text-slate-900">"Empreendedores nascem assim, não se fazem."</span>
        </div>
        <span class="text-xs font-semibold px-2 py-1 rounded-full" style="background:var(--accent-light);color:var(--accent);">ver resposta</span>
      </div>
      <div class="emp-myth-answer hidden mt-3 pt-3" style="border-top:1px solid var(--border);">
        <div class="flex items-start gap-2">
          <span class="text-lg">✅</span>
          <p class="text-sm leading-relaxed" style="color:#334155;">Algumas pessoas têm mais apetência para o risco, mas as características chave do empreendedorismo podem ser aprendidas e treinadas. É um <strong>músculo</strong>. Quanto mais o usas, mais forte fica.</p>
        </div>
      </div>
    </div>
    <div id="emp-myth-2" class="emp-card" style="cursor:pointer;" onclick="toggleMyth(2)">
      <div class="flex items-center justify-between">
        <div class="flex items-center gap-3">
          <span class="text-lg">❌</span>
          <span class="font-bold text-sm text-slate-900">"É preciso muito dinheiro para começar."</span>
        </div>
        <span class="text-xs font-semibold px-2 py-1 rounded-full" style="background:var(--accent-light);color:var(--accent);">ver resposta</span>
      </div>
      <div class="emp-myth-answer hidden mt-3 pt-3" style="border-top:1px solid var(--border);">
        <div class="flex items-start gap-2">
          <span class="text-lg">✅</span>
          <p class="text-sm leading-relaxed" style="color:#334155;">Muitos dos maiores negócios do mundo começaram em garagens, quartos de universidade ou com poupanças mínimas. O mais importante no início não é o dinheiro — é <strong>validar a ideia</strong>. Descobrir se alguém realmente quer o que estás a construir.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section data-label="O Mindset" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">3. O 'Mindset' Empreendedor 🧠</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">Se o empreendedorismo é uma mentalidade, o que a define? Duas características são essenciais.</p>

  <div class="emp-myth-grid mb-5">
    <div class="emp-card">
      <div class="text-2xl mb-3">🎨</div>
      <h3 class="font-bold text-sm mb-2" style="color:var(--accent);">Criatividade</h3>
      <p class="text-sm leading-relaxed" style="color:#334155;">Não é (só) saber desenhar. É a capacidade de <strong>ligar pontos</strong> que parecem não ter ligação, para encontrar soluções novas para problemas antigos. Um empreendedor vê o mundo como um conjunto de padrões que podem ser recombinados.</p>
    </div>
    <div class="emp-card" style="background:#f0fdf4;border-color:#bbf7d0;">
      <div class="text-2xl mb-3">🦾</div>
      <h3 class="font-bold text-sm mb-2" style="color:#15803d;">Resiliência — A "Super-Cola"</h3>
      <p class="text-sm leading-relaxed" style="color:#334155;">Talvez a característica mais importante. É ouvir "não" 99 vezes e continuar a tentar. É falhar, aprender com o erro e <strong>levantar-se depressa</strong>. O falhanço não é o fim da linha; é parte do processo de aprendizagem — a fonte da maior parte do que se aprende.</p>
    </div>
  </div>
</section>

<section data-label="Emprego vs Empreender" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">4. Emprego vs. Empreendedorismo ⚖️</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <div class="emp-vs mb-5">
    <div class="emp-card">
      <div class="font-bold text-sm mb-3" style="color:var(--muted);">EMPREGO TRADICIONAL</div>
      <ul class="space-y-2 text-sm" style="color:#334155;">
        <li>🏢 Estrutura já existe — tu encaixes nela</li>
        <li>💼 Salário fixo pelo teu tempo e competências</li>
        <li>📋 Papel definido e responsabilidades claras</li>
        <li>🔒 Menor risco financeiro pessoal</li>
      </ul>
      <p class="text-xs mt-3 p-2 rounded-lg" style="background:var(--bg);color:var(--muted);">Nota: podes ser "empreendedor" dentro de uma empresa — chama-se <em>intra-empreendedorismo</em>: sugerir melhorias, criar novos projetos internos.</p>
    </div>
    <div class="emp-card" style="background:#fdf4ff;border-color:#e9d5ff;">
      <div class="font-bold text-sm mb-3" style="color:#7c3aed;">EMPREENDEDORISMO</div>
      <ul class="space-y-2 text-sm" style="color:#334155;">
        <li>🏗️ Tu crias a estrutura do zero</li>
        <li>📈 Sem salário garantido — os resultados são teus</li>
        <li>🧭 Total autonomia nas decisões</li>
        <li>⚡ Potencial de impacto muito maior</li>
      </ul>
    </div>
  </div>
</section>

<section data-label="Sabias que?" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">5. Histórias que Inspiram 🌟</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <div class="space-y-4">
    <div class="callout-sabias">
      <div class="callout-label">A origem da Airbnb</div>
      <p class="text-sm leading-relaxed" style="color:#334155;">Os fundadores Brian Chesky e Joe Gebbia não conseguiam pagar a renda em São Francisco. A ideia não foi "vamos criar um império hoteleiro global". Foi: <em>"Temos um colchão de ar a mais. E se o alugarmos a designers que vêm à cidade?"</em> Resolveram um problema pequeno e imediato. O resto é história — a Airbnb vale hoje mais do que as maiores cadeias hoteleiras do mundo.</p>
    </div>
    <div class="callout-sabias">
      <div class="callout-label">O "Não" à Netflix</div>
      <p class="text-sm leading-relaxed" style="color:#334155;">O fundador da Netflix, Reed Hastings, tentou vender a empresa à Blockbuster (que dominava o aluguer de vídeos) por <strong>50 milhões de dólares</strong> em 2000. A Blockbuster riu-se e recusou. A Blockbuster faliu em 2010. A Netflix vale hoje centenas de biliões. A diferença? A Netflix via o mundo como ia ser; a Blockbuster via o mundo como era.</p>
    </div>
  </div>
</section>

<script>
(function () {
  function toggleMyth(i) {
    var el = document.getElementById('emp-myth-' + i);
    var answer = el.querySelector('.emp-myth-answer');
    var btn = el.querySelector('span:last-child');
    var isOpen = !answer.classList.contains('hidden');
    answer.classList.toggle('hidden', isOpen);
    btn.textContent = isOpen ? 'ver resposta' : 'fechar';
    btn.style.background = isOpen ? 'var(--accent-light)' : '#dcfce7';
    btn.style.color = isOpen ? 'var(--accent)' : '#15803d';
  }
  window.toggleMyth = toggleMyth;
}());
</script>
