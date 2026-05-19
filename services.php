<?php
/**
 * Navyakosh Services Page
 */
$page_title = 'Services | Navyakosh Bio-Fertilizers';
$page_description = 'Navyakosh Services - Soil Testing, Farming Consultation, Crop Management Advice, Fertilizer Delivery and more.';

include 'includes/header.php';
?>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1>Our Services</h1>
            <div class="breadcrumb">
                <a href="index.php">Home</a>
                <span>/</span>
                <span>Services</span>
            </div>
        </div>
    </section>

    <!-- Services Intro -->
    <section class="section" style="background: var(--white);">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-badge">
                    <i class="fas fa-cogs"></i>
                    What We Offer
                </span>
                <h2 class="section-title">Comprehensive <span>Agricultural Services</span></h2>
                <p class="section-description">
                    Beyond our premium bio-fertilizers, we offer a complete range of services 
                    to support farmers at every stage of their agricultural journey.
                </p>
            </div>
        </div>
    </section>

    <!-- Main Services Grid -->
    <section class="section" style="background: var(--light); padding-top: 20px;">
        <div class="container">
            <div class="services-grid">
                
                <!-- Service 1: Soil Testing -->
                <div class="service-card reveal">
                    <div class="service-image">
                        <img src="images/soil-health.jpg" alt="Soil Testing Service">
                    </div>
                    <div class="service-content">
                        <div class="service-icon">
                            <i class="fas fa-vial"></i>
                        </div>
                        <h3 class="service-title">Soil Testing & Analysis</h3>
                        <p class="service-text">
                            Comprehensive soil testing to determine nutrient levels, pH balance, 
                            organic matter content, and microbial activity. Get detailed reports 
                            with actionable recommendations for optimal crop growth.
                        </p>
                        <ul style="margin-bottom: 20px; color: var(--gray);">
                            <li style="margin-bottom: 8px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 10px;"></i>Complete NPK analysis</li>
                            <li style="margin-bottom: 8px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 10px;"></i>pH and EC measurement</li>
                            <li style="margin-bottom: 8px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 10px;"></i>Micronutrient profiling</li>
                            <li style="margin-bottom: 8px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 10px;"></i>Customized fertilizer recommendations</li>
                        </ul>
                        <a href="contact.php" class="service-link">
                            Book Testing <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Service 2: Farming Consultation -->
                <div class="service-card reveal">
                    <div class="service-image">
                        <img src="images/team.jpg" alt="Farming Consultation">
                    </div>
                    <div class="service-content">
                        <div class="service-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3 class="service-title">Farming Consultation</h3>
                        <p class="service-text">
                            One-on-one consultation with our agricultural experts to address 
                            your specific farming challenges. Get personalized advice on crop 
                            selection, planting schedules, and management practices.
                        </p>
                        <ul style="margin-bottom: 20px; color: var(--gray);">
                            <li style="margin-bottom: 8px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 10px;"></i>Expert agronomist visits</li>
                            <li style="margin-bottom: 8px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 10px;"></i>Crop planning assistance</li>
                            <li style="margin-bottom: 8px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 10px;"></i>Problem diagnosis</li>
                            <li style="margin-bottom: 8px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 10px;"></i>Yield optimization strategies</li>
                        </ul>
                        <a href="contact.php" class="service-link">
                            Schedule Consultation <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Service 3: Crop Management -->
                <div class="service-card reveal">
                    <div class="service-image">
                        <img src="images/farmer-field.jpg" alt="Crop Management Advice">
                    </div>
                    <div class="service-content">
                        <div class="service-icon">
                            <i class="fas fa-seedling"></i>
                        </div>
                        <h3 class="service-title">Crop Management Advice</h3>
                        <p class="service-text">
                            Stage-wise crop management guidance from sowing to harvest. 
                            Our experts provide timely advice on fertilization schedules, 
                            pest management, and irrigation practices.
                        </p>
                        <ul style="margin-bottom: 20px; color: var(--gray);">
                            <li style="margin-bottom: 8px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 10px;"></i>Growth stage monitoring</li>
                            <li style="margin-bottom: 8px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 10px;"></i>Fertilization schedules</li>
                            <li style="margin-bottom: 8px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 10px;"></i>Pest & disease alerts</li>
                            <li style="margin-bottom: 8px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 10px;"></i>Harvest timing guidance</li>
                        </ul>
                        <a href="contact.php" class="service-link">
                            Get Advice <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Service 4: Fertilizer Delivery -->
                <div class="service-card reveal">
                    <div class="service-image">
                        <img src="images/bio-fertilizer.jpg" alt="Fertilizer Delivery">
                    </div>
                    <div class="service-content">
                        <div class="service-icon">
                            <i class="fas fa-truck"></i>
                        </div>
                        <h3 class="service-title">Fertilizer Delivery</h3>
                        <p class="service-text">
                            Fast and reliable delivery of our bio-fertilizers directly to your 
                            farm. We ensure timely delivery so you never miss the optimal 
                            application window for your crops.
                        </p>
                        <ul style="margin-bottom: 20px; color: var(--gray);">
                            <li style="margin-bottom: 8px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 10px;"></i>Nationwide delivery network</li>
                            <li style="margin-bottom: 8px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 10px;"></i>Bulk order discounts</li>
                            <li style="margin-bottom: 8px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 10px;"></i>Real-time tracking</li>
                            <li style="margin-bottom: 8px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 10px;"></i>Doorstep delivery</li>
                        </ul>
                        <a href="contact.php" class="service-link">
                            Order Now <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Service 5: Training Programs -->
                <div class="service-card reveal">
                    <div class="service-image">
                        <img src="images/crops-collage.jpg" alt="Training Programs">
                    </div>
                    <div class="service-content">
                        <div class="service-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h3 class="service-title">Training Programs</h3>
                        <p class="service-text">
                            Comprehensive training workshops for farmers on sustainable 
                            farming practices, bio-fertilizer application techniques, 
                            and modern agricultural methods.
                        </p>
                        <ul style="margin-bottom: 20px; color: var(--gray);">
                            <li style="margin-bottom: 8px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 10px;"></i>On-field demonstrations</li>
                            <li style="margin-bottom: 8px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 10px;"></i>Online webinars</li>
                            <li style="margin-bottom: 8px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 10px;"></i>Certificate programs</li>
                            <li style="margin-bottom: 8px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 10px;"></i>Study materials provided</li>
                        </ul>
                        <a href="education.php" class="service-link">
                            View Programs <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Service 6: After-Sales Support -->
                <div class="service-card reveal">
                    <div class="service-image">
                        <img src="images/hero-bg.jpg" alt="After-Sales Support">
                    </div>
                    <div class="service-content">
                        <div class="service-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h3 class="service-title">After-Sales Support</h3>
                        <p class="service-text">
                            Dedicated customer support team available to assist you with 
                            product usage queries, application guidance, and troubleshooting 
                            any issues you may face.
                        </p>
                        <ul style="margin-bottom: 20px; color: var(--gray);">
                            <li style="margin-bottom: 8px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 10px;"></i>Toll-free helpline</li>
                            <li style="margin-bottom: 8px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 10px;"></i>WhatsApp support</li>
                            <li style="margin-bottom: 8px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 10px;"></i>Video consultations</li>
                            <li style="margin-bottom: 8px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 10px;"></i>Field visit follow-ups</li>
                        </ul>
                        <a href="contact.php" class="service-link">
                            Contact Support <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- How We Work Section -->
    <section class="section" style="background: var(--white);">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-badge">
                    <i class="fas fa-tasks"></i>
                    Our Process
                </span>
                <h2 class="section-title">How We <span>Work</span></h2>
                <p class="section-description">
                    Our systematic approach ensures you get the best results from our services.
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px; margin-top: 50px;">
                <div class="reveal" style="text-align: center; padding: 40px 25px; background: var(--light); border-radius: 20px; position: relative;">
                    <div style="width: 70px; height: 70px; background: var(--primary); color: var(--white); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; font-size: 1.8rem; font-weight: 700;">1</div>
                    <h3 style="font-size: 1.2rem; margin-bottom: 15px; color: var(--dark);">Initial Consultation</h3>
                    <p style="color: var(--gray);">Discuss your farming needs, challenges, and goals with our experts.</p>
                </div>

                <div class="reveal" style="text-align: center; padding: 40px 25px; background: var(--light); border-radius: 20px; position: relative;">
                    <div style="width: 70px; height: 70px; background: var(--primary); color: var(--white); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; font-size: 1.8rem; font-weight: 700;">2</div>
                    <h3 style="font-size: 1.2rem; margin-bottom: 15px; color: var(--dark);">Assessment & Testing</h3>
                    <p style="color: var(--gray);">Conduct soil tests and field assessment to understand your specific conditions.</p>
                </div>

                <div class="reveal" style="text-align: center; padding: 40px 25px; background: var(--light); border-radius: 20px; position: relative;">
                    <div style="width: 70px; height: 70px; background: var(--primary); color: var(--white); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; font-size: 1.8rem; font-weight: 700;">3</div>
                    <h3 style="font-size: 1.2rem; margin-bottom: 15px; color: var(--dark);">Customized Plan</h3>
                    <p style="color: var(--gray);">Develop a tailored fertilization and management plan for your crops.</p>
                </div>

                <div class="reveal" style="text-align: center; padding: 40px 25px; background: var(--light); border-radius: 20px; position: relative;">
                    <div style="width: 70px; height: 70px; background: var(--primary); color: var(--white); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; font-size: 1.8rem; font-weight: 700;">4</div>
                    <h3 style="font-size: 1.2rem; margin-bottom: 15px; color: var(--dark);">Implementation & Support</h3>
                    <p style="color: var(--gray);">Execute the plan with ongoing monitoring and expert support throughout.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Areas Section -->
    <section class="section crops">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-badge">
                    <i class="fas fa-map-marked-alt"></i>
                    Coverage
                </span>
                <h2 class="section-title">Our Service <span>Areas</span></h2>
                <p class="section-description" style="color: rgba(255,255,255,0.8);">
                    We serve farmers across Tanzania with our extensive network of distributors 
                    and service centers.
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 20px; text-align: center; margin-top: 50px;">
                <div class="reveal" style="padding: 25px; background: rgba(255,255,255,0.1); border-radius: 15px;">
                    <i class="fas fa-map-marker-alt" style="font-size: 2rem; color: var(--secondary); margin-bottom: 10px;"></i>
                    <h4>Dar es Salaam</h4>
                </div>
                <div class="reveal" style="padding: 25px; background: rgba(255,255,255,0.1); border-radius: 15px;">
                    <i class="fas fa-map-marker-alt" style="font-size: 2rem; color: var(--secondary); margin-bottom: 10px;"></i>
                    <h4>Morogoro</h4>
                </div>
                <div class="reveal" style="padding: 25px; background: rgba(255,255,255,0.1); border-radius: 15px;">
                    <i class="fas fa-map-marker-alt" style="font-size: 2rem; color: var(--secondary); margin-bottom: 10px;"></i>
                    <h4>Arusha</h4>
                </div>
                <div class="reveal" style="padding: 25px; background: rgba(255,255,255,0.1); border-radius: 15px;">
                    <i class="fas fa-map-marker-alt" style="font-size: 2rem; color: var(--secondary); margin-bottom: 10px;"></i>
                    <h4>Mwanza</h4>
                </div>
                <div class="reveal" style="padding: 25px; background: rgba(255,255,255,0.1); border-radius: 15px;">
                    <i class="fas fa-map-marker-alt" style="font-size: 2rem; color: var(--secondary); margin-bottom: 10px;"></i>
                    <h4>Dodoma</h4>
                </div>
                <div class="reveal" style="padding: 25px; background: rgba(255,255,255,0.1); border-radius: 15px;">
                    <i class="fas fa-map-marker-alt" style="font-size: 2rem; color: var(--secondary); margin-bottom: 10px;"></i>
                    <h4>Mbeya</h4>
                </div>
                <div class="reveal" style="padding: 25px; background: rgba(255,255,255,0.1); border-radius: 15px;">
                    <i class="fas fa-map-marker-alt" style="font-size: 2rem; color: var(--secondary); margin-bottom: 10px;"></i>
                    <h4>Tanga</h4>
                </div>
                <div class="reveal" style="padding: 25px; background: rgba(255,255,255,0.1); border-radius: 15px;">
                    <i class="fas fa-map-marker-alt" style="font-size: 2rem; color: var(--secondary); margin-bottom: 10px;"></i>
                    <h4>+ More</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <div class="cta-content reveal">
                <h2>Ready to Get Started?</h2>
                <p>
                    Contact us today to learn more about our services and how we can help 
                    you achieve better farming results.
                </p>
                <a href="contact.php" class="btn btn-primary">
                    <i class="fas fa-phone"></i>
                    Contact Us Now
                </a>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
