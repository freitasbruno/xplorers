<?php $reflection_question = 'A Câmara de uma vila tem duas propostas: aprovar uma fábrica que cria 500 empregos (pilar económico e social MUITO bons) mas polui o rio local (pilar ambiental mau), ou rejeitar a fábrica (pilar ambiental bom) mas manter o desemprego alto (pilares económico e social maus). O que farias? Existe uma "terceira opção" que equilibre os três pilares?'; ?>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
.sust-card { background: var(--card-bg); border: 1px solid var(--border); border-radius: 1rem; padding: 1.5rem; }
.sust-pillar { text-align: center; padding: 1.25rem 1rem; background: var(--card-bg); border: 1px solid var(--border); border-radius: 1rem; transition: transform 0.2s ease; }
.sust-pillar:hover { transform: translateY(-3px); }
.sust-pillars { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1rem; }
@media (max-width: 640px) { .sust-pillars { grid-template-columns: 1fr; } }
.sust-challenge { background: var(--card-bg); border: 1px solid var(--border); border-radius: 0.75rem; padding: 1rem; cursor: pointer; margin-bottom: 0.5rem; }
.sust-challenge:hover { border-color: var(--accent); }
.sust-challenge-body { display: none; margin-top: 0.75rem; padding-top: 0.75rem; border-top: 1px solid var(--border); }
.sust-challenge-body.open { display: block; }
.sust-chart-wrap { position: relative; max-width: 280px; margin: 0 auto; height: 220px; }
</style>

<section data-label="O que é" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">1. O que é (Realmente) a Sustentabilidade? 🌍</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">Provavelmente já ouviste a palavra "sustentabilidade" centenas de vezes. Soa a reciclagem, a carros elétricos e a ursos polares. Mas é muito mais do que isso.</p>

  <div class="sust-card mb-5" style="background:#1e293b;border-color:#334155;">
    <div class="text-xs font-bold uppercase tracking-wide mb-2" style="color:#5eead4;">A PERGUNTA FUNDAMENTAL</div>
    <p class="text-base leading-relaxed" style="color:white;font-weight:500;">Podemos viver bem hoje, sem <strong style="color:#f59e0b;">roubar</strong> a capacidade dos nossos filhos e netos de viverem bem amanhã?</p>
  </div>

  <p class="prose-lesson">Sustentabilidade é a capacidade de a humanidade continuar a existir e a prosperar durante gerações, sem esgotar os recursos de que todos dependemos. Não é sobre sacrifício — é sobre <strong>inteligência a longo prazo</strong>.</p>
</section>

<section data-label="Os Três Pilares" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">2. Os Três Pilares da Sustentabilidade ♻️</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">Para que um sistema seja sustentável, tem de equilibrar três "pernas". Se uma falha, todo o sistema colapsa — como um banco de três pernas. Nenhum pilar pode ser sacrificado pelos outros dois.</p>

  <div class="sust-pillars mb-5">
    <div class="sust-pillar" style="border-top:4px solid #22c55e;">
      <div class="text-3xl mb-2">🌿</div>
      <div class="font-bold text-sm mb-2" style="color:#15803d;">Pilar Ambiental</div>
      <div class="text-xs font-semibold mb-2" style="color:var(--muted);">O Planeta</div>
      <p class="text-xs leading-relaxed" style="color:#334155;">Usar os recursos naturais (água, ar, florestas, solo) a um ritmo que lhes permita regenerar-se. É o nosso "capital natural".</p>
    </div>
    <div class="sust-pillar" style="border-top:4px solid #3b82f6;">
      <div class="text-3xl mb-2">🤝</div>
      <div class="font-bold text-sm mb-2" style="color:#1d4ed8;">Pilar Social</div>
      <div class="text-xs font-semibold mb-2" style="color:var(--muted);">As Pessoas</div>
      <p class="text-xs leading-relaxed" style="color:#334155;">De que serve um planeta "verde" se as pessoas vivem na miséria? Equidade, justiça, saúde, educação e qualidade de vida para todos.</p>
    </div>
    <div class="sust-pillar" style="border-top:4px solid #f59e0b;">
      <div class="text-3xl mb-2">💼</div>
      <div class="font-bold text-sm mb-2" style="color:#b45309;">Pilar Económico</div>
      <div class="text-xs font-semibold mb-2" style="color:var(--muted);">A Prosperidade</div>
      <p class="text-xs leading-relaxed" style="color:#334155;">Criar riqueza e emprego de forma responsável, sem destruir os outros dois pilares. Lucro sem destruição.</p>
    </div>
  </div>

  <div class="sust-card" style="border-left:4px solid var(--accent);border-radius:0 1rem 1rem 0;">
    <div class="text-xs font-bold uppercase tracking-wide mb-2" style="color:var(--accent);">O dilema da fábrica</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">Uma fábrica com <strong>lucros</strong> (Pilar Económico ✅) que polui um rio (Pilar Ambiental ❌) e paga salários miseráveis (Pilar Social ❌) não é sustentável — o banco vai cair porque duas pernas estão partidas.</p>
  </div>
</section>

<section data-label="Os Desafios" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">3. Os Três Grandes Desafios 🌡️</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-4">Clica em cada desafio para explorar o que está a acontecer no nosso planeta.</p>

  <div class="sust-challenge" onclick="toggleChallenge(this)">
    <div class="flex items-center justify-between">
      <div class="flex items-center gap-3">
        <span class="text-2xl">🌡️</span>
        <div>
          <div class="font-bold text-sm">Alterações Climáticas</div>
          <div class="text-xs" style="color:var(--muted);">O desafio mais urgente do planeta</div>
        </div>
      </div>
      <span class="text-xs px-2 py-1 rounded-full" style="background:var(--accent-light);color:var(--accent);">explorar</span>
    </div>
    <div class="sust-challenge-body">
      <p class="text-sm leading-relaxed mb-3" style="color:#334155;">A Terra tem um "efeito de estufa" natural necessário. O problema: a queima massiva de combustíveis fósseis desde a Revolução Industrial adicionou uma camada extra de CO₂ à atmosfera, tornando o "cobertor" demasiado espesso.</p>
      <div class="grid md:grid-cols-2 gap-3">
        <div class="p-3 rounded-lg" style="background:var(--bg);">
          <div class="text-xs font-bold mb-1">🌊 Portugal em risco</div>
          <p class="text-xs" style="color:#334155;">Lisboa, Porto, Faro e Aveiro estão em risco a longo prazo com a subida do nível do mar causada pelo degelo.</p>
        </div>
        <div class="p-3 rounded-lg" style="background:#fff1f2;">
          <div class="text-xs font-bold mb-1">📊 Os números</div>
          <p class="text-xs" style="color:#334155;">Os últimos 10 anos foram a década mais quente registada. A concentração de CO₂ é a mais alta dos últimos 800.000 anos.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="sust-challenge" onclick="toggleChallenge(this)">
    <div class="flex items-center justify-between">
      <div class="flex items-center gap-3">
        <span class="text-2xl">🦁</span>
        <div>
          <div class="font-bold text-sm">Crise da Biodiversidade</div>
          <div class="text-xs" style="color:var(--muted);">A extinção acelerada das espécies</div>
        </div>
      </div>
      <span class="text-xs px-2 py-1 rounded-full" style="background:var(--accent-light);color:var(--accent);">explorar</span>
    </div>
    <div class="sust-challenge-body">
      <p class="text-sm leading-relaxed mb-3" style="color:#334155;">As espécies estão a extinguir-se 100 a 1.000 vezes mais rápido do que a taxa natural. E isto não é "apenas" sobre animais bonitos:</p>
      <div class="space-y-2">
        <div class="flex items-center gap-2 text-sm"><span>🐝</span><span style="color:#334155;">Abelhas polinizam <strong>70% das culturas</strong> que nos alimentam</span></div>
        <div class="flex items-center gap-2 text-sm"><span>🌳</span><span style="color:#334155;">Florestas produzem o <strong>oxigénio</strong> que respiramos</span></div>
        <div class="flex items-center gap-2 text-sm"><span>💊</span><span style="color:#334155;">Plantas raras fornecem compostos para <strong>medicamentos</strong></span></div>
      </div>
      <div class="callout-sabias mt-3">
        <div class="callout-label">Sabias que?</div>
        <p class="text-sm" style="color:#334155;">O Lince-Ibérico esteve muito perto da extinção. Foi salvo por programas de conservação intensivos — um exemplo de como os pilares Social e Ambiental se juntaram para salvar uma espécie.</p>
      </div>
    </div>
  </div>

  <div class="sust-challenge" onclick="toggleChallenge(this)">
    <div class="flex items-center justify-between">
      <div class="flex items-center gap-3">
        <span class="text-2xl">🌊</span>
        <div>
          <div class="font-bold text-sm">O Plástico nos Oceanos</div>
          <div class="text-xs" style="color:var(--muted);">O problema mais visível do nosso dia a dia</div>
        </div>
      </div>
      <span class="text-xs px-2 py-1 rounded-full" style="background:var(--accent-light);color:var(--accent);">explorar</span>
    </div>
    <div class="sust-challenge-body">
      <p class="text-sm leading-relaxed mb-3" style="color:#334155;">O plástico é útil mas incrivelmente duradouro — não se biodegrada, apenas se parte em pedaços menores (microplásticos). Estes entram na cadeia alimentar: plâncton → peixe pequeno → peixe grande → tu.</p>
      <div class="grid md:grid-cols-2 gap-3">
        <div class="p-3 rounded-lg text-center" style="background:var(--bg);">
          <div class="text-2xl font-black mb-1" style="color:var(--accent);">450+</div>
          <div class="text-xs" style="color:var(--muted);">Anos para uma garrafa de plástico se decompor</div>
        </div>
        <div class="p-3 rounded-lg text-center" style="background:#fff1f2;">
          <div class="text-2xl font-black mb-1" style="color:#dc2626;">2050</div>
          <div class="text-xs" style="color:var(--muted);">Se nada mudar, mais plástico que peixes nos oceanos</div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
(function () {
  function toggleChallenge(el) {
    var body = el.querySelector('.sust-challenge-body');
    var btn = el.querySelector('span:last-child');
    var isOpen = body.classList.contains('open');
    body.classList.toggle('open', !isOpen);
    btn.textContent = isOpen ? 'explorar' : 'fechar';
    el.style.borderColor = isOpen ? '' : 'var(--accent)';
  }
  window.toggleChallenge = toggleChallenge;
}());
</script>
