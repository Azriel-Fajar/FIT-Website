<?php

/**
 * FIT Competition 2026 - Navbar Include
 * Requires Bootstrap 5.3 (loaded in header.php)
 * Optional: Set $activePage before including ('home', 'about', 'category-web', etc.)
 */
if (!isset($activePage)) $activePage = '';
?>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-fit fixed-top" id="mainNavbar">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="img/FIT-Logo.png" alt="FIT Competition 2026">
        </a>

        <!-- Mobile Toggle -->
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNav" aria-controls="offcanvasNav" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Desktop Nav -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarDesktop">
            <ul class="navbar-nav align-items-center gap-1">
                <li class="nav-item">
                    <a class="nav-link <?php echo ($activePage === 'home') ? 'active' : ''; ?>" href="/">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php echo (strpos($activePage, 'category') !== false) ? 'active' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/category-data">Data Science</a></li>
                        <li><a class="dropdown-item" href="/category">Web Development</a></li>
                        <li><a class="dropdown-item" href="/category-mobile">Mobile Application</a></li>
                        <li><a class="dropdown-item" href="/category-cyber">Cyber Security</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($activePage === 'about') ? 'active' : ''; ?>" href="/about">About Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Mobile Offcanvas Menu -->
<div class="offcanvas offcanvas-end offcanvas-fit" tabindex="-1" id="offcanvasNav" aria-labelledby="offcanvasNavLabel">
    <div class="offcanvas-header">
        <a href="/">
            <img src="img/FIT-Logo.png" alt="FIT" style="height: 36px;">
        </a>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link <?php echo ($activePage === 'home') ? 'active' : ''; ?>" href="/">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle <?php echo (strpos($activePage, 'category') !== false) ? 'active' : ''; ?>" href="#" data-bs-toggle="dropdown">
                    Category
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/category-data">Data Science</a></li>
                    <li><a class="dropdown-item" href="/category">Web Development</a></li>
                    <li><a class="dropdown-item" href="/category-mobile">Mobile Application</a></li>
                    <li><a class="dropdown-item" href="/category-cyber">Cyber Security</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo ($activePage === 'about') ? 'active' : ''; ?>" href="/about">About Us</a>
            </li>
        </ul>
    </div>
</div>