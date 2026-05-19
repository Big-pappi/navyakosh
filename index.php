<?php
/**
 * Navyakosh Home Page
 */
$page_title = 'Navyakosh | Premium Bio-Fertilizers for Sustainable Agriculture';
$page_description = 'Navyakosh Bio-Fertilizer - Premium bio-fertilizers for sustainable agriculture. Enhance crop yield and soil health naturally.';

include 'includes/header.php';
?>

    <!-- Hero Slider Section -->
    <section class="hero-slider">
        <div class="slides-container">
            <!-- Slide 1 -->
            <div class="slide active" data-slide="1">
                <div class="slide-bg">
                    <img src="images/hero-bg.webp" alt="Lush green agricultural farmland">
                </div>
                <div class="slide-overlay"></div>
                <div class="slide-content">
                    <span class="slide-tagline">FRESHNESS MATTERS</span>
                    <h1 class="slide-title">Cultivating Fresh Crops<br>for a Better Tomorrow</h1>
                    <a href="products.php" class="btn btn-white">Discover More</a>
                </div>
            </div>
            
            <!-- Slide 2 -->
            <div class="slide" data-slide="2">
                <div class="slide-bg">
                    <img src="images/hero-bg5.webp" alt="Modern farming technology">
                </div>
                <div class="slide-overlay"></div>
                <div class="slide-content">
                    <span class="slide-tagline">ORGANIC & FRESH FARM</span>
                    <h1 class="slide-title">Modern Farming Innovation<br>through Technology</h1>
                    <a href="about.php" class="btn btn-white">Read More</a>
                </div>
            </div>
            
            <!-- Slide 3 -->
            <div class="slide" data-slide="3">
                <div class="slide-bg">
                    <img src="images/hero-bg3.webp" alt="maize field">
                </div>
                <div class="slide-overlay"></div>
                <div class="slide-content" style="padding: 10px 0;">
                    <span class="slide-tagline">PREMIUM BIO-FERTILIZERS</span>
                    <h1 class="slide-title">Nurturing Growth,<br>Naturally</h1>
                    <a href="products.php" class="btn btn-white">Explore Products</a>
                </div>
            </div>
        </div>
        
        <!-- Slider Navigation Dots -->
        <div class="slider-dots">
            <button class="dot active" data-slide="1" aria-label="Slide 1"></button>
            <button class="dot" data-slide="2" aria-label="Slide 2"></button>
            <button class="dot" data-slide="3" aria-label="Slide 3"></button>
        </div>
    </section>

    <!-- Stats Section -->
     <!--
    <section class="stats-section">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-card reveal">
                    <div class="stat-icon">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <div class="stat-number" data-count="10">0</div>
                    <div class="stat-label">Years Experience</div>
                </div>
                <div class="stat-card reveal">
                    <div class="stat-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stat-number" data-count="1000">0</div>
                    <div class="stat-label">Happy Farmers</div>
                </div>
                <div class="stat-card reveal">
                    <div class="stat-icon">
                        <i class="fas fa-box-open"></i>
                    </div>
                    <div class="stat-number" data-count="3+">0</div>
                    <div class="stat-label">Products</div>
                </div>
              
                <div class="stat-card reveal">
                    <div class="stat-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <div class="stat-number" data-count="15">0</div>
                    <div class="stat-label">Awards Won</div>
                </div>

            </div>
        </div>
    </section>
    -->

    <!-- Features Section -->
    <section class="section features" id="features">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-badge">
                    <i class="fas fa-seedling"></i>
                    Why Choose Us
                </span>
                <h2 class="section-title">The <span>Navyakosh</span> Advantage</h2>
                <p class="section-description">
                    Our bio-fertilizers are designed to work with nature, not against it, 
                    providing sustainable solutions for modern agriculture.
                </p>
            </div>

            <div class="features-grid">
                <div class="feature-card reveal">
                    <div class="feature-icon">
                        <i class="fas fa-microscope"></i>
                    </div>
                    <h3 class="feature-title">Beneficial Microorganisms</h3>
                    <p class="feature-text">
                        Our products contain specially selected microorganisms that enhance 
                        nutrient availability and promote healthy root development.
                    </p>
                </div>

                <div class="feature-card reveal">
                    <div class="feature-icon">
                        <i class="fas fa-hand-holding-heart"></i>
                    </div>
                    <h3 class="feature-title">Soil Health Restoration</h3>
                    <p class="feature-text">
                        Rebuild your soil's natural fertility and structure with our 
                        organic formulations that work in harmony with the earth.
                    </p>
                </div>

                <div class="feature-card reveal">
                    <div class="feature-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="feature-title">Enhanced Nutrient Uptake</h3>
                    <p class="feature-text">
                        Maximize the efficiency of plant nutrition with our advanced 
                        bio-stimulants that improve root absorption capabilities.
                    </p>
                </div>

                <div class="feature-card reveal">
                    <div class="feature-icon">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <h3 class="feature-title">Balanced Growth</h3>
                    <p class="feature-text">
                        Achieve uniform, quality-focused growth that emphasizes both 
                        yield and produce quality for premium market value.
                    </p>
                </div>

                <div class="feature-card reveal">
                    <div class="feature-icon">
                        <i class="fas fa-recycle"></i>
                    </div>
                    <h3 class="feature-title">Sustainable Production</h3>
                    <p class="feature-text">
                        Long-term sustainability means healthier farms for generations 
                        to come with reduced environmental impact.
                    </p>
                </div>

                <div class="feature-card reveal">
                    <div class="feature-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3 class="feature-title">Quality Assurance</h3>
                    <p class="feature-text">
                        Every batch is tested for efficacy and purity to ensure 
                        consistent results in your fields.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Preview Section -->
    <section class="section" id="about-preview">
        <div class="container">
            <div class="about-content">
                <div class="about-image reveal-left">
                    <img src="images/fertilizers.webp" alt="Fertilizer application in field">
                     <!--
                    <div class="about-image-badge">
                       <span class="number">10+</span>
                        <span class="text">Years of Excellence</span>
                    </div>
                    -->
                </div>
                
                <div class="about-text reveal-right">
                    <span class="section-badge">
                        <i class="fas fa-info-circle"></i>
                        About Navyakosh
                    </span>
                    <h2>Empowering Farmers with <span>Nature's Best</span></h2>
                    <p>
                        Navyakosh Bio-Fertilizer represents a new era in sustainable agriculture. 
                        We combine traditional farming wisdom with cutting-edge biotechnology to 
                        create products that truly work in harmony with nature.
                    </p>
                    <p>
                        Our mission is to help farmers achieve better yields while preserving 
                        soil health for future generations. Every product we develop is backed 
                        by extensive research and field testing.
                    </p>
                    
                    <div class="about-features">
                        <div class="about-feature">
                            <i class="fas fa-check"></i>
                            <span>100% Organic Solutions</span>
                        </div>
                        <div class="about-feature">
                            <i class="fas fa-check"></i>
                            <span>Research-Backed Formulas</span>
                        </div>
                        <div class="about-feature">
                            <i class="fas fa-check"></i>
                            <span>Expert Support Team</span>
                        </div>
                        <div class="about-feature">
                            <i class="fas fa-check"></i>
                            <span>Proven Field Results</span>
                        </div>
                    </div>

                    <a href="about.php" class="btn btn-primary">
                        <i class="fas fa-arrow-right"></i>
                        Learn More About Us
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Crop Solutions Section -->
    <section class="section crops" id="crops">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-badge">
                    <i class="fas fa-tractor"></i>
                    Crop Solutions
                </span>
                <h2 class="section-title">Specialized Solutions for <span>Every Crop</span></h2>
                <p class="section-description" style="color: rgba(255,255,255,0.8);">
                    Navyakosh offers tailored bio-fertilizer solutions designed specifically 
                    for different crops, ensuring optimal results.
                </p>
            </div>

            <div class="crops-grid">
                <a href="crop-detail.php?crop=legumes" class="crop-card reveal">
                    <div class="crop-image">
                        <img src="images/legumes.jpg" alt="Healthy legume plants">
                    </div>
                    <h3 class="crop-name">Navyakosh for Legumes</h3>
                    <p class="crop-description">
                        Enhanced nitrogen fixation and improved pod development for higher yields.
                    </p>
                    <span class="crop-link">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </span>
                </a>

                <a href="crop-detail.php?crop=tobacco" class="crop-card reveal">
                    <div class="crop-image">
                        <img src="images/tobacco.jpg" alt="Healthy tobacco leaves">
                    </div>
                    <h3 class="crop-name">Navyakosh for Tobacco</h3>
                    <p class="crop-description">
                        Quality-focused nutrition for uniform leaf development and consistency.
                    </p>
                    <span class="crop-link">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </span>
                </a>

                <a href="crop-detail.php?crop=maize" class="crop-card reveal">
                    <div class="crop-image">
                        <img src="images/navyakosh-maize.jpeg" alt="Golden maize field">
                    </div>
                    <h3 class="crop-name">Navyakosh for Maize</h3>
                    <p class="crop-description">
                        Maximize grain filling and stalk strength for abundant harvest.
                    </p>
                    <span class="crop-link">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </span>
                </a>

                <a href="crop-detail.php?crop=rice" class="crop-card reveal">
                    <div class="crop-image">
                        <img src="images/rice.jpg" alt="Lush green rice paddies">
                    </div>
                    <h3 class="crop-name">Navyakosh for Rice</h3>
                    <p class="crop-description">
                        Improved tillering and grain quality for premium rice production.
                    </p>
                    <span class="crop-link">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </span>
                </a>

                <a href="crop-detail.php?crop=sugarcane" class="crop-card reveal">
                    <div class="crop-image">
                        <img src="images/sugarcane.jpg" alt="Tall sugarcane stalks">
                    </div>
                    <h3 class="crop-name">Navyakosh for Sugarcane</h3>
                    <p class="crop-description">
                        Enhanced sucrose content and robust cane growth for better yields.
                    </p>
                    <span class="crop-link">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </span>
                </a>

                <a href="crop-detail.php?crop=palm" class="crop-card reveal">
                    <div class="crop-image">
                        <img src="images/palm.jpg" alt="Palm plantation">
                    </div>
                    <h3 class="crop-name">Navyakosh for Palm</h3>
                    <p class="crop-description">
                        Optimized nutrition for healthy fronds and increased oil production.
                    </p>
                    <span class="crop-link">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </span>
                </a>

                <a href="crop-detail.php?crop=watermelon" class="crop-card reveal">
                    <div class="crop-image">
                        <img src="images/Watermelon.jpg" alt="Fresh watermelons">
                    </div>
                    <h3 class="crop-name">Navyakosh for Watermelon</h3>
                    <p class="crop-description">
                        Superior fruit development and sweetness for premium market quality.
                    </p>
                    <span class="crop-link">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </span>
                </a>

                <a href="crop-detail.php?crop=coffee" class="crop-card reveal">
                    <div class="crop-image">
                        <img src="images/coffee.jpg" alt="Coffee plantation">
                    </div>
                    <h3 class="crop-name">Navyakosh for Coffee</h3>
                    <p class="crop-description">
                        Enhanced bean quality and improved yield for specialty coffee production.
                    </p>
                    <span class="crop-link">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </span>
                </a>

                <a href="crop-detail.php?crop=horticulture" class="crop-card reveal">
                    <div class="crop-image">
                        <img src="images/navyakosh-horticulture.png" alt="Horticulture crops">
                    </div>
                    <h3 class="crop-name">Navyakosh for Horticulture</h3>
                    <p class="crop-description">
                        Complete nutrition solutions for vegetables, fruits, and ornamental plants.
                    </p>
                    <span class="crop-link">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </span>
                </a>
            </div>
        </div>
    </section>

    <!-- Products Preview Section -->
    <section class="section products" id="products-preview">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-badge">
                    <i class="fas fa-box"></i>
                    Our Products
                </span>
                <h2 class="section-title">Premium <span>Bio-Fertilizers</span></h2>
                <p class="section-description">
                    Discover our range of high-quality organic fertilizers designed 
                    to boost crop performance naturally.
                </p>
            </div>

            <div class="products-filter reveal">
                <button class="filter-btn active" data-filter="all">All Products</button>
                <button class="filter-btn" data-filter="organic">Organic</button>
                <button class="filter-btn" data-filter="npk">NPK</button>
                <button class="filter-btn" data-filter="liquid">Liquid</button>
                <button class="filter-btn" data-filter="soil">Soil Boosters</button>
            </div>

            <div class="products-grid">
                <div class="product-card reveal" data-category="organic">
                    <div class="product-image">
                        <img src="images/bio-fertilizer.jpg" alt="Organic Bio-Fertilizer">
                        <span class="product-badge">Best Seller</span>
                        <div class="product-actions">
                            <a href="products.php" class="product-action-btn"><i class="fas fa-eye"></i></a>
                            <a href="contact.php" class="product-action-btn"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <span class="product-category">Organic Fertilizer</span>
                        <h3 class="product-title">Navyakosh Bio-Gold</h3>
                        <p class="product-description">
                            Premium organic bio-fertilizer with beneficial microorganisms 
                            for enhanced soil health and crop growth.
                        </p>
                        <div class="product-meta">
                            <span class="product-price">Contact for Price</span>
                            <a href="contact.php" class="product-btn">Enquire Now</a>
                        </div>
                    </div>
                </div>

                <div class="product-card reveal" data-category="npk">
                    <div class="product-image">
                        <img src="images/bio-fertilizer.jpg" alt="NPK Bio-Boost">
                        <span class="product-badge">Popular</span>
                        <div class="product-actions">
                            <a href="products.php" class="product-action-btn"><i class="fas fa-eye"></i></a>
                            <a href="contact.php" class="product-action-btn"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <span class="product-category">NPK Fertilizer</span>
                        <h3 class="product-title">Navyakosh NPK Plus</h3>
                        <p class="product-description">
                            Balanced NPK formulation enriched with beneficial bacteria 
                            for complete plant nutrition.
                        </p>
                        <div class="product-meta">
                            <span class="product-price">Contact for Price</span>
                            <a href="contact.php" class="product-btn">Enquire Now</a>
                        </div>
                    </div>
                </div>

                <div class="product-card reveal" data-category="liquid">
                    <div class="product-image">
                        <img src="images/fertilizer2.webp" alt="Liquid Bio-Fertilizer">
                        <span class="product-badge">New</span>
                        <div class="product-actions">
                            <a href="products.php" class="product-action-btn"><i class="fas fa-eye"></i></a>
                            <a href="contact.php" class="product-action-btn"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <span class="product-category">Liquid Fertilizer</span>
                        <h3 class="product-title">Navyakosh Liquid Pro</h3>
                        <p class="product-description">
                            Fast-acting liquid bio-fertilizer for foliar application 
                            with immediate nutrient uptake.
                        </p>
                        <div class="product-meta">
                            <span class="product-price">Contact for Price</span>
                            <a href="contact.php" class="product-btn">Enquire Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div style="text-align: center; margin-top: 50px;" class="reveal">
                <a href="products.php" class="btn btn-primary">
                    <i class="fas fa-th-large"></i>
                    View All Products
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="section testimonials" id="testimonials">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-badge">
                    <i class="fas fa-quote-left"></i>
                    Testimonials
                </span>
                <h2 class="section-title">What <span>Farmers</span> Say</h2>
                <p class="section-description">
                    Hear from farmers who have transformed their fields with Navyakosh bio-fertilizers.
                </p>
            </div>

            <div class="testimonials-slider reveal">
                <div class="testimonial-card">
                    <span class="testimonial-quote">"</span>
                    <div class="testimonial-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-text">
                        "After using Navyakosh Bio-Gold on my rice fields for two seasons, 
                        I've seen a 30% increase in yield. The soil has become softer and 
                        more fertile. I recommend it to all farmers looking for sustainable solutions."
                    </p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar">
                            <img src="images/team.jpg" alt="Farmer Testimonial">
                        </div>
                        <div class="testimonial-info">
                            <h4>John Mwamba</h4>
                            <span>Rice Farmer, Morogoro</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <div class="cta-content reveal">
                <h2>Ready to Transform Your Farm?</h2>
                <p>
                    Join thousands of farmers who have already experienced the Navyakosh difference. 
                    Contact us today for a free consultation.
                </p>
                <a href="contact.php" class="btn btn-primary">
                    <i class="fas fa-phone"></i>
                    Get Free Consultation
                </a>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
