<?php $reflection_question = 'Ao descobrirem que praticamente todas as tecnologias de comunicação e medicina que usamos hoje dependem da manipulação de formas de luz que os nossos corpos nem sequer conseguem sentir ou ver, como é que isso muda a vossa perceção sobre os "limites" da realidade humana e o poder da tecnologia e do método científico?'; ?>

<style>
.fqluz-card { background: var(--card-bg); border: 1px solid var(--border); border-radius: 1rem; padding: 1.5rem; }
.fqluz-tab { border: 2px solid var(--border); border-radius: 999px; padding: 0.4rem 1rem; font-size: 0.8rem; font-weight: 600; cursor: pointer; transition: all 0.2s ease; background: var(--bg); color: var(--text); }
.fqluz-tab:hover { border-color: var(--accent); }
.fqluz-tab.active { background: var(--accent); border-color: var(--accent); color: white; }
.fqluz-panel { min-height: 130px; }
.fqluz-fade { animation: fqluzFade 0.3s ease; }
@keyframes fqluzFade { from { opacity: 0; transform: translateY(4px); } to { opacity: 1; transform: none; } }
.fqluz-btn { background: var(--accent); color: white; border-radius: 999px; padding: 0.5rem 1.2rem; font-size: 0.85rem; font-weight: 600; cursor: pointer; border: none; }
.fqluz-spectrum { display: flex; height: 3rem; border-radius: 0.75rem; overflow: hidden; border: 1px solid var(--border); }
.fqluz-band { flex: 1; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; cursor: pointer; background: #334155; color: white; transition: all 0.2s ease; border-right: 1px solid rgba(255,255,255,0.15); }
.fqluz-band:last-child { border-right: none; }
.fqluz-band:hover { filter: brightness(1.25); }
.fqluz-band.active { outline: 3px solid var(--accent); outline-offset: -3px; filter: brightness(1.35); }
.fqluz-band.vis { background: linear-gradient(90deg, #ef4444, #f97316, #eab308, #22c55e, #3b82f6, #8b5cf6); flex: 0.6; }
.fqluz-meter { height: 0.6rem; border-radius: 999px; background: var(--border); overflow: hidden; }
.fqluz-meter-fill { height: 100%; border-radius: 999px; transition: width 0.4s ease; }
.fqluz-wave { width: 100%; height: 70px; }
.fqluz-step { display: none; }
.fqluz-step.show { display: block; }
.fqluz-check { display: flex; gap: 0.6rem; align-items: flex-start; padding: 0.55rem 0; border-bottom: 1px solid var(--border); cursor: pointer; }
.fqluz-check input { margin-top: 0.2rem; accent-color: var(--accent); }
</style>

<section data-label="Olhos Cegos" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">1. Os Nossos Olhos São "Cegos" 👀</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Já sonhaste com visão raio-X ou com ver no escuro? A verdade inconveniente é que os olhos humanos são quase cegos à maior parte da realidade. Todas as cores do arco-íris, do vermelho ao violeta, são apenas uma <strong>minúscula fatia</strong> de um gigantesco oceano de energia: o <strong>Espectro Eletromagnético</strong>.</p>

  <div class="fqluz-card">
    <div class="flex h-6 rounded-full overflow-hidden mb-2" style="border:1px solid var(--border);">
      <div style="flex:46;background:#475569;"></div>
      <div style="flex:4;background:linear-gradient(90deg,#ef4444,#eab308,#22c55e,#3b82f6,#8b5cf6);"></div>
      <div style="flex:50;background:#475569;"></div>
    </div>
    <div class="flex justify-between text-xs" style="color:var(--muted);"><span>📻 Rádio</span><span style="color:var(--accent);font-weight:700;">↑ o que vemos</span><span>☢️ Gama</span></div>
    <p class="text-sm mt-4" style="color:#334155;">Micro-ondas, rádio, Wi-Fi, radiografias — tudo isto é "luz" que os nossos olhos não captam.</p>
  </div>
</section>

<section data-label="Onda ou Partícula" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">2. Onda ou Partícula? 🌊⚪</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Durante séculos, cientistas como Isaac Newton e Albert Einstein discutiram o que é a luz. Seria uma onda, como as ondulações na água, ou um disparo de minúsculas "balas" de energia? Escolhe:</p>

  <div class="flex flex-wrap gap-2 mb-4" id="fqluzDualTabs">
    <button class="fqluz-tab active" data-key="onda">🌊 Onda</button>
    <button class="fqluz-tab" data-key="particula">⚪ Partícula</button>
    <button class="fqluz-tab" data-key="ambas">🤯 A resposta</button>
  </div>
  <div id="fqluzDualPanel" class="fqluz-card fqluz-panel mb-6"></div>

  <div class="fqluz-card" style="background:#1e293b;border-color:#334155;">
    <div class="flex items-center gap-4 flex-wrap">
      <div class="text-3xl font-extrabold" style="color:#5eead4;">300 000 km/s</div>
      <p class="text-xs leading-relaxed flex-1" style="color:#cbd5e1;min-width:200px;">A luz não precisa de ar nem de cabos: viaja no vácuo do espaço a esta velocidade. Num segundo, daria cerca de <strong>7 voltas e meia à Terra</strong>.</p>
    </div>
  </div>
</section>

<section data-label="O Espectro" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">3. Do Visível ao Invisível 🌈</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Toda a luz é essencialmente a mesma coisa. O que distingue o vermelho de um raio-X é só a <strong>energia</strong> (a frequência / comprimento de onda). "Esticar" a onda tira-lhe energia; "espremê-la" dá-lhe energia e poder de penetração. Clica em cada faixa do espectro:</p>

  <div class="fqluz-card">
    <div class="fqluz-spectrum mb-2" id="fqluzSpectrum">
      <div class="fqluz-band" data-key="radio" style="background:#1e3a8a;" title="Rádio">📻</div>
      <div class="fqluz-band" data-key="micro" style="background:#1e40af;" title="Micro-ondas">🍲</div>
      <div class="fqluz-band" data-key="ir" style="background:#7f1d1d;" title="Infravermelho">🔥</div>
      <div class="fqluz-band vis" data-key="vis" title="Visível">👁️</div>
      <div class="fqluz-band" data-key="uv" style="background:#5b21b6;" title="Ultravioleta">🏖️</div>
      <div class="fqluz-band" data-key="x" style="background:#4c1d95;" title="Raios-X">🦴</div>
      <div class="fqluz-band" data-key="gama" style="background:#312e81;" title="Raios Gama">☢️</div>
    </div>
    <div class="flex justify-between text-xs mb-4" style="color:var(--muted);"><span>← ondas longas, pouca energia</span><span>ondas curtas, muita energia →</span></div>
    <svg class="fqluz-wave mb-4" viewBox="0 0 400 70" preserveAspectRatio="none" aria-hidden="true"><path id="fqluzWavePath" fill="none" stroke="var(--accent)" stroke-width="3"/></svg>
    <div id="fqluzBandPanel" class="fqluz-panel"></div>
    <div class="mt-3">
      <div class="text-xs font-semibold mb-1" style="color:var(--muted);">Energia</div>
      <div class="fqluz-meter"><div class="fqluz-meter-fill" id="fqluzMeter"></div></div>
    </div>
  </div>
</section>

<section data-label="Domesticar" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">4. Como Domesticámos o Invisível 📡</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <div class="grid md:grid-cols-2 gap-4 mb-6">
    <div class="fqluz-card">
      <div class="text-2xl mb-2">🍲</div>
      <h3 class="font-bold text-sm mb-1">O Micro-ondas</h3>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">Não aquece com calor! Emite ondas no comprimento exato que faz as <strong>moléculas de água</strong> da comida vibrarem furiosamente. É a fricção entre elas que gera o calor.</p>
    </div>
    <div class="fqluz-card">
      <div class="text-2xl mb-2">📶</div>
      <h3 class="font-bold text-sm mb-1">O Wi-Fi</h3>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">O router pisca uma "luz" invisível (rádio / micro-ondas de baixa potência) numa espécie de código Morse ultrarrápido, que traz os vídeos até ao teu ecrã.</p>
    </div>
  </div>

  <p class="prose-lesson mb-4"><strong>O mistério do Wi-Fi e das paredes grossas.</strong> Muitos routers têm duas bandas: 2.4 GHz e 5 GHz. Qual escolherias em cada situação?</p>
  <div class="flex flex-wrap gap-2 mb-4" id="fqluzWifiTabs">
    <button class="fqluz-tab active" data-key="quarto">🚪 Jogar no quarto, porta fechada</button>
    <button class="fqluz-tab" data-key="sala">🛋️ Ver vídeos ao lado do router</button>
  </div>
  <div id="fqluzWifiPanel" class="fqluz-card fqluz-panel"></div>
</section>

<section data-label="Raio-X" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">5. A Fotografia Acidental (1895) 🦴</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <div class="fqluz-card">
    <div class="fqluz-step show" data-step="0">
      <div class="text-3xl mb-2">🔬</div>
      <p class="text-sm leading-relaxed" style="color:#334155;">O físico <strong>Wilhelm Röntgen</strong> faz experiências com tubos de energia num laboratório às escuras…</p>
    </div>
    <div class="fqluz-step" data-step="1">
      <div class="text-3xl mb-2">✨</div>
      <p class="text-sm leading-relaxed" style="color:#334155;">…e repara que uma placa química do outro lado da sala <strong>brilha</strong> sempre que liga a máquina. Algo invisível atravessa a sala!</p>
    </div>
    <div class="fqluz-step" data-step="2">
      <div class="text-3xl mb-2">✋</div>
      <p class="text-sm leading-relaxed" style="color:#334155;">Intrigado, pede à mulher, <strong>Anna Bertha</strong>, que ponha a mão entre a máquina e a placa.</p>
    </div>
    <div class="fqluz-step" data-step="3">
      <div class="text-3xl mb-2">💍</div>
      <p class="text-sm leading-relaxed" style="color:#334155;">Resultado: a <strong>primeira radiografia do mundo</strong>. A "luz" misteriosa atravessou a carne, mas foi travada pelos ossos e pelo anel de casamento. Röntgen chamou-lhe <strong>Raios-X</strong> — "X" porque não sabia o que era!</p>
    </div>
    <button class="fqluz-btn mt-4" id="fqluzXrayBtn">Continuar a história ▶</button>
  </div>
</section>

<section data-label="Sabias que" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">6. Sabias que...? 💡</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <div class="callout-sabias mb-4">
    <div class="callout-label">Sabias que?</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">As <strong>víboras</strong> têm buracos térmicos no focinho que lhes permitem "ver" o <strong>infravermelho</strong> — o calor de um rato a correr às escuras. Já as <strong>abelhas</strong> veem <strong>ultravioleta</strong>: flores que nos parecem brancas são, para elas, alvos coloridos a indicar o néctar.</p>
  </div>
  <div class="callout-sabias">
    <div class="callout-label">Sabias que?</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">A viseira espelhada dos capacetes dos astronautas tem uma camada microscópica de <strong>ouro verdadeiro</strong>. O ouro é dos melhores materiais a refletir a luz infravermelha do Sol — evita que a cabeça do astronauta "coza" dentro do fato.</p>
  </div>
</section>

<section data-label="Comando Mágico" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">7. Experiência: O Comando Mágico 📱</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">O comando da televisão envia sinais de luz <strong>infravermelha</strong>, que os teus olhos não conseguem ver. Mas o sensor da câmara do telemóvel é mais sensível e capta essa faixa do espectro. Experimenta em casa e marca cada passo:</p>

  <div class="fqluz-card" id="fqluzChecklist">
    <label class="fqluz-check"><input type="checkbox"><span class="text-sm">Pega num comando de TV e num telemóvel com câmara.</span></label>
    <label class="fqluz-check"><input type="checkbox"><span class="text-sm">Aponta a câmara para a pequena lâmpada na ponta do comando.</span></label>
    <label class="fqluz-check"><input type="checkbox"><span class="text-sm">Carrega nos botões do comando, olhando <strong>só para o ecrã</strong> do telemóvel.</span></label>
    <p class="text-sm font-semibold mt-4" id="fqluzCheckMsg" style="color:var(--muted);">0 de 3 passos feitos.</p>
  </div>
</section>

<script>
(function () {
  function bindTabs(groupId, panelId, data, render) {
    var group = document.getElementById(groupId);
    var panel = document.getElementById(panelId);
    var btns = group.querySelectorAll('[data-key]');
    function show(key) {
      panel.innerHTML = render(data[key]);
      panel.classList.remove('fqluz-fade');
      void panel.offsetWidth;
      panel.classList.add('fqluz-fade');
      btns.forEach(function (b) { b.classList.toggle('active', b.dataset.key === key); });
    }
    btns.forEach(function (b) { b.addEventListener('click', function () { show(b.dataset.key); }); });
    show(btns[0].dataset.key);
  }
  function head(icon, title) { return '<h4 class="font-bold text-base mb-2" style="color:var(--accent);">' + icon + ' ' + title + '</h4>'; }
  function body(text) { return '<p class="text-sm leading-relaxed" style="color:#334155;">' + text + '</p>'; }

  /* 2. Natureza dual */
  var dual = {
    onda: { icon: '🌊', title: 'A luz como onda', text: 'Espalha-se como as ondulações na água quando atiras uma pedra. Tem um <strong>comprimento de onda</strong> e uma <strong>frequência</strong> — e é isso que define a sua cor e a sua energia.' },
    particula: { icon: '⚪', title: 'A luz como partícula', text: 'Chega em pequenos "pacotes" de energia, como um disparo de balas minúsculas. Chamamos a cada pacote um <strong>fotão</strong>.' },
    ambas: { icon: '🤯', title: 'As duas coisas ao mesmo tempo', text: 'A física moderna descobriu que a luz tem uma "crise de identidade": comporta-se como <strong>onda e como partícula</strong> ao mesmo tempo. Não é uma ou outra — é ambas.' }
  };
  bindTabs('fqluzDualTabs', 'fqluzDualPanel', dual, function (d) { return head(d.icon, d.title) + body(d.text); });

  /* 3. Espectro */
  var bands = {
    radio: { e: 8, waves: 1.5, icon: '📻', title: 'Ondas de Rádio', text: 'As ondas mais longas e com menos energia. Transmitem a Antena 3 ou a RFM — e também os sinais dos telemóveis.' },
    micro: { e: 20, waves: 3, icon: '🍲', title: 'Micro-ondas', text: 'Aquecem a comida ao fazer vibrar as moléculas de água. O Wi-Fi também usa esta zona do espectro, em baixa potência.' },
    ir: { e: 35, waves: 5, icon: '🔥', title: 'Infravermelho', text: 'É o calor. Não o vemos, mas as víboras sim — e o comando da TV usa-o para falar com o televisor.' },
    vis: { e: 50, waves: 7, icon: '👁️', title: 'Luz Visível', text: 'A única fatia que os nossos olhos captam: do vermelho (menos energia) ao violeta (mais energia).' },
    uv: { e: 65, waves: 10, icon: '🏖️', title: 'Ultravioleta (UV)', text: 'Já acima do violeta. É a radiação que nos queima a pele na praia — e que as abelhas conseguem ver.' },
    x: { e: 82, waves: 14, icon: '🦴', title: 'Raios-X', text: 'Muita energia e poder de penetração: atravessam a carne mas são travados pelos ossos. Usados nas radiografias.' },
    gama: { e: 100, waves: 20, icon: '☢️', title: 'Raios Gama', text: 'As ondas mais curtas e perigosas de todas, produzidas por exemplo em explosões nucleares.' }
  };
  var wavePath = document.getElementById('fqluzWavePath');
  var meter = document.getElementById('fqluzMeter');
  function drawWave(n) {
    var d = 'M0 35';
    for (var x = 0; x <= 400; x += 2) d += ' L' + x + ' ' + (35 - 28 * Math.sin(x / 400 * n * 2 * Math.PI)).toFixed(1);
    wavePath.setAttribute('d', d);
  }
  bindTabs('fqluzSpectrum', 'fqluzBandPanel', bands, function (b) {
    drawWave(b.waves);
    meter.style.width = b.e + '%';
    meter.style.background = b.e > 60 ? '#dc2626' : b.e > 40 ? '#eab308' : '#22c55e';
    return head(b.icon, b.title) + body(b.text);
  });

  /* 4. Wi-Fi */
  var wifi = {
    quarto: { icon: '📶', title: 'Escolhe os 2.4 GHz', text: 'Ondas mais longas: são mais lentas, mas <strong>contornam obstáculos</strong> como portas e paredes de betão. Para jogar no quarto com a porta fechada, a física aconselha os 2.4 GHz.' },
    sala: { icon: '🚀', title: 'Escolhe os 5 GHz', text: 'Vibram mais depressa e <strong>carregam mais dados</strong> — a internet fica muito rápida. Mas "cansam-se" depressa e são bloqueadas por paredes. Perto do router, são imbatíveis.' }
  };
  bindTabs('fqluzWifiTabs', 'fqluzWifiPanel', wifi, function (d) { return head(d.icon, d.title) + body(d.text); });

  /* 5. História do Raio-X */
  var xSteps = document.querySelectorAll('.fqluz-step');
  var xBtn = document.getElementById('fqluzXrayBtn');
  var xIdx = 0;
  xBtn.addEventListener('click', function () {
    xIdx = (xIdx + 1) % xSteps.length;
    xSteps.forEach(function (s, i) { s.classList.toggle('show', i === xIdx); });
    xBtn.textContent = xIdx === xSteps.length - 1 ? '↺ Recomeçar' : 'Continuar a história ▶';
  });

  /* 7. Checklist */
  var boxes = document.querySelectorAll('#fqluzChecklist input');
  var msg = document.getElementById('fqluzCheckMsg');
  boxes.forEach(function (b) {
    b.addEventListener('change', function () {
      var n = Array.prototype.filter.call(boxes, function (x) { return x.checked; }).length;
      msg.innerHTML = n === boxes.length
        ? '🎉 Viste a lâmpada piscar num tom arroxeado ou esbranquiçado? O teu telemóvel acabou de funcionar como <strong>óculos de visão noturna</strong>!'
        : n + ' de ' + boxes.length + ' passos feitos.';
      msg.style.color = n === boxes.length ? 'var(--accent)' : 'var(--muted)';
    });
  });
}());
</script>
