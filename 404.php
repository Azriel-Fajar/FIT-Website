<?php
$pageTitle = 'Page Not Found - FIT Competition 2026';
$pageDescription = 'The page you are looking for does not exist.';
$activePage = '404';
require_once 'config.php';
include 'includes/header.php';
include 'includes/navbar.php';
?>

<style>
    .error-section {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: calc(100vh - 120px);
        padding: 40px 20px;
        margin-top: 80px;
    }

    .error-content {
        text-align: center;
        max-width: 600px;
        animation: fadeInUp 0.8s ease-out;
    }

    .error-code {
        font-size: 120px;
        font-weight: bold;
        background: linear-gradient(135deg, #16c79a 0%, #11698e 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin: 0;
        line-height: 1;
    }

    .error-title {
        font-size: 32px;
        font-weight: 600;
        margin: 20px 0;
        color: #f8f1f1;
    }

    .error-description {
        font-size: 16px;
        color: rgba(255, 255, 255, 0.7);
        margin-bottom: 30px;
        line-height: 1.6;
    }

    .error-actions {
        display: flex;
        gap: 15px;
        justify-content: center;
        flex-wrap: wrap;
    }

    .btn-back {
        padding: 12px 30px;
        border-radius: 8px;
        font-weight: 500;
        transition: all 0.3s ease;
        border: 2px solid #16c79a;
        color: #16c79a;
        background: transparent;
        text-decoration: none;
        display: inline-block;
    }

    .btn-back:hover {
        background: #16c79a;
        color: #19456b;
    }

    .btn-home {
        padding: 12px 30px;
        border-radius: 8px;
        font-weight: 500;
        transition: all 0.3s ease;
        background: linear-gradient(135deg, #16c79a 0%, #11698e 100%);
        color: #f8f1f1;
        text-decoration: none;
        display: inline-block;
    }

    .btn-home:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(22, 199, 154, 0.3);
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<section class="error-section">
    <div class="error-content">
        <h1 class="error-code">404</h1>
        <h2 class="error-title">Page Not Found</h2>
        <p class="error-description">
            Sorry! The page you're looking for doesn't exist or has been moved. Please check the URL and try again.
        </p>
        <div class="error-actions">
            <a href="<?php echo route('/'); ?>" class="btn-home">Back to Home</a>
            <a href="javascript:history.back()" class="btn-back">Go Back</a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
