# Feature: Content Ingest Tool

**Slug:** `ingest-tool`
**Status:** pending
**Depends on:** `layout-foundation`, `lesson-detail`, `quiz`

## Goal

Take a Gemini-generated markdown file and produce all required artifacts in one step:
1. PHP lesson content file (`lessons/[topic]/[NNN].php`)
2. Quiz JSON (`data/quizzes/[topic]_[NNN].json`)
3. Catalog entry appended to `data/lessons.json`

## Interface

Simple password-protected web form at `/admin/ingest.php`:
- Paste markdown (textarea) or upload `.md` file
- Select topic from dropdown (existing or new)
- Class number (auto-detected or manual)
- Cover image URL
- Submit → shows preview of generated files → confirm → write to disk

## Parsing rules

From Gemini markdown output:
- Title: first `#` heading
- Description: first paragraph after title
- Sections: `##` headings become content sections
- "Sabias que" callouts: blockquotes or bold-prefixed paragraphs
- Quiz: extract from a `## Questões` or `## Quiz` section if present, else flag for manual entry

## Notes
- Admin password stored in `admin/config.php` (gitignored)
- Ingest tool only writes to `lessons/`, `data/` — never touches includes or core PHP files
- After ingest, operator reviews generated files before deploying
