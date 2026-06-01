# Feature: Markdown Viewer

**Slug:** `markdown-viewer`
**Status:** pending
**Depends on:** `layout-foundation`

## Goal

A clean, mobile-first reader that renders the Gemini-generated markdown for a lesson. Content preserves Gemini's structure but passes through a normalisation step to ensure consistent metadata (lesson number, date, topic, etc.) across all lessons.

## Content source

- Source: Gemini markdown output (`.md` files stored in `lessons/[topic]/[NNN].md`)
- Normalisation: a consistent frontmatter block is prepended/enforced at ingest time:

```markdown
---
lesson_id: cosmos_001
topic: Cosmos
class_number: 1
class_total: 3
title: O que é o Espaço?
date: 2025-01-01
---
```

- The Gemini body content follows unchanged — headings, "Sabias que..." blocks, discussion prompts, all preserved.

## Rendering

- PHP renders the markdown to HTML using a lightweight parser (Parsedown or similar — single-file, no composer)
- Headings, blockquotes, bold/italic all styled to match the XPlorers design system
- "Sabias que..." blockquotes get the teal callout treatment
- Code blocks (if any) styled but rare in this content type

## Layout

- Single-column, generous line-height, large font (reading optimised)
- Max-width ~680px centred — same as a comfortable article read
- Tab bar at bottom links back to Conteúdo and Quiz
- Print/share button (optional, Phase 3)

## Files

| File | Purpose |
|------|---------|
| `markdown-viewer.php` | Shell — loads `.md` file, renders via Parsedown |
| `vendor/Parsedown.php` | Single-file markdown parser (no composer) |
| `lessons/[topic]/[NNN].md` | Normalised Gemini markdown source |

## URL
`/markdown-viewer.php?lesson=cosmos_001`
