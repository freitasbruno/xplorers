<?php $reflection_question = 'O transístor é considerado por muitos a invenção mais importante do século XX. Concordas? Que outra invenção poderia ter tido um impacto tão profundo e tão silencioso na vida quotidiana de toda a humanidade?'; ?>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
.mainframe-card { background: var(--card-bg); border: 1px solid var(--border); border-radius: 1rem; padding: 1.5rem; }
.mainframe-vs { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; }
@media (max-width: 640px) { .mainframe-vs { grid-template-columns: 1fr; } }
.mainframe-stat { text-align: center; padding: 1.25rem; background: var(--card-bg); border: 1px solid var(--border); border-radius: 1rem; }
.mainframe-stat-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1rem; }
@media (max-width: 640px) { .mainframe-stat-grid { grid-template-columns: 1fr; } }
.moore-chart-wrap { position: relative; max-width: 400px; margin: 0 auto; height: 220px; }
</style>

<section data-label="A Guerra e os Gigantes" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">1. A II Guerra Mundial e o Nascimento dos Gigantes 🌍</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">A guerra não se travou apenas nos campos de batalha — travou-se também na matemática. Havia duas necessidades militares urgentes que nenhum ser humano conseguia resolver sozinho com rapidez suficiente.</p>

  <div class="mainframe-vs mb-5">
    <div class="mainframe-card">
      <div class="text-xs font-bold uppercase tracking-wide mb-2" style="color:#4338ca;">🇬🇧 Reino Unido — Colossus</div>
      <div class="font-bold text-sm mb-2 text-slate-900">Descodificar mensagens inimigas</div>
      <p class="text-sm leading-relaxed" style="color:#334155;">O Colossus foi criado para decifrar os códigos gerados pelas máquinas Lorenz do exército alemão. Foi o <strong>primeiro computador digital e eletrónico programável</strong> do mundo — mas foi mantido em segredo por décadas.</p>
    </div>
    <div class="mainframe-card" style="background:#1e293b;border-color:#334155;">
      <div class="text-xs font-bold uppercase tracking-wide mb-2" style="color:#5eead4;">🇺🇸 EUA — ENIAC</div>
      <div class="font-bold text-sm mb-2" style="color:white;">Calcular trajetórias de balística</div>
      <p class="text-sm leading-relaxed" style="color:#cbd5e1;">O ENIAC (*Electronic Numerical Integrator and Computer*) nasceu para calcular tabelas de artilharia. Totalmente eletrónico — sem engrenagens, sem válvulas mecânicas. Um marco histórico que definiria os próximos 80 anos.</p>
    </div>
  </div>

  <div class="mainframe-stat-grid">
    <div class="mainframe-stat">
      <div class="text-2xl font-black mb-1" style="color:var(--accent);">27 t</div>
      <div class="text-xs" style="color:var(--muted);">Peso do ENIAC</div>
    </div>
    <div class="mainframe-stat">
      <div class="text-2xl font-black mb-1" style="color:var(--accent);">160 m²</div>
      <div class="text-xs" style="color:var(--muted);">Área ocupada</div>
    </div>
    <div class="mainframe-stat">
      <div class="text-2xl font-black mb-1" style="color:var(--accent);">5.000</div>
      <div class="text-xs" style="color:var(--muted);">Somas por segundo</div>
    </div>
  </div>
</section>

<section data-label="Válvulas vs Transístores" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">2. O Problema da Escala: Válvulas vs. Transístores ⚡</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <div class="mainframe-vs mb-5">
    <div class="mainframe-card">
      <div class="text-3xl mb-3">💡</div>
      <div class="font-bold text-sm mb-2 text-slate-900">Válvulas Termiónicas</div>
      <p class="text-sm leading-relaxed mb-3" style="color:#334155;">Semelhantes a lâmpadas de vidro. Faziam o mesmo que os transístores — controlar o fluxo de eletricidade — mas eram volumosas e frágeis.</p>
      <ul class="space-y-1.5">
        <li class="flex items-center gap-2 text-xs" style="color:#ef4444;"><span>❌</span> Aqueciam imenso</li>
        <li class="flex items-center gap-2 text-xs" style="color:#ef4444;"><span>❌</span> Queimavam com frequência</li>
        <li class="flex items-center gap-2 text-xs" style="color:#ef4444;"><span>❌</span> Do tamanho de um polegar</li>
        <li class="flex items-center gap-2 text-xs" style="color:#ef4444;"><span>❌</span> O ENIAC tinha 18.000 delas</li>
      </ul>
    </div>
    <div class="mainframe-card" style="background:#f0fdf4;border-color:#bbf7d0;">
      <div class="text-3xl mb-3">⚡</div>
      <div class="font-bold text-sm mb-2 text-slate-900">Transístor (1947)</div>
      <p class="text-sm leading-relaxed mb-3" style="color:#334155;">Inventado nos Laboratórios Bell. Faz o mesmo que a válvula — mas é radicalmente diferente em tudo o resto.</p>
      <ul class="space-y-1.5">
        <li class="flex items-center gap-2 text-xs" style="color:#16a34a;"><span>✅</span> Minúsculo e fiável</li>
        <li class="flex items-center gap-2 text-xs" style="color:#16a34a;"><span>✅</span> Não aquece</li>
        <li class="flex items-center gap-2 text-xs" style="color:#16a34a;"><span>✅</span> Muito mais rápido</li>
        <li class="flex items-center gap-2 text-xs" style="color:#16a34a;"><span>✅</span> Possivelmente a invenção mais importante do séc. XX</li>
      </ul>
    </div>
  </div>

  <div class="callout-sabias">
    <div class="callout-label">Sabias que?</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">O teu smartphone tem mais de <strong>15 mil milhões de transístores</strong> num chip do tamanho de uma unha. Cada um é cerca de 1.000 vezes mais pequeno do que a largura de um cabelo humano.</p>
  </div>
</section>

<section data-label="Lei de Moore" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">3. A Lei de Moore: O Crescimento Exponencial 📈</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">Em 1965, Gordon Moore (co-fundador da Intel) fez uma observação simples que se tornou a lei não escrita da indústria tecnológica: <strong>o número de transístores num chip duplica aproximadamente a cada dois anos — sem aumentar o preço.</strong></p>

  <div class="moore-chart-wrap mb-5">
    <canvas id="mooreChart"></canvas>
  </div>

  <div class="mainframe-card" style="border-color:var(--accent);border-left-width:4px;border-radius:0 1rem 1rem 0;">
    <div class="text-xs font-bold uppercase tracking-wide mb-2" style="color:var(--accent);">O que isto significa na prática</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">O computador que levou o homem à Lua em 1969 tinha menos poder de processamento do que uma calculadora de bolso atual. O teu smartphone é <strong>milhares de vezes mais potente</strong> que esse computador — e cabe no bolso das calças.</p>
  </div>
</section>

<section data-label="O Mainframe" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">4. O que era um Mainframe? 🏢</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">Antes do computador pessoal, uma empresa, um banco ou uma universidade tinha <em>um único</em> computador central — o Mainframe. Era o "cérebro" da organização inteira.</p>

  <div class="mainframe-vs mb-5">
    <div class="mainframe-card">
      <div class="font-bold text-sm mb-3" style="color:var(--muted);">ENTÃO — Era dos Mainframes</div>
      <ul class="space-y-2 text-sm" style="color:#334155;">
        <li>🏢 Uma máquina por organização</li>
        <li>⌨️ Utilizadores acediam via <strong>terminais</strong> (só monitor + teclado)</li>
        <li>👨‍💼 Gerida por técnicos especializados</li>
        <li>🔒 Acesso restrito e controlado</li>
        <li>💰 Custo: milhões de dólares</li>
      </ul>
    </div>
    <div class="mainframe-card" style="background:#f0fdf4;border-color:#bbf7d0;">
      <div class="font-bold text-sm mb-3" style="color:#15803d;">HOJE — Era do PC</div>
      <ul class="space-y-2 text-sm" style="color:#334155;">
        <li>💻 Um computador por pessoa (ou mais)</li>
        <li>🖥️ Ecrã, teclado e processador numa só máquina</li>
        <li>👤 Qualquer pessoa sabe usar</li>
        <li>🌐 Ligado ao mundo inteiro</li>
        <li>💸 Custo: algumas centenas de euros</li>
      </ul>
    </div>
  </div>
</section>

<section data-label="Sabias que?" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">5. Sabias que...? 💡</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <div class="space-y-4">
    <div class="callout-sabias">
      <div class="callout-label">O primeiro "Bug" da história</div>
      <p class="text-sm leading-relaxed" style="color:#334155;">Em 1947, Grace Hopper — uma das grandes pioneiras da computação — encontrou uma <strong>traça real</strong> presa dentro dos circuitos de um computador Mark II, causando uma avaria. Ela colou o inseto no registo de bordo com a nota "primeiro bug encontrado". Daí em diante, "bug" passou a significar qualquer erro de software — e "debugging" o ato de o corrigir.</p>
    </div>

    <div class="callout-sabias">
      <div class="callout-label">ENIAC: O coloso de Filadélfia</div>
      <p class="text-sm leading-relaxed" style="color:#334155;">O ENIAC consumia tanta eletricidade (150 kilowatts) que, segundo a lenda, as luzes da cidade de Filadélfia piscavam quando era ligado. Conseguia fazer <strong>5.000 somas por segundo</strong>. Hoje, um processador comum faz <strong>mil milhões</strong> de operações por segundo — 200.000 vezes mais rápido.</p>
    </div>

    <div class="callout-sabias">
      <div class="callout-label">A tua calculadora científica</div>
      <p class="text-sm leading-relaxed" style="color:#334155;">A calculadora científica que tens na mochila tem <strong>mais memória e mais poder de processamento</strong> do que o ENIAC inteiro — a máquina que pesava 27 toneladas e ocupava uma sala de 160 metros quadrados.</p>
    </div>
  </div>
</section>

<script>
(function () {
  const ctx = document.getElementById('mooreChart').getContext('2d');
  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['1971\nIntel 4004', '1980\nIntel 8088', '1993\nPentium', '2006\nCore 2', '2015\nCore i7', '2023\nRyzen'],
      datasets: [{
        label: 'Transístores (milhões)',
        data: [0.0023, 0.029, 3.1, 291, 1900, 25000],
        backgroundColor: [
          'rgba(244,63,94,0.7)',
          'rgba(244,63,94,0.75)',
          'rgba(244,63,94,0.8)',
          'rgba(244,63,94,0.85)',
          'rgba(244,63,94,0.9)',
          'rgba(244,63,94,1)'
        ],
        borderRadius: 6,
        borderSkipped: false
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: { display: false },
        tooltip: {
          callbacks: {
            label: ctx => {
              const v = ctx.parsed.y;
              return v < 1 ? ` ${(v * 1000).toFixed(0)} mil transístores` : ` ${v.toLocaleString('pt-PT')} M transístores`;
            }
          }
        }
      },
      scales: {
        y: {
          type: 'logarithmic',
          ticks: {
            font: { size: 10, family: 'Inter, sans-serif' },
            callback: v => v >= 1000 ? `${v/1000}B` : v >= 1 ? `${v}M` : `${v*1000}K`
          },
          grid: { color: 'rgba(0,0,0,0.06)' }
        },
        x: {
          ticks: { font: { size: 10, family: 'Inter, sans-serif' } },
          grid: { display: false }
        }
      }
    }
  });
}());
</script>
