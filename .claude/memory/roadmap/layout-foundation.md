# Feature: Layout Foundation

**Slug:** `layout-foundation`
**Status:** pending
**Depends on:** nothing — build first

## Goal

Establish the shared PHP layout shell and design tokens that every page depends on. All other features build on top of this.

## Deliverables

### `includes/header.php`
- Sticky header: logo (X.Plorers), breadcrumb, optional topic progress pill
- Accepts PHP vars: `$page_title`, `$breadcrumb`, `$topic_progress` (optional)
- Mobile hamburger menu (if needed) or simple top bar

### `includes/footer.php`
- Reflection question (passed as `$reflection_question` var, optional)
- "Próxima aula" CTA (passed as `$next_lesson`, optional)
- Copyright / brand line

### `includes/data.php`
- `get_lessons()` — load and return `data/lessons.json`
- `get_lesson($id)` — single lesson by id
- `get_topic_lessons($slug)` — all lessons for a topic, sorted by class_number
- `get_featured_lessons()` — lessons where featured === true
- `get_quiz($lesson_id)` — load quiz JSON

### `assets/css/app.css`
- Tailwind CDN import
- Custom properties for topic color map
- Utility classes not covered by Tailwind CDN

### Design tokens
- Font: Inter (Google Fonts)
- Base bg: `stone-50`, text: `slate-800`, accent: `teal-500`
- Topic badge colors (see patterns.md)
- Card hover transition: `translateY(-5px)` 0.3s

## Notes
- No build step — Tailwind via CDN only
- `data/lessons.json` seed file with all existing 28 lessons must be created as part of this feature
- PHP minimum version: whatever Hostinger Premium supports (typically 8.x)
