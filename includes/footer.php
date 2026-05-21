<?php
/**
 * Navyakosh Footer Include
 * This file contains the footer, WhatsApp button, back to top, and scripts
 */
?>
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <a href="index.php" class="logo">
                        <div class="logo-icon">
                            <img src="images/navyakosh.png" alt="Navyakosh">
                        </div>
                       <!-- <span class="logo-text">Navya<span>kosh</span></span>-->
                    </a>
                    <p>
                        Navyakosh is committed to sustainable agriculture through innovative 
                        bio-fertilizer solutions that enhance crop productivity while 
                        preserving soil health for future generations.
                    </p>
                    <div class="footer-social">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <div class="footer-links-col">
                    <h4 class="footer-title">Quick Links</h4>
                    <ul class="footer-links">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index.php#about">About Us</a></li>
                        <li><a href="index.php#fertilizers">Fertilizers</a></li>
                        <li><a href="case.php">Case Studies</a></li>
                        <li><a href="https://bizlogicsolutions.com/" target="_blank" rel="noopener noreferrer">IT Section</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                </div>

                <div class="footer-links-col">
                    <h4 class="footer-title">Crop Solutions</h4>
                    <ul class="footer-links">
                        <li><a href="crop-detail.php?crop=legumes">For Legumes</a></li>
                        <li><a href="crop-detail.php?crop=tobacco">For Tobacco</a></li>
                        <li><a href="crop-detail.php?crop=maize">For Maize</a></li>
                        <li><a href="crop-detail.php?crop=rice">For Rice</a></li>
                        <li><a href="crop-detail.php?crop=sugarcane">For Sugarcane</a></li>
                        <li><a href="crop-detail.php?crop=watermelon">For Watermelon</a></li>
                        <li><a href="crop-detail.php?crop=coffee">For Coffee</a></li>
                        <li><a href="crop-detail.php?crop=horticulture">For Horticulture</a></li>
                    </ul>
                </div>

                <div class="footer-contact-col">
                    <h4 class="footer-title">Contact Info</h4>
                    <ul class="footer-contact">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Dar es Salaam, Tanzania</span>
                        </li>
                        <li>
                            <i class="fas fa-phone"></i>
                            <span>+255 684 316 177</span>
                        </li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <span>info@bizlogicsolutions.com</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> Biz-Logic Agriculture Division. All Rights Reserved.</p>
               
            </div>
        </div>
    </footer>

    <!-- WhatsApp Button -->
    <a href="https://wa.me/255684316177" class="whatsapp-btn" aria-label="Chat on WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Back to Top -->
    <div class="back-to-top" aria-label="Back to top">
        <i class="fas fa-arrow-up"></i>
    </div>

    <!-- Scripts -->
    <script src="js/main.js"></script>
    <?php if (isset($extra_js)) echo $extra_js; ?>
</body>
</html>
