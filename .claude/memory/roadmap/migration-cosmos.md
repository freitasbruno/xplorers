# Feature: Content Migration — Cosmos (reference topic)

**Slug:** `migration-cosmos`
**Status:** pending
**Depends on:** `layout-foundation`, `lesson-detail`, `markdown-viewer`

## Goal

Migrate the 3 existing Cosmos HTML files into the new PHP structure. This serves as the reference migration — establishes the pattern for all remaining topics.

## Scope

3 lessons: `Cosmos_001`, `Cosmos_002`, `Cosmos_003`

## Per-lesson tasks

For each lesson:
1. Extract interactive content from the existing `.html` file → `lessons/cosmos/[NNN].php` (content partial only, no header/footer)
2. Write normalised markdown source → `lessons/cosmos/[NNN].md` (frontmatter + Gemini body from `.docx`)
3. Write quiz JSON → `data/quizzes/cosmos_[NNN].json` (5–8 questions derived from lesson content)
4. Add/verify entry in `data/lessons.json`

## Output files

```
lessons/cosmos/001.php
lessons/cosmos/001.md
lessons/cosmos/002.php
lessons/cosmos/002.md
lessons/cosmos/003.php
lessons/cosmos/003.md
data/quizzes/cosmos_001.json
data/quizzes/cosmos_002.json
data/quizzes/cosmos_003.json
```

## Reference docx files
- `reference/Aulas/Cosmos_001.docx`
- `reference/Aulas/Cosmos_002.docx`
- `reference/Aulas/Cosmos_003.docx`

## Notes
- The existing HTML files have rich interactive content (Chart.js donut, card grids, etc.) — preserve all interactions in the PHP partial
- The `.docx` files are the canonical Gemini output — use these as the markdown source, not the HTML
- Once Cosmos migration is approved, the pattern is documented and `migration-remaining` can proceed
