<?php

$url = $_SERVER['REQUEST_URI'] ?? null;
$app_page = explode('/', trim($url, '/'))[2] ?? '';

$styles = [
    'vendor/bootstrap/dist/css/bootstrap.min.css',
    'vendor/fomantic-ui/dist/semantic.min.css',
    'assets/css/global.css',
    'assets/css/' . $app_page . '/style.css',
    'assets/css/loader/window.css',
];

foreach ($styles as $style) {
    echo '<link rel="stylesheet" href="' . static_file($style) . '">';
}
