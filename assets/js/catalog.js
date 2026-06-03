/**
 * Catalog page — lesson grid, filter, batch loading.
 *
 * Expects globals injected by index.php:
 *   LESSONS_DATA   — array from get_lessons()
 *   FEATURED_DATA  — array from get_featured_lessons()
 */

const TOPIC_META = {
  cosmos:          { label: 'Cosmos',               badge: 'bg-indigo-500' },
  computadores:    { label: 'Computadores',         badge: 'bg-blue-500'   },
  videojogos:      { label: 'Videojogos',           badge: 'bg-purple-500' },
  vida:            { label: 'História da Vida',     badge: 'bg-green-500'  },
  sustentabilidade:{ label: 'Sustentabilidade',     badge: 'bg-emerald-500'},
  empreendedorismo:{ label: 'Empreendedorismo',     badge: 'bg-amber-500'  },
  olimpicos:       { label: 'Jogos Olímpicos',      badge: 'bg-yellow-500' },
  volley:          { label: 'Volleyball',           badge: 'bg-orange-500' },
  wwii:            { label: 'WWII',                 badge: 'bg-red-500'    },
  wwi:             { label: 'Primeira Guerra',      badge: 'bg-red-700'    },
};

const BATCH = 8;
let currentFilter = '';
let shownCount = 0;

function getFiltered() {
  return currentFilter
    ? LESSONS_DATA.filter(l => l.topic_slug === currentFilter)
    : LESSONS_DATA;
}

function featuredCardHTML(lesson) {
  const m = TOPIC_META[lesson.topic_slug] || { label: lesson.topic_name, badge: 'bg-slate-500' };
  const quizBtn = lesson.has_quiz
    ? `<a href="quiz.php?id=${lesson.id}" class="flex-1 text-sm font-medium py-2 rounded-xl text-center" style="border:1.5px solid var(--border);color:var(--muted);">Quiz 🎯</a>`
    : '';
  return `
    <div class="featured-card paper rounded-2xl overflow-hidden shadow-sm">
      <div class="relative h-48">
        <img src="${escHtml(lesson.image_url)}" alt="" class="wc-img w-full h-full object-cover" loading="lazy">
        <div class="absolute inset-0" style="background:linear-gradient(to top,rgba(10,5,25,0.65) 0%,transparent 55%);"></div>
        <span class="absolute top-3 left-3 text-white text-xs font-semibold px-2.5 py-1 rounded-full ${m.badge}">${escHtml(m.label)}</span>
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
  const m = TOPIC_META[lesson.topic_slug] || { label: lesson.topic_name, badge: 'bg-slate-500' };
  const quizBtn = lesson.has_quiz
    ? `<button onclick="event.preventDefault();event.stopPropagation();window.location.href='quiz.php?id=${lesson.id}'" class="text-xs font-medium py-1.5 px-2.5 rounded-lg" style="background:#f0ede7;color:var(--muted);">Quiz</button>`
    : '';
  return `
    <a href="lesson.php?id=${lesson.id}" class="lesson-card paper rounded-2xl overflow-hidden shadow-sm card-appear flex flex-col" style="animation-delay:${delay}ms;">
      <div class="relative h-36 flex-shrink-0">
        <img src="${escHtml(lesson.image_url)}" alt="" class="wc-img w-full h-full object-cover" loading="lazy">
        <div class="absolute inset-0" style="background:linear-gradient(to top,rgba(10,5,20,0.55) 0%,transparent 55%);"></div>
        <span class="absolute top-2.5 left-2.5 text-white text-xs font-semibold px-2 py-0.5 rounded-full ${m.badge}">${escHtml(m.label)}</span>
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

function escHtml(str) {
  return String(str)
    .replace(/&/g, '&amp;')
    .replace(/</g, '&lt;')
    .replace(/>/g, '&gt;')
    .replace(/"/g, '&quot;');
}

function renderFeatured() {
  const strip = document.getElementById('featured-strip');
  const section = document.getElementById('featured-section');
  if (!FEATURED_DATA || FEATURED_DATA.length === 0) {
    section.classList.add('hidden');
    return;
  }
  FEATURED_DATA.forEach(lesson => {
    strip.insertAdjacentHTML('beforeend', featuredCardHTML(lesson));
  });
}

function loadBatch() {
  const filtered = getFiltered();
  const grid = document.getElementById('cards-grid');
  const sentinel = document.getElementById('load-sentinel');
  const empty = document.getElementById('empty-state');
  const slice = filtered.slice(shownCount, shownCount + BATCH);

  if (shownCount === 0 && filtered.length === 0) {
    empty.classList.remove('hidden');
    sentinel.style.display = 'none';
    return;
  }

  empty.classList.add('hidden');

  if (slice.length === 0) {
    sentinel.style.display = 'none';
    return;
  }

  slice.forEach((lesson, i) => {
    grid.insertAdjacentHTML('beforeend', galleryCardHTML(lesson, i * 50));
  });
  shownCount += slice.length;

  document.getElementById('count-label').textContent =
    `${Math.min(shownCount, filtered.length)} de ${filtered.length} aula${filtered.length !== 1 ? 's' : ''}`;

  sentinel.style.display = shownCount >= filtered.length ? 'none' : 'flex';
}

function applyFilter(select) {
  currentFilter = select.value;
  shownCount = 0;
  document.getElementById('cards-grid').innerHTML = '';

  const chip = document.getElementById('active-chip');
  if (currentFilter) {
    const label = TOPIC_META[currentFilter]?.label || currentFilter;
    document.getElementById('chip-label').textContent = label;
    chip.classList.remove('hidden');
    select.value = '';
  } else {
    chip.classList.add('hidden');
  }

  document.getElementById('load-sentinel').style.display = 'flex';
  document.getElementById('count-label').textContent = '';
  loadBatch();
}

function clearFilter() {
  currentFilter = '';
  document.getElementById('active-chip').classList.add('hidden');
  document.getElementById('topic-select').value = '';
  shownCount = 0;
  document.getElementById('cards-grid').innerHTML = '';
  document.getElementById('load-sentinel').style.display = 'flex';
  document.getElementById('count-label').textContent = '';
  loadBatch();
}

function initCatalog() {
  renderFeatured();

  const sentinel = document.getElementById('load-sentinel');
  const observer = new IntersectionObserver(entries => {
    if (entries[0].isIntersecting) loadBatch();
  }, { rootMargin: '200px' });
  observer.observe(sentinel);

  loadBatch();
}

document.addEventListener('DOMContentLoaded', initCatalog);
