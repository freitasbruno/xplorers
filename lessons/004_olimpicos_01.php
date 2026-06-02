<?php $reflection_question = 'A nudez nos Jogos era vista pelos gregos como um símbolo de igualdade — nus, todos os atletas eram iguais, independentemente da sua riqueza. Achas que os Jogos Olímpicos modernos têm um princípio semelhante de igualdade? Ou as diferenças de recursos entre países criam uma desigualdade que os gregos não teriam aprovado?'; ?>

<style>
.olimpicos-card { background: var(--card-bg); border: 1px solid var(--border); border-radius: 1rem; padding: 1.5rem; }
.olimpicos-criteria { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1rem; }
@media (max-width: 640px) { .olimpicos-criteria { grid-template-columns: 1fr; } }
.olimpicos-sport { background: var(--card-bg); border: 1px solid var(--border); border-radius: 0.75rem; padding: 1rem; cursor: pointer; transition: all 0.2s; }
.olimpicos-sport:hover { border-color: var(--accent); }
.olimpicos-sport.open { border-color: var(--accent); border-width: 2px; }
.olimpicos-sport-detail { display: none; margin-top: 0.75rem; padding-top: 0.75rem; border-top: 1px solid var(--border); }
.olimpicos-sport-detail.visible { display: block; }
.olimpicos-sport-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 0.75rem; }
@media (max-width: 640px) { .olimpicos-sport-grid { grid-template-columns: 1fr; } }
</style>

<section data-label="Quem Competia" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">1. O Clube Exclusivo dos Atletas 🏛️</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">Nem todos podiam sonhar com a glória em Olímpia. Para competir, um indivíduo tinha de cumprir três critérios rigorosos — e a maioria dos habitantes do mundo grego ficava automaticamente excluída.</p>

  <div class="olimpicos-criteria mb-5">
    <div class="olimpicos-card text-center">
      <div class="text-3xl mb-3">♂️</div>
      <div class="font-bold text-sm mb-2">Ser Homem</div>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">As mulheres eram proibidas de participar e, na maioria dos casos, até de assistir — sob pena de morte. A única exceção era a sacerdotisa de Deméter.</p>
    </div>
    <div class="olimpicos-card text-center">
      <div class="text-3xl mb-3">🏛️</div>
      <div class="font-bold text-sm mb-2">Ser Grego</div>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">Os Jogos eram um evento pan-helénico — uniam todas as cidades-estado do mundo grego. "Bárbaros" (não-gregos) não eram admitidos.</p>
    </div>
    <div class="olimpicos-card text-center">
      <div class="text-3xl mb-3">🔓</div>
      <div class="font-bold text-sm mb-2">Ser Livre</div>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">Apenas cidadãos livres podiam competir. Os escravos — que podiam ser excelentes atletas — estavam completamente excluídos da competição.</p>
    </div>
  </div>

  <div class="olimpicos-card" style="border-left:4px solid var(--accent);border-radius:0 1rem 1rem 0;">
    <p class="text-sm leading-relaxed" style="color:#334155;">O atleta olímpico encarnava o ideal do <strong>cidadão grego perfeito</strong>: homem livre, orgulhoso da sua herança helénica e fisicamente apto. Entrar em Olímpia era em si um símbolo de status.</p>
  </div>
</section>

<section data-label="A Nudez" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">2. A Nudez Atlética: Igualdade ou Exibição? 💪</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">Uma das características mais marcantes dos Jogos era o facto de os atletas competirem completamente nus. Para a sensibilidade moderna pode parecer estranho, mas para os gregos tinha um profundo significado cultural e filosófico.</p>

  <div class="grid md:grid-cols-3 gap-4 mb-5">
    <div class="olimpicos-card text-center">
      <div class="text-2xl mb-2">⚡</div>
      <div class="font-bold text-sm mb-2">Tributo aos Deuses</div>
      <p class="text-xs" style="color:var(--muted);">Mostrar o corpo humano na sua perfeição era uma forma de honrar os deuses que o criaram. A beleza física era inseparável da excelência moral.</p>
    </div>
    <div class="olimpicos-card text-center" style="background:#f0fdf4;border-color:#bbf7d0;">
      <div class="text-2xl mb-2">⚖️</div>
      <div class="font-bold text-sm mb-2">Símbolo de Igualdade</div>
      <p class="text-xs" style="color:#334155;">Nus, todos os atletas eram iguais. Não havia uniformes ricos ou simples que indicassem origem social. Em Olímpia, <strong>só o mérito desportivo contava</strong>.</p>
    </div>
    <div class="olimpicos-card text-center">
      <div class="text-2xl mb-2">🫒</div>
      <div class="font-bold text-sm mb-2">Praticidade</div>
      <p class="text-xs" style="color:var(--muted);">Total liberdade de movimentos. Os atletas untavam o corpo com azeite para proteger a pele do sol e da poeira abrasiva do estádio.</p>
    </div>
  </div>

  <div class="callout-sabias">
    <div class="callout-label">Sabias que?</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">A palavra "ginásio" vem do grego <em>gymnós</em>, que significa <strong>"nu"</strong>. O <em>gymnasion</em> era o local onde os jovens gregos treinavam o corpo e a mente, fazendo-o, na maioria das vezes, sem roupa. A palavra sobreviveu 2.500 anos, mas perdeu o seu significado original.</p>
  </div>
</section>

<section data-label="As Provas" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">3. As Provas: Da Elegância à Brutalidade 🏃‍♂️</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-4">Os Jogos foram evoluindo ao longo de séculos, mas algumas provas tornaram-se icónicas. Clica em cada prova para saber mais.</p>

  <div class="olimpicos-sport-grid mb-2">
    <div class="olimpicos-sport" onclick="toggleSport(this)">
      <div class="flex items-center gap-2">
        <span class="text-xl">🏃</span>
        <div>
          <div class="font-bold text-sm">Corridas (Dromos)</div>
          <div class="text-xs" style="color:var(--muted);">A mais antiga e prestigiada</div>
        </div>
      </div>
      <div class="olimpicos-sport-detail">
        <p class="text-xs leading-relaxed" style="color:#334155;">O <em>stadion</em> era uma corrida de velocidade de 192 metros — o comprimento do estádio. Havia também o <em>diaulos</em> (ida e volta, 384m) e o <em>dolichos</em> (corrida de fundo, até 4.800m). A vitória no stadion era a mais gloriosa de todas.</p>
      </div>
    </div>
    <div class="olimpicos-sport" onclick="toggleSport(this)">
      <div class="flex items-center gap-2">
        <span class="text-xl">🥇</span>
        <div>
          <div class="font-bold text-sm">Pentatlo</div>
          <div class="text-xs" style="color:var(--muted);">O atleta mais completo</div>
        </div>
      </div>
      <div class="olimpicos-sport-detail">
        <p class="text-xs leading-relaxed" style="color:#334155;">Cinco modalidades: lançamento do disco, salto em comprimento, lançamento do dardo, corrida e luta. O pentatleta era considerado o ideal atlético — não o mais forte nem o mais rápido, mas o mais completo. Era o equivalente ao decatlo moderno.</p>
      </div>
    </div>
    <div class="olimpicos-sport" onclick="toggleSport(this)">
      <div class="flex items-center gap-2">
        <span class="text-xl">🤼</span>
        <div>
          <div class="font-bold text-sm">Luta (Pale)</div>
          <div class="text-xs" style="color:var(--muted);">Força e técnica</div>
        </div>
      </div>
      <div class="olimpicos-sport-detail">
        <p class="text-xs leading-relaxed" style="color:#334155;">O objetivo era derrubar o adversário três vezes. Havia regras — não era permitido golpear — tornando-a uma prova de força e técnica combinadas. Os lutadores cobriam-se de pó para melhorar a aderência.</p>
      </div>
    </div>
    <div class="olimpicos-sport" onclick="toggleSport(this)">
      <div class="flex items-center gap-2">
        <span class="text-xl">🥊</span>
        <div>
          <div class="font-bold text-sm">Pugilato (Pygmachia)</div>
          <div class="text-xs" style="color:var(--muted);">O boxe da antiguidade</div>
        </div>
      </div>
      <div class="olimpicos-sport-detail">
        <p class="text-xs leading-relaxed" style="color:#334155;">Extremamente violento — sem assaltos, sem categorias de peso, sem tempo limite. Os atletas protegiam os nós dos dedos com tiras de couro endurecido. Só terminava com desistência ou incapacidade. Muitos atletas ficavam com o nariz e as orelhas deformados.</p>
      </div>
    </div>
    <div class="olimpicos-sport" onclick="toggleSport(this)" style="border-color:#ef4444;">
      <div class="flex items-center gap-2">
        <span class="text-xl">⚡</span>
        <div>
          <div class="font-bold text-sm" style="color:#dc2626;">Pancrácio (Pankration)</div>
          <div class="text-xs" style="color:var(--muted);">A mais brutal</div>
        </div>
      </div>
      <div class="olimpicos-sport-detail">
        <p class="text-xs leading-relaxed" style="color:#334155;">Mistura de luta e pugilato onde quase tudo era permitido — exceto morder e enfiar os dedos nos olhos. Estrangulamentos, torções de membros, golpes em caído eram todos legais. Era a prova mais admirada e mais temida. Os seus campeões tornavam-se heróis míticos.</p>
      </div>
    </div>
    <div class="olimpicos-sport" onclick="toggleSport(this)">
      <div class="flex items-center gap-2">
        <span class="text-xl">🐎</span>
        <div>
          <div class="font-bold text-sm">Corridas de Bigas</div>
          <div class="text-xs" style="color:var(--muted);">As mais aristocráticas</div>
        </div>
      </div>
      <div class="olimpicos-sport-detail">
        <p class="text-xs leading-relaxed" style="color:#334155;">As provas mais dispendiosas e aristocráticas. A glória ia para o <strong>dono dos cavalos</strong>, não para o jóquei ou condutor. Mesmo mulheres podiam vencer — como Cinisca de Esparta, a primeira mulher a ser proclamada vencedora olímpica, como dona dos cavalos vencedores.</p>
      </div>
    </div>
  </div>
</section>

<script>
(function () {
  function toggleSport(el) {
    var detail = el.querySelector('.olimpicos-sport-detail');
    var isOpen = detail.classList.contains('visible');
    detail.classList.toggle('visible', !isOpen);
    el.classList.toggle('open', !isOpen);
  }
  window.toggleSport = toggleSport;
}());
</script>
