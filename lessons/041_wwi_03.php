<?php $reflection_question = 'Faz sentido atribuir a culpa exclusiva de um conflito de escala mundial a uma única nação, quando todo o continente vivia imerso numa corrida aos armamentos e rivalidades imperialistas? Como tentariam evitar que o ressentimento do país derrotado gerasse nova instabilidade?'; ?>

<style>
.wwi3-card { background: var(--card-bg); border: 1px solid var(--border); border-radius: 1rem; padding: 1.5rem; }
.wwi3-tab-btn { border: 2px solid var(--border); border-radius: 999px; padding: 0.35rem 0.85rem; font-size: 0.78rem; font-weight: 600; cursor: pointer; transition: all 0.2s; background: var(--bg); color: var(--text); }
.wwi3-tab-btn.active { background: var(--accent); border-color: var(--accent); color: white; }
.wwi3-tab-panel { display: none; }
.wwi3-tab-panel.active { display: block; }
.wwi3-timeline { position: relative; padding-left: 1.75rem; }
.wwi3-timeline::before { content: ''; position: absolute; left: 0.5rem; top: 0; bottom: 0; width: 2px; background: var(--border); border-radius: 2px; }
.wwi3-tl-item { position: relative; padding-bottom: 1.4rem; }
.wwi3-tl-item::before { content: ''; position: absolute; left: -1.35rem; top: 0.35rem; width: 0.65rem; height: 0.65rem; border-radius: 50%; background: var(--accent); border: 2px solid var(--bg); }
</style>

<section data-label="O Armistício" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">1. O Silêncio Ensurdecedor: 11 de Novembro de 1918 🕊️</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">No dia 11 de novembro de 1918, às 11 horas da manhã, os canhões ao longo da Frente Ocidental finalmente calaram-se. O <strong>Armistício de Compiègne</strong> assinalava o fim das hostilidades da frente mais brutal da história.</p>

  <div class="wwi3-card mb-5" style="background:#1e293b;border-color:#334155;">
    <p class="text-sm leading-relaxed mb-2" style="color:#e2e8f0;">O fim dos disparos não significou a chegada de uma verdadeira paz. A Europa estava em ruínas — não apenas fisicamente, mas estruturalmente. O velho mundo das monarquias absolutas tinha sido desfeito pela guerra industrializada.</p>
    <p class="text-sm" style="color:#94a3b8;"><strong>Baixas estimadas:</strong> ~17 milhões de mortos (militares e civis) + ~20 milhões de mortos pela gripe espanhola que se seguiu.</p>
  </div>
</section>

<section data-label="Queda dos Impérios" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">2. A Queda dos Gigantes: 4 Impérios Desaparecem 👑</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-4">Durante séculos, a geopolítica europeia foi dominada por dinastias seculares. A Grande Guerra funcionou como acelerador histórico, destruindo quatro delas.</p>

  <div class="flex flex-wrap gap-2 mb-4">
    <button class="wwi3-tab-btn active" data-wi3tab="russia">🇷🇺 Rússia</button>
    <button class="wwi3-tab-btn" data-wi3tab="alemanha">🇩🇪 Alemanha</button>
    <button class="wwi3-tab-btn" data-wi3tab="austria">🏰 Áustria-Hungria</button>
    <button class="wwi3-tab-btn" data-wi3tab="otomano">☽ Império Otomano</button>
  </div>

  <div id="wi3tab-russia" class="wwi3-tab-panel active wwi3-card">
    <h3 class="font-bold text-sm mb-2" style="color:var(--accent);">Dinastia Romanov — A Primeira Baixa</h3>
    <p class="text-sm leading-relaxed mb-2" style="color:#334155;">A fome, a inflação e os desastres militares minaram o Czar Nicolau II. Em 1917, foi forçado a abdicar. Os Bolcheviques de Lenine tomaram o poder e, para cumprir a promessa de "Paz, Pão e Terra", assinaram o <strong>Tratado de Brest-Litovsk</strong> com a Alemanha — cedendo a Ucrânia e os Estados Bálticos.</p>
    <p class="text-xs" style="color:#475569;">Resultado: nasceu a União Soviética — o primeiro estado socialista do mundo. A política global nunca mais seria a mesma.</p>
  </div>
  <div id="wi3tab-alemanha" class="wwi3-tab-panel wwi3-card">
    <h3 class="font-bold text-sm mb-2" style="color:var(--accent);">Dinastia Hohenzollern — A Fuga do Kaiser</h3>
    <p class="text-sm leading-relaxed mb-2" style="color:#334155;">Perante o colapso militar e a Revolução de Novembro (motins de marinheiros em Kiel), o Kaiser Guilherme II fugiu para os Países Baixos. Nasce a <strong>República de Weimar</strong>, que herdou a ingrata tarefa de assinar a rendição.</p>
    <p class="text-xs" style="color:#475569;">A república democrática nasceu assim associada à derrota e à humilhação — uma fragilidade que o extremismo político exploraria nos anos seguintes.</p>
  </div>
  <div id="wi3tab-austria" class="wwi3-tab-panel wwi3-card">
    <h3 class="font-bold text-sm mb-2" style="color:var(--accent);">Dinastia Habsburgo — O "Mosaico" Desintegrado</h3>
    <p class="text-sm leading-relaxed mb-2" style="color:#334155;">O Império Austro-Húngaro era um "mosaico de nacionalidades" — alemães, húngaros, checos, eslovenos, croatas, polacos. As tensões étnicas exacerbadas pela guerra fragmentaram-no internamente.</p>
    <p class="text-xs" style="color:#475569;">O império desintegrou-se em vários novos países baseados no princípio da autodeterminação dos povos — incluindo a Checoslováquia e a Jugoslávia, criadas do zero.</p>
  </div>
  <div id="wi3tab-otomano" class="wwi3-tab-panel wwi3-card">
    <h3 class="font-bold text-sm mb-2" style="color:var(--accent);">O "Doente da Europa" — Desmembrado</h3>
    <p class="text-sm leading-relaxed mb-2" style="color:#334155;">O Império Otomano viu os seus territórios no Médio Oriente partilhados entre a França e a Grã-Bretanha nos Acordos Sykes-Picot, criando novas fronteiras artificiais na região.</p>
    <p class="text-xs" style="color:#475569;">Muitas das tensões geopolíticas do Médio Oriente atual têm raízes nestas fronteiras traçadas por potências europeias sem considerar as realidades étnicas e tribais locais.</p>
  </div>
</section>

<section data-label="Tratado Versalhes" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">3. O Tratado de Versalhes: As 4 Humilhações 📜</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">A Conferência de Paz de Paris deveria ter sido guiada pelos <em>Quatorze Pontos</em> do Presidente Wilson. Prevaleceu a sede de vingança da França e da Grã-Bretanha. O resultado foi um <em>Diktat</em> — um acordo ditado, sem negociação.</p>

  <div class="grid md:grid-cols-2 gap-3 mb-5">
    <div class="wwi3-card">
      <div class="text-xl mb-1">⚖️</div>
      <h3 class="font-bold text-xs mb-1" style="color:#dc2626;">1. A Cláusula de Culpa (Art. 231)</h3>
      <p class="text-xs leading-relaxed" style="color:#475569;">A Alemanha foi forçada a assumir total e exclusiva responsabilidade moral por ter causado a guerra. Base jurídica para todas as punições seguintes.</p>
    </div>
    <div class="wwi3-card">
      <div class="text-xl mb-1">💸</div>
      <h3 class="font-bold text-xs mb-1" style="color:#dc2626;">2. Asfixia Financeira</h3>
      <p class="text-xs leading-relaxed" style="color:#475569;">Reparações de guerra astronomicas: 132 mil milhões de marcos-ouro. Objetivo explícito: impedir a Alemanha de reconstruir a sua economia.</p>
    </div>
    <div class="wwi3-card">
      <div class="text-xl mb-1">🗺️</div>
      <h3 class="font-bold text-xs mb-1" style="color:#dc2626;">3. Perdas Territoriais</h3>
      <p class="text-xs leading-relaxed" style="color:#475569;">13% do território e 10% da população. Alsácia-Lorena regressou à França. O "Corredor Polaco" dividiu a nação, isolando a Prússia Oriental.</p>
    </div>
    <div class="wwi3-card">
      <div class="text-xl mb-1">⚔️</div>
      <h3 class="font-bold text-xs mb-1" style="color:#dc2626;">4. Desmilitarização Total</h3>
      <p class="text-xs leading-relaxed" style="color:#475569;">Exército reduzido a 100 000 homens, marinha confiscada, força aérea proibida. A Renânia foi desmilitarizada.</p>
    </div>
  </div>

  <div class="wwi3-card mb-4" style="background:#1e293b;border-color:#334155;">
    <p class="text-sm leading-relaxed" style="color:#fde8e8;">Estas humilhações criaram um profundo sentimento de revanchismo alemão. Eram o <strong>oxigénio do extremismo político</strong> que iria alimentar o ascenso de Hitler uma década depois.</p>
  </div>
</section>

<section data-label="Sociedade das Nações" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">4. A Sociedade das Nações: Uma Paz Frágil 🏛️</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <div class="grid md:grid-cols-2 gap-4 mb-5">
    <div class="wwi3-card">
      <h3 class="font-bold text-sm mb-2" style="color:var(--accent);">🌍 A Visão</h3>
      <p class="text-sm leading-relaxed" style="color:#334155;">Baseada em Genebra, a SDN assentava na diplomacia aberta e na segurança coletiva: um ataque contra um membro seria considerado um ataque contra todos. Seria o fim das guerras.</p>
    </div>
    <div class="wwi3-card" style="background:#1e293b;border-color:#334155;">
      <h3 class="font-bold text-sm mb-2" style="color:#f87171;">💔 Os Falhanços</h3>
      <p class="text-sm leading-relaxed" style="color:#cbd5e1;">Os EUA nunca aderiram (Congresso rejeitou). Sem exército próprio. Decisões exigiam unanimidade. Alemanha e URSS barradas inicialmente. Sem dentes — apenas protestos verbais.</p>
    </div>
  </div>

  <div class="callout-sabias">
    <div class="callout-label">Sabias que?</div>
    <p class="text-sm leading-relaxed mb-2" style="color:#334155;">O economista <strong>John Maynard Keynes</strong> abandonou a delegação britânica na Conferência de Paris e publicou em 1919 o livro <em>As Consequências Económicas da Paz</em>. Previu com precisão arrepiante que as sanções destruiriam a economia alemã e levariam a uma nova e ainda mais devastadora guerra.</p>
    <p class="text-sm leading-relaxed mb-2" style="color:#334155;">A dívida de guerra alemã relativa ao Tratado de Versalhes só foi formalmente paga a <strong>3 de outubro de 2010</strong> — 92 anos depois.</p>
    <p class="text-sm leading-relaxed" style="color:#334155;">Com o redesenho do mapa europeu, países como a <strong>Checoslováquia</strong> e a <strong>Jugoslávia</strong> nasceram de um dia para o outro, misturando minorias étnicas com tensões históricas latentes — sementes de futuros conflitos.</p>
  </div>
</section>

<script>
(function () {
  document.querySelectorAll('.wwi3-tab-btn').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var tab = this.dataset.wi3tab;
      document.querySelectorAll('.wwi3-tab-btn').forEach(function (b) { b.classList.remove('active'); });
      document.querySelectorAll('.wwi3-tab-panel').forEach(function (p) { p.classList.remove('active'); });
      this.classList.add('active');
      document.getElementById('wi3tab-' + tab).classList.add('active');
    });
  });
}());
</script>
