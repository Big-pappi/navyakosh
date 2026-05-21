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
                    <a href="#fertilizers" class="btn btn-white">Discover More</a>
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
                    <a href="#about" class="btn btn-white">Read More</a>
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
                    <a href="#fertilizers" class="btn btn-white">Explore Products</a>
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

    <!-- Fertilizers Products Section -->
    <section class="section fertilizers-section" id="fertilizers">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-badge">
                    <i class="fas fa-leaf"></i>
                    Our Fertilizers
                </span>
                <h2 class="section-title">Premium <span>Organic Fertilizers</span></h2>
                <p class="section-description">
                    Discover our range of eco-friendly fertilizers for healthier crops and sustainable farming.
                </p>
            </div>

            <!-- Products Grid -->
            <div class="products-grid reveal">
                <!-- Product 1 -->
                <div class="product-card" data-product="Navyakosh Organic Fertilizers for Garden">
                    <div class="product-image">
                        <img src="images/front.jpeg" alt="Navyakosh Organic Fertilizers for Garden">
                        <div class="product-overlay">
                            <button class="order-btn" data-product="Navyakosh Organic Fertilizers for Garden">
                                <i class="fas fa-shopping-bag"></i> Order Now
                            </button>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3>Organic Fertilizers for Garden</h3>
                        <span class="product-tag">1kg Pack</span>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="product-card" data-product="Navyakosh Microbial Consortium">
                    <div class="product-image">
                        <img src="images/microbial.jpeg" alt="Navyakosh Microbial Consortium">
                        <div class="product-overlay">
                            <button class="order-btn" data-product="Navyakosh Microbial Consortium">
                                <i class="fas fa-shopping-bag"></i> Order Now
                            </button>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3>Microbial Consortium</h3>
                        <span class="product-tag">1kg Pack</span>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="product-card" data-product="Navyakosh the Best Organic Fertilizer">
                    <div class="product-image">
                        <img src="images/legume.jpeg" alt="Navyakosh the Best Organic Fertilizer">
                        <div class="product-overlay">
                            <button class="order-btn" data-product="Navyakosh the Best Organic Fertilizer">
                                <i class="fas fa-shopping-bag"></i> Order Now
                            </button>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3>Best Organic Fertilizer</h3>
                        <span class="product-tag">Premium Quality</span>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="product-card" data-product="Navyakosh Organic Fertilizer 50Kg Pack">
                    <div class="product-image">
                        <img src="images/maize.jpeg" alt="Navyakosh Organic Fertilizer 50Kg Pack">
                        <div class="product-overlay">
                            <button class="order-btn" data-product="Navyakosh Organic Fertilizer 50Kg Pack">
                                <i class="fas fa-shopping-bag"></i> Order Now
                            </button>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3>Organic Fertilizer 50Kg</h3>
                        <span class="product-tag">Bulk Pack</span>
                    </div>
                </div>

                <!-- Product 5 -->
                 <!--
                <div class="product-card" data-product="Navyakosh For Flower Booster">
                    <div class="product-image">
                        <img src="images/flower.jpeg" alt="Navyakosh For Flower Booster">
                        <div class="product-overlay">
                            <button class="order-btn" data-product="Navyakosh For Flower Booster">
                                <i class="fas fa-shopping-bag"></i> Order Now
                            </button>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3>Flower Booster</h3>
                        <span class="product-tag">For Flowering Plants</span>
                    </div>
                </div>
               -->

                <!-- Product 6 -->
                 <!--
                <div class="product-card" data-product="Navyakosh For Cacti and Succulents">
                    <div class="product-image">
                        <img src="images/succulent.jpeg" alt="Navyakosh For Cacti and Succulents">
                        <div class="product-overlay">
                            <button class="order-btn" data-product="Navyakosh For Cacti and Succulents">
                                <i class="fas fa-shopping-bag"></i> Order Now
                            </button>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3>Cacti and Succulents</h3>
                        <span class="product-tag">Specialized Formula</span>
                    </div>
                </div>
               -->

                <!-- Product 7 -->
                 <!--
                <div class="product-card" data-product="Navyakosh Soil Activator and Gardening">
                    <div class="product-image">
                        <img src="images/soil-stimulator.jpeg" alt="Navyakosh Soil Activator and Gardening">
                        <div class="product-overlay">
                            <button class="order-btn" data-product="Navyakosh Soil Activator and Gardening">
                                <i class="fas fa-shopping-bag"></i> Order Now
                            </button>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3>Soil Activator</h3>
                        <span class="product-tag">For Soil Health</span>
                    </div>
                </div>
            -->
            </div>
        </div>
    </section>

    <!-- Order Modal -->
    <div class="order-modal" id="orderModal">
        <div class="order-modal-content">
            <button class="order-modal-close" id="closeOrderModal">&times;</button>
            <div class="order-modal-header">
                <div class="order-modal-icon">
                    <i class="fas fa-shopping-bag"></i>
                </div>
                <h2>Place Your Order</h2>
                <p id="orderProductName" class="order-product-name"></p>
            </div>
            <form class="order-form" id="orderForm" action="process-order.php" method="POST">
                <input type="hidden" name="product" id="orderProductInput">
                <div class="form-group">
                    <label for="customerName"><i class="fas fa-user"></i> Full Name</label>
                    <input type="text" id="customerName" name="name" placeholder="Enter your full name" required>
                </div>
                <div class="form-group">
                    <label for="customerEmail"><i class="fas fa-envelope"></i> Email Address</label>
                    <input type="email" id="customerEmail" name="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="customerPhone"><i class="fas fa-phone"></i> Phone Number</label>
                    <input type="tel" id="customerPhone" name="phone" placeholder="Enter your phone number" required>
                </div>
                <div class="form-group">
                    <label for="orderQuantity"><i class="fas fa-boxes"></i> Quantity</label>
                    <input type="number" id="orderQuantity" name="quantity" min="1" value="1" required>
                </div>
                <div class="form-group">
                    <label for="orderMessage"><i class="fas fa-comment"></i> Additional Notes (Optional)</label>
                    <textarea id="orderMessage" name="message" placeholder="Any special requests or delivery instructions"></textarea>
                </div>
                <button type="submit" class="order-submit-btn">
                    <i class="fas fa-paper-plane"></i> Submit Order
                </button>
            </form>
        </div>
    </div>

    <!-- About Section - Mission & Vision -->
    <section class="section about-mission-vision" id="about">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-badge">
                    <i class="fas fa-bullseye"></i>
                    About Us
                </span>
                <h2 class="section-title">Our Mission & <span>Vision</span></h2>
                <p class="section-description">
                    Navyakosh is committed to sustainable agriculture through innovative 
                    bio-fertilizer solutions that enhance crop productivity.
                </p>
            </div>

            <div class="mission-vision-grid reveal">
                <div class="mission-card">
                    <div class="mission-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3>Our Mission</h3>
                    <p>
                        To empower farmers with innovative, eco-friendly bio-fertilizer solutions that 
                        enhance crop productivity, restore soil health, and ensure food security for 
                        future generations. We are committed to making sustainable agriculture accessible 
                        and profitable for every farmer.
                    </p>
                </div>

                <div class="vision-card">
                    <div class="vision-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Our Vision</h3>
                    <p>
                        To become the leading provider in bio-fertilizer technology, transforming agricultural 
                        practices across East Africa through research, innovation, and farmer-centric solutions. 
                        We envision a world where every farm thrives in harmony with nature.
                    </p>
                </div>
            </div>
        </div>
    </section>

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
                            <img src="images/mango.jpg" alt="Mango">
                        </div>
                        <div class="crop-item-info">
                            <h4>Mango</h4>
                            <p>Navyakosh for Mango</p>
                        </div>
                        <button class="crop-read-more-btn">Read More</button>
                    </div>
                    <div class="crop-list-item" data-crop="banana">
                        <div class="crop-item-image">
                            <img src="images/banana.png" alt="Banana">
                        </div>
                        <div class="crop-item-info">
                            <h4>Banana</h4>
                            <p>Navyakosh for Banana</p>
                        </div>
                        <button class="crop-read-more-btn">Read More</button>
                    </div>
                    <div class="crop-list-item" data-crop="watermelon">
                        <div class="crop-item-image">
                            <img src="images/watermelon.jpg" alt="Watermelon">
                        </div>
                        <div class="crop-item-info">
                            <h4>Watermelon</h4>
                            <p>Navyakosh for Watermelon</p>
                        </div>
                        <button class="crop-read-more-btn">Read More</button>
                    </div>
                    <div class="crop-list-item" data-crop="pomegranate">
                        <div class="crop-item-image">
                            <img src="images/pomegranate.jpg" alt="Pomegranate">
                        </div>
                        <div class="crop-item-info">
                            <h4>Pomegranate</h4>
                            <p>Navyakosh for Pomegranate</p>
                        </div>
                        <button class="crop-read-more-btn">Read More</button>
                    </div>
                    <div class="crop-list-item" data-crop="muskmelon">
                        <div class="crop-item-image">
                            <img src="images/muskmelon.jpg" alt="Muskmelon">
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
                            <img src="images/carrot.jpg" alt="Carrot">
                        </div>
                        <div class="crop-item-info">
                            <h4>Carrot</h4>
                            <p>Navyakosh for Carrot</p>
                        </div>
                        <button class="crop-read-more-btn">Read More</button>
                    </div>
                    <div class="crop-list-item" data-crop="radish">
                        <div class="crop-item-image">
                            <img src="images/radish.jpg" alt="Radish">
                        </div>
                        <div class="crop-item-info">
                            <h4>Radish</h4>
                            <p>Navyakosh for Radish</p>
                        </div>
                        <button class="crop-read-more-btn">Read More</button>
                    </div>
                    <div class="crop-list-item" data-crop="cabbage">
                        <div class="crop-item-image">
                            <img src="images/cabbage.jpg" alt="Cabbage">
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
                            <img src="images/Brinjal.jpg" alt="Brinjal">
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
                            <img src="images/cotton.jpg" alt="Cotton">
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
                            <img src="images/coconut.jpg" alt="Coconut">
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

    <!-- Testimonials Section -->
    <!-- 
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
-->
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
