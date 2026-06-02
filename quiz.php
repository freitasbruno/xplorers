<?php
require_once __DIR__ . '/includes/data.php';

$id     = isset($_GET['id']) ? trim($_GET['id']) : '';
$lesson = $id ? get_lesson($id) : null;

if (!$lesson) {
    http_response_code(404);
    $header_mode = 'catalog';
    $page_title  = 'Quiz não encontrado';
    require_once __DIR__ . '/includes/header.php';
    ?>
    <main class="max-w-xl mx-auto px-4 py-24 text-center" style="position:relative;z-index:1;">
      <div class="text-6xl mb-6">🎯</div>
      <h1 class="text-2xl font-black text-slate-900 mb-3">Quiz não encontrado</h1>
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

$quiz = get_quiz($lesson);

$header_mode  = 'quiz';
$page_title   = $lesson['topic_name'] . ' · Aula ' . $lesson['class_number'] . ' — Quiz';
$quiz_total   = $quiz ? count($quiz['questions']) : 0;

require_once __DIR__ . '/includes/header.php';
?>

<?php if (!$quiz): ?>
  <!-- No quiz JSON — placeholder -->
  <main class="max-w-xl mx-auto px-4 py-24 text-center" style="position:relative;z-index:1;">
    <div class="text-6xl mb-6">🎯</div>
    <h1 class="text-xl font-bold text-slate-900 mb-2">Quiz em breve</h1>
    <p class="text-sm mb-8" style="color:var(--muted);">O quiz para esta aula está a ser preparado.</p>
    <a href="lesson.php?id=<?= htmlspecialchars($id) ?>"
       class="inline-flex items-center gap-2 font-semibold text-sm px-6 py-3 rounded-xl"
       style="border:1.5px solid var(--border);color:var(--muted);">
      ← Voltar à aula
    </a>
  </main>
<?php else: ?>
  <style>
  .option-btn {
    width: 100%;
    text-align: left;
    padding: 14px 16px;
    border-radius: 14px;
    border: 1.5px solid var(--border);
    background: var(--card-bg);
    font-size: 15px;
    font-weight: 500;
    color: #1e293b;
    cursor: pointer;
    transition: border-color 0.15s ease, background 0.15s ease;
    display: flex;
    align-items: center;
    gap: 12px;
  }
  .option-btn:hover:not([disabled]) { border-color: var(--accent); background: var(--accent-light); }
  .option-btn[disabled] { cursor: default; }
  .option-btn.correct { border-color: #22c55e; background: #f0fdf4; color: #15803d; }
  .option-btn.wrong   { border-color: #ef4444; background: #fef2f2; color: #b91c1c; }
  .option-btn.reveal  { border-color: #22c55e; background: #f0fdf4; color: #15803d; }

  .option-letter {
    width: 26px; height: 26px;
    border-radius: 8px;
    border: 1.5px solid currentColor;
    display: flex; align-items: center; justify-content: center;
    font-size: 12px; font-weight: 700;
    flex-shrink: 0;
    opacity: 0.6;
  }
  .option-btn.correct .option-letter,
  .option-btn.wrong   .option-letter,
  .option-btn.reveal  .option-letter { opacity: 1; }

  .feedback-icon { flex-shrink: 0; font-size: 17px; font-weight: 900; margin-left: auto; }
  .option-btn.correct .feedback-icon,
  .option-btn.reveal  .feedback-icon { color: #16a34a; }
  .option-btn.wrong   .feedback-icon { color: #dc2626; }

  .progress-bar-fill { transition: width 0.4s ease; }

  .quiz-screen { display: none; }
  .quiz-screen.active { display: block; }
  </style>

  <main class="max-w-xl mx-auto px-4 py-8" style="position:relative;z-index:1;">

    <!-- QUESTION SCREEN -->
    <div id="screen-question" class="quiz-screen active">
      <div id="question-text" class="text-xl font-black text-slate-900 leading-snug mb-8"></div>
      <div id="options-list" class="flex flex-col gap-3 mb-6"></div>

      <div id="explanation-box" class="hidden rounded-2xl p-4 mb-6" style="background:#f8faff;border:1.5px solid #bfdbfe;">
        <div class="text-xs font-bold uppercase tracking-wide mb-1.5" style="color:#2563eb;">Explicação</div>
        <p id="explanation-text" class="text-sm leading-relaxed text-slate-700"></p>
      </div>

      <button id="next-btn" class="hidden w-full py-3.5 rounded-2xl font-bold text-white text-sm"
              style="background:var(--accent);">
        Próxima pergunta →
      </button>
    </div>

    <!-- RESULTS SCREEN -->
    <div id="screen-results" class="quiz-screen">
      <div class="text-center py-4">
        <div class="text-6xl mb-6" id="result-emoji">🎯</div>
        <div class="text-4xl font-black text-slate-900 mb-2" id="score-text"></div>
        <div class="text-base font-medium mb-8" id="score-label" style="color:var(--muted);"></div>

        <div class="rounded-2xl p-5 mb-8 text-left" style="background:var(--card-bg);border:1px solid var(--border);">
          <div id="result-breakdown" class="flex flex-col gap-2"></div>
        </div>

        <div class="flex flex-col gap-3">
          <button id="retry-btn" class="w-full py-3.5 rounded-2xl font-bold text-sm"
                  style="background:var(--accent);color:white;">
            Tentar novamente
          </button>
          <a id="back-to-lesson" href="lesson.php?id=<?= htmlspecialchars($id) ?>"
             class="w-full py-3.5 rounded-2xl font-bold text-sm text-center block"
             style="border:1.5px solid var(--border);color:var(--muted);">
            ← Voltar à aula
          </a>
        </div>
      </div>
    </div>

  </main>

  <script>
    const QUIZ_DATA = <?= json_encode($quiz, JSON_UNESCAPED_UNICODE) ?>;
  </script>
  <script src="assets/js/quiz.js"></script>
<?php endif; ?>

<?php
$footer_mode = 'catalog';
require_once __DIR__ . '/includes/footer.php';
?>
