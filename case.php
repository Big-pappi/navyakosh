<?php
/**
 * Navyakosh Case Studies - Fertilizer Brochures
 */
$page_title = 'Case Studies | Navyakosh Bio-Fertilizers';
$page_description = 'Explore Navyakosh fertilizer brochures, product guides, and case studies for sustainable agriculture.';

$extra_css = <<<'CSS'
<style>
    .case-hero {
        min-height: 520px;
        display: flex;
        align-items: center;
        color: var(--white);
        background:
            linear-gradient(90deg, rgba(20, 52, 34, 0.92) 0%, rgba(20, 52, 34, 0.74) 46%, rgba(20, 52, 34, 0.24) 100%),
            url('images/farmer-field.jpg') center/cover no-repeat;
        position: relative;
        overflow: hidden;
    }

    .case-hero::after {
        content: '';
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        height: 110px;
        background: linear-gradient(180deg, transparent, var(--light));
    }

    .case-hero-content {
        position: relative;
        z-index: 2;
        max-width: 760px;
        padding: 90px 0 120px;
    }

    .case-kicker {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 9px 18px;
        border-radius: 999px;
        background: rgba(255, 255, 255, 0.13);
        border: 1px solid rgba(255, 255, 255, 0.22);
        font-weight: 600;
        margin-bottom: 24px;
    }

    .case-hero h1 {
        font-family: var(--font-secondary);
        font-size: clamp(2.6rem, 6vw, 4.5rem);
        line-height: 1.05;
        margin-bottom: 24px;
    }

    .case-hero p {
        max-width: 680px;
        color: rgba(255, 255, 255, 0.88);
        font-size: 1.12rem;
        margin-bottom: 34px;
    }

    /* Brochures Section */
    .brochures-section {
        background: var(--white);
    }

    .brochures-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
    }

    .brochure-card {
        background: var(--light);
        border: 1px solid rgba(30, 123, 60, 0.09);
        border-radius: 20px;
        overflow: hidden;
        transition: var(--transition);
        position: relative;
    }

    .brochure-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 5px;
        background: linear-gradient(90deg, var(--primary), var(--secondary));
    }

    .brochure-card:hover {
        transform: translateY(-10px);
        box-shadow: var(--shadow-lg);
        background: var(--white);
    }

    .brochure-image {
        position: relative;
        aspect-ratio: 4 / 3;
        overflow: hidden;
        background: linear-gradient(135deg, var(--primary-light), var(--primary));
    }

    .brochure-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: var(--transition);
    }

    .brochure-card:hover .brochure-image img {
        transform: scale(1.05);
    }

    .brochure-badge {
        position: absolute;
        top: 15px;
        left: 15px;
        background: var(--secondary);
        color: var(--dark);
        padding: 6px 14px;
        border-radius: 50px;
        font-size: 0.8rem;
        font-weight: 700;
    }

    .brochure-content {
        padding: 25px;
    }

    .brochure-category {
        color: var(--primary);
        font-size: 0.85rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 10px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .brochure-title {
        font-size: 1.25rem;
        font-weight: 700;
        color: var(--dark);
        margin-bottom: 12px;
        line-height: 1.3;
    }

    .brochure-description {
        color: var(--gray);
        font-size: 0.95rem;
        margin-bottom: 20px;
        line-height: 1.6;
    }

    .brochure-features {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-bottom: 20px;
    }

    .brochure-feature {
        background: rgba(30, 123, 60, 0.1);
        color: var(--primary-dark);
        padding: 5px 12px;
        border-radius: 50px;
        font-size: 0.8rem;
        font-weight: 500;
    }

    .brochure-actions {
        display: flex;
        gap: 12px;
        padding-top: 20px;
        border-top: 1px solid var(--gray-light);
    }

    .brochure-btn {
        flex: 1;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        padding: 12px 20px;
        border-radius: 50px;
        font-weight: 600;
        font-size: 0.9rem;
        transition: var(--transition);
        text-decoration: none;
    }

    .brochure-btn-primary {
        background: var(--primary);
        color: var(--white);
    }

    .brochure-btn-primary:hover {
        background: var(--primary-dark);
        transform: translateY(-2px);
    }

    .brochure-btn-outline {
        background: transparent;
        color: var(--primary);
        border: 2px solid var(--primary);
    }

    .brochure-btn-outline:hover {
        background: var(--primary);
        color: var(--white);
    }

    /* Product Highlights Section */
    .product-highlights {
        background: linear-gradient(135deg, var(--dark) 0%, var(--primary-dark) 100%);
        color: var(--white);
        position: relative;
        overflow: hidden;
    }

    .product-highlights::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
    }

    .product-highlights .section-title {
        color: var(--white);
    }

    .product-highlights .section-badge {
        background: rgba(255, 255, 255, 0.1);
        color: var(--white);
    }

    .highlights-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 25px;
    }

    .highlight-card {
        background: rgba(255, 255, 255, 0.08);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.12);
        border-radius: 20px;
        padding: 30px;
        text-align: center;
        transition: var(--transition);
    }

    .highlight-card:hover {
        background: rgba(255, 255, 255, 0.12);
        transform: translateY(-8px);
        border-color: var(--secondary);
    }

    .highlight-icon {
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, var(--primary), var(--accent));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        font-size: 1.8rem;
        color: var(--white);
    }

    .highlight-card h3 {
        font-size: 1.15rem;
        margin-bottom: 12px;
    }

    .highlight-card p {
        color: rgba(255, 255, 255, 0.75);
        font-size: 0.95rem;
        line-height: 1.6;
    }

    /* CTA Section */
    .case-cta {
        background:
            linear-gradient(90deg, rgba(30, 123, 60, 0.95), rgba(21, 87, 43, 0.88)),
            url('images/soil-application.webp') center/cover no-repeat;
    }

    @media (max-width: 1024px) {
        .brochures-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .highlights-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {
        .case-hero {
            min-height: auto;
            background:
                linear-gradient(180deg, rgba(20, 52, 34, 0.9), rgba(20, 52, 34, 0.66)),
                url('images/farmer-field.jpg') center/cover no-repeat;
        }

        .case-hero-content {
            padding: 58px 0 92px;
            max-width: 100%;
        }

        .case-hero h1 {
            font-size: clamp(2.05rem, 11vw, 3rem);
            line-height: 1.08;
            margin-bottom: 16px;
        }

        .brochures-grid,
        .highlights-grid {
            grid-template-columns: 1fr;
        }

        .brochure-actions {
            flex-direction: column;
        }
    }
</style>
CSS;

include 'includes/header.php';
?>

    <section class="case-hero">
        <div class="container">
            <div class="case-hero-content reveal">
                <span class="case-kicker">
                    <i class="fas fa-file-pdf"></i>
                    Product Brochures & Case Studies
                </span>
                <h1>Fertilizer Product Information</h1>
                <p>
                    Explore our comprehensive brochures and case studies about Navyakosh organic fertilizers.
                    Learn about product features, application methods, and success stories.
                </p>
            </div>
        </div>
    </section>

    <!-- Brochures Grid Section -->
    <section class="section brochures-section">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-badge">
                    <i class="fas fa-book-open"></i>
                    Product Brochures
                </span>
                <h2 class="section-title">Our <span>Fertilizer Products</span></h2>
                <p class="section-description">
                    Download detailed brochures about each Navyakosh fertilizer product 
                    with complete specifications and usage guidelines.
                </p>
            </div>

            <div class="brochures-grid">
                <!-- Brochure 1: Organic Fertilizers for Garden -->
                <article class="brochure-card reveal">
                    <div class="brochure-image">
                        <img src="images/front.jpeg" alt="Navyakosh Organic Fertilizers for Garden">
                        <span class="brochure-badge">1kg Pack</span>
                    </div>
                    <div class="brochure-content">
                        <span class="brochure-category">
                            <i class="fas fa-seedling"></i>
                            Garden Care
                        </span>
                        <h3 class="brochure-title">Navyakosh Organic Fertilizers for Garden</h3>
                        <p class="brochure-description">
                            Boost your garden with crop-specific organic fertilizer designed for home gardeners 
                            who want higher yields, healthier soil, and sustainable farming.
                        </p>
                        <div class="brochure-features">
                            <span class="brochure-feature">100% Organic</span>
                            <span class="brochure-feature">Home Gardens</span>
                            <span class="brochure-feature">Kitchen Gardens</span>
                        </div>
                        <div class="brochure-actions">
                            <a href="https://www.lcbfertilizers.com/product-page/navyakosh-organic-fertilizer-big-pack" target="_blank" class="brochure-btn brochure-btn-primary">
                                <i class="fas fa-shopping-cart"></i>
                                Buy Now
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Brochure 2: Microbial Consortium -->
                <article class="brochure-card reveal">
                    <div class="brochure-image">
                        <img src="images/soil-health.jpg" alt="Navyakosh Microbial Consortium">
                        <span class="brochure-badge">Professional</span>
                    </div>
                    <div class="brochure-content">
                        <span class="brochure-category">
                            <i class="fas fa-microscope"></i>
                            Advanced Formula
                        </span>
                        <h3 class="brochure-title">Navyakosh Microbial Consortium</h3>
                        <p class="brochure-description">
                            High-efficiency microbial inoculum with 18-22 beneficial microorganisms. 
                            Converts up to 2 metric tons of organic biomass into nutrient-rich biofertilizer.
                        </p>
                        <div class="brochure-features">
                            <span class="brochure-feature">18-22 Microbes</span>
                            <span class="brochure-feature">7-10 Days</span>
                            <span class="brochure-feature">2 Metric Tons</span>
                        </div>
                        <div class="brochure-actions">
                            <a href="https://www.lcbfertilizers.com/product-page/navyakosh-microbial-consortium" target="_blank" class="brochure-btn brochure-btn-primary">
                                <i class="fas fa-shopping-cart"></i>
                                Buy Now
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Brochure 3: Best Organic Fertilizer -->
                <article class="brochure-card reveal">
                    <div class="brochure-image">
                        <img src="images/bio-fertilizer.jpg" alt="Navyakosh the Best Organic Fertilizer">
                        <span class="brochure-badge">Best Seller</span>
                    </div>
                    <div class="brochure-content">
                        <span class="brochure-category">
                            <i class="fas fa-star"></i>
                            Premium Quality
                        </span>
                        <h3 class="brochure-title">Navyakosh the Best Organic Fertilizer</h3>
                        <p class="brochure-description">
                            Enhance your crop yield naturally with our premium blend of nutrients 
                            that nourishes plants from root to tip for healthy growth and robust harvests.
                        </p>
                        <div class="brochure-features">
                            <span class="brochure-feature">Premium Blend</span>
                            <span class="brochure-feature">All Crops</span>
                            <span class="brochure-feature">Eco-Friendly</span>
                        </div>
                        <div class="brochure-actions">
                            <a href="https://www.lcbfertilizers.com/product-page/navyakosh-the-best-organic-fertilizer" target="_blank" class="brochure-btn brochure-btn-primary">
                                <i class="fas fa-shopping-cart"></i>
                                Buy Now
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Brochure 4: 50Kg Pack -->
                <article class="brochure-card reveal">
                    <div class="brochure-image">
                        <img src="images/navyakosh-maize.jpeg" alt="Navyakosh Organic Fertilizer 50Kg Pack">
                        <span class="brochure-badge">Bulk Pack</span>
                    </div>
                    <div class="brochure-content">
                        <span class="brochure-category">
                            <i class="fas fa-tractor"></i>
                            Farm Grade
                        </span>
                        <h3 class="brochure-title">Navyakosh Organic Fertilizer 50Kg Pack</h3>
                        <p class="brochure-description">
                            Boost your farm productivity with our crop-specific organic fertilizer. 
                            Designed for farmers who want higher yields, healthier soil, and sustainable farming.
                        </p>
                        <div class="brochure-features">
                            <span class="brochure-feature">50Kg Pack</span>
                            <span class="brochure-feature">Farm Scale</span>
                            <span class="brochure-feature">Cost Effective</span>
                        </div>
                        <div class="brochure-actions">
                            <a href="https://www.lcbfertilizers.com/product-page/navyakosh-organic-fertilizer-50kg-pack" target="_blank" class="brochure-btn brochure-btn-primary">
                                <i class="fas fa-shopping-cart"></i>
                                Buy Now
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Brochure 5: Flower Booster -->
                <article class="brochure-card reveal">
                    <div class="brochure-image">
                        <img src="images/fertilizer2.webp" alt="Navyakosh For Flower Booster">
                        <span class="brochure-badge">Specialized</span>
                    </div>
                    <div class="brochure-content">
                        <span class="brochure-category">
                            <i class="fas fa-spa"></i>
                            Flower Care
                        </span>
                        <h3 class="brochure-title">Navyakosh For Flower Booster</h3>
                        <p class="brochure-description">
                            Enhance the beauty of your flowers with our unique mix of nutrients 
                            that enriches soil, supports strong root growth, and fosters plentiful blooming.
                        </p>
                        <div class="brochure-features">
                            <span class="brochure-feature">Vibrant Blooms</span>
                            <span class="brochure-feature">Strong Roots</span>
                            <span class="brochure-feature">Long Lasting</span>
                        </div>
                        <div class="brochure-actions">
                            <a href="https://www.lcbfertilizers.com/product-page/navyakosh-for-flower-booster" target="_blank" class="brochure-btn brochure-btn-primary">
                                <i class="fas fa-shopping-cart"></i>
                                Buy Now
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Brochure 6: Cacti and Succulents -->
                <article class="brochure-card reveal">
                    <div class="brochure-image">
                        <img src="images/fertilizers.webp" alt="Navyakosh For Cacti and Succulents">
                        <span class="brochure-badge">Specialized</span>
                    </div>
                    <div class="brochure-content">
                        <span class="brochure-category">
                            <i class="fas fa-sun"></i>
                            Plant Care
                        </span>
                        <h3 class="brochure-title">Navyakosh For Cacti and Succulents</h3>
                        <p class="brochure-description">
                            Formulated to meet the unique nutritional needs of resilient plants, 
                            this specialized blend promotes healthy growth and vibrant foliage.
                        </p>
                        <div class="brochure-features">
                            <span class="brochure-feature">Desert Plants</span>
                            <span class="brochure-feature">Low Water</span>
                            <span class="brochure-feature">Vibrant Foliage</span>
                        </div>
                        <div class="brochure-actions">
                            <a href="https://www.lcbfertilizers.com/product-page/navyakosh-for-cacti-and-succulents" target="_blank" class="brochure-btn brochure-btn-primary">
                                <i class="fas fa-shopping-cart"></i>
                                Buy Now
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Brochure 7: Soil Activator -->
                <article class="brochure-card reveal">
                    <div class="brochure-image">
                        <img src="images/crops-collage.jpg" alt="Navyakosh Soil Activator and Gardening">
                        <span class="brochure-badge">Popular</span>
                    </div>
                    <div class="brochure-content">
                        <span class="brochure-category">
                            <i class="fas fa-layer-group"></i>
                            Soil Booster
                        </span>
                        <h3 class="brochure-title">Navyakosh Soil Activator and Gardening</h3>
                        <p class="brochure-description">
                            Rejuvenate your soil with our unique formula that replenishes essential nutrients, 
                            improves soil structure, and enhances microbial activity.
                        </p>
                        <div class="brochure-features">
                            <span class="brochure-feature">Soil Health</span>
                            <span class="brochure-feature">Microbial Activity</span>
                            <span class="brochure-feature">Nutrient Rich</span>
                        </div>
                        <div class="brochure-actions">
                            <a href="https://www.lcbfertilizers.com/product-page/navyakosh-soil-activator-and-gardening" target="_blank" class="brochure-btn brochure-btn-primary">
                                <i class="fas fa-shopping-cart"></i>
                                Buy Now
                            </a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Product Highlights Section -->
    <section class="section product-highlights">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-badge">
                    <i class="fas fa-check-circle"></i>
                    Why Navyakosh
                </span>
                <h2 class="section-title">Key <span>Benefits</span></h2>
                <p class="section-description" style="color: rgba(255,255,255,0.8);">
                    Discover why farmers trust Navyakosh for their organic fertilizer needs.
                </p>
            </div>

            <div class="highlights-grid reveal">
                <div class="highlight-card">
                    <div class="highlight-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Higher Yields</h3>
                    <p>Achieve 15-35% more yield with our scientifically proven organic formulations.</p>
                </div>

                <div class="highlight-card">
                    <div class="highlight-icon">
                        <i class="fas fa-coins"></i>
                    </div>
                    <h3>Cost Savings</h3>
                    <p>Reduce expenses by 5-48% with one-time application that cuts chemical fertilizer needs.</p>
                </div>

                <div class="highlight-card">
                    <div class="highlight-icon">
                        <i class="fas fa-tint"></i>
                    </div>
                    <h3>Water Efficiency</h3>
                    <p>Save 33% on irrigation with our Super Absorbent Polymer technology.</p>
                </div>

                <div class="highlight-card">
                    <div class="highlight-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3>Soil Health</h3>
                    <p>Improve soil fertility with 42% increase in organic matter from field trials.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta case-cta">
        <div class="container">
            <div class="cta-content reveal">
                <h2>Ready to Transform Your Farm?</h2>
                <p>
                    Shop now at LCB Fertilizers or contact us for more information about our products.
                </p>
                <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
                    <a href="https://www.lcbfertilizers.com" target="_blank" class="btn btn-primary">
                        <i class="fas fa-shopping-cart"></i>
                        Shop Now
                    </a>
                    <a href="contact.php" class="btn btn-outline" style="color: white; border-color: white;">
                        <i class="fas fa-phone"></i>
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
