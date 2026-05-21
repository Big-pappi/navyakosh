<?php
/**
 * Navyakosh Case Studies - Crop Brochures
 */
$page_title = 'Case Studies | Navyakosh Bio-Fertilizers';
$page_description = 'Explore crop-specific case studies and brochures showing Navyakosh fertilizer results on cotton, maize, vegetables and more.';

$extra_css = <<<'CSS'
<style>
    .case-hero {
        min-height: 450px;
        display: flex;
        align-items: center;
        color: var(--white);
        background: linear-gradient(135deg, rgba(20, 52, 34, 0.95), rgba(30, 123, 60, 0.85)),
            url('images/farmer-field.jpg') center/cover no-repeat;
    }

    .case-hero-content {
        max-width: 700px;
        padding: 80px 0;
    }

    .case-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: rgba(255,255,255,0.15);
        border: 1px solid rgba(255,255,255,0.25);
        padding: 8px 16px;
        border-radius: 50px;
        font-size: 0.85rem;
        font-weight: 600;
        margin-bottom: 20px;
    }

    .case-hero h1 {
        font-size: clamp(2.2rem, 5vw, 3.5rem);
        font-weight: 800;
        line-height: 1.1;
        margin-bottom: 16px;
    }

    .case-hero p {
        font-size: 1.1rem;
        opacity: 0.9;
        line-height: 1.6;
    }

    /* Case Studies Grid */
    .case-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
    }

    .case-card {
        background: var(--white);
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        transition: all 0.3s ease;
        border: 1px solid #e8e8e8;
    }

    .case-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(30, 123, 60, 0.15);
        border-color: var(--primary);
    }

    .case-image {
        aspect-ratio: 16/10;
        overflow: hidden;
        position: relative;
        background: #f5f5f5;
    }

    .case-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.4s ease;
    }

    .case-card:hover .case-image img {
        transform: scale(1.05);
    }

    .case-crop-badge {
        position: absolute;
        top: 12px;
        left: 12px;
        background: var(--primary);
        color: white;
        padding: 6px 14px;
        border-radius: 50px;
        font-size: 0.8rem;
        font-weight: 600;
    }

    .case-content {
        padding: 24px;
    }

    .case-title {
        font-size: 1.15rem;
        font-weight: 700;
        color: var(--dark);
        margin-bottom: 10px;
    }

    .case-desc {
        color: #666;
        font-size: 0.9rem;
        line-height: 1.6;
        margin-bottom: 16px;
    }

    .case-stats {
        display: flex;
        gap: 16px;
        margin-bottom: 20px;
        padding: 12px 0;
        border-top: 1px solid #eee;
        border-bottom: 1px solid #eee;
    }

    .case-stat {
        text-align: center;
        flex: 1;
    }

    .case-stat-value {
        font-size: 1.3rem;
        font-weight: 700;
        color: var(--primary);
        display: block;
    }

    .case-stat-label {
        font-size: 0.75rem;
        color: #888;
        text-transform: uppercase;
    }

    .case-download {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        width: 100%;
        padding: 12px;
        background: var(--primary);
        color: white;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        font-size: 0.9rem;
        cursor: pointer;
        transition: all 0.3s ease;
        text-decoration: none;
    }

    .case-download:hover {
        background: var(--primary-dark);
    }

    /* Upload Placeholder */
    .upload-placeholder {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100%;
        background: linear-gradient(135deg, #f8f9fa, #e9ecef);
        color: #aaa;
    }

    .upload-placeholder i {
        font-size: 3rem;
        margin-bottom: 10px;
    }

    .upload-placeholder span {
        font-size: 0.85rem;
    }

    @media (max-width: 992px) {
        .case-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 600px) {
        .case-grid {
            grid-template-columns: 1fr;
        }
        
        .case-hero-content {
            padding: 60px 0;
        }
    }
</style>
CSS;

include 'includes/header.php';
?>

    <section class="case-hero">
        <div class="container">
            <div class="case-hero-content reveal">
                <span class="case-badge">
                    <i class="fas fa-file-alt"></i>
                    Crop Case Studies
                </span>
                <h1>Success Stories from the Field</h1>
                <p>
                    See real results from farmers using Navyakosh organic fertilizers. 
                    Download brochures for specific crops with application guides and yield data.
                </p>
            </div>
        </div>
    </section>

    <section class="section" style="background: #fafafa;">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-badge">
                    <i class="fas fa-leaf"></i>
                    case studies
                </span>
                <h2 class="section-title">Crop-Specific <span>Case Studies</span></h2>
                <p class="section-description">
                    Download detailed case study showing fertilizer results for different crops.
                </p>
            </div>

            <div class="case-grid">
                <!-- Cotton Case Study -->
                <article class="case-card reveal">
                    <div class="case-image">
                       <img src="images/cotton.jpg" alt="Cotton case study">

                        <span class="case-crop-badge">Cotton</span>
                    </div>
                    <div class="case-content">
                        <h3 class="case-title">Case study for Cotton Cultivation with Navyakosh at Bariadi District, Simiyu Region, Tanzania</h3>
                        <p class="case-desc">
                          Three comparison plots were observed: Plot without fertilizer, Plot treated with traditional manure, Plot treated with Navyakosh Organic Bio-Fertilizer
                        </p>
                        <div class="case-stats">
                            <div class="case-stat">
                                <span class="case-stat-value">35%</span>
                                <span class="case-stat-label">Yield Increase</span>
                            </div>
                            <div class="case-stat">
                                <span class="case-stat-value">40%</span>
                                <span class="case-stat-label">Cost Savings</span>
                            </div>
                        </div>
                        <a href="images/cases/bariadi_cotton_case_study.pdf"
                                 class="case-download" download target="_blank">
                                <i class="fas fa-download"></i>
                                   Download Case Study
                       </a>
                    </div>
                </article>
               <!--
                Maize Case Study
                <article class="case-card reveal">
                    <div class="case-image">
                        <div class="upload-placeholder">
                            <i class="fas fa-cloud-upload-alt"></i>
                            <span>Maize Brochure Image</span>
                        </div>
                        <span class="case-crop-badge">Maize</span>
                    </div>
                    <div class="case-content">
                        <h3 class="case-title">Maize Production Guide</h3>
                        <p class="case-desc">
                            Step-by-step application methods for maize cultivation using 
                            Navyakosh bio-fertilizers for maximum yield.
                        </p>
                        <div class="case-stats">
                            <div class="case-stat">
                                <span class="case-stat-value">30%</span>
                                <span class="case-stat-label">Yield Increase</span>
                            </div>
                            <div class="case-stat">
                                <span class="case-stat-value">45%</span>
                                <span class="case-stat-label">Cost Savings</span>
                            </div>
                        </div>
                        <a href="#" class="case-download">
                            <i class="fas fa-download"></i>
                            Download Brochure
                        </a>
                    </div>
                </article>

                Vegetables Case Study
                <article class="case-card reveal">
                    <div class="case-image">
                        <div class="upload-placeholder">
                            <i class="fas fa-cloud-upload-alt"></i>
                            <span>Vegetables Brochure Image</span>
                        </div>
                        <span class="case-crop-badge">Vegetables</span>
                    </div>
                    <div class="case-content">
                        <h3 class="case-title">Vegetable Farming Success</h3>
                        <p class="case-desc">
                            Organic vegetable production guide with dosage recommendations 
                            for tomatoes, peppers, onions and more.
                        </p>
                        <div class="case-stats">
                            <div class="case-stat">
                                <span class="case-stat-value">25%</span>
                                <span class="case-stat-label">Yield Increase</span>
                            </div>
                            <div class="case-stat">
                                <span class="case-stat-value">50%</span>
                                <span class="case-stat-label">Cost Savings</span>
                            </div>
                        </div>
                        <a href="#" class="case-download">
                            <i class="fas fa-download"></i>
                            Download Brochure
                        </a>
                    </div>
                </article>

                Legumes Case Study
                <article class="case-card reveal">
                    <div class="case-image">
                        <div class="upload-placeholder">
                            <i class="fas fa-cloud-upload-alt"></i>
                            <span>Legumes Brochure Image</span>
                        </div>
                        <span class="case-crop-badge">Legumes</span>
                    </div>
                    <div class="case-content">
                        <h3 class="case-title">Legume Crop Enhancement</h3>
                        <p class="case-desc">
                            Optimizing beans, peas, and groundnut production with 
                            Navyakosh microbial consortium.
                        </p>
                        <div class="case-stats">
                            <div class="case-stat">
                                <span class="case-stat-value">28%</span>
                                <span class="case-stat-label">Yield Increase</span>
                            </div>
                            <div class="case-stat">
                                <span class="case-stat-value">35%</span>
                                <span class="case-stat-label">Cost Savings</span>
                            </div>
                        </div>
                        <a href="#" class="case-download">
                            <i class="fas fa-download"></i>
                            Download Brochure
                        </a>
                    </div>
                </article>

                Rice Case Study
                <article class="case-card reveal">
                    <div class="case-image">
                        <div class="upload-placeholder">
                            <i class="fas fa-cloud-upload-alt"></i>
                            <span>Rice Brochure Image</span>
                        </div>
                        <span class="case-crop-badge">Rice</span>
                    </div>
                    <div class="case-content">
                        <h3 class="case-title">Rice Paddy Cultivation</h3>
                        <p class="case-desc">
                            Complete rice farming guide with organic fertilizer 
                            application schedules and best practices.
                        </p>
                        <div class="case-stats">
                            <div class="case-stat">
                                <span class="case-stat-value">32%</span>
                                <span class="case-stat-label">Yield Increase</span>
                            </div>
                            <div class="case-stat">
                                <span class="case-stat-value">38%</span>
                                <span class="case-stat-label">Cost Savings</span>
                            </div>
                        </div>
                        <a href="#" class="case-download">
                            <i class="fas fa-download"></i>
                            Download Brochure
                        </a>
                    </div>
                </article>

                Flowers Case Study
                <article class="case-card reveal">
                    <div class="case-image">
                        <div class="upload-placeholder">
                            <i class="fas fa-cloud-upload-alt"></i>
                            <span>Flowers Brochure Image</span>
                        </div>
                        <span class="case-crop-badge">Flowers</span>
                    </div>
                    <div class="case-content">
                        <h3 class="case-title">Floriculture Guide</h3>
                        <p class="case-desc">
                            Enhance flower production and bloom quality with 
                            Navyakosh Flower Booster organic fertilizer.
                        </p>
                        <div class="case-stats">
                            <div class="case-stat">
                                <span class="case-stat-value">40%</span>
                                <span class="case-stat-label">More Blooms</span>
                            </div>
                            <div class="case-stat">
                                <span class="case-stat-value">2x</span>
                                <span class="case-stat-label">Longer Life</span>
                            </div>
                        </div>
                        <a href="#" class="case-download">
                            <i class="fas fa-download"></i>
                            Download Brochure
                        </a>
                    </div>
                </article>
-->
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
