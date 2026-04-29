<?php
require_once 'config.php';
$pageTitle = 'FIT Competition 2026 - Winner Announcement';
$pageDescription = 'Winner announcement for FIT Competition 2026.';
$activePage = 'winner';
$pageCSS = 'home';
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Winner Section -->
<section class="winner-section" style="padding-top: 7rem;">
    <div class="container">
        <div class="fade-in-up">
            <div class="section-title-wrapper">
                <h2 class="section-title"><span class="gradient-text">Winner Announcement</span></h2>
                <p class="section-subtitle mt-1">FIT Competition 2026</p>
                <div class="title-line"></div>
            </div>

            <div class="tba-text">TBA</div>
            <p class="text-secondary mt-3">Winners will be announced after the final round.</p>

            <a href="<?php echo route('/'); ?>" class="btn-outline-glow mt-4">
                <i class="bi bi-arrow-left me-2"></i>Back to Home
            </a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>