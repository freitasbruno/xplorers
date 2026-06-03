<?php $reflection_question = 'Se fosses um soldado a escrever uma carta à tua família em 1917, o que lhes dirias para que não ficassem demasiado preocupados, sabendo que podes morrer amanhã?'; ?>

<style>
.wwi2-card { background: var(--card-bg); border: 1px solid var(--border); border-radius: 1rem; padding: 1.5rem; }
.wwi2-tab-btn { border: 2px solid var(--border); border-radius: 999px; padding: 0.35rem 0.9rem; font-size: 0.8rem; font-weight: 600; cursor: pointer; transition: all 0.2s; background: var(--bg); color: var(--text); }
.wwi2-tab-btn.active { background: var(--accent); border-color: var(--accent); color: white; }
.wwi2-tab-panel { display: none; }
.wwi2-tab-panel.active { display: block; }
</style>

<section data-label="A Paragem" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">1. O Fim do Movimento: Nascem as Trincheiras ⛏️</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">Em 1914, todos acreditavam que os soldados estariam "em casa pelo Natal". Os generais ainda pensavam em cargas de cavalaria e uniformes coloridos. A realidade foi chocante.</p>

  <div class="grid md:grid-cols-2 gap-4 mb-5">
    <div class="wwi2-card">
      <div class="text-2xl mb-2">💭</div>
      <h3 class="font-bold text-sm mb-1" style="color:var(--accent);">A Expectativa</h3>
      <p class="text-sm leading-relaxed" style="color:#334155;">Guerra rápida, movimentada, com cavalaria e bandeiras. Muitos economistas previam que duraria apenas semanas — o sistema financeiro global não aguentaria mais.</p>
    </div>
    <div class="wwi2-card" style="background:#1e293b;border-color:#334155;">
      <div class="text-2xl mb-2">💀</div>
      <h3 class="font-bold text-sm mb-1" style="color:#f87171;">A Realidade</h3>
      <p class="text-sm leading-relaxed" style="color:#cbd5e1;">As metralhadoras e a artilharia moderna tornaram impossível avançar em campo aberto. Para sobreviver, os exércitos começaram a cavar. Em meses, uma linha de valas estendia-se da Suíça ao Mar do Norte.</p>
    </div>
  </div>
</section>

<section data-label="As Trincheiras" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">2. O Mundo das Trincheiras 🪖</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">A trincheira não era apenas um buraco — era um sistema complexo onde milhões de homens viviam e morriam durante anos.</p>

  <div class="grid md:grid-cols-3 gap-4 mb-5">
    <div class="wwi2-card text-center">
      <div class="text-3xl mb-2">🐀</div>
      <h3 class="font-bold text-xs mb-1" style="color:var(--accent);">O Quotidiano</h3>
      <p class="text-xs leading-relaxed" style="color:#475569;">Lama constante, ratos "do tamanho de gatos", piolhos e a temida "febre das trincheiras". A vida era uma sucessão de espera e terror.</p>
    </div>
    <div class="wwi2-card text-center" style="background:#1e293b;border-color:#334155;">
      <div class="text-3xl mb-2">☠️</div>
      <h3 class="font-bold text-xs mb-1" style="color:#5eead4;">A "Terra de Ninguém"</h3>
      <p class="text-xs leading-relaxed" style="color:#cbd5e1;">O espaço mortal entre as linhas inimigas, cheio de arame farpado e crateras de bombas. Atravessá-la era quase uma sentença de morte.</p>
    </div>
    <div class="wwi2-card text-center">
      <div class="text-3xl mb-2">🧠</div>
      <h3 class="font-bold text-xs mb-1" style="color:var(--accent);">Shell Shock</h3>
      <p class="text-xs leading-relaxed" style="color:#475569;">O nascimento do stress pós-traumático. Milhares de soldados perdiam a sanidade devido ao bombardeamento incessante — ferida invisível, sem respeito na época.</p>
    </div>
  </div>
</section>

<section data-label="Tecnologia da Morte" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">3. A Tecnologia da Morte: Inovações Militares ⚗️</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-4">Esta foi a primeira guerra industrializada. A ciência foi usada para superar o impasse das trincheiras. Cada inovação trazia novos horrores.</p>

  <div class="flex flex-wrap gap-2 mb-4">
    <button class="wwi2-tab-btn active" data-wtab="gas">☠️ Gás Tóxico</button>
    <button class="wwi2-tab-btn" data-wtab="tanques">🪖 Tanques</button>
    <button class="wwi2-tab-btn" data-wtab="aviacao">✈️ Aviação</button>
    <button class="wwi2-tab-btn" data-wtab="submarinos">🌊 Submarinos</button>
  </div>

  <div id="wtab-gas" class="wwi2-tab-panel active wwi2-card">
    <h3 class="font-bold text-sm mb-2" style="color:var(--accent);">Guerra Química: Cloro e Gás Mostarda</h3>
    <p class="text-sm leading-relaxed" style="color:#334155;">O gás tóxico introduziu um terror completamente novo. O cloro queimava os pulmões; o gás mostarda provocava cegueira e lesões cutâneas devastadoras. A máscara de gás tornou-se o símbolo mais icónico e perturbador da guerra.</p>
  </div>
  <div id="wtab-tanques" class="wwi2-tab-panel wwi2-card">
    <h3 class="font-bold text-sm mb-2" style="color:var(--accent);">Os "Navios Terrestres" Britânicos</h3>
    <p class="text-sm leading-relaxed" style="color:#334155;">Criados inicialmente pelos britânicos como "navios terrestres", os tanques foram desenhados para esmagar o arame farpado e atravessar as trincheiras — devolvendo o movimento a uma guerra estática. A palavra "tank" (tanque) foi usada em documentos secretos como nome de código.</p>
  </div>
  <div id="wtab-aviacao" class="wwi2-tab-panel wwi2-card">
    <h3 class="font-bold text-sm mb-2" style="color:var(--accent);">Do Reconhecimento ao Combate Aéreo</h3>
    <p class="text-sm leading-relaxed" style="color:#334155;">A aviação começou como reconhecimento fotográfico e evoluiu rapidamente para duelos aéreos (<em>dogfights</em>) com metralhadoras sincronizadas com as hélices — uma inovação tecnológica fascinante que permitia disparar sem atingir as próprias hélices.</p>
  </div>
  <div id="wtab-submarinos" class="wwi2-tab-panel wwi2-card">
    <h3 class="font-bold text-sm mb-2" style="color:var(--accent);">U-Boats: A Guerra Submarina</h3>
    <p class="text-sm leading-relaxed" style="color:#334155;">Os submarinos alemães (<em>U-Boats</em>) tentaram estrangular o abastecimento do Reino Unido, afundando não só navios militares mas também cargueiros civis. Esta estratégia acabou por ser determinante para a entrada dos EUA na guerra.</p>
  </div>
</section>

<section data-label="Guerra Total" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">4. A Guerra Total: Fábricas e Mulheres 🏭</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">A guerra não se ganhava apenas na frente de batalha, mas nas fábricas e campos agrícolas da retaguarda.</p>

  <div class="grid md:grid-cols-2 gap-4 mb-5">
    <div class="wwi2-card">
      <div class="text-2xl mb-2">👩‍🏭</div>
      <h3 class="font-bold text-sm mb-2" style="color:var(--accent);">As <em>Munitionettes</em></h3>
      <p class="text-sm leading-relaxed" style="color:#334155;">Com os homens nas frentes de combate, as mulheres assumiram o controlo das fábricas de munições, conduziram elétricos e geriram quintas. Este passo fundamental foi um dos motores do futuro <strong>sufrágio feminino</strong>.</p>
    </div>
    <div class="wwi2-card">
      <div class="text-2xl mb-2">📦</div>
      <h3 class="font-bold text-sm mb-2" style="color:var(--accent);">Economia de Guerra</h3>
      <p class="text-sm leading-relaxed" style="color:#334155;">O Estado assumiu o controlo das indústrias e instituiu o <strong>racionamento de alimentos</strong>. Cada panela, cada grama de metal e cada caloria contavam para o esforço de guerra — a retaguarda era tão crucial como a frente.</p>
    </div>
  </div>

  <div class="callout-sabias">
    <div class="callout-label">Sabias que?</div>
    <p class="text-sm leading-relaxed mb-2" style="color:#334155;">Na primeira noite de Natal de 1914, soldados alemães e britânicos <strong>pararam espontaneamente de lutar</strong>, cantaram cânticos e até jogaram futebol na Terra de Ninguém. Foi a última vez que a humanidade "venceu" a guerra.</p>
    <p class="text-sm leading-relaxed mb-2" style="color:#334155;">O <strong>relógio de pulso</strong> tornou-se popular durante esta guerra. Antes, os homens usavam relógios de bolso — mas os oficiais precisavam de consultar as horas rapidamente para coordenar ataques sem largar as armas.</p>
    <p class="text-sm leading-relaxed" style="color:#334155;">O pombo mensageiro <strong>Cher Ami</strong> salvou 194 soldados americanos ao entregar uma mensagem apesar de ter sido baleado várias vezes. Recebeu a Medalha de Croix de Guerre com Palma.</p>
  </div>
</section>

<script>
(function () {
  document.querySelectorAll('.wwi2-tab-btn').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var tab = this.dataset.wtab;
      document.querySelectorAll('.wwi2-tab-btn').forEach(function (b) { b.classList.remove('active'); });
      document.querySelectorAll('.wwi2-tab-panel').forEach(function (p) { p.classList.remove('active'); });
      this.classList.add('active');
      document.getElementById('wtab-' + tab).classList.add('active');
    });
  });
}());
</script>
