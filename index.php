<?php
require_once 'config.php';
$pageTitle = 'FIT Competition 2026 - Digital Impact for Humanitarian Response';
$pageDescription = 'FIT Competition 2026 - The largest information technology competition at FTI UKSW. Digital Impact for Humanitarian Response and Global Well-Being.';
$activePage = 'home';
$pageCSS = 'home';
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 text-center text-lg-start">
                <div class="fade-in-up">
                    <span class="hero-badge">FIT Competition 2026</span>
                    <h1 class="hero-title">
                        Digital Impact for<br>
                        <span class="highlight">Humanitarian Response</span><br>
                        and Global Well-Being
                    </h1>
                    <p class="hero-subtitle mx-auto mx-lg-0">
                        A platform for collaboration and innovation in information technology, organized by the Student Association of the Informatics Engineering Undergraduate Program, FTI UKSW.
                    </p>
                    <a href="#competition-category" class="btn-glow">
                        Explore Now <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-5 text-center mt-5 mt-lg-0">
                <div class="fade-in-up">
                    <img src="<?php echo asset('img/FIT-Logo.png'); ?>" alt="FIT Competition 2026 Logo" class="hero-logo">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Competition Category Carousel -->
<section class="py-5" id="competition-category">
    <div class="container">
        <div class="section-title-wrapper fade-in-up">
            <h2 class="section-title"><span class="gradient-text">Competition Category</span></h2>
            <div class="title-line"></div>
        </div>

        <div id="categoryCarousel" class="carousel slide position-relative" data-bs-ride="carousel" data-bs-interval="4000">
            <!-- Indicators -->
            <div class="carousel-indicators mb-0" style="bottom: -40px;">
                <button type="button" data-bs-target="#categoryCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#categoryCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#categoryCarousel" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#categoryCarousel" data-bs-slide-to="3"></button>
            </div>

            <div class="carousel-inner px-lg-5">
                <!-- Web Development -->
                <div class="carousel-item active">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="category-card glass">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 text-center mb-3 mb-md-0">
                                            <img src="<?php echo asset('img/carousel/Carousel-Web-Dev.png'); ?>" alt="Web Development" class="category-icon" loading="lazy">
                                        </div>
                                        <div class="col-md-8">
                                            <h3>Web Development</h3>
                                            <p>The Web Development competition challenges participants to showcase their skills in designing and building innovative, responsive, and fully functional websites or web applications.</p>
                                            <a href="<?php echo route('/category'); ?>" class="btn-outline-glow">More Details <i class="bi bi-arrow-right ms-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Data Science -->
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="category-card glass">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 text-center mb-3 mb-md-0">
                                            <img src="<?php echo asset('img/carousel/Carousel-Data-Science.png'); ?>" alt="Data Science" class="category-icon" loading="lazy">
                                        </div>
                                        <div class="col-md-8">
                                            <h3>Data Science</h3>
                                            <p>In the Data Science category, each team will be presented with a challenge that requires them to analyze and develop the best model using machine learning or deep learning to solve a problem based on a given dataset.</p>
                                            <a href="<?php echo route('/category-data'); ?>" class="btn-outline-glow">More Details <i class="bi bi-arrow-right ms-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mobile Application -->
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="category-card glass">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 text-center mb-3 mb-md-0">
                                            <img src="<?php echo asset('img/carousel/Carousel-Mobile-App.png'); ?>" alt="Mobile Application" class="category-icon" loading="lazy">
                                        </div>
                                        <div class="col-md-8">
                                            <h3>Mobile Application</h3>
                                            <p>The Mobile Application competition challenges participants to develop a mobile app that is not only innovative but also capable of delivering real solutions to everyday user needs.</p>
                                            <a href="<?php echo route('/category-mobile'); ?>" class="btn-outline-glow">More Details <i class="bi bi-arrow-right ms-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Cyber Security -->
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="category-card glass">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 text-center mb-3 mb-md-0">
                                            <img src="<?php echo asset('img/carousel/Carousel-Cyber-Sec.png'); ?>" alt="Cyber Security" class="category-icon" loading="lazy">
                                        </div>
                                        <div class="col-md-8">
                                            <h3>Cyber Security</h3>
                                            <p>The Cyber Security competition in a Capture the Flag (CTF) format invites participants to test and develop their skills in identifying and exploiting vulnerabilities in the digital world.</p>
                                            <a href="<?php echo route('/category-cyber'); ?>" class="btn-outline-glow">More Details <i class="bi bi-arrow-right ms-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <button class="carousel-control-prev d-none d-lg-flex" type="button" data-bs-target="#categoryCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next d-none d-lg-flex" type="button" data-bs-target="#categoryCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>

<!-- About FIT Section -->
<section class="py-5 mt-5">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-8 fade-in-up">
                <div class="about-card glass">
                    <div class="section-title-wrapper text-start mb-3">
                        <h2 class="section-title"><span class="gradient-text">About FIT</span></h2>
                        <div class="title-line" style="margin: 0.75rem 0 0;"></div>
                    </div>
                    <p>
                        FIT Competition 2026 is a platform for collaboration and innovation in information technology, organized by the Student Association of the Informatics Engineering Undergraduate Program at the Faculty of Information Technology, Satya Wacana Christian University. This competition serves as a space for students to develop ideas, design solutions, and implement digital innovations that are relevant to society. Guided by the values of critical thinking, creativity, and innovation, the event evaluates not only technical ability but also depth of analysis and the real-world impact of the solutions produced. FIT Competition 2026 will be held on 7–9 July 2026 at Satya Wacana Christian University, Salatiga, through a series of stages from proposal screening to a live final round.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 text-center fade-in-up">
                <img src="<?php echo asset('img/FIT-Logo.png'); ?>" alt="FIT Competition 2026" class="hero-logo" style="max-width: 250px;" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Prize Pool -->
<?php include 'includes/prizepool.php'; ?>

<!-- Winner Announcement -->
<section class="py-5">
    <div class="container text-center fade-in-up">
        <div class="section-title-wrapper">
            <h2 class="section-title"><span class="gradient-text">Winner Announcement</span></h2>
            <div class="title-line"></div>
        </div>
        <a href="<?php echo route('/winner'); ?>" class="btn-glow mt-3">
            View Winners <i class="bi bi-arrow-right ms-1"></i>
        </a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>