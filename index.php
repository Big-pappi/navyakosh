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
                <h2 class="section-title">How to Use <span>Navyakosh</span></h2>
                <p class="section-description" style="color: rgba(255,255,255,0.8);">
                    Navyakosh offers tailored bio-fertilizer solutions designed specifically 
                    for different crops, ensuring optimal results.
                </p>
            </div>

            <!-- Crop Category Tabs -->
            <div class="crop-tabs reveal">
                <button class="crop-tab active" data-category="grains">Grains</button>
                <button class="crop-tab" data-category="fruits">Fruits</button>
                <button class="crop-tab" data-category="vegetables">Vegetables</button>
                <button class="crop-tab" data-category="nuts">Nuts & Pulses</button>
                <button class="crop-tab" data-category="other">Other Crops</button>
            </div>

            <!-- Crops List by Category -->
            <div class="crops-list-container reveal">
                <!-- Grains -->
                <div class="crop-category-list active" data-category="grains">
                    <div class="crop-list-item" data-crop="paddy">
                        <div class="crop-item-image">
                            <img src="images/rice.jpg" alt="Paddy">
                        </div>
                        <div class="crop-item-info">
                            <h4>Paddy</h4>
                            <p>Navyakosh for Paddy</p>
                        </div>
                        <button class="crop-read-more-btn">Read More</button>
                    </div>
                    <div class="crop-list-item" data-crop="maize">
                        <div class="crop-item-image">
                            <img src="images/maize-crop.jpg" alt="Maize">
                        </div>
                        <div class="crop-item-info">
                            <h4>Maize</h4>
                            <p>Navyakosh for Maize</p>
                        </div>
                        <button class="crop-read-more-btn">Read More</button>
                    </div>
                    <div class="crop-list-item" data-crop="mustard">
                        <div class="crop-item-image">
                            <img src="images/mustard-crop.jpg" alt="Mustard">
                        </div>
                        <div class="crop-item-info">
                            <h4>Mustard</h4>
                            <p>Navyakosh for Mustard</p>
                        </div>
                        <button class="crop-read-more-btn">Read More</button>
                    </div>
                    <div class="crop-list-item" data-crop="bajra">
                        <div class="crop-item-image">
                            <img src="images/bajra-crop.jpg" alt="Bajra (Pearl Millets)">
                        </div>
                        <div class="crop-item-info">
                            <h4>Bajra (Pearl Millets)</h4>
                            <p>Navyakosh for Bajra (Pearl Millets)</p>
                        </div>
                        <button class="crop-read-more-btn">Read More</button>
                    </div>
                    <div class="crop-list-item" data-crop="jowar">
                        <div class="crop-item-image">
                            <img src="images/jowar-crop.jpg" alt="Jowar (Great Millets)">
                        </div>
                        <div class="crop-item-info">
                            <h4>Jowar (Great Millets)</h4>
                            <p>Navyakosh for Jowar (Great Millets)</p>
                        </div>
                        <button class="crop-read-more-btn">Read More</button>
                    </div>
                    <div class="crop-list-item" data-crop="wheat">
                        <div class="crop-item-image">
                            <img src="images/wheat-crop.jpg" alt="Wheat">
                        </div>
                        <div class="crop-item-info">
                            <h4>Wheat</h4>
                            <p>Navyakosh for Wheat</p>
                        </div>
                        <button class="crop-read-more-btn">Read More</button>
                    </div>
                </div>

                <!-- Fruits -->
                <div class="crop-category-list" data-category="fruits">
                    <div class="crop-list-item" data-crop="mango">
                        <div class="crop-item-image">
                            <img src="images/navyakosh-horticulture.png" alt="Mango">
                        </div>
                        <div class="crop-item-info">
                            <h4>Mango</h4>
                            <p>Navyakosh for Mango</p>
                        </div>
                        <button class="crop-read-more-btn">Read More</button>
                    </div>
                    <div class="crop-list-item" data-crop="banana">
                        <div class="crop-item-image">
                            <img src="images/palm.jpg" alt="Banana">
                        </div>
                        <div class="crop-item-info">
                            <h4>Banana</h4>
                            <p>Navyakosh for Banana</p>
                        </div>
                        <button class="crop-read-more-btn">Read More</button>
                    </div>
                    <div class="crop-list-item" data-crop="watermelon">
                        <div class="crop-item-image">
                            <img src="images/Watermelon.jpg" alt="Watermelon">
                        </div>
                        <div class="crop-item-info">
                            <h4>Watermelon</h4>
                            <p>Navyakosh for Watermelon</p>
                        </div>
                        <button class="crop-read-more-btn">Read More</button>
                    </div>
                    <div class="crop-list-item" data-crop="pomegranate">
                        <div class="crop-item-image">
                            <img src="images/Horticulture.jpg" alt="Pomegranate">
                        </div>
                        <div class="crop-item-info">
                            <h4>Pomegranate</h4>
                            <p>Navyakosh for Pomegranate</p>
                        </div>
                        <button class="crop-read-more-btn">Read More</button>
                    </div>
                    <div class="crop-list-item" data-crop="muskmelon">
                        <div class="crop-item-image">
                            <img src="images/Watermelon2.jpg" alt="Muskmelon">
                        </div>
                        <div class="crop-item-info">
                            <h4>Muskmelon</h4>
                            <p>Navyakosh for Muskmelon</p>
                        </div>
                        <button class="crop-read-more-btn">Read More</button>
                    </div>
                    <div class="crop-list-item" data-crop="tomato">
                        <div class="crop-item-image">
                            <img src="images/tomato-crop.jpg" alt="Tomato">
                        </div>
                        <div class="crop-item-info">
                            <h4>Tomato</h4>
                            <p>Navyakosh for Tomato</p>
                        </div>
                        <button class="crop-read-more-btn">Read More</button>
                    </div>
                </div>

                <!-- Vegetables -->
                <div class="crop-category-list" data-category="vegetables">
                    <div class="crop-list-item" data-crop="cucumber">
                        <div class="crop-item-image">
                            <img src="images/cucumber-crop.jpg" alt="Cucumber">
                        </div>
                        <div class="crop-item-info">
                            <h4>Cucumber</h4>
                            <p>Navyakosh for Cucumber</p>
                        </div>
                        <button class="crop-read-more-btn">Read More</button>
                    </div>
                    <div class="crop-list-item" data-crop="carrot">
                        <div class="crop-item-image">
                            <img src="images/legume.jpeg" alt="Carrot">
                        </div>
                        <div class="crop-item-info">
                            <h4>Carrot</h4>
                            <p>Navyakosh for Carrot</p>
                        </div>
                        <button class="crop-read-more-btn">Read More</button>
                    </div>
                    <div class="crop-list-item" data-crop="radish">
                        <div class="crop-item-image">
                            <img src="images/legumes.jpg" alt="Radish">
                        </div>
                        <div class="crop-item-info">
                            <h4>Radish</h4>
                            <p>Navyakosh for Radish</p>
                        </div>
                        <button class="crop-read-more-btn">Read More</button>
                    </div>
                    <div class="crop-list-item" data-crop="cabbage">
                        <div class="crop-item-image">
                            <img src="images/navyakosh-horticulture.png" alt="Cabbage">
                        </div>
                        <div class="crop-item-info">
                            <h4>Cabbage</h4>
                            <p>Navyakosh for Cabbage</p>
                        </div>
                        <button class="crop-read-more-btn">Read More</button>
                    </div>
                    <div class="crop-list-item" data-crop="capsicum">
                        <div class="crop-item-image">
                            <img src="images/capsicum-crop.jpg" alt="Capsicum">
                        </div>
                        <div class="crop-item-info">
                            <h4>Capsicum</h4>
                            <p>Navyakosh for Capsicum</p>
                        </div>
                        <button class="crop-read-more-btn">Read More</button>
                    </div>
                    <div class="crop-list-item" data-crop="brinjal">
                        <div class="crop-item-image">
                            <img src="images/Horticulture2.jpg" alt="Brinjal">
                        </div>
                        <div class="crop-item-info">
                            <h4>Brinjal</h4>
                            <p>Navyakosh for Brinjal</p>
                        </div>
                        <button class="crop-read-more-btn">Read More</button>
                    </div>
                </div>

                <!-- Nuts & Pulses -->
                <div class="crop-category-list" data-category="nuts">
                    <div class="crop-list-item" data-crop="groundnut">
                        <div class="crop-item-image">
                            <img src="images/groundnut-crop.jpg" alt="Ground Nut">
                        </div>
                        <div class="crop-item-info">
                            <h4>Ground Nut</h4>
                            <p>Navyakosh for Ground Nut</p>
                        </div>
                        <button class="crop-read-more-btn">Read More</button>
                    </div>
                    <div class="crop-list-item" data-crop="soybean">
                        <div class="crop-item-image">
                            <img src="images/soybean-crop.jpg" alt="Soya Beans">
                        </div>
                        <div class="crop-item-info">
                            <h4>Soya Beans</h4>
                            <p>Navyakosh for Soya Beans</p>
                        </div>
                        <button class="crop-read-more-btn">Read More</button>
                    </div>
                    <div class="crop-list-item" data-crop="chickpea">
                        <div class="crop-item-image">
                            <img src="images/chickpea-dal.jpg" alt="Chickpea Dal">
                        </div>
                        <div class="crop-item-info">
                            <h4>Chickpea (Channa Dal)</h4>
                            <p>Navyakosh for Gram Pulse</p>
                        </div>
                        <button class="crop-read-more-btn">Read More</button>
                    </div>
                    <div class="crop-list-item" data-crop="turdal">
                        <div class="crop-item-image">
                            <img src="images/tur-dal-crop.jpg" alt="Tur Dal">
                        </div>
                        <div class="crop-item-info">
                            <h4>Tur Dal</h4>
                            <p>Navyakosh for Tur Dal</p>
                        </div>
                        <button class="crop-read-more-btn">Read More</button>
                    </div>
                    <div class="crop-list-item" data-crop="cashewnut">
                        <div class="crop-item-image">
                            <img src="images/cashew-nut.jpg" alt="Cashew Nut">
                        </div>
                        <div class="crop-item-info">
                            <h4>Cashew Nut</h4>
                            <p>Navyakosh for Cashew Nut</p>
                        </div>
                        <button class="crop-read-more-btn">Read More</button>
                    </div>
                    <div class="crop-list-item" data-crop="arecanut">
                        <div class="crop-item-image">
                            <img src="images/areca-nut.jpg" alt="Areca Nut">
                        </div>
                        <div class="crop-item-info">
                            <h4>Areca Nut</h4>
                            <p>Navyakosh for Areca Nut</p>
                        </div>
                        <button class="crop-read-more-btn">Read More</button>
                    </div>
                </div>

                <!-- Other Crops -->
                <div class="crop-category-list" data-category="other">
                    <div class="crop-list-item" data-crop="cotton">
                        <div class="crop-item-image">
                            <img src="images/cotton.jpeg" alt="Cotton">
                        </div>
                        <div class="crop-item-info">
                            <h4>Cotton</h4>
                            <p>Navyakosh for Cotton</p>
                        </div>
                        <button class="crop-read-more-btn">Read More</button>
                    </div>
                    <div class="crop-list-item" data-crop="sugarcane">
                        <div class="crop-item-image">
                            <img src="images/sugarcane.jpg" alt="Sugarcane">
                        </div>
                        <div class="crop-item-info">
                            <h4>Sugarcane</h4>
                            <p>Navyakosh for Sugarcane</p>
                        </div>
                        <button class="crop-read-more-btn">Read More</button>
                    </div>
                    <div class="crop-list-item" data-crop="palm">
                        <div class="crop-item-image">
                            <img src="images/palm.jpg" alt="Palm">
                        </div>
                        <div class="crop-item-info">
                            <h4>Palm</h4>
                            <p>Navyakosh for Palm</p>
                        </div>
                        <button class="crop-read-more-btn">Read More</button>
                    </div>
                    <div class="crop-list-item" data-crop="coffee">
                        <div class="crop-item-image">
                            <img src="images/coffee.jpg" alt="Coffee">
                        </div>
                        <div class="crop-item-info">
                            <h4>Coffee</h4>
                            <p>Navyakosh for Coffee</p>
                        </div>
                        <button class="crop-read-more-btn">Read More</button>
                    </div>
                    <div class="crop-list-item" data-crop="tobacco">
                        <div class="crop-item-image">
                            <img src="images/tobacco.jpg" alt="Tobacco">
                        </div>
                        <div class="crop-item-info">
                            <h4>Tobacco</h4>
                            <p>Navyakosh for Tobacco</p>
                        </div>
                        <button class="crop-read-more-btn">Read More</button>
                    </div>
                    <div class="crop-list-item" data-crop="coconut">
                        <div class="crop-item-image">
                            <img src="images/palm2.jpg" alt="Coconut">
                        </div>
                        <div class="crop-item-info">
                            <h4>Coconut</h4>
                            <p>Navyakosh for Coconut</p>
                        </div>
                        <button class="crop-read-more-btn">Read More</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Crop Usage Guide Modal -->
    <div class="crop-modal" id="crop-modal">
        <div class="crop-modal-content">
            <button class="crop-modal-close">&times;</button>
            <h2 class="crop-modal-title">Usage Guide</h2>
            <h3 class="crop-modal-crop-name"></h3>
            <div class="crop-modal-body"></div>
        </div>
    </div>

    <!-- Products Expertise Carousel Section -->
    <section class="section expertise-products" id="products-preview">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-badge">
                    <i class="fas fa-box"></i>
                    Our Expertise
                </span>
                <h2 class="section-title">Navyakosh <span>Organic Fertilizers</span></h2>
                <p class="section-description">
                    Discover our range of specialized organic fertilizers designed 
                    for gardens, flowers, and sustainable agriculture.
                </p>
            </div>

            <!-- Products Carousel -->
            <div class="products-carousel-wrapper reveal">
                <button class="carousel-nav carousel-prev" aria-label="Previous">
                    <i class="fas fa-chevron-left"></i>
                </button>
                
                <div class="products-carousel">
                    <div class="products-carousel-track">
                        <!-- Soil Activator -->
                        <div class="carousel-product-card" data-product="soil-activator">
                            <div class="carousel-product-image">
                                <img src="images/bio-fertilizer.jpg" alt="Navyakosh Soil Activator">
                                <span class="product-badge">Popular</span>
                            </div>
                            <div class="carousel-product-content">
                                <span class="product-category">Soil Booster</span>
                                <h3 class="product-title">Navyakosh Soil Activator</h3>
                                <p class="product-description">
                                    Rejuvenate your soil with our unique formula that replenishes essential nutrients, improves soil structure, and enhances microbial activity.
                                </p>
                                <a href="product-detail.php?product=soil-activator" class="product-btn">Order Now</a>
                            </div>
                        </div>

                        <!-- Flower Booster -->
                        <div class="carousel-product-card" data-product="flower-booster">
                            <div class="carousel-product-image">
                                <img src="images/fertilizer2.webp" alt="Navyakosh Flower Booster">
                                <span class="product-badge">Best Seller</span>
                            </div>
                            <div class="carousel-product-content">
                                <span class="product-category">Flower Care</span>
                                <h3 class="product-title">Navyakosh Flower Booster</h3>
                                <p class="product-description">
                                    Enhance the beauty of your flowers with our unique mix of nutrients that enriches soil, supports strong root growth, and fosters plentiful blooming.
                                </p>
                                <a href="product-detail.php?product=flower-booster" class="product-btn">Order Now</a>
                            </div>
                        </div>

                        <!-- Cacti and Succulent -->
                        <div class="carousel-product-card" data-product="cacti-succulent">
                            <div class="carousel-product-image">
                                <img src="images/fertilizers.webp" alt="Navyakosh Cacti and Succulent">
                                <span class="product-badge">Specialized</span>
                            </div>
                            <div class="carousel-product-content">
                                <span class="product-category">Plant Care</span>
                                <h3 class="product-title">Navyakosh Cacti & Succulent</h3>
                                <p class="product-description">
                                    Formulated to meet the unique nutritional needs of resilient plants, this specialized blend promotes healthy growth and vibrant foliage.
                                </p>
                                <a href="product-detail.php?product=cacti-succulent" class="product-btn">Order Now</a>
                            </div>
                        </div>

                        <!-- Organic Fertilizer for Garden -->
                        <div class="carousel-product-card" data-product="garden-fertilizer">
                            <div class="carousel-product-image">
                                <img src="images/front.jpeg" alt="Navyakosh Organic Fertilizer for Garden">
                                <span class="product-badge">1kg Pack</span>
                            </div>
                            <div class="carousel-product-content">
                                <span class="product-category">Garden Care</span>
                                <h3 class="product-title">Navyakosh for Garden (1kg)</h3>
                                <p class="product-description">
                                    Boost your garden with crop-specific organic fertilizer designed for home gardeners who want higher yields, healthier soil, and sustainable farming.
                                </p>
                                <a href="product-detail.php?product=garden-fertilizer" class="product-btn">Order Now</a>
                            </div>
                        </div>

                        <!-- Microbial Consortium -->
                        <div class="carousel-product-card" data-product="microbial-consortium">
                            <div class="carousel-product-image">
                                <img src="images/soil-health.jpg" alt="Navyakosh Microbial Consortium">
                                <span class="product-badge">Advanced</span>
                            </div>
                            <div class="carousel-product-content">
                                <span class="product-category">Professional</span>
                                <h3 class="product-title">Navyakosh Microbial Consortium</h3>
                                <p class="product-description">
                                    High-efficiency microbial inoculum with 18-22 beneficial microorganisms. Converts up to 2 metric tons of organic biomass into nutrient-rich biofertilizer.
                                </p>
                                <a href="product-detail.php?product=microbial-consortium" class="product-btn">Order Now</a>
                            </div>
                        </div>

                        <!-- 50kg Pack -->
                        <div class="carousel-product-card" data-product="50kg-pack">
                            <div class="carousel-product-image">
                                <img src="images/navyakosh-maize.jpeg" alt="Navyakosh Organic Fertilizer 50Kg Pack">
                                <span class="product-badge">Bulk</span>
                            </div>
                            <div class="carousel-product-content">
                                <span class="product-category">Farm Grade</span>
                                <h3 class="product-title">Navyakosh 50Kg Pack</h3>
                                <p class="product-description">
                                    Boost your farm productivity with our crop-specific organic fertilizer. Designed for farmers who want higher yields and sustainable farming.
                                </p>
                                <a href="product-detail.php?product=50kg-pack" class="product-btn">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="carousel-nav carousel-next" aria-label="Next">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>

            <!-- Carousel Dots -->
            <div class="carousel-dots">
                <button class="carousel-dot active" data-index="0"></button>
                <button class="carousel-dot" data-index="1"></button>
                <button class="carousel-dot" data-index="2"></button>
                <button class="carousel-dot" data-index="3"></button>
                <button class="carousel-dot" data-index="4"></button>
                <button class="carousel-dot" data-index="5"></button>
            </div>

            <div style="text-align: center; margin-top: 40px;" class="reveal">
                <a href="products.php" class="btn btn-primary">
                    <i class="fas fa-th-large"></i>
                    View All Products
                </a>
            </div>
        </div>
    </section>

    <!-- Keep old products section hidden for backward compatibility -->
    <section class="section products" id="products-hidden" style="display: none;">
        <div class="container">
            <div class="products-grid">
                <div class="product-card reveal" data-category="organic">
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
