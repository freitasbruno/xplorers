<?php $reflection_question = 'A Nintendo apostou na nostalgia e nos personagens conhecidos; a Sega apostou na atitude e no marketing agressivo. Qual das duas estratégias achas que funcionaria melhor hoje, num mercado onde os jogadores têm acesso a milhares de jogos? E quem ganhou realmente esta guerra?'; ?>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<style>
.vj2-card { background: var(--card-bg); border: 1px solid var(--border); border-radius: 1rem; padding: 1.5rem; }
.vj2-tab-btn { padding: 0.5rem 1rem; border-radius: 0.5rem; font-size: 0.8rem; font-weight: 600; cursor: pointer; transition: all 0.2s; border: 2px solid transparent; }
.vj2-tab-btn.active { color: white; }
.vj2-tab-panel { display: none; }
.vj2-tab-panel.active { display: block; }
.vj2-vs { display: grid; grid-template-columns: 1fr auto 1fr; gap: 1rem; align-items: stretch; }
@media (max-width: 560px) { .vj2-vs { grid-template-columns: 1fr; } }
</style>

<section data-label="Nintendo vs Sega" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">1. Escolhe o teu lado! 🎮</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">Nos anos 90, a pergunta que definia o teu grupo de amigos não era "qual é a tua rede social favorita", mas sim: <strong>"És da Nintendo ou da Sega?"</strong>. Esta rivalidade foi a "Coca-Cola vs. Pepsi" da tecnologia — e foi muito, muito a sério.</p>

  <div class="vj2-vs mb-5">
    <div class="vj2-card" style="background:#fef9c3; border-color:#fde047;">
      <div class="text-center text-2xl mb-2">🍄</div>
      <div class="font-bold text-center mb-3" style="color:#854d0e;">Nintendo (SNES)</div>
      <ul class="text-xs space-y-2" style="color:#713f12;">
        <li>✅ Personagens familiares: Mario, Zelda, Donkey Kong</li>
        <li>✅ Cores vibrantes e jogabilidade polida</li>
        <li>✅ Reputação de qualidade garantida</li>
        <li>❌ Vista como "para crianças" pelo público mais velho</li>
        <li>❌ Marketing conservador e previsível</li>
      </ul>
    </div>
    <div class="text-center flex items-center justify-center">
      <div class="font-black text-2xl" style="color:var(--muted);">VS</div>
    </div>
    <div class="vj2-card" style="background:#1e293b; border-color:#334155;">
      <div class="text-center text-2xl mb-2">⚡</div>
      <div class="font-bold text-center text-white mb-3">Sega (Mega Drive)</div>
      <ul class="text-xs space-y-2 text-slate-300">
        <li>✅ Atitude rebelde: Sonic, Streets of Rage</li>
        <li>✅ Marketing agressivo e irreverente</li>
        <li>✅ Apelo ao público adolescente</li>
        <li>❌ "Blast Processing" — marketing vazio</li>
        <li>❌ Perdeu a guerra das consolas a longo prazo</li>
      </ul>
    </div>
  </div>

  <div class="callout-sabias">
    <div class="callout-label">Sabias que?</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">O slogan da Sega era <strong>"Genesis does what Nintendon't"</strong> — um ataque direto à concorrência que chocou a indústria. E o "Blast Processing"? Era um termo técnico de marketing que não correspondia a nenhuma vantagem real de performance. A Sega literalmente inventou uma palavra para parecer mais avançada. A Nintendo ficou tão desconcertada que demorou semanas a responder — não sabia como rebater algo que não significava nada.</p>
  </div>
</section>

<section data-label="A Evolução dos Bits" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">2. O que Significavam os "Bits"? 🔢</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-4">Ouvíamos muito falar de "8-bit", "16-bit" e "64-bit". Mas o que mudava concretamente para quem estava a jogar? Explora cada geração.</p>

  <div class="flex gap-2 flex-wrap mb-4" id="bitTabs">
    <button class="vj2-tab-btn active" style="background:var(--accent);" onclick="switchBit(this,'bit8')">8-bit</button>
    <button class="vj2-tab-btn" style="background:#e2e8f0; color:#475569;" onclick="switchBit(this,'bit16')">16-bit</button>
    <button class="vj2-tab-btn" style="background:#e2e8f0; color:#475569;" onclick="switchBit(this,'bit3264')">32/64-bit</button>
  </div>

  <div id="bit8" class="vj2-tab-panel active">
    <div class="vj2-card">
      <div class="font-bold text-sm mb-2">8-bit — NES / Master System (1983–1989)</div>
      <div class="grid grid-cols-3 gap-3 mb-3">
        <div class="text-center"><div class="text-lg mb-1">🎨</div><div class="font-bold text-xs">~50 cores</div><div class="text-xs" style="color:var(--muted);">simultâneas</div></div>
        <div class="text-center"><div class="text-lg mb-1">🔊</div><div class="font-bold text-xs">Simples</div><div class="text-xs" style="color:var(--muted);">beeps e tons básicos</div></div>
        <div class="text-center"><div class="text-lg mb-1">👾</div><div class="font-bold text-xs">Sprites pequenos</div><div class="text-xs" style="color:var(--muted);">personagens pixelizados</div></div>
      </div>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">Jogos como Super Mario Bros. e Mega Man definiram a estética desta geração. A limitação de cores e tamanho de sprites forçou os artistas a serem extremamente criativos. A música chiptune (beeps e tons simples) tornou-se um género musical com fãs até hoje.</p>
    </div>
  </div>
  <div id="bit16" class="vj2-tab-panel">
    <div class="vj2-card">
      <div class="font-bold text-sm mb-2">16-bit — SNES / Mega Drive (1989–1995)</div>
      <div class="grid grid-cols-3 gap-3 mb-3">
        <div class="text-center"><div class="text-lg mb-1">🌈</div><div class="font-bold text-xs">Milhares de cores</div><div class="text-xs" style="color:var(--muted);">simultâneas</div></div>
        <div class="text-center"><div class="text-lg mb-1">🎵</div><div class="font-bold text-xs">Quase CD</div><div class="text-xs" style="color:var(--muted);">instrumentos reais amostrados</div></div>
        <div class="text-center"><div class="text-lg mb-1">🏔️</div><div class="font-bold text-xs">Parallax</div><div class="text-xs" style="color:var(--muted);">ilusão de profundidade</div></div>
      </div>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">Um salto gigante percetível a olho nu. O Parallax Scrolling (fundos a diferentes velocidades) criava ilusão de profundidade. Street Fighter II, Sonic the Hedgehog e The Legend of Zelda: A Link to the Past definiram esta geração. Muitos consideram a era 16-bit o "pico" dos jogos 2D.</p>
    </div>
  </div>
  <div id="bit3264" class="vj2-tab-panel">
    <div class="vj2-card">
      <div class="font-bold text-sm mb-2">32/64-bit — PlayStation / N64 / Saturn (1994–2001)</div>
      <div class="grid grid-cols-3 gap-3 mb-3">
        <div class="text-center"><div class="text-lg mb-1">🌐</div><div class="font-bold text-xs">Mundos 3D</div><div class="text-xs" style="color:var(--muted);">polígonos em tempo real</div></div>
        <div class="text-center"><div class="text-lg mb-1">🎬</div><div class="font-bold text-xs">Vídeo FMV</div><div class="text-xs" style="color:var(--muted);">cutscenes cinematográficas</div></div>
        <div class="text-center"><div class="text-lg mb-1">🎼</div><div class="font-bold text-xs">Música orquestrada</div><div class="text-xs" style="color:var(--muted);">CD completo</div></div>
      </div>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">A revolução. Pela primeira vez, os processadores conseguiam calcular polígonos 3D em tempo real. Final Fantasy VII, Metal Gear Solid, Super Mario 64 e Ocarina of Time mostraram que os videojogos podiam ter ambição cinematográfica.</p>
    </div>
  </div>
</section>

<section data-label="CD vs Cartucho" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">3. A Sony e a Revolução do CD 💿</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">Em 1994, a Sony entrou no mercado e mudou tudo. A arma: o CD-ROM, que tornava os cartuchos da concorrência obsoletos numa única comparação.</p>

  <div class="mb-4" style="max-width:460px; margin:0 auto;">
    <canvas id="vj2StorageChart" height="160"></canvas>
  </div>
  <p class="text-xs text-center mb-5" style="color:var(--muted);">Capacidade de armazenamento: Cartucho N64 vs. CD-ROM PlayStation</p>

  <div class="grid md:grid-cols-2 gap-4 mb-5">
    <div class="vj2-card">
      <div class="font-bold text-sm mb-2">💾 Cartucho (Nintendo 64)</div>
      <ul class="text-xs space-y-1" style="color:var(--muted);">
        <li>✅ Carregamento instantâneo (sem loading)</li>
        <li>✅ Durável e resistente ao pó</li>
        <li>❌ Máximo de ~64 MB (caro de produzir)</li>
        <li>❌ Custo de produção: 25–35$ por unidade</li>
        <li>❌ Pouco espaço para música e vídeo</li>
      </ul>
    </div>
    <div class="vj2-card" style="background:#f0f4ff; border-color:#c7d2fe;">
      <div class="font-bold text-sm mb-2" style="color:#3730a3;">💿 CD-ROM (PlayStation)</div>
      <ul class="text-xs space-y-1" style="color:#1e1b4b;">
        <li>✅ 700 MB de armazenamento</li>
        <li>✅ Custo de produção: ~1$ por CD</li>
        <li>✅ Música orquestrada e vídeos FMV</li>
        <li>❌ Ecrãs de loading entre áreas</li>
        <li>❌ Suscetível a riscos e danos</li>
      </ul>
    </div>
  </div>

  <div class="vj2-card" style="background:#1e293b; border-color:#334155;">
    <p class="text-sm leading-relaxed text-slate-200">🤯 <strong class="text-white">A Origem Inesperada da PlayStation:</strong> A PlayStation começou como um projeto da Sony para criar um leitor de CDs para a Super Nintendo — fruto de um acordo entre as duas empresas. Em 1991, a Nintendo cancelou o acordo de forma humilhante numa conferência pública. Ken Kutaragi, engenheiro da Sony, convenceu os seus superiores a criar a sua própria consola. A PlayStation foi literalmente uma <em class="text-yellow-300">vingança</em> — e tornou-se a consola mais vendida do mundo.</p>
  </div>
</section>

<script>
(function () {
  function switchBit(btn, panelId) {
    document.querySelectorAll('.vj2-tab-btn').forEach(function (b) {
      b.classList.remove('active');
      b.style.background = '#e2e8f0';
      b.style.color = '#475569';
    });
    document.querySelectorAll('.vj2-tab-panel').forEach(function (p) { p.classList.remove('active'); });
    btn.classList.add('active');
    btn.style.background = 'var(--accent)';
    btn.style.color = 'white';
    document.getElementById(panelId).classList.add('active');
  }
  window.switchBit = switchBit;

  var ctx = document.getElementById('vj2StorageChart').getContext('2d');
  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Cartucho N64\n(máx. ~64 MB)', 'CD-ROM PlayStation\n(700 MB)'],
      datasets: [{
        label: 'Capacidade (MB)',
        data: [64, 700],
        backgroundColor: ['#fbbf24', '#6366f1'],
        borderRadius: 8
      }]
    },
    options: {
      indexAxis: 'y',
      responsive: true,
      plugins: {
        legend: { display: false },
        tooltip: { callbacks: { label: function (ctx) { return ctx.parsed.x + ' MB'; } } }
      },
      scales: {
        x: { beginAtZero: true, ticks: { callback: function (v) { return v + ' MB'; } }, grid: { color: 'rgba(0,0,0,0.05)' } },
        y: { grid: { display: false } }
      }
    }
  });
}());
</script>
