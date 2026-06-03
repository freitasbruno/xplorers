<?php $reflection_question = 'De que forma a Segunda Guerra Mundial afetou os jovens de maneira completamente diferente da Primeira Guerra Mundial? O que vos impressiona mais no conceito de "Guerra Total"?'; ?>

<style>
.wwii2-card { background: var(--card-bg); border: 1px solid var(--border); border-radius: 1rem; padding: 1.5rem; }
.wwii2-step { display: flex; gap: 1rem; align-items: flex-start; padding: 1rem; background: var(--card-bg); border: 1px solid var(--border); border-radius: 0.875rem; }
.wwii2-step-num { flex-shrink: 0; width: 2rem; height: 2rem; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 0.85rem; color: white; }
.wwii2-tab-btn { border: 2px solid var(--border); border-radius: 999px; padding: 0.4rem 1.1rem; font-size: 0.82rem; font-weight: 600; cursor: pointer; transition: all 0.2s; background: var(--bg); color: var(--text); }
.wwii2-tab-btn.active { background: var(--accent); border-color: var(--accent); color: white; }
.wwii2-tab-panel { display: none; }
.wwii2-tab-panel.active { display: block; }
</style>

<section data-label="Guerra Total" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">1. O que é "Guerra Total"? 🌍</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Imaginem um cenário onde a guerra não acontece apenas numa linha de frente distante. Toda a sociedade — as fábricas, as escolas, as mulheres, os cientistas e até os recursos naturais — é redirecionada para um único objetivo: vencer o inimigo. Isto é o que os historiadores chamam de <strong>Guerra Total</strong>.</p>

  <div class="grid md:grid-cols-3 gap-4 mb-4">
    <div class="wwii2-card text-center">
      <div class="text-3xl mb-2">⚔️</div>
      <h3 class="font-bold text-sm mb-1" style="color:var(--accent);">1ª Guerra Mundial</h3>
      <p class="text-xs leading-relaxed" style="color:#475569;">Exércitos profissionais em trincheiras fixas. A sociedade civil ficava maioritariamente na retaguarda, relativamente à parte.</p>
    </div>
    <div class="wwii2-card text-center" style="background:#1e293b;border-color:#334155;">
      <div class="text-3xl mb-2">🔄</div>
      <h3 class="font-bold text-sm mb-1" style="color:#5eead4;">A Mudança</h3>
      <p class="text-xs leading-relaxed" style="color:#cbd5e1;">Após 1939, as regras antigas desapareceram. O palco da guerra era o planeta inteiro — e toda a população fazia parte do esforço.</p>
    </div>
    <div class="wwii2-card text-center">
      <div class="text-3xl mb-2">🏭</div>
      <h3 class="font-bold text-sm mb-1" style="color:var(--accent);">2ª Guerra Mundial</h3>
      <p class="text-xs leading-relaxed" style="color:#475569;">Fábricas convertidas em arsenais. Mulheres no posto de trabalho. Crianças evacuadas. Cada cidadão era parte do esforço de guerra.</p>
    </div>
  </div>
</section>

<section data-label="Blitzkrieg" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">2. A Blitzkrieg: A Guerra-Relâmpago ⚡</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">Em vez da lenta guerra de trincheiras da Primeira Guerra, a nova estratégia nazi baseava-se na velocidade e na coordenação perfeita. Resultado: a França — que resistiu 4 anos na guerra anterior — rendeu-se em <strong>seis semanas</strong>.</p>

  <div class="space-y-3 mb-6">
    <div class="wwii2-step">
      <div class="wwii2-step-num" style="background:#dc2626;">1</div>
      <div>
        <p class="font-bold text-sm">✈️ Bombardeamento Aéreo — <em>Luftwaffe</em></p>
        <p class="text-xs mt-1" style="color:#475569;">Os aviões de caça alemães atacavam primeiro, destruindo infraestruturas e comunicações, semeando o pânico entre civis e soldados inimigos.</p>
      </div>
    </div>
    <div class="wwii2-step">
      <div class="wwii2-step-num" style="background:#d97706;">2</div>
      <div>
        <p class="font-bold text-sm">🪖 Avanço dos Tanques — <em>Panzers</em></p>
        <p class="text-xs mt-1" style="color:#475569;">Imediatamente a seguir, os tanques avançavam destruindo as defesas antes que o inimigo se conseguisse reorganizar.</p>
      </div>
    </div>
    <div class="wwii2-step">
      <div class="wwii2-step-num" style="background:#16a34a;">3</div>
      <div>
        <p class="font-bold text-sm">👣 Ocupação pela Infantaria</p>
        <p class="text-xs mt-1" style="color:#475569;">Por fim, a infantaria ocupava o território — tudo antes que o inimigo conseguisse reagir, reorganizar ou pedir reforços.</p>
      </div>
    </div>
  </div>
</section>

<section data-label="Resistência" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">3. Batalha de Inglaterra e Operação Barbarossa 🛡️</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <div class="flex flex-wrap gap-2 mb-4">
    <button class="wwii2-tab-btn active" data-tab2="inglaterra">🇬🇧 Batalha de Inglaterra</button>
    <button class="wwii2-tab-btn" data-tab2="barbarossa">❄️ Operação Barbarossa</button>
  </div>

  <div id="tab2-inglaterra" class="wwii2-tab-panel active wwii2-card">
    <h3 class="font-bold text-base mb-2" style="color:var(--accent);">Verão–Outono de 1940: O Céu como Campo de Batalha</h3>
    <p class="text-sm leading-relaxed mb-3" style="color:#334155;">Com a Europa continental dominada, a Grã-Bretanha de <strong>Winston Churchill</strong> isolou-se na resistência. A Batalha de Inglaterra foi um confronto puramente aéreo — a Luftwaffe tentou destruir a Royal Air Force para preparar uma invasão terrestre.</p>
    <p class="text-sm leading-relaxed mb-4" style="color:#475569;">Os pilotos britânicos resistiram heroicamente. Incapaz de conquistar o domínio aéreo, Hitler abandonou os planos de invasão. Churchill resumiu: <em>"Nunca no domínio dos conflitos humanos tantos deveram tanto a tão poucos."</em></p>
    <div class="callout-sabias">
      <div class="callout-label">Sabias que?</div>
      <p class="text-sm" style="color:#334155;">Em Inglaterra, cidadãos entregavam as suas panelas de alumínio, grades de jardim e brinquedos de metal para serem fundidos e transformados em aviões de combate <strong>Spitfire</strong>. A Guerra Total chegava à cozinha de cada família.</p>
    </div>
  </div>

  <div id="tab2-barbarossa" class="wwii2-tab-panel wwii2-card">
    <h3 class="font-bold text-base mb-2" style="color:var(--accent);">Junho de 1941: A Decisão Mais Arriscada</h3>
    <p class="text-sm leading-relaxed mb-3" style="color:#334155;">Incapaz de invadir a Grã-Bretanha, Hitler tomou uma decisão que os historiadores consideram o início do seu fim: quebrou o pacto com Stalin e lançou a <strong>Operação Barbarossa</strong> — a invasão da União Soviética.</p>
    <p class="text-sm leading-relaxed" style="color:#475569;">Foi a maior operação militar da história da humanidade. Mas o inverno russo devastador e a resistência soviética transformaram o que Hitler esperava ser uma vitória em semanas numa guerra de desgaste brutal. A <strong>Frente Leste</strong> tornou-se o cemitério do exército alemão.</p>
  </div>
</section>

<section data-label="Dia D" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">4. O Dia D: A Viragem do Conflito ⚓</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">A 6 de junho de 1944, os Aliados lançaram a operação que mudaria o rumo da guerra na Europa.</p>

  <div class="wwii2-card mb-5" style="background:#0f172a;border-color:#1e3a5f;">
    <div class="flex flex-wrap gap-6">
      <div class="flex-1 min-w-[130px]">
        <p class="text-xs font-semibold mb-1" style="color:#93c5fd;">Data</p>
        <p class="font-bold text-lg" style="color:white;">6 JUN 1944</p>
        <p class="text-xs" style="color:#94a3b8;">O maior desembarque anfíbio da história</p>
      </div>
      <div class="flex-1 min-w-[130px]">
        <p class="text-xs font-semibold mb-1" style="color:#93c5fd;">Local</p>
        <p class="font-bold" style="color:white;">Praias da Normandia</p>
        <p class="text-xs" style="color:#94a3b8;">Norte de França</p>
      </div>
      <div class="flex-1 min-w-[130px]">
        <p class="text-xs font-semibold mb-1" style="color:#93c5fd;">Aliados</p>
        <p class="font-bold" style="color:white;">EUA, GBR, Canadá</p>
        <p class="text-xs" style="color:#94a3b8;">+ forças de países ocupados</p>
      </div>
    </div>
  </div>

  <p class="prose-lesson mb-4">Esta operação gigantesca abriu uma nova frente na Europa Ocidental, iniciando a libertação dos territórios ocupados e empurrando as forças nazis de volta para as suas fronteiras.</p>

  <div class="callout-sabias">
    <div class="callout-label">Sabias que?</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">Embora Portugal se tenha mantido neutral sob Salazar, <strong>Lisboa tornou-se a "capital dos espiões" da Europa</strong>. Agentes britânicos e alemães cruzavam-se nos hotéis do Estoril — numa cidade em paz no meio de um mundo em guerra.</p>
  </div>
</section>

<section data-label="Holocausto" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">5. O Horror Humanitário: O Holocausto ✡️</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">Não podemos falar desta guerra sem abordar a sua face mais sombria — não um efeito colateral, mas um objetivo planeado e executado pelo Estado nazi.</p>

  <div class="wwii2-card mb-5" style="background:#1a0a0a;border-color:#7f1d1d;">
    <h3 class="font-bold text-base mb-3" style="color:#fca5a5;">A "Solução Final"</h3>
    <p class="text-sm leading-relaxed mb-4" style="color:#fde8e8;">Sob a ideologia racial nazi, o regime implementou o extermínio <strong>sistemático e industrializado</strong> de grupos considerados "indesejáveis". Este genocídio ficou conhecido como o <strong>Holocausto</strong>.</p>
    <div class="grid grid-cols-2 gap-3">
      <div class="p-3 rounded-lg" style="background:rgba(127,29,29,0.35);border:1px solid #7f1d1d;">
        <p class="text-xs font-semibold mb-1" style="color:#fca5a5;">Vítimas</p>
        <p class="text-xs leading-relaxed" style="color:#fde8e8;">~6 milhões de judeus + milhões de ciganos, pessoas com deficiência, prisioneiros políticos e outras minorias.</p>
      </div>
      <div class="p-3 rounded-lg" style="background:rgba(127,29,29,0.35);border:1px solid #7f1d1d;">
        <p class="text-xs font-semibold mb-1" style="color:#fca5a5;">Locais</p>
        <p class="text-xs leading-relaxed" style="color:#fde8e8;">Campos de concentração e extermínio como <strong>Auschwitz-Birkenau</strong>, espalhados pela Europa ocupada.</p>
      </div>
    </div>
  </div>

  <div class="callout-sabias">
    <div class="callout-label">Sabias que?</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">Os Aliados conseguiram decifrar a <strong>Enigma</strong> — a máquina de criptografia ultra-secreta usada pelos alemães. Este trabalho, liderado pelo matemático <strong>Alan Turing</strong> em Bletchley Park, salvou milhões de vidas e encurtou a guerra em vários anos.</p>
  </div>
</section>

<script>
(function () {
  document.querySelectorAll('.wwii2-tab-btn').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var tab = this.dataset.tab2;
      document.querySelectorAll('.wwii2-tab-btn').forEach(function (b) { b.classList.remove('active'); });
      document.querySelectorAll('.wwii2-tab-panel').forEach(function (p) { p.classList.remove('active'); });
      this.classList.add('active');
      document.getElementById('tab2-' + tab).classList.add('active');
    });
  });
}());
</script>
