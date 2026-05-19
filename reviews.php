<?php
/**
 * Navyakosh Farmer Reviews Page
 */
$page_title = 'Farmer Reviews | Navyakosh Bio-Fertilizers';
$page_description = 'Read farmer reviews, practical crop tips, field lessons, and Navyakosh resources for healthier soil and better yields.';

$extra_css = <<<'CSS'
<style>
    .reviews-hero {
        min-height: 620px;
        display: flex;
        align-items: center;
        color: var(--white);
        background:
            linear-gradient(90deg, rgba(20, 52, 34, 0.92) 0%, rgba(20, 52, 34, 0.74) 46%, rgba(20, 52, 34, 0.24) 100%),
            url('images/farmer-field.jpg') center/cover no-repeat;
        position: relative;
        overflow: hidden;
    }

    .reviews-hero::after {
        content: '';
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        height: 110px;
        background: linear-gradient(180deg, transparent, var(--light));
    }

    .reviews-hero-content {
        position: relative;
        z-index: 2;
        max-width: 760px;
        padding: 90px 0 120px;
    }

    .reviews-kicker {
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

    .reviews-hero h1 {
        font-family: var(--font-secondary);
        font-size: clamp(2.6rem, 6vw, 5rem);
        line-height: 1.05;
        margin-bottom: 24px;
    }

    .reviews-hero p {
        max-width: 680px;
        color: rgba(255, 255, 255, 0.88);
        font-size: 1.12rem;
        margin-bottom: 34px;
    }

    .reviews-actions {
        display: flex;
        align-items: center;
        gap: 16px;
        flex-wrap: wrap;
    }

    .reviews-actions .btn-outline {
        color: var(--white);
        border-color: rgba(255, 255, 255, 0.68);
    }

    .reviews-actions .btn-outline:hover {
        border-color: var(--white);
        background: var(--white);
        color: var(--primary);
    }

    .review-snapshot {
        margin-top: -88px;
        position: relative;
        z-index: 3;
    }

    .snapshot-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 18px;
        background: var(--white);
        border-radius: 18px;
        box-shadow: var(--shadow-lg);
        padding: 18px;
    }

    .snapshot-card {
        padding: 24px;
        border-radius: 12px;
        background: var(--light);
        border: 1px solid rgba(30, 123, 60, 0.08);
    }

    .snapshot-card strong {
        display: block;
        color: var(--primary);
        font-family: var(--font-secondary);
        font-size: 2.4rem;
        line-height: 1;
        margin-bottom: 10px;
    }

    .snapshot-card span {
        color: var(--gray);
        font-weight: 500;
    }

    .review-feature {
        background: var(--light);
        padding-top: 90px;
    }

    .feature-review-layout {
        display: grid;
        grid-template-columns: 0.86fr 1.14fr;
        gap: 44px;
        align-items: center;
    }

    .feature-review-media {
        position: relative;
        min-height: 520px;
        border-radius: 18px;
        overflow: hidden;
        box-shadow: var(--shadow-lg);
    }

    .feature-review-media img {
        width: 100%;
        height: 100%;
        min-height: 520px;
        object-fit: cover;
    }

    .media-badge {
        position: absolute;
        left: 24px;
        bottom: 24px;
        right: 24px;
        padding: 20px;
        background: rgba(255, 255, 255, 0.94);
        border-radius: 12px;
        display: grid;
        grid-template-columns: auto 1fr;
        gap: 16px;
        align-items: center;
    }

    .media-badge i {
        width: 52px;
        height: 52px;
        border-radius: 50%;
        background: var(--primary);
        color: var(--white);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.3rem;
    }

    .media-badge strong {
        display: block;
        color: var(--dark);
        margin-bottom: 2px;
    }

    .media-badge span {
        color: var(--gray);
        font-size: 0.94rem;
    }

    .feature-review-card {
        background: var(--white);
        border-radius: 18px;
        padding: 46px;
        box-shadow: 0 14px 44px rgba(20, 52, 34, 0.09);
        border: 1px solid rgba(30, 123, 60, 0.09);
    }

    .review-stars {
        display: flex;
        gap: 7px;
        color: var(--secondary);
        margin-bottom: 22px;
    }

    .feature-review-card blockquote {
        color: var(--dark);
        font-family: var(--font-secondary);
        font-size: clamp(1.7rem, 3vw, 2.45rem);
        line-height: 1.25;
        margin-bottom: 28px;
    }

    .review-author-row {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
        padding-top: 24px;
        border-top: 1px solid var(--gray-light);
        flex-wrap: wrap;
    }

    .review-author-row h3 {
        font-size: 1.15rem;
        color: var(--dark);
        margin-bottom: 4px;
    }

    .review-author-row p {
        color: var(--gray);
    }

    .yield-pill {
        display: inline-flex;
        align-items: center;
        gap: 9px;
        color: var(--primary-dark);
        background: rgba(109, 179, 63, 0.16);
        border-radius: 999px;
        padding: 10px 16px;
        font-weight: 700;
    }

    .farmer-reviews {
        background: var(--white);
    }

    .reviews-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 24px;
    }

    .farmer-review-card {
        background: var(--light);
        border: 1px solid rgba(30, 123, 60, 0.09);
        border-radius: 16px;
        padding: 28px;
        transition: var(--transition);
        position: relative;
        overflow: hidden;
    }

    .farmer-review-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(90deg, var(--primary), var(--secondary));
    }

    .farmer-review-card:hover {
        transform: translateY(-8px);
        box-shadow: var(--shadow);
        background: var(--white);
    }

    .review-crop {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: var(--primary);
        font-weight: 700;
        margin-bottom: 16px;
    }

    .farmer-review-card p {
        color: var(--gray);
        margin-bottom: 22px;
    }

    .review-meta {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 16px;
        border-top: 1px solid var(--gray-light);
        padding-top: 18px;
    }

    .review-meta strong {
        color: var(--dark);
        display: block;
    }

    .review-meta span {
        color: var(--gray);
        font-size: 0.9rem;
    }

    .review-result {
        color: var(--primary);
        font-weight: 800;
        white-space: nowrap;
    }

    .field-support {
        background: var(--light);
    }

    .field-support-layout {
        display: grid;
        grid-template-columns: 0.95fr 1.05fr;
        gap: 40px;
        align-items: start;
    }

    .field-support-panel {
        background: var(--white);
        border-radius: 18px;
        padding: 34px;
        box-shadow: var(--shadow);
        position: sticky;
        top: 110px;
    }

    .field-support-panel h2 {
        font-family: var(--font-secondary);
        font-size: 2.2rem;
        line-height: 1.18;
        margin-bottom: 18px;
    }

    .field-support-panel p {
        color: var(--gray);
        margin-bottom: 26px;
    }

    .field-support-list {
        display: grid;
        gap: 16px;
    }

    .field-support-item {
        display: grid;
        grid-template-columns: auto 1fr;
        gap: 16px;
        align-items: start;
        background: var(--white);
        border-radius: 14px;
        padding: 22px;
        border: 1px solid rgba(30, 123, 60, 0.09);
    }

    .field-support-item i {
        width: 46px;
        height: 46px;
        border-radius: 12px;
        background: var(--primary);
        color: var(--white);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .field-support-item h3 {
        color: var(--dark);
        margin-bottom: 6px;
        font-size: 1.08rem;
    }

    .field-support-item p {
        color: var(--gray);
        font-size: 0.95rem;
    }

    .quick-guides {
        background: var(--dark);
        color: var(--white);
    }

    .quick-guides .section-title,
    .quick-guides .section-description {
        color: var(--white);
    }

    .guide-strip {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 18px;
    }

    .guide-card {
        min-height: 280px;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        padding: 24px;
        border-radius: 16px;
        overflow: hidden;
        position: relative;
        isolation: isolate;
        color: var(--white);
    }

    .guide-card::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, rgba(0, 0, 0, 0.12), rgba(0, 0, 0, 0.76));
        z-index: -1;
    }

    .guide-card img {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: -2;
        transition: var(--transition);
    }

    .guide-card:hover img {
        transform: scale(1.08);
    }

    .guide-card h3 {
        font-size: 1.15rem;
        margin-bottom: 8px;
    }

    .guide-card span {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: var(--secondary);
        font-weight: 700;
    }

    .review-cta {
        background:
            linear-gradient(90deg, rgba(30, 123, 60, 0.95), rgba(21, 87, 43, 0.88)),
            url('images/soil-application.webp') center/cover no-repeat;
    }

    @media (max-width: 1024px) {
        .snapshot-grid,
        .guide-strip {
            grid-template-columns: repeat(2, 1fr);
        }

        .feature-review-layout,
        .field-support-layout {
            grid-template-columns: 1fr;
        }

        .field-support-panel {
            position: static;
        }

        .reviews-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {
        .reviews-hero {
            min-height: auto;
            background:
                linear-gradient(180deg, rgba(20, 52, 34, 0.9), rgba(20, 52, 34, 0.66)),
                url('images/farmer-field.jpg') center/cover no-repeat;
        }

        .reviews-hero-content {
            padding: 58px 0 92px;
            max-width: 100%;
        }

        .reviews-hero h1 {
            font-size: clamp(2.05rem, 11vw, 3rem);
            line-height: 1.08;
            margin-bottom: 16px;
        }

        .reviews-hero p {
            font-size: 0.96rem;
            line-height: 1.58;
            max-width: 34rem;
            margin-bottom: 24px;
        }

        .reviews-kicker {
            font-size: 0.86rem;
            padding: 8px 14px;
            margin-bottom: 18px;
        }

        .review-snapshot {
            margin-top: -58px;
        }

        .snapshot-grid,
        .reviews-grid,
        .guide-strip {
            grid-template-columns: 1fr;
        }

        .feature-review-card {
            padding: 30px;
        }

        .feature-review-media,
        .feature-review-media img {
            min-height: 380px;
        }

        .media-badge {
            left: 16px;
            right: 16px;
            bottom: 16px;
        }
    }
</style>
CSS;

include 'includes/header.php';
?>

    <section class="reviews-hero">
        <div class="container">
            <div class="reviews-hero-content reveal">
                <span class="reviews-kicker">
                    <i class="fas fa-star"></i>
                    Farmer reviews and field results
                </span>
                <h1>Real farmers. Better soil. Stronger harvests.</h1>
                <p>
                    See how growers use Navyakosh bio-fertilizers in maize, rice, sugarcane,
                    legumes, and horticulture.
                </p>
                <div class="reviews-actions">
                    <a href="#farmer-reviews" class="btn btn-primary">
                        <i class="fas fa-comments"></i>
                        Read Farmer Reviews
                    </a>
                    <a href="#field-support" class="btn btn-outline">
                        <i class="fas fa-book-open"></i>
                        View Field Tips
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="review-snapshot">
        <div class="container">
            <div class="snapshot-grid reveal">
                <div class="snapshot-card">
                    <strong>4.8</strong>
                    <span>average farmer rating</span>
                </div>
                <div class="snapshot-card">
                    <strong>6</strong>
                    <span>major crop guides</span>
                </div>
                <div class="snapshot-card">
                    <strong>30%</strong>
                    <span>reported yield uplift</span>
                </div>
                <div class="snapshot-card">
                    <strong>2-3</strong>
                    <span>weeks to visible vigor</span>
                </div>
            </div>
        </div>
    </section>

    <section class="section review-feature">
        <div class="container">
            <div class="feature-review-layout">
                <div class="feature-review-media reveal-left">
                    <img src="images/maize.jpg" alt="Healthy maize field after Navyakosh application">
                    <div class="media-badge">
                        <i class="fas fa-seedling"></i>
                        <div>
                            <strong>Field result highlight</strong>
                            <span>Healthier roots, greener leaves, and stronger crop stand.</span>
                        </div>
                    </div>
                </div>

                <div class="feature-review-card reveal-right">
                    <div class="review-stars" aria-label="5 star review">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <blockquote>
                        "After using Navyakosh on my maize, the crop stayed greener for longer and the roots were much stronger. The difference was visible before flowering."
                    </blockquote>
                    <div class="review-author-row">
                        <div>
                            <h3>Joseph., Maize Farmer</h3>
                            <p>Morogoro, Tanzania</p>
                        </div>
                        <span class="yield-pill">
                            <i class="fas fa-chart-line"></i>
                            Better crop stand
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="farmer-reviews" class="section farmer-reviews">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-badge">
                    <i class="fas fa-comments"></i>
                    Farmer Reviews
                </span>
                <h2 class="section-title">What Farmers Are <span>Saying</span></h2>
                <p class="section-description">
                    Practical feedback from growers using Navyakosh products in real field conditions.
                </p>
            </div>

            <div class="reviews-grid">
                <article class="farmer-review-card reveal">
                    <div class="review-crop">
                        <i class="fas fa-wheat-awn"></i>
                        Maize
                    </div>
                    <div class="review-stars">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p>
                        "The plants looked uniform and recovered quickly after dry days. I liked that the soil remained softer during weeding."
                    </p>
                    <div class="review-meta">
                        <div>
                            <strong>Asha K.</strong>
                            <span>Dodoma</span>
                        </div>
                        <span class="review-result">Stronger roots</span>
                    </div>
                </article>

                <article class="farmer-review-card reveal">
                    <div class="review-crop">
                        <i class="fas fa-water"></i>
                        Rice
                    </div>
                    <div class="review-stars">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                    </div>
                    <p>
                        "My paddy developed better tillers and the crop color improved. The field team explained the timing clearly."
                    </p>
                    <div class="review-meta">
                        <div>
                            <strong>Hassan.</strong>
                            <span>Mbeya</span>
                        </div>
                        <span class="review-result">More tillers</span>
                    </div>
                </article>

                <article class="farmer-review-card reveal">
                    <div class="review-crop">
                        <i class="fas fa-leaf"></i>
                        Horticulture
                    </div>
                    <div class="review-stars">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p>
                        "Tomatoes had better leaf color and fruit setting was more consistent. The application guide was easy to follow."
                    </p>
                    <div class="review-meta">
                        <div>
                            <strong>Neema.</strong>
                            <span>Arusha</span>
                        </div>
                        <span class="review-result">Better fruiting</span>
                    </div>
                </article>

                <article class="farmer-review-card reveal">
                    <div class="review-crop">
                        <i class="fas fa-candy-cane"></i>
                        Sugarcane
                    </div>
                    <div class="review-stars">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p>
                        "The ratoon crop came back evenly and looked vigorous. I plan to use it again in the next cycle."
                    </p>
                    <div class="review-meta">
                        <div>
                            <strong>Peter.</strong>
                            <span>Kilimanjaro</span>
                        </div>
                        <span class="review-result">Even ratoon</span>
                    </div>
                </article>

                <article class="farmer-review-card reveal">
                    <div class="review-crop">
                        <i class="fas fa-spa"></i>
                        Legumes
                    </div>
                    <div class="review-stars">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                    </div>
                    <p>
                        "The bean crop looked healthy, and nodules were clear when we checked the roots. Good support from the agronomy team."
                    </p>
                    <div class="review-meta">
                        <div>
                            <strong>Grace.</strong>
                            <span>Iringa</span>
                        </div>
                        <span class="review-result">Better nodules</span>
                    </div>
                </article>

                <article class="farmer-review-card reveal">
                    <div class="review-crop">
                        <i class="fas fa-mug-hot"></i>
                        Coffee
                    </div>
                    <div class="review-stars">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                    </div>
                    <p>
                        "New growth improved after the feeding program. I appreciated the follow-up because it helped me correct the dosage."
                    </p>
                    <div class="review-meta">
                        <div>
                            <strong>Daniel.</strong>
                            <span>Ruvuma</span>
                        </div>
                        <span class="review-result">Fresh growth</span>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section id="field-support" class="section field-support">
        <div class="container">
            <div class="field-support-layout">
                <div class="field-support-panel reveal-left">
                    <span class="section-badge">
                        <i class="fas fa-graduation-cap"></i>
                        Field Support
                    </span>
                    <h2>What to do before, during, and after application.</h2>
                    <p>
                        Farmer results improve when timing, dosage, crop stage, and soil care work together.
                    </p>
                    <a href="contact.php" class="btn btn-primary">
                        <i class="fas fa-phone"></i>
                        Ask an Agronomist
                    </a>
                </div>

                <div class="field-support-list">
                    <div class="field-support-item reveal">
                        <i class="fas fa-vial"></i>
                        <div>
                            <h3>Soil and root preparation</h3>
                            <p>Check soil moisture, organic matter, and root-zone condition before applying bio-fertilizer.</p>
                        </div>
                    </div>
                    <div class="field-support-item reveal">
                        <i class="fas fa-calendar-check"></i>
                        <div>
                            <h3>Crop-stage timing</h3>
                            <p>Apply at the stage when roots are active and crops can benefit most from microbial support.</p>
                        </div>
                    </div>
                    <div class="field-support-item reveal">
                        <i class="fas fa-hand-holding-droplet"></i>
                        <div>
                            <h3>Application method</h3>
                            <p>Use the recommended dose, avoid harsh chemical mixing, and keep microbes protected from direct sun.</p>
                        </div>
                    </div>
                    <div class="field-support-item reveal">
                        <i class="fas fa-chart-simple"></i>
                        <div>
                            <h3>Field observation</h3>
                            <p>Track color, root growth, tillering, flowering, and yield so every season teaches the next one.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section quick-guides">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-badge">
                    <i class="fas fa-seedling"></i>
                    Crop Guides
                </span>
                <h2 class="section-title">Crop Guides By <span>Field Need</span></h2>
                <p class="section-description">
                    Jump into focused guides with practical crop management and Navyakosh product recommendations.
                </p>
            </div>

            <div class="guide-strip">
                <a href="crop-detail.php?crop=maize" class="guide-card reveal">
                    <img src="images/maize.jpg" alt="Maize cultivation guide">
                    <h3>Maize Guide</h3>
                    <span>Open guide <i class="fas fa-arrow-right"></i></span>
                </a>
                <a href="crop-detail.php?crop=rice" class="guide-card reveal">
                    <img src="images/rice.jpg" alt="Rice cultivation guide">
                    <h3>Rice Guide</h3>
                    <span>Open guide <i class="fas fa-arrow-right"></i></span>
                </a>
                <a href="crop-detail.php?crop=sugarcane" class="guide-card reveal">
                    <img src="images/sugarcane.jpg" alt="Sugarcane cultivation guide">
                    <h3>Sugarcane Guide</h3>
                    <span>Open guide <i class="fas fa-arrow-right"></i></span>
                </a>
                <a href="crop-detail.php?crop=legumes" class="guide-card reveal">
                    <img src="images/legumes.jpg" alt="Legumes cultivation guide">
                    <h3>Legumes Guide</h3>
                    <span>Open guide <i class="fas fa-arrow-right"></i></span>
                </a>
            </div>
        </div>
    </section>

    <section class="cta review-cta">
        <div class="container">
            <div class="cta-content reveal">
                <h2>Ready to become the next farmer story?</h2>
                <p>
                    Talk to Navyakosh for product guidance, field demonstrations, dosage support, and crop-specific advice.
                </p>
                <a href="contact.php" class="btn btn-primary">
                    <i class="fas fa-paper-plane"></i>
                    Contact Navyakosh
                </a>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
