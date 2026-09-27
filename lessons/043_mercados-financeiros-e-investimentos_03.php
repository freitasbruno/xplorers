<?php $reflection_question = 'A tecnologia da Blockchain foi desenhada para criar um sistema financeiro puramente matemático, onde não é preciso confiar em governos ou bancos. No entanto, perante a proliferação diária de fraudes digitais, esquemas em pirâmide e roubos informáticos, será que a ausência de regras e supervisão protege realmente o cidadão comum ou deixa-o desamparado nas mãos dos mais fortes?'; ?>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
.mfi-card { background: var(--card-bg); border: 1px solid var(--border); border-radius: 1rem; padding: 1.5rem; }
.mfi-tab { border: 2px solid var(--border); border-radius: 999px; padding: 0.4rem 1rem; font-size: 0.8rem; font-weight: 600; cursor: pointer; transition: all 0.2s ease; background: var(--bg); color: var(--text); }
.mfi-tab:hover { border-color: var(--accent); }
.mfi-tab.active { background: var(--accent); border-color: var(--accent); color: white; }
.mfi-panel { min-height: 140px; }
.mfi-fade { animation: mfiFade3 0.3s ease; }
@keyframes mfiFade3 { from { opacity: 0; transform: translateY(4px); } to { opacity: 1; transform: none; } }
.mfi-range { width: 100%; accent-color: var(--accent); }
.mfi-chart { max-width: 460px; margin: 0 auto; }
.mfi-ledger { display: grid; grid-template-columns: repeat(auto-fill, minmax(38px, 1fr)); gap: 4px; margin: 1rem 0; }
.mfi-book { aspect-ratio: 3/4; border-radius: 0.3rem; background: var(--bg); border: 1px solid var(--border); display: flex; align-items: center; justify-content: center; font-size: 1rem; transition: all 0.2s ease; }
.mfi-book.fraud { background: #fee2e2; border-color: #ef4444; }
.mfi-fraud-card { border: 1px solid var(--border); border-radius: 0.8rem; background: var(--card-bg); margin-bottom: 0.6rem; }
.mfi-fraud-card summary { cursor: pointer; padding: 0.8rem 1rem; font-weight: 700; font-size: 0.85rem; list-style: none; }
.mfi-fraud-card summary::-webkit-details-marker { display: none; }
.mfi-fraud-card summary::after { content: '+'; float: right; color: var(--accent); font-weight: 700; }
.mfi-fraud-card[open] summary::after { content: '−'; }
.mfi-fraud-card p { padding: 0 1rem 1rem; font-size: 0.82rem; line-height: 1.6; color: #334155; }
</style>

<section data-label="Blockchain" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">1. O Caderno de Turma Incorruptível ⛓️</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Num banco tradicional, confias numa única base de dados central. Numa blockchain, <strong>todos têm uma cópia idêntica do mesmo caderno</strong>. Clica em "Tentar fraude" e vê o que acontece quando alguém tenta alterar apenas a sua cópia.</p>

  <div class="mfi-card">
    <div class="mfi-ledger" id="mfiLedger"></div>
    <div class="flex flex-wrap gap-2 items-center">
      <button class="mfi-tab active" id="mfiFraudBtn">🖊️ Tentar fraude num caderno</button>
      <button class="mfi-tab" id="mfiFraudReset">🔄 Repor</button>
    </div>
    <p class="text-sm leading-relaxed mt-3" id="mfiFraudMsg" style="color:#334155;">30 alunos, 30 cópias idênticas do mesmo caderno. Todos têm de concordar para uma transação ser válida.</p>
  </div>
</section>

<section data-label="Bitcoin e Ethereum" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">2. Bitcoin, Ethereum e Contratos Inteligentes 🪙</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <div class="flex flex-wrap gap-2 mb-4" id="mfiCryptoTabs">
    <button class="mfi-tab active" data-key="bitcoin">₿ Bitcoin</button>
    <button class="mfi-tab" data-key="ethereum">Ξ Ethereum</button>
  </div>
  <div id="mfiCryptoPanel" class="mfi-card mfi-panel"></div>

  <div class="mfi-card mt-4">
    <h3 class="font-bold text-sm mb-2">O Halving: a escassez programada</h3>
    <p class="text-xs mb-3" style="color:var(--muted);">A cada ~4 anos, a criação de novos bitcoins cai para metade. Avança no tempo:</p>
    <input type="range" class="mfi-range" id="mfiHalvingRange" min="0" max="4" step="1" value="0">
    <div class="flex justify-between text-xs mt-2" style="color:var(--muted);"><span>2009</span><span>2029</span></div>
    <p class="text-sm text-center mt-2" id="mfiHalvingOut" style="color:#334155;"></p>
  </div>
</section>

<section data-label="Produtivo vs Especulação" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">3. Ativos Produtivos vs. Pura Especulação 🎭</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <div class="grid md:grid-cols-2 gap-4 mb-6">
    <div class="mfi-card">
      <div class="text-2xl mb-3">🏭</div>
      <h3 class="font-bold text-base mb-2" style="color:var(--accent);">Ativo Produtivo</h3>
      <p class="text-sm leading-relaxed" style="color:#334155;">Uma ação ou um imóvel para arrendar <strong>produzem valor</strong>: a empresa vende, fatura e gera lucros; o imóvel gera rendas.</p>
    </div>
    <div class="mfi-card" style="background:#1e293b;border-color:#334155;">
      <div class="text-2xl mb-3">🎰</div>
      <h3 class="font-bold text-base mb-2" style="color:#5eead4;">Ativo Não Produtivo</h3>
      <p class="text-sm leading-relaxed" style="color:#cbd5e1;">Uma criptomoeda ou ouro não geram lucros nem juros por si sós. O ganho depende inteiramente de alguém pagar mais por eles amanhã.</p>
    </div>
  </div>

  <div class="callout-sabias">
    <div class="callout-label">A Teoria do Mais Tolo</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">Em mercados especulativos, compra-se um ativo esperando encontrar alguém "mais tolo" disposto a pagar mais amanhã. Quando os compradores acabam, o preço desmorona-se e quem ficou com o ativo perde tudo.</p>
  </div>
</section>

<section data-label="Autodefesa" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">4. Autodefesa Financeira: FOMO e Finfluencers 🛡️</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <div class="grid md:grid-cols-2 gap-4">
    <div class="mfi-card">
      <div class="text-2xl mb-2">😰</div>
      <h3 class="font-bold text-sm mb-1">FOMO</h3>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">O medo de "ficar de fora" leva a comprar precisamente no pico da euforia — segundos antes do colapso.</p>
    </div>
    <div class="mfi-card">
      <div class="text-2xl mb-2">📱</div>
      <h3 class="font-bold text-sm mb-1">Finfluencers</h3>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">A maioria não ganha a investir — ganha com patrocínios, comissões de registo, ou "pump and dump": promovem e vendem no topo.</p>
    </div>
  </div>
</section>

<section data-label="Casos Reais" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">5. Casos Reais 🚨</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <div class="grid md:grid-cols-2 gap-4 mb-4">
    <div class="mfi-card">
      <div class="text-2xl mb-2">🍕</div>
      <h3 class="font-bold text-sm mb-1">Bitcoin Pizza Day (2010)</h3>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">10 000 bitcoins pagos por duas pizzas. Hoje valeriam cerca de <strong>650 milhões de dólares</strong>.</p>
    </div>
    <div class="mfi-card">
      <div class="text-2xl mb-2">💥</div>
      <h3 class="font-bold text-sm mb-1">Colapso da FTX (2022)</h3>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">2ª maior corretora de cripto faliu numa semana, lesando utilizadores em <strong>+8 mil milhões de dólares</strong>. Sem garantia de depósitos como um banco.</p>
    </div>
  </div>

  <div class="mfi-card">
    <h3 class="font-bold text-sm mb-2">A armadilha matemática da queda</h3>
    <p class="text-xs mb-3" style="color:var(--muted);">Arrasta para ver quanto é preciso subir para recuperar de uma queda.</p>
    <input type="range" class="mfi-range" id="mfiCrashRange" min="10" max="90" step="5" value="75">
    <div class="flex justify-between text-sm mt-2 font-bold" style="color:var(--accent);">
      <span id="mfiCrashDown"></span><span id="mfiCrashUp"></span>
    </div>
  </div>
</section>

<section data-label="Sabias que" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">6. Sabias que...? 💡</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <div class="callout-sabias mb-4">
    <div class="callout-label">Sabias que?</div>
    <p class="text-sm leading-relaxed" style="color:#334155;"><strong>Ninguém sabe quem é Satoshi Nakamoto.</strong> Desapareceu da Internet em 2011, deixando carteiras com mais de 1 milhão de bitcoins intocadas até hoje.</p>
  </div>
  <div class="callout-sabias">
    <div class="callout-label">Sabias que?</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">Um britânico chamado James Howells deitou fora um disco rígido com as chaves de <strong>8 000 bitcoins</strong> em 2013 — e tenta há mais de uma década escavar um aterro sanitário para o encontrar.</p>
  </div>
</section>

<section data-label="Detetor de Fraudes" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">7. O Laboratório "Detetor de Fraudes Digitais" 🔍</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-4">Analisa estas três propostas reais e aplica o teu "filtro de segurança financeira":</p>

  <details class="mfi-fraud-card">
    <summary>PROPOSTA A — "Grupo VIP de IA para Cripto: 2% de lucro fixo ao dia sem risco, e ganhas 20% se recrutares amigos"</summary>
    <p>Estrutura clássica de <strong>esquema em pirâmide (Ponzi)</strong>: lucro fixo garantido "sem risco" e recompensa por recrutar novos membros são os dois maiores sinais de alarme.</p>
  </details>
  <details class="mfi-fraud-card">
    <summary>PROPOSTA B — "Memecoin 'MoonRocket' já valorizou 1 500% em 24 horas — entra agora na pré-venda"</summary>
    <p>Explora o <strong>FOMO</strong>. Entrar depois de uma subida de 1 500% é quase garantia de comprar mesmo no pico, momentos antes do colapso do preço.</p>
  </details>
  <details class="mfi-fraud-card">
    <summary>PROPOSTA C — "Comprar frações de Bitcoin ou ETFs regulados, supervisionados pelo Banco de Portugal ou CMVM, com horizonte de longo prazo"</summary>
    <p>A única proposta razoável: supervisão regulatória, horizonte longo e consciência do risco — sem promessas de lucro garantido.</p>
  </details>
</section>

<script>
(function () {
  function bindTabs(groupId, panelId, data, render) {
    var group = document.getElementById(groupId);
    var panel = document.getElementById(panelId);
    var btns = group.querySelectorAll('button');
    function show(key) {
      panel.innerHTML = render(data[key]);
      panel.classList.remove('mfi-fade');
      void panel.offsetWidth;
      panel.classList.add('mfi-fade');
      btns.forEach(function (b) { b.classList.toggle('active', b.dataset.key === key); });
    }
    btns.forEach(function (b) { b.addEventListener('click', function () { show(b.dataset.key); }); });
    show(btns[0].dataset.key);
  }
  function head(icon, title) { return '<h4 class="font-bold text-base mb-2" style="color:var(--accent);">' + icon + ' ' + title + '</h4>'; }
  function body(text) { return '<p class="text-sm leading-relaxed" style="color:#334155;">' + text + '</p>'; }

  /* 1. Blockchain */
  var ledger = document.getElementById('mfiLedger');
  var fraudMsg = document.getElementById('mfiFraudMsg');
  var fraudBtn = document.getElementById('mfiFraudBtn');
  function renderLedger(fraudIdx) {
    var html = '';
    for (var i = 0; i < 30; i++) {
      html += '<div class="mfi-book' + (i === fraudIdx ? ' fraud' : '') + '">📒</div>';
    }
    ledger.innerHTML = html;
  }
  renderLedger(-1);
  fraudBtn.addEventListener('click', function () {
    renderLedger(3);
    fraudMsg.innerHTML = body('Um aluno tenta alterar a <strong>sua</strong> cópia (a vermelho). Mas os outros 29 cadernos continuam a dizer o contrário — a rede rejeita a fraude de imediato!');
  });
  document.getElementById('mfiFraudReset').addEventListener('click', function () {
    renderLedger(-1);
    fraudMsg.innerHTML = '30 alunos, 30 cópias idênticas do mesmo caderno. Todos têm de concordar para uma transação ser válida.';
  });

  /* 2. Bitcoin/Ethereum */
  var crypto = {
    bitcoin: { icon: '₿', title: 'Bitcoin: Escassez Digital Programada', text: 'Criada em 2008 por <strong>Satoshi Nakamoto</strong>, uma moeda digital independente de governos e bancos centrais. O código limita a existência a <strong>21 milhões de unidades</strong> — nunca mais.' },
    ethereum: { icon: 'Ξ', title: 'Ethereum: o Computador Global', text: 'Introduziu os <strong>Contratos Inteligentes</strong>: programas que se executam sozinhos quando certas condições são cumpridas, sem advogados nem intermediários.' }
  };
  bindTabs('mfiCryptoTabs', 'mfiCryptoPanel', crypto, function (d) { return head(d.icon, d.title) + body(d.text); });

  /* Halving */
  var halvingRange = document.getElementById('mfiHalvingRange');
  var halvingOut = document.getElementById('mfiHalvingOut');
  var halvingSteps = [
    '2009: recompensa por bloco = 50 BTC',
    '2013: primeiro halving → 25 BTC por bloco',
    '2017: segundo halving → 12,5 BTC por bloco',
    '2021: terceiro halving → 6,25 BTC por bloco',
    '2025-2029: quarto halving → 3,125 BTC por bloco'
  ];
  function showHalving() { halvingOut.textContent = halvingSteps[parseInt(halvingRange.value, 10)]; }
  halvingRange.addEventListener('input', showHalving);
  showHalving();

  /* Armadilha da queda */
  var crashRange = document.getElementById('mfiCrashRange');
  var crashDown = document.getElementById('mfiCrashDown');
  var crashUp = document.getElementById('mfiCrashUp');
  function showCrash() {
    var down = parseInt(crashRange.value, 10);
    var remaining = 100 - down;
    var needed = ((100 - remaining) / remaining * 100).toFixed(0);
    crashDown.textContent = '📉 Queda de ' + down + '%';
    crashUp.textContent = '📈 Precisa subir ' + needed + '% para recuperar';
  }
  crashRange.addEventListener('input', showCrash);
  showCrash();
}());
</script>
