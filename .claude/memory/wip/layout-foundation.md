# layout-foundation
Shared PHP layout shell, design tokens, data helpers, and lessons.json seed.

## Status
shipping

## Requirements
- `includes/header.php` — two modes via `$header_mode`: 'catalog' (logo + search) and 'lesson' (back + topic badge + progress pill)
- `includes/footer.php` — optional reflection question + next lesson CTA + brand line
- `includes/data.php` — get_lessons(), get_lesson($id), get_topic_lessons($slug), get_featured_lessons(), get_quiz($lesson_id)
- `assets/css/app.css` — CSS vars, grain texture, .wc-img, .paper, card hover, topic badge colors
- `assets/js/tabs.js` — reusable tab bar switching logic
- `data/lessons.json` — all 28 existing lessons seeded
- `index.php` — smoke-test page confirming shell works

## Design reference
mockup-catalog.html, mockup-lesson.html

## Technical decisions
- Single header.php with $header_mode switch (catalog vs lesson)
- CSS custom properties for design tokens, Tailwind CDN for layout utilities
- No PHPUnit for this feature — helpers are pure array ops, verified by hand
- lessons.json seeded from existing reference/Aulas/HTML/index.html JS data

## Test plan

### Automated
- none (no test runner configured)

### Human verification required
- [ ] Open index.php → header renders in catalog mode, footer renders, no PHP errors
- [ ] Set $header_mode = 'lesson' in index.php → back arrow + progress pill shown
- [ ] Resize to mobile → header stays sticky, no overflow
- [ ] Paper texture visible on background
- [ ] get_lessons() returns 28 entries, get_topic_lessons('cosmos') returns 3

## Open issues
- none

## Session log
- 2026-06-02 01:03 Verify passed: PHP syntax clean, JSON 28/2/8, no smells, no TODOs
- 2026-06-02 00:31 Plan approved
- 2026-06-02 00:31 Completed: assets/css/app.css, assets/js/tabs.js, data/lessons.json (28 lessons), includes/data.php, includes/header.php, includes/footer.php, index.php
- 2026-06-02 00:31 PHP syntax check: all files clean
- 2026-06-02 00:31 JSON validation: 28 lessons, 8 topics confirmed
- 2026-06-02 00:31 Review: fixed footer $header_mode→$footer_mode coupling, get_quiz path traversal, badge fallback, tabs.js double-bind, removed unused $topic_lessons from header interface
