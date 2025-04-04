<?php

// Enable error logging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
ini_set('error_log', dirname(dirname(dirname(__DIR__))) . '/logs/error.log');

function tryCatch($callback, $errorMessage = "Error: ")
{
    try {
        return $callback();
    } catch (Throwable $t) {
        error_log($errorMessage . $t->getMessage());
        // echo $errorMessage . $t->getMessage();
        return false;
    }
}

function base_url($path = '')
{
    // Get the protocol and host only once per page load
    static $baseUrl = null;

    // Get the base URL if it's not already set
    if ($baseUrl === null) {
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
        $host = $_SERVER['HTTP_HOST'];
        $baseUrl = $protocol . '://' . $host . '/';
    }

    // Return base URL if no path provided
    if (empty($path)) {
        return $baseUrl;
    }

    // Append the path
    return $baseUrl . ltrim($path, '/');
}

function app($link = '')
{
    $url = $link . (strpos($link, '/') === false ? '/' : '' . '.php');
    return base_url('src/app/' . $url);
}

function static_file($path)
{
    $web_path = 'public/' . ltrim($path, '/');
    return base_url($web_path);
}

function shared($file)
{
    // Define the directory where your shared files are located
    $shared_dir = dirname(dirname(__DIR__)) . '/shared/';

    // Construct the full path to the file
    $file_path = $shared_dir . $file . '.php';

    tryCatch(function () use ($file_path) {
        if (!file_exists($file_path)) {
            throw new Exception("File not found: $file_path");
        }
        // Include the file
        include $file_path;
    }, "Shared file Error, ");
}