# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Development Setup

This is a PHP site served via XAMPP. To develop locally:

1. Place the project folder inside `C:\xampp\htdocs\`
2. Start Apache via XAMPP Control Panel
3. Visit `http://localhost/FIT%20Website/` in a browser (note the space in the folder name, encoded as `%20`)

There is no build system, package manager, or test suite. Changes to PHP/CSS/JS files are immediately reflected on page reload.

## Architecture

**Stack:** Vanilla PHP + Bootstrap 5.3.3 (CDN) + Vanilla JS. No frameworks, no bundler, no npm dependencies.

**URL Routing:** `.htaccess` rewrites clean URLs to PHP files. The `RewriteBase` is set to `/FIT%20Website/` to match the folder name with a space:
- `/` → `index.php`
- `/about` → `aboutus.php`
- `/winner` → `winnerpage.php`
- `/category` → `category.php` (Web Dev), `-data`, `-mobile`, `-cyber` variants for other categories
- Unmatched routes fall through to `404.php`

**`config.php`:** Must be `require_once`'d first in every page. It auto-detects `BASE_PATH` so asset paths work on both localhost and cPanel. Use its two helpers everywhere — never hardcode paths:
- `route('/path')` — for internal page links
- `asset('img/foo.png')` — for static assets (images, CSS, JS)

**Template Composition:** Every page requires `config.php`, sets page variables, then includes partials:
```php
require_once 'config.php';
$pageTitle = 'FIT Competition 2026';
$pageDescription = '...';
$activePage = 'home';   // controls navbar highlight
$pageCSS = 'home';      // loads css/home.css (omit if no page-specific CSS needed)
include 'includes/header.php';
include 'includes/navbar.php';
// ... page content ...
include 'includes/footer.php';
```

**Partials** live in [includes/](includes/):
- `header.php` — HTML `<head>`, CDN links, loads `css/global.css` then the optional page-specific CSS
- `navbar.php` — Fixed top nav with Bootstrap offcanvas for mobile; uses `$activePage` to highlight links. Category dropdown activates when `$activePage` contains `'category'`
- `footer.php` — Multi-column footer; also loads Bootstrap JS and `js/main.js`
- `timeline.php` and `prizepool.php` — Reusable content sections included where needed

## Styling

**CSS files** in [css/](css/):
- `global.css` — Loaded on every page. Defines CSS custom properties, base reset, typography, shared components (`.glass`, `.btn-glow`, `.fade-in-up`, navbar, footer, geo-shapes)
- `home.css`, `category.css`, `about.css` — Page-specific styles, loaded via the `$pageCSS` variable
- `style.css` — Legacy file, no longer loaded

**Color system** (defined in `global.css`):
```css
--primary-dark: #0a0e15;
--primary-teal: #11698e;
--primary-blue: #19456b;
--accent-green: #16c79a;
--gradient-main: linear-gradient(135deg, #16c79a 0%, #11698e 100%);
--glass-bg: rgba(25, 69, 107, 0.55);
--glass-border: rgba(17, 105, 142, 0.3);
```

Design language is glassmorphism (`.glass` utility class) on dark navy gradients. Fonts are Inter (body) and Sansation (display headings), loaded from Google Fonts.

## JavaScript

- `main.js` — Loaded globally via `footer.php`. Handles: navbar `.scrolled` class at 50 px scroll, countdown timer targeting `2026-05-01`, Intersection Observer scroll-reveal for `.fade-in-up` and `.tl-step` elements, prize pool counter animation (0 → 66,000,000 Rupiah) triggered when `#prize-total` enters viewport, Bootstrap offcanvas close on nav link click
- `category.js` — Legacy file; not currently loaded by any page

## Image Assets

Images in [img/](img/) organized by category (`/carousel`, `/cyber`, `/datascience`, `/mobile`, `/sponsor`). SVG icons (WhatsApp, Instagram, TikTok, favicons) live in [icons/](icons/). The hero logo (`FIT-Logo.png`, ~8 MB) is uncompressed — compress before deploying.
