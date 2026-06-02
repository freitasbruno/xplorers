<?php

function get_lessons(): array {
    static $cache = null;
    if ($cache === null) {
        $path = __DIR__ . '/../data/lessons.json';
        $cache = json_decode(file_get_contents($path), true) ?? [];
    }
    return $cache;
}

function get_lesson(string $id): ?array {
    foreach (get_lessons() as $lesson) {
        if ($lesson['id'] === $id) return $lesson;
    }
    return null;
}

function get_topic_lessons(string $slug): array {
    $lessons = array_filter(get_lessons(), fn($l) => $l['topic_slug'] === $slug);
    usort($lessons, fn($a, $b) => $a['class_number'] <=> $b['class_number']);
    return array_values($lessons);
}

function get_featured_lessons(): array {
    return array_values(array_filter(get_lessons(), fn($l) => !empty($l['featured'])));
}

function get_quiz(array|string $lesson): ?array {
    if (is_array($lesson)) {
        $path_rel = $lesson['quiz_file'] ?? 'data/quizzes/' . $lesson['id'] . '.json';
        if (str_contains($path_rel, '..')) return null;
    } else {
        if (!preg_match('/^[\w\-]+$/', $lesson)) return null;
        $path_rel = 'data/quizzes/' . $lesson . '.json';
    }
    $path = __DIR__ . '/../' . $path_rel;
    if (!file_exists($path)) return null;
    return json_decode(file_get_contents($path), true);
}

function parse_md_lesson(string $filepath): ?array {
    if (!file_exists($filepath)) return null;
    $content = str_replace("\r\n", "\n", file_get_contents($filepath));

    if (preg_match('/^\-\-\-\s*\n(.*?)\n\-\-\-\s*\n(.*)$/s', $content, $m)) {
        $meta = [];
        foreach (explode("\n", trim($m[1])) as $line) {
            if (preg_match('/^(\w+):\s*(.+)$/', $line, $kv)) {
                $meta[trim($kv[1])] = trim($kv[2]);
            }
        }
        return ['meta' => $meta, 'body' => trim($m[2])];
    }

    return ['meta' => [], 'body' => trim($content)];
}

function topic_badge_class(string $slug): string {
    $map = [
        'cosmos'           => 'badge-cosmos',
        'olimpicos'        => 'badge-olimpicos',
        'sustentabilidade' => 'badge-sustentabilidade',
        'empreendedorismo' => 'badge-empreendedorismo',
        'volley'           => 'badge-volley',
        'computadores'     => 'badge-computadores',
        'videojogos'       => 'badge-videojogos',
        'vida'             => 'badge-vida',
        'wwii'             => 'badge-wwii',
    ];
    return $map[$slug] ?? 'badge-default';
}
