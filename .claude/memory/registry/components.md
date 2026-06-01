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
