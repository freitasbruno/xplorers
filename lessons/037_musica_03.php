<?php $reflection_question = 'Se uma máquina conseguir replicar perfeitamente a matemática de uma melodia emotiva e enganar o nosso cérebro, ela passa a ter o mesmo valor artístico que o trabalho de um músico humano?'; ?>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<style>
.digital-card { background: var(--card-bg); border: 1px solid var(--border); border-radius: 1rem; padding: 1.5rem; }
.digital-expand-btn { width: 100%; text-align: left; background: var(--card-bg); border: 1px solid var(--border); border-radius: 0.75rem; padding: 1rem 1.25rem; cursor: pointer; display: flex; justify-content: space-between; align-items: center; font-weight: 600; font-size: 0.9rem; transition: border-color 0.2s; }
.digital-expand-btn:hover { border-color: var(--accent); }
.digital-expand-content { overflow: hidden; max-height: 0; transition: max-height 0.35s ease; }
.digital-expand-content.open { max-height: 320px; }
.digital-algo-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 1rem; }
@media (min-width: 640px) { .digital-algo-grid { grid-template-columns: repeat(3, 1fr); } }
.digital-algo-card { text-align: center; padding: 1rem; background: var(--card-bg); border: 1px solid var(--border); border-radius: 1rem; }
.digital-chart-wrap { position: relative; max-width: 500px; margin: 0 auto; }
</style>

<section data-label="Vinil vs Digital" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">1. A Grande Bifurcação: Analógico vs Digital 💿</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Para perceber como tens dezenas de milhões de músicas no telemóvel, precisas de entender como o som é capturado — e como o digital mudou tudo em relação ao analógico.</p>

  <div class="grid md:grid-cols-2 gap-4 mb-6">
    <div class="digital-card">
      <div class="text-2xl mb-2">🎵</div>
      <h3 class="font-bold text-sm mb-2" style="color:var(--accent);">Gravação Analógica (Vinil)</h3>
      <p class="text-sm leading-relaxed mb-3" style="color:#334155;">A onda sonora faz uma agulha talhar <strong>sulcos físicos contínuos</strong> no plástico. A onda fica "impressa" diretamente no material. Para reproduzir, a agulha percorre esses sulcos e recria a vibração mecânica original.</p>
      <p class="text-xs px-3 py-2 rounded-lg" style="background:var(--bg);color:var(--muted);">Vantagem: cópia fiel e contínua. Desvantagem: degrada com o uso e é impossível de comprimir ou transmitir pela internet.</p>
    </div>
    <div class="digital-card" style="background:#1e293b;border-color:#334155;">
      <div class="text-2xl mb-2">🔢</div>
      <h3 class="font-bold text-sm mb-2" style="color:#5eead4;">Gravação Digital</h3>
      <p class="text-sm leading-relaxed mb-3" style="color:#cbd5e1;">O computador analisa a onda sonora <strong>44.100 vezes por segundo</strong> (no formato CD) e converte a altura de cada "fatia" em código binário. Para reproduzir, junta-se todas as fatias e reconstrói-se a onda.</p>
      <p class="text-xs px-3 py-2 rounded-lg" style="background:#0f172a;color:#64748b;">Vantagem: cópia perfeita, sem degradação. Pode ser copiada e transmitida infinitamente.</p>
    </div>
  </div>
</section>

<section data-label="A Revolução MP3" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">2. O MP3: Caber o Mundo Num Bolso 📱</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">O ficheiro digital original (WAV) era enorme: um álbum de 74 minutos ocupava ~650 MB. Nos anos 1990, isso era inviável para a internet. A solução foi usar a <strong>psicoacústica</strong> — a ciência do que o ouvido humano realmente consegue ouvir.</p>

  <div class="digital-chart-wrap mb-4">
    <canvas id="digitalMp3Chart"></canvas>
  </div>

  <div class="callout-sabias">
    <div class="callout-label">Como funciona o MP3</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">O MP3 remove as frequências que o ouvido humano <strong>não consegue detetar</strong> e os sons mascarados por outros mais fortes. Resultado: 90% de redução no tamanho sem que a maioria das pessoas note diferença de qualidade. Esta compressão tornou possível o Napster, o iTunes e o Spotify.</p>
  </div>
</section>

<section data-label="Algoritmos" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">3. O Algoritmo que Escolhe o que Ouves 🤖</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Hoje, o consumo de música é ditado por inteligência artificial. Plataformas como o Spotify analisam o teu comportamento em detalhe para criar a tua "bolha musical" personalizada.</p>

  <div class="digital-algo-grid mb-6">
    <div class="digital-algo-card">
      <div class="text-3xl mb-2">⏱️</div>
      <h3 class="font-bold text-xs mb-1">Tempo de Escuta</h3>
      <p class="text-xs" style="color:var(--muted);">Se passas uma música nos primeiros 5 segundos, o algoritmo regista — e ajusta as recomendações.</p>
    </div>
    <div class="digital-algo-card">
      <div class="text-3xl mb-2">🕐</div>
      <h3 class="font-bold text-xs mb-1">Hora do Dia</h3>
      <p class="text-xs" style="color:var(--muted);">Músicas calmas ao deitar, energéticas a treinar — o algoritmo aprende os teus padrões horários.</p>
    </div>
    <div class="digital-algo-card">
      <div class="text-3xl mb-2">👥</div>
      <h3 class="font-bold text-xs mb-1">Filtragem Colaborativa</h3>
      <p class="text-xs" style="color:var(--muted);">Sugere músicas ouvidas por pessoas com gostos idênticos aos teus — mesmo que nunca as tenhas ouvido.</p>
    </div>
    <div class="digital-algo-card">
      <div class="text-3xl mb-2">🎼</div>
      <h3 class="font-bold text-xs mb-1">Análise Musical</h3>
      <p class="text-xs" style="color:var(--muted);">Analisa o tempo, a tonalidade e a energia de cada faixa para sugerir músicas com características semelhantes.</p>
    </div>
    <div class="digital-algo-card">
      <div class="text-3xl mb-2">🔁</div>
      <h3 class="font-bold text-xs mb-1">Repetições</h3>
      <p class="text-xs" style="color:var(--muted);">Músicas que ouves em repeat são marcadas como favoritas fortes e influenciam toda a tua playlist.</p>
    </div>
    <div class="digital-algo-card" style="background:#1e293b;border-color:#334155;">
      <div class="text-3xl mb-2">🫧</div>
      <h3 class="font-bold text-xs mb-1" style="color:#5eead4;">A Bolha Musical</h3>
      <p class="text-xs" style="color:#94a3b8;">O risco: o algoritmo pode limitar a tua exposição a músicas e artistas fora dos teus gostos habituais.</p>
    </div>
  </div>
</section>

<section data-label="IA e o Futuro" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">4. A IA que Compõe e os Casos que Mudaram Tudo 🎵</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">A Inteligência Artificial já não serve apenas para recomendar música — ela cria-a. Modelos generativos analisam milhões de partituras para aprender as regras da harmonia e depois geram faixas completas, incluindo vozes clonadas, a partir de um simples comando de texto.</p>

  <div class="flex flex-col gap-3 mb-6" id="digital-accordion">
    <div>
      <button class="digital-expand-btn">
        <span>💿 O Caso Napster (1999)</span>
        <span class="digital-chevron text-lg" style="color:var(--accent);">+</span>
      </button>
      <div class="digital-expand-content">
        <div class="px-5 pt-3 pb-4 text-sm leading-relaxed" style="color:#334155;">
          Dois estudantes universitários criaram o Napster — um programa que permitia partilhar ficheiros MP3 gratuitamente com qualquer pessoa no mundo. Em meses, milhões de pessoas deixaram de comprar CDs. A indústria musical entrou em colapso e processou-o. Mas o Napster provou algo fundamental: <strong>as pessoas não queriam o objeto-CD; queriam acesso fácil à música digital</strong>. Esse insight abriu caminho para o iTunes e depois para o Spotify.
        </div>
      </div>
    </div>
    <div>
      <button class="digital-expand-btn">
        <span>🤖 "Heart on My Sleeve" — IA clona artistas (2023)</span>
        <span class="digital-chevron text-lg" style="color:var(--accent);">+</span>
      </button>
      <div class="digital-expand-content">
        <div class="px-5 pt-3 pb-4 text-sm leading-relaxed" style="color:#334155;">
          Um produtor anónimo usou IA para clonar na perfeição as vozes de Drake e The Weeknd e lançou a música no TikTok. Acumulou milhões de audições antes de ser retirada por questões de direitos de autor. O caso gerou um debate jurídico mundial: <strong>a voz de um artista é propriedade sua? Pode ser replicada sem autorização?</strong> As leis de direitos de autor ainda não têm resposta definitiva para este cenário.
        </div>
      </div>
    </div>
  </div>

  <div class="callout-sabias">
    <div class="callout-label">Sabias que?</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">O <strong>Auto-Tune</strong> foi criado por um engenheiro geofísico para analisar dados sísmicos e detetar petróleo debaixo da terra. Ao testar o mesmo algoritmo matemático em vozes humanas, descobriu-se que ele podia alinhar notas desafinadas instantaneamente. Hoje está presente em praticamente toda a música pop do mundo.</p>
  </div>
</section>

<script>
(function () {
  const ctx = document.getElementById('digitalMp3Chart').getContext('2d');
  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['WAV (CD original)', 'Streaming (OGG)', 'MP3 320kbps', 'MP3 128kbps'],
      datasets: [{
        label: 'Tamanho relativo do ficheiro (%)',
        data: [100, 11, 23, 9],
        backgroundColor: ['#e2e8f0', '#818cf8', '#fb923c', '#f43f5e'],
        borderColor: ['#cbd5e1', '#6366f1', '#ea580c', '#e11d48'],
        borderWidth: 2,
        borderRadius: 6
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: { display: false },
        tooltip: { callbacks: { label: ctx => ` ${ctx.parsed.y}% do tamanho original` } },
        title: {
          display: true,
          text: 'Compressão de áudio: WAV vs formatos comprimidos',
          font: { size: 13, family: 'Inter, sans-serif' },
          color: '#334155',
          padding: { bottom: 12 }
        }
      },
      scales: {
        y: {
          beginAtZero: true,
          max: 115,
          ticks: { callback: v => v + '%' },
          grid: { color: '#f1f5f9' }
        },
        x: { grid: { display: false } }
      }
    }
  });

  document.querySelectorAll('#digital-accordion .digital-expand-btn').forEach(btn => {
    btn.addEventListener('click', function () {
      const content = this.nextElementSibling;
      const chevron = this.querySelector('.digital-chevron');
      const isOpen = content.classList.contains('open');
      document.querySelectorAll('#digital-accordion .digital-expand-content').forEach(c => c.classList.remove('open'));
      document.querySelectorAll('#digital-accordion .digital-chevron').forEach(c => c.textContent = '+');
      if (!isOpen) {
        content.classList.add('open');
        chevron.textContent = '−';
      }
    });
  });
}());
</script>
