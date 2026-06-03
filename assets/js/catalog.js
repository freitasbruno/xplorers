/**
 * Catalog page — search widget, lesson grid, batch loading.
 *
 * Expects globals injected by index.php:
 *   LESSONS_DATA   — array from get_lessons()
 *   FEATURED_DATA  — array from get_featured_lessons()
 */

const TOPIC_META = {
  cosmos:          { label: 'Cosmos',                  color: '#6366f1', badge: 'bg-indigo-500'  },
  computadores:    { label: 'Computadores',            color: '#3b82f6', badge: 'bg-blue-500'    },
  videojogos:      { label: 'Videojogos',              color: '#a855f7', badge: 'bg-purple-500'  },
  vida:            { label: 'História da Vida',        color: '#22c55e', badge: 'bg-green-500'   },
  sustentabilidade:{ label: 'Sustentabilidade',        color: '#10b981', badge: 'bg-emerald-500' },
  empreendedorismo:{ label: 'Empreendedorismo',        color: '#f59e0b', badge: 'bg-amber-500'   },
  olimpicos:       { label: 'Jogos Olímpicos',         color: '#eab308', badge: 'bg-yellow-500'  },
  volley:          { label: 'Volleyball',              color: '#f97316', badge: 'bg-orange-500'  },
  wwi:             { label: 'Primeira Guerra Mundial', color: '#b91c1c', badge: 'bg-red-700'     },
  wwii:            { label: 'Segunda Guerra Mundial',  color: '#ef4444', badge: 'bg-red-500'     },
  musica:          { label: 'Música',                  color: '#ec4899', badge: 'bg-pink-500'    },
};

const BATCH = 8;

// ── State ──
let activeTopics  = new Set();
let searchText    = '';
let shownCount    = 0;
let debounceTimer = null;

// ── Helpers ──
function escHtml(str) {
  return String(str)
    .replace(/&/g, '&amp;').replace(/</g, '&lt;')
    .replace(/>/g, '&gt;').replace(/"/g, '&quot;');
}

function isFiltering() {
  return activeTopics.size > 0 || searchText.trim().length > 0;
}

function getFiltered() {
  const q = searchText.trim().toLowerCase();
  return LESSONS_DATA.filter(l => {
    const topicOk = activeTopics.size === 0 || activeTopics.has(l.topic_slug);
    const textOk  = q === '' ||
      l.title.toLowerCase().includes(q) ||
      l.description.toLowerCase().includes(q);
    return topicOk && textOk;
  });
}

// ── Card HTML ──
function featuredCardHTML(lesson) {
  const meta  = TOPIC_META[lesson.topic_slug];
  const badge = meta?.badge || 'bg-slate-500';
  const label = meta?.label || lesson.topic_name;
  const quizBtn = lesson.has_quiz
    ? `<a href="quiz.php?id=${lesson.id}" class="flex-1 text-sm font-medium py-2 rounded-xl text-center" style="border:1.5px solid var(--border);color:var(--muted);">Quiz 🎯</a>`
    : '';
  return `
    <div class="featured-card paper rounded-2xl overflow-hidden shadow-sm">
      <div class="relative h-48">
        <img src="${escHtml(lesson.image_url)}" alt="" class="wc-img w-full h-full object-cover" loading="lazy">
        <div class="absolute inset-0" style="background:linear-gradient(to top,rgba(10,5,25,0.65) 0%,transparent 55%);"></div>
        <span class="absolute top-3 left-3 text-white text-xs font-semibold px-2.5 py-1 rounded-full ${badge}">${escHtml(label)}</span>
        <span class="absolute bottom-3 left-3 text-white/90 text-xs font-medium px-2 py-0.5 rounded-full" style="background:rgba(255,255,255,0.15);border:1px solid rgba(255,255,255,0.25);">Aula ${lesson.class_number}</span>
      </div>
      <div class="p-4">
        <h3 class="font-bold text-slate-900 text-base mb-1 leading-snug">${escHtml(lesson.title)}</h3>
        <p class="text-sm mb-4 leading-relaxed" style="color:var(--muted);">${escHtml(lesson.description)}</p>
        <div class="flex gap-2">
          <a href="lesson.php?id=${lesson.id}" class="flex-1 text-sm font-semibold py-2 rounded-xl text-center" style="border:1.5px solid var(--accent);color:var(--accent);">Ver aula →</a>
          ${quizBtn}
        </div>
      </div>
    </div>`;
}

function galleryCardHTML(lesson, delay) {
  const meta  = TOPIC_META[lesson.topic_slug];
  const badge = meta?.badge || 'bg-slate-500';
  const label = meta?.label || lesson.topic_name;
  const quizBtn = lesson.has_quiz
    ? `<button onclick="event.preventDefault();event.stopPropagation();window.location.href='quiz.php?id=${lesson.id}'" class="text-xs font-medium py-1.5 px-2.5 rounded-lg" style="background:#f0ede7;color:var(--muted);">Quiz</button>`
    : '';
  return `
    <a href="lesson.php?id=${lesson.id}" class="lesson-card paper rounded-2xl overflow-hidden shadow-sm card-appear flex flex-col" style="animation-delay:${delay}ms;">
      <div class="relative h-36 flex-shrink-0">
        <img src="${escHtml(lesson.image_url)}" alt="" class="wc-img w-full h-full object-cover" loading="lazy">
        <div class="absolute inset-0" style="background:linear-gradient(to top,rgba(10,5,20,0.55) 0%,transparent 55%);"></div>
        <span class="absolute top-2.5 left-2.5 text-white text-xs font-semibold px-2 py-0.5 rounded-full ${badge}">${escHtml(label)}</span>
        <span class="absolute bottom-2.5 left-2.5 text-white/80 text-xs px-1.5 py-0.5 rounded-full" style="background:rgba(255,255,255,0.15);border:1px solid rgba(255,255,255,0.2);">Aula ${lesson.class_number} / ${lesson.class_total}</span>
      </div>
      <div class="p-3.5 flex flex-col flex-1">
        <h3 class="font-bold text-slate-900 text-sm leading-snug mb-3">${escHtml(lesson.title)}</h3>
        <div class="flex gap-1.5 mt-auto">
          <span class="text-xs font-semibold py-1.5 px-3 rounded-lg flex-1 text-center" style="background:var(--accent-light);color:var(--accent);">Ver aula →</span>
          ${quizBtn}
        </div>
      </div>
    </a>`;
}

// ── Featured ──
function renderFeatured() {
  const strip   = document.getElementById('featured-strip');
  const section = document.getElementById('featured-section');
  if (!FEATURED_DATA || FEATURED_DATA.length === 0) {
    section.classList.add('hidden');
    return;
  }
  FEATURED_DATA.forEach(l => strip.insertAdjacentHTML('beforeend', featuredCardHTML(l)));
}

// ── Grid rendering ──
function renderAll() {
  const filtered = getFiltered();
  const grid     = document.getElementById('cards-grid');
  const empty    = document.getElementById('empty-state');
  const sentinel = document.getElementById('load-sentinel');

  grid.innerHTML = '';

  if (filtered.length === 0) {
    empty.classList.remove('hidden');
    sentinel.style.display = 'none';
    updateCountLabel(0, 0);
    return;
  }

  empty.classList.add('hidden');
  filtered.forEach((l, i) => grid.insertAdjacentHTML('beforeend', galleryCardHTML(l, i * 40)));
  sentinel.style.display = 'none';
  updateCountLabel(filtered.length, filtered.length);
}

function loadBatch() {
  if (isFiltering()) { renderAll(); return; }

  const filtered = getFiltered();
  const grid     = document.getElementById('cards-grid');
  const sentinel = document.getElementById('load-sentinel');
  const empty    = document.getElementById('empty-state');
  const slice    = filtered.slice(shownCount, shownCount + BATCH);

  if (shownCount === 0 && filtered.length === 0) {
    empty.classList.remove('hidden');
    sentinel.style.display = 'none';
    return;
  }

  empty.classList.add('hidden');
  if (slice.length === 0) { sentinel.style.display = 'none'; return; }

  slice.forEach((l, i) => grid.insertAdjacentHTML('beforeend', galleryCardHTML(l, i * 50)));
  shownCount += slice.length;

  updateCountLabel(Math.min(shownCount, filtered.length), filtered.length);
  sentinel.style.display = shownCount >= filtered.length ? 'none' : 'flex';
}

function updateCountLabel(shown, total) {
  const el = document.getElementById('count-label');
  if (!el) return;
  if (total === 0) { el.textContent = ''; return; }
  el.textContent = shown === total
    ? `${total} aula${total !== 1 ? 's' : ''}`
    : `${shown} de ${total} aula${total !== 1 ? 's' : ''}`;
}

// ── Layout state ──
function applyLayoutState() {
  const filtering = isFiltering();
  document.getElementById('featured-section').classList.toggle('hidden', filtering);
  document.getElementById('section-header').classList.toggle('hidden', filtering);
  document.getElementById('limpar-btn').classList.toggle('hidden', !filtering);
}

// ── Token input ──
function renderTokens() {
  const container = document.getElementById('tokens-container');
  container.innerHTML = '';
  activeTopics.forEach(slug => {
    const meta  = TOPIC_META[slug];
    const color = meta.color;
    const isLight = slug === 'olimpicos' || slug === 'empreendedorismo';
    const textColor = isLight ? '#1e1b16' : '#ffffff';
    const pill = document.createElement('span');
    pill.className = 'search-token';
    pill.style.cssText = `background:${color};color:${textColor};`;
    pill.innerHTML = `${escHtml(meta.label)}<button class="search-token-remove" onmousedown="event.preventDefault();removeTopic('${slug}')" aria-label="Remover ${escHtml(meta.label)}"><svg width="8" height="8" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path d="M18 6 6 18M6 6l12 12"/></svg></button>`;
    container.appendChild(pill);
  });
  document.getElementById('search-box').classList.toggle('has-tokens', activeTopics.size > 0);
}

function addTopic(slug) {
  if (activeTopics.has(slug)) return;
  activeTopics.add(slug);
  const input = document.getElementById('search-input');
  input.value = '';
  searchText = '';
  document.getElementById('search-box').classList.remove('has-text');
  renderTokens();
  updateDropdown();
  applyLayoutState();
  resetAndRender();
  input.focus();
}

function removeTopic(slug) {
  activeTopics.delete(slug);
  renderTokens();
  updateDropdown();
  applyLayoutState();
  resetAndRender();
}

function clearAll() {
  activeTopics.clear();
  searchText = '';
  const input = document.getElementById('search-input');
  input.value = '';
  document.getElementById('search-box').classList.remove('has-tokens', 'has-text');
  renderTokens();
  closeDropdown();
  applyLayoutState();
  resetAndRender();
  input.focus();
}

// ── Dropdown ──
function highlight(text, q) {
  if (!q) return escHtml(text);
  const idx = text.toLowerCase().indexOf(q.toLowerCase());
  if (idx === -1) return escHtml(text);
  return escHtml(text.slice(0, idx))
    + '<mark style="background:#fef08a;border-radius:2px;padding:0 1px;">'
    + escHtml(text.slice(idx, idx + q.length))
    + '</mark>'
    + escHtml(text.slice(idx + q.length));
}

function updateDropdown() {
  const q   = (document.getElementById('search-input')?.value || '').trim().toLowerCase();
  const dd  = document.getElementById('search-dropdown');
  const topicsSec   = document.getElementById('dd-topics-section');
  const topicsEl    = document.getElementById('dd-topics');
  const lessonsSec  = document.getElementById('dd-lessons-section');
  const lessonsEl   = document.getElementById('dd-lessons');
  const divider     = document.getElementById('dd-divider');

  const matchedTopics = Object.entries(TOPIC_META).filter(([slug, meta]) =>
    !activeTopics.has(slug) && (q === '' || meta.label.toLowerCase().includes(q))
  );

  const matchedLessons = q.length >= 2
    ? LESSONS_DATA.filter(l =>
        !activeTopics.has(l.topic_slug) &&
        (l.title.toLowerCase().includes(q) || l.description.toLowerCase().includes(q))
      ).slice(0, 4)
    : [];

  if (matchedTopics.length > 0) {
    topicsSec.style.display = '';
    topicsEl.innerHTML = matchedTopics.map(([slug, meta]) => `
      <div class="dd-item" onmousedown="addTopic('${slug}')">
        <span class="dd-dot" style="background:${meta.color};"></span>
        <span>${highlight(meta.label, q)}</span>
      </div>`).join('');
  } else {
    topicsSec.style.display = 'none';
  }

  if (matchedLessons.length > 0) {
    lessonsSec.style.display = '';
    divider.style.display = matchedTopics.length > 0 ? '' : 'none';
    lessonsEl.innerHTML = matchedLessons.map(l => {
      const meta = TOPIC_META[l.topic_slug];
      return `<div class="dd-item" onmousedown="addTopic('${l.topic_slug}')">
        <span class="dd-dot" style="background:${meta.color};flex-shrink:0;"></span>
        <span style="flex:1;min-width:0;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;">${highlight(l.title, q)}</span>
        <span style="font-size:0.7rem;color:var(--muted);margin-left:0.5rem;flex-shrink:0;">${escHtml(meta.label)}</span>
      </div>`;
    }).join('');
  } else {
    lessonsSec.style.display = 'none';
    divider.style.display = 'none';
  }

  const hasItems = matchedTopics.length > 0 || matchedLessons.length > 0;
  const inputFocused = document.activeElement === document.getElementById('search-input');
  dd.classList.toggle('open', hasItems && inputFocused);
}

function closeDropdown() {
  document.getElementById('search-dropdown')?.classList.remove('open');
}

// ── Reset + render ──
function resetAndRender() {
  shownCount = 0;
  document.getElementById('cards-grid').innerHTML = '';
  document.getElementById('load-sentinel').style.display = 'flex';
  document.getElementById('empty-state').classList.add('hidden');
  loadBatch();
}

// ── Init ──
function initCatalog() {
  renderFeatured();

  const searchBox   = document.getElementById('search-box');
  const searchInput = document.getElementById('search-input');
  const dropdown    = document.getElementById('search-dropdown');

  searchBox.addEventListener('click', () => searchInput.focus());

  searchInput.addEventListener('focus', () => {
    searchBox.classList.add('focused');
    updateDropdown();
  });

  searchInput.addEventListener('blur', () => {
    searchBox.classList.remove('focused');
    setTimeout(closeDropdown, 150);
  });

  searchInput.addEventListener('input', () => {
    searchText = searchInput.value;
    searchBox.classList.toggle('has-text', searchText.length > 0);
    clearTimeout(debounceTimer);
    debounceTimer = setTimeout(() => {
      updateDropdown();
      applyLayoutState();
      resetAndRender();
    }, 250);
  });

  searchInput.addEventListener('keydown', e => {
    if (e.key === 'Backspace' && searchInput.value === '') {
      const last = [...activeTopics].pop();
      if (last) removeTopic(last);
    }
    if (e.key === 'Escape') { closeDropdown(); searchInput.blur(); }
  });

  // Close dropdown on outside click
  document.addEventListener('mousedown', e => {
    if (!document.getElementById('search-container').contains(e.target)) {
      closeDropdown();
    }
  });

  const sentinel = document.getElementById('load-sentinel');
  const observer = new IntersectionObserver(entries => {
    if (entries[0].isIntersecting) loadBatch();
  }, { rootMargin: '200px' });
  observer.observe(sentinel);

  loadBatch();
}

document.addEventListener('DOMContentLoaded', initCatalog);
