<?php
/**
 * FIT Competition 2026 - Footer Include
 */
require_once dirname(__FILE__) . '/../config.php';
?>
<!-- Footer -->
<footer class="footer-fit">
    <div class="container">

        <div class="footer-grid">

            <!-- Logo & Tagline -->
            <div class="footer-col footer-col-brand">
                <img src="<?php echo asset('img/LOGO FIT 2026 FULL.png'); ?>" alt="FIT Competition 2026" class="footer-logo" loading="lazy">
                <p class="text-secondary small mb-0">
                    Digital Impact for Humanitarian Response and Global Well-Being
                </p>
            </div>

            <!-- Quick Links -->
            <div class="footer-col">
                <h5>Quick Links</h5>
                <ul class="list-unstyled mb-0">
                    <li class="mb-2"><a href="<?php echo route('/'); ?>#competition-category">Category</a></li>
                    <li class="mb-2"><a href="<?php echo route('/about'); ?>">About Us</a></li>
                    <li class="mb-2 text-start"><a href="<?php echo route('/winner'); ?>">Winner</a></li>
                </ul>
            </div>

            <!-- Contact Us -->
            <div class="footer-col">
                <h5>Contact Us</h5>
                <ul class="list-unstyled mb-0">
                    <li class="mb-2">
                        <a href="https://wa.me/6281278000894" target="_blank" class="footer-contact-link">
                            <img src="<?php echo asset('icons/whatsapp.svg'); ?>" alt="WhatsApp" class="footer-wa-icon" loading="lazy">
                            <span>Data Science (Cynthia)</span>
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="https://wa.me/6285326378976" target="_blank" class="footer-contact-link">
                            <img src="<?php echo asset('icons/whatsapp.svg'); ?>" alt="WhatsApp" class="footer-wa-icon" loading="lazy">
                            <span>Web & App (Gavriel)</span>
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="https://wa.me/6288238463537" target="_blank" class="footer-contact-link">
                            <img src="<?php echo asset('icons/whatsapp.svg'); ?>" alt="WhatsApp" class="footer-wa-icon" loading="lazy">
                            <span>Cybersecurity (Yusak)</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Social Media -->
            <div class="footer-col">
                <h5>Social Media</h5>
                <div class="footer-socials">
                    <a href="https://www.instagram.com/fitcompetition26" target="_blank" class="social-icon" title="Instagram">
                        <img src="<?php echo asset('icons/instagram.svg'); ?>" alt="Instagram" loading="lazy">
                    </a>
                    <a href="https://www.tiktok.com/@fit.competition" target="_blank" class="social-icon" title="TikTok">
                        <img src="<?php echo asset('icons/tiktok.svg'); ?>" alt="TikTok" loading="lazy">
                    </a>
                </div>
            </div>

        </div>

        <!-- Copyright -->
        <div class="footer-copyright text-center">
            &copy; <?php echo date('Y'); ?> FIT Competition. All Rights Reserved.
        </div>

    </div>
</footer>

<!-- Bootstrap 5.3 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Main JS -->
<script src="<?php echo asset('js/main.js'); ?>"></script>
</body>

</html>