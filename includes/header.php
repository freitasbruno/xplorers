<?php
/**
 * Shared header.
 *
 * Variables (set before including):
 *   $header_mode      — 'catalog' (default) | 'lesson'
 *   $page_title       — <title> tag content
 *   $lesson           — array from get_lesson() — required when mode = 'lesson'
 */
$header_mode = $header_mode ?? 'catalog';
$page_title  = $page_title  ?? 'X.Plorers';
$lesson      = $lesson      ?? null;

$badge_class = $lesson ? topic_badge_class($lesson['topic_slug']) : '';
?>
<!DOCTYPE html>
<html lang="pt-PT">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($page_title) ?> — X.Plorers</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <style>
/* X.Plorers — Design System */

:root {
  --accent:       #f43f5e;
  --accent-light: #fff1f2;
  --bg:           #f8f5f0;
  --card-bg:      #fdfaf4;
  --border:       #e3d9c8;
  --text:         #1e293b;
  --muted:        #7c7264;
}

*, *::before, *::after { box-sizing: border-box; }
html { scroll-behavior: smooth; }
body {
  font-family: 'Inter', sans-serif;
  background-color: var(--bg);
  color: var(--text);
  min-height: 100vh;
  position: relative;
}

body::before {
  content: '';
  position: fixed;
  inset: 0;
  pointer-events: none;
  z-index: 0;
  opacity: 0.08;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='300'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='300' height='300' filter='url(%23n)' opacity='1'/%3E%3C/svg%3E");
  background-repeat: repeat;
  background-size: 300px 300px;
}

header, main, footer, nav, section, aside { position: relative; z-index: 1; }

.wc-img {
  filter: saturate(0.68) sepia(0.2) brightness(1.05) contrast(0.87);
  transition: filter 0.3s ease;
}
.wc-img:hover {
  filter: saturate(0.82) sepia(0.14) brightness(1.06) contrast(0.9);
}

.paper {
  background: var(--card-bg);
  border: 1px solid var(--border);
}

.card-hover {
  transition: transform 0.22s ease, box-shadow 0.22s ease;
}
.card-hover:hover {
  transform: translateY(-4px);
  box-shadow: 0 14px 36px -6px rgba(80, 55, 20, 0.16);
}

.card-appear {
  animation: fadeUp 0.3s ease both;
}
@keyframes fadeUp {
  from { opacity: 0; transform: translateY(10px); }
  to   { opacity: 1; transform: translateY(0); }
}

.logo-mark {
  width: 32px;
  height: 32px;
  background: var(--accent);
  border-radius: 9px;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  box-shadow: 0 2px 8px rgba(244, 63, 94, 0.35);
}

.badge { font-size: 11px; font-weight: 600; padding: 3px 8px; border-radius: 999px; white-space: nowrap; }
.badge-cosmos          { background: #e0e7ff; color: #4338ca; }
.badge-olimpicos       { background: #fef9c3; color: #a16207; }
.badge-sustentabilidade{ background: #d1fae5; color: #065f46; }
.badge-empreendedorismo{ background: #fef3c7; color: #92400e; }
.badge-volley          { background: #ffedd5; color: #9a3412; }
.badge-computadores    { background: #dbeafe; color: #1e40af; }
.badge-videojogos      { background: #ede9fe; color: #5b21b6; }
.badge-vida            { background: #dcfce7; color: #14532d; }
.badge-wwii            { background: #fee2e2; color: #991b1b; }
.badge-default         { background: #f1f5f9; color: #475569; }

.tab-indicator {
  position: absolute;
  top: 0;
  left: 50%;
  transform: translateX(-50%);
  height: 2px;
  width: 32px;
  background: var(--accent);
  border-radius: 999px;
  opacity: 0;
  transition: opacity 0.15s ease;
}
.tab-active .tab-indicator { opacity: 1; }
.tab-active { color: var(--accent) !important; }

.callout-sabias {
  border-left: 4px solid var(--accent);
  background: #f0fdf9;
  border-radius: 0 1rem 1rem 0;
  padding: 1rem 1.25rem;
}
.callout-sabias .callout-label {
  font-size: 11px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.08em;
  color: var(--accent);
  margin-bottom: 6px;
}

.load-spinner {
  width: 26px;
  height: 26px;
  border: 2.5px solid var(--border);
  border-top-color: var(--accent);
  border-radius: 50%;
  animation: spin 0.8s linear infinite;
}
@keyframes spin { to { transform: rotate(360deg); } }

.no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
.no-scrollbar::-webkit-scrollbar { display: none; }

.topic-select {
  appearance: none;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%237c7264' stroke-width='2' viewBox='0 0 24 24'%3E%3Cpath d='m6 9 6 6 6-6'/%3E%3C/svg%3E");
  background-repeat: no-repeat;
  background-position: right 12px center;
  padding-right: 32px;
  cursor: pointer;
}
.topic-select:focus { outline: none; border-color: var(--accent); }

.filter-chip {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  background: var(--accent);
  color: white;
  font-size: 12px;
  font-weight: 600;
  padding: 4px 10px 4px 12px;
  border-radius: 999px;
}
.filter-chip button { opacity: 0.75; line-height: 1; }
.filter-chip button:hover { opacity: 1; }

.lesson-card, .featured-card {
  transition: transform 0.22s ease, box-shadow 0.22s ease;
  cursor: pointer;
}
.lesson-card:hover, .featured-card:hover {
  transform: translateY(-4px);
  box-shadow: 0 14px 36px -6px rgba(80, 55, 20, 0.16);
}
  </style>
</head>
<body>

<header class="sticky top-0 z-50 border-b" style="background: rgba(245,240,232,0.92); backdrop-filter: blur(14px); border-color: var(--border);">

  <?php if ($header_mode === 'catalog'): ?>

    <!-- CATALOG HEADER -->
    <div class="max-w-5xl mx-auto px-4 h-14 flex items-center justify-between">
      <div class="flex items-center gap-2.5">
        <div class="logo-mark">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="white">
            <path d="M12 2L14.5 9.5L22 12L14.5 14.5L12 22L9.5 14.5L2 12L9.5 9.5Z"/>
          </svg>
        </div>
        <div>
          <div class="font-black text-slate-900 text-base leading-tight tracking-tight"><span style="color:var(--accent);">X</span>.Plorers</div>
          <div class="text-xs font-medium leading-none" style="color: var(--muted);">Descobre. Aprende. Explora.</div>
        </div>
      </div>
      <button aria-label="Pesquisar" class="w-9 h-9 rounded-full flex items-center justify-center transition-colors" style="background: rgba(0,0,0,0.05); color: #64748b;">
        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/>
        </svg>
      </button>
    </div>

  <?php else: ?>

    <!-- LESSON HEADER -->
    <div class="max-w-3xl mx-auto px-4 h-14 flex items-center gap-3">
      <a href="/" aria-label="Voltar ao catálogo" class="w-9 h-9 rounded-full flex items-center justify-center flex-shrink-0 transition-colors" style="background: rgba(0,0,0,0.05); color: #475569;">
        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
          <path d="m15 18-6-6 6-6"/>
        </svg>
      </a>
      <div class="flex-1 flex items-center gap-2 min-w-0">
        <?php if ($lesson): ?>
          <span class="badge <?= $badge_class ?> flex-shrink-0">
            <?= htmlspecialchars($lesson['topic_name']) ?>
          </span>
          <span class="text-sm font-medium truncate hidden sm:block" style="color: var(--muted);">
            <?= htmlspecialchars($lesson['title']) ?>
          </span>
        <?php endif; ?>
      </div>
      <?php if ($lesson): ?>
        <span class="text-xs font-bold px-3 py-1.5 rounded-full flex-shrink-0" style="background: var(--accent-light); color: var(--accent); border: 1px solid #fda4af;">
          <?= $lesson['class_number'] ?> / <?= $lesson['class_total'] ?>
        </span>
      <?php endif; ?>
    </div>

    <!-- Desktop inline tab bar -->
    <div id="tab-bar-desktop" class="hidden md:flex border-t max-w-3xl mx-auto" style="border-color: var(--border);">
      <button id="tab-btn-desk-conteudo" onclick="setTab(TAB_NAMES,'conteudo')"
        class="flex-1 flex items-center justify-center gap-1.5 py-2.5 text-sm font-medium relative tab-active"
        style="color: var(--accent);">
        <div class="tab-indicator"></div>
        <span>📖</span><span>Conteúdo</span>
      </button>
      <button id="tab-btn-desk-quiz" onclick="setTab(TAB_NAMES,'quiz')"
        class="flex-1 flex items-center justify-center gap-1.5 py-2.5 text-sm font-medium relative"
        style="color: var(--muted);">
        <div class="tab-indicator"></div>
        <span>🎯</span><span>Quiz</span>
      </button>
      <button id="tab-btn-desk-texto" onclick="setTab(TAB_NAMES,'texto')"
        class="flex-1 flex items-center justify-center gap-1.5 py-2.5 text-sm font-medium relative"
        style="color: var(--muted);">
        <div class="tab-indicator"></div>
        <span>📄</span><span>Texto</span>
      </button>
    </div>

  <?php endif; ?>

</header>
