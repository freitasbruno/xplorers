<?php $reflection_question = 'A expansão do universo implica que no passado era mais pequeno e mais denso. Se pudéssemos "andar para trás no tempo", chegaríamos a um ponto inicial. Que nome se dá a essa teoria sobre a origem do universo?'; ?>

<style>
.scale-row { display: flex; align-items: center; gap: 0.75rem; padding: 0.75rem 1rem; border-radius: 0.75rem; margin-bottom: 0.5rem; background: var(--card-bg); border: 1px solid var(--border); }
.scale-bar-wrap { flex: 1; height: 8px; background: var(--border); border-radius: 999px; overflow: hidden; }
.scale-bar { height: 100%; border-radius: 999px; background: var(--accent); }
.timeline-item { position: relative; padding-left: 2rem; padding-bottom: 1.25rem; }
.timeline-item::before { content: ''; position: absolute; left: 0.4rem; top: 0.5rem; bottom: 0; width: 2px; background: var(--border); }
.timeline-item:last-child::before { display: none; }
.timeline-dot { position: absolute; left: 0; top: 0.35rem; width: 0.875rem; height: 0.875rem; border-radius: 50%; background: var(--accent); border: 2px solid var(--card-bg); }
</style>

<section data-label="Vastidão do Universo" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">1. Uma Escala Inimaginável: A Vastidão do Universo 📏</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">A nossa mente tem dificuldade em lidar com números astronómicos. A Via Láctea sozinha contém entre <strong>100 a 400 mil milhões de estrelas</strong>. No universo observável, estima-se que existam cerca de <strong>2 biliões de galáxias</strong>.</p>

  <div class="callout-sabias mb-6">
    <div class="callout-label">Sabias que...?</div>
    <p class="text-sm" style="color:#334155;">Se contasses todas as estrelas da Via Láctea, a uma por segundo, demorarias mais de <strong>3 000 anos</strong>. E isso é apenas para a nossa galáxia!</p>
  </div>

  <p class="font-semibold text-xs uppercase tracking-widest mb-3" style="color:var(--muted);">Distâncias em luz — quanto tempo demora a luz a percorrer cada distância</p>

  <?php
  $scale = [
    ['dest' => 'Lua',                       'dist' => '1,3 segundos', 'pct' => 2],
    ['dest' => 'Sol',                        'dist' => '8 minutos',   'pct' => 6],
    ['dest' => 'Proxima Centauri',           'dist' => '4,2 anos',    'pct' => 22],
    ['dest' => 'Diâmetro da Via Láctea',    'dist' => '~100 000 anos','pct' => 100],
  ];
  foreach ($scale as $s): ?>
    <div class="scale-row">
      <span class="text-sm font-semibold shrink-0" style="width:11rem;color:#1e293b;"><?= $s['dest'] ?></span>
      <div class="scale-bar-wrap">
        <div class="scale-bar" style="width:<?= $s['pct'] ?>%;"></div>
      </div>
      <span class="text-xs font-semibold shrink-0" style="color:var(--accent);"><?= $s['dist'] ?></span>
    </div>
  <?php endforeach; ?>
</section>

<section data-label="Universo em Expansão" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">2. O Universo em Expansão: Um Bolo a Crescer 🌌</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-5">Durante muito tempo, pensámos que o universo era estático. No início do século XX, o astrónomo <strong>Edwin Hubble</strong> observou que as galáxias distantes se estavam a afastar de nós — e quanto mais longe, mais depressa se afastavam (<em>redshift</em>). O universo está em <strong>expansão constante</strong>.</p>

  <div class="paper rounded-2xl p-5 mb-5">
    <div class="font-bold text-sm mb-3" style="color:var(--accent);">🍞 A Analogia do Pão com Passas</div>
    <div class="flex flex-col gap-2">
      <?php
      $steps = [
        'As <strong>passas</strong> são as galáxias. A <strong>massa do pão</strong> é o tecido do espaço.',
        'À medida que o pão coze, a massa expande-se em <strong>todas as direções</strong>.',
        'Do ponto de vista de qualquer passa, <strong>todas as outras parecem afastar-se</strong>. As mais distantes afastam-se mais depressa.',
      ];
      foreach ($steps as $i => $s): ?>
        <div class="flex gap-2.5 items-start text-sm" style="color:#334155;">
          <span class="font-bold shrink-0" style="color:var(--accent);"><?= $i + 1 ?>.</span>
          <span><?= $s ?></span>
        </div>
      <?php endforeach; ?>
    </div>
    <p class="text-xs mt-3 italic" style="color:var(--muted);">Isto não significa que estamos no centro do universo. Qualquer galáxia teria a mesma impressão — é o próprio espaço que se está a esticar.</p>
  </div>
</section>

<section data-label="Ver o Passado" class="mb-10">
  <h2 class="text-xl font-bold text-slate-900 mb-1">3. Olhar para as Estrelas é Ver o Passado ⏳</h2>
  <div class="w-8 h-0.5 rounded-full mb-6" style="background:var(--accent);"></div>

  <p class="prose-lesson mb-6">Como a luz demora tempo a viajar, quando olhamos para objetos distantes, não os vemos como são <em>agora</em> — vemos como eram quando a luz partiu de lá. Olhar para o espaço é literalmente <strong>viajar no tempo</strong>.</p>

  <div>
    <div class="timeline-item">
      <div class="timeline-dot"></div>
      <div class="font-semibold text-sm">☀️ O Sol — <span style="color:var(--accent);">8 minutos atrás</span></div>
      <p class="text-sm mt-0.5" style="color:var(--muted);">Se o Sol desaparecesse agora, só daríamos por isso 8 minutos depois.</p>
    </div>
    <div class="timeline-item">
      <div class="timeline-dot"></div>
      <div class="font-semibold text-sm">🌟 Proxima Centauri — <span style="color:var(--accent);">4,2 anos atrás</span></div>
      <p class="text-sm mt-0.5" style="color:var(--muted);">A estrela mais próxima como era há 4,2 anos. Se explodisse hoje, só saberíamos em 2030.</p>
    </div>
    <div class="timeline-item">
      <div class="timeline-dot"></div>
      <div class="font-semibold text-sm">🌌 Galáxia de Andrómeda — <span style="color:var(--accent);">2,5 milhões de anos atrás</span></div>
      <p class="text-sm mt-0.5" style="color:var(--muted);">A luz que vemos hoje partiu quando os nossos antepassados hominídeos vagueavam pela África.</p>
    </div>
    <div class="timeline-item">
      <div class="timeline-dot"></div>
      <div class="font-semibold text-sm">🔭 Galáxias Mais Distantes (James Webb) — <span style="color:var(--accent);">+13 mil milhões de anos atrás</span></div>
      <p class="text-sm mt-0.5" style="color:var(--muted);">Estamos a ver o universo quando era apenas um "bebé", pouco depois do Big Bang.</p>
    </div>
  </div>
</section>
