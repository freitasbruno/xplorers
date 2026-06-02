<?php $reflection_question = 'Estás na margem de um rio há 380 milhões de anos. És um peixe com pulmões primitivos. À tua frente tens terra seca com plantas e sem predadores; atrás, na água, tens predadores gigantes e pouco oxigénio. Quais são as 3 maiores dificuldades que o teu corpo teria de superar para sobreviver "lá fora" durante apenas 10 minutos?'; ?>

<style>
.vida3-card { background: var(--card-bg); border: 1px solid var(--border); border-radius: 1rem; padding: 1.5rem; }
.vida3-creature { background: var(--card-bg); border: 1px solid var(--border); border-radius: 0.75rem; padding: 1rem; cursor: pointer; transition: all 0.2s; }
.vida3-creature:hover { border-color: var(--accent); transform: translateY(-2px); }
.vida3-creature.open { border-color: var(--accent); border-width: 2px; }
.vida3-detail { display: none; margin-top: 0.75rem; padding-top: 0.75rem; border-top: 1px solid var(--border); }
.vida3-detail.visible { display: block; }
.vida3-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 0.75rem; }
@media (max-width: 580px) { .vida3-grid { grid-template-columns: 1fr; } }
.vida3-transition { display: grid; grid-template-columns: 1fr auto 1fr; gap: 0.5rem; align-items: center; }
@media (max-width: 500px) { .vida3-transition { grid-template-columns: 1fr; } }
.vida3-bar { height: 8px; border-radius: 4px; background: var(--accent); transition: width 0.6s ease; }
</style>

<section data-label="Explosão Câmbrica" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">1. O "Big Bang" da Biologia 🌊</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">Se a história da Terra fosse um filme de 24 horas, durante as primeiras 21 horas quase nada acontecia — só micróbios. Depois, por volta das <strong>21h10</strong> (há ~541 milhões de anos), o ecrã explodiu em formas estranhas e inesperadas.</p>

  <div class="vida3-card mb-5" style="background:#f8fafc; border-color:#e2e8f0;">
    <div class="text-center font-bold text-sm mb-4" style="color:var(--muted);">O Filme de 24 Horas da Terra</div>
    <div class="space-y-3">
      <div>
        <div class="flex justify-between text-xs mb-1"><span>🦠 Primeiros micróbios</span><span style="color:var(--muted);">~04h00</span></div>
        <div style="background:#e2e8f0; border-radius:4px; height:8px;"><div class="vida3-bar" style="width:17%;"></div></div>
      </div>
      <div>
        <div class="flex justify-between text-xs mb-1"><span>💚 Grande Oxidação (cianobactérias)</span><span style="color:var(--muted);">~09h45</span></div>
        <div style="background:#e2e8f0; border-radius:4px; height:8px;"><div class="vida3-bar" style="width:41%;"></div></div>
      </div>
      <div>
        <div class="flex justify-between text-xs mb-1"><span style="color:var(--accent); font-weight:700;">💥 Explosão Câmbrica</span><span style="color:var(--accent); font-weight:700;">~21h10</span></div>
        <div style="background:#e2e8f0; border-radius:4px; height:8px;"><div class="vida3-bar" style="width:88%;"></div></div>
      </div>
      <div>
        <div class="flex justify-between text-xs mb-1"><span>🦕 Dinossauros</span><span style="color:var(--muted);">~22h50</span></div>
        <div style="background:#e2e8f0; border-radius:4px; height:8px;"><div class="vida3-bar" style="width:95%;"></div></div>
      </div>
      <div>
        <div class="flex justify-between text-xs mb-1"><span>🧑 Homo sapiens</span><span style="color:var(--muted);">23:59:58</span></div>
        <div style="background:#e2e8f0; border-radius:4px; height:8px;"><div class="vida3-bar" style="width:99.9%;"></div></div>
      </div>
    </div>
  </div>

  <div class="grid md:grid-cols-2 gap-4">
    <div class="vida3-card">
      <div class="font-bold text-sm mb-2">🛡️ Exoesqueletos e Armaduras</div>
      <p class="text-xs leading-relaxed" style="color:var(--muted);">Surgem pela primeira vez conchas, carapaças e espinhos. A vida tornava-se visível — e vulnerável à predação. Defender-se tornou-se essencial.</p>
    </div>
    <div class="vida3-card" style="background:#fef2f2; border-color:#fecaca;">
      <div class="font-bold text-sm mb-2" style="color:#dc2626;">⚔️ Predação Ativa</div>
      <p class="text-xs leading-relaxed" style="color:#7f1d1d;">Pela primeira vez, animais caçavam outros animais. Esta "corrida ao armamento" evolutiva acelerou dramaticamente a diversificação da vida.</p>
    </div>
  </div>
</section>

<section data-label="Burgess Shale" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">2. Criaturas de Outro Mundo 🦴</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">Nas Rochas Rochosas do Canadá existe uma "cápsula do tempo" geológica — o <strong>Burgess Shale</strong> — que preservou criaturas câmbricas tão bizarras que os cientistas pensaram inicialmente que eram de outro planeta. Clica para saber mais sobre cada uma.</p>

  <div class="vida3-grid mb-2">
    <div class="vida3-creature" onclick="toggleCreature(this)">
      <div class="flex items-center gap-2 mb-1">
        <span class="text-xl">👁️</span>
        <div class="font-bold text-sm">Opabinia</div>
      </div>
      <div class="text-xs" style="color:var(--muted);">5 olhos + tromba</div>
      <div class="vida3-detail">
        <p class="text-xs leading-relaxed" style="color:#334155;">Tinha cinco olhos (dispostos em pares + um central) e uma tromba flexível com garras na ponta para capturar presas. Não pertence a nenhum grupo animal vivo — é um ramo evolutivo extinto sem descendentes. A sua descoberta no Burgess Shale foi tão chocante que o paleontólogo Harry Whittington riu quando viu o fóssil pela primeira vez, pensando que era uma fraude.</p>
      </div>
    </div>
    <div class="vida3-creature" onclick="toggleCreature(this)" style="border-color:#ef4444;">
      <div class="flex items-center gap-2 mb-1">
        <span class="text-xl">🦞</span>
        <div class="font-bold text-sm" style="color:#dc2626;">Anomalocaris</div>
      </div>
      <div class="text-xs" style="color:var(--muted);">O terror dos oceanos</div>
      <div class="vida3-detail">
        <p class="text-xs leading-relaxed" style="color:#334155;">Com quase 1 metro de comprimento, era o maior predador dos oceanos câmbricos — um gigante absoluto para a época. Tinha garras dianteiras articuladas para agarrar presas e uma boca circular com "dentes" de quitina. Estima-se que podia nadar rapidamente ondulando os seus lobos laterais. Os seus fósseis foram inicialmente descritos como três animais diferentes — só décadas depois se percebeu que eram partes do mesmo ser.</p>
      </div>
    </div>
    <div class="vida3-creature" onclick="toggleCreature(this)">
      <div class="flex items-center gap-2 mb-1">
        <span class="text-xl">🌵</span>
        <div class="font-bold text-sm">Hallucigenia</div>
      </div>
      <div class="text-xs" style="color:var(--muted);">O pesadelo com espinhos</div>
      <div class="vida3-detail">
        <p class="text-xs leading-relaxed" style="color:#334155;">Uma criatura com uma dupla fila de espinhos rígidos nas costas e pernas tubulares moles. Durante décadas, os paleontólogos interpretaram-na de cabeça para baixo — pensavam que os espinhos eram as pernas. É parente dos tardígrados ("ursinhos de água") e dos artrópodes. O nome refere-se à sua aparência de sonho alucinante.</p>
      </div>
    </div>
    <div class="vida3-creature" onclick="toggleCreature(this)" style="background:#f0fdf4; border-color:#bbf7d0;">
      <div class="flex items-center gap-2 mb-1">
        <span class="text-xl">🐛</span>
        <div class="font-bold text-sm text-emerald-800">Pikaia</div>
      </div>
      <div class="text-xs" style="color:#16a34a;">O nosso antepassado</div>
      <div class="vida3-detail">
        <p class="text-xs leading-relaxed" style="color:#334155;">Um pequeno verme achatado, aparentemente insignificante — mas com uma característica revolucionária: uma notocorda (esboço de coluna vertebral). Isso torna-o um dos Cordados mais antigos conhecidos, e um dos antepassados mais remotos de peixes, anfíbios, répteis, aves, mamíferos — e humanos. Se a Pikaia se tivesse extinguido, provavelmente não estaríamos aqui para estudá-la.</p>
      </div>
    </div>
  </div>
</section>

<section data-label="Terra Firme" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">3. O Salto para o Desconhecido 🌿</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">Depois de centenas de milhões de anos confinada aos oceanos, a vida começou a conquistar a terra firme. Não foi um processo rápido — foi uma série de adaptações graduais, ao longo de dezenas de milhões de anos.</p>

  <div class="vida3-transition mb-5">
    <div class="vida3-card text-center">
      <div class="text-3xl mb-2">🌊</div>
      <div class="font-bold text-sm mb-1">No Oceano</div>
      <ul class="text-xs text-left space-y-1" style="color:var(--muted);">
        <li>• Suporte do peso pela água</li>
        <li>• Humidade constante</li>
        <li>• Proteção UV</li>
        <li>• Predadores gigantes</li>
      </ul>
    </div>
    <div class="text-3xl text-center" style="color:var(--accent);">→</div>
    <div class="vida3-card text-center" style="background:#f0fdf4; border-color:#bbf7d0;">
      <div class="text-3xl mb-2">🌱</div>
      <div class="font-bold text-sm mb-1 text-emerald-800">Em Terra</div>
      <ul class="text-xs text-left space-y-1" style="color:#16a34a;">
        <li>• Gravidade sem suporte</li>
        <li>• Risco de dessecação</li>
        <li>• Radiação UV intensa</li>
        <li>• Plantas e sem predadores</li>
      </ul>
    </div>
  </div>

  <div class="vida3-card mb-5" style="border-left:4px solid var(--accent); border-radius:0 1rem 1rem 0;">
    <div class="font-bold text-sm mb-2">🐟 O Tiktaalik — O Elo Perdido (375 Ma)</div>
    <div class="grid md:grid-cols-2 gap-3">
      <div>
        <div class="text-xs font-bold mb-1" style="color:var(--muted);">Como um peixe:</div>
        <ul class="text-xs space-y-1" style="color:#334155;">
          <li>• Escamas na pele</li>
          <li>• Barbatanas</li>
          <li>• Respiração branquial</li>
        </ul>
      </div>
      <div>
        <div class="text-xs font-bold mb-1" style="color:var(--accent);">Inovações terrestres:</div>
        <ul class="text-xs space-y-1" style="color:#334155;">
          <li>• Pescoço móvel (os peixes não viram a cabeça)</li>
          <li>• Pulmões primitivos</li>
          <li>• Ossos nas barbatanas (úmero, rádio, cúbito)</li>
          <li>• Conseguia fazer "flexões" e sair de água</li>
        </ul>
      </div>
    </div>
  </div>

  <div class="callout-sabias">
    <div class="callout-label">Sabias que?</div>
    <p class="text-sm leading-relaxed" style="color:#334155;">No período Carbonífero, o oxigénio na atmosfera chegou a <strong>35%</strong> (hoje é 21%) devido às vastas florestas de fetos gigantes. Com tanto oxigénio disponível para os insetos respirarem por difusão, existiam <strong>libelinhas do tamanho de águias</strong> (Meganeura, 70 cm de envergadura) e <strong>centopeias com 2 metros de comprimento</strong> (Arthropleura). O tamanho dos insetos é limitado pelo oxigénio disponível.</p>
  </div>
</section>

<script>
(function () {
  function toggleCreature(el) {
    var detail = el.querySelector('.vida3-detail');
    var isOpen = detail.classList.contains('visible');
    detail.classList.toggle('visible', !isOpen);
    el.classList.toggle('open', !isOpen);
  }
  window.toggleCreature = toggleCreature;
}());
</script>
