<?php
/**
 * FIT Competition 2026 - Header Include
 * Requires config.php to be loaded before this file
 * Set $pageTitle before including (optional: $pageDescription, $pageCSS)
 */
require_once dirname(__FILE__) . '/../config.php';

if (!isset($pageTitle)) $pageTitle = 'FIT Competition 2026';
if (!isset($pageDescription)) $pageDescription = 'FIT Competition 2026 - Digital Impact for Humanitarian Response and Global Well-Being. An information technology competition by FTI UKSW.';
if (!isset($pageCSS)) $pageCSS = null;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo asset('icons/FIT-Logo.png'); ?>" type="image/png">
    <link rel="apple-touch-icon" href="<?php echo asset('icons/logo-fit.png'); ?>">

    <!-- Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Sansation:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <!-- Global CSS -->
    <link rel="stylesheet" href="<?php echo asset('css/global.css'); ?>">

    <!-- Page-specific CSS -->
    <?php if ($pageCSS): ?>
    <link rel="stylesheet" href="<?php echo asset('css/' . $pageCSS . '.css'); ?>">
    <?php endif; ?>
</head>

<body class="page-bg">

    <!-- Floating Geometric Shapes -->
    <div class="geo-shapes">
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
    </div>