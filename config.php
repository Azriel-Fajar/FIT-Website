<?php
/**
 * FIT Competition 2026 - Configuration
 * Auto-detects base path for localhost and cPanel deployment
 */

// Auto-detect base path
if (!defined('BASE_PATH')) {
    $scriptName = $_SERVER['SCRIPT_NAME'];
    $scriptDir = dirname($scriptName);

    // Remove trailing slash
    $basePath = rtrim($scriptDir, '/');

    // If we're at the root, basePath should be empty or '/'
    if ($basePath === '' || $basePath === '/') {
        define('BASE_PATH', '');
    } else {
        define('BASE_PATH', $basePath);
    }
}

// Define asset paths
define('CSS_PATH', BASE_PATH . '/css');
define('JS_PATH', BASE_PATH . '/js');
define('IMG_PATH', BASE_PATH . '/img');
define('INCLUDES_PATH', dirname(__FILE__) . '/includes');

// Color Palette - New Theme
define('COLOR_PRIMARY_DARK', '#11698e');
define('COLOR_PRIMARY_DARKER', '#19456b');
define('COLOR_ACCENT', '#16c79a');
define('COLOR_LIGHT', '#f8f1f1');
define('COLOR_TEXT_PRIMARY', '#ffffff');
define('COLOR_TEXT_SECONDARY', 'rgba(255, 255, 255, 0.8)');
define('COLOR_TEXT_MUTED', 'rgba(255, 255, 255, 0.6)');

// Helper function to generate link with base path
function route($path) {
    return BASE_PATH . $path;
}

// Helper function for assets
function asset($path) {
    return BASE_PATH . '/' . ltrim($path, '/');
}
?>
