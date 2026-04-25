<?php
require_once 'config.php';
$pageTitle = 'FIT Competition 2026 - Web Development';
$pageDescription = 'Web Development Category - FIT Competition 2026. Showcase your skills in designing and building innovative websites.';
$activePage = 'category-web';
$pageCSS = 'category';
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Hero Section -->
<section class="category-hero">
    <div class="container fade-in-up">
        <img src="img/Logo-Page=WebDev.png" alt="Web Development" class="category-hero-icon">
        <h1>FIT Competition 2026</h1>
        <h2>Web Development</h2>
        <p>
            The Web Development competition challenges participants to showcase their skills in designing and building innovative, responsive, and fully functional websites or web applications. Participants are tasked with creating web-based solutions that deliver a positive impact aligned with the competition theme. Each team or individual is expected to integrate relevant technologies, prioritize user experience (UI/UX), and ensure the performance and security of the developed website. Participants are free to use any programming language or framework of their choice, with the final product being either a static or dynamic website.
        </p>
        <a href="https://forms.gle/LdyrgDz8MhieJ8DU6" target="_blank" class="btn-glow">
            <i class="bi bi-pencil-square me-2"></i>Register Now
        </a>
    </div>
</section>

<!-- Timeline -->
<?php $timelineCategory = 'web';
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
                The Web Development competition challenges participants to build a website that is functional, responsive, and visually appealing. The guidebook covers technical requirements, the competition theme, technology usage constraints, and evaluation criteria such as performance, UX/UI, and code quality.
            </p>
            <a href="https://drive.google.com/file/d/1SI-eija6bFZZZ3fex3jgZ2KUXkU479OU/view?usp=sharing" target="_blank" class="btn-glow">
                <i class="bi bi-file-earmark-text me-2"></i>Download Guidebook
            </a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>