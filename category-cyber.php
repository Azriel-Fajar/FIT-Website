<?php
$pageTitle = 'FIT Competition 2026 - Cyber Security';
$pageDescription = 'Kategori Cyber Security - FIT Competition 2026. Capture The Flag (CTF) - Uji kemampuan keamanan siber Anda.';
$activePage = 'category-cyber';
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Hero Section -->
<section class="category-hero">
    <div class="container fade-in-up">
        <img src="img/cyber/Logo-Page-Cyber.png" alt="Cyber Security" class="category-hero-icon">
        <h1>FIT Competition 2026</h1>
        <h2>Cyber Security</h2>
        <p>
            Kompetensi Cyber Security dalam ajang Capture the Flag (CTF) mengajak peserta untuk menguji dan mengembangkan kemampuan mereka dalam menemukan dan mengeksploitasi kerentanan di dunia digital. Dalam kompetisi ini, peserta akan dihadapkan pada tantangan yang menguji keterampilan dalam bidang Cyber Security. Peserta diminta untuk menyelesaikan serangkaian tantangan yang berfokus pada isu-isu keamanan data, mulai dari eksploitasi kerentanan aplikasi hingga pengungkapan dan pencegahan ancaman. Format perlombaan adalah Capture The Flag - Jeopardy Style dengan 5 kategori soal yang terdiri atas Cryptography, Web Exploitation, Forensics, Steganography, dan Miscellaneous.
        </p>
        <a href="https://forms.gle/ua6u3LjcyeVEtGJA6" target="_blank" class="btn-glow">
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
                Kompetisi Cyber Security menguji kemampuan peserta dalam memahami dan menyelesaikan tantangan keamanan siber. Guidebook ini menjelaskan format lomba (seperti CTF), jenis soal (Cryptography, Web Exploitation, Forensics, Steganography, dan Miscellaneous), serta sistem penilaian berbasis poin dan kecepatan penyelesaian.
            </p>
            <a href="https://drive.google.com/file/d/1Qdb076vvny343LyBm-hpwfj9HCup_iuS/view" target="_blank" class="btn-glow">
                <i class="bi bi-file-earmark-text me-2"></i>Download Guidebook
            </a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>