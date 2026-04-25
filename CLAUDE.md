# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Development Setup

This is a PHP site served via XAMPP. To develop locally:

1. Place the project folder inside `C:\xampp\htdocs\`
2. Start Apache via XAMPP Control Panel
3. Visit `http://localhost/FIT-Website/` in a browser

There is no build system, package manager, or test suite. Changes to PHP/CSS/JS files are immediately reflected on page reload.

## Architecture

**Stack:** Vanilla PHP + Bootstrap 5.3.3 (CDN) + Vanilla JS. No frameworks, no bundler, no npm dependencies.

**URL Routing:** `.htaccess` rewrites clean URLs to PHP files:
- `/` → `index.php`
- `/about` → `aboutus.php`
- `/winner` → `winnerpage.php`
- `/category` → `category.php` (and similar for `-data`, `-mobile`, `-cyber` variants)

**Template Composition:** Every page sets `$pageTitle`, `$pageDescription`, and `$activePage` variables, then pulls in partials via `include`:
```php
$pageTitle = "FIT 2026";
$pageDescription = "...";
$activePage = "home";
include 'includes/header.php';
include 'includes/navbar.php';
// ... page content ...
include 'includes/footer.php';
```

**Partials** live in [includes/](includes/):
- `header.php` — HTML `<head>`, CDN links (Bootstrap, Google Fonts)
- `navbar.php` — Fixed top nav; uses `$activePage` to highlight the current link
- `footer.php` — Multi-column footer
- `timeline.php` and `prizepool.php` — Reusable content sections

## Styling

Single stylesheet: [css/style.css](css/style.css). CSS custom properties define the entire color system:

```css
--primary-dark: #0a0e27;
--accent-teal: #16c598;
--accent-cyan: #00d4ff;
--accent-purple: #8b5cf6;
```

Design language is glassmorphism (semi-transparent cards with `rgba` backgrounds and borders) on dark navy gradients. Fonts are Inter (body) and Sansation (display headings), both loaded from Google Fonts.

## JavaScript

Two files in [js/](js/):
- `main.js` — Navbar scroll effect (`.scrolled` class at 50 px), countdown timer targeting `2026-05-01`, Intersection Observer scroll-reveal for `.fade-in-up` elements, prize pool counter animation (0 → 66,000,000 Rupiah), Bootstrap offcanvas close on nav link click
- `category.js` — Category-page-specific interactions

## Image Assets

Large images live in [img/](img/) organized by category (`/carousel`, `/cyber`, `/datascience`, `/mobile`, `/sponsor`). The hero logo (`FIT-Logo.png`, 8.2 MB) and footer logo are notably large — compress before deploying if bandwidth is a concern.
