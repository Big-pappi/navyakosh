/* ===================================
   NAVYAKOSH - Main JavaScript
   Professional Green & White Theme
   =================================== */

document.addEventListener('DOMContentLoaded', function() {
    
    // ===================================
    // PRELOADER
    // ===================================
    const preloader = document.querySelector('.preloader');
    const hidePreloader = function() {
        document.body.classList.remove('preloader-active');
        document.body.style.overflow = '';
        document.documentElement.style.overflow = '';
        if (preloader) {
            preloader.classList.add('hidden');
        }
    };

    if (preloader) {
        if (document.readyState === 'complete') {
            setTimeout(hidePreloader, 500);
        } else {
            window.addEventListener('load', function() {
                setTimeout(hidePreloader, 500);
            });
        }
    } else {
        hidePreloader();
    }

    // ===================================
    // MOBILE NAVIGATION
    // ===================================
    const mobileToggle = document.querySelector('.mobile-toggle');
    const navMenu = document.querySelector('.nav-menu');
    
    if (mobileToggle && navMenu) {
        mobileToggle.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            this.classList.toggle('active');
            navMenu.classList.toggle('active');
        });

        // Close menu when clicking on a link
        const navLinks = navMenu.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                mobileToggle.classList.remove('active');
                navMenu.classList.remove('active');
            });
        });
        
        // Close menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!navMenu.contains(e.target) && !mobileToggle.contains(e.target)) {
                mobileToggle.classList.remove('active');
                navMenu.classList.remove('active');
            }
        });
    }

    // ===================================
    // HEADER SCROLL EFFECT
    // ===================================
    const header = document.querySelector('.header');
    let lastScroll = 0;

    window.addEventListener('scroll', function() {
        const currentScroll = window.pageYOffset;
        
        if (header) {
            if (currentScroll > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        }
        
        lastScroll = currentScroll;
    });

    // ===================================
    // HERO SLIDER
    // ===================================
    const heroSlider = document.querySelector('.hero-slider');
    
    if (heroSlider) {
        const slides = heroSlider.querySelectorAll('.slide');
        const dots = heroSlider.querySelectorAll('.dot');
        let currentSlide = 0;
        let slideInterval;
        const slideDelay = 6000; // 6 seconds per slide
        
        function showSlide(index) {
            // Remove active class from all slides and dots
            slides.forEach(slide => {
                slide.classList.remove('active');
            });
            dots.forEach(dot => {
                dot.classList.remove('active');
            });
            
            // Add active class to current slide and dot
            slides[index].classList.add('active');
            dots[index].classList.add('active');
            currentSlide = index;
        }
        
        function nextSlide() {
            const next = (currentSlide + 1) % slides.length;
            showSlide(next);
        }
        
        function startSlider() {
            slideInterval = setInterval(nextSlide, slideDelay);
        }
        
        function stopSlider() {
            clearInterval(slideInterval);
        }
        
        // Dot click handlers
        dots.forEach((dot, index) => {
            dot.addEventListener('click', function() {
                stopSlider();
                showSlide(index);
                startSlider();
            });
        });
        
        // Start automatic sliding
        startSlider();
        
        // Pause on hover (optional)
        heroSlider.addEventListener('mouseenter', stopSlider);
        heroSlider.addEventListener('mouseleave', startSlider);
    }

    // ===================================
    // BACK TO TOP BUTTON
    // ===================================
    const backToTop = document.querySelector('.back-to-top');
    
    if (backToTop) {
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 500) {
                backToTop.classList.add('active');
            } else {
                backToTop.classList.remove('active');
            }
        });

        backToTop.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    // ===================================
    // SCROLL REVEAL ANIMATIONS
    // ===================================
    const revealElements = document.querySelectorAll('.reveal, .reveal-left, .reveal-right');
    
    function checkReveal() {
        const windowHeight = window.innerHeight;
        const revealPoint = 150;

        revealElements.forEach(element => {
            const elementTop = element.getBoundingClientRect().top;

            if (elementTop < windowHeight - revealPoint) {
                element.classList.add('active');
            }
        });
    }

    window.addEventListener('scroll', checkReveal);
    checkReveal(); // Check on load

    // ===================================
    // SMOOTH SCROLL FOR ANCHOR LINKS
    // ===================================
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href !== '#') {
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        });
    });

    // ===================================
    // COUNTER ANIMATION
    // ===================================
    const counters = document.querySelectorAll('.stat-number');
    let countersAnimated = false;

    function animateCounters() {
        if (countersAnimated) return;
        
        counters.forEach(counter => {
            const target = parseInt(counter.getAttribute('data-count'));
            if (!target) return;
            
            const duration = 2000;
            const increment = target / (duration / 16);
            let current = 0;

            const updateCounter = () => {
                current += increment;
                if (current < target) {
                    counter.textContent = Math.floor(current) + '+';
                    requestAnimationFrame(updateCounter);
                } else {
                    counter.textContent = target + '+';
                }
            };

            updateCounter();
        });
        
        countersAnimated = true;
    }

    // Trigger counter animation when stats section is visible
    const statsSection = document.querySelector('.stats-section');
    if (statsSection) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                }
            });
        }, { threshold: 0.3 });
        
        observer.observe(statsSection);
    }

    // ===================================
    // PRODUCT FILTER
    // ===================================
    const filterBtns = document.querySelectorAll('.filter-btn');
    const productCards = document.querySelectorAll('.product-card');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            // Remove active class from all buttons
            filterBtns.forEach(b => b.classList.remove('active'));
            // Add active class to clicked button
            this.classList.add('active');

            const filter = this.getAttribute('data-filter');

            productCards.forEach(card => {
                if (filter === 'all' || card.getAttribute('data-category') === filter) {
                    card.style.display = 'block';
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }, 100);
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(20px)';
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 300);
                }
            });
        });
    });

    // ===================================
    // TESTIMONIAL SLIDER
    // ===================================
    const testimonials = document.querySelectorAll('.testimonial-card');
    let currentTestimonial = 0;

    function showTestimonial(index) {
        testimonials.forEach((testimonial, i) => {
            testimonial.style.display = i === index ? 'block' : 'none';
        });
    }

    function nextTestimonial() {
        currentTestimonial = (currentTestimonial + 1) % testimonials.length;
        showTestimonial(currentTestimonial);
    }

    if (testimonials.length > 1) {
        setInterval(nextTestimonial, 5000);
    }

    // ===================================
    // PRODUCT MODAL
    // ===================================
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
                const benefits = card.querySelector('.product-benefits')?.innerHTML || '';
                const usage = card.querySelector('.product-usage')?.textContent || '';
                
                // Populate modal
                const modalTitle = productModal.querySelector('.modal-title');
                const modalCategory = productModal.querySelector('.modal-category');
                const modalDescription = productModal.querySelector('.modal-description');
                const modalImage = productModal.querySelector('.modal-image img');
                const modalBenefits = productModal.querySelector('.modal-benefits');
                const modalUsage = productModal.querySelector('.modal-usage');
                
                if (modalTitle) modalTitle.textContent = title;
                if (modalCategory) modalCategory.textContent = category;
                if (modalDescription) modalDescription.textContent = description;
                if (modalImage) modalImage.src = image;
                if (modalBenefits) modalBenefits.innerHTML = benefits;
                if (modalUsage) modalUsage.textContent = usage;
                
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

    // ===================================
    // IMAGE LAZY LOADING
    // ===================================
    const lazyImages = document.querySelectorAll('img[data-src]');
    
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.getAttribute('data-src');
                img.removeAttribute('data-src');
                observer.unobserve(img);
            }
        });
    });

    lazyImages.forEach(img => imageObserver.observe(img));

    // ===================================
    // CROP CARDS HOVER EFFECT
    // ===================================
    const cropCards = document.querySelectorAll('.crop-card');
    
    cropCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            const img = this.querySelector('.crop-image img');
            if (img) img.style.transform = 'scale(1.1)';
        });
        
        card.addEventListener('mouseleave', function() {
            const img = this.querySelector('.crop-image img');
            if (img) img.style.transform = 'scale(1)';
        });
    });

    // ===================================
    // SMOOTH HEADER ON SCROLL
    // ===================================
    const updateHeaderOnScroll = () => {
        const scrolled = window.pageYOffset;
        const header = document.querySelector('.header');
        if (header) {
            if (scrolled > 50) {
                header.style.boxShadow = '0 5px 30px rgba(0, 0, 0, 0.1)';
                header.style.background = 'rgba(255, 255, 255, 0.98)';
            } else {
                header.style.boxShadow = '0 2px 20px rgba(0, 0, 0, 0.08)';
                header.style.background = 'var(--white)';
            }
        }
    };
    
    window.addEventListener('scroll', updateHeaderOnScroll);

    // ===================================
    // FORM VALIDATION
    // ===================================
    const contactForm = document.querySelector('.contact-form');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            const inputs = this.querySelectorAll('.form-input, .form-textarea, input[required], textarea[required]');
            let isValid = true;

            inputs.forEach(input => {
                if (input.hasAttribute('required') && !input.value.trim()) {
                    isValid = false;
                    input.style.borderColor = '#ef4444';
                    input.addEventListener('input', function() {
                        this.style.borderColor = '';
                    }, { once: true });
                }
            });

            if (!isValid) {
                e.preventDefault();
            }
        });
    }

    // ===================================
    // INITIALIZE
    // ===================================
    console.log('Navyakosh Website Initialized - Professional Theme');

    // ===================================
    // CROP TABS AND MODAL
    // ===================================
    const cropTabs = document.querySelectorAll('.crop-tab');
    const cropCategoryLists = document.querySelectorAll('.crop-category-list');
    const cropModal = document.getElementById('crop-modal');
    const cropModalClose = document.querySelector('.crop-modal-close');
    const cropModalTitle = document.querySelector('.crop-modal-crop-name');
    const cropModalBody = document.querySelector('.crop-modal-body');
    
    // Crop usage data
    const cropUsageData = {
        // Grains
        'paddy': {
            name: 'Paddy',
            content: `
                <ul>
                    <li><strong>1st Application:</strong> By using broadcast pattern apply 4-5 bags per acre during land preparation just before seed sowing.</li>
                    <li><strong>Second Dose (Irrigated Crops):</strong> For irrigated crops, a second dose of 2-3 bags can be applied 45-60 days after sowing, just after weeding.</li>
                    <li><strong>Mechanism:</strong> Active microorganisms in the fertilizer (Blue-green algae (anabaena), Azolla algae, Azospirillum, Phosphate Solubilizing Bacteria, etc.) get activated and help plants to get and utilize all macro and micronutrients throughout the crop cycle.</li>
                </ul>
            `
        },
        'maize': {
            name: 'Maize',
            content: `
                <ul>
                    <li><strong>1st Application:</strong> By using broadcast pattern apply 4-5 bags per acre during land preparation just before seed sowing.</li>
                    <li><strong>Second Dose (Irrigated Crops):</strong> For irrigated crops, a second dose of 2-3 bags can be applied 45-60 days after sowing, just after weeding.</li>
                    <li><strong>Mechanism:</strong> Active microorganisms in the fertilizer (Azospirillum, Phosphate Solubilizing Bacteria, Vesicular Arbuscular Mycorrhiza (VAM), etc.) get activated and help plants to get and utilize all macro and micronutrients throughout the crop cycle.</li>
                    <li><strong>Note:</strong> As compared to other cereals, nutrient requirements of maize is more.</li>
                </ul>
            `
        },
        'mustard': {
            name: 'Mustard',
            content: `
                <ul>
                    <li><strong>1st Application:</strong> By using broadcast pattern apply 4-5 bags per acre during land preparation just before seed sowing.</li>
                    <li><strong>Second Dose (Irrigated Crops):</strong> For irrigated crops, a second dose of 2-3 bags can be applied 45-60 days after sowing, just after weeding.</li>
                    <li><strong>Mechanism:</strong> Active microorganisms in the fertilizer (Azotobacter, Phosphate Solubilizing Bacteria, and Sulphur Solubilizing bacteria, etc.) get activated and help plants to get and utilize all macro and micronutrients throughout the crop cycle.</li>
                </ul>
            `
        },
        'bajra': {
            name: 'Bajra (Pearl Millets)',
            content: `
                <ul>
                    <li><strong>1st Application:</strong> By using broadcast pattern apply 4-5 bags per acre during land preparation just before seed sowing.</li>
                    <li><strong>Second Dose (Irrigated Crops):</strong> For irrigated crops, a second dose of 2-3 bags can be applied 45-60 days after sowing, just after weeding.</li>
                    <li><strong>Mechanism:</strong> Active microorganisms in the fertilizer (Phosphate Solubilizing Bacteria, Azospirillum, Vesicular Arbuscular Mycorrhiza (VAM), etc.) get activated and help plants to get and utilize all macro and micronutrients throughout the crop cycle.</li>
                </ul>
            `
        },
        'jowar': {
            name: 'Jowar (Great Millets)',
            content: `
                <ul>
                    <li><strong>1st Application:</strong> By using broadcast pattern apply 4-5 bags per acre during land preparation just before seed sowing.</li>
                    <li><strong>Second Dose (Irrigated Crops):</strong> For irrigated crops, a second dose of 2-3 bags can be applied 45-60 days after sowing, just after weeding.</li>
                    <li><strong>Mechanism:</strong> Active microorganisms in the fertilizer (Phosphate Solubilizing Bacteria, Azospirillum, Vesicular Arbuscular Mycorrhiza (VAM), etc.) get activated and help plants to get and utilize all macro and micronutrients throughout the crop cycle.</li>
                </ul>
            `
        },
        'wheat': {
            name: 'Wheat',
            content: `
                <ul>
                    <li><strong>1st Application:</strong> By using broadcast pattern apply 4-5 bags per acre during land preparation just before seed sowing.</li>
                    <li><strong>Second Dose (Irrigated Crops):</strong> For irrigated crops, a second dose of 2-3 bags can be applied 45-60 days after sowing, just after weeding.</li>
                    <li><strong>Mechanism:</strong> Active microorganisms in the fertilizer (Azospirillium, Azotobacter, Phosphate Solubilizing Bacteria, and Sulphur Solubilizing bacteria, etc.) get activated and help plants to get and utilize all macro and micronutrients throughout the crop cycle.</li>
                </ul>
            `
        },
        // Fruits
        'mango': {
            name: 'Mango',
            content: `
                <ul>
                    <li><strong>Application:</strong> Dig a ring around stem, apply 4-5 kg of Navyakosh Organic fertilizer and cover it with soil.</li>
                    <li><strong>Mechanism:</strong> Active microorganisms in the fertilizer (Mycorrhiza (VAM), Phosphate Solubilizing Bacteria, Azospirillum, Potassium Mobilizing Biofertilizer (KMB), Pseudomonas, etc.) get activated and help plants to get and utilize all macro and micronutrients throughout the crop cycle.</li>
                    <li><strong>Note:</strong> Apply 500 gram fertilizer per plant at the base during seedling transplantation.</li>
                </ul>
            `
        },
        'banana': {
            name: 'Banana',
            content: `
                <ul>
                    <li><strong>Application:</strong> Apply 500 grams Navyakosh Organic Fertilizer per plant at the base during seedling transplantation.</li>
                    <li><strong>Second Application:</strong> Apply 1 Kg Navyakosh Organic Fertilizer per plant at the base after 6 months of seedling transplantation.</li>
                    <li><strong>Mechanism:</strong> Active microorganisms in the fertilizer (Mycorrhiza (VAM), Phosphate Solubilizing Bacteria, Azospirillum, Potassium Mobilizing Biofertilizer (KMB), etc.) get activated and help plants to get and utilize all macro and micronutrients throughout the crop cycle.</li>
                </ul>
            `
        },
        'watermelon': {
            name: 'Watermelon',
            content: `
                <ul>
                    <li><strong>Application:</strong> Apply 50 grams Navyakosh Organic Fertilizer per plant at the base during seedling transplantation.</li>
                    <li><strong>Second Application:</strong> Apply 100 grams Navyakosh Organic Fertilizer per plant at the base after 45 days of seedling transplantation.</li>
                    <li><strong>Mechanism:</strong> Active microorganisms in the fertilizer (Mycorrhiza (VAM), Phosphate Solubilizing Bacteria, Azospirillum, Potassium Mobilizing Biofertilizer (KMB), Pseudomonas, etc.) get activated and help plants to get and utilize all macro and micronutrients throughout the crop cycle.</li>
                </ul>
            `
        },
        'pomegranate': {
            name: 'Pomegranate',
            content: `
                <ul>
                    <li><strong>Application:</strong> Dig a ring around stem, apply 1-2 kg of Navyakosh Organic fertilizer and cover it with soil.</li>
                    <li><strong>Mechanism:</strong> Active microorganisms in the fertilizer (Mycorrhiza (VAM), Phosphate Solubilizing Bacteria, Azospirillum, Potassium Mobilizing Biofertilizer (KMB), Pseudomonas, etc.) get activated and help plants to get and utilize all macro and micronutrients throughout the crop cycle.</li>
                    <li><strong>Note:</strong> Apply 500 gram fertilizer per plant at the base during seedling transplantation.</li>
                </ul>
            `
        },
        'muskmelon': {
            name: 'Muskmelon',
            content: `
                <ul>
                    <li><strong>Application:</strong> Apply 50 grams Navyakosh Organic Fertilizer per plant at the base during seedling transplantation.</li>
                    <li><strong>Second Application:</strong> Apply 100 grams Navyakosh Organic Fertilizer per plant at the base after 45 days of seedling transplantation.</li>
                    <li><strong>Mechanism:</strong> Active microorganisms in the fertilizer (Mycorrhiza (VAM), Phosphate Solubilizing Bacteria, Azospirillum, Potassium Mobilizing Biofertilizer (KMB), Pseudomonas, etc.) get activated and help plants to get and utilize all macro and micronutrients throughout the crop cycle.</li>
                </ul>
            `
        },
        'tomato': {
            name: 'Tomato',
            content: `
                <ul>
                    <li><strong>Application:</strong> Apply 50 grams Navyakosh Organic Fertilizer per plant at the base during seedling transplantation.</li>
                    <li><strong>Second Application:</strong> Apply 100 grams Navyakosh Organic Fertilizer per plant at the base after 45 days of seedling transplantation.</li>
                    <li><strong>Mechanism:</strong> Active microorganisms in the fertilizer (Mycorrhiza (VAM), Phosphate Solubilizing Bacteria, Azotobacter, Potassium Mobilizing Biofertilizer (KMB), etc.) get activated and help plants to get and utilize all macro and micronutrients throughout the crop cycle.</li>
                </ul>
            `
        },
        // Vegetables
        'cucumber': {
            name: 'Cucumber',
            content: `
                <ul>
                    <li><strong>Application:</strong> Apply 50 grams Navyakosh Organic Fertilizer per plant at the base during seedling transplantation.</li>
                    <li><strong>Second Application:</strong> Apply 100 grams Navyakosh Organic Fertilizer per plant at the base after 45 days of seedling transplantation.</li>
                    <li><strong>Mechanism:</strong> Active microorganisms in the fertilizer (Mycorrhiza (VAM), Phosphate Solubilizing Bacteria, Azospirillum, Potassium Mobilizing Biofertilizer (KMB), Pseudomonas, etc.) get activated and help plants to get and utilize all macro and micronutrients throughout the crop cycle.</li>
                    <li><strong>Note:</strong> For Cucumber application is required two times throughout the crop cycle.</li>
                </ul>
            `
        },
        'carrot': {
            name: 'Carrot',
            content: `
                <ul>
                    <li><strong>Application:</strong> By using broadcast pattern apply 4-5 bags per acre during seedbed preparation.</li>
                    <li><strong>Mechanism:</strong> Active microorganisms in the fertilizer (Mycorrhiza (VAM), Phosphate Solubilizing Bacteria, Azospirillum, Potassium Mobilizing Biofertilizer (KMB), Pseudomonas, etc.) get activated and help plants to get and utilize all macro and micronutrients throughout the crop cycle.</li>
                    <li><strong>Note:</strong> For Carrot this fertilizer is required only once throughout the crop cycle.</li>
                </ul>
            `
        },
        'radish': {
            name: 'Radish',
            content: `
                <ul>
                    <li><strong>Application:</strong> By using broadcast pattern apply 4-5 bags per acre during seedbed preparation.</li>
                    <li><strong>Mechanism:</strong> Active microorganisms in the fertilizer (Mycorrhiza (VAM), Phosphate Solubilizing Bacteria, Azospirillum, Potassium Mobilizing Biofertilizer (KMB), Pseudomonas, etc.) get activated and help plants to get and utilize all macro and micronutrients throughout the crop cycle.</li>
                    <li><strong>Note:</strong> For Radish this fertilizer is required only once throughout the crop cycle.</li>
                </ul>
            `
        },
        'cabbage': {
            name: 'Cabbage',
            content: `
                <ul>
                    <li><strong>Application:</strong> Apply 50 grams Navyakosh Organic Fertilizer per plant at the base during seedling transplantation.</li>
                    <li><strong>Mechanism:</strong> Active microorganisms in the fertilizer (Mycorrhiza (VAM), Phosphate Solubilizing Bacteria, Azospirillum, Potassium Mobilizing Biofertilizer (KMB), etc.) get activated and help plants to get and utilize all macro and micronutrients throughout the crop cycle.</li>
                </ul>
            `
        },
        'capsicum': {
            name: 'Capsicum',
            content: `
                <ul>
                    <li><strong>Application:</strong> Apply 50 grams Navyakosh Organic Fertilizer per plant at the base during seedling transplantation.</li>
                    <li><strong>Second Application:</strong> Apply 100 grams Navyakosh Organic Fertilizer per plant at the base after 45 days of seedling transplantation.</li>
                    <li><strong>Mechanism:</strong> Active microorganisms in the fertilizer (Mycorrhiza (VAM), Phosphate Solubilizing Bacteria, Azotobacter, Potassium Mobilizing Biofertilizer (KMB), etc.) get activated and help plants to get and utilize all macro and micronutrients throughout the crop cycle.</li>
                </ul>
            `
        },
        'brinjal': {
            name: 'Brinjal',
            content: `
                <ul>
                    <li><strong>Application:</strong> Apply 50 grams Navyakosh Organic Fertilizer per plant at the base during seedling transplantation.</li>
                    <li><strong>Second Application:</strong> Apply 100 grams Navyakosh Organic Fertilizer per plant at the base after 45 days of seedling transplantation.</li>
                    <li><strong>Mechanism:</strong> Active microorganisms in the fertilizer (Mycorrhiza (VAM), Phosphate Solubilizing Bacteria, Azotobacter, Potassium Mobilizing Biofertilizer (KMB), etc.) get activated and help plants to get and utilize all macro and micronutrients throughout the crop cycle.</li>
                </ul>
            `
        },
        // Nuts & Pulses
        'walnut': {
            name: 'Walnut',
            content: `
                <ul>
                    <li><strong>Application:</strong> Dig a ring around stem, apply 2-5 kg of Navyakosh Organic fertilizer and cover it with soil.</li>
                    <li><strong>Mechanism:</strong> Active microorganisms in the fertilizer (Mycorrhiza (VAM), Phosphate Solubilizing Bacteria, Azospirillum, Potassium Mobilizing Biofertilizer (KMB), Pseudomonas, etc.) get activated and help plants to get and utilize all macro and micronutrients throughout the crop cycle.</li>
                    <li><strong>Note:</strong> Apply 500 gram fertilizer per plant at the base during seedling transplantation.</li>
                </ul>
            `
        },
        'groundnut': {
            name: 'Ground Nut',
            content: `
                <ul>
                    <li><strong>1st Application:</strong> By using broadcast pattern apply 4-5 bags per acre during land preparation just before seed sowing.</li>
                    <li><strong>Second Dose (Irrigated Crops):</strong> For irrigated crops, a second dose of 2-3 bags can be applied 45-60 days after sowing, just after weeding.</li>
                    <li><strong>Mechanism:</strong> Active microorganisms in the fertilizer (Phosphate Solubilizing Bacteria, Rhizobium, Azospirillum, etc.) get activated and help plants to get and utilize all macro and micronutrients throughout the crop cycle.</li>
                </ul>
            `
        },
        'soybean': {
            name: 'Soya Beans',
            content: `
                <ul>
                    <li><strong>1st Application:</strong> By using broadcast pattern apply 4-5 bags per acre during land preparation just before seed sowing.</li>
                    <li><strong>Second Dose (Irrigated Crops):</strong> For irrigated crops, a second dose of 2-3 bags can be applied 45-60 days after sowing, just after weeding.</li>
                    <li><strong>Mechanism:</strong> Active microorganisms in the fertilizer (Rhizobium, Phosphate Solubilizing Bacteria, Vesicular Arbuscular Mycorrhiza (VAM), etc.) get activated and help plants to get and utilize all macro and micronutrients throughout the crop cycle.</li>
                </ul>
            `
        },
        'chickpea': {
            name: 'Chickpea Dal',
            content: `
                <ul>
                    <li><strong>1st Application:</strong> By using broadcast pattern apply 4-5 bags per acre during land preparation just before seed sowing.</li>
                    <li><strong>Second Dose (Irrigated Crops):</strong> For irrigated crops, a second dose of 2-3 bags can be applied 45-60 days after sowing, just after weeding.</li>
                    <li><strong>Mechanism:</strong> Active microorganisms in the fertilizer (Rhizobium, Phosphate Solubilizing Bacteria, Vesicular Arbuscular Mycorrhiza (VAM), etc.) get activated and help plants to get and utilize all macro and micronutrients throughout the crop cycle.</li>
                </ul>
            `
        },
        'turdal': {
            name: 'Tur Dal',
            content: `
                <ul>
                    <li><strong>1st Application:</strong> By using broadcast pattern apply 4-5 bags per acre during land preparation just before seed sowing.</li>
                    <li><strong>Second Dose (Irrigated Crops):</strong> For irrigated crops, a second dose of 2-3 bags can be applied 45-60 days after sowing, just after weeding.</li>
                    <li><strong>Mechanism:</strong> Active microorganisms in the fertilizer (Rhizobium, Phosphate Solubilizing Bacteria, Vesicular Arbuscular Mycorrhiza (VAM), etc.) get activated and help plants to get and utilize all macro and micronutrients throughout the crop cycle.</li>
                </ul>
            `
        },
        'cashewnut': {
            name: 'Cashew Nut',
            content: `
                <ul>
                    <li><strong>Application:</strong> Dig a ring around stem, apply 3-4 kg of Navyakosh Organic fertilizer and cover it with soil.</li>
                    <li><strong>Mechanism:</strong> Active microorganisms in the fertilizer (Mycorrhiza (VAM), Phosphate Solubilizing Bacteria, Azospirillum, Potassium Mobilizing Biofertilizer (KMB), Pseudomonas, etc.) get activated and help plants to get and utilize all macro and micronutrients throughout the crop cycle.</li>
                    <li><strong>Note:</strong> Apply 500 gram fertilizer per plant at the base during seedling transplantation.</li>
                </ul>
            `
        },
        'arecanut': {
            name: 'Areca Nut',
            content: `
                <ul>
                    <li><strong>Application:</strong> Dig a ring around stem, apply 2-3 kg of Navyakosh Organic fertilizer and cover it with soil.</li>
                    <li><strong>Mechanism:</strong> Active microorganisms in the fertilizer (Mycorrhiza (VAM), Phosphate Solubilizing Bacteria, Azospirillum, Potassium Mobilizing Biofertilizer (KMB), Pseudomonas, etc.) get activated and help plants to get and utilize all macro and micronutrients throughout the crop cycle.</li>
                    <li><strong>Note:</strong> Apply 500 gram fertilizer per plant at the base during seedling transplantation.</li>
                </ul>
            `
        },
        // Other Crops
        'cotton': {
            name: 'Cotton',
            content: `
                <ul>
                    <li><strong>1st Application:</strong> By using broadcast pattern apply 4-5 bags per acre during land preparation just before sowing on the ridges.</li>
                    <li><strong>Second Dose (Irrigated Crops):</strong> A second dose of 2-3 bags can be applied 45 days after sowing near the base of plants, just after weeding.</li>
                    <li><strong>Mechanism:</strong> Active microorganisms in the fertilizer (Silicate Solubilizing Bacteria, Phosphate Solubilizing Bacteria, Azospirillum, etc.) get activated and help plants to get and utilize all macro and micronutrients throughout the crop cycle.</li>
                </ul>
            `
        },
        'sugarcane': {
            name: 'Sugarcane',
            content: `
                <ul>
                    <li><strong>1st Application:</strong> Apply 5-6 bags per acre in furrows before planting setts.</li>
                    <li><strong>Second Dose:</strong> Apply 3-4 bags per acre as side dressing after 60-90 days.</li>
                    <li><strong>Mechanism:</strong> Active microorganisms in the fertilizer (Azotobacter, Phosphate Solubilizing Bacteria, Potassium Mobilizing Biofertilizer (KMB), etc.) get activated and help plants to get and utilize all macro and micronutrients throughout the crop cycle.</li>
                </ul>
            `
        },
        'palm': {
            name: 'Palm',
            content: `
                <ul>
                    <li><strong>Application:</strong> Dig a ring around stem, apply 2-5 kg of Navyakosh Organic fertilizer and cover it with soil.</li>
                    <li><strong>Mechanism:</strong> Active microorganisms in the fertilizer (Mycorrhiza (VAM), Phosphate Solubilizing Bacteria, Azospirillum, Potassium Mobilizing Biofertilizer (KMB), Pseudomonas, etc.) get activated and help plants to get and utilize all macro and micronutrients throughout the crop cycle.</li>
                    <li><strong>Note:</strong> Apply 500 gram fertilizer per plant at the base during seedling transplantation.</li>
                </ul>
            `
        },
        'coffee': {
            name: 'Coffee',
            content: `
                <ul>
                    <li><strong>Application:</strong> Dig a ring around stem, apply 2-5 kg of Navyakosh Organic fertilizer and cover it with soil.</li>
                    <li><strong>Mechanism:</strong> Active microorganisms in the fertilizer (Mycorrhiza (VAM), Phosphate Solubilizing Bacteria, Azospirillum, Potassium Mobilizing Biofertilizer (KMB), Pseudomonas, etc.) get activated and help plants to get and utilize all macro and micronutrients throughout the crop cycle.</li>
                    <li><strong>Note:</strong> Apply 500 gram fertilizer per plant at the base during seedling transplantation.</li>
                </ul>
            `
        },
        'tobacco': {
            name: 'Tobacco',
            content: `
                <ul>
                    <li><strong>Application:</strong> Apply 50 grams Navyakosh Organic Fertilizer per plant at the base during seedling transplantation.</li>
                    <li><strong>Second Application:</strong> Apply 100 grams Navyakosh Organic Fertilizer per plant at the base after 45 days of seedling transplantation.</li>
                    <li><strong>Mechanism:</strong> Active microorganisms in the fertilizer (Mycorrhiza (VAM), Phosphate Solubilizing Bacteria, Azospirillum, Potassium Mobilizing Biofertilizer (KMB), etc.) get activated and help plants to get and utilize all macro and micronutrients throughout the crop cycle.</li>
                </ul>
            `
        },
        'coconut': {
            name: 'Coconut',
            content: `
                <ul>
                    <li><strong>Application:</strong> Dig a ring around stem, apply 2-5 kg of Navyakosh Organic fertilizer and cover it with soil.</li>
                    <li><strong>Mechanism:</strong> Active microorganisms in the fertilizer (Mycorrhiza (VAM), Phosphate Solubilizing Bacteria, Azospirillum, Potassium Mobilizing Biofertilizer (KMB), Pseudomonas, etc.) get activated and help plants to get and utilize all macro and micronutrients throughout the crop cycle.</li>
                    <li><strong>Note:</strong> Apply 500 gram fertilizer per plant at the base during seedling transplantation.</li>
                </ul>
            `
        }
    };

    // Crop tabs functionality
    if (cropTabs.length > 0) {
        cropTabs.forEach(tab => {
            tab.addEventListener('click', function() {
                const category = this.getAttribute('data-category');
                
                // Update active tab
                cropTabs.forEach(t => t.classList.remove('active'));
                this.classList.add('active');
                
                // Show corresponding crop list
                cropCategoryLists.forEach(list => {
                    if (list.getAttribute('data-category') === category) {
                        list.classList.add('active');
                    } else {
                        list.classList.remove('active');
                    }
                });
            });
        });
    }

    // Crop modal functionality
    const cropReadMoreBtns = document.querySelectorAll('.crop-read-more-btn');
    
    if (cropReadMoreBtns.length > 0 && cropModal) {
        cropReadMoreBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const cropItem = this.closest('.crop-list-item');
                const cropKey = cropItem.getAttribute('data-crop');
                const cropData = cropUsageData[cropKey];
                
                if (cropData) {
                    cropModalTitle.textContent = cropData.name;
                    cropModalBody.innerHTML = cropData.content;
                    cropModal.classList.add('active');
                    document.body.style.overflow = 'hidden';
                }
            });
        });
        
        // Close modal
        if (cropModalClose) {
            cropModalClose.addEventListener('click', function() {
                cropModal.classList.remove('active');
                document.body.style.overflow = '';
            });
        }
        
        // Close on outside click
        cropModal.addEventListener('click', function(e) {
            if (e.target === cropModal) {
                cropModal.classList.remove('active');
                document.body.style.overflow = '';
            }
        });
        
        // Close on escape
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && cropModal.classList.contains('active')) {
                cropModal.classList.remove('active');
                document.body.style.overflow = '';
            }
        });
    }

    // ===================================
    // PRODUCTS CAROUSEL
    // ===================================
    const carouselTrack = document.querySelector('.products-carousel-track');
    const carouselPrev = document.querySelector('.carousel-prev');
    const carouselNext = document.querySelector('.carousel-next');
    const carouselDots = document.querySelectorAll('.carousel-dot');
    
    if (carouselTrack) {
        const carouselCards = carouselTrack.querySelectorAll('.carousel-product-card');
        let currentIndex = 0;
        let cardsPerView = 3;
        let cardWidth = 0;
        let autoSlideInterval;
        
        // Calculate cards per view based on screen width
        function updateCardsPerView() {
            if (window.innerWidth <= 768) {
                cardsPerView = 1;
            } else if (window.innerWidth <= 1024) {
                cardsPerView = 2;
            } else {
                cardsPerView = 3;
            }
            cardWidth = carouselTrack.parentElement.offsetWidth / cardsPerView;
        }
        
        function updateCarousel() {
            updateCardsPerView();
            const maxIndex = Math.max(0, carouselCards.length - cardsPerView);
            if (currentIndex > maxIndex) currentIndex = maxIndex;
            
            const translateX = currentIndex * (cardWidth + 30); // 30 is the gap
            carouselTrack.style.transform = `translateX(-${translateX}px)`;
            
            // Update dots
            carouselDots.forEach((dot, index) => {
                if (index === currentIndex) {
                    dot.classList.add('active');
                } else {
                    dot.classList.remove('active');
                }
            });
        }
        
        function nextSlide() {
            const maxIndex = Math.max(0, carouselCards.length - cardsPerView);
            currentIndex = (currentIndex + 1) > maxIndex ? 0 : currentIndex + 1;
            updateCarousel();
        }
        
        function prevSlide() {
            const maxIndex = Math.max(0, carouselCards.length - cardsPerView);
            currentIndex = (currentIndex - 1) < 0 ? maxIndex : currentIndex - 1;
            updateCarousel();
        }
        
        function startAutoSlide() {
            autoSlideInterval = setInterval(nextSlide, 4000);
        }
        
        function stopAutoSlide() {
            clearInterval(autoSlideInterval);
        }
        
        // Event listeners
        if (carouselNext) {
            carouselNext.addEventListener('click', function() {
                stopAutoSlide();
                nextSlide();
                startAutoSlide();
            });
        }
        
        if (carouselPrev) {
            carouselPrev.addEventListener('click', function() {
                stopAutoSlide();
                prevSlide();
                startAutoSlide();
            });
        }
        
        carouselDots.forEach((dot, index) => {
            dot.addEventListener('click', function() {
                stopAutoSlide();
                currentIndex = index;
                updateCarousel();
                startAutoSlide();
            });
        });
        
        // Initialize
        updateCarousel();
        startAutoSlide();
        
        // Update on resize
        window.addEventListener('resize', updateCarousel);
        
        // Pause on hover
        carouselTrack.parentElement.addEventListener('mouseenter', stopAutoSlide);
        carouselTrack.parentElement.addEventListener('mouseleave', startAutoSlide);
    }

    // ===================================
    // ORDER MODAL FUNCTIONALITY
    // ===================================
    const orderModal = document.getElementById('orderModal');
    const orderBtns = document.querySelectorAll('.order-btn');
    const closeOrderModal = document.getElementById('closeOrderModal');
    const orderProductName = document.getElementById('orderProductName');
    const orderProductInput = document.getElementById('orderProductInput');
    const orderForm = document.getElementById('orderForm');

    console.log('[v0] Order modal elements:', { orderModal, orderBtns: orderBtns.length, closeOrderModal });

    if (orderModal && orderBtns.length > 0) {
        console.log('[v0] Setting up order modal for', orderBtns.length, 'buttons');
        // Open modal when clicking order button
        orderBtns.forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                const productName = this.getAttribute('data-product');
                console.log('[v0] Order button clicked for:', productName);
                orderProductName.textContent = productName;
                orderProductInput.value = productName;
                orderModal.classList.add('active');
                document.body.style.overflow = 'hidden';
            });
        });

        // Close modal
        if (closeOrderModal) {
            closeOrderModal.addEventListener('click', function() {
                orderModal.classList.remove('active');
                document.body.style.overflow = '';
            });
        }

        // Close modal when clicking outside
        orderModal.addEventListener('click', function(e) {
            if (e.target === orderModal) {
                orderModal.classList.remove('active');
                document.body.style.overflow = '';
            }
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && orderModal.classList.contains('active')) {
                orderModal.classList.remove('active');
                document.body.style.overflow = '';
            }
        });

        // Form submission
        if (orderForm) {
            orderForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                const formData = new FormData(orderForm);
                const data = Object.fromEntries(formData.entries());
                
                // Show loading state
                const submitBtn = orderForm.querySelector('.order-submit-btn');
                const originalText = submitBtn.innerHTML;
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Processing...';
                submitBtn.disabled = true;
                
                // Send form via fetch
                fetch('process-order.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(result => {
                    if (result.success) {
                        // Show success
                        orderModal.querySelector('.order-modal-content').innerHTML = `
                            <div style="text-align: center; padding: 60px 30px;">
                                <div style="width: 80px; height: 80px; border-radius: 50%; background: linear-gradient(135deg, #1e7b3c, #155c2c); display: flex; align-items: center; justify-content: center; margin: 0 auto 24px; color: white; font-size: 2rem;">
                                    <i class="fas fa-check"></i>
                                </div>
                                <h2 style="color: #1e7b3c; margin-bottom: 12px;">Order Submitted!</h2>
                                <p style="color: #666; margin-bottom: 24px;">Thank you for your order. We will contact you shortly.</p>
                                <button onclick="location.reload()" style="background: #1e7b3c; color: white; border: none; padding: 14px 32px; border-radius: 8px; cursor: pointer; font-weight: 600;">Close</button>
                            </div>
                        `;
                    } else {
                        throw new Error(result.message || 'Order failed');
                    }
                })
                .catch(error => {
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                    alert('There was an error processing your order. Please try again or contact us directly.');
                });
            });
        }
    }
});
