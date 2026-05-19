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
});
