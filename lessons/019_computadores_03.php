<?php $reflection_question = 'Em 1984, existiam duas filosofias: o Mac (fechado, fácil, bonito) e o PC IBM (aberto, austero, universal). Olha para o teu telemóvel — é Apple ou Android? Qual das duas filosofias acabou por vencer, e a que custo?'; ?>

<style>
.pc-card { background: var(--card-bg); border: 1px solid var(--border); border-radius: 1rem; padding: 1.5rem; }
.pc-tab { border: 2px solid var(--border); border-radius: 999px; padding: 0.4rem 1rem; font-size: 0.8rem; font-weight: 600; cursor: pointer; transition: all 0.2s ease; background: var(--bg); color: var(--text); }
.pc-tab.active { background: var(--accent); border-color: var(--accent); color: white; }
.pc-era-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; }
@media (max-width: 640px) { .pc-era-grid { grid-template-columns: 1fr; } }
.pc-timeline { position: relative; padding-left: 2rem; }
.pc-timeline::before { content: ''; position: absolute; left: 0.55rem; top: 0.4rem; bottom: 0.4rem; width: 2px; background: var(--border); border-radius: 2px; }
.pc-timeline-item { position: relative; margin-bottom: 1.5rem; }
.pc-timeline-item:last-child { margin-bottom: 0; }
.pc-timeline-dot { position: absolute; left: -1.8rem; top: 0.25rem; width: 0.7rem; height: 0.7rem; border-radius: 50%; background: var(--accent); border: 2px solid var(--bg); box-shadow: 0 0 0 2px var(--accent); }
.pc-gui-compare { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; }
@media (max-width: 640px) { .pc-gui-compare { grid-template-columns: 1fr; } }
.pc-panel { display: none; }
.pc-panel.active { display: block; }
</style>

<section data-label="O Microprocessador" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">1. O Ponto de Inflexão: O Microprocessador 🔬</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">Até 1970, um computador era feito de centenas de placas de circuitos separadas, cada uma do tamanho de um livro. A revolução silenciosa começou num chip do tamanho de uma unha.</p>

  <div class="pc-era-grid mb-5">
    <div class="pc-card">
      <div class="text-xs font-bold uppercase tracking-wide mb-2" style="color:var(--muted);">ANTES — 1960s</div>
      <div class="text-3xl mb-2">📦</div>
      <div class="font-bold text-sm mb-2 text-slate-900">CPU em centenas de placas</div>
      <p class="text-sm" style="color:#334155;">Uma única unidade de processamento ocupava armários inteiros. Pesava toneladas. Precisava de ar condicionado industrial. Custava milhões.</p>
    </div>
    <div class="pc-card" style="background:#f0fdf4;border-color:#bbf7d0;">
      <div class="text-xs font-bold uppercase tracking-wide mb-2" style="color:#15803d;">DEPOIS — Intel 4004, 1971</div>
      <div class="text-3xl mb-2">💎</div>
      <div class="font-bold text-sm mb-2 text-slate-900">CPU num único chip de silício</div>
      <p class="text-sm" style="color:#334155;">Toda a Unidade Central de Processamento num chip do tamanho de uma unha. Sem refrigeração industrial. Alimentado por uma simples tomada. Custava alguns dólares.</p>
    </div>
  </div>

  <div class="pc-card" style="border-left:4px solid var(--accent);border-radius:0 1rem 1rem 0;">
    <div class="text-xs font-bold uppercase tracking-wide mb-2" style="color:var(--accent);">A analogia perfeita</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">É como se passássemos de ter uma biblioteca inteira espalhada por uma cidade para ter todos os livros condensados num único ecrã de leitura que cabe no bolso. O microprocessador não só mudou os computadores — tornou o computador pessoal <em>possível</em>.</p>
  </div>
</section>

<section data-label="Os Hobbyistas" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">2. Da Garagem ao Mundo: O Homebrew Club 🛠️</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">Em 1975, a revista <em>Popular Electronics</em> mostrou na capa o <strong>Altair 8800</strong> — um kit que se comprava pelo correio e se soldava em casa. Não tinha ecrã nem teclado. Mas acendeu uma centelha.</p>

  <div class="pc-timeline mb-5">
    <div class="pc-timeline-item">
      <div class="pc-timeline-dot"></div>
      <div class="text-xs font-bold uppercase tracking-wide mb-0.5" style="color:var(--accent);">1975</div>
      <div class="font-bold text-sm text-slate-900 mb-1">Altair 8800 — O Kit que Mudou Tudo</div>
      <p class="text-sm" style="color:var(--muted);">Publicado na capa da <em>Popular Electronics</em>. Sem ecrã, sem teclado, sem sistema operativo. Mas era um computador real — e qualquer entusiasta podia ter um.</p>
    </div>
    <div class="pc-timeline-item">
      <div class="pc-timeline-dot"></div>
      <div class="text-xs font-bold uppercase tracking-wide mb-0.5" style="color:var(--accent);">1975–1977</div>
      <div class="font-bold text-sm text-slate-900 mb-1">Homebrew Computer Club</div>
      <p class="text-sm" style="color:var(--muted);">Um grupo de "geeks" na Califórnia reunia-se para partilhar peças e ideias. Entre os membros: Steve Wozniak. A cultura do open-source nasceu aqui.</p>
    </div>
    <div class="pc-timeline-item">
      <div class="pc-timeline-dot"></div>
      <div class="text-xs font-bold uppercase tracking-wide mb-0.5" style="color:var(--accent);">1975</div>
      <div class="font-bold text-sm text-slate-900 mb-1">Bill Gates + Paul Allen → Microsoft</div>
      <p class="text-sm" style="color:var(--muted);">Dois jovens universitários viram o Altair e escreveram o primeiro software para ele — uma versão da linguagem BASIC. Nasceu a Microsoft. Gates abandonou Harvard.</p>
    </div>
    <div class="pc-timeline-item">
      <div class="pc-timeline-dot" style="background:#4338ca;box-shadow:0 0 0 2px #4338ca;"></div>
      <div class="text-xs font-bold uppercase tracking-wide mb-0.5" style="color:#4338ca;">1976</div>
      <div class="font-bold text-sm text-slate-900 mb-1">Steve Jobs + Steve Wozniak → Apple</div>
      <p class="text-sm" style="color:var(--muted);">Wozniak desenhou o Apple I numa garagem. Jobs percebeu que podia ser um produto. A Apple Computer Company nasceu. O preço: $666,66.</p>
    </div>
  </div>
</section>

<section data-label="Apple vs IBM" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">3. A Guerra dos Gigantes: Apple vs. IBM ⚔️</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-4">Nos finais dos anos 70 e início dos 80, duas filosofias opostas definiram o que seria um computador pessoal. Clica em cada era para explorar.</p>

  <div class="flex flex-wrap gap-2 mb-4">
    <button class="pc-tab active" data-panel="apple2">Apple II (1977)</button>
    <button class="pc-tab" data-panel="ibmpc">IBM PC (1981)</button>
    <button class="pc-tab" data-panel="mac">Macintosh (1984)</button>
    <button class="pc-tab" data-panel="windows">Windows (1985)</button>
  </div>

  <div id="pc-panel-apple2" class="pc-panel active pc-card">
    <div class="text-2xl mb-2">🍎</div>
    <div class="font-bold text-sm mb-2" style="color:var(--accent);">Apple II — O Primeiro Eletrodoméstico Digital</div>
    <p class="text-sm leading-relaxed mb-3" style="color:#334155;">Wozniak (génio técnico) + Jobs (génio de marketing) = o primeiro computador que parecia um produto de consumo. Vinha montado, tinha teclado, ligava-se a uma TV a cores. Qualquer pessoa podia usar — não só os técnicos.</p>
    <p class="text-xs font-semibold" style="color:var(--muted);">Impacto: VisiCalc, a primeira folha de cálculo, transformou o Apple II numa ferramenta de negócios. As empresas compraram Apples só para usar VisiCalc.</p>
  </div>

  <div id="pc-panel-ibmpc" class="pc-panel pc-card">
    <div class="text-2xl mb-2">🟦</div>
    <div class="font-bold text-sm mb-2" style="color:#1d4ed8;">IBM PC — A Abertura que Definiu o Padrão</div>
    <p class="text-sm leading-relaxed mb-3" style="color:#334155;">A IBM — que dominava os grandes computadores — entrou no mercado pessoal com uma estratégia ousada: <strong>arquitetura aberta</strong>. Qualquer empresa podia fabricar componentes compatíveis. O resultado: centenas de fabricantes de "clones PC".</p>
    <p class="text-xs font-semibold" style="color:var(--muted);">Impacto: O padrão IBM PC (com MS-DOS da Microsoft) tornou-se o sistema universal das empresas — e é a base do que chamamos "PC" até hoje.</p>
  </div>

  <div id="pc-panel-mac" class="pc-panel pc-card">
    <div class="text-2xl mb-2">🖥️</div>
    <div class="font-bold text-sm mb-2" style="color:#7c3aed;">Macintosh — A GUI para Toda a Gente</div>
    <p class="text-sm leading-relaxed mb-3" style="color:#334155;">Steve Jobs visitou o Xerox PARC e viu o futuro: ratos, janelas, ícones. O Macintosh foi o primeiro computador acessível a popularizar a Interface Gráfica de Utilizador. Para copiar um ficheiro, <em>arrastava-se</em> — não se escrevia um comando.</p>
    <p class="text-xs font-semibold" style="color:var(--muted);">Lançamento: acompanhado pelo anúncio "1984" de Ridley Scott, considerado o melhor anúncio de sempre. Passou apenas uma vez no Super Bowl.</p>
  </div>

  <div id="pc-panel-windows" class="pc-panel pc-card">
    <div class="text-2xl mb-2">🪟</div>
    <div class="font-bold text-sm mb-2" style="color:#0369a1;">Windows — A GUI para o Padrão PC</div>
    <p class="text-sm leading-relaxed mb-3" style="color:#334155;">A Microsoft respondeu ao Mac com o Windows — janelas e ícones para todos os computadores compatíveis com IBM. Não era tão elegante como o Mac, mas funcionava em qualquer PC barato. A democratização definitiva da GUI.</p>
    <p class="text-xs font-semibold" style="color:var(--muted);">Resultado: em 1990, o Windows tornou-se o sistema operativo mais usado no mundo — e mantém esse título até hoje.</p>
  </div>
</section>

<section data-label="A GUI" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">4. A Revolução do Clique: Antes e Depois da GUI 🖱️</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">A Interface Gráfica de Utilizador (GUI) não foi apenas uma mudança estética — foi a diferença entre "computadores para cientistas" e "computadores para toda a gente".</p>

  <div class="pc-gui-compare mb-5">
    <div class="pc-card" style="background:#1e293b;border-color:#334155;">
      <div class="text-xs font-bold uppercase tracking-wide mb-3" style="color:#94a3b8;">LINHA DE COMANDOS</div>
      <div class="font-mono text-xs mb-3 p-3 rounded-lg" style="background:#0f172a;color:#4ade80;">
        C:\&gt; COPY C:\NOTAS.TXT A:\<br>
        C:\&gt; DIR A:\<br>
        C:\&gt; DEL C:\NOTAS.TXT<br>
        C:\&gt; _
      </div>
      <p class="text-xs" style="color:#94a3b8;">Para copiar um ficheiro, tinhas de memorizar comandos exatos. Um erro de digitação e não funcionava. Era intimidante para quem não era técnico.</p>
    </div>
    <div class="pc-card" style="background:#f0fdf4;border-color:#bbf7d0;">
      <div class="text-xs font-bold uppercase tracking-wide mb-3" style="color:#15803d;">INTERFACE GRÁFICA (GUI)</div>
      <div class="p-3 rounded-lg mb-3 text-center" style="background:white;border:1px solid #d1fae5;">
        <div class="flex justify-center gap-3 text-2xl mb-1">📁 → 📄 → 🗑️</div>
        <div class="text-xs" style="color:#334155;">Arrastar. Soltar. Pronto.</div>
      </div>
      <p class="text-xs" style="color:#334155;">Apontar, clicar, arrastar. Qualquer pessoa com 5 anos consegue usar. A GUI democratizou a computação e permitiu 5 mil milhões de utilizadores.</p>
    </div>
  </div>

  <div class="callout-sabias">
    <div class="callout-label">Sabias que?</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">A ideia da GUI não foi de Jobs nem de Gates — foi inventada no <strong>Xerox PARC</strong> nos anos 70. A Xerox não a comercializou porque a gestão da empresa não percebeu o potencial. Jobs visitou o PARC, viu a demonstração, e saiu com o futuro na cabeça.</p>
  </div>
</section>

<section data-label="Sabias que?" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">5. Factos Surpreendentes 💡</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <div class="space-y-4">
    <div class="callout-sabias">
      <div class="callout-label">O anúncio mais famoso de sempre</div>
      <p class="text-sm leading-relaxed" style="color:#334155;">O lançamento do Macintosh em 1984 foi acompanhado por um anúncio realizado por <strong>Ridley Scott</strong> (o diretor de <em>Alien</em> e <em>Gladiador</em>). O anúncio — inspirado no livro <em>1984</em> de George Orwell — passou apenas uma vez na televisão, durante o Super Bowl. É ainda hoje considerado o melhor anúncio publicitário da história.</p>
    </div>

    <div class="callout-sabias">
      <div class="callout-label">O primeiro rato custava 1.000€</div>
      <p class="text-sm leading-relaxed" style="color:#334155;">O primeiro rato comercial, lançado com o computador Apple Lisa em 1983, custava <strong>400 dólares</strong> — o equivalente a mais de 1.000 euros a preços de hoje. Hoje compras um rato razoável por menos de 10€.</p>
    </div>

    <div class="callout-sabias">
      <div class="callout-label">Porque se chama "Silicon Valley"?</div>
      <p class="text-sm leading-relaxed" style="color:#334155;">O Vale do Silício, na Califórnia, deve o nome ao <strong>silício</strong> — o material semicondutor de que são feitos os microprocessadores. A região tornou-se o epicentro da indústria de chips nos anos 70, atraindo depois todas as grandes empresas tecnológicas do mundo.</p>
    </div>
  </div>
</section>

<script>
(function () {
  document.querySelectorAll('.pc-tab').forEach(function (btn) {
    btn.addEventListener('click', function () {
      document.querySelectorAll('.pc-tab').forEach(function (b) { b.classList.remove('active'); });
      document.querySelectorAll('.pc-panel').forEach(function (p) { p.classList.remove('active'); });
      btn.classList.add('active');
      var panel = document.getElementById('pc-panel-' + btn.dataset.panel);
      if (panel) panel.classList.add('active');
    });
  });
}());
</script>
