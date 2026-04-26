<?php
require_once 'config.php';
$pageTitle = 'FIT Competition 2026 - Data Science';
$pageDescription = 'Data Science Category - FIT Competition 2026. Analyze data and build the best machine learning model.';
$activePage = 'category-data';
$pageCSS = 'category';
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Hero Section -->
<section class="category-hero">
    <div class="container fade-in-up">
        <img src="img/datascience/Logo-Page-Data.png" alt="Data Science" class="category-hero-icon">
        <h1>FIT Competition 2026</h1>
        <h2>Data Science</h2>
        <p>
            In the Data Science category, each team will be presented with a challenge that requires them to analyze and develop the best model using machine learning or deep learning to solve a problem based on a given dataset. There will be two types of datasets provided: Image Datasets and Tabular Datasets. Image Datasets can be analyzed using classification, segmentation, or object detection methods, while Tabular Datasets can be analyzed using regression, classification, clustering, or time series forecasting methods. Each team is allowed to use one or more datasets of the same or different types.
        </p>
        <a href="https://forms.gle/R8GzGoTGpPKtVNZNA" target="_blank" class="btn-glow">
            <i class="bi bi-pencil-square me-2"></i>Register Now
        </a>
    </div>
</section>

<!-- Timeline -->
<?php $timelineCategory = 'data';
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
                The Data Science category focuses on the ability to analyze data and produce meaningful insights. The guidebook includes dataset descriptions, analysis objectives, recommended techniques (such as machine learning or data visualization), and assessment criteria based on model accuracy, result interpretation, and innovation.
            </p>
            <a href="https://drive.google.com/file/d/1c0mRYvnCOxyBmHTeHeZL95Iur1s8vwoH/view?usp=sharing" target="_blank" class="btn-glow">
                <i class="bi bi-file-earmark-text me-2"></i>Download Guidebook
            </a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>