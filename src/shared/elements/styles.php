<?php

$appUrlPath = $_SERVER['REQUEST_URI'] ?? null;
$appName = explode('/', trim($appUrlPath, '/'))[2] ?? '';

$styles = [
    'vendor/bootstrap/dist/css/bootstrap.css', // Use default bootstrap css to Nuke: modal
    'vendor/fomantic-ui/dist/semantic.min.css', // TODO: Fix this
    'css/global.css',
    'css/loader/window.css',
    'css/' . $appName . '/style.css',
];

if ($appName === 'user' || $appName === 'landing') {
    $styles[] = 'css/shared/style.css';
}

foreach ($styles as $style) {
    echo '<link rel="stylesheet" href="' . asset($style) . '">';
}