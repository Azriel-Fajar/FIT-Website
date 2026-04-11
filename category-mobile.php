<?php
$pageTitle = 'FIT Competition 2026 - Mobile Application';
$pageDescription = 'Kategori Mobile Application - FIT Competition 2026. Kembangkan aplikasi mobile inovatif yang memberikan solusi nyata.';
$activePage = 'category-mobile';
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
            Pada kategori Mobile Application, peserta diharapkan membuat aplikasi mobile inovatif yang memberikan solusi atas permasalahan tertentu. Guidebook ini menjelaskan alur pengembangan, platform yang diperbolehkan (Android/iOS), dan aspek penilaian seperti fungsionalitas, desain antarmuka, serta pengalaman pengguna.
        </p>
        <a href="https://forms.gle/LdyrgDz8MhieJ8DU6" target="_blank" class="btn-glow">
            <i class="bi bi-pencil-square me-2"></i>Register Now
        </a>
    </div>
</section>

<!-- Timeline -->
<?php include 'includes/timeline.php'; ?>

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
                Kompetisi Mobile Application menantang peserta untuk mengembangkan aplikasi mobile yang tidak hanya inovatif tetapi juga mampu memberikan solusi nyata bagi pengguna. Aplikasi yang dibuat harus memiliki fitur interaktif, antarmuka yang intuitif, serta mampu beradaptasi dengan kebutuhan pengguna dalam berbagai aspek kehidupan. Dalam kompetisi ini, peserta harus memastikan aplikasi yang dikembangkan sesuai dengan tema, serta memiliki kestabilan, efisiensi, dan pengalaman pengguna yang optimal. Peserta dapat menggunakan platform pengembangan mobile apa pun dengan bahasa pemrograman dan framework yang dikuasai.
            </p>
            <a href="https://drive.google.com/file/d/1SI-eija6bFZZZ3fex3jgZ2KUXkU479OU/view?usp=sharing" target="_blank" class="btn-glow">
                <i class="bi bi-file-earmark-text me-2"></i>Download Guidebook
            </a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>