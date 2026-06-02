/**
 * Generic tab bar switching.
 * Expects elements with id="tab-{name}" (content panels)
 * and buttons with id="tab-btn-mob-{name}" / id="tab-btn-desk-{name}".
 * Buttons use inline onclick — initTabs only sets the initial active tab.
 *
 * Usage: initTabs(['conteudo', 'quiz', 'texto'], 'conteudo')
 */
function initTabs(tabNames, defaultTab) {
  setTab(tabNames, defaultTab || tabNames[0]);
}

function setTab(tabNames, active) {
  tabNames.forEach(name => {
    const panel = document.getElementById(`tab-${name}`);
    if (panel) panel.classList.toggle('hidden', name !== active);

    ['mob', 'desk'].forEach(prefix => {
      const btn = document.getElementById(`tab-btn-${prefix}-${name}`);
      if (!btn) return;
      if (name === active) {
        btn.classList.add('tab-active');
        btn.style.color = 'var(--accent)';
      } else {
        btn.classList.remove('tab-active');
        btn.style.color = 'var(--muted)';
      }
    });
  });
}
