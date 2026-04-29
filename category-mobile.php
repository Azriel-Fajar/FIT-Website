<?php
require_once 'config.php';
$pageTitle = 'FIT Competition 2026 - Mobile Application';
$pageDescription = 'Mobile Application Category - FIT Competition 2026. Develop an innovative mobile app that delivers real-world solutions.';
$activePage = 'category-mobile';
$pageCSS = 'category';
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Hero Section -->
<section class="category-hero">
    <div class="container fade-in-up">
        <img src="img/mobile/Logo-Page-Mobile.png" alt="Mobile Application" class="category-hero-icon">
        <h1>FIT Competition 2026</h1>
        <h2>Mobile Application</h2>
        <p>
            In the Mobile Application category, participants are expected to build an innovative mobile application that provides a solution to a specific problem. The competition covers the full development workflow, supports both Android and iOS platforms, and evaluates entries on criteria such as functionality, interface design, and overall user experience.
        </p>
        <a href="https://forms.gle/1rE4aVwjYpEHWrAB7" target="_blank" class="btn-glow">
            <i class="bi bi-pencil-square me-2"></i>Register Now
        </a>
    </div>
</section>

<!-- Timeline -->
<?php $timelineCategory = 'mobile';
include 'includes/timeline.php'; ?>

<!-- Countdown -->
<section class="countdown-section">
    <div class="container">
        <div class="section-title-wrapper fade-in-up">
            <h2 class="section-title"><span class="gradient-text">Countdown</span></h2>
            <div class="title-line"></div>
        </div>
        <div class="countdown-wrapper fade-in-up" id="countdown-timer">
            <div class="countdown-box glass">
                <div class="countdown-value" id="cd-days">00</div>
                <div class="countdown-label">Days</div>
            </div>
            <div class="countdown-box glass">
                <div class="countdown-value" id="cd-hours">00</div>
                <div class="countdown-label">Hours</div>
            </div>
            <div class="countdown-box glass">
                <div class="countdown-value" id="cd-mins">00</div>
                <div class="countdown-label">Minutes</div>
            </div>
            <div class="countdown-box glass">
                <div class="countdown-value" id="cd-secs">00</div>
                <div class="countdown-label">Seconds</div>
            </div>
        </div>
    </div>
</section>

<!-- Guidebook -->
<section class="guidebook-section">
    <div class="container">
        <div class="section-title-wrapper fade-in-up">
            <h2 class="section-title"><span class="gradient-text">Guidebook</span></h2>
            <div class="title-line"></div>
        </div>
        <div class="guidebook-card glass mx-auto fade-in-up">
            <p>
                The Mobile Application competition challenges participants to develop a mobile app that is not only innovative but also capable of delivering real, practical solutions to users. The app must include interactive features, an intuitive interface, and adapt to user needs across various aspects of daily life. Entries must align with the competition theme and demonstrate stability, efficiency, and an optimal user experience. Participants may use any mobile development platform, programming language, or framework of their choice.
            </p>
            <a href="<?= asset('guidebooks/FIT COMPETITION 2026 GUIDEBOOK WEB&APP.pdf') ?>" download class="btn-glow">
                <i class="bi bi-file-earmark-arrow-down me-2"></i>Download Guidebook
            </a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>