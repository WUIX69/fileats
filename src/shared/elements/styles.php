<?php

$appUrlPath = $_SERVER['REQUEST_URI'] ?? null;
$appName = explode('/', trim($appUrlPath, '/'))[2] ?? '';

$styles = [
    'vendor/bootstrap/dist/css/bootstrap.css', // Use default bootstrap css to Nuke: modal
    'vendor/fomantic-ui/dist/semantic.min.css', // TODO: Fix this
    'assets/css/global.css',
    'assets/css/loader/window.css',
    'assets/css/' . $appName . '/style.css',
];

if ($appName === 'users' || $appName === 'landing') {
    $styles[] = 'assets/css/shared/style.css';
}

if ($appName === 'admin') {
    $styles[] = 'vendor/fomantic-ui/dist/semantic.min.css';
}

foreach ($styles as $style) {
    echo '<link rel="stylesheet" href="' . statf($style) . '">';
}