<?php
/**
 * Navyakosh Products Page
 */
$page_title = 'Products | Navyakosh Bio-Fertilizers';
$page_description = 'Explore Navyakosh\'s complete range of bio-fertilizers - Organic Fertilizers, NPK, Liquid Fertilizers, and Soil Boosters for all crops.';

include 'includes/header.php';
?>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1>Our Products</h1>
            <div class="breadcrumb">
                <a href="index.php">Home</a>
                <span>/</span>
                <span>Products</span>
            </div>
        </div>
    </section>

    <!-- Products Categories Overview -->
    <section class="section" style="background: var(--white);">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-badge">
                    <i class="fas fa-boxes"></i>
                    Product Categories
                </span>
                <h2 class="section-title">Complete Range of <span>Bio-Fertilizers</span></h2>
                <p class="section-description">
                    Explore our comprehensive range of scientifically formulated bio-fertilizers 
                    designed to meet the diverse needs of modern agriculture.
                </p>
            </div>

            <div class="products-filter reveal">
                <button class="filter-btn active" data-filter="all">All Products</button>
                <button class="filter-btn" data-filter="organic">Organic Fertilizers</button>
                <button class="filter-btn" data-filter="npk">NPK Fertilizers</button>
                <button class="filter-btn" data-filter="liquid">Liquid Fertilizers</button>
                <button class="filter-btn" data-filter="soil">Soil Boosters</button>
            </div>
        </div>
    </section>

    <!-- Products Grid -->
    <section class="section products" style="padding-top: 20px;">
        <div class="container">
            <div class="products-grid">
                
                <!-- Organic Fertilizers -->
                <div class="product-card reveal" data-category="organic">
                    <div class="product-image">
                        <img src="images/front.jpeg" alt="Navyakosh Bio-Gold">
                        <span class="product-badge">Best Seller</span>
                        <div class="product-actions">
                            <button class="product-action-btn product-view-btn" aria-label="Quick View"><i class="fas fa-eye"></i></button>
                            <a href="contact.php" class="product-action-btn" aria-label="Enquire"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <span class="product-category">Organic Fertilizer</span>
                        <h3 class="product-title">Navyakosh Bio-Gold</h3>
                        <p class="product-description">
                            Premium organic bio-fertilizer enriched with beneficial microorganisms 
                            for enhanced soil health and superior crop growth.
                        </p>
                        <div class="product-benefits" style="margin-bottom: 15px;">
                            <strong style="color: var(--dark);">Key Benefits:</strong>
                            <ul style="margin-top: 8px; color: var(--gray); font-size: 0.9rem;">
                                <li style="margin-bottom: 5px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 8px;"></i>Improves soil structure</li>
                                <li style="margin-bottom: 5px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 8px;"></i>Enhances nutrient uptake</li>
                                <li style="margin-bottom: 5px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 8px;"></i>Promotes root development</li>
                            </ul>
                        </div>
                        <div class="product-usage" style="background: var(--light); padding: 12px; border-radius: 10px; margin-bottom: 15px;">
                            <strong style="font-size: 0.85rem; color: var(--dark);">Usage:</strong>
                            <span style="font-size: 0.85rem; color: var(--gray);"> 25-50 kg/acre based on soil type</span>
                        </div>
                        <div class="product-meta">
                            <span class="product-price">Contact for Price</span>
                            <a href="contact.php" class="product-btn">Enquire Now</a>
                        </div>
                    </div>
                </div>

                <div class="product-card reveal" data-category="organic">
                    <div class="product-image">
                        <img src="images/legume.jpeg" alt="Navyakosh Legume Special">
                        <span class="product-badge">For Legumes</span>
                        <div class="product-actions">
                            <a href="crop-detail.php?crop=legumes" class="product-action-btn" aria-label="Quick View"><i class="fas fa-eye"></i></a>
                            <a href="#" class="product-action-btn" aria-label="Add to Wishlist"><i class="fas fa-heart"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <span class="product-category">Organic Fertilizer</span>
                        <h3 class="product-title">Navyakosh Legume Special</h3>
                        <p class="product-description">
                            Specially formulated for legumes with Rhizobium bacteria for enhanced 
                            nitrogen fixation and improved pod development.
                        </p>
                        <div style="margin-bottom: 15px;">
                            <strong style="color: var(--dark);">Key Benefits:</strong>
                            <ul style="margin-top: 8px; color: var(--gray); font-size: 0.9rem;">
                                <li style="margin-bottom: 5px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 8px;"></i>Enhanced nitrogen fixation</li>
                                <li style="margin-bottom: 5px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 8px;"></i>Better pod formation</li>
                                <li style="margin-bottom: 5px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 8px;"></i>Increased protein content</li>
                            </ul>
                        </div>
                        <div style="background: var(--light); padding: 12px; border-radius: 10px; margin-bottom: 15px;">
                            <strong style="font-size: 0.85rem; color: var(--dark);">Usage:</strong>
                            <span style="font-size: 0.85rem; color: var(--gray);"> 20-30 kg/acre at sowing</span>
                        </div>
                        <div class="product-meta">
                            <span class="product-price">Contact for Price</span>
                            <a href="contact.php" class="product-btn">Enquire Now</a>
                        </div>
                    </div>
                </div>

                <div class="product-card reveal" data-category="organic">
                    <div class="product-image">
                        <img src="images/tobacco.jpg" alt="Navyakosh Tobacco Premium">
                        <span class="product-badge">For Tobacco</span>
                        <div class="product-actions">
                            <a href="crop-detail.php?crop=tobacco" class="product-action-btn" aria-label="Quick View"><i class="fas fa-eye"></i></a>
                            <a href="#" class="product-action-btn" aria-label="Add to Wishlist"><i class="fas fa-heart"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <span class="product-category">Organic Fertilizer</span>
                        <h3 class="product-title">Navyakosh Tobacco Premium</h3>
                        <p class="product-description">
                            Quality-focused nutrition for uniform leaf development, texture 
                            consistency, and superior tobacco quality.
                        </p>
                        <div style="margin-bottom: 15px;">
                            <strong style="color: var(--dark);">Key Benefits:</strong>
                            <ul style="margin-top: 8px; color: var(--gray); font-size: 0.9rem;">
                                <li style="margin-bottom: 5px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 8px;"></i>Uniform leaf development</li>
                                <li style="margin-bottom: 5px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 8px;"></i>Better texture quality</li>
                                <li style="margin-bottom: 5px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 8px;"></i>Soil health restoration</li>
                            </ul>
                        </div>
                        <div style="background: var(--light); padding: 12px; border-radius: 10px; margin-bottom: 15px;">
                            <strong style="font-size: 0.85rem; color: var(--dark);">Usage:</strong>
                            <span style="font-size: 0.85rem; color: var(--gray);"> 30-40 kg/acre, split application</span>
                        </div>
                        <div class="product-meta">
                            <span class="product-price">Contact for Price</span>
                            <a href="contact.php" class="product-btn">Enquire Now</a>
                        </div>
                    </div>
                </div>

                <!-- NPK Fertilizers -->
                <div class="product-card reveal" data-category="npk">
                    <div class="product-image">
                        <img src="images/maize.jpeg" alt="Navyakosh NPK Plus">
                        <span class="product-badge">Popular</span>
                        <div class="product-actions">
                            <a href="crop-detail.php?crop=maize" class="product-action-btn" aria-label="Quick View"><i class="fas fa-eye"></i></a>
                            <a href="#" class="product-action-btn" aria-label="Add to Wishlist"><i class="fas fa-heart"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <span class="product-category">NPK Fertilizer</span>
                        <h3 class="product-title">Navyakosh NPK Plus</h3>
                        <p class="product-description">
                            Balanced NPK formulation (10:26:26) enriched with beneficial bacteria 
                            for complete plant nutrition and enhanced yield.
                        </p>
                        <div style="margin-bottom: 15px;">
                            <strong style="color: var(--dark);">Key Benefits:</strong>
                            <ul style="margin-top: 8px; color: var(--gray); font-size: 0.9rem;">
                                <li style="margin-bottom: 5px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 8px;"></i>Complete nutrition profile</li>
                                <li style="margin-bottom: 5px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 8px;"></i>Enhanced grain filling</li>
                                <li style="margin-bottom: 5px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 8px;"></i>Stronger plant structure</li>
                            </ul>
                        </div>
                        <div style="background: var(--light); padding: 12px; border-radius: 10px; margin-bottom: 15px;">
                            <strong style="font-size: 0.85rem; color: var(--dark);">Usage:</strong>
                            <span style="font-size: 0.85rem; color: var(--gray);"> 50-75 kg/acre based on crop</span>
                        </div>
                        <div class="product-meta">
                            <span class="product-price">Contact for Price</span>
                            <a href="contact.php" class="product-btn">Enquire Now</a>
                        </div>
                    </div>
                </div>

                <div class="product-card reveal" data-category="npk">
                    <div class="product-image">
                        <img src="images/cotton.jpeg" alt="Navyakosh Rice NPK">
                        <span class="product-badge">For Rice</span>
                        <div class="product-actions">
                            <a href="crop-detail.php?crop=rice" class="product-action-btn" aria-label="Quick View"><i class="fas fa-eye"></i></a>
                            <a href="#" class="product-action-btn" aria-label="Add to Wishlist"><i class="fas fa-heart"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <span class="product-category">NPK Fertilizer</span>
                        <h3 class="product-title">Navyakosh Rice NPK</h3>
                        <p class="product-description">
                            Specially designed NPK ratio for rice cultivation with enhanced 
                            tillering and superior grain quality.
                        </p>
                        <div style="margin-bottom: 15px;">
                            <strong style="color: var(--dark);">Key Benefits:</strong>
                            <ul style="margin-top: 8px; color: var(--gray); font-size: 0.9rem;">
                                <li style="margin-bottom: 5px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 8px;"></i>Improved tillering</li>
                                <li style="margin-bottom: 5px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 8px;"></i>Better grain quality</li>
                                <li style="margin-bottom: 5px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 8px;"></i>Disease resistance</li>
                            </ul>
                        </div>
                        <div style="background: var(--light); padding: 12px; border-radius: 10px; margin-bottom: 15px;">
                            <strong style="font-size: 0.85rem; color: var(--dark);">Usage:</strong>
                            <span style="font-size: 0.85rem; color: var(--gray);"> 60-80 kg/acre in 2-3 splits</span>
                        </div>
                        <div class="product-meta">
                            <span class="product-price">Contact for Price</span>
                            <a href="contact.php" class="product-btn">Enquire Now</a>
                        </div>
                    </div>
                </div>

                <!-- Liquid Fertilizers -->
                <div class="product-card reveal" data-category="liquid">
                    <div class="product-image">
                        <img src="images/crops-collage.jpg" alt="Navyakosh Liquid Pro">
                        <span class="product-badge">New</span>
                        <div class="product-actions">
                            <a href="#" class="product-action-btn" aria-label="Quick View"><i class="fas fa-eye"></i></a>
                            <a href="#" class="product-action-btn" aria-label="Add to Wishlist"><i class="fas fa-heart"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <span class="product-category">Liquid Fertilizer</span>
                        <h3 class="product-title">Navyakosh Liquid Pro</h3>
                        <p class="product-description">
                            Fast-acting liquid bio-fertilizer for foliar application with
                            immediate nutrient uptake and rapid results.
                        </p>
                        <div style="margin-bottom: 15px;">
                            <strong style="color: var(--dark);">Key Benefits:</strong>
                            <ul style="margin-top: 8px; color: var(--gray); font-size: 0.9rem;">
                                <li style="margin-bottom: 5px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 8px;"></i>Instant absorption</li>
                                <li style="margin-bottom: 5px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 8px;"></i>Foliar application</li>
                                <li style="margin-bottom: 5px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 8px;"></i>Stress recovery</li>
                            </ul>
                        </div>
                        <div style="background: var(--light); padding: 12px; border-radius: 10px; margin-bottom: 15px;">
                            <strong style="font-size: 0.85rem; color: var(--dark);">Usage:</strong>
                            <span style="font-size: 0.85rem; color: var(--gray);"> 2-3 ml/liter water, spray on leaves</span>
                        </div>
                        <div class="product-meta">
                            <span class="product-price">Contact for Price</span>
                            <a href="contact.php" class="product-btn">Enquire Now</a>
                        </div>
                    </div>
                </div>

                <div class="product-card reveal" data-category="liquid">
                    <div class="product-image">
                        <img src="images/maize.jpeg" alt="Navyakosh Cane Boost">
                        <span class="product-badge">For Sugarcane</span>
                        <div class="product-actions">
                            <a href="crop-detail.php?crop=sugarcane" class="product-action-btn" aria-label="Quick View"><i class="fas fa-eye"></i></a>
                            <a href="#" class="product-action-btn" aria-label="Add to Wishlist"><i class="fas fa-heart"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <span class="product-category">Liquid Fertilizer</span>
                        <h3 class="product-title">Navyakosh Cane Boost</h3>
                        <p class="product-description">
                            Liquid formulation for sugarcane with enhanced sucrose content 
                            promoters and robust cane growth stimulants.
                        </p>
                        <div style="margin-bottom: 15px;">
                            <strong style="color: var(--dark);">Key Benefits:</strong>
                            <ul style="margin-top: 8px; color: var(--gray); font-size: 0.9rem;">
                                <li style="margin-bottom: 5px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 8px;"></i>Higher sucrose content</li>
                                <li style="margin-bottom: 5px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 8px;"></i>Thicker cane development</li>
                                <li style="margin-bottom: 5px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 8px;"></i>Extended ratooning</li>
                            </ul>
                        </div>
                        <div style="background: var(--light); padding: 12px; border-radius: 10px; margin-bottom: 15px;">
                            <strong style="font-size: 0.85rem; color: var(--dark);">Usage:</strong>
                            <span style="font-size: 0.85rem; color: var(--gray);"> 500 ml/acre through drip or spray</span>
                        </div>
                        <div class="product-meta">
                            <span class="product-price">Contact for Price</span>
                            <a href="contact.php" class="product-btn">Enquire Now</a>
                        </div>
                    </div>
                </div>

                <!-- Soil Boosters -->
                <div class="product-card reveal" data-category="soil">
                    <div class="product-image">
                        <img src="images/front.jpeg" alt="Navyakosh Soil Revive">
                        <span class="product-badge">Premium</span>
                        <div class="product-actions">
                            <a href="#" class="product-action-btn" aria-label="Quick View"><i class="fas fa-eye"></i></a>
                            <a href="#" class="product-action-btn" aria-label="Add to Wishlist"><i class="fas fa-heart"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <span class="product-category">Soil Booster</span>
                        <h3 class="product-title">Navyakosh Soil Revive</h3>
                        <p class="product-description">
                            Advanced soil conditioning formula that restores microbial balance, 
                            improves soil structure, and enhances water retention.
                        </p>
                        <div style="margin-bottom: 15px;">
                            <strong style="color: var(--dark);">Key Benefits:</strong>
                            <ul style="margin-top: 8px; color: var(--gray); font-size: 0.9rem;">
                                <li style="margin-bottom: 5px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 8px;"></i>Restores soil microbiome</li>
                                <li style="margin-bottom: 5px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 8px;"></i>Improves water retention</li>
                                <li style="margin-bottom: 5px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 8px;"></i>Enhances organic matter</li>
                            </ul>
                        </div>
                        <div style="background: var(--light); padding: 12px; border-radius: 10px; margin-bottom: 15px;">
                            <strong style="font-size: 0.85rem; color: var(--dark);">Usage:</strong>
                            <span style="font-size: 0.85rem; color: var(--gray);"> 100 kg/acre before sowing</span>
                        </div>
                        <div class="product-meta">
                            <span class="product-price">Contact for Price</span>
                            <a href="contact.php" class="product-btn">Enquire Now</a>
                        </div>
                    </div>
                </div>

                <div class="product-card reveal" data-category="soil">
                    <div class="product-image">
                        <img src="images/palm.jpg" alt="Navyakosh Humic Gold">
                        <span class="product-badge">For Palm</span>
                        <div class="product-actions">
                            <a href="crop-detail.php?crop=palm" class="product-action-btn" aria-label="Quick View"><i class="fas fa-eye"></i></a>
                            <a href="#" class="product-action-btn" aria-label="Add to Wishlist"><i class="fas fa-heart"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <span class="product-category">Soil Booster</span>
                        <h3 class="product-title">Navyakosh Humic Gold</h3>
                        <p class="product-description">
                            Humic acid-based soil conditioner that enhances nutrient availability 
                            and promotes healthy palm growth.
                        </p>
                        <div style="margin-bottom: 15px;">
                            <strong style="color: var(--dark);">Key Benefits:</strong>
                            <ul style="margin-top: 8px; color: var(--gray); font-size: 0.9rem;">
                                <li style="margin-bottom: 5px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 8px;"></i>Better nutrient chelation</li>
                                <li style="margin-bottom: 5px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 8px;"></i>Root zone activation</li>
                                <li style="margin-bottom: 5px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 8px;"></i>Increased oil content</li>
                            </ul>
                        </div>
                        <div style="background: var(--light); padding: 12px; border-radius: 10px; margin-bottom: 15px;">
                            <strong style="font-size: 0.85rem; color: var(--dark);">Usage:</strong>
                            <span style="font-size: 0.85rem; color: var(--gray);"> 5-10 kg/palm tree annually</span>
                        </div>
                        <div class="product-meta">
                            <span class="product-price">Contact for Price</span>
                            <a href="contact.php" class="product-btn">Enquire Now</a>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Additional Products Section -->
            <div style="text-align: center; margin-top: 60px; margin-bottom: 40px;" class="reveal">
                <h3 style="font-family: var(--font-secondary); font-size: 2rem; color: var(--dark); margin-bottom: 15px;">More Specialized Solutions</h3>
                <p style="color: var(--gray);">Explore our expanded product range for specialty crops</p>
            </div>

            <div class="products-grid">
                <!-- Watermelon Product -->
                <div class="product-card reveal" data-category="organic">
                    <div class="product-image">
                        <img src="images/Watermelon.jpg" alt="Navyakosh Watermelon Special">
                        <span class="product-badge">New</span>
                        <div class="product-actions">
                            <button class="product-action-btn product-view-btn" aria-label="Quick View"><i class="fas fa-eye"></i></button>
                            <a href="contact.php" class="product-action-btn" aria-label="Enquire"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <span class="product-category">Specialty Fertilizer</span>
                        <h3 class="product-title">Navyakosh Watermelon Special</h3>
                        <p class="product-description">
                            Specially formulated for watermelon cultivation with enhanced fruit development 
                            and superior sweetness characteristics.
                        </p>
                        <div class="product-benefits" style="margin-bottom: 15px;">
                            <strong style="color: var(--dark);">Key Benefits:</strong>
                            <ul style="margin-top: 8px; color: var(--gray); font-size: 0.9rem;">
                                <li style="margin-bottom: 5px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 8px;"></i>Enhanced sweetness</li>
                                <li style="margin-bottom: 5px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 8px;"></i>Uniform fruit size</li>
                                <li style="margin-bottom: 5px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 8px;"></i>Better shelf life</li>
                            </ul>
                        </div>
                        <div class="product-usage" style="background: var(--light); padding: 12px; border-radius: 10px; margin-bottom: 15px;">
                            <strong style="font-size: 0.85rem; color: var(--dark);">Usage:</strong>
                            <span style="font-size: 0.85rem; color: var(--gray);"> 30-40 kg/acre in splits</span>
                        </div>
                        <div class="product-meta">
                            <span class="product-price">Contact for Price</span>
                            <a href="contact.php" class="product-btn">Enquire Now</a>
                        </div>
                    </div>
                </div>

                <!-- Coffee Product -->
                <div class="product-card reveal" data-category="organic">
                    <div class="product-image">
                        <img src="images/coffee.jpg" alt="Navyakosh Coffee Premium">
                        <span class="product-badge">Specialty</span>
                        <div class="product-actions">
                            <button class="product-action-btn product-view-btn" aria-label="Quick View"><i class="fas fa-eye"></i></button>
                            <a href="contact.php" class="product-action-btn" aria-label="Enquire"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <span class="product-category">Specialty Fertilizer</span>
                        <h3 class="product-title">Navyakosh Coffee Premium</h3>
                        <p class="product-description">
                            Premium bio-fertilizer designed specifically for coffee plantations with 
                            enhanced bean quality and yield optimization.
                        </p>
                        <div class="product-benefits" style="margin-bottom: 15px;">
                            <strong style="color: var(--dark);">Key Benefits:</strong>
                            <ul style="margin-top: 8px; color: var(--gray); font-size: 0.9rem;">
                                <li style="margin-bottom: 5px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 8px;"></i>Superior bean quality</li>
                                <li style="margin-bottom: 5px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 8px;"></i>Increased yield per tree</li>
                                <li style="margin-bottom: 5px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 8px;"></i>Disease resistance</li>
                            </ul>
                        </div>
                        <div class="product-usage" style="background: var(--light); padding: 12px; border-radius: 10px; margin-bottom: 15px;">
                            <strong style="font-size: 0.85rem; color: var(--dark);">Usage:</strong>
                            <span style="font-size: 0.85rem; color: var(--gray);"> 3-5 kg/tree annually</span>
                        </div>
                        <div class="product-meta">
                            <span class="product-price">Contact for Price</span>
                            <a href="contact.php" class="product-btn">Enquire Now</a>
                        </div>
                    </div>
                </div>

                <!-- Horticulture Product -->
                <div class="product-card reveal" data-category="organic">
                    <div class="product-image">
                        <img src="images/legume.jpeg" alt="Navyakosh Horticulture Plus">
                        <span class="product-badge">Versatile</span>
                        <div class="product-actions">
                            <button class="product-action-btn product-view-btn" aria-label="Quick View"><i class="fas fa-eye"></i></button>
                            <a href="contact.php" class="product-action-btn" aria-label="Enquire"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <span class="product-category">Specialty Fertilizer</span>
                        <h3 class="product-title">Navyakosh Horticulture Plus</h3>
                        <p class="product-description">
                            All-in-one solution for vegetables, fruits, and ornamental plants with 
                            complete nutrition for healthy growth.
                        </p>
                        <div class="product-benefits" style="margin-bottom: 15px;">
                            <strong style="color: var(--dark);">Key Benefits:</strong>
                            <ul style="margin-top: 8px; color: var(--gray); font-size: 0.9rem;">
                                <li style="margin-bottom: 5px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 8px;"></i>Complete nutrition</li>
                                <li style="margin-bottom: 5px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 8px;"></i>Vibrant colors & flavors</li>
                                <li style="margin-bottom: 5px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 8px;"></i>Extended freshness</li>
                            </ul>
                        </div>
                        <div class="product-usage" style="background: var(--light); padding: 12px; border-radius: 10px; margin-bottom: 15px;">
                            <strong style="font-size: 0.85rem; color: var(--dark);">Usage:</strong>
                            <span style="font-size: 0.85rem; color: var(--gray);"> 20-35 kg/acre based on crop</span>
                        </div>
                        <div class="product-meta">
                            <span class="product-price">Contact for Price</span>
                            <a href="contact.php" class="product-btn">Enquire Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Our Products Section -->
    <section class="section" style="background: var(--white);">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-badge">
                    <i class="fas fa-star"></i>
                    Quality Assurance
                </span>
                <h2 class="section-title">Why Choose Our <span>Products</span></h2>
            </div>

            <div class="features-grid">
                <div class="feature-card reveal">
                    <div class="feature-icon">
                        <i class="fas fa-flask"></i>
                    </div>
                    <h3 class="feature-title">Research-Backed</h3>
                    <p class="feature-text">
                        Every product undergoes extensive research and field trials before launch.
                    </p>
                </div>

                <div class="feature-card reveal">
                    <div class="feature-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3 class="feature-title">ISO Certified</h3>
                    <p class="feature-text">
                        Manufactured in ISO-certified facilities with strict quality control.
                    </p>
                </div>

                <div class="feature-card reveal">
                    <div class="feature-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3 class="feature-title">100% Organic</h3>
                    <p class="feature-text">
                        Made from natural ingredients with no harmful chemicals or additives.
                    </p>
                </div>

                <div class="feature-card reveal">
                    <div class="feature-icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <h3 class="feature-title">Nationwide Delivery</h3>
                    <p class="feature-text">
                        Fast and reliable delivery network across all regions in Tanzania.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section" id="faq">
        <div class="faq-container">
            <div class="faq-header">
                <h2>Frequently Asked Questions</h2>
                <p>Find answers to common questions about our products and services</p>
            </div>
            
            <div class="faq-list">
                <div class="faq-item">
                    <div class="faq-question">
                        What makes Navyakosh bio-fertilizers different from chemical fertilizers?
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Navyakosh bio-fertilizers contain beneficial microorganisms that enhance nutrient uptake naturally, improve soil health over time, and support sustainable agriculture. Unlike chemical fertilizers that can degrade soil quality with prolonged use, our bio-fertilizers actually restore and enhance soil microbial activity, leading to healthier plants and better long-term yields.
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        Which Navyakosh product should I choose for my crop?
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            The best product depends on your crop, soil condition, growth stage, and yield target. For example, Legume Special supports nitrogen fixation, Rice NPK supports tillering and grain quality, and Soil Booster helps restore tired soils. If you are unsure, contact our team with your crop and farm size for a practical recommendation.
                        </div>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        How long does it take to see results from using your products?
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Most farmers begin to see visible improvements in plant health and vigor within 2-4 weeks of application. Soil health improvements continue to build over multiple growing seasons. For optimal results, we recommend consistent use over at least 2-3 crop cycles to fully establish the beneficial microbial populations in your soil.
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        Can I use Navyakosh products before planting?
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Yes. Many Navyakosh products work well as a basal application before or during planting because they help prepare the root zone and improve early nutrient availability. Always follow the crop-specific usage guidance shown on the product or ask for advice before applying on sensitive crops.
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        Can I apply the products after the crop has already emerged?
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Yes. Several products can be applied as top dressing, soil drench, or split application depending on the crop and product type. Application after emergence is especially useful when the crop needs root support, stronger vegetative growth, or recovery from stress.
                        </div>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        Do you offer bulk pricing for large farms?
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Yes! We offer significant discounts for bulk orders and have special pricing programs for large agricultural operations. Contact our sales team for a customized quote based on your farm size and annual requirements. We also offer financing options and seasonal payment plans for qualifying customers.
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        Are the products suitable for smallholder farmers?
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Yes. Navyakosh products are suitable for both smallholder and commercial farms. We can recommend practical quantities for small plots, acre-based farms, and larger estates so farmers avoid over-application and unnecessary cost.
                        </div>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        Can I use Navyakosh products with other fertilizers?
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Navyakosh bio-fertilizers can be integrated with most conventional fertilizer programs. However, we recommend consulting with our agronomists for the best integration strategy. In many cases, our products allow you to reduce chemical fertilizer usage by 25-40% while maintaining or improving yields.
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        Can I mix Navyakosh bio-fertilizers with pesticides or herbicides?
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Avoid mixing bio-fertilizers directly with harsh chemicals unless our technical team confirms compatibility. Some pesticides, fungicides, and herbicides can reduce the activity of beneficial microorganisms. Applying them separately is usually the safer option.
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        Can I reduce chemical fertilizer after using Navyakosh?
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            In many cases, farmers can gradually reduce chemical fertilizer use as soil biology improves. The exact reduction depends on your soil test, crop demand, and yield target. We recommend reducing carefully instead of stopping your existing program suddenly.
                        </div>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        Do you provide on-site consultation services?
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Absolutely! We offer comprehensive on-site farm consultations where our certified agronomists visit your farm, assess soil conditions, and develop a customized fertilization plan. This service includes soil testing, crop analysis, and ongoing support throughout the growing season. Contact us to schedule your consultation.
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        Do I need a soil test before using the products?
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            A soil test is helpful but not always required. If you have soil test results, we can give a more precise recommendation. If you do not, we can still guide you using crop type, soil history, visible crop symptoms, farm location, and previous fertilizer practices.
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        How often should I apply bio-fertilizer?
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Application frequency depends on the crop cycle and product. Some products are applied once at planting, while others perform better in split applications. For long-season crops, repeated support during key growth stages can improve consistency.
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        What is the correct application rate per acre?
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Rates vary by product and crop. Product cards show general acre-based guidance, but the final rate should consider soil fertility, crop stage, and farming system. Contact us for a recommendation matched to your field conditions.
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        Are Navyakosh products safe for organic farming?
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Our bio-fertilizer approach supports organic and low-chemical farming systems. If you need certification-specific compliance for export or formal organic programs, share your standard requirements with us so we can confirm the best product fit.
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        Are the products safe for soil microorganisms and earthworms?
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Yes. Navyakosh products are designed to support soil life rather than suppress it. They help improve microbial activity, organic matter conversion, root-zone health, and nutrient cycling when used correctly.
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        Can I use the products in greenhouse or nursery production?
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Yes, selected products can be used in nurseries and greenhouses, but rates should be adjusted because seedlings and container-grown crops are more sensitive. Ask our team for nursery-safe application guidance before use.
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        Can I use Navyakosh on vegetables and horticultural crops?
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Yes. Horticultural crops often respond well because they need strong roots, steady nutrition, and good soil structure. We can help match the product and timing for crops such as tomato, onion, cabbage, watermelon, and leafy vegetables.
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        Can the products help with poor or exhausted soils?
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Yes. Soil Booster and organic bio-fertilizer options are especially useful for tired soils. They support soil structure, microbial recovery, and nutrient availability, but severely depleted soils may also need compost, lime, or mineral correction.
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        Can Navyakosh improve root development?
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Yes. Stronger root development is one of the main benefits of bio-fertilizer use. Better roots help crops access water and nutrients more efficiently, which can improve resilience during dry spells or periods of nutrient stress.
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        Will bio-fertilizer work during dry weather?
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Moisture helps beneficial microorganisms become active, so results are best when products are applied into moist soil or followed by irrigation or rainfall. In very dry conditions, wait for moisture or apply with enough water where possible.
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        What is the best time of day to apply liquid fertilizer?
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Early morning or late afternoon is usually best, especially for foliar or liquid applications. Avoid strong midday heat because evaporation and leaf stress can reduce performance.
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        How should I store Navyakosh products?
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Store products in a cool, dry, shaded place away from direct sunlight, moisture, and chemicals. Keep packaging sealed until use, and avoid leaving bio-fertilizers exposed to heat for long periods.
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        What is the shelf life of the products?
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Shelf life depends on the product type and storage conditions. For best performance, use products within the recommended period on the package and avoid storing them in heat, sunlight, or high humidity.
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        Do you deliver outside Dar es Salaam?
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Yes. We support delivery across Tanzania depending on quantity, location, and transport availability. Contact us with your region and order size so we can confirm delivery timing and cost.
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        Can I order products for a farmer group or cooperative?
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Yes. We welcome cooperative, farmer-group, distributor, and institutional orders. Group orders can make training, delivery, and pricing easier to coordinate.
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        Do you provide training on how to apply the products?
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Yes. We can guide farmers on product selection, timing, application method, and safe handling. For larger groups, we can also discuss field demos or practical training sessions.
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        Can I get a recommendation for maize, rice, legumes, or tobacco?
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Yes. Share your crop, acreage, location, soil condition, and previous fertilizer use. Our team can suggest a product plan for maize, rice, legumes, tobacco, sugarcane, coffee, watermelon, and horticulture.
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        Can the products be used with irrigation systems?
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Some liquid products may be suitable for irrigation-based application, depending on filtration, dilution, and system type. Confirm with our team before fertigation so the product is applied evenly and does not clog equipment.
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        Can Navyakosh help with transplant shock?
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Bio-fertilizer and root-support products can help seedlings establish faster after transplanting when used correctly. They are most helpful when combined with good watering, careful handling, and proper spacing.
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        Do the products replace manure or compost?
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Not always. Compost and manure add organic matter, while bio-fertilizers improve microbial activity and nutrient availability. Many farms get better results by combining good organic matter management with Navyakosh products.
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        What information should I provide when asking for a quote?
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Please share your crop, farm size, location, preferred product if known, expected delivery date, and whether you need technical support. This helps us prepare an accurate recommendation and quotation.
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
                <h2>Need Help Choosing the Right Product?</h2>
                <p>
                    Our agricultural experts are here to help you select the perfect bio-fertilizer 
                    for your specific crop and soil conditions.
                </p>
                <a href="contact.php" class="btn btn-primary">
                    <i class="fas fa-phone"></i>
                    Get Expert Advice
                </a>
            </div>
        </div>
    </section>

    <!-- Product Modal -->
    <div id="product-modal" class="product-modal">
        <div class="modal-container">
            <button class="close-modal" aria-label="Close modal">
                <i class="fas fa-times"></i>
            </button>
            <div class="modal-content">
                <div class="modal-image">
                    <img src="" alt="Product Image">
                </div>
                <div class="modal-details">
                    <span class="modal-category"></span>
                    <h2 class="modal-title"></h2>
                    <p class="modal-description"></p>
                    <div class="modal-benefits">
                        <h4>Key Benefits</h4>
                        <ul></ul>
                    </div>
                    <div class="modal-usage">
                        <h4>Usage</h4>
                        <p></p>
                    </div>
                    <div class="modal-actions">
                        <a href="contact.php" class="btn btn-primary">
                            <i class="fas fa-envelope"></i>
                            Enquire Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


     <script>
        // FAQ Accordion
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', () => {
                const item = question.parentElement;
                const isActive = item.classList.contains('active');
                
                // Close all items
                document.querySelectorAll('.faq-item').forEach(faq => {
                    faq.classList.remove('active');
                });
                
                // Open clicked item if it wasn't active
                if (!isActive) {
                    item.classList.add('active');
                }
            });
        });
        
        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>

    <style>
    /* Product Modal Styles */
    .product-modal {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        z-index: 10000;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
        padding: 20px;
    }
    
    .product-modal.active {
        opacity: 1;
        visibility: visible;
    }
    
    .modal-container {
        background: var(--white);
        border-radius: 24px;
        max-width: 900px;
        width: 100%;
        max-height: 90vh;
        overflow-y: auto;
        position: relative;
        transform: scale(0.9);
        transition: transform 0.3s ease;
    }
    
    .product-modal.active .modal-container {
        transform: scale(1);
    }
    
    .close-modal {
        position: absolute;
        top: 20px;
        right: 20px;
        width: 45px;
        height: 45px;
        border-radius: 50%;
        background: var(--light);
        border: none;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.2rem;
        color: var(--dark);
        transition: var(--transition);
        z-index: 10;
    }
    
    .close-modal:hover {
        background: var(--primary);
        color: var(--white);
    }
    
    .modal-content {
        display: grid;
        grid-template-columns: 1fr 1fr;
    }
    
    .modal-image {
        padding: 40px;
        background: var(--light);
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 24px 0 0 24px;
    }
    
    .modal-image img {
        max-width: 100%;
        max-height: 350px;
        object-fit: contain;
        border-radius: 16px;
    }
    
    .modal-details {
        padding: 40px;
    }
    
    .modal-category {
        display: inline-block;
        background: rgba(30, 123, 60, 0.1);
        color: var(--primary);
        padding: 6px 16px;
        border-radius: 50px;
        font-size: 0.85rem;
        font-weight: 600;
        margin-bottom: 15px;
    }
    
    .modal-title {
        font-family: var(--font-secondary);
        font-size: 1.8rem;
        color: var(--dark);
        margin-bottom: 15px;
    }
    
    .modal-description {
        color: var(--gray);
        line-height: 1.7;
        margin-bottom: 25px;
    }
    
    .modal-benefits h4,
    .modal-usage h4 {
        font-size: 1rem;
        color: var(--dark);
        margin-bottom: 12px;
    }
    
    .modal-benefits ul {
        list-style: none;
        margin-bottom: 20px;
    }
    
    .modal-benefits li {
        display: flex;
        align-items: center;
        gap: 10px;
        color: var(--gray);
        margin-bottom: 8px;
        font-size: 0.95rem;
    }
    
    .modal-benefits li i {
        color: var(--primary);
    }
    
    .modal-usage {
        background: var(--light);
        padding: 15px;
        border-radius: 12px;
        margin-bottom: 25px;
    }
    
    .modal-usage p {
        color: var(--gray);
        margin: 0;
    }
    
    .modal-actions .btn {
        width: 100%;
        justify-content: center;
    }
    
    @media (max-width: 768px) {
        .modal-content {
            grid-template-columns: 1fr;
        }
        
        .modal-image {
            border-radius: 24px 24px 0 0;
            padding: 30px;
        }
        
        .modal-details {
            padding: 30px;
        }
        
        .modal-title {
            font-size: 1.5rem;
        }
    }
    
    /* Update product action buttons to trigger modal */
    .product-action-btn.product-view-btn {
        cursor: pointer;
    }
    </style>

    <script>
    // Product Modal Functionality
    document.addEventListener('DOMContentLoaded', function() {
        const productModal = document.getElementById('product-modal');
        const productViewBtns = document.querySelectorAll('.product-view-btn');
        const closeModalBtn = document.querySelector('.close-modal');
        
        if (productModal && productViewBtns.length > 0) {
            productViewBtns.forEach(btn => {
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    const card = this.closest('.product-card');
                    
                    // Get product data
                    const title = card.querySelector('.product-title')?.textContent || '';
                    const category = card.querySelector('.product-category')?.textContent || '';
                    const description = card.querySelector('.product-description')?.textContent || '';
                    const image = card.querySelector('.product-image img')?.src || '';
                    const benefitsList = card.querySelectorAll('.product-benefits li');
                    const usageText = card.querySelector('.product-usage span')?.textContent || '';
                    
                    // Populate modal
                    productModal.querySelector('.modal-title').textContent = title;
                    productModal.querySelector('.modal-category').textContent = category;
                    productModal.querySelector('.modal-description').textContent = description;
                    productModal.querySelector('.modal-image img').src = image;
                    productModal.querySelector('.modal-usage p').textContent = usageText;
                    
                    // Populate benefits
                    const modalBenefitsList = productModal.querySelector('.modal-benefits ul');
                    modalBenefitsList.innerHTML = '';
                    benefitsList.forEach(benefit => {
                        const li = document.createElement('li');
                        li.innerHTML = benefit.innerHTML;
                        modalBenefitsList.appendChild(li);
                    });
                    
                    // Show modal
                    productModal.classList.add('active');
                    document.body.style.overflow = 'hidden';
                });
            });
            
            // Close modal
            if (closeModalBtn) {
                closeModalBtn.addEventListener('click', function() {
                    productModal.classList.remove('active');
                    document.body.style.overflow = '';
                });
            }
            
            // Close on outside click
            productModal.addEventListener('click', function(e) {
                if (e.target === productModal) {
                    productModal.classList.remove('active');
                    document.body.style.overflow = '';
                }
            });
            
            // Close on escape key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && productModal.classList.contains('active')) {
                    productModal.classList.remove('active');
                    document.body.style.overflow = '';
                }
            });
        }
    });
    </script>

<?php include 'includes/footer.php'; ?>
