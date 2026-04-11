<?php
$pageTitle = 'FIT Competition 2026 - Cyber Security';
$pageDescription = 'Cyber Security Category - FIT Competition 2026. Capture The Flag (CTF) - Test your cybersecurity skills.';
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
            The Cyber Security competition in a Capture the Flag (CTF) format invites participants to test and develop their skills in identifying and exploiting vulnerabilities in the digital world. Participants will face challenges that put their cybersecurity expertise to the test, from exploiting application vulnerabilities to uncovering and preventing digital threats. The competition follows a CTF Jeopardy Style format with five challenge categories: Cryptography, Web Exploitation, Forensics, Steganography, and Miscellaneous.
        </p>
        <a href="https://forms.gle/ua6u3LjcyeVEtGJA6" target="_blank" class="btn-glow">
            <i class="bi bi-pencil-square me-2"></i>Register Now
        </a>
    </div>
</section>

<!-- Timeline -->
<?php $timelineCategory = 'cyber';
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
                The Cyber Security competition tests participants' ability to understand and solve cybersecurity challenges. The guidebook outlines the competition format (CTF), challenge types (Cryptography, Web Exploitation, Forensics, Steganography, and Miscellaneous), and a scoring system based on points and solving speed.
            </p>
            <a href="https://drive.google.com/file/d/1Qdb076vvny343LyBm-hpwfj9HCup_iuS/view" target="_blank" class="btn-glow">
                <i class="bi bi-file-earmark-text me-2"></i>Download Guidebook
            </a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>