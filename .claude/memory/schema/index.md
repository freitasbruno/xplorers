# Schema (Flat-file JSON)

No relational database. All data stored as JSON files in `data/`.

## Files

| File | Description |
|------|-------------|
| `data/lessons.json` | All lesson metadata — the catalog source of truth |
| `data/quizzes/[topic]_[NNN].json` | Quiz questions for a specific lesson |

---

## `data/lessons.json`

Array of lesson objects:

```json
[
  {
    "id": "cosmos_001",
    "topic_slug": "cosmos",
    "topic_name": "Cosmos",
    "category": "xplorers-cosmos",
    "class_number": 1,
    "class_total": 3,
    "title": "O que é o Espaço? Uma Viagem aos Ingredientes do Universo",
    "description": "Análise dos fundamentos: o que é o espaço, os materiais que o compõem, e os \"objetos\" celestes que nele habitam.",
    "image_url": "https://...",
    "content_file": "lessons/cosmos/001.php",
    "has_quiz": true,
    "published_at": "2025-01-01",
    "featured": false
  }
]
```

### Field definitions

| Field | Type | Notes |
|-------|------|-------|
| `id` | string | `[topic_slug]_[NNN]` — unique key |
| `topic_slug` | string | e.g. `cosmos`, `computadores` |
| `topic_name` | string | Display name in pt-PT |
| `category` | string | Top-level brand category (e.g. `xplorers-cosmos`) |
| `class_number` | int | 1-based position within topic |
| `class_total` | int | Total classes in topic |
| `title` | string | Lesson title |
| `description` | string | Short description for catalog card |
| `image_url` | string | Cover image (Unsplash or custom) |
| `content_file` | string | Relative path to PHP content partial |
| `has_quiz` | bool | Whether a quiz file exists |
| `published_at` | string | ISO date |
| `featured` | bool | Show in catalog highlight strip |

---

## `data/quizzes/[topic]_[NNN].json`

```json
{
  "lesson_id": "cosmos_001",
  "questions": [
    {
      "q": "O que caracteriza principalmente o espaço?",
      "options": [
        "É completamente vazio",
        "É um vácuo quase perfeito",
        "É cheio de ar",
        "É sólido"
      ],
      "correct": 1,
      "explanation": "O espaço é um vácuo quase perfeito — não completamente vazio, mas com densidades de matéria extremamente baixas."
    }
  ]
}
```
