<?php
require_once 'config.php';
$pageTitle = 'FIT Competition 2026 - About Us';
$pageDescription = 'About FIT Competition 2026 - Sponsors and partners of the FTI UKSW information technology competition.';
$activePage = 'about';
$pageCSS = 'about';
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- About Hero -->
<section class="py-5" style="padding-top: 7rem !important;">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-5 text-center fade-in-up">
                <img src="img/FIT-Logo.png" alt="FIT Competition 2026" class="hero-logo" style="max-width: 280px;">
            </div>
            <div class="col-lg-7 fade-in-up">
                <div class="about-card glass">
                    <div class="section-title-wrapper text-start mb-3">
                        <h2 class="section-title"><span class="gradient-text">About FIT Competition</span></h2>
                        <div class="title-line" style="margin: 0.75rem 0 0;"></div>
                    </div>
                    <p>
                        FIT Competition 2026 is a platform for collaboration and innovation in information technology, organized by the Student Association of the Informatics Engineering Undergraduate Program at the Faculty of Information Technology, Satya Wacana Christian University. This competition serves as a space for students to develop ideas, design solutions, and implement digital innovations that are relevant to society.
                    </p>
                    <p>
                        Guided by the values of critical thinking, creativity, and innovation, the event evaluates not only technical ability but also depth of analysis and the real-world impact of the solutions produced. FIT Competition 2026 will be held on 7–9 July 2026 at Satya Wacana Christian University, Salatiga, through a series of stages from proposal screening to a live final round.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Theme -->
<section class="py-5">
    <div class="container">
        <div class="text-center fade-in-up">
            <div class="section-title-wrapper">
                <h2 class="section-title"><span class="gradient-text">Theme 2026</span></h2>
                <div class="title-line"></div>
            </div>
            <div class="glass p-4 p-md-5 mx-auto" style="max-width: 700px; margin-top: 1rem;">
                <blockquote class="mb-0">
                    <p class="fs-4 fw-bold mb-2" style="background: var(--gradient-main); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                        "Digital Impact for Humanitarian Response and Global Well-Being"
                    </p>
                    <footer class="text-secondary small">FIT Competition 2026</footer>
                </blockquote>
            </div>
        </div>
    </div>
</section>

<!-- Sponsors Section -->
<section class="sponsors-section">
    <div class="container">
        <div class="section-title-wrapper fade-in-up">
            <h2 class="section-title"><span class="gradient-text">Our Supporters</span></h2>
            <p class="section-subtitle mt-2" style="color: var(--accent-cyan); font-weight: 600; letter-spacing: 2px; text-transform: uppercase; font-size: 0.9rem;">Sponsors & Partners</p>
            <div class="title-line"></div>
        </div>

        <div class="row justify-content-center align-items-center g-4 g-md-5 mt-2">
            <div class="col-auto fade-in-up">
                <div class="glass p-3 p-md-4 text-center" style="border-radius: 1rem;">
                    <img src="img/sponsor/logo-alfamart.png" alt="Alfamart" class="sponsor-logo" style="max-height: 80px;" loading="lazy">
                </div>
            </div>
            <div class="col-auto fade-in-up">
                <div class="sponsor-card-bg" style="border-radius: 1rem;">
                    <img src="img/sponsor/logo-tcp.png" alt="TCP" class="sponsor-logo" style="max-height: 80px;" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>