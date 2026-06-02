<?php $reflection_question = 'Porque é que jogos tão simples como o Pong ou o Tetris continuam a ser viciantes décadas depois do seu lançamento? O que é que a simplicidade tem que a complexidade por vezes não consegue oferecer?'; ?>

<style>
.vj-card { background: var(--card-bg); border: 1px solid var(--border); border-radius: 1rem; padding: 1.5rem; }
.vj-timeline { position: relative; padding-left: 2.25rem; }
.vj-timeline::before { content: ''; position: absolute; left: 0.75rem; top: 0.5rem; bottom: 0.5rem; width: 2px; background: var(--border); }
.vj-event { position: relative; margin-bottom: 1.25rem; }
.vj-event::before { content: ''; position: absolute; left: -1.625rem; top: 0.3rem; width: 0.875rem; height: 0.875rem; border-radius: 50%; background: var(--accent); border: 2px solid white; box-shadow: 0 0 0 2px var(--accent); }
.vj-badge { display: inline-block; font-size: 0.6rem; font-weight: 700; padding: 0.1rem 0.4rem; border-radius: 9999px; text-transform: uppercase; letter-spacing: 0.05em; }
.vj-game { background: var(--card-bg); border: 1px solid var(--border); border-radius: 0.75rem; padding: 1rem; cursor: pointer; transition: all 0.2s; }
.vj-game:hover { border-color: var(--accent); }
.vj-game.open { border-color: var(--accent); border-width: 2px; }
.vj-game-detail { display: none; margin-top: 0.75rem; padding-top: 0.75rem; border-top: 1px solid var(--border); }
.vj-game-detail.visible { display: block; }
</style>

<section data-label="Os Pioneiros" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">1. Quando os Cientistas se Aborriam 🔬</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">Imagina um mundo sem smartphones, sem internet e onde um computador ocupava uma sala inteira. Nos anos 50 e 60, os videojogos não eram um negócio — eram experiências de cientistas que queriam testar os limites das máquinas mais avançadas do planeta.</p>

  <div class="grid md:grid-cols-2 gap-4 mb-5">
    <div class="vj-card">
      <div class="flex items-start gap-3">
        <div class="text-3xl">📺</div>
        <div>
          <div class="font-bold text-sm mb-1">Tennis for Two <span class="vj-badge" style="background:#e0f2fe; color:#0369a1;">1958</span></div>
          <p class="text-xs leading-relaxed" style="color:var(--muted);">Criado por William Higinbotham num osciloscópio — um aparelho de medição de sinais elétricos. Não havia gráficos, apenas linhas de luz. Foi exibido ao público uma única vez e depois desmontado. Higinbotham nunca o patenteou — não fazia ideia que um dia teria valor comercial.</p>
        </div>
      </div>
    </div>
    <div class="vj-card">
      <div class="flex items-start gap-3">
        <div class="text-3xl">🚀</div>
        <div>
          <div class="font-bold text-sm mb-1">Spacewar! <span class="vj-badge" style="background:#ede9fe; color:#7c3aed;">1962</span></div>
          <p class="text-xs leading-relaxed" style="color:var(--muted);">Desenvolvido no MIT por estudantes de informática. Primeiro jogo a correr num computador verdadeiro. Dois jogadores controlavam naves em combate à volta de uma estrela. Foi partilhado gratuitamente entre universidades via fita perfurada — o primeiro "viral" da história da tecnologia.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="vj-card" style="border-left:4px solid var(--accent); border-radius:0 1rem 1rem 0;">
    <p class="text-sm" style="color:#334155;">Nenhum destes criadores imaginou que estava a fundar uma indústria. Para eles, era apenas uma forma divertida de testar hardware. A indústria nasceu por acidente — e daí vem parte da sua magia.</p>
  </div>
</section>

<section data-label="Era das Arcades" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">2. Pong e a Febre das Arcades 🕹️</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">Em 1972, tudo mudou. <strong>Nolan Bushnell</strong> fundou a <strong>Atari</strong> e lançou o <em>Pong</em>. O conceito era tão simples que nem precisava de manual: "Usa o botão para mover a raquete e bate na bola." Mas a sua simplicidade era o seu superpoder.</p>

  <div class="vj-timeline mb-5">
    <div class="vj-event">
      <div class="font-bold text-sm mb-1">1972 — Pong lançado</div>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">Primeiro sucesso comercial estrondoso. Dá origem aos salões de jogos (Arcades), onde as pessoas faziam fila para gastar moedas. Uma indústria nasce.</p>
    </div>
    <div class="vj-event">
      <div class="font-bold text-sm mb-1" style="color:#f59e0b;">Curiosidade: A Máquina que "Avariou"</div>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">A primeira máquina de Pong instalada num bar avariou no primeiro dia — o depósito de moedas estava tão cheio que a máquina encravou. O sucesso era literalmente maior do que a máquina conseguia conter.</p>
    </div>
    <div class="vj-event" style="margin-bottom:0;">
      <div class="font-bold text-sm mb-1">1972–1983 — Era de Ouro das Arcades</div>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">Space Invaders, Pac-Man, Donkey Kong. Os salões de jogos tornam-se o ponto de encontro da juventude. Uma moeda de 25 cêntimos era o bilhete de entrada para outra dimensão.</p>
    </div>
  </div>

  <div class="callout-sabias">
    <div class="callout-label">Sabias que?</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">Quando o Pac-Man foi lançado nos EUA em 1980, havia uma escassez nacional de moedas de 25 cêntimos. Os salões de jogos estavam tão cheios de máquinas a sugar moedas que o governo americano teve dificuldade em manter o fornecimento. Um jogo de computador afetou a política monetária de um país.</p>
  </div>
</section>

<section data-label="Consolas em Casa" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">3. A Revolução Chega ao Sofá 🏠</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-4">A arcade era ótima — mas e se pudesses jogar em casa? Esta pergunta deu origem às primeiras consolas domésticas. Clica em cada uma para saber mais.</p>

  <div class="space-y-2 mb-5">
    <div class="vj-game" onclick="toggleGame(this)">
      <div class="flex items-center gap-3">
        <span class="text-2xl">📺</span>
        <div>
          <div class="font-bold text-sm">Magnavox Odyssey <span class="vj-badge" style="background:#fef9c3; color:#854d0e;">1972</span></div>
          <div class="text-xs" style="color:var(--muted);">A primeira consola doméstica da história</div>
        </div>
      </div>
      <div class="vj-game-detail">
        <p class="text-xs leading-relaxed" style="color:#334155;">Era tão primitiva que não conseguia gerar gráficos. Movia apenas pontos de luz no ecrã. Para simular cenários diferentes, a consola vinha com <strong>folhas de plástico translúcido colorido</strong> que os jogadores colavam fisicamente por cima da televisão. Cada "jogo" tinha a sua folha. Simples e engenhoso — mas claramente havia muito caminho a percorrer.</p>
      </div>
    </div>
    <div class="vj-game" onclick="toggleGame(this)" style="border-color:var(--accent);">
      <div class="flex items-center gap-3">
        <span class="text-2xl">🎮</span>
        <div>
          <div class="font-bold text-sm" style="color:var(--accent);">Atari 2600 <span class="vj-badge" style="background:#fce7f3; color:#9d174d;">1977</span></div>
          <div class="text-xs" style="color:var(--muted);">A revolução dos cartuchos amovíveis</div>
        </div>
      </div>
      <div class="vj-game-detail">
        <p class="text-xs leading-relaxed" style="color:#334155;">A grande inovação: <strong>cartuchos amovíveis</strong>. Uma única consola podia jogar centenas de jogos diferentes — bastava trocar o cartucho. Este modelo (hardware separado do software) ainda é a base de todas as consolas modernas. A PlayStation, a Nintendo Switch, o Xbox — todos descendem desta ideia nascida em 1977.</p>
      </div>
    </div>
  </div>
</section>

<section data-label="O Grande Crash" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">4. O Colapso de 1983 — e o Renascimento 💥</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">O sucesso levou à ganância. Em 1983, o mercado estava inundado de jogos de péssima qualidade. O símbolo do desastre foi o jogo <em>E.T. the Extra-Terrestrial</em> — feito em apenas 5 semanas para capitalizar o sucesso do filme. As vendas colapsaram de 3,2 mil milhões de dólares em 1983 para 100 milhões em 1985.</p>

  <div class="grid md:grid-cols-2 gap-4 mb-5">
    <div class="vj-card" style="background:#fff1f2; border-color:#fecdd3;">
      <div class="font-bold text-sm mb-2" style="color:#be123c;">☠️ O Enterro no Deserto</div>
      <p class="text-xs leading-relaxed" style="color:#7f1d1d;">A Atari, incapaz de vender milhões de cópias do jogo E.T., enterrou literalmente os cartuchos num aterro no deserto do Novo México. Em 2014, uma expedição arqueológica confirmou a lenda e desenterrou as caixas — o maior fracasso comercial na história dos videojogos, preservado na areia.</p>
    </div>
    <div class="vj-card" style="background:#f0fdf4; border-color:#bbf7d0;">
      <div class="font-bold text-sm mb-2 text-emerald-800">🥚 O Primeiro Easter Egg</div>
      <p class="text-xs leading-relaxed" style="color:#334155;">No jogo <em>Adventure</em> (Atari 2600), o programador Warren Robinett escondeu o seu nome numa sala secreta — porque a Atari recusava creditar os criadores nos manuais. Foi o primeiro "ovo de páscoa" da história. Uma tradição de protesto que ainda hoje continua em jogos, filmes e software.</p>
    </div>
  </div>

  <div class="vj-card" style="background:#1e293b; border-color:#334155;">
    <div class="font-bold text-sm text-white mb-2">🎌 O Renascimento: Nintendo</div>
    <p class="text-xs leading-relaxed" style="color:#94a3b8;">O mercado americano sobreviveu graças a uma empresa japonesa de cartas de baralho: a <strong class="text-white">Nintendo</strong>, com o seu NES (Nintendo Entertainment System, 1985). A chave foi o rigoroso sistema de licenciamento — só jogos aprovados pela Nintendo chegavam à consola. Qualidade garantida. Confiança restaurada. A indústria ressuscitou.</p>
  </div>
</section>

<script>
(function () {
  function toggleGame(el) {
    var detail = el.querySelector('.vj-game-detail');
    var isOpen = detail.classList.contains('visible');
    detail.classList.toggle('visible', !isOpen);
    el.classList.toggle('open', !isOpen);
  }
  window.toggleGame = toggleGame;
}());
</script>
