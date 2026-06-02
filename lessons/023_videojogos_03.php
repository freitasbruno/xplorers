<?php $reflection_question = 'Se em 2040 a tecnologia de ecrãs deixar de existir e toda a interação for em Realidade Mista, que experiência interativa criarias para resolver um problema do quotidiano — aprender, fazer desporto, ir às compras? O que é que a imersão total muda na experiência?'; ?>

<style>
.vj3-card { background: var(--card-bg); border: 1px solid var(--border); border-radius: 1rem; padding: 1.5rem; }
.vj3-tab-btn { padding: 0.5rem 1rem; border-radius: 0.5rem; font-size: 0.8rem; font-weight: 600; cursor: pointer; transition: all 0.2s; border: 2px solid transparent; }
.vj3-tab-btn.active { color: white; }
.vj3-tab-panel { display: none; }
.vj3-tab-panel.active { display: block; }
.vj3-case { background: var(--card-bg); border: 1px solid var(--border); border-radius: 0.75rem; padding: 1rem; cursor: pointer; transition: all 0.2s; }
.vj3-case:hover { border-color: var(--accent); }
.vj3-case.open { border-color: var(--accent); border-width: 2px; }
.vj3-case-detail { display: none; margin-top: 0.75rem; padding-top: 0.75rem; border-top: 1px solid var(--border); }
.vj3-case-detail.visible { display: block; }
</style>

<section data-label="VR, AR e MR" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">1. As Três Formas de Imersão 🕶️</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">E se o ecrã desaparecesse? E se tu estivesses <em>dentro</em> do jogo, ou se o jogo saísse da consola para a tua sala de estar? Três tecnologias estão a apagar a linha entre o real e o digital — e cada uma fá-lo de forma diferente.</p>

  <div class="flex gap-2 flex-wrap mb-4">
    <button class="vj3-tab-btn active" style="background:#6366f1;" onclick="switchImm(this,'vr')">🥽 VR</button>
    <button class="vj3-tab-btn" style="background:#e2e8f0; color:#475569;" onclick="switchImm(this,'ar')">📱 AR</button>
    <button class="vj3-tab-btn" style="background:#e2e8f0; color:#475569;" onclick="switchImm(this,'mr')">🌐 MR</button>
  </div>

  <div id="vr" class="vj3-tab-panel active">
    <div class="vj3-card" style="background:#f5f3ff; border-color:#c4b5fd;">
      <div class="flex items-start gap-3 mb-3">
        <div class="text-3xl">🥽</div>
        <div>
          <div class="font-bold mb-1" style="color:#4f46e5;">Realidade Virtual — Imersão Total</div>
          <div class="text-xs px-2 py-0.5 rounded-full inline-block mb-2" style="background:#ede9fe; color:#5b21b6;">Mundo real: desaparece</div>
        </div>
      </div>
      <p class="text-sm leading-relaxed mb-3" style="color:#334155;">Através de óculos como os Meta Quest ou PSVR, o teu cérebro é "transportado" para um ambiente 100% digital. Os sensores rastreiam os teus movimentos e ajustam a perspetiva em tempo real — criando uma ilusão de presença física noutro lugar.</p>
      <div class="grid grid-cols-2 gap-2">
        <div class="text-xs px-2 py-1 rounded" style="background:#ede9fe; color:#4f46e5;">✅ Imersão máxima</div>
        <div class="text-xs px-2 py-1 rounded" style="background:#ede9fe; color:#4f46e5;">✅ Presença físicamente sentida</div>
        <div class="text-xs px-2 py-1 rounded" style="background:#fff1f2; color:#be123c;">❌ Isolamento do mundo real</div>
        <div class="text-xs px-2 py-1 rounded" style="background:#fff1f2; color:#be123c;">❌ Enjoo em alguns utilizadores</div>
      </div>
    </div>
  </div>

  <div id="ar" class="vj3-tab-panel">
    <div class="vj3-card" style="background:#f0fdf4; border-color:#bbf7d0;">
      <div class="flex items-start gap-3 mb-3">
        <div class="text-3xl">📱</div>
        <div>
          <div class="font-bold mb-1" style="color:#15803d;">Realidade Aumentada — Camadas no Real</div>
          <div class="text-xs px-2 py-0.5 rounded-full inline-block mb-2" style="background:#dcfce7; color:#166534;">Mundo real: enriquecido</div>
        </div>
      </div>
      <p class="text-sm leading-relaxed mb-3" style="color:#334155;">O mundo digital sobrepõe-se ao real. Vês a tua rua, mas com elementos digitais nela. O Pokémon GO é o exemplo mais famoso — os Pokémon aparecem no teu parque real. Os filtros do Instagram também são AR: adicionam elementos ao teu rosto real em tempo real.</p>
      <div class="grid grid-cols-2 gap-2">
        <div class="text-xs px-2 py-1 rounded" style="background:#dcfce7; color:#15803d;">✅ Mantém contacto com o real</div>
        <div class="text-xs px-2 py-1 rounded" style="background:#dcfce7; color:#15803d;">✅ Mais seguro e social</div>
        <div class="text-xs px-2 py-1 rounded" style="background:#fff1f2; color:#be123c;">❌ Imersão limitada</div>
        <div class="text-xs px-2 py-1 rounded" style="background:#fff1f2; color:#be123c;">❌ Elementos digitais "flutuam" sem interagir</div>
      </div>
    </div>
  </div>

  <div id="mr" class="vj3-tab-panel">
    <div class="vj3-card" style="background:#fff7ed; border-color:#fed7aa;">
      <div class="flex items-start gap-3 mb-3">
        <div class="text-3xl">🌐</div>
        <div>
          <div class="font-bold mb-1" style="color:#c2410c;">Realidade Mista — Digital que Toca o Real</div>
          <div class="text-xs px-2 py-0.5 rounded-full inline-block mb-2" style="background:#ffedd5; color:#9a3412;">Mundo real: integrado com o digital</div>
        </div>
      </div>
      <p class="text-sm leading-relaxed mb-3" style="color:#334155;">O passo seguinte à AR. Os objetos digitais não estão apenas "por cima" do real — eles <em>entendem</em> e <em>interagem</em> com o ambiente físico. Um personagem digital pode esconder-se atrás do teu sofá, sentar-se na tua cadeira, ou pousar numa mesa real. O Microsoft HoloLens usa MR para medicina e engenharia.</p>
      <div class="grid grid-cols-2 gap-2">
        <div class="text-xs px-2 py-1 rounded" style="background:#ffedd5; color:#c2410c;">✅ Digital integra-se no real</div>
        <div class="text-xs px-2 py-1 rounded" style="background:#ffedd5; color:#c2410c;">✅ Potencial enorme para trabalho</div>
        <div class="text-xs px-2 py-1 rounded" style="background:#fff1f2; color:#be123c;">❌ Hardware ainda muito caro</div>
        <div class="text-xs px-2 py-1 rounded" style="background:#fff1f2; color:#be123c;">❌ Processamento muito exigente</div>
      </div>
    </div>
  </div>
</section>

<section data-label="IA e Mundos" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">2. IA e Mundos Sem Fim 🤖</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">Como pode um jogo ter "infinitos planetas"? Através da <strong>Geração Procedimental</strong> — o uso de algoritmos para criar conteúdo automaticamente, seguindo regras, em vez de tudo ser desenhado manualmente por artistas.</p>

  <div class="grid md:grid-cols-2 gap-4 mb-5">
    <div class="vj3-card">
      <div class="font-bold text-sm mb-2">🌍 Geração Procedimental</div>
      <p class="text-xs leading-relaxed mb-2" style="color:var(--muted);">Um número-semente gera deterministicamente terrenos, fauna, flora, minerais e atmosferas. O No Man's Sky tem <strong>18 quintilhões</strong> de planetas únicos — impossível de criar manualmente. O universo inteiro cabe em poucos GB de código.</p>
    </div>
    <div class="vj3-card" style="background:#f0f4ff; border-color:#c7d2fe;">
      <div class="font-bold text-sm mb-2" style="color:#3730a3;">🧠 IA nos NPCs</div>
      <p class="text-xs leading-relaxed mb-2" style="color:#1e1b4b;">Os personagens secundários estão a evoluir de frases pré-gravadas fixas para conversas dinâmicas usando modelos de linguagem. Um NPC pode lembrar-se do que o jogador fez, mudar de opinião, e criar interações únicas para cada sessão.</p>
    </div>
  </div>

  <div class="callout-sabias">
    <div class="callout-label">Sabias que?</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">O <strong>Vale da Estranheza (Uncanny Valley)</strong> é um fenómeno psicológico: quanto mais um personagem digital se parece com um humano real (sem ser perfeito), mais desconforto e repulsa sentimos. O cérebro deteta imperfeições subtis nos olhos, na pele e no movimento — e reage com estranheza. É por isso que Mario ou Fortnite não nos perturbam, mas personagens "quase humanos" às vezes causam arrepios.</p>
  </div>
</section>

<section data-label="Casos Práticos" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">3. Tecnologia em Ação 🚀</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-4">Estas tecnologias não são apenas conceitos futuros — já existem e já estão a mudar como jogamos, trabalhamos e aprendemos. Clica em cada exemplo.</p>

  <div class="space-y-2 mb-5">
    <div class="vj3-case" onclick="toggleCase(this)">
      <div class="flex items-center gap-3">
        <span class="text-xl">🥽</span>
        <div>
          <div class="font-bold text-sm">Half-Life: Alyx (VR)</div>
          <div class="text-xs" style="color:var(--muted);">O padrão de ouro da Realidade Virtual</div>
        </div>
      </div>
      <div class="vj3-case-detail">
        <p class="text-xs leading-relaxed" style="color:#334155;">Desenvolvido pela Valve em 2020, mostrou que a VR não é apenas "jogos normais com óculos". Abrir uma porta, carregar uma arma inserindo fisicamente um carregador, ou empurrar objetos num laboratório infestado de alienígenas tornam-se experiências físicas e emocionalmente intensas. A tensão de recarregar com mãos que tremem enquanto um monstro se aproxima é incomparável a qualquer jogo convencional.</p>
      </div>
    </div>
    <div class="vj3-case" onclick="toggleCase(this)">
      <div class="flex items-center gap-3">
        <span class="text-xl">🔬</span>
        <div>
          <div class="font-bold text-sm">Microsoft HoloLens (MR)</div>
          <div class="text-xs" style="color:var(--muted);">Para além dos jogos — medicina e engenharia</div>
        </div>
      </div>
      <div class="vj3-case-detail">
        <p class="text-xs leading-relaxed" style="color:#334155;">O HoloLens não é um produto de entretenimento — é uma ferramenta profissional. Cirurgiões usam-no para ver modelos 3D do paciente sobrepostos ao corpo real durante operações. Engenheiros visualizam plantas de edifícios em tamanho real no espaço. Técnicos de manutenção veem as instruções passo-a-passo sobrepostas na máquina que estão a reparar. A Realidade Mista está a transformar profissões inteiras.</p>
      </div>
    </div>
    <div class="vj3-case" onclick="toggleCase(this)">
      <div class="flex items-center gap-3">
        <span class="text-xl">⛏️</span>
        <div>
          <div class="font-bold text-sm">Minecraft (Geração Procedimental)</div>
          <div class="text-xs" style="color:var(--muted);">Mundos infinitos com regras simples</div>
        </div>
      </div>
      <div class="vj3-case-detail">
        <p class="text-xs leading-relaxed" style="color:#334155;">Apesar da aparência simples, o Minecraft é um prodígio da geração procedimental. Cada mundo é gerado a partir de uma "semente" numérica usando algoritmos de ruído de Perlin — criando montanhas, cavernas, oceanos e biomas únicos e coerentes. Dois jogadores com a mesma semente veem exatamente o mesmo mundo. Com mais de 238 milhões de cópias vendidas, é o jogo mais vendido da história — prova de que criatividade e profundidade superam gráficos elaborados.</p>
      </div>
    </div>
    <div class="vj3-case" onclick="toggleCase(this)">
      <div class="flex items-center gap-3">
        <span class="text-xl">🖐️</span>
        <div>
          <div class="font-bold text-sm">Fatos e Luvas Hápticas</div>
          <div class="text-xs" style="color:var(--muted);">Sentir o que não existe</div>
        </div>
      </div>
      <div class="vj3-case-detail">
        <p class="text-xs leading-relaxed" style="color:#334155;">Já existem luvas e fatos com arrays de micro-atuadores que simulam sensações físicas: a textura rugosa de uma rocha, o impacto de uma explosão, o aperto de uma mão virtual. Em VR, já temos visão e som simulados — a háptica tenta completar o quadro com o toque. Empresas como a HaptX e a bHaptics estão a tornar esta tecnologia acessível. O próximo passo: simular temperatura e cheiro.</p>
      </div>
    </div>
  </div>

  <div class="vj3-card" style="background:#1e293b; border-color:#334155;">
    <div class="font-bold text-sm text-white mb-2">💡 A Primeira VR da História</div>
    <p class="text-xs leading-relaxed" style="color:#94a3b8;">Ivan Sutherland criou os primeiros óculos de Realidade Virtual em <strong class="text-white">1968</strong> — meio século antes do Meta Quest. O problema? Eram tão pesados que tinham de ser suspensos do teto por um braço mecânico. Chamavam-lhe "A Espada de Dâmocles". O conceito existia há décadas — faltava apenas a tecnologia para o tornar portátil e acessível.</p>
  </div>
</section>

<script>
(function () {
  function switchImm(btn, panelId) {
    var colors = { vr: '#6366f1', ar: '#16a34a', mr: '#ea580c' };
    document.querySelectorAll('.vj3-tab-btn').forEach(function (b) {
      b.classList.remove('active');
      b.style.background = '#e2e8f0';
      b.style.color = '#475569';
    });
    document.querySelectorAll('.vj3-tab-panel').forEach(function (p) { p.classList.remove('active'); });
    btn.classList.add('active');
    btn.style.background = colors[panelId] || 'var(--accent)';
    btn.style.color = 'white';
    document.getElementById(panelId).classList.add('active');
  }
  window.switchImm = switchImm;

  function toggleCase(el) {
    var detail = el.querySelector('.vj3-case-detail');
    var isOpen = detail.classList.contains('visible');
    detail.classList.toggle('visible', !isOpen);
    el.classList.toggle('open', !isOpen);
  }
  window.toggleCase = toggleCase;
}());
</script>
