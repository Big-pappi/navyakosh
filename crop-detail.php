<?php
/**
 * Navyakosh Crop Detail Page
 * Displays detailed information about each crop solution
 */

// Crop data with multiple images
$crops = [
    'legumes' => [
        'name' => 'Navyakosh for Legumes',
        'title' => 'Premium Bio-Fertilizer for Legumes',
        'description' => 'Enhanced nitrogen fixation and improved pod development for higher yields. Our specially formulated bio-fertilizer contains Rhizobium bacteria that work symbiotically with legume roots.',
        'benefits' => [
            'Enhanced nitrogen fixation up to 40%',
            'Better pod formation and filling',
            'Increased protein content in seeds',
            'Improved root nodulation',
            'Better soil health after harvest',
            'Reduced need for chemical fertilizers'
        ],
        'usage' => '20-30 kg/acre at sowing time. Mix with seeds before planting or apply as soil treatment.',
        'suitable_crops' => 'Groundnuts, Beans, Peas, Lentils, Soybeans, Chickpeas',
        'images' => ['legumes.jpg', 'legume.jpg', 'legume1.jpg', 'Legume2.jpg'],
        'main_image' => 'legumes.jpg'
    ],
    'tobacco' => [
        'name' => 'Navyakosh for Tobacco',
        'title' => 'Quality-Focused Nutrition for Tobacco',
        'description' => 'Quality-focused nutrition for uniform leaf development, texture consistency, and superior tobacco quality. Our formulation ensures optimal nutrient balance for premium leaf production.',
        'benefits' => [
            'Uniform leaf development',
            'Better texture and quality',
            'Enhanced aroma characteristics',
            'Improved curing properties',
            'Soil health restoration',
            'Consistent crop quality'
        ],
        'usage' => '30-40 kg/acre, split application. First at transplanting, second 30 days after.',
        'suitable_crops' => 'Virginia Tobacco, Burley Tobacco, Oriental Tobacco',
        'images' => ['tobacco.jpg', 'tobacco1.jpg', 'tobacco2.jpg'],
        'main_image' => 'tobacco.jpg'
    ],
    'maize' => [
        'name' => 'Navyakosh for Maize',
        'title' => 'Maximum Yield Solution for Maize',
        'description' => 'Maximize grain filling and stalk strength for abundant harvest. Our bio-fertilizer enhances nutrient uptake during critical growth stages.',
        'benefits' => [
            'Improved grain filling by 25-35%',
            'Stronger stalk development',
            'Better root establishment',
            'Enhanced drought tolerance',
            'Uniform cob development',
            'Higher kernel weight'
        ],
        'usage' => '50-75 kg/acre based on soil type. Apply at sowing and knee-high stage.',
        'suitable_crops' => 'Field Corn, Sweet Corn, Popcorn, Baby Corn',
        'images' => ['maize.jpg', 'Maize1.jpg', 'Maize2.jpg', 'Maize3.jpg'],
        'main_image' => 'navyakosh-maize.jpeg'
    ],
    'rice' => [
        'name' => 'Navyakosh for Rice',
        'title' => 'Premium Bio-Fertilizer for Rice Cultivation',
        'description' => 'Improved tillering and grain quality for premium rice production. Specially designed for paddy cultivation with enhanced nutrient release.',
        'benefits' => [
            'Improved tillering by 30%',
            'Better grain quality and size',
            'Enhanced disease resistance',
            'Optimal water use efficiency',
            'Reduced lodging risk',
            'Higher milling recovery'
        ],
        'usage' => '60-80 kg/acre in 2-3 splits. Basal, tillering, and panicle initiation stages.',
        'suitable_crops' => 'Paddy Rice, Upland Rice, Aromatic Rice varieties',
        'images' => ['rice.jpg', 'Rice1.jpg', 'Rice2.jpg', 'Rice3.jpg'],
        'main_image' => 'rice.jpg'
    ],
    'sugarcane' => [
        'name' => 'Navyakosh for Sugarcane',
        'title' => 'High-Yield Solution for Sugarcane',
        'description' => 'Enhanced sucrose content and robust cane growth for better yields. Our formulation supports the long growing cycle of sugarcane.',
        'benefits' => [
            'Increased sucrose content by 15-20%',
            'Robust cane growth',
            'Better ratoon performance',
            'Improved juice quality',
            'Enhanced disease resistance',
            'Higher tonnage per acre'
        ],
        'usage' => '75-100 kg/acre. Apply at planting and earthing-up stages.',
        'suitable_crops' => 'Sugar Cane, Jaggery Cane varieties',
        'images' => ['sugarcane.jpg', 'Sugarcane1.jpg', 'Sugarcane2.jpg', 'Sugarcane3.jpg', 'Sugarcane13.jpg'],
        'main_image' => 'sugarcane.jpg'
    ],
    'palm' => [
        'name' => 'Navyakosh for Palm',
        'title' => 'Long-Term Nutrition for Palm Plantations',
        'description' => 'Optimized nutrition for healthy fronds and increased oil production. Designed for the unique nutritional needs of palm cultivation.',
        'benefits' => [
            'Increased oil yield by 20%',
            'Healthy frond development',
            'Better bunch formation',
            'Enhanced root health',
            'Improved disease resistance',
            'Sustainable long-term growth'
        ],
        'usage' => '2-3 kg per palm, applied around the drip circle. Twice yearly application.',
        'suitable_crops' => 'Oil Palm, Coconut Palm, Date Palm',
        'images' => ['palm.jpg', 'palm2.jpg'],
        'main_image' => 'palm.jpg'
    ],
    'horticulture' => [
        'name' => 'Navyakosh for Horticulture',
        'title' => 'Specialized Solution for Horticultural Crops',
        'description' => 'Premium bio-fertilizer for fruits and vegetables. Enhances flavor, color, and nutritional content of produce.',
        'benefits' => [
            'Enhanced fruit quality',
            'Better color development',
            'Improved shelf life',
            'Higher nutritional content',
            'Uniform fruit size',
            'Organic certification compatible'
        ],
        'usage' => '25-50 kg/acre depending on crop. Apply during active growth.',
        'suitable_crops' => 'Watermelon, Tomatoes, Peppers, Cucumbers, Fruits',
        'images' => ['Horticulture.jpg', 'Horticulture2.jpg', 'Horticulture3.jpg', 'Watermelon.jpg', 'Watermelon2.jpg'],
        'main_image' => 'navyakosh-horticulture.png'
    ],
    'coffee' => [
        'name' => 'Navyakosh for Coffee',
        'title' => 'Premium Bio-Fertilizer for Coffee Plantations',
        'description' => 'Specialized nutrition for superior coffee bean quality and yield. Enhances the characteristic flavors and aromas of coffee.',
        'benefits' => [
            'Enhanced bean quality',
            'Better flavor development',
            'Increased yield per tree',
            'Improved disease resistance',
            'Sustainable soil management',
            'Premium grade production'
        ],
        'usage' => '1-2 kg per tree, applied twice yearly around the base.',
        'suitable_crops' => 'Arabica Coffee, Robusta Coffee',
        'images' => ['coffee.jpg', 'coffee2.jpg'],
        'main_image' => 'coffee.jpg'
    ]
];

// Get crop from URL
$crop_key = isset($_GET['crop']) ? strtolower(htmlspecialchars($_GET['crop'])) : '';

// Check if crop exists
if (!isset($crops[$crop_key])) {
    header('Location: products.php');
    exit;
}

$crop = $crops[$crop_key];

// Filter images that actually exist
$valid_images = [];
foreach ($crop['images'] as $img) {
    if (file_exists(__DIR__ . '/images/' . $img)) {
        $valid_images[] = $img;
    }
}
if (empty($valid_images)) {
    $valid_images = [$crop['main_image']];
}

$page_title = $crop['name'] . ' | Navyakosh Bio-Fertilizers';
$page_description = $crop['description'];

include 'includes/header.php';
?>

    <!-- Page Header -->
    <section class="page-header crop-detail-header">
        <div class="container">
            <h1><?php echo htmlspecialchars($crop['name']); ?></h1>
            <div class="breadcrumb">
                <a href="index.php">Home</a>
                <span>/</span>
                <a href="products.php">Products</a>
                <span>/</span>
                <span><?php echo htmlspecialchars($crop['name']); ?></span>
            </div>
        </div>
    </section>

    <!-- Crop Detail Section -->
    <section class="section crop-detail-section" style="background: var(--white);">
        <div class="container">
            <div class="crop-detail-grid">
                <!-- Image Gallery -->
                <div class="crop-gallery reveal-left">
                    <div class="main-image-container">
                        <img src="images/<?php echo htmlspecialchars($valid_images[0]); ?>" 
                             alt="<?php echo htmlspecialchars($crop['name']); ?>" 
                             class="main-crop-image" 
                             id="mainImage">
                        <div class="image-zoom-hint">
                            <i class="fas fa-search-plus"></i> Click to enlarge
                        </div>
                    </div>
                    
                    <?php if (count($valid_images) > 1): ?>
                    <div class="thumbnail-gallery">
                        <?php foreach ($valid_images as $index => $img): ?>
                        <div class="thumbnail <?php echo $index === 0 ? 'active' : ''; ?>" 
                             onclick="changeImage('images/<?php echo htmlspecialchars($img); ?>', this)">
                            <img src="images/<?php echo htmlspecialchars($img); ?>" 
                                 alt="<?php echo htmlspecialchars($crop['name']); ?> - Image <?php echo $index + 1; ?>">
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                </div>

                <!-- Crop Information -->
                <div class="crop-info reveal-right">
                    <span class="section-badge">
                        <i class="fas fa-seedling"></i>
                        Crop Solution
                    </span>
                    <h2><?php echo htmlspecialchars($crop['title']); ?></h2>
                    <p class="crop-description"><?php echo htmlspecialchars($crop['description']); ?></p>

                    <div class="benefits-section">
                        <h3><i class="fas fa-check-circle"></i> Key Benefits</h3>
                        <ul class="benefits-list">
                            <?php foreach ($crop['benefits'] as $benefit): ?>
                            <li>
                                <i class="fas fa-leaf"></i>
                                <span><?php echo htmlspecialchars($benefit); ?></span>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <div class="usage-section">
                        <h3><i class="fas fa-info-circle"></i> Recommended Usage</h3>
                        <p><?php echo htmlspecialchars($crop['usage']); ?></p>
                    </div>

                    <div class="suitable-crops">
                        <h3><i class="fas fa-tractor"></i> Suitable For</h3>
                        <p><?php echo htmlspecialchars($crop['suitable_crops']); ?></p>
                    </div>

                    <div class="cta-buttons">
                        <a href="contact.php" class="btn btn-primary">
                            <i class="fas fa-phone"></i>
                            Get Quote
                        </a>
                        <a href="https://wa.me/255620636893?text=I'm interested in <?php echo urlencode($crop['name']); ?>" 
                           class="btn btn-outline" style="color: var(--primary); border-color: var(--primary);">
                            <i class="fab fa-whatsapp"></i>
                            WhatsApp Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Products Section -->
    <section class="section crop-detail-related" style="background: var(--light);">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-badge">
                    <i class="fas fa-seedling"></i>
                    More Solutions
                </span>
                <h2 class="section-title">Other <span>Crop Solutions</span></h2>
            </div>

            <div class="crops-grid" style="max-width: 1000px; margin: 0 auto;">
                <?php 
                $count = 0;
                foreach ($crops as $key => $other_crop): 
                    if ($key !== $crop_key && $count < 3):
                        $count++;
                ?>
                <div class="crop-card reveal">
                    <div class="crop-image">
                        <img src="images/<?php echo htmlspecialchars($other_crop['main_image']); ?>" 
                             alt="<?php echo htmlspecialchars($other_crop['name']); ?>">
                    </div>
                    <h3 class="crop-name"><?php echo htmlspecialchars($other_crop['name']); ?></h3>
                    <p class="crop-description">
                        <?php echo htmlspecialchars(substr($other_crop['description'], 0, 80)); ?>...
                    </p>
                    <a href="crop-detail.php?crop=<?php echo $key; ?>" class="crop-link">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                <?php 
                    endif;
                endforeach; 
                ?>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <div class="cta-content reveal">
                <h2>Ready to Boost Your Crop Yield?</h2>
                <p>
                    Contact us today to learn more about <?php echo htmlspecialchars($crop['name']); ?> 
                    and how it can transform your farm.
                </p>
                <a href="contact.php" class="btn btn-primary">
                    <i class="fas fa-phone"></i>
                    Contact Us Today
                </a>
            </div>
        </div>
    </section>

    <style>
        .crop-detail-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: start;
            min-width: 0;
        }

        .crop-gallery {
            position: sticky;
            top: 120px;
            min-width: 0;
        }

        .main-image-container {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow-lg);
            cursor: pointer;
            background: var(--light);
            aspect-ratio: 4 / 3;
        }

        .main-crop-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .main-image-container:hover .main-crop-image {
            transform: scale(1.05);
        }

        .image-zoom-hint {
            position: absolute;
            bottom: 15px;
            right: 15px;
            background: rgba(0,0,0,0.7);
            color: white;
            padding: 8px 15px;
            border-radius: 50px;
            font-size: 0.85rem;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .main-image-container:hover .image-zoom-hint {
            opacity: 1;
        }

        .thumbnail-gallery {
            display: flex;
            gap: 15px;
            margin-top: 20px;
            overflow-x: auto;
            padding: 10px 2px 14px;
            scroll-snap-type: x proximity;
            -webkit-overflow-scrolling: touch;
        }

        .thumbnail {
            flex: 0 0 80px;
            height: 80px;
            border-radius: 12px;
            overflow: hidden;
            cursor: pointer;
            border: 3px solid transparent;
            transition: all 0.3s ease;
            opacity: 0.7;
            scroll-snap-align: start;
        }

        .thumbnail:hover, .thumbnail.active {
            border-color: var(--primary);
            opacity: 1;
            transform: translateY(-5px);
        }

        .thumbnail img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .crop-info h2 {
            font-family: var(--font-secondary);
            font-size: 2.5rem;
            color: var(--dark);
            margin: 15px 0 20px;
            line-height: 1.2;
            overflow-wrap: anywhere;
        }

        .crop-description {
            color: var(--gray);
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 30px;
        }

        .benefits-section, .usage-section, .suitable-crops {
            background: var(--light);
            padding: 25px;
            border-radius: 15px;
            margin-bottom: 20px;
            overflow-wrap: anywhere;
        }

        .benefits-section h3, .usage-section h3, .suitable-crops h3 {
            display: flex;
            align-items: center;
            gap: 10px;
            color: var(--primary);
            font-size: 1.2rem;
            margin-bottom: 15px;
        }

        .benefits-list {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
        }

        .benefits-list li {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            color: var(--dark);
        }

        .benefits-list li i {
            color: var(--primary);
            font-size: 0.9rem;
            margin-top: 6px;
            flex: 0 0 auto;
        }

        .usage-section p, .suitable-crops p {
            color: var(--gray);
            line-height: 1.6;
        }

        .cta-buttons {
            display: flex;
            gap: 15px;
            margin-top: 30px;
            flex-wrap: wrap;
        }

        /* Image Lightbox */
        .lightbox {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.95);
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 10000;
            padding: 20px;
        }

        .lightbox.active {
            display: flex;
        }

        .lightbox img {
            max-width: 90%;
            max-height: 90%;
            border-radius: 10px;
            animation: zoomIn 0.3s ease;
            object-fit: contain;
        }

        .lightbox-close {
            position: absolute;
            top: 30px;
            right: 30px;
            color: white;
            font-size: 2rem;
            cursor: pointer;
            transition: transform 0.3s;
        }

        .lightbox-close:hover {
            transform: rotate(90deg);
        }

        .lightbox-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            color: white;
            font-size: 2rem;
            cursor: pointer;
            padding: 20px;
            transition: opacity 0.3s;
        }

        .lightbox-nav:hover {
            opacity: 0.7;
        }

        .lightbox-prev { left: 20px; }
        .lightbox-next { right: 20px; }

        @keyframes zoomIn {
            from { transform: scale(0.8); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }

        @media (max-width: 1024px) {
            .crop-detail-grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .crop-gallery {
                position: static;
            }

            .benefits-list {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .crop-detail-header {
                padding: 74px 0 46px;
            }

            .crop-detail-header h1 {
                font-size: clamp(2rem, 10vw, 2.6rem);
                line-height: 1.12;
                max-width: 100%;
                overflow-wrap: anywhere;
            }

            .crop-detail-header .breadcrumb {
                flex-wrap: wrap;
                gap: 8px 10px;
                font-size: 0.86rem;
                padding: 0 8px;
            }

            .crop-detail-header .breadcrumb a,
            .crop-detail-header .breadcrumb span {
                overflow-wrap: anywhere;
                min-width: 0;
            }

            .crop-detail-section,
            .crop-detail-related {
                padding: 52px 0;
            }

            .crop-detail-grid {
                gap: 30px;
            }

            .main-image-container {
                border-radius: 14px;
                aspect-ratio: 1 / 0.82;
            }

            .main-image-container:hover .main-crop-image {
                transform: none;
            }

            .image-zoom-hint {
                opacity: 1;
                right: 10px;
                bottom: 10px;
                width: 38px;
                height: 38px;
                padding: 0;
                border-radius: 50%;
                font-size: 0;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .image-zoom-hint i {
                font-size: 0.95rem;
            }

            .thumbnail-gallery {
                display: grid;
                grid-template-columns: repeat(4, 1fr);
                gap: 10px;
                margin-top: 12px;
                padding: 0;
                overflow: visible;
            }

            .thumbnail {
                width: 100%;
                height: auto;
                aspect-ratio: 1;
                border-radius: 10px;
                border-width: 2px;
            }

            .thumbnail:hover,
            .thumbnail.active {
                transform: none;
            }

            .crop-info h2 {
                font-size: 1.8rem;
                line-height: 1.2;
                margin-top: 12px;
            }

            .crop-description {
                font-size: 0.98rem;
                line-height: 1.65;
                margin-bottom: 22px;
            }

            .benefits-section,
            .usage-section,
            .suitable-crops {
                padding: 20px;
                border-radius: 12px;
                margin-bottom: 16px;
            }

            .benefits-section h3,
            .usage-section h3,
            .suitable-crops h3 {
                font-size: 1.05rem;
                align-items: flex-start;
            }

            .benefits-list {
                gap: 10px;
            }

            .cta-buttons {
                flex-direction: column;
                gap: 12px;
            }

            .cta-buttons .btn {
                width: 100%;
                justify-content: center;
                padding-left: 18px;
                padding-right: 18px;
                text-align: center;
            }

            .crop-detail-related .crops-grid {
                grid-template-columns: 1fr;
                max-width: 420px !important;
            }

            .crop-detail-related .crop-card {
                padding: 22px;
                border-radius: 16px;
            }

            .crop-detail-related .crop-description {
                margin-bottom: 16px;
            }

            .lightbox {
                padding: 14px;
            }

            .lightbox img {
                max-width: 100%;
                max-height: 78vh;
            }

            .lightbox-close {
                top: 14px;
                right: 16px;
                font-size: 1.8rem;
            }

            .lightbox-nav {
                top: auto;
                bottom: 18px;
                transform: none;
                font-size: 1.4rem;
                padding: 14px;
                background: rgba(0, 0, 0, 0.35);
                border-radius: 999px;
            }

            .lightbox-prev {
                left: 18px;
            }

            .lightbox-next {
                right: 18px;
            }
        }

        @media (max-width: 480px) {
            .crop-detail-section .container,
            .crop-detail-related .container {
                padding: 0 16px;
            }

            .main-image-container {
                aspect-ratio: 1 / 0.9;
            }

            .crop-info h2 {
                font-size: 1.55rem;
            }

            .crop-description {
                font-size: 0.94rem;
            }

            .section-badge {
                max-width: 100%;
                white-space: normal;
                border-radius: 12px;
            }

            .benefits-list li {
                font-size: 0.94rem;
            }

            .crop-detail-related .section-title {
                font-size: 1.75rem;
            }
        }
    </style>

    <!-- Lightbox -->
    <div class="lightbox" id="lightbox" onclick="closeLightbox()">
        <span class="lightbox-close" onclick="closeLightbox()">&times;</span>
        <span class="lightbox-nav lightbox-prev" onclick="event.stopPropagation(); navigateLightbox(-1)"><i class="fas fa-chevron-left"></i></span>
        <img src="" alt="Enlarged image" id="lightboxImage">
        <span class="lightbox-nav lightbox-next" onclick="event.stopPropagation(); navigateLightbox(1)"><i class="fas fa-chevron-right"></i></span>
    </div>

    <script>
        // Image Gallery Functions
        function changeImage(src, thumbnail) {
            document.getElementById('mainImage').src = src;
            document.querySelectorAll('.thumbnail').forEach(t => t.classList.remove('active'));
            thumbnail.classList.add('active');
        }

        // Lightbox Functions
        const images = <?php echo json_encode(array_map(function($img) { return 'images/' . $img; }, $valid_images)); ?>;
        let currentImageIndex = 0;

        document.querySelector('.main-image-container').addEventListener('click', function() {
            currentImageIndex = images.indexOf(document.getElementById('mainImage').src.split('/').pop());
            if (currentImageIndex === -1) currentImageIndex = 0;
            openLightbox(images[currentImageIndex]);
        });

        function openLightbox(src) {
            document.getElementById('lightboxImage').src = src;
            document.getElementById('lightbox').classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeLightbox() {
            document.getElementById('lightbox').classList.remove('active');
            document.body.style.overflow = '';
        }

        function navigateLightbox(direction) {
            currentImageIndex = (currentImageIndex + direction + images.length) % images.length;
            document.getElementById('lightboxImage').src = images[currentImageIndex];
        }

        // Keyboard navigation
        document.addEventListener('keydown', function(e) {
            if (document.getElementById('lightbox').classList.contains('active')) {
                if (e.key === 'Escape') closeLightbox();
                if (e.key === 'ArrowLeft') navigateLightbox(-1);
                if (e.key === 'ArrowRight') navigateLightbox(1);
            }
        });
    </script>

<?php include 'includes/footer.php'; ?>
