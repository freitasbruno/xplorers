<?php $reflection_question = 'Se o investimento passivo em ETFs globais oferece menores custos, máxima diversificação e bate a esmagadora maioria dos gestores profissionais a longo prazo, porque é que tantas pessoas continuam a tentar a sorte a comprar ações individuais ou a seguir conselhos de "ganhos rápidos" na Internet?'; ?>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
.mfi-card { background: var(--card-bg); border: 1px solid var(--border); border-radius: 1rem; padding: 1.5rem; }
.mfi-tab { border: 2px solid var(--border); border-radius: 999px; padding: 0.4rem 1rem; font-size: 0.8rem; font-weight: 600; cursor: pointer; transition: all 0.2s ease; background: var(--bg); color: var(--text); }
.mfi-tab:hover { border-color: var(--accent); }
.mfi-tab.active { background: var(--accent); border-color: var(--accent); color: white; }
.mfi-panel { min-height: 140px; }
.mfi-fade { animation: mfiFade2 0.3s ease; }
@keyframes mfiFade2 { from { opacity: 0; transform: translateY(4px); } to { opacity: 1; transform: none; } }
.mfi-range { width: 100%; accent-color: var(--accent); }
.mfi-chart { max-width: 460px; margin: 0 auto; }
.mfi-basket-grid { display: grid; grid-template-columns: repeat(10, 1fr); gap: 4px; margin: 1rem 0; }
.mfi-egg { aspect-ratio: 1; border-radius: 50%; background: #fde68a; transition: background 0.2s ease, transform 0.2s ease; }
.mfi-egg.broken { background: #ef4444; transform: scale(0.7) rotate(15deg); }
.mfi-slider-row { display: grid; grid-template-columns: 1fr 2fr auto; align-items: center; gap: 0.6rem; margin-bottom: 0.7rem; font-size: 0.85rem; }
.mfi-alloc-total { font-weight: 700; text-align: center; margin-top: 0.5rem; }
</style>

<section data-label="Diversificação" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">1. Nunca Ponhas Todos os Ovos no Mesmo Cesto 🧺</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Se investires tudo numa única empresa, um escândalo ou má decisão pode fazer o teu investimento evaporar-se. Escolhe o número de empresas na tua carteira e vê o que acontece quando uma delas falha.</p>

  <div class="mfi-card">
    <div class="flex flex-wrap gap-2 mb-3" id="mfiBasketTabs">
      <button class="mfi-tab active" data-key="1">😱 1 empresa</button>
      <button class="mfi-tab" data-key="10">😬 10 empresas</button>
      <button class="mfi-tab" data-key="500">😌 500 empresas</button>
    </div>
    <div class="mfi-basket-grid" id="mfiBasketGrid"></div>
    <p class="text-sm leading-relaxed text-center" id="mfiBasketMsg" style="color:#334155;"></p>
  </div>
</section>

<section data-label="Tipos de Risco" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">2. Risco Específico vs. Risco de Mercado 🎯</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <div class="grid md:grid-cols-2 gap-4 mb-2">
    <div class="mfi-card">
      <div class="text-2xl mb-3">🏭</div>
      <h3 class="font-bold text-base mb-2" style="color:var(--accent);">Risco Específico</h3>
      <p class="text-sm leading-relaxed" style="color:#334155;">Exclusivo de uma empresa ou setor: uma fábrica arde, um CEO comete fraude. <strong>Elimina-se quase por completo com diversificação</strong> — a falência de 1 em 500 empresas pesa só 0,2% da carteira.</p>
    </div>
    <div class="mfi-card" style="background:#1e293b;border-color:#334155;">
      <div class="text-2xl mb-3">🌍</div>
      <h3 class="font-bold text-base mb-2" style="color:#5eead4;">Risco de Mercado</h3>
      <p class="text-sm leading-relaxed" style="color:#cbd5e1;">Afeta toda a economia global (pandemias, crises energéticas). <strong>Não se elimina</strong>, mas atravessa ciclos — a economia global tende a recuperar e expandir a longo prazo.</p>
    </div>
  </div>
</section>

<section data-label="Comissões" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">3. O Peso Escondido das Comissões 💸</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Dois jovens investem 100 €/mês durante 30 anos a um retorno bruto de 8% ao ano. Um paga 0,15% de comissão (ETF); o outro paga 2,15% (fundo de gestão ativa). Vê a diferença.</p>

  <div class="mfi-card">
    <div class="mfi-chart"><canvas id="mfiFeesChart"></canvas></div>
  </div>
  <div class="callout-sabias mt-4">
    <div class="callout-label">Ponto-chave</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">O Jovem B perde <strong>46 958 €</strong> (32,5% da sua riqueza potencial) só em comissões. Estudos SPIVA mostram que, em 15-20 anos, <strong>mais de 90%</strong> dos gestores ativos não batem o índice.</p>
  </div>
</section>

<section data-label="O que é ETF" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">4. O que é um ETF? 📊</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Um ETF replica automaticamente um índice de mercado. Compras uma unidade (30-100 €) e tornas-te dono microscópico de centenas de empresas em simultâneo.</p>

  <div class="flex flex-wrap gap-2 mb-4" id="mfiEtfTabs">
    <button class="mfi-tab active" data-key="sp500">🇺🇸 S&amp;P 500</button>
    <button class="mfi-tab" data-key="msci">🌐 MSCI World</button>
  </div>
  <div id="mfiEtfPanel" class="mfi-card mfi-panel"></div>
</section>

<section data-label="DCA" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">5. O Método DCA: Investir sem Stresse 📅</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Investir um montante fixo todos os meses, aconteça o que acontecer ao mercado. Quando o preço desce, compras mais unidades pelo mesmo dinheiro. Simula 4 meses de um ETF volátil:</p>

  <div class="mfi-card">
    <div class="mfi-chart"><canvas id="mfiDcaChart"></canvas></div>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-2 mt-4 text-center text-xs" id="mfiDcaStats"></div>
  </div>
</section>

<section data-label="Casos Reais" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">6. Casos Reais 💼</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <div class="mfi-card">
    <div class="text-2xl mb-3">🎲</div>
    <h3 class="font-bold text-base mb-2" style="color:var(--accent);">A Aposta de 1 Milhão de Dólares de Warren Buffett</h3>
    <p class="text-sm leading-relaxed" style="color:#334155;">Em 2007, Buffett apostou que um simples ETF do S&amp;P 500 bateria fundos ativos geridos por especialistas em 10 anos. Resultado: o S&amp;P 500 rendeu <strong>7,1%/ano</strong>; os fundos de elite apenas <strong>2,2%/ano</strong>. Buffett ganhou e doou o prémio para caridade.</p>
  </div>
</section>

<section data-label="Sabias que" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">7. Sabias que...? 💡</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <div class="callout-sabias mb-4">
    <div class="callout-label">Sabias que?</div>
    <p class="text-sm leading-relaxed" style="color:#334155;"><strong>John Bogle</strong> lançou o primeiro fundo de índice em 1976 — Wall Street chamou-lhe "a rota para a mediocridade". Hoje é considerado um dos maiores benfeitores das famílias comuns.</p>
  </div>
  <div class="callout-sabias">
    <div class="callout-label">Sabias que?</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">Entre 1990 e 2020, quem ficou fora do mercado apenas nos <strong>10 melhores dias</strong> da década viu a sua rentabilidade final cair para menos de metade.</p>
  </div>
</section>

<section data-label="Cabaz Global" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">8. Constrói o Teu "Cabaz Global" 👥</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Distribui um orçamento mensal simulado de 60 € pelos quatro blocos. O objetivo: um colapso num único setor não pode destruir o teu plano.</p>

  <div class="mfi-card">
    <div class="mfi-slider-row"><span>🌐 Ações Globais</span><input type="range" class="mfi-range" id="mfiAllocMsci" min="0" max="60" value="20"><strong id="mfiAllocMsciOut">20 €</strong></div>
    <div class="mfi-slider-row"><span>💻 Tecnologia</span><input type="range" class="mfi-range" id="mfiAllocTech" min="0" max="60" value="15"><strong id="mfiAllocTechOut">15 €</strong></div>
    <div class="mfi-slider-row"><span>🌱 ESG</span><input type="range" class="mfi-range" id="mfiAllocEsg" min="0" max="60" value="10"><strong id="mfiAllocEsgOut">10 €</strong></div>
    <div class="mfi-slider-row"><span>📜 Obrigações</span><input type="range" class="mfi-range" id="mfiAllocBonds" min="0" max="60" value="15"><strong id="mfiAllocBondsOut">15 €</strong></div>
    <div class="mfi-alloc-total" id="mfiAllocTotal">Total: 60 € / 60 €</div>
  </div>
</section>

<script>
(function () {
  function bindTabs(groupId, panelId, data, render) {
    var group = document.getElementById(groupId);
    var panel = document.getElementById(panelId);
    var btns = group.querySelectorAll('button');
    function show(key) {
      var out = render(data[key]);
      if (panel) {
        panel.innerHTML = out;
        panel.classList.remove('mfi-fade');
        void panel.offsetWidth;
        panel.classList.add('mfi-fade');
      }
      btns.forEach(function (b) { b.classList.toggle('active', b.dataset.key === key); });
    }
    btns.forEach(function (b) { b.addEventListener('click', function () { show(b.dataset.key); }); });
    show(btns[0].dataset.key);
  }
  function head(icon, title) { return '<h4 class="font-bold text-base mb-2" style="color:var(--accent);">' + icon + ' ' + title + '</h4>'; }
  function body(text) { return '<p class="text-sm leading-relaxed" style="color:#334155;">' + text + '</p>'; }

  /* 1. Cesto de ovos */
  var baskets = {
    1: { n: 1, broken: 1, msg: 'Com 1 empresa, uma falência destrói <strong>100%</strong> do teu investimento.' },
    10: { n: 10, broken: 1, msg: 'Com 10 empresas, uma falência custa <strong>10%</strong> da carteira — ainda dói.' },
    500: { n: 500, broken: 1, msg: 'Com 500 empresas, uma falência pesa apenas <strong>0,2%</strong> — um contratempo insignificante.' }
  };
  var basketGrid = document.getElementById('mfiBasketGrid');
  var basketMsg = document.getElementById('mfiBasketMsg');
  bindTabs('mfiBasketTabs', null, baskets, function (d) {
    var show = Math.min(d.n, 100);
    var html = '';
    for (var i = 0; i < show; i++) {
      html += '<div class="mfi-egg' + (i === 0 ? ' broken' : '') + '"></div>';
    }
    basketGrid.innerHTML = html;
    basketMsg.innerHTML = body(d.msg + (d.n > 100 ? ' (mostrando 100 de ' + d.n + ')' : ''));
    return '';
  });

  /* 3. Comissões */
  function fv(monthly, years, rate) {
    var months = years * 12, r = rate / 12, v = 0, out = [0];
    for (var m = 1; m <= months; m++) { v = v * (1 + r) + monthly; if (m % 12 === 0) out.push(Math.round(v)); }
    return out;
  }
  var etf = fv(100, 30, 0.0785);
  var fund = fv(100, 30, 0.0585);
  var years30 = []; for (var y = 0; y <= 30; y++) years30.push(y);
  new Chart(document.getElementById('mfiFeesChart').getContext('2d'), {
    type: 'line',
    data: {
      labels: years30,
      datasets: [
        { label: 'ETF (comissão 0,15%)', data: etf, borderColor: '#22c55e', backgroundColor: 'rgba(34,197,94,0.1)', tension: 0.2, pointRadius: 0 },
        { label: 'Fundo tradicional (comissão 2,15%)', data: fund, borderColor: '#ef4444', backgroundColor: 'rgba(239,68,68,0.1)', tension: 0.2, pointRadius: 0 }
      ]
    },
    options: {
      responsive: true,
      plugins: { legend: { position: 'bottom', labels: { font: { size: 11 } } }, tooltip: { callbacks: { label: function (c) { return ' ' + c.dataset.label + ': ' + c.parsed.y.toLocaleString('pt-PT') + ' €'; } } } },
      scales: { x: { title: { display: true, text: 'Anos' } }, y: { title: { display: true, text: 'Capital acumulado (€)' } } }
    }
  });

  /* 4. ETF */
  var etfs = {
    sp500: { icon: '🇺🇸', title: 'S&P 500', text: 'As <strong>500 maiores empresas</strong> cotadas dos EUA (Apple, Microsoft, Amazon...) — cerca de 80% do valor de todo o mercado acionista norte-americano.' },
    msci: { icon: '🌐', title: 'MSCI World', text: 'Mais de <strong>1 400 empresas</strong> de 23 países desenvolvidos — diversificação geográfica e setorial numa única compra.' }
  };
  bindTabs('mfiEtfTabs', 'mfiEtfPanel', etfs, function (d) { return head(d.icon, d.title) + body(d.text); });

  /* 5. DCA */
  var dcaData = [
    { month: 'Mês 1', price: 25, units: 2.0 },
    { month: 'Mês 2', price: 20, units: 2.5 },
    { month: 'Mês 3', price: 10, units: 5.0 },
    { month: 'Mês 4', price: 20, units: 2.5 }
  ];
  new Chart(document.getElementById('mfiDcaChart').getContext('2d'), {
    type: 'bar',
    data: {
      labels: dcaData.map(function (d) { return d.month; }),
      datasets: [
        { type: 'line', label: 'Preço (€)', data: dcaData.map(function (d) { return d.price; }), borderColor: '#f59e0b', yAxisID: 'y1', tension: 0.2 },
        { label: 'Unidades compradas', data: dcaData.map(function (d) { return d.units; }), backgroundColor: '#6366f1', yAxisID: 'y' }
      ]
    },
    options: {
      responsive: true,
      plugins: { legend: { position: 'bottom', labels: { font: { size: 11 } } } },
      scales: {
        y: { position: 'left', title: { display: true, text: 'Unidades' } },
        y1: { position: 'right', title: { display: true, text: 'Preço (€)' }, grid: { drawOnChartArea: false } }
      }
    }
  });
  document.getElementById('mfiDcaStats').innerHTML =
    '<div class="mfi-card"><strong>200 €</strong><br>Total investido</div>' +
    '<div class="mfi-card"><strong>12,0</strong><br>Unidades totais</div>' +
    '<div class="mfi-card"><strong>16,67 €</strong><br>Custo médio/unidade</div>' +
    '<div class="mfi-card" style="background:#dcfce7;"><strong>+20%</strong><br>Ganho final (240 €)</div>';

  /* 8. Alocação */
  var sliders = ['Msci', 'Tech', 'Esg', 'Bonds'];
  function updateAlloc() {
    var total = 0;
    sliders.forEach(function (key) {
      var el = document.getElementById('mfiAlloc' + key);
      var out = document.getElementById('mfiAlloc' + key + 'Out');
      out.textContent = el.value + ' €';
      total += parseInt(el.value, 10);
    });
    var totalOut = document.getElementById('mfiAllocTotal');
    totalOut.textContent = 'Total: ' + total + ' € / 60 €';
    totalOut.style.color = total === 60 ? '#22c55e' : (total > 60 ? '#ef4444' : 'var(--muted)');
  }
  sliders.forEach(function (key) {
    document.getElementById('mfiAlloc' + key).addEventListener('input', updateAlloc);
  });
  updateAlloc();
}());
</script>
