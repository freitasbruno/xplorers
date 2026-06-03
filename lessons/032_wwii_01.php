<?php $reflection_question = 'Se vivesses em 1933, sem internet, sem redes sociais e com toda a rádio e imprensa controladas pelo Estado, como achas que conseguirias distinguir a verdade da propaganda? Que perigos encontras hoje na forma como a informação é consumida?'; ?>

<style>
.wwii-card { background: var(--card-bg); border: 1px solid var(--border); border-radius: 1rem; padding: 1.5rem; }
.wwii-tab-btn { border: 2px solid var(--border); border-radius: 999px; padding: 0.4rem 1.1rem; font-size: 0.82rem; font-weight: 600; cursor: pointer; transition: all 0.2s; background: var(--bg); color: var(--text); }
.wwii-tab-btn.active { background: var(--accent); border-color: var(--accent); color: white; }
.wwii-tab-panel { display: none; }
.wwii-tab-panel.active { display: block; }
.wwii-timeline { position: relative; padding-left: 1.75rem; }
.wwii-timeline::before { content: ''; position: absolute; left: 0.5rem; top: 0; bottom: 0; width: 2px; background: var(--border); border-radius: 2px; }
.wwii-tl-item { position: relative; padding-bottom: 1.5rem; }
.wwii-tl-item::before { content: ''; position: absolute; left: -1.35rem; top: 0.35rem; width: 0.7rem; height: 0.7rem; border-radius: 50%; background: var(--accent); border: 2px solid var(--bg); }
.wwii-expand-btn { width: 100%; text-align: left; cursor: pointer; display: flex; align-items: center; justify-content: space-between; padding: 1rem 1.25rem; border-radius: 0.75rem; border: 1px solid var(--border); background: var(--card-bg); transition: background 0.15s; font-weight: 600; font-size: 0.9rem; color: var(--text); }
.wwii-expand-btn:hover { background: var(--bg); }
.wwii-expand-body { display: none; padding: 0 1.25rem 1rem; }
.wwii-expand-body.open { display: block; }
</style>

<section data-label="O Terramoto" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">1. O Terramoto Económico: A Crise de 1929 📉</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Para compreendermos como a Europa se transformou num terreno fértil para ditaduras, temos de recuar a 1929. Os anos 20 foram marcados por uma aparente prosperidade, mas tudo ruiu em outubro desse ano com o colapso da Bolsa de Nova Iorque.</p>

  <div class="grid md:grid-cols-3 gap-4 mb-6">
    <div class="wwii-card text-center">
      <div class="text-3xl mb-2">📈</div>
      <h3 class="font-bold text-sm mb-1" style="color:var(--accent);">Anos 20</h3>
      <p class="text-xs leading-relaxed" style="color:#334155;">Crescimento económico e crédito fácil. Os EUA financiavam a reconstrução europeia após a Primeira Guerra.</p>
    </div>
    <div class="wwii-card text-center" style="background:#7f1d1d;border-color:#991b1b;">
      <div class="text-3xl mb-2">💥</div>
      <h3 class="font-bold text-sm mb-1" style="color:#fca5a5;">Outubro 1929</h3>
      <p class="text-xs leading-relaxed" style="color:#fee2e2;">Colapso da Bolsa de Nova Iorque. Bancos americanos cortam o crédito e exigem o pagamento imediato das dívidas europeias.</p>
    </div>
    <div class="wwii-card text-center" style="background:#1e293b;border-color:#334155;">
      <div class="text-3xl mb-2">🏭</div>
      <h3 class="font-bold text-sm mb-1" style="color:#5eead4;">O Impacto</h3>
      <p class="text-xs leading-relaxed" style="color:#cbd5e1;">Fábricas fechadas, comércio estagnado. Na Alemanha, <strong>1 em cada 3</strong> trabalhadores ficou desempregado.</p>
    </div>
  </div>

  <div class="callout-sabias">
    <div class="callout-label">Sabias que?</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">Na Alemanha do início dos anos 30, a inflação era tão extrema que o dinheiro perdeu quase todo o valor. Havia pessoas a usar notas de marcos alemães como <strong>papel de parede ou para acender lareiras</strong> — o papel em si valia mais do que o poder de compra da moeda.</p>
  </div>
</section>

<section data-label="Ditadores" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">2. A Anatomia do Totalitarismo: Fascismo e Nazismo 🏛️</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-4">Aproveitando o caos económico, emergiram líderes carismáticos que prometiam devolver o orgulho nacional e esmagar a pobreza através do controlo total do Estado. Clica em cada regime para explorar.</p>

  <div class="flex flex-wrap gap-2 mb-4">
    <button class="wwii-tab-btn active" data-tab="fascismo">🇮🇹 Fascismo Italiano</button>
    <button class="wwii-tab-btn" data-tab="nazismo">🇩🇪 Nazismo Alemão</button>
    <button class="wwii-tab-btn" data-tab="comum">🔗 O que os une</button>
  </div>

  <div id="tab-fascismo" class="wwii-tab-panel active wwii-card">
    <div class="flex gap-3 items-start mb-3">
      <span class="text-3xl">🦁</span>
      <div>
        <h3 class="font-bold text-base mb-1" style="color:var(--accent);">Benito Mussolini — <em>Il Duce</em></h3>
        <p class="text-sm leading-relaxed mb-2" style="color:#334155;">Subiu ao poder em Itália em 1922. Defendia o <strong>nacionalismo extremo</strong>: o indivíduo não tinha valor comparado com o Estado.</p>
        <p class="text-sm leading-relaxed italic" style="color:#475569;">"Tudo no Estado, nada fora do Estado, nada contra o Estado."</p>
      </div>
    </div>
    <p class="text-sm leading-relaxed mt-2" style="color:#475569;">A crise de 1929 consolidou o seu modelo autoritário, tornando o fascismo num exemplo que Hitler e outros viriam a seguir de perto.</p>
  </div>

  <div id="tab-nazismo" class="wwii-tab-panel wwii-card">
    <div class="flex gap-3 items-start mb-3">
      <span class="text-3xl">⚡</span>
      <div>
        <h3 class="font-bold text-base mb-1" style="color:var(--accent);">Adolf Hitler — <em>Der Führer</em></h3>
        <p class="text-sm leading-relaxed" style="color:#334155;">Nomeado Chanceler em 1933, usou o humilhante Tratado de Versalhes e a crise de 1929 como armas de propaganda. O Nazismo partilhava bases com o Fascismo, mas acrescentava uma componente <strong>biológica e racial</strong> violenta.</p>
      </div>
    </div>
    <div class="grid grid-cols-2 gap-3 mt-3">
      <div class="p-3 rounded-lg" style="background:#fef2f2;border:1px solid #fecaca;">
        <p class="text-xs font-semibold mb-1" style="color:#991b1b;">Antissemitismo</p>
        <p class="text-xs" style="color:#7f1d1d;">Perseguição sistemática ao povo judeu, apresentada como necessária para a "pureza racial".</p>
      </div>
      <div class="p-3 rounded-lg" style="background:#fef2f2;border:1px solid #fecaca;">
        <p class="text-xs font-semibold mb-1" style="color:#991b1b;">"Raça Ariana"</p>
        <p class="text-xs" style="color:#7f1d1d;">Crença pseudocientífica na superioridade de uma "raça" sobre todas as outras — usada para justificar a violência.</p>
      </div>
    </div>
  </div>

  <div id="tab-comum" class="wwii-tab-panel wwii-card">
    <h3 class="font-bold text-sm mb-3" style="color:var(--accent);">As 4 Características Partilhadas</h3>
    <div class="space-y-3">
      <div class="flex gap-3 items-start">
        <span class="text-xl flex-shrink-0">👑</span>
        <div><p class="text-sm font-semibold">Culto ao Líder</p><p class="text-xs" style="color:#475569;">O ditador era apresentado como um "salvador infalível" — <em>Il Duce</em> em Itália, <em>Der Führer</em> na Alemanha.</p></div>
      </div>
      <div class="flex gap-3 items-start">
        <span class="text-xl flex-shrink-0">🚫</span>
        <div><p class="text-sm font-semibold">Partido Único e Terror</p><p class="text-xs" style="color:#475569;">Todos os outros partidos políticos eram proibidos. Polícias secretas como a Gestapo prendiam e silenciavam qualquer oposição.</p></div>
      </div>
      <div class="flex gap-3 items-start">
        <span class="text-xl flex-shrink-0">📡</span>
        <div><p class="text-sm font-semibold">Controlo Total da Informação</p><p class="text-xs" style="color:#475569;">Censura na imprensa, rádio e cinema. O Ministério da Propaganda controlava tudo o que as pessoas podiam ver e ouvir.</p></div>
      </div>
      <div class="flex gap-3 items-start">
        <span class="text-xl flex-shrink-0">⚔️</span>
        <div><p class="text-sm font-semibold">Militarização das Massas</p><p class="text-xs" style="color:#475569;">Desde criança, os jovens eram integrados em organizações como a <em>Juventude Hitleriana</em> — aprender a obedecer e a marchar era obrigatório.</p></div>
      </div>
    </div>
  </div>
</section>

<section data-label="Rumo à Guerra" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">3. A Marcha para a Guerra: Expansionismo e Apaziguamento 🌍</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Uma vez no poder, estes regimes iniciaram uma política externa agressiva. As democracias ocidentais, traumatizadas pela Primeira Guerra, cederam repetidamente às suas exigências.</p>

  <div class="wwii-timeline mb-6">
    <div class="wwii-tl-item">
      <p class="text-xs font-bold mb-0.5" style="color:var(--accent);">1935</p>
      <p class="text-sm font-semibold">Itália invade a Etiópia</p>
      <p class="text-xs" style="color:#475569;">Mussolini demonstra desprezo pelas leis internacionais. A Sociedade das Nações é incapaz de impor qualquer sanção eficaz.</p>
    </div>
    <div class="wwii-tl-item">
      <p class="text-xs font-bold mb-0.5" style="color:var(--accent);">1936–1938</p>
      <p class="text-sm font-semibold">Hitler rasga o Tratado de Versalhes</p>
      <p class="text-xs" style="color:#475569;">Remilitariza a Renânia, anexa a Áustria (Anschluss em 1938) e exige territórios da Checoslováquia.</p>
    </div>
    <div class="wwii-tl-item">
      <p class="text-xs font-bold mb-0.5" style="color:var(--accent);">1938 — Munique</p>
      <p class="text-sm font-semibold">A Falha do Apaziguamento</p>
      <p class="text-xs" style="color:#475569;">Grã-Bretanha e França cedem a Checoslováquia para "manter a paz". Hitler interpreta como fraqueza e aumenta as exigências.</p>
    </div>
    <div class="wwii-tl-item">
      <p class="text-xs font-bold mb-0.5" style="color:var(--accent);">1 set. 1939 — Início da Guerra</p>
      <p class="text-sm font-semibold">Invasão da Polónia</p>
      <p class="text-xs" style="color:#475569;">Após assinar o Pacto Molotov-Ribbentrop com Stalin, a Alemanha invade a Polónia. Grã-Bretanha e França declaram guerra — começa a Segunda Guerra Mundial.</p>
    </div>
  </div>

  <div class="grid md:grid-cols-2 gap-4">
    <div class="wwii-card">
      <h3 class="font-bold text-sm mb-2" style="color:var(--accent);">🗡️ Expansionismo</h3>
      <p class="text-sm leading-relaxed" style="color:#334155;">Alemanha, Itália e Japão expandem os seus impérios pela força, ignorando tratados e leis internacionais. Cada conquista sem resposta encorajava a seguinte.</p>
    </div>
    <div class="wwii-card" style="background:#1e293b;border-color:#334155;">
      <h3 class="font-bold text-sm mb-2" style="color:#f87171;">🕊️ Apaziguamento — e o seu fracasso</h3>
      <p class="text-sm leading-relaxed" style="color:#cbd5e1;">As democracias cederam repetidamente, esperando que Hitler parasse. Cada concessão foi interpretada como sinal de fraqueza — um erro fatal.</p>
    </div>
  </div>
</section>

<section data-label="Propaganda" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">4. A Arma Mais Poderosa: A Propaganda 📻</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">O controlo da informação foi a arma mais eficaz dos ditadores para manipular a população. Sem internet, sem redes sociais — apenas o que o Estado deixava ver e ouvir.</p>

  <div class="space-y-3 mb-6">
    <div>
      <button class="wwii-expand-btn" data-expand="radio">
        <span>📻 A Rádio do Povo — <em>Volksempfänger</em></span>
        <span class="wwii-expand-arrow" style="font-size:0.75rem;">▼</span>
      </button>
      <div class="wwii-expand-body" id="expand-radio">
        <p class="text-sm leading-relaxed mt-2" style="color:#334155;">O regime nazi mandou fabricar rádios muito baratas para garantir que todas as famílias alemãs tinham uma em casa. Estas rádios tinham um alcance curto, <strong>concebido de propósito</strong> para não conseguirem sintonizar emissoras estrangeiras. Só chegava a voz do Estado.</p>
      </div>
    </div>
    <div>
      <button class="wwii-expand-btn" data-expand="comicio">
        <span>🏟️ Os Grandes Comícios</span>
        <span class="wwii-expand-arrow" style="font-size:0.75rem;">▼</span>
      </button>
      <div class="wwii-expand-body" id="expand-comicio">
        <p class="text-sm leading-relaxed mt-2" style="color:#334155;">Eventos massivos com milhares de bandeiras, luzes teatrais e discursos repetitivos, desenhados para fazer o indivíduo sentir-se pequeno e fundido na força do grupo. O objetivo: criar uma experiência emocional coletiva que substituísse o pensamento individual.</p>
      </div>
    </div>
  </div>

  <div class="callout-sabias">
    <div class="callout-label">Para Refletir</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">Se vivesses em 1933, sem internet, sem redes sociais e com toda a rádio e imprensa controladas pelo Estado, como distinguirias a verdade da propaganda? Que perigos encontras <strong>hoje</strong> na forma como a informação é consumida?</p>
  </div>
</section>

<script>
(function () {
  document.querySelectorAll('.wwii-tab-btn').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var tab = this.dataset.tab;
      document.querySelectorAll('.wwii-tab-btn').forEach(function (b) { b.classList.remove('active'); });
      document.querySelectorAll('.wwii-tab-panel').forEach(function (p) { p.classList.remove('active'); });
      this.classList.add('active');
      document.getElementById('tab-' + tab).classList.add('active');
    });
  });

  document.querySelectorAll('.wwii-expand-btn').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var id = this.dataset.expand;
      var body = document.getElementById('expand-' + id);
      var arrow = this.querySelector('.wwii-expand-arrow');
      var isOpen = body.classList.contains('open');
      body.classList.toggle('open', !isOpen);
      arrow.textContent = isOpen ? '▼' : '▲';
    });
  });
}());
</script>
