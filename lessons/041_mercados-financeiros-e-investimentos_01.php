<?php $reflection_question = 'Se ter o dinheiro parado na conta bancária nos faz perder poder de compra todos os anos devido à inflação, será que evitar correr qualquer risco financeiro não é, paradoxalmente, a decisão mais arriscada de todas a longo prazo?'; ?>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
.mfi-card { background: var(--card-bg); border: 1px solid var(--border); border-radius: 1rem; padding: 1.5rem; }
.mfi-tab { border: 2px solid var(--border); border-radius: 999px; padding: 0.4rem 1rem; font-size: 0.8rem; font-weight: 600; cursor: pointer; transition: all 0.2s ease; background: var(--bg); color: var(--text); }
.mfi-tab:hover { border-color: var(--accent); }
.mfi-tab.active { background: var(--accent); border-color: var(--accent); color: white; }
.mfi-panel { min-height: 140px; }
.mfi-fade { animation: mfiFade1 0.3s ease; }
@keyframes mfiFade1 { from { opacity: 0; transform: translateY(4px); } to { opacity: 1; transform: none; } }
.mfi-range { width: 100%; accent-color: var(--accent); }
.mfi-table { width: 100%; border-collapse: collapse; font-size: 0.82rem; }
.mfi-table th, .mfi-table td { border: 1px solid var(--border); padding: 0.55rem 0.7rem; text-align: left; }
.mfi-table th { background: var(--bg); font-weight: 700; }
.mfi-chart { max-width: 460px; margin: 0 auto; }
</style>

<section data-label="Inflação" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">1. O Ladrão Invisível: A Inflação 🕵️</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Poupar é guardar; investir é pôr o dinheiro a trabalhar. Uma nota de 50 € guardada numa gaveta continua a valer 50 € — mas o que compras com ela diminui todos os anos. Arrasta o cursor e vê o que a inflação faz a 100 € ao longo do tempo.</p>

  <div class="mfi-card">
    <input type="range" class="mfi-range" id="mfiInflRange" min="0" max="30" step="1" value="0" aria-label="Anos decorridos">
    <div class="flex justify-between text-xs mt-1 mb-4" style="color:var(--muted);"><span>Hoje</span><span id="mfiInflYearsLabel">0 anos depois</span><span>30 anos</span></div>
    <div class="grid md:grid-cols-2 gap-4 text-center">
      <div>
        <div class="text-3xl font-bold" style="color:var(--accent);">100,00 €</div>
        <div class="text-xs" style="color:var(--muted);">Valor nominal (o número na nota)</div>
      </div>
      <div>
        <div class="text-3xl font-bold" id="mfiInflReal" style="color:#ef4444;">100,00 €</div>
        <div class="text-xs" style="color:var(--muted);">Poder de compra real (a 3% de inflação/ano)</div>
      </div>
    </div>
  </div>
</section>

<section data-label="Juro Composto" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">2. A 8.ª Maravilha do Mundo: O Juro Composto ❄️</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">"O juro composto é a força mais poderosa do Universo" — atribuído a Einstein. Compara dois colegas de turma que investem 50 €/mês a 8% ao ano, mas em alturas diferentes da vida.</p>

  <div class="mfi-card mb-6">
    <div class="mfi-chart"><canvas id="mfiTwinsChart"></canvas></div>
  </div>

  <div class="grid md:grid-cols-2 gap-4">
    <div class="mfi-card">
      <div class="text-2xl mb-2">🧑‍🎓</div>
      <h3 class="font-bold text-sm mb-1">Aluno A — começa aos 15</h3>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">Investe 10 anos (dos 15 aos 25), depois para. Total investido: <strong>6 000 €</strong>. Aos 65: <strong>≈ 198 720 €</strong>.</p>
    </div>
    <div class="mfi-card" style="background:#1e293b;border-color:#334155;">
      <div class="text-2xl mb-2">🧑‍💼</div>
      <h3 class="font-bold text-sm mb-1" style="color:#5eead4;">Aluno B — começa aos 25</h3>
      <p class="text-xs leading-relaxed" style="color:#cbd5e1;">Investe sem parar dos 25 aos 65 anos. Total investido: <strong>24 000 €</strong> — quatro vezes mais. Aos 65: <strong>≈ 174 550 €</strong>.</p>
    </div>
  </div>
  <div class="callout-sabias mt-4">
    <div class="callout-label">Ponto-chave</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">O Aluno A investiu 4 vezes menos do seu próprio bolso, mas terminou com mais dinheiro — porque deu mais <strong>tempo</strong> ao efeito bola de neve.</p>
  </div>
</section>

<section data-label="Risco vs Retorno" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">3. A Balança Inquebrável: Risco vs. Retorno ⚖️</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6"><strong>Não há retorno elevado sem risco proporcional.</strong> Se alguém prometer 20% ou 50% num mês sem risco, é invariavelmente uma fraude. O risco não se evita cegamente — gere-se.</p>

  <div class="callout-sabias">
    <div class="callout-label">Sinal de alerta</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">Ativos de baixo risco geram retornos modestos, próximos da inflação. Ativos com maior potencial de crescimento oscilam mais no curto prazo — e exigem prazos mais longos para compensar.</p>
  </div>
</section>

<section data-label="Sócio vs Credor" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">4. Ser Sócio vs. Ser Credor: Ações vs. Obrigações 🤝</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Quando empresas ou governos precisam de capital, emitem dois instrumentos principais. Clica para comparar cada característica.</p>

  <div class="flex flex-wrap gap-2 mb-4" id="mfiBondTabs">
    <button class="mfi-tab active" data-key="papel">🎭 O teu papel</button>
    <button class="mfi-tab" data-key="ganho">💰 Como ganhas</button>
    <button class="mfi-tab" data-key="risco">⚠️ Risco</button>
    <button class="mfi-tab" data-key="prioridade">🥇 Prioridade</button>
  </div>
  <table class="mfi-table mb-2">
    <thead><tr><th></th><th>📈 Ação</th><th>📜 Obrigação</th></tr></thead>
    <tbody id="mfiBondTable"></tbody>
  </table>
</section>

<section data-label="Casos Reais" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">5. Casos Reais 🏢</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <div class="grid md:grid-cols-2 gap-4">
    <div class="mfi-card">
      <div class="text-2xl mb-2">👟</div>
      <h3 class="font-bold text-sm mb-1">O Teste das Sapatilhas</h3>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">150 € em sapatilhas valem quase zero 3 anos depois. Os mesmos 150 € em ações da marca renderiam dividendos e cresceriam com as vendas globais. O consumidor transfere riqueza; o acionista participa na sua criação.</p>
    </div>
    <div class="mfi-card">
      <div class="text-2xl mb-2">🏛️</div>
      <h3 class="font-bold text-sm mb-1">Certificados de Aforro</h3>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">Qualquer cidadão pode emprestar dinheiro ao Estado português nos CTT, a troco de uma taxa de juro garantida — um dos investimentos mais conservadores em Portugal.</p>
    </div>
  </div>
</section>

<section data-label="Sabias que" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">6. Sabias que...? 💡</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <div class="callout-sabias mb-4">
    <div class="callout-label">A Regra dos 72</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">Divide 72 pela taxa de juro anual para saber em quantos anos o teu dinheiro duplica. A 7,2% ao ano, duplica em <strong>10 anos</strong>. Experimenta com a taxa abaixo:</p>
    <div class="flex items-center gap-3 mt-3">
      <input type="range" class="mfi-range" id="mfiRule72" min="1" max="20" step="0.5" value="7.2">
      <span class="font-bold" style="min-width:90px;" id="mfiRule72Out">7,2% → 10 anos</span>
    </div>
  </div>
  <div class="callout-sabias mb-4">
    <div class="callout-label">Sabias que?</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">A primeira Bolsa de Valores do mundo nasceu em <strong>Amesterdão, em 1602</strong>, fundada pela Companhia Holandesa das Índias Orientais.</p>
  </div>
  <div class="callout-sabias">
    <div class="callout-label">Sabias que?</div>
    <p class="text-sm leading-relaxed" style="color:#334155;"><strong>Warren Buffett</strong> comprou a sua primeira ação aos 11 anos e acumulou mais de 90% da sua fortuna depois dos 65 — o segredo não foi sorte, mas deixar o juro composto trabalhar durante sete décadas.</p>
  </div>
</section>

<section data-label="Dilema" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">7. O Dilema dos 1 000 € 👥</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Recebeste uma herança de 1 000 € no início do 10.º ano. Explora as três opções de destino.</p>

  <div class="flex flex-wrap gap-2 mb-4" id="mfiDilemaTabs">
    <button class="mfi-tab active" data-key="a">💰 Mealheiro</button>
    <button class="mfi-tab" data-key="b">📜 Obrigações (3%)</button>
    <button class="mfi-tab" data-key="c">📈 Ações (8%)</button>
  </div>
  <div id="mfiDilemaPanel" class="mfi-card mfi-panel"></div>
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

  /* 1. Inflação */
  var inflRange = document.getElementById('mfiInflRange');
  var inflYears = document.getElementById('mfiInflYearsLabel');
  var inflReal = document.getElementById('mfiInflReal');
  function showInfl() {
    var y = parseInt(inflRange.value, 10);
    inflYears.textContent = y + ' anos depois';
    var real = 100 * Math.pow(1 - 0.03, y);
    inflReal.textContent = real.toFixed(2).replace('.', ',') + ' €';
  }
  inflRange.addEventListener('input', showInfl);
  showInfl();

  /* 2. Juro composto — gráfico */
  function futureValue(monthly, years, rate) {
    var months = years * 12;
    var r = rate / 12;
    var fv = 0;
    var vals = [0];
    for (var m = 1; m <= months; m++) {
      fv = fv * (1 + r) + monthly;
      if (m % 12 === 0) vals.push(Math.round(fv));
    }
    return vals;
  }
  var alunoA = futureValue(50, 10, 0.08);
  while (alunoA.length <= 50) alunoA.push(Math.round(alunoA[alunoA.length - 1] * 1.08));
  var alunoB = [0];
  for (var i = 1; i <= 15; i++) alunoB.push(0);
  var bVals = futureValue(50, 40, 0.08);
  alunoB = alunoB.concat(bVals.slice(1));
  var labels = [];
  for (var age = 15; age <= 65; age++) labels.push(age);
  new Chart(document.getElementById('mfiTwinsChart').getContext('2d'), {
    type: 'line',
    data: {
      labels: labels,
      datasets: [
        { label: 'Aluno A (investe 15-25)', data: alunoA.slice(0, 51), borderColor: '#6366f1', backgroundColor: 'rgba(99,102,241,0.1)', tension: 0.2, pointRadius: 0 },
        { label: 'Aluno B (investe 25-65)', data: alunoB.slice(0, 51), borderColor: '#f59e0b', backgroundColor: 'rgba(245,158,11,0.1)', tension: 0.2, pointRadius: 0 }
      ]
    },
    options: {
      responsive: true,
      plugins: {
        legend: { position: 'bottom', labels: { font: { size: 11, family: 'Inter, sans-serif' } } },
        tooltip: { callbacks: { label: function (c) { return ' ' + c.dataset.label + ': ' + c.parsed.y.toLocaleString('pt-PT') + ' €'; } } }
      },
      scales: {
        x: { title: { display: true, text: 'Idade' } },
        y: { title: { display: true, text: 'Capital acumulado (€)' } }
      }
    }
  });

  /* 4. Ações vs Obrigações tabela */
  var bondRows = {
    papel: ['Sócio / co-proprietário de uma fração da empresa', 'Credor: emprestaste dinheiro à entidade'],
    ganho: ['Valorização da ação + dividendos', 'Cupão (juro fixo ou variável) + capital de volta no final'],
    risco: ['Mais elevado — pode descer a zero em falência', 'Mais moderado — se não houver incumprimento, recebes o prometido'],
    prioridade: ['Os sócios são os últimos a receber em falência', 'Os credores têm prioridade legal absoluta']
  };
  var bondTable = document.getElementById('mfiBondTable');
  bindTabs('mfiBondTabs', null, bondRows, function (row) {
    bondTable.innerHTML = '<tr><td><strong>Resposta</strong></td><td>' + row[0] + '</td><td>' + row[1] + '</td></tr>';
    return '';
  });

  /* 6. Regra dos 72 */
  var rule72 = document.getElementById('mfiRule72');
  var rule72Out = document.getElementById('mfiRule72Out');
  function showRule72() {
    var rate = parseFloat(rule72.value);
    var years = (72 / rate).toFixed(1);
    rule72Out.textContent = rate.toString().replace('.', ',') + '% → ' + years.replace('.', ',') + ' anos';
  }
  rule72.addEventListener('input', showRule72);
  showRule72();

  /* 7. Dilema */
  var dilema = {
    a: { icon: '💰', title: 'Mealheiro', text: 'Ao fim de 10 anos, continuas com <strong>1 000 €</strong> em nota. Mas com 3% de inflação ao ano, o teu poder de compra real cai para cerca de <strong>744 €</strong>. Perdeste valor por estar parado.' },
    b: { icon: '📜', title: 'Obrigações — 3% ao ano', text: 'Ao fim de 10 anos, os 1 000 € crescem para cerca de <strong>1 344 €</strong>. Rendimento estável, quase sem oscilações — ideal se precisares do dinheiro num prazo curto ou médio.' },
    c: { icon: '📈', title: 'Ações — cerca de 8% ao ano', text: 'Ao fim de 10 anos, podes chegar a cerca de <strong>2 159 €</strong> — mas com anos de -15% e anos de +25% pelo caminho. Só faz sentido se tiveres tempo para atravessar as quedas sem precisar de vender.' }
  };
  bindTabs('mfiDilemaTabs', 'mfiDilemaPanel', dilema, function (d) { return head(d.icon, d.title) + body(d.text); });
}());
</script>
