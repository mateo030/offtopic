<?php

function redirect($dir) {
    Header('Location: ' . $dir);
}

function loadPages($path, $originalPost = [], $replies = []) {
    extract($originalPost);
    extract($replies);
    require "src/Views/pages/$path.php";
}

function loadPartials($path) {
    require "src/Views/partials/$path.php";
}

function color($category) {
    switch($category) {
        case 'Announcements':
            return '#FF4500'; // Bright Red-Orange
        case 'Introductions':
            return '#FFD700'; // Vibrant Gold
        case 'GeneralDiscussion':
            return '#9400D3'; // Deep Violet
        case 'Technology':
            return '#00CED1'; // Turquoise
        case 'HealthWellness':
            return '#32CD32'; // Neon Lime Green
        case 'Education':
            return '#FF8C00'; // Vivid Dark Orange
        case 'Entertainment':
            return '#FF1493'; // Hot Pink
        case 'BusinessFinance':
            return '#20B2AA'; // Light Sea Green
        case 'HobbiesInterests':
            return '#00FF7F'; // Spring Green
        case 'EventsMeetups':
            return '#BA55D3'; // Orchid Purple
        case 'FeedbackSuggestions':
            return '#FF6347'; // Bright Tomato Red
        case 'FAQsGuides':
            return '#1E90FF'; // Dodger Blue
        case 'HelpSupport':
            return '#FF69B4'; // Bright Pink
        default:
            return '#000000'; // Default Black
    }
}

function varDump($mixed) {
    echo '<pre>';
    var_dump($mixed);
    echo '</pre>';
}