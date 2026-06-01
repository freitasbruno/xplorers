# Feature: Lesson Detail Page

**Slug:** `lesson-detail`
**Status:** pending
**Depends on:** `layout-foundation`

## Goal

A rich, interactive lesson page with consistent structure across all topics, plus access to quiz and markdown viewer.

## Layout

### Header (shared)
- Logo / home link
- Breadcrumb: Home > [Topic] > Aula [N]
- Progress indicator within topic (e.g. "Aula 2 de 4")
- Prev / Next lesson navigation

### Content area
- Lesson-specific interactive content (preserved from existing HTML files)
- Each lesson may include: charts (Chart.js), interactive cards, tabs, "Sabias que..." callouts
- Section anchors with in-page nav for longer lessons

### Tab bar (fixed bottom on mobile, inline on desktop)
Two tabs always visible:
1. **Conteúdo** — the lesson content (default view)
2. **Quiz** — links to `quiz.php?lesson=[slug]`
3. **Texto** — links to `markdown-viewer.php?lesson=[slug]`

### Footer (shared)
- Reflection question (from existing lessons)
- "Próxima aula" CTA

## URL pattern
`/lesson.php?id=cosmos_001` or clean URLs via `.htaccess` → `/cosmos/001`

## Notes
- Lesson content files live in `lessons/[topic_slug]/[NNN].php`
- lesson.php is a shell — it includes header, loads the content file, renders the tab bar, includes footer
- Each content file only contains the lesson-specific HTML sections
