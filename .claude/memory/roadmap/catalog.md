# Feature: Catalog Page

**Slug:** `catalog`
**Status:** pending
**Depends on:** `layout-foundation`

## Goal

Replace the flat card list with a structured catalog that scales as content grows.

## Layout

### Hero / Highlight strip
- 2–3 featured or recently-added lessons
- Large card format with cover image, topic badge, class number
- "New" or "Em destaque" label

### Topic gallery
- Grouped by topic (not flat by lesson)
- Each topic shows as a card with: topic name, class count, cover image, category badge
- Filter buttons: All | Cosmos | Computadores | Videojogos | Vida | Sustentabilidade | Empreendedorismo | Volley | Olímpicos
- Clicking a topic expands or navigates to the individual classes for that topic

### Topic expansion (in-page or separate page TBD)
- Shows all N classes for that topic as a horizontal strip or sub-grid
- Each class card: number, title, short description, "Ver aula" button, "Quiz" button

## Data source
`data/lessons.json` — flat array with fields:
- `id`, `topic_slug`, `topic_name`, `class_number`, `title`, `description`, `image_url`, `published_at`, `has_quiz`

## Notes
- Topics with only 1 class should still show as a topic group (WWII)
- Filter state persists in URL query string (`?topic=cosmos`)
- Mobile: filter buttons collapse into a dropdown or horizontal scroll
