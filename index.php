<?php
require_once __DIR__ . '/includes/data.php';

$header_mode = 'catalog';
$page_title  = 'Catálogo';

require_once __DIR__ . '/includes/header.php';

$all_lessons = get_lessons();
$featured    = get_featured_lessons();
?>

<style>
/* ── Search widget ── */
.search-box {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  gap: 0.4rem;
  padding: 0.5rem 0.75rem;
  background: var(--card-bg);
  border: 1.5px solid var(--border);
  border-radius: 1rem;
  cursor: text;
  min-height: 3rem;
  position: relative;
  transition: border-color 0.15s;
}
.search-box.focused { border-color: var(--accent); }

.search-icon { color: var(--muted); flex-shrink: 0; display: flex; align-items: center; }

.search-input {
  border: none;
  outline: none;
  background: transparent;
  font-size: 0.9rem;
  font-family: 'Inter', sans-serif;
  color: var(--text);
  flex: 1;
  min-width: 8rem;
  padding: 0.15rem 0;
}
.search-input::placeholder { color: var(--muted); }

.search-token {
  display: inline-flex;
  align-items: center;
  gap: 0.3rem;
  padding: 0.2rem 0.5rem 0.2rem 0.65rem;
  border-radius: 999px;
  font-size: 0.75rem;
  font-weight: 600;
  flex-shrink: 0;
  animation: token-in 0.15s ease;
}
@keyframes token-in { from { transform: scale(0.85); opacity: 0; } to { transform: scale(1); opacity: 1; } }

.search-token-remove {
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(255,255,255,0.3);
  border: none;
  cursor: pointer;
  border-radius: 999px;
  width: 1rem;
  height: 1rem;
  padding: 0;
  color: inherit;
  transition: background 0.1s;
  flex-shrink: 0;
}
.search-token-remove:hover { background: rgba(255,255,255,0.5); }

.search-clear-btn {
  display: none;
  align-items: center;
  justify-content: center;
  background: none;
  border: none;
  cursor: pointer;
  color: var(--muted);
  padding: 0.2rem;
  border-radius: 999px;
  flex-shrink: 0;
  transition: color 0.15s;
}
.search-clear-btn:hover { color: var(--text); }
.search-box.has-tokens .search-clear-btn,
.search-box.has-text   .search-clear-btn { display: flex; }

/* ── Dropdown ── */
.search-dropdown {
  position: absolute;
  top: calc(100% + 0.4rem);
  left: 0;
  right: 0;
  background: var(--card-bg);
  border: 1.5px solid var(--border);
  border-radius: 0.875rem;
  box-shadow: 0 8px 24px -4px rgba(0,0,0,0.1);
  overflow: hidden;
  z-index: 100;
  display: none;
}
.search-dropdown.open { display: block; }

.dd-section { padding: 0.4rem 0; }
.dd-label {
  padding: 0.3rem 0.875rem;
  font-size: 0.68rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.06em;
  color: var(--muted);
}
.dd-item {
  display: flex;
  align-items: center;
  gap: 0.6rem;
  padding: 0.55rem 0.875rem;
  cursor: pointer;
  font-size: 0.875rem;
  color: var(--text);
  transition: background 0.1s;
}
.dd-item:hover { background: var(--bg); }
.dd-dot { width: 0.55rem; height: 0.55rem; border-radius: 50%; flex-shrink: 0; }
.dd-divider { height: 1px; background: var(--border); margin: 0.25rem 0; }
</style>

<main class="max-w-5xl mx-auto px-4 py-8">

  <!-- EM DESTAQUE -->
  <section id="featured-section" class="mb-12">
    <div class="flex items-center gap-3 mb-5">
      <h2 class="text-xl font-bold text-slate-900">Em Destaque</h2>
      <div class="flex-1 h-px" style="background:var(--border);"></div>
      <span class="text-xs font-semibold uppercase tracking-wide" style="color:var(--accent);">Novo</span>
    </div>
    <div id="featured-strip" class="grid grid-cols-1 md:grid-cols-2 gap-4"></div>
  </section>

  <!-- TODAS AS AULAS -->
  <section>

    <!-- Section heading — hidden when filtering -->
    <div id="section-header" class="flex items-center gap-4 mb-5">
      <h2 class="text-xl font-bold text-slate-900 flex-shrink-0">Todas as Aulas</h2>
      <div class="flex-1 h-px" style="background:var(--border);"></div>
    </div>

    <!-- Search widget -->
    <div id="search-container" class="mb-4" style="position:relative;">
      <div id="search-box" class="search-box">
        <span class="search-icon">
          <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/>
          </svg>
        </span>
        <div id="tokens-container" style="display:contents;"></div>
        <input type="text" id="search-input" class="search-input"
               placeholder="Pesquisar aulas ou tema…" autocomplete="off" spellcheck="false">
        <button class="search-clear-btn" onclick="clearAll()" aria-label="Limpar tudo">
          <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
            <path d="M18 6 6 18M6 6l12 12"/>
          </svg>
        </button>
      </div>

      <!-- Autocomplete dropdown -->
      <div id="search-dropdown" class="search-dropdown">
        <div class="dd-section" id="dd-topics-section">
          <div class="dd-label">Temas</div>
          <div id="dd-topics"></div>
        </div>
        <div id="dd-divider" class="dd-divider" style="display:none;"></div>
        <div class="dd-section" id="dd-lessons-section" style="display:none;">
          <div class="dd-label">Aulas</div>
          <div id="dd-lessons"></div>
        </div>
      </div>
    </div>

    <!-- Count + limpar -->
    <div class="flex items-center justify-between mb-5">
      <p id="count-label" class="text-xs" style="color:var(--muted);"></p>
      <button id="limpar-btn" class="hidden text-xs font-semibold" style="color:var(--accent);background:none;border:none;cursor:pointer;" onclick="clearAll()">Limpar tudo</button>
    </div>

    <div id="cards-grid" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4"></div>

    <div id="empty-state" class="hidden text-center py-16">
      <p class="text-base font-medium text-slate-500">Nenhuma aula encontrada.</p>
      <button onclick="clearAll()" class="mt-4 text-sm font-semibold" style="color:var(--accent);">Ver todas as aulas</button>
    </div>

    <div id="load-sentinel" class="flex justify-center py-10">
      <div class="load-spinner"></div>
    </div>
  </section>

</main>

<script>
  const LESSONS_DATA  = <?= json_encode(array_values($all_lessons), JSON_UNESCAPED_UNICODE) ?>;
  const FEATURED_DATA = <?= json_encode(array_values($featured),    JSON_UNESCAPED_UNICODE) ?>;
</script>
<script src="assets/js/catalog.js"></script>

<?php
$footer_mode = 'catalog';
require_once __DIR__ . '/includes/footer.php';
?>
