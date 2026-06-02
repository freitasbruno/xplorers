# Feature: Layout Foundation

**Slug:** `layout-foundation`
**Status:** shipped — 2026-06-02
**Commit:** 6211563

## What it does

Shared PHP layout shell that every page includes. Provides a sticky header in two modes (catalog or lesson), a footer with optional reflection block and mobile tab bar, a data access layer over `data/lessons.json`, and a full CSS design system inlined in the header.

## Files

| File | Purpose |
|------|---------|
| `includes/header.php` | Outputs `<!DOCTYPE html>` through `</header>`. Two modes via `$header_mode`. |
| `includes/footer.php` | Reflection card + brand line + mobile tab bar. Closes `</body></html>`. |
| `includes/data.php` | Pure PHP data helpers over `data/lessons.json`. |
| `assets/css/app.css` | Design system reference (content is inlined into header.php `<style>`). |
| `assets/js/tabs.js` | Generic tab switching — `initTabs(names, default)` / `setTab(names, active)`. |
| `data/lessons.json` | 28 lessons, 8 topics, 2 featured. |
| `mockup-catalog.html` | Approved design reference — catalog page. |
| `mockup-lesson.html` | Approved design reference — lesson page. |

## Header variables

| Variable | Type | Notes |
|----------|------|-------|
| `$header_mode` | `'catalog'` \| `'lesson'` | Default: `'catalog'` |
| `$page_title` | string | Default: `'X.Plorers'` |
| `$lesson` | array \| null | Required in lesson mode — from `get_lesson()` |

## Footer variables

| Variable | Type | Notes |
|----------|------|-------|
| `$footer_mode` | `'catalog'` \| `'lesson'` | Default: `'catalog'` |
| `$reflection_question` | string \| null | Triggers dark reflection card |
| `$next_lesson` | array \| null | `['title' => '', 'url' => '']` — CTA in reflection card |

## Data helpers (`includes/data.php`)

- `get_lessons(): array` — all 28 lessons, static cache
- `get_lesson(string $id): ?array` — single lesson by id (e.g. `cosmos_001`)
- `get_topic_lessons(string $slug): array` — sorted by `class_number`
- `get_featured_lessons(): array` — lessons where `featured === true`
- `get_quiz(string $lesson_id): ?array` — loads `data/quizzes/{id}.json`, path traversal protected
- `topic_badge_class(string $slug): string` — returns `badge-{slug}` or `badge-default`

## CSS design tokens

```
--accent:       #14b8a6  (teal)
--accent-light: #f0fdfa
--bg:           #f8f5f0  (warm parchment)
--card-bg:      #fdfaf4
--border:       #e3d9c8
--text:         #1e293b
--muted:        #7c7264
```

CSS is inlined in header.php `<style>` block (not loaded from app.css) to avoid path issues on shared hosting.

## Tab bar

Tabs (`conteudo` / `quiz` / `texto`) are rendered in two places:
- **Mobile:** fixed bottom nav in `footer.php` (hidden on `md+`)
- **Desktop:** inline tab row below lesson header (hidden below `md`)

`TAB_NAMES` constant and `initTabs()` call are emitted by footer.php when `$footer_mode === 'lesson'`. Buttons use `onclick="setTab(TAB_NAMES,'name')"`.

## Known limitations

- CSS is inlined — changes to design tokens require editing header.php directly
- No PHP session or auth — all data is public flat files
- `data/quizzes/` directory is empty until quiz-engine is built
