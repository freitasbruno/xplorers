# Tech Stack

## Backend
- **Language:** PHP (pure, no framework)
- **Templating:** PHP includes (`includes/header.php`, `includes/footer.php`)
- **Data layer:** JSON flat files (`data/lessons.json`, `data/quizzes/*.json`)
- **No database** — flat files are sufficient for this content volume

## Frontend
- **CSS:** Tailwind CSS via CDN (`https://cdn.tailwindcss.com`)
- **JS:** Vanilla JavaScript (no bundler, no framework)
- **Fonts:** Inter via Google Fonts
- **Charts:** Chart.js via CDN (used in lesson pages with data visualisations)

## Deployment
- **Hosting:** Hostinger Premium shared hosting
- **Domain:** xplorers.bitlab.pt
- **Deploy method:** GitHub Actions + SFTP to Hostinger on push to `main`
- **No Supabase / no database**

## Tooling
- **Version control:** GitHub (repo TBD)
- **Local dev:** PHP built-in server (`php -S localhost:8000`)
- **No npm, no composer, no build step**

## Constraints
- Must run on shared hosting (no Docker, no Node server)
- Zero build step — all assets served directly
- Keep CDN dependencies minimal and pinned where possible
