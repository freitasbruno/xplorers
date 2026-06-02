<?php
/**
 * Shared footer.
 *
 * Variables (set before including):
 *   $footer_mode          — 'catalog' (default) | 'lesson'
 *   $reflection_question  — string, shown in lesson footer (optional)
 *   $next_lesson          — array ['title' => '', 'url' => ''], shown if set (optional)
 */
$footer_mode         = $footer_mode         ?? 'catalog';
$reflection_question = $reflection_question ?? null;
$next_lesson         = $next_lesson         ?? null;
?>

<?php if ($footer_mode === 'lesson' && $reflection_question): ?>
  <!-- LESSON REFLECTION FOOTER -->
  <footer class="rounded-2xl p-6 mb-6 text-center max-w-3xl mx-auto px-4" style="background: #1e293b; position: relative; z-index: 1;">
    <div class="text-xs font-semibold uppercase tracking-widest mb-3" style="color: var(--accent);">
      Questão para Reflexão
    </div>
    <p class="text-base leading-relaxed mb-5" style="color: #cbd5e1;">
      <?= htmlspecialchars($reflection_question) ?>
    </p>
    <?php if ($next_lesson): ?>
      <a href="<?= htmlspecialchars($next_lesson['url']) ?>"
         class="inline-flex items-center gap-2 font-semibold text-sm px-6 py-3 rounded-xl transition-colors"
         style="background: var(--accent); color: white;">
        Próxima aula
        <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
          <path d="m9 18 6-6-6-6"/>
        </svg>
      </a>
    <?php endif; ?>
  </footer>
<?php endif; ?>

<!-- BRAND FOOTER -->
<footer class="mt-8 py-8 border-t text-center text-sm" style="border-color: var(--border); color: var(--muted); position: relative; z-index: 1;">
  <span class="font-semibold" style="color: #475569;">X.Plorers</span> · Descobre. Aprende. Explora.
</footer>

<?php if ($footer_mode === 'lesson'): ?>
  <!-- MOBILE TAB BAR — fixed bottom -->
  <nav class="md:hidden fixed bottom-0 left-0 right-0 z-50 border-t" style="background: rgba(245,240,232,0.96); border-color: var(--border); padding-bottom: env(safe-area-inset-bottom, 0px);">
    <div class="flex">
      <button id="tab-btn-mob-conteudo" onclick="setTab(TAB_NAMES,'conteudo')"
        class="flex-1 flex flex-col items-center pt-2 pb-3 relative gap-0.5 tab-active"
        style="color: var(--accent);">
        <div class="tab-indicator"></div>
        <span class="text-lg">📖</span>
        <span class="text-xs font-medium">Conteúdo</span>
      </button>
      <button id="tab-btn-mob-quiz" onclick="setTab(TAB_NAMES,'quiz')"
        class="flex-1 flex flex-col items-center pt-2 pb-3 relative gap-0.5"
        style="color: var(--muted);">
        <div class="tab-indicator"></div>
        <span class="text-lg">🎯</span>
        <span class="text-xs font-medium">Quiz</span>
      </button>
      <button id="tab-btn-mob-texto" onclick="setTab(TAB_NAMES,'texto')"
        class="flex-1 flex flex-col items-center pt-2 pb-3 relative gap-0.5"
        style="color: var(--muted);">
        <div class="tab-indicator"></div>
        <span class="text-lg">📄</span>
        <span class="text-xs font-medium">Texto</span>
      </button>
    </div>
  </nav>
<?php endif; ?>

<script src="assets/js/tabs.js"></script>
<?php if ($footer_mode === 'lesson'): ?>
<script>
  const TAB_NAMES = ['conteudo', 'quiz', 'texto'];
  document.addEventListener('DOMContentLoaded', () => initTabs(TAB_NAMES, 'conteudo'));
</script>
<?php endif; ?>

</body>
</html>
