<?php
/**
 * Navyakosh Crop Detail Page
 * Displays detailed information about each crop solution
 * With integrated order form using server mail
 */

// Server mail configuration (same as contact.php)
$mail_config = [
    'from_email' => 'support@bizlogicsolutions.com',
    'from_name' => 'Navyakosh Bio-Fertilizers',
    'to_email' => 'chedybreezy@gmail.com',
];

$order_success_message = '';
$order_error_message = '';

/**
 * Send email through the hosting server.
 */
function sendProductOrderEmail($config, $to, $subject, $body, $reply_to = '', $reply_to_name = '') {
    $headers = [
        'MIME-Version: 1.0',
        'Content-Type: text/html; charset=UTF-8',
        'From: ' . formatProductEmailHeader($config['from_name'], $config['from_email']),
        'X-Mailer: PHP/' . phpversion()
    ];
    
    if ($reply_to) {
        $headers[] = 'Reply-To: ' . formatProductEmailHeader($reply_to_name, $reply_to);
    }
    
    $safe_subject = str_replace(["\r", "\n"], '', $subject);
    return mail($to, $safe_subject, $body, implode("\r\n", $headers));
}

function formatProductEmailHeader($name, $email) {
    $clean_name = str_replace(['"', "\r", "\n"], '', $name);
    $clean_email = filter_var($email, FILTER_SANITIZE_EMAIL);
    return '"' . $clean_name . '" <' . $clean_email . '>';
}

// Crop data with multiple images and detailed usage guides
$crops = [
    'legumes' => [
        'name' => 'Navyakosh for Legumes',
        'title' => 'Premium Organic Bio-Fertilizer for Legumes',
        'description' => 'Enhanced nitrogen fixation and improved pod development for higher yields. Our specially formulated organic bio-fertilizer contains Rhizobium bacteria that work symbiotically with legume roots.',
        'benefits' => [
            'Enhanced nitrogen fixation up to 40%',
            'Better pod formation and filling',
            'Increased protein content in seeds',
            'Improved root nodulation',
            'Better soil health after harvest',
            'Reduced need for chemical fertilizers'
        ],
        'usage_guide' => [
            'first_application' => 'By using broadcast pattern apply 4-5 bags per acre during land preparation just before seed sowing.',
            'second_dose' => 'For irrigated crops, a second dose of 2-3 bags can be applied 45-60 days after sowing, just after weeding.',
            'mechanism' => 'Active microorganisms in the fertilizer (Rhizobium, Phosphate Solubilizing Bacteria, Vesicular Arbuscular Mycorrhiza (VAM), etc.) get activated and help plants to get and utilize all macro and micronutrients throughout the crop cycle.',
            'note' => ''
        ],
        'suitable_crops' => 'Groundnuts, Soya Beans, Chickpea (Channa Dal), Tur Dal, Beans, Peas, Lentils',
        'images' => ['legumes.jpg', 'legume.jpg', 'legume1.jpg', 'Legume2.jpg'],
        'main_image' => 'legumes.jpg'
    ],
    'tobacco' => [
        'name' => 'Navyakosh for Tobacco',
        'title' => 'Quality-Focused Organic Bio-Fertilizer for Tobacco',
        'description' => 'Quality-focused nutrition for uniform leaf development, texture consistency, and superior tobacco quality. Our organic formulation ensures optimal nutrient balance for premium leaf production.',
        'benefits' => [
            'Uniform leaf development',
            'Better texture and quality',
            'Enhanced aroma characteristics',
            'Improved curing properties',
            'Soil health restoration',
            'Consistent crop quality'
        ],
        'usage_guide' => [
            'first_application' => 'By using broadcast pattern apply 4-5 bags per acre during land preparation just before sowing on the ridges.',
            'second_dose' => 'A second dose of 2-3 bags can be applied 45 days after sowing near the base of plants, just after weeding.',
            'mechanism' => 'Active microorganisms in the fertilizer (Silicate Solubilizing Bacteria, Phosphate Solubilizing Bacteria, Azospirillum, etc.) get activated and help plants to get and utilize all macro and micronutrients throughout the crop cycle.',
            'note' => ''
        ],
        'suitable_crops' => 'Virginia Tobacco, Burley Tobacco, Oriental Tobacco',
        'images' => ['tobacco.jpg', 'tobacco1.jpg', 'tobacco2.jpg'],
        'main_image' => 'tobacco.jpg'
    ],
    'maize' => [
        'name' => 'Navyakosh for Maize',
        'title' => 'Maximum Yield Organic Bio-Fertilizer for Maize',
        'description' => 'Maximize grain filling and stalk strength for abundant harvest. Our organic bio-fertilizer enhances nutrient uptake during critical growth stages through active microorganisms.',
        'benefits' => [
            'Improved grain filling by 25-35%',
            'Stronger stalk development',
            'Better root establishment',
            'Enhanced drought tolerance',
            'Uniform cob development',
            'Higher kernel weight'
        ],
        'usage_guide' => [
            'first_application' => 'By using broadcast pattern apply 4-5 bags per acre during land preparation just before seed sowing.',
            'second_dose' => 'For irrigated crops, a second dose of 2-3 bags can be applied 45-60 days after sowing, just after weeding.',
            'mechanism' => 'Active microorganisms in the fertilizer (Phosphate Solubilizing Bacteria, Azospirillum, Vesicular Arbuscular Mycorrhiza (VAM), etc.) get activated and help plants to get and utilize all macro and micronutrients throughout the crop cycle.',
            'note' => ''
        ],
        'suitable_crops' => 'Field Corn, Sweet Corn, Popcorn, Baby Corn',
        'images' => ['maize.jpg', 'Maize1.jpg', 'Maize2.jpg', 'Maize3.jpg'],
        'main_image' => 'navyakosh-maize.jpeg'
    ],
    'rice' => [
        'name' => 'Navyakosh for Rice (Paddy)',
        'title' => 'Premium Organic Bio-Fertilizer for Rice Cultivation',
        'description' => 'Improved tillering and grain quality for premium rice production. Specially designed organic bio-fertilizer for paddy cultivation with enhanced nutrient release through beneficial microorganisms.',
        'benefits' => [
            'Improved tillering by 30%',
            'Better grain quality and size',
            'Enhanced disease resistance',
            'Optimal water use efficiency',
            'Reduced lodging risk',
            'Higher milling recovery'
        ],
        'usage_guide' => [
            'first_application' => 'By using broadcast pattern apply 4-5 bags per acre during land preparation just before transplanting.',
            'second_dose' => 'For irrigated crops, a second dose of 2-3 bags can be applied 45-60 days after transplanting, just after weeding.',
            'mechanism' => 'Active microorganisms in the fertilizer (Azospirillum, Phosphate Solubilizing Bacteria, Vesicular Arbuscular Mycorrhiza (VAM), etc.) get activated and help plants to get and utilize all macro and micronutrients throughout the crop cycle.',
            'note' => ''
        ],
        'suitable_crops' => 'Paddy Rice, Upland Rice, Aromatic Rice varieties',
        'images' => ['rice.jpg', 'Rice1.jpg', 'Rice2.jpg', 'Rice3.jpg'],
        'main_image' => 'rice.jpg'
    ],
    'sugarcane' => [
        'name' => 'Navyakosh for Sugarcane',
        'title' => 'High-Yield Organic Bio-Fertilizer for Sugarcane',
        'description' => 'Enhanced sucrose content and robust cane growth for better yields. Our organic formulation supports the long growing cycle of sugarcane through beneficial microorganisms.',
        'benefits' => [
            'Increased sucrose content by 15-20%',
            'Robust cane growth',
            'Better ratoon performance',
            'Improved juice quality',
            'Enhanced disease resistance',
            'Higher tonnage per acre'
        ],
        'usage_guide' => [
            'first_application' => 'By using broadcast pattern apply 4-5 bags per acre during land preparation just before planting.',
            'second_dose' => 'A second dose of 2-3 bags can be applied 60-90 days after planting near the base of plants.',
            'mechanism' => 'Active microorganisms in the fertilizer (Phosphate Solubilizing Bacteria, Azotobacter, Vesicular Arbuscular Mycorrhiza (VAM), etc.) get activated and help plants to get and utilize all macro and micronutrients throughout the crop cycle.',
            'note' => ''
        ],
        'suitable_crops' => 'Sugar Cane, Jaggery Cane varieties',
        'images' => ['sugarcane.jpg', 'Sugarcane1.jpg', 'Sugarcane2.jpg', 'Sugarcane3.jpg', 'Sugarcane13.jpg'],
        'main_image' => 'sugarcane.jpg'
    ],
    'palm' => [
        'name' => 'Navyakosh for Palm',
        'title' => 'Long-Term Organic Bio-Fertilizer for Palm Plantations',
        'description' => 'Optimized nutrition for healthy fronds and increased oil production. Designed for the unique nutritional needs of palm cultivation using beneficial microorganisms.',
        'benefits' => [
            'Increased oil yield by 20%',
            'Healthy frond development',
            'Better bunch formation',
            'Enhanced root health',
            'Improved disease resistance',
            'Sustainable long-term growth'
        ],
        'usage_guide' => [
            'first_application' => 'Dig a ring around stem, apply 2-5 kg of Navyakosh Organic fertilizer and cover it with soil.',
            'second_dose' => '',
            'mechanism' => 'Active microorganisms in the fertilizer (Mycorrhiza (VAM), Phosphate Solubilizing Bacteria, Azospirillum, Potassium Mobilizing Biofertilizer (KMB), Pseudomonas, etc.) get activated and help plants to get and utilize all macro and micronutrients throughout the crop cycle.',
            'note' => 'Apply 500 gram fertilizer per plant at the base during seedling transplantation.'
        ],
        'suitable_crops' => 'Oil Palm, Coconut Palm, Date Palm, Areca Nut',
        'images' => ['palm.jpg', 'palm2.jpg'],
        'main_image' => 'palm.jpg'
    ],
    'horticulture' => [
        'name' => 'Navyakosh for Horticulture',
        'title' => 'Specialized Organic Bio-Fertilizer for Horticultural Crops',
        'description' => 'Premium organic bio-fertilizer for fruits and vegetables. Enhances flavor, color, and nutritional content of produce through active microorganisms.',
        'benefits' => [
            'Enhanced fruit quality',
            'Better color development',
            'Improved shelf life',
            'Higher nutritional content',
            'Uniform fruit size',
            'Organic certification compatible'
        ],
        'usage_guide' => [
            'first_application' => 'Apply 50 grams Navyakosh Organic Fertilizer per plant at the base during seedling transplantation.',
            'second_dose' => 'Apply 100 grams Navyakosh Organic Fertilizer per plant at the base after 45 days of seedling transplantation.',
            'mechanism' => 'Active microorganisms in the fertilizer (Mycorrhiza (VAM), Phosphate Solubilizing Bacteria, Azospirillum, Potassium Mobilizing Biofertilizer (KMB), Pseudomonas, etc.) get activated and help plants to get and utilize all macro and micronutrients throughout the crop cycle.',
            'note' => ''
        ],
        'suitable_crops' => 'Watermelon, Muskmelon, Tomatoes, Brinjal, Capsicum, Cabbage, Carrot, Radish, Peppers, Cucumbers',
        'images' => ['Horticulture.jpg', 'Horticulture2.jpg', 'Horticulture3.jpg', 'Watermelon.jpg', 'Watermelon2.jpg'],
        'main_image' => 'navyakosh-horticulture.png'
    ],
    'coffee' => [
        'name' => 'Navyakosh for Coffee',
        'title' => 'Premium Organic Bio-Fertilizer for Coffee Plantations',
        'description' => 'Specialized nutrition for superior coffee bean quality and yield. Enhances the characteristic flavors and aromas of coffee through beneficial microorganisms.',
        'benefits' => [
            'Enhanced bean quality',
            'Better flavor development',
            'Increased yield per tree',
            'Improved disease resistance',
            'Sustainable soil management',
            'Premium grade production'
        ],
        'usage_guide' => [
            'first_application' => 'Dig a ring around stem, apply 2-3 kg of Navyakosh Organic fertilizer and cover it with soil.',
            'second_dose' => '',
            'mechanism' => 'Active microorganisms in the fertilizer (Mycorrhiza (VAM), Phosphate Solubilizing Bacteria, Azospirillum, Potassium Mobilizing Biofertilizer (KMB), Pseudomonas, etc.) get activated and help plants to get and utilize all macro and micronutrients throughout the crop cycle.',
            'note' => 'Apply 500 gram fertilizer per plant at the base during seedling transplantation.'
        ],
        'suitable_crops' => 'Arabica Coffee, Robusta Coffee',
        'images' => ['coffee.jpg', 'coffee2.jpg'],
        'main_image' => 'coffee.jpg'
    ],
    'wheat' => [
        'name' => 'Navyakosh for Wheat',
        'title' => 'Premium Organic Bio-Fertilizer for Wheat',
        'description' => 'Enhanced grain development and better yields for wheat cultivation. Our organic bio-fertilizer promotes healthy tillering and grain filling.',
        'benefits' => [
            'Improved tillering',
            'Better grain quality',
            'Enhanced disease resistance',
            'Higher yield per acre',
            'Improved soil health',
            'Better grain weight'
        ],
        'usage_guide' => [
            'first_application' => 'By using broadcast pattern apply 4-5 bags per acre during land preparation just before seed sowing.',
            'second_dose' => 'For irrigated crops, a second dose of 2-3 bags can be applied 45-60 days after sowing, just after weeding.',
            'mechanism' => 'Active microorganisms in the fertilizer (Azospirillum, Azotobacter, Phosphate Solubilizing Bacteria, and Sulphur Solubilizing bacteria, etc.) get activated and help plants to get and utilize all macro and micronutrients throughout the crop cycle.',
            'note' => ''
        ],
        'suitable_crops' => 'Wheat, Durum Wheat',
        'images' => ['wheat.jpg'],
        'main_image' => 'wheat.jpg'
    ],
    'cotton' => [
        'name' => 'Navyakosh for Cotton',
        'title' => 'Premium Organic Bio-Fertilizer for Cotton',
        'description' => 'Enhanced boll development and fiber quality for cotton cultivation. Our organic bio-fertilizer promotes healthy plant growth and better yields.',
        'benefits' => [
            'Better boll development',
            'Improved fiber quality',
            'Enhanced pest resistance',
            'Higher yield per acre',
            'Soil health improvement',
            'Better staple length'
        ],
        'usage_guide' => [
            'first_application' => 'By using broadcast pattern apply 4-5 bags per acre during land preparation just before sowing on the ridges.',
            'second_dose' => 'A second dose of 2-3 bags can be applied 45 days after sowing near the base of plants, just after weeding.',
            'mechanism' => 'Active microorganisms in the fertilizer (Silicate Solubilizing Bacteria, Phosphate Solubilizing Bacteria, Azospirillum, etc.) get activated and help plants to get and utilize all macro and micronutrients throughout the crop cycle.',
            'note' => ''
        ],
        'suitable_crops' => 'Cotton, BT Cotton',
        'images' => ['cotton.jpeg'],
        'main_image' => 'cotton.jpeg'
    ],
    'banana' => [
        'name' => 'Navyakosh for Banana',
        'title' => 'Premium Organic Bio-Fertilizer for Banana',
        'description' => 'Enhanced bunch development and fruit quality for banana cultivation. Specially formulated for the heavy nutrient requirements of banana plants.',
        'benefits' => [
            'Better bunch weight',
            'Improved fruit quality',
            'Enhanced disease resistance',
            'Faster growth',
            'Better soil health',
            'Higher yield per plant'
        ],
        'usage_guide' => [
            'first_application' => 'Apply 500 grams Navyakosh Organic Fertilizer per plant at the base during seedling transplantation.',
            'second_dose' => 'Apply 1 Kg Navyakosh Organic Fertilizer per plant at the base after 6 months of seedling transplantation.',
            'mechanism' => 'Active microorganisms in the fertilizer (Mycorrhiza (VAM), Phosphate Solubilizing Bacteria, Azospirillum, Potassium Mobilizing Biofertilizer (KMB), etc.) get activated and help plants to get and utilize all macro and micronutrients throughout the crop cycle.',
            'note' => ''
        ],
        'suitable_crops' => 'Banana, Plantain',
        'images' => ['banana.jpg'],
        'main_image' => 'banana.jpg'
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

// Process order form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['order_product'])) {
    // Sanitize inputs
    $firstName = htmlspecialchars(trim($_POST['firstName'] ?? ''));
    $lastName = htmlspecialchars(trim($_POST['lastName'] ?? ''));
    $email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars(trim($_POST['phone'] ?? ''));
    $quantity = htmlspecialchars(trim($_POST['quantity'] ?? ''));
    $farmSize = htmlspecialchars(trim($_POST['farmSize'] ?? ''));
    $location = htmlspecialchars(trim($_POST['location'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));
    $productName = htmlspecialchars($crop['name']);
    
    // Validation
    $errors = [];
    if (empty($firstName)) $errors[] = 'First name is required';
    if (empty($lastName)) $errors[] = 'Last name is required';
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Valid email is required';
    if (empty($phone)) $errors[] = 'Phone number is required';
    
    if (empty($errors)) {
        // Build email content
        $email_subject = "Product Order Request: $productName - $firstName $lastName";
        
        $email_body = "
        <html>
        <head>
            <style>
                body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
                .container { max-width: 600px; margin: 0 auto; padding: 20px; }
                .header { background: #1e7b3c; color: white; padding: 20px; text-align: center; }
                .product-highlight { background: #e8f5e9; padding: 20px; border-radius: 10px; margin: 20px 0; border-left: 4px solid #1e7b3c; }
                .content { padding: 20px; background: #f5f5f5; }
                .field { margin-bottom: 15px; }
                .label { font-weight: bold; color: #1e7b3c; }
                .value { margin-top: 5px; }
                .footer { text-align: center; padding: 20px; font-size: 12px; color: #666; }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='header'>
                    <h1>New Product Order Request</h1>
                </div>
                <div class='product-highlight'>
                    <h2 style='margin: 0 0 10px 0; color: #1e7b3c;'>Product: $productName</h2>
                    <p style='margin: 0; color: #555;'>A customer is interested in ordering this product.</p>
                </div>
                <div class='content'>
                    <h3 style='color: #1e7b3c; border-bottom: 2px solid #1e7b3c; padding-bottom: 10px;'>Customer Information</h3>
                    <div class='field'>
                        <div class='label'>Name:</div>
                        <div class='value'>$firstName $lastName</div>
                    </div>
                    <div class='field'>
                        <div class='label'>Email:</div>
                        <div class='value'>$email</div>
                    </div>
                    <div class='field'>
                        <div class='label'>Phone:</div>
                        <div class='value'>$phone</div>
                    </div>
                    <div class='field'>
                        <div class='label'>Location:</div>
                        <div class='value'>" . ($location ?: 'Not provided') . "</div>
                    </div>
                    <h3 style='color: #1e7b3c; border-bottom: 2px solid #1e7b3c; padding-bottom: 10px; margin-top: 25px;'>Order Details</h3>
                    <div class='field'>
                        <div class='label'>Product:</div>
                        <div class='value'>$productName</div>
                    </div>
                    <div class='field'>
                        <div class='label'>Quantity Needed:</div>
                        <div class='value'>" . ($quantity ?: 'Not specified') . "</div>
                    </div>
                    <div class='field'>
                        <div class='label'>Farm Size:</div>
                        <div class='value'>" . ($farmSize ?: 'Not specified') . "</div>
                    </div>
                    <div class='field'>
                        <div class='label'>Additional Message:</div>
                        <div class='value'>" . ($message ?: 'No additional message') . "</div>
                    </div>
                </div>
                <div class='footer'>
                    This order request was sent from the Navyakosh website product page.
                </div>
            </div>
        </body>
        </html>
        ";
        
        // Send email using the hosting server
        $sent = sendProductOrderEmail(
            $mail_config,
            $mail_config['to_email'],
            $email_subject,
            $email_body,
            $email,
            "$firstName $lastName"
        );
        
        if ($sent) {
            $order_success_message = "Thank you, $firstName! Your order request for <strong>$productName</strong> has been submitted successfully. Our team will contact you within 24 hours.";
        } else {
            $order_error_message = "Sorry, there was an error sending your order request. Please try again or contact us directly at " . $mail_config['to_email'];
        }
    } else {
        $order_error_message = implode('<br>', $errors);
    }
}

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

                    <div class="suitable-crops">
                        <h3><i class="fas fa-tractor"></i> Suitable For</h3>
                        <p><?php echo htmlspecialchars($crop['suitable_crops']); ?></p>
                    </div>

                    <div class="cta-buttons">
                        <a href="#usage-guide" class="btn btn-secondary" style="background: var(--secondary); color: var(--dark);">
                            <i class="fas fa-book-open"></i>
                            How to Use
                        </a>
                        <a href="#order-form" class="btn btn-primary">
                            <i class="fas fa-shopping-cart"></i>
                            Order Now
                        </a>
                        <a href="https://wa.me/255684316177?text=I'm interested in <?php echo urlencode($crop['name']); ?>" 
                           class="btn btn-outline" style="color: var(--primary); border-color: var(--primary);">
                            <i class="fab fa-whatsapp"></i>
                            WhatsApp Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Usage Guide Section -->
    <section class="section usage-guide-section" id="usage-guide" style="background: linear-gradient(135deg, #1e7b3c 0%, #2e8b57 100%);">
        <div class="container">
            <div class="section-header reveal" style="color: white;">
                <span class="section-badge" style="background: rgba(255,255,255,0.2); color: white;">
                    <i class="fas fa-book-open"></i>
                    Usage Guide
                </span>
                <h2 class="section-title" style="color: white;">How to Use <span style="color: #90EE90;"><?php echo htmlspecialchars($crop['name']); ?></span></h2>
            </div>

            <div class="usage-guide-content reveal">
                <div class="usage-guide-card">
                    <?php if (!empty($crop['usage_guide']['first_application'])): ?>
                    <div class="usage-item">
                        <div class="usage-icon">
                            <i class="fas fa-seedling"></i>
                        </div>
                        <div class="usage-details">
                            <h4>1st Application</h4>
                            <p><?php echo htmlspecialchars($crop['usage_guide']['first_application']); ?></p>
                        </div>
                    </div>
                    <?php endif; ?>

                    <?php if (!empty($crop['usage_guide']['second_dose'])): ?>
                    <div class="usage-item">
                        <div class="usage-icon">
                            <i class="fas fa-tint"></i>
                        </div>
                        <div class="usage-details">
                            <h4>Second Dose (Irrigated Crops)</h4>
                            <p><?php echo htmlspecialchars($crop['usage_guide']['second_dose']); ?></p>
                        </div>
                    </div>
                    <?php endif; ?>

                    <div class="usage-item mechanism">
                        <div class="usage-icon">
                            <i class="fas fa-microscope"></i>
                        </div>
                        <div class="usage-details">
                            <h4>Mechanism</h4>
                            <p><?php echo htmlspecialchars($crop['usage_guide']['mechanism']); ?></p>
                        </div>
                    </div>

                    <?php if (!empty($crop['usage_guide']['note'])): ?>
                    <div class="usage-item note">
                        <div class="usage-icon">
                            <i class="fas fa-exclamation-circle"></i>
                        </div>
                        <div class="usage-details">
                            <h4>Note</h4>
                            <p><?php echo htmlspecialchars($crop['usage_guide']['note']); ?></p>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>

                <div class="organic-badge-container">
                    <div class="organic-badge">
                        <i class="fas fa-leaf"></i>
                        <span>100% Organic Bio-Fertilizer</span>
                    </div>
                    <p class="organic-note">Navyakosh contains active microorganisms that work naturally with your soil to provide sustainable nutrition for your crops.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Order Form Section -->
    <section class="section order-form-section" id="order-form" style="background: linear-gradient(135deg, #e8f5e9 0%, #c8e6c9 100%);">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-badge">
                    <i class="fas fa-shopping-cart"></i>
                    Place Your Order
                </span>
                <h2 class="section-title">Order <span><?php echo htmlspecialchars($crop['name']); ?></span></h2>
                <p class="section-description">
                    Fill out the form below with your details and we will contact you to complete your order.
                </p>
            </div>

            <div class="order-form-container reveal">
                <?php if ($order_success_message): ?>
                <div class="alert alert-success">
                    <div class="alert-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    </div>
                    <div><?php echo $order_success_message; ?></div>
                </div>
                <?php endif; ?>
                
                <?php if ($order_error_message): ?>
                <div class="alert alert-error">
                    <div class="alert-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                    </div>
                    <div><?php echo $order_error_message; ?></div>
                </div>
                <?php endif; ?>

                <div class="order-form-wrapper">
                    <!-- Product Summary -->
                    <div class="product-summary">
                        <div class="product-summary-image">
                            <img src="images/<?php echo htmlspecialchars($valid_images[0]); ?>" alt="<?php echo htmlspecialchars($crop['name']); ?>">
                        </div>
                        <div class="product-summary-info">
                            <h3><?php echo htmlspecialchars($crop['name']); ?></h3>
                            <p><?php echo htmlspecialchars(substr($crop['description'], 0, 120)); ?>...</p>
                            <div class="product-summary-meta">
                                <span><i class="fas fa-leaf"></i> Organic</span>
                                <span><i class="fas fa-check-circle"></i> Certified</span>
                            </div>
                        </div>
                    </div>

                    <!-- Order Form -->
                    <form class="order-form" method="POST" action="crop-detail.php?crop=<?php echo $crop_key; ?>#order-form">
                        <input type="hidden" name="order_product" value="1">
                        <input type="hidden" name="product_name" value="<?php echo htmlspecialchars($crop['name']); ?>">
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label>First Name <span class="required">*</span></label>
                                <div class="input-wrapper">
                                    <input type="text" name="firstName" placeholder="Your First Name" required value="<?php echo htmlspecialchars($_POST['firstName'] ?? ''); ?>">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Last Name <span class="required">*</span></label>
                                <div class="input-wrapper">
                                    <input type="text" name="lastName" placeholder="Your Last Name" required value="<?php echo htmlspecialchars($_POST['lastName'] ?? ''); ?>">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label>Email Address <span class="required">*</span></label>
                                <div class="input-wrapper">
                                    <input type="email" name="email" placeholder="youremail@example.com" required value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Phone Number <span class="required">*</span></label>
                                <div class="input-wrapper">
                                    <input type="tel" name="phone" placeholder="+255 734 567 890" required value="<?php echo htmlspecialchars($_POST['phone'] ?? ''); ?>">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label>Quantity Needed</label>
                                <div class="input-wrapper">
                                    <select name="quantity">
                                        <option value="">Select quantity</option>
                                        <option value="1-10 kg">1-10 kg</option>
                                        <option value="10-25 kg">10-25 kg</option>
                                        <option value="25-50 kg">25-50 kg</option>
                                        <option value="50-100 kg">50-100 kg</option>
                                        <option value="100+ kg">100+ kg (Bulk Order)</option>
                                    </select>
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Farm Size</label>
                                <div class="input-wrapper">
                                    <select name="farmSize">
                                        <option value="">Select farm size</option>
                                        <option value="Less than 1 acre">Less than 1 acre</option>
                                        <option value="1-5 acres">1-5 acres</option>
                                        <option value="5-10 acres">5-10 acres</option>
                                        <option value="10-50 acres">10-50 acres</option>
                                        <option value="50+ acres">50+ acres</option>
                                    </select>
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Your Location</label>
                            <div class="input-wrapper">
                                <input type="text" name="location" placeholder="City, Region, Country" value="<?php echo htmlspecialchars($_POST['location'] ?? ''); ?>">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Additional Message</label>
                            <div class="input-wrapper textarea-wrapper">
                                <textarea name="message" rows="4" placeholder="Tell us about your specific requirements, delivery preferences, or any questions you have..."><?php echo htmlspecialchars($_POST['message'] ?? ''); ?></textarea>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-submit">
                            <i class="fas fa-paper-plane"></i>
                            Submit Order Request
                        </button>
                    </form>
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
                    Order <?php echo htmlspecialchars($crop['name']); ?> today 
                    and transform your farm with organic bio-fertilizers.
                </p>
                <a href="#order-form" class="btn btn-primary">
                    <i class="fas fa-shopping-cart"></i>
                    Order Now
                </a>
            </div>
        </div>
    </section>

    <style>
        html {
            scroll-behavior: smooth;
        }

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

        /* Usage Guide Section Styles */
        .usage-guide-section {
            padding: 80px 0;
        }

        .usage-guide-content {
            max-width: 900px;
            margin: 0 auto;
        }

        .usage-guide-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2);
        }

        .usage-item {
            display: flex;
            gap: 20px;
            padding: 25px 0;
            border-bottom: 1px solid rgba(30, 123, 60, 0.15);
        }

        .usage-item:last-child {
            border-bottom: none;
        }

        .usage-item.mechanism {
            background: linear-gradient(135deg, rgba(30, 123, 60, 0.08) 0%, rgba(46, 139, 87, 0.08) 100%);
            margin: 20px -40px;
            padding: 25px 40px;
            border-bottom: none;
        }

        .usage-item.note {
            background: rgba(255, 193, 7, 0.1);
            margin: 20px -40px -40px -40px;
            padding: 25px 40px;
            border-radius: 0 0 20px 20px;
            border-bottom: none;
        }

        .usage-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #1e7b3c 0%, #2e8b57 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .usage-icon i {
            color: white;
            font-size: 1.3rem;
        }

        .usage-item.note .usage-icon {
            background: linear-gradient(135deg, #f57c00 0%, #ff9800 100%);
        }

        .usage-details h4 {
            font-family: var(--font-secondary);
            font-size: 1.2rem;
            color: #1e7b3c;
            margin: 0 0 10px 0;
            font-weight: 700;
        }

        .usage-details p {
            color: var(--gray);
            margin: 0;
            line-height: 1.7;
            font-size: 1rem;
        }

        .organic-badge-container {
            margin-top: 40px;
            text-align: center;
        }

        .organic-badge {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            background: rgba(255, 255, 255, 0.95);
            padding: 15px 30px;
            border-radius: 50px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .organic-badge i {
            font-size: 1.5rem;
            color: #1e7b3c;
        }

        .organic-badge span {
            font-weight: 700;
            color: #1e7b3c;
            font-size: 1.1rem;
        }

        .organic-note {
            color: rgba(255, 255, 255, 0.9);
            margin-top: 20px;
            font-size: 0.95rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        @media (max-width: 768px) {
            .usage-guide-section {
                padding: 50px 0;
            }

            .usage-guide-card {
                padding: 25px;
            }

            .usage-item {
                flex-direction: column;
                gap: 15px;
            }

            .usage-item.mechanism,
            .usage-item.note {
                margin: 20px -25px;
                padding: 20px 25px;
            }

            .usage-item.note {
                margin-bottom: -25px;
            }
        }

        /* Order Form Section Styles */
        .order-form-section {
            padding: 80px 0;
        }

        .order-form-container {
            max-width: 900px;
            margin: 0 auto;
        }

        .order-form-wrapper {
            background: var(--white);
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .product-summary {
            display: flex;
            gap: 20px;
            padding: 25px;
            background: linear-gradient(135deg, #1e7b3c 0%, #2e8b4c 100%);
            color: white;
        }

        .product-summary-image {
            width: 100px;
            height: 100px;
            border-radius: 12px;
            overflow: hidden;
            flex-shrink: 0;
            border: 3px solid rgba(255, 255, 255, 0.3);
        }

        .product-summary-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .product-summary-info h3 {
            margin: 0 0 8px 0;
            font-size: 1.3rem;
        }

        .product-summary-info p {
            margin: 0 0 12px 0;
            font-size: 0.9rem;
            opacity: 0.9;
            line-height: 1.5;
        }

        .product-summary-meta {
            display: flex;
            gap: 15px;
            font-size: 0.85rem;
        }

        .product-summary-meta span {
            display: flex;
            align-items: center;
            gap: 5px;
            background: rgba(255, 255, 255, 0.2);
            padding: 4px 10px;
            border-radius: 20px;
        }

        .order-form {
            padding: 30px;
        }

        .order-form .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 20px;
        }

        .order-form .form-group {
            margin-bottom: 0;
        }

        .order-form .form-group:not(.form-row .form-group) {
            margin-bottom: 20px;
        }

        .order-form label {
            display: block;
            font-weight: 600;
            color: var(--dark);
            margin-bottom: 8px;
            font-size: 0.95rem;
        }

        .order-form .required {
            color: #e53935;
        }

        .order-form .input-wrapper {
            position: relative;
        }

        .order-form .input-wrapper input,
        .order-form .input-wrapper select,
        .order-form .input-wrapper textarea {
            width: 100%;
            padding: 14px 45px 14px 16px;
            border: 2px solid #e0e0e0;
            border-radius: 12px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: var(--white);
            color: var(--dark);
        }

        .order-form .input-wrapper textarea {
            padding-right: 16px;
            resize: vertical;
            min-height: 120px;
        }

        .order-form .input-wrapper input:focus,
        .order-form .input-wrapper select:focus,
        .order-form .input-wrapper textarea:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(30, 123, 60, 0.1);
        }

        .order-form .input-wrapper svg {
            position: absolute;
            right: 14px;
            top: 50%;
            transform: translateY(-50%);
            width: 20px;
            height: 20px;
            stroke: #999;
            pointer-events: none;
        }

        .order-form .textarea-wrapper svg {
            display: none;
        }

        .order-form .btn-submit {
            width: 100%;
            padding: 16px 30px;
            font-size: 1.1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-top: 10px;
        }

        /* Alert Styles */
        .alert {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            padding: 20px;
            border-radius: 12px;
            margin-bottom: 25px;
        }

        .alert-success {
            background: #e8f5e9;
            border: 1px solid #4caf50;
            color: #2e7d32;
        }

        .alert-error {
            background: #ffebee;
            border: 1px solid #f44336;
            color: #c62828;
        }

        .alert-icon {
            width: 24px;
            height: 24px;
            flex-shrink: 0;
        }

        .alert-icon svg {
            width: 100%;
            height: 100%;
        }

        .alert-success .alert-icon svg {
            stroke: #4caf50;
        }

        .alert-error .alert-icon svg {
            stroke: #f44336;
        }

        @media (max-width: 768px) {
            .order-form-section {
                padding: 50px 0;
            }

            .order-form .form-row {
                grid-template-columns: 1fr;
                gap: 0;
            }

            .order-form .form-row .form-group {
                margin-bottom: 20px;
            }

            .product-summary {
                flex-direction: column;
                text-align: center;
                align-items: center;
            }

            .product-summary-meta {
                justify-content: center;
            }

            .order-form {
                padding: 20px;
            }
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
