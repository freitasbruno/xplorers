# Patterns

## Design tokens (Tailwind)

| Token | Value | Use |
|-------|-------|-----|
| Font | Inter (Google Fonts) | All text |
| Base bg | `bg-stone-50` | Page background |
| Base text | `text-slate-800` | Body text |
| Accent | `teal-500` (#14b8a6) | Interactive elements, highlights |
| Card bg | `bg-white` | Card surfaces |
| Card border | `border-stone-200` | Subtle card borders |
| Shadow | `shadow-md` | Cards, modals |
| Header bg | `bg-white/80 backdrop-blur-lg` | Sticky header |

## Topic color map

Each topic has an accent color for its badge:

| Topic | Tailwind class |
|-------|---------------|
| Cosmos | `bg-indigo-100 text-indigo-800` |
| Computadores | `bg-blue-100 text-blue-800` |
| Videojogos | `bg-purple-100 text-purple-800` |
| História da Vida | `bg-green-100 text-green-800` |
| Sustentabilidade | `bg-emerald-100 text-emerald-800` |
| Empreendedorismo | `bg-amber-100 text-amber-800` |
| Volleyball | `bg-orange-100 text-orange-800` |
| Olímpicos Grécia | `bg-yellow-100 text-yellow-800` |
| WWII | `bg-red-100 text-red-800` |

## Interaction patterns

- **Card hover:** `translateY(-5px)` + deeper shadow (transition 0.3s)
- **Button active state:** teal background, white text
- **Smooth scroll:** `scroll-behavior: smooth` on body
- **Tab bar:** fixed bottom on mobile (`md:hidden`), inline on desktop
- **Sticky header:** `sticky top-0 z-50`

## Responsive breakpoints (Tailwind defaults)
- `sm`: 640px
- `md`: 768px  
- `lg`: 1024px
- Mobile-first — default styles are mobile
