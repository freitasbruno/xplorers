<?php $reflection_question = 'Se tivesses o poder de enviar uma sonda espacial a qualquer corpo do Sistema Solar — planeta, lua, cometa ou asteroide — qual escolherias e porquê? Que mistério gostarias de resolver?'; ?>

<style>
.planet-type-card { border-radius: 1rem; padding: 1.25rem; border: 1px solid var(--border); }
.neighbour-card { display: flex; gap: 0.875rem; align-items: flex-start; padding: 1rem 1.25rem; background: var(--card-bg); border: 1px solid var(--border); border-radius: 0.875rem; }
.goldilocks-step { display: flex; gap: 1rem; align-items: flex-start; padding: 1rem; background: var(--card-bg); border: 1px solid var(--border); border-radius: 0.875rem; margin-bottom: 0.75rem; }
.step-num { width: 2rem; height: 2rem; border-radius: 999px; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 0.85rem; flex-shrink: 0; background: var(--accent); color: white; }
</style>

<section data-label="Sistema Solar" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">1. O Nosso Bairro: Bem-vindo ao Sistema Solar 🏡</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">Se o Universo é uma cidade infinita, o Sistema Solar é o nosso bairro — organizado e dinâmico, governado por uma estrela central: o <strong>Sol</strong>. Tão massivo que contém <strong>99,8% de toda a massa</strong> do Sistema Solar. Tudo o resto são apenas os restantes 0,2%.</p>

  <div class="grid sm:grid-cols-2 gap-4 mb-5">
    <div class="planet-type-card" style="background:#f0f9ff;">
      <div class="font-bold text-sm mb-2" style="color:#0369a1;">🪨 Planetas Rochosos (Interiores)</div>
      <p class="text-sm mb-3" style="color:#334155;">Pequenos, densos e com superfícies sólidas. Os mais próximos do Sol:</p>
      <div class="flex flex-wrap gap-1.5">
        <?php foreach (['Mercúrio','Vénus','Terra','Marte'] as $p): ?>
          <span class="text-xs font-semibold px-2.5 py-1 rounded-full" style="background:#dbeafe;color:#1e40af;"><?= $p ?></span>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="planet-type-card" style="background:#fdf4ff;">
      <div class="font-bold text-sm mb-2" style="color:#7e22ce;">🌬️ Gigantes Gasosos (Exteriores)</div>
      <p class="text-sm mb-3" style="color:#334155;">Enormes, com atmosferas densas e sem superfície sólida definida:</p>
      <div class="flex flex-wrap gap-1.5">
        <?php foreach (['Júpiter','Saturno','Úrano','Neptuno'] as $p): ?>
          <span class="text-xs font-semibold px-2.5 py-1 rounded-full" style="background:#ede9fe;color:#5b21b6;"><?= $p ?></span>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

  <div class="callout-sabias">
    <div class="callout-label">Sabias que...?</div>
    <p class="text-sm" style="color:#334155;">Para decorar a ordem dos planetas: "<strong>M</strong>inha <strong>V</strong>iagem <strong>T</strong>erá <strong>M</strong>uitas <strong>J</strong>ornadas <strong>S</strong>eguindo <strong>U</strong>m <strong>N</strong>orte" — Mercúrio, Vénus, Terra, Marte, Júpiter, Saturno, Úrano, Neptuno.</p>
  </div>
</section>

<section data-label="Vizinhos Celestiais" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">2. Os Vizinhos Celestiais: Mais do que Apenas Planetas ☄️</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">O nosso bairro cósmico é muito mais movimentado do que parece. Para além dos oito planetas, existem outros corpos fascinantes:</p>

  <div class="flex flex-col gap-3">
    <div class="neighbour-card">
      <span class="text-2xl mt-0.5">🔵</span>
      <div>
        <div class="font-bold text-sm mb-0.5">Planetas Anões</div>
        <p class="text-sm leading-relaxed" style="color:var(--muted);">Corpos esféricos que orbitam o Sol, mas não "limparam" a sua órbita de outros objetos. O mais famoso é <strong>Plutão</strong>, que foi o nono planeta até 2006.</p>
      </div>
    </div>
    <div class="neighbour-card">
      <span class="text-2xl mt-0.5">🪨</span>
      <div>
        <div class="font-bold text-sm mb-0.5">Cintura de Asteroides</div>
        <p class="text-sm leading-relaxed" style="color:var(--muted);">Uma "autoestrada" de rochas espaciais entre Marte e Júpiter — restos de um planeta que nunca chegou a formar-se devido à imensa gravidade de Júpiter.</p>
      </div>
    </div>
    <div class="neighbour-card">
      <span class="text-2xl mt-0.5">☄️</span>
      <div>
        <div class="font-bold text-sm mb-0.5">Cometas</div>
        <p class="text-sm leading-relaxed" style="color:var(--muted);">"Bolas de neve sujas" de gelo, rocha e poeira. Perto do Sol, criam uma cauda brilhante de milhões de quilómetros. O cometa <strong>Halley</strong> visita-nos a cada 76 anos.</p>
      </div>
    </div>
    <div class="neighbour-card">
      <span class="text-2xl mt-0.5">🌊</span>
      <div>
        <div class="font-bold text-sm mb-0.5">Luas (Satélites Naturais)</div>
        <p class="text-sm leading-relaxed" style="color:var(--muted);">A maioria dos planetas tem luas. <strong>Europa</strong>, lua de Júpiter, possui um oceano de água líquida sob crosta de gelo — um dos locais mais promissores para procurar vida extraterrestre.</p>
      </div>
    </div>
  </div>
</section>

<section data-label="Zona Goldilocks" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">3. O Milagre da Terra: A Zona Goldilocks 🌍</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">Porque é que a Terra é o único planeta que conhecemos com vida? A resposta está num equilíbrio cósmico perfeito — a <strong>Zona Habitável</strong> (Goldilocks Zone): nem demasiado quente, nem demasiado fria.</p>

  <div class="mb-5">
    <div class="goldilocks-step">
      <div class="step-num">1</div>
      <div>
        <div class="font-bold text-sm mb-0.5">Distância Ideal</div>
        <p class="text-sm leading-relaxed" style="color:var(--muted);">A Terra orbita o Sol a uma distância que permite a <strong>água existir no estado líquido</strong>. Mais perto, evaporaria; mais longe, congelaria.</p>
      </div>
    </div>
    <div class="goldilocks-step">
      <div class="step-num">2</div>
      <div>
        <div class="font-bold text-sm mb-0.5">Atmosfera Protetora</div>
        <p class="text-sm leading-relaxed" style="color:var(--muted);">Escuda-nos da radiação solar perigosa, queima a maioria dos meteoritos e cria um <strong>efeito de estufa</strong> que mantém a temperatura estável.</p>
      </div>
    </div>
    <div class="goldilocks-step">
      <div class="step-num">3</div>
      <div>
        <div class="font-bold text-sm mb-0.5">Campo Magnético</div>
        <p class="text-sm leading-relaxed" style="color:var(--muted);">Gerado pelo núcleo de ferro líquido, desvia o <strong>vento solar</strong> — um fluxo de partículas energéticas que, de outra forma, destruiria a nossa atmosfera.</p>
      </div>
    </div>
  </div>

  <div class="callout-sabias">
    <div class="callout-label">Sabias que...?</div>
    <p class="text-sm" style="color:#334155;">Um dia em <strong>Vénus</strong> (243 dias terrestres) é mais longo do que o seu ano (225 dias terrestres). Em <strong>Mercúrio</strong>, um ano dura apenas 88 dias terrestres!</p>
  </div>
</section>

<section data-label="A Gravidade" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">4. A Força Invisível: A Gravidade Põe Ordem no Caos ⚖️</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">Como é que este sistema complexo se mantém organizado, com os planetas a seguir órbitas previsíveis? A resposta é a <strong>gravidade</strong> — a "cola" do universo, uma força de atração entre quaisquer dois objetos com massa.</p>

  <div class="grid sm:grid-cols-2 gap-4">
    <div class="paper rounded-2xl p-5">
      <div class="text-2xl mb-3">☀️</div>
      <p class="text-sm leading-relaxed" style="color:#334155;">O Sol, por ser o mais massivo, mantém os planetas presos em <strong>órbitas elípticas</strong> através da sua enorme atração gravitacional.</p>
    </div>
    <div class="paper rounded-2xl p-5">
      <div class="text-2xl mb-3">🔁</div>
      <p class="text-sm leading-relaxed" style="color:#334155;"><strong>Analogia:</strong> Imagina girar uma bola presa a um fio. Tu és o Sol, a bola é um planeta, o fio é a gravidade. Enquanto o fio não se partir, a bola continua a girar.</p>
    </div>
  </div>
</section>
