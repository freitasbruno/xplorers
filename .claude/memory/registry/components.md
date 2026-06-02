# Component Registry

Components are PHP partials or reusable HTML+JS patterns.

## Atoms

| Name | File | Notes |
|------|------|-------|
| Topic badge | — | `<span class="badge">Cosmos</span>` — color-coded per topic |
| Class number pill | — | "Aula 2 de 4" — inline pill |
| "New" label | — | Green dot + "Novo" text |
| Section anchor | — | In-page nav link for long lessons |

## Molecules

| Name | File | Notes |
|------|------|-------|
| Lesson card (catalog) | — | Image + topic badge + title + description + CTA buttons |
| Topic group card | — | Topic cover + name + class count + filter tag |
| Quiz question | — | Question text + 4 option buttons + feedback state |
| "Sabias que" callout | — | Teal-accented blockquote box |
| Tab bar | — | Conteúdo / Quiz / Texto — fixed bottom on mobile |
| Prev/next nav | — | Arrow links with lesson title, within topic |

## Organisms

| Name | File | Notes |
|------|------|-------|
| Header | `includes/header.php` | Logo, breadcrumb, topic progress |
| Footer | `includes/footer.php` | Reflection question + next lesson CTA |
| Catalog highlight strip | — | 2–3 featured lesson cards, hero format |
| Catalog gallery | — | Topic group cards + filter buttons |
| Lesson shell | `lesson.php` | Loads content partial, wraps with header/footer/tab bar |

## Status key
- `—` = not yet built
- path = built, file exists

---

## Built in layout-foundation

| Component | File | Notes |
|-----------|------|-------|
| Header (catalog) | `includes/header.php` | `$header_mode='catalog'` — logo + search |
| Header (lesson) | `includes/header.php` | `$header_mode='lesson'` — back + badge + progress + desktop tabs |
| Footer (brand) | `includes/footer.php` | Always rendered — brand line |
| Footer (reflection) | `includes/footer.php` | `$footer_mode='lesson'` + `$reflection_question` — dark card + next lesson CTA |
| Mobile tab bar | `includes/footer.php` | Fixed bottom, rendered when `$footer_mode='lesson'` |
| Topic badge | `assets/css/app.css` | `.badge .badge-{slug}` classes |
| Paper card | `assets/css/app.css` | `.paper` class — card-bg + border |
| Card hover | `assets/css/app.css` | `.card-hover` class |
| Watercolor image | `assets/css/app.css` | `.wc-img` filter class |
| Load spinner | `assets/css/app.css` | `.load-spinner` |
| Paper grain texture | `assets/css/app.css` | `body::before` — SVG feTurbulence noise |
