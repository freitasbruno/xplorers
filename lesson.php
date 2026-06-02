<?php
require_once __DIR__ . '/includes/data.php';

$id     = isset($_GET['id']) ? trim($_GET['id']) : '';
$lesson = $id ? get_lesson($id) : null;

if (!$lesson) {
    http_response_code(404);
    $header_mode = 'catalog';
    $page_title  = 'Aula não encontrada';
    require_once __DIR__ . '/includes/header.php';
    ?>
    <main class="max-w-3xl mx-auto px-4 py-24 text-center" style="position:relative;z-index:1;">
      <div class="text-6xl mb-6">🔭</div>
      <h1 class="text-2xl font-black text-slate-900 mb-3">Aula não encontrada</h1>
      <p class="text-sm mb-8" style="color:var(--muted);">
        <?php if ($id): ?>
          O identificador <code class="font-mono bg-slate-100 px-1.5 py-0.5 rounded"><?= htmlspecialchars($id) ?></code> não corresponde a nenhuma aula.
        <?php else: ?>
          Nenhum identificador de aula foi fornecido.
        <?php endif; ?>
      </p>
      <a href="/" class="inline-flex items-center gap-2 font-semibold text-sm px-6 py-3 rounded-xl"
         style="background:var(--accent);color:white;">
        <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="m15 18-6-6 6-6"/></svg>
        Voltar ao catálogo
      </a>
    </main>
    <?php
    $footer_mode = 'catalog';
    require_once __DIR__ . '/includes/footer.php';
    exit;
}

// Prev / next within topic
$topic_lessons = get_topic_lessons($lesson['topic_slug']);
$pos           = array_search($lesson['id'], array_column($topic_lessons, 'id'));
$prev_lesson   = $pos > 0 ? $topic_lessons[$pos - 1] : null;
$next_lesson   = $pos < count($topic_lessons) - 1 ? $topic_lessons[$pos + 1] : null;

// Content file
$content_file   = __DIR__ . '/' . $lesson['content_file'];
$content_exists = file_exists($content_file);

// Page setup
$header_mode = 'lesson';
$page_title  = $lesson['topic_name'] . ' · Aula ' . $lesson['class_number'];

require_once __DIR__ . '/includes/header.php';

// Will be set by content file if it defines one
$reflection_question = null;
?>
<style>
@media (max-width: 767px) { body { padding-bottom: 72px; } }
.prose-lesson { font-size: 17px; line-height: 1.75; color: #334155; }
.prose-lesson p { margin-bottom: 1.25rem; }
.prose-lesson h2 { font-size: 1.125rem; font-weight: 700; color: #1e293b; margin: 2rem 0 0.5rem; }
.prose-lesson h3 { font-size: 1rem; font-weight: 700; color: #1e293b; margin: 1.5rem 0 0.25rem; }
.prose-lesson ul, .prose-lesson ol { padding-left: 1.5rem; margin-bottom: 1.25rem; }
.prose-lesson li { margin-bottom: 0.35rem; }
.prose-lesson strong { color: #1e293b; font-weight: 700; }
.prose-lesson blockquote { border-left: 4px solid var(--accent); padding-left: 1rem; font-style: italic; color: var(--muted); margin: 1.5rem 0; }
.prose-lesson h4 { font-size: 0.95rem; font-weight: 700; color: #1e293b; margin: 1.25rem 0 0.25rem; }
.prose-lesson hr { border: none; border-top: 1px solid var(--border); margin: 2rem 0; }
</style>

<!-- CONTEÚDO TAB -->
<div id="tab-conteudo" class="max-w-3xl mx-auto px-4 py-8">

  <!-- Title block -->
  <div class="mb-8">
    <div class="flex items-center gap-2 mb-3">
      <span class="text-xs font-semibold uppercase tracking-widest" style="color:var(--muted);">Aula <?= $lesson['class_number'] ?> de <?= $lesson['class_total'] ?></span>
      <span class="w-1 h-1 rounded-full" style="background:var(--border);"></span>
      <span class="text-xs font-semibold uppercase tracking-widest" style="color:var(--muted);"><?= htmlspecialchars($lesson['topic_name']) ?></span>
    </div>
    <h1 class="text-2xl md:text-3xl font-black text-slate-900 leading-tight mb-4">
      <?= htmlspecialchars($lesson['title']) ?>
    </h1>
    <div class="w-12 h-1 rounded-full" style="background:var(--accent);"></div>
  </div>

  <!-- Hero image -->
  <div class="rounded-2xl overflow-hidden mb-8 shadow-sm" style="border:1px solid var(--border);">
    <img src="<?= htmlspecialchars($lesson['image_url']) ?>"
         alt="<?= htmlspecialchars($lesson['title']) ?>"
         class="wc-img w-full h-52 md:h-64 object-cover">
  </div>

  <!-- Chapter sub-nav — hidden until lesson.js populates it -->
  <div id="chapter-nav" class="sticky top-14 md:top-[100px] z-40 -mx-4 px-4 mb-8 hidden"
       style="background:rgba(248,245,240,0.96);backdrop-filter:blur(10px);border-bottom:1px solid var(--border);">
    <div id="chapter-nav-inner" class="flex gap-2 py-2.5 overflow-x-auto no-scrollbar"></div>
  </div>

  <!-- Lesson content (included from content file, or placeholder) -->
  <?php if ($content_exists): ?>
    <div class="prose-lesson">
      <?php include $content_file; ?>
    </div>
  <?php else: ?>
    <div class="paper rounded-2xl p-10 text-center mb-10">
      <div class="text-4xl mb-4">🚧</div>
      <p class="font-semibold text-slate-700 mb-1">Conteúdo em breve</p>
      <p class="text-sm" style="color:var(--muted);">Esta aula está a ser preparada.</p>
    </div>
  <?php endif; ?>

  <!-- Reflection question (set by content file) -->
  <?php if (!empty($reflection_question)): ?>
    <div class="rounded-2xl p-6 mb-8 text-center" style="background:#1e293b;">
      <div class="text-xs font-semibold uppercase tracking-widest mb-3" style="color:var(--accent);">Questão para Reflexão</div>
      <p class="text-base leading-relaxed" style="color:#cbd5e1;"><?= htmlspecialchars($reflection_question) ?></p>
    </div>
  <?php endif; ?>

  <!-- Prev / next nav -->
  <nav class="flex gap-3 mt-8 mb-6">
    <?php if ($prev_lesson): ?>
      <a href="lesson.php?id=<?= htmlspecialchars($prev_lesson['id']) ?>"
         class="flex-1 min-w-0 paper rounded-2xl p-4 flex items-center gap-3 card-hover">
        <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" class="flex-shrink-0" style="color:var(--muted);"><path d="m15 18-6-6 6-6"/></svg>
        <div class="min-w-0">
          <div class="text-xs font-semibold uppercase tracking-wide mb-0.5" style="color:var(--muted);">Anterior</div>
          <div class="text-sm font-bold text-slate-900 truncate"><?= htmlspecialchars($prev_lesson['title']) ?></div>
        </div>
      </a>
    <?php else: ?>
      <div class="flex-1"></div>
    <?php endif; ?>

    <?php if ($next_lesson): ?>
      <a href="lesson.php?id=<?= htmlspecialchars($next_lesson['id']) ?>"
         class="flex-1 min-w-0 paper rounded-2xl p-4 flex items-center justify-end gap-3 card-hover text-right">
        <div class="min-w-0">
          <div class="text-xs font-semibold uppercase tracking-wide mb-0.5" style="color:var(--muted);">Próxima</div>
          <div class="text-sm font-bold text-slate-900 truncate"><?= htmlspecialchars($next_lesson['title']) ?></div>
        </div>
        <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" class="flex-shrink-0" style="color:var(--muted);"><path d="m9 18 6-6-6-6"/></svg>
      </a>
    <?php endif; ?>
  </nav>

</div>

<!-- QUIZ TAB -->
<div id="tab-quiz" class="hidden max-w-3xl mx-auto px-4 py-8">
  <?php if (!empty($lesson['has_quiz'])): ?>
    <div class="paper rounded-2xl p-10 text-center">
      <div class="text-5xl mb-4">🎯</div>
      <h2 class="text-xl font-bold text-slate-900 mb-2">
        Quiz — <?= htmlspecialchars($lesson['topic_name']) ?> Aula <?= $lesson['class_number'] ?>
      </h2>
      <p class="text-sm mb-6" style="color:var(--muted);">Testa o que aprendeste.</p>
      <a href="quiz.php?id=<?= htmlspecialchars($lesson['id']) ?>"
         class="inline-flex items-center gap-2 font-semibold px-8 py-3 rounded-xl"
         style="background:var(--accent);color:white;">
        Começar Quiz →
      </a>
    </div>
  <?php else: ?>
    <div class="text-center py-24">
      <div class="text-5xl mb-5">🎯</div>
      <p class="font-semibold text-slate-700 mb-2">Quiz em breve</p>
      <p class="text-sm" style="color:var(--muted);">O quiz para esta aula está a ser preparado.</p>
    </div>
  <?php endif; ?>
</div>

<!-- TEXTO TAB -->
<div id="tab-texto" class="hidden max-w-3xl mx-auto px-4 py-8">
<?php
$md_data = null;
if (!empty($lesson['md_file'])) {
    $md_data = parse_md_lesson(__DIR__ . '/' . $lesson['md_file']);
}
if ($md_data): ?>

  <!-- Title card -->
  <div class="paper rounded-2xl p-6 mb-8">
    <div class="flex flex-wrap items-center gap-2 mb-4">
      <span class="badge <?= topic_badge_class($lesson['topic_slug']) ?>">
        <?= htmlspecialchars($md_data['meta']['topic'] ?? $lesson['topic_name']) ?>
      </span>
    </div>
    <h2 class="text-xl font-black text-slate-900 leading-tight mb-2">
      <?= htmlspecialchars($md_data['meta']['title'] ?? $lesson['title']) ?>
    </h2>
    <?php if (!empty($md_data['meta']['class'])): ?>
      <div class="text-xs font-semibold mb-3" style="color:var(--muted);">
        Aula #<?= htmlspecialchars($md_data['meta']['class']) ?>
      </div>
    <?php endif; ?>
    <?php if (!empty($md_data['meta']['description'])): ?>
      <p class="text-sm leading-relaxed" style="color:var(--muted);">
        <?= htmlspecialchars($md_data['meta']['description']) ?>
      </p>
    <?php endif; ?>
  </div>

  <!-- Markdown body -->
  <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
  <div id="md-body" class="prose-lesson"></div>
  <script>
    document.getElementById('md-body').innerHTML = marked.parse(<?= json_encode($md_data['body']) ?>);
  </script>

<?php else: ?>
  <div class="text-center py-24">
    <div class="text-5xl mb-5">📄</div>
    <p class="font-semibold text-slate-700 mb-2">Texto em breve</p>
    <p class="text-sm" style="color:var(--muted);">A versão em texto desta aula estará disponível em breve.</p>
  </div>
<?php endif; ?>
</div>

<script src="assets/js/lesson.js"></script>
<?php
$footer_mode         = 'lesson';
$reflection_question = null;
require_once __DIR__ . '/includes/footer.php';
?>
