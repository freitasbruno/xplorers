<?php $reflection_question = 'O microfone e a eletricidade estragaram a música pura ou democratizaram-na, permitindo que novas formas de expressão e novos artistas fossem ouvidos?'; ?>

<style>
.amp-card { background: var(--card-bg); border: 1px solid var(--border); border-radius: 1rem; padding: 1.5rem; }
.amp-timeline { position: relative; padding-left: 2rem; }
.amp-timeline::before { content: ''; position: absolute; left: 0.5rem; top: 0; bottom: 0; width: 2px; background: var(--border); }
.amp-timeline-item { position: relative; margin-bottom: 1.75rem; }
.amp-timeline-item::before { content: ''; position: absolute; left: -1.625rem; top: 0.35rem; width: 0.75rem; height: 0.75rem; border-radius: 50%; background: var(--accent); border: 2px solid var(--bg); }
.amp-expand-btn { width: 100%; text-align: left; background: var(--card-bg); border: 1px solid var(--border); border-radius: 0.75rem; padding: 1rem 1.25rem; cursor: pointer; display: flex; justify-content: space-between; align-items: center; font-weight: 600; font-size: 0.9rem; transition: border-color 0.2s; }
.amp-expand-btn:hover { border-color: var(--accent); }
.amp-expand-content { overflow: hidden; max-height: 0; transition: max-height 0.35s ease; }
.amp-expand-content.open { max-height: 320px; }
</style>

<section data-label="Linha do Tempo" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">1. Da Voz ao Estádio: 1000 Anos de Amplificação 📜</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Se vivesses em 1700, para ouvires música ou sabias tocar ou pagavas a músicos ao vivo. A música era efémera — desaparecia assim que a última nota era tocada. Dois grandes inventos mudaram isto para sempre.</p>

  <div class="amp-timeline mb-6">
    <div class="amp-timeline-item">
      <p class="text-xs font-bold mb-1" style="color:var(--accent);">Século XI</p>
      <p class="font-semibold text-sm mb-1">Guido d'Arezzo inventa a partitura</p>
      <p class="text-sm" style="color:var(--muted);">Um monge italiano cria o sistema Dó-Ré-Mi e as linhas da pauta. Pela primeira vez, a música pode ser "escrita" e preservada além da memória humana.</p>
    </div>
    <div class="amp-timeline-item">
      <p class="text-xs font-bold mb-1" style="color:var(--accent);">Século XV</p>
      <p class="font-semibold text-sm mb-1">Gutenberg: partituras em massa</p>
      <p class="text-sm" style="color:var(--muted);">Com a prensa de tipos móveis, as partituras são impressas aos milhares. Uma música composta em Itália toca-se em Portugal exatamente da mesma forma — sem que os músicos se conheçam.</p>
    </div>
    <div class="amp-timeline-item">
      <p class="text-xs font-bold mb-1" style="color:var(--accent);">1877</p>
      <p class="font-semibold text-sm mb-1">Edison inventa o fonógrafo</p>
      <p class="text-sm" style="color:var(--muted);">Pela primeira vez na história, o som pode ser gravado e reproduzido. Qualquer pessoa pode ouvir uma orquestra sem sair de casa.</p>
    </div>
    <div class="amp-timeline-item">
      <p class="text-xs font-bold mb-1" style="color:var(--accent);">Anos 1930–40</p>
      <p class="font-semibold text-sm mb-1">A guitarra elétrica transforma o som</p>
      <p class="text-sm" style="color:var(--muted);">Pickups magnéticos convertem vibrações em sinais elétricos. A distorção acidental dá origem ao Rock 'n' Roll e a uma cultura juvenil global.</p>
    </div>
    <div class="amp-timeline-item">
      <p class="text-xs font-bold mb-1" style="color:var(--accent);">Anos 1960–70</p>
      <p class="font-semibold text-sm mb-1">O sintetizador cria sons que nunca existiram</p>
      <p class="text-sm" style="color:var(--muted);">Osciladores elétricos geram timbres novos. A música eletrónica, o pop moderno e as bandas sonoras de ficção científica nascem.</p>
    </div>
  </div>
</section>

<section data-label="Como Funcionam" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">2. Como Funciona Cada Tecnologia 🔧</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <div class="flex flex-col gap-3 mb-4" id="amp-accordion">
    <div>
      <button class="amp-expand-btn">
        <span>🎤 Microfones e Amplificação</span>
        <span class="amp-chevron text-lg" style="color:var(--accent);">+</span>
      </button>
      <div class="amp-expand-content">
        <div class="px-5 pt-3 pb-4 text-sm leading-relaxed" style="color:#334155;">
          Antes do século XX, cantores de ópera tinham de projetar a voz com força brutal para ser ouvidos no fundo do teatro. Com a <strong>indução eletromagnética</strong>, os microfones convertem as vibrações do ar em sinais elétricos. Amplificadores aumentam esses sinais milhares de vezes antes de os enviar para colunas de som. Resultado: um sussurro pode preencher um estádio com 50 mil pessoas.
        </div>
      </div>
    </div>
    <div>
      <button class="amp-expand-btn">
        <span>🎸 A Guitarra Elétrica</span>
        <span class="amp-chevron text-lg" style="color:var(--accent);">+</span>
      </button>
      <div class="amp-expand-content">
        <div class="px-5 pt-3 pb-4 text-sm leading-relaxed" style="color:#334155;">
          Usa <strong>pickups magnéticos</strong> — bobinas de fio enroladas em torno de ímanes — posicionados sob as cordas metálicas. Quando uma corda vibra, perturba o campo magnético e gera uma corrente elétrica oscilante enviada para o amplificador. A <strong>distorção</strong> (originalmente um defeito de amplificadores saturados) tornou-se o som definidor do Rock. A Fender Telecaster (1951) foi a primeira a ser produzida em massa — pelo seu inventor Leo Fender, que nem sabia tocar guitarra.
        </div>
      </div>
    </div>
    <div>
      <button class="amp-expand-btn">
        <span>🎹 O Sintetizador</span>
        <span class="amp-chevron text-lg" style="color:var(--accent);">+</span>
      </button>
      <div class="amp-expand-content">
        <div class="px-5 pt-3 pb-4 text-sm leading-relaxed" style="color:#334155;">
          Ao contrário de qualquer instrumento anterior, o sintetizador <strong>não parte de um som real</strong>. Usa <strong>osciladores elétricos</strong> que geram ondas puras (sinusoidal, quadrada, dente de serra). Essas ondas são moldadas por filtros que cortam ou amplificam frequências específicas, criando timbres que nunca existiram na natureza. Bob Moog popularizou-o nos anos 1960, abrindo as portas à música eletrónica, ao pop moderno e às bandas sonoras de ficção científica.
        </div>
      </div>
    </div>
  </div>
</section>

<section data-label="Momentos Históricos" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">3. Dois Momentos que Mudaram a Música 🏟️</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <div class="grid md:grid-cols-2 gap-4 mb-6">
    <div class="amp-card">
      <div class="text-2xl mb-2">🎪</div>
      <h3 class="font-bold text-sm mb-2" style="color:var(--accent);">Beatles no Shea Stadium — 1964</h3>
      <p class="text-sm leading-relaxed" style="color:#334155;">55 mil pessoas. O sistema de som era o do campo de basebol — desenhado para anúncios, não para música. O barulho dos gritos das fãs abafou completamente a banda. Os próprios Beatles não se conseguiam ouvir em palco. Este fiasco forçou a indústria a desenvolver sistemas PA (Public Address) específicos para concertos de grande escala.</p>
    </div>
    <div class="amp-card" style="background:#1e293b;border-color:#334155;">
      <div class="text-2xl mb-2">🎧</div>
      <h3 class="font-bold text-sm mb-2" style="color:#5eead4;">Nascimento do Hip-Hop — Bronx, anos 1970</h3>
      <p class="text-sm leading-relaxed" style="color:#cbd5e1;">Sem dinheiro para instrumentos ou estúdios, os DJs do Bronx transformaram o gira-discos num instrumento. Ao isolar os <em>breaks</em> (secções rítmicas de discos antigos) e repeti-los com dois gira-discos sincronizados, criaram a base rítmica para os MCs. Nasceu um novo género a partir do engenho e da tecnologia acessível.</p>
    </div>
  </div>

  <div class="callout-sabias">
    <div class="callout-label">Sabias que?</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">O sistema de notas "Dó-Ré-Mi" foi criado por Guido d'Arezzo a partir das primeiras sílabas de cada verso do <em>Hino a São João Batista</em>, em latim: <em>Ut, Resonare, Mira, Famuli, Solve, Labii</em>. "Ut" foi mais tarde mudado para "Dó" por ser mais fácil de cantar na aula de música.</p>
  </div>
</section>

<script>
(function () {
  document.querySelectorAll('#amp-accordion .amp-expand-btn').forEach(btn => {
    btn.addEventListener('click', function () {
      const content = this.nextElementSibling;
      const chevron = this.querySelector('.amp-chevron');
      const isOpen = content.classList.contains('open');
      document.querySelectorAll('#amp-accordion .amp-expand-content').forEach(c => c.classList.remove('open'));
      document.querySelectorAll('#amp-accordion .amp-chevron').forEach(c => c.textContent = '+');
      if (!isOpen) {
        content.classList.add('open');
        chevron.textContent = '−';
      }
    });
  });
}());
</script>
