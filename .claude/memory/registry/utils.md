# Utils

## PHP helpers (to be built)

| Function | File | Purpose |
|----------|------|---------|
| `get_lessons()` | `includes/data.php` | Load and return `data/lessons.json` as array |
| `get_lesson($id)` | `includes/data.php` | Return single lesson by id |
| `get_topic_lessons($slug)` | `includes/data.php` | Return all lessons for a topic, sorted by class_number |
| `get_featured_lessons()` | `includes/data.php` | Return lessons where `featured === true` |
| `get_quiz($lesson_id)` | `includes/data.php` | Load quiz JSON for a lesson |

## JS utilities (to be built)

| Function | File | Purpose |
|----------|------|---------|
| `filterByTopic(slug)` | `assets/js/catalog.js` | Filter catalog cards, update URL param |
| `renderQuiz(data)` | `assets/js/quiz.js` | Render quiz questions, handle scoring |
| `initTabs()` | `assets/js/tabs.js` | Tab bar switching logic |
