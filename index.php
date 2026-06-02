<?php
require_once __DIR__ . '/includes/data.php';

$header_mode = 'lesson';
$lesson = get_lesson('cosmos_001');
$page_title  = 'Catálogo';

require_once __DIR__ . '/includes/header.php';

// Quick data sanity check (remove before production)
$all      = get_lessons();
$cosmos   = get_topic_lessons('cosmos');
$featured = get_featured_lessons();
?>

<main class="max-w-5xl mx-auto px-4 py-12" style="position: relative; z-index: 1;">
  <h1 class="text-3xl font-black text-slate-900 mb-2">X.Plorers</h1>
  <p class="mb-8" style="color: var(--muted);">Layout foundation smoke test</p>

  <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-12">
    <div class="paper rounded-2xl p-5">
      <div class="text-3xl font-black" style="color: var(--accent);"><?= count($all) ?></div>
      <div class="text-sm font-medium text-slate-700 mt-1">Total de aulas</div>
      <div class="text-xs mt-0.5" style="color: var(--muted);">get_lessons()</div>
    </div>
    <div class="paper rounded-2xl p-5">
      <div class="text-3xl font-black" style="color: var(--accent);"><?= count($cosmos) ?></div>
      <div class="text-sm font-medium text-slate-700 mt-1">Aulas de Cosmos</div>
      <div class="text-xs mt-0.5" style="color: var(--muted);">get_topic_lessons('cosmos')</div>
    </div>
    <div class="paper rounded-2xl p-5">
      <div class="text-3xl font-black" style="color: var(--accent);"><?= count($featured) ?></div>
      <div class="text-sm font-medium text-slate-700 mt-1">Em Destaque</div>
      <div class="text-xs mt-0.5" style="color: var(--muted);">get_featured_lessons()</div>
    </div>
  </div>

  <h2 class="text-lg font-bold text-slate-900 mb-4">Topic badges</h2>
  <div class="flex flex-wrap gap-2 mb-12">
    <?php foreach (['cosmos','olimpicos','sustentabilidade','empreendedorismo','volley','computadores','videojogos','vida','wwii'] as $slug): ?>
      <span class="badge <?= topic_badge_class($slug) ?>"><?= $slug ?></span>
    <?php endforeach; ?>
  </div>

  <h2 class="text-lg font-bold text-slate-900 mb-4">Lesson mode header test</h2>
  <p class="text-sm mb-4" style="color: var(--muted);">
    Switch <code>$header_mode</code> to <code>'lesson'</code> and set <code>$lesson</code> to test the lesson header variant.
  </p>
</main>

<?php
$footer_mode = 'lesson';
require_once __DIR__ . '/includes/footer.php';
?>
