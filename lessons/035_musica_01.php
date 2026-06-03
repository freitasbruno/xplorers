<?php $reflection_question = 'Como é que a física de uma onda sonora conseguiu controlar a tua mão quando a desenhaste? O que diz isso sobre a ligação entre a física, a biologia e a emoção?'; ?>

<style>
.musica-card { background: var(--card-bg); border: 1px solid var(--border); border-radius: 1rem; padding: 1.5rem; }
.musica-tab-btn { border: 2px solid var(--border); border-radius: 999px; padding: 0.4rem 1rem; font-size: 0.8rem; font-weight: 600; cursor: pointer; transition: all 0.2s ease; background: var(--bg); color: var(--text); }
.musica-tab-btn.active { background: var(--accent); border-color: var(--accent); color: white; }
.musica-evo-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 1rem; }
@media (min-width: 640px) { .musica-evo-grid { grid-template-columns: repeat(4, 1fr); } }
.musica-evo-card { text-align: center; padding: 1.25rem 1rem; background: var(--card-bg); border: 1px solid var(--border); border-radius: 1rem; }
</style>

<section data-label="Cola Social" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">1. A Música antes da Linguagem: A Cola Social 🧬</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Porque é que os humanos fazem música? Cientistas e antropólogos acreditam que a música nasceu <strong>antes da própria linguagem falada</strong>. Não era entretenimento — era uma ferramenta de sobrevivência. Cantar ou dançar em grupo libertava oxitocina e endorfinas, fortalecendo os laços da tribo. Grupos mais unidos sobreviviam melhor.</p>

  <div class="musica-evo-grid mb-6">
    <div class="musica-evo-card">
      <div class="text-4xl mb-3">🤝</div>
      <h3 class="font-bold text-sm mb-1">Coesão Social</h3>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">Libertava oxitocina e endorfinas em grupo. Tribos mais unidas sobreviviam e protegiam-se melhor.</p>
    </div>
    <div class="musica-evo-card">
      <div class="text-4xl mb-3">🐾</div>
      <h3 class="font-bold text-sm mb-1">Afastar Predadores</h3>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">Sons rítmicos e coletivos serviam para assustar animais e marcar o território do grupo.</p>
    </div>
    <div class="musica-evo-card">
      <div class="text-4xl mb-3">❤️</div>
      <h3 class="font-bold text-sm mb-1">Sedução</h3>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">Como os pássaros cantam para atrair parceiros, a capacidade musical era sinal de saúde e inteligência.</p>
    </div>
    <div class="musica-evo-card">
      <div class="text-4xl mb-3">👶</div>
      <h3 class="font-bold text-sm mb-1">Cuidado dos Filhos</h3>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">As canções de embalar são universais em todas as culturas. A voz rítmica da mãe calma e sincroniza o bebé.</p>
    </div>
  </div>
</section>

<section data-label="Primeiro Instrumento" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">2. 43 000 Anos Atrás: O Primeiro Instrumento 🦴</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Os primeiros instrumentos não eram de metal nem de madeira trabalhada. Eram feitos de ossos de animais caçados. E o exemplo mais extraordinário que sobreviveu até hoje foi provavelmente criado por uma espécie que não era sequer a nossa.</p>

  <div class="musica-card mb-4" style="background:#1e293b;border-color:#334155;">
    <div class="text-3xl mb-3">🪈</div>
    <h3 class="font-bold text-base mb-2" style="color:#5eead4;">A Flauta de Divje Babe</h3>
    <p class="text-sm leading-relaxed mb-3" style="color:#cbd5e1;">Encontrada numa caverna na Eslovénia, esta flauta foi esculpida num <strong style="color:white;">fémur de urso das cavernas jovem</strong> há cerca de <strong style="color:white;">43 mil anos</strong>. É atribuída aos Neandertais — uma espécie diferente do Homo sapiens que habitou a Europa antes de nós.</p>
    <p class="text-sm leading-relaxed" style="color:#94a3b8;">O mais incrível: os furos no osso estão alinhados de forma que replica <strong style="color:#5eead4;">quatro notas da escala musical que usamos hoje</strong>. A nossa perceção musical é universal — e tem dezenas de milhar de anos.</p>
  </div>

  <div class="callout-sabias">
    <div class="callout-label">Sabias que?</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">Mesmo no meio da luta diária pela sobrevivência, o ser humano pré-histórico sentia a necessidade absoluta de criar arte. Isto sugere que a criatividade artística não é um luxo — é uma característica fundamental da nossa espécie.</p>
  </div>
</section>

<section data-label="Física do Som" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">3. A Física do Som: Frequência, Amplitude e Timbre 🔊</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Cientificamente, a música é apenas física aplicada. O som é uma <strong>onda mecânica</strong> que se propaga através de um meio como o ar. Três propriedades definem todo e qualquer som que alguma vez ouviste. Clica em cada uma para explorar.</p>

  <div class="flex flex-wrap gap-2 mb-4">
    <button class="musica-tab-btn active" data-tab="freq">Frequência</button>
    <button class="musica-tab-btn" data-tab="amp">Amplitude</button>
    <button class="musica-tab-btn" data-tab="timbre">Timbre</button>
  </div>

  <div id="musica-tab-panel" class="musica-card min-h-[180px]"></div>
</section>

<section data-label="Harmonia e Cérebro" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">4. O que o Teu Cérebro Faz com a Música 🧠</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Quando as ondas entram pelo teu ouvido, o <strong>tímpano</strong> transforma a vibração mecânica em impulsos elétricos. Esses impulsos viajam até ao cérebro, que faz algo extraordinário: analisa padrões matemáticos nas frequências.</p>

  <div class="grid md:grid-cols-2 gap-4 mb-6">
    <div class="musica-card">
      <div class="text-2xl mb-3">😌</div>
      <h3 class="font-bold text-base mb-2" style="color:var(--accent);">Harmonia (Consonância)</h3>
      <p class="text-sm leading-relaxed" style="color:#334155;">Quando frequências combinam de forma matematicamente simples — por exemplo, uma nota que vibra ao <strong>dobro</strong> da velocidade de outra (uma oitava) — o cérebro reconhece o padrão e liberta <strong>dopamina</strong>. O resultado é prazer imediato.</p>
    </div>
    <div class="musica-card" style="background:#1e293b;border-color:#334155;">
      <div class="text-2xl mb-3">😬</div>
      <h3 class="font-bold text-base mb-2" style="color:#f87171;">Dissonância</h3>
      <p class="text-sm leading-relaxed" style="color:#cbd5e1;">Quando as frequências chocam de forma <strong style="color:white;">caótica</strong>, o cérebro não encontra o padrão e interpreta isso como tensão. Os compositores usam a dissonância intencionalmente para criar suspense — e a resolução para a harmonia é catártica.</p>
    </div>
  </div>

  <div class="callout-sabias">
    <div class="callout-label">Sabias que?</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">A música ativa <strong>mais partes do cérebro do que qualquer outra atividade humana</strong>. Quando ouves a tua playlist favorita, disparam simultaneamente as zonas auditiva, visual, motora, emocional e de memória. É o equivalente a um fogo de artifício cerebral — tudo ao mesmo tempo.</p>
  </div>
</section>

<script>
(function () {
  const tabs = {
    freq: {
      emoji: '〰️',
      title: 'Frequência — O Tom',
      unit: 'Medida em Hertz (Hz)',
      body: 'Determina se um som é <strong>grave ou agudo</strong>. Se a onda vibrar poucas vezes por segundo, o som é grave (como um trovão ou um baixo); se vibrar muitas vezes por segundo, é agudo (como um apito ou um soprano). A nota Lá central num piano vibra a exatamente 440 Hz.',
      example: 'O ouvido humano saudável deteta entre 20 Hz e 20.000 Hz. Os elefantes comunicam abaixo dos 20 Hz (infrassons). Os morcegos usam acima dos 20.000 Hz (ultrassons) para se orientar.'
    },
    amp: {
      emoji: '📢',
      title: 'Amplitude — O Volume',
      unit: 'Medida em decibéis (dB)',
      body: 'Determina a <strong>força ou intensidade</strong> do som. Uma onda com grande amplitude move muito mais ar — o que o teu ouvido e o teu corpo sentem como um som mais alto. Exposição prolongada a sons acima de 85 dB pode causar perda de audição permanente.',
      example: 'Conversa normal: ~60 dB. Concerto de rock: ~110 dB. Motor a jacto a 30 metros: ~140 dB — limiar da dor física.'
    },
    timbre: {
      emoji: '🎻',
      title: 'Timbre — A Assinatura',
      unit: 'Qualitativo — não tem unidade numérica',
      body: 'É a <strong>"impressão digital" do som</strong> — a característica que permite distinguir uma guitarra de um piano mesmo que estejam a tocar exatamente a mesma nota ao mesmo volume. O timbre é criado pelas harmónicas: frequências adicionais que vibram com a nota principal, em proporções únicas para cada instrumento.',
      example: 'Quando um violino e uma flauta tocam Lá (440 Hz), produzem a mesma frequência fundamental. Mas as harmónicas são completamente diferentes — daí soarem tão distintos.'
    }
  };

  const panel = document.getElementById('musica-tab-panel');

  function showTab(key) {
    const t = tabs[key];
    panel.innerHTML = `
      <div class="flex items-start gap-4">
        <div class="text-4xl">${t.emoji}</div>
        <div class="flex-1">
          <h4 class="font-bold text-base mb-1" style="color:var(--accent);">${t.title}</h4>
          <p class="text-xs font-semibold mb-2" style="color:var(--muted);">${t.unit}</p>
          <p class="text-sm leading-relaxed mb-3" style="color:#334155;">${t.body}</p>
          <p class="text-xs leading-relaxed px-3 py-2 rounded-lg" style="background:var(--bg);color:var(--muted);">${t.example}</p>
        </div>
      </div>`;
    document.querySelectorAll('.musica-tab-btn').forEach(b => {
      b.classList.toggle('active', b.dataset.tab === key);
    });
  }

  document.querySelectorAll('.musica-tab-btn').forEach(btn => {
    btn.addEventListener('click', () => showTab(btn.dataset.tab));
  });

  showTab('freq');
}());
</script>
