document.addEventListener('DOMContentLoaded', function () {
  var contentTab = document.getElementById('tab-conteudo');
  if (!contentTab) return;

  var sections  = contentTab.querySelectorAll('section[data-label]');
  var nav       = document.getElementById('chapter-nav');
  var navInner  = document.getElementById('chapter-nav-inner');

  if (!sections.length || !nav || !navInner) return;

  // Build pills from data-label attributes
  sections.forEach(function (section) {
    var pill = document.createElement('button');
    pill.className = 'chapter-pill flex-shrink-0 text-xs font-semibold px-3 py-1.5 rounded-full transition-all whitespace-nowrap';
    pill.style.cssText = 'background:transparent;color:var(--muted);border:1.5px solid var(--border);';
    pill.textContent = section.dataset.label;
    pill.dataset.target = section.id;
    pill.addEventListener('click', function () {
      section.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
    navInner.appendChild(pill);
  });

  nav.classList.remove('hidden');

  var pills = navInner.querySelectorAll('.chapter-pill');

  function setActive(id) {
    pills.forEach(function (p) {
      var active = p.dataset.target === id;
      p.style.background   = active ? 'var(--accent)' : 'transparent';
      p.style.color        = active ? 'white'         : 'var(--muted)';
      p.style.borderColor  = active ? 'var(--accent)' : 'var(--border)';
    });

    // Scroll the active pill into view within the nav
    var activePill = navInner.querySelector('[data-target="' + id + '"]');
    if (activePill) {
      activePill.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
    }
  }

  // Activate first pill on load
  setActive(sections[0].id);

  var observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) setActive(entry.target.id);
    });
  }, {
    rootMargin: '-15% 0px -65% 0px',
    threshold: 0
  });

  sections.forEach(function (section) {
    observer.observe(section);
  });
});
