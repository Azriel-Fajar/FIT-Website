<?php
$pageTitle = 'FIT Competition 2026 - Web Development';
$pageDescription = 'Kategori Web Development - FIT Competition 2026. Tunjukkan keterampilan merancang dan mengembangkan situs web inovatif.';
$activePage = 'category-web';
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
            Kompetisi Web Development merupakan ajang bagi peserta untuk menunjukkan keterampilan dalam merancang dan mengembangkan situs web atau aplikasi web yang inovatif, responsif, dan fungsional. Peserta ditantang untuk menciptakan solusi berbasis web yang dapat memberikan dampak positif sesuai dengan tema. Setiap tim atau individu diharapkan mampu mengintegrasikan teknologi yang relevan, mengutamakan pengalaman pengguna (UI/UX), serta memastikan performa dan keamanan website yang dikembangkan. Peserta bebas menggunakan bahasa pemrograman dan framework sesuai dengan keahlian peserta, dengan hasil akhir yang dapat berupa website statis maupun dinamis.
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
                Kompetisi Web Developer menantang peserta untuk membangun situs web yang fungsional, responsif, dan menarik secara visual. Guidebook ini mencakup ketentuan teknis, tema lomba, batasan penggunaan teknologi, serta kriteria penilaian seperti performa, UX/UI, dan kualitas kode.
            </p>
            <a href="https://drive.google.com/file/d/1SI-eija6bFZZZ3fex3jgZ2KUXkU479OU/view?usp=sharing" target="_blank" class="btn-glow">
                <i class="bi bi-file-earmark-text me-2"></i>Download Guidebook
            </a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
