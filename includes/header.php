<?php
/**
 * Navyakosh Header Include
 * This file contains the top bar, navigation header, and preloader
 */

// Get current page for active nav link
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo isset($page_description) ? $page_description : 'Navyakosh Bio-Fertilizer - Premium bio-fertilizers for sustainable agriculture. Enhance crop yield and soil health naturally.'; ?>">
    <meta name="keywords" content="bio-fertilizer, organic farming, agriculture, crops, soil health, sustainable farming, Tanzania">
    <title><?php echo isset($page_title) ? $page_title : 'Navyakosh | Premium Bio-Fertilizers for Sustainable Agriculture'; ?></title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    
    <?php if (isset($extra_css)) echo $extra_css; ?>
</head>
<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-logo">
                <img src="images/preloader.gif" alt="Navyakosh Logo">
                <span class="preloader-text">Where Agriculture Meets Innovation.</span>
            </div>
            <!--<div class="preloader-bar"></div>-->
        </div>
    </div>
    <script>
        (function() {
            document.body.classList.add('preloader-active');

            function unlockScroll() {
                document.body.classList.remove('preloader-active');
                document.body.style.overflow = '';
                document.documentElement.style.overflow = '';
            }

            window.addEventListener('load', function() {
                setTimeout(unlockScroll, 1000);
            });

            setTimeout(unlockScroll, 4000);
        })();
    </script>

    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container">
            <div class="top-bar-content">
                <div class="top-bar-info">
                    <div class="top-bar-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Dar es Salaam, Tanzania</span>
                    </div>
                    <div class="top-bar-item">
                        <i class="fas fa-phone"></i>
                        <span>+255 684 316 177</span>
                    </div>
                    <div class="top-bar-item">
                        <i class="fas fa-clock"></i>
                        <span>Mon - Fri: 8:00 AM - 5:00 PM</span>
                    </div>
                </div>
                <div class="top-bar-social">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header class="header">
        <div class="container">
            <nav class="nav-container">
                <a href="index.php" class="logo">
                    <div class="logo-icon">
                        <img src="images/logo.png" alt="Navyakosh">
                    </div>
                    <!--
                    <span class="logo-text">Navya<span>kosh</span></span>
                    -->
                </a>

                <ul class="nav-menu">
                    <li><a href="index.php" class="nav-link <?php echo $current_page == 'index.php' ? 'active' : ''; ?>">Home</a></li>
                    <li><a href="index.php#about" class="nav-link">About Us</a></li>
                    <li><a href="index.php#fertilizers" class="nav-link">Fertilizers</a></li>
                    <li><a href="case.php" class="nav-link <?php echo $current_page == 'case.php' ? 'active' : ''; ?>">Case</a></li>
                    <li><a href="https://bizlogicsolutions.com/" class="nav-link" target="_blank" rel="noopener noreferrer">IT Section</a></li>
                    <li><a href="contact.php" class="nav-link nav-cta">Contact Us</a></li>
                </ul>

                <div class="mobile-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </nav>
        </div>
    </header>
