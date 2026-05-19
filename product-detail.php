<?php
/**
 * Navyakosh Product Detail Page with Order Form
 * Uses the hosting server's PHP mail() function for orders
 */

// Server mail configuration
$mail_config = [
    'from_email' => 'support@bizlogicsolutions.com',
    'from_name' => 'Navyakosh Bio-Fertilizers',
    'to_email' => 'chedybreezy@gmail.com',
];

$success_message = '';
$error_message = '';

// Get product from URL
$product_slug = isset($_GET['product']) ? htmlspecialchars($_GET['product']) : 'soil-activator';

// Product data
$products = [
    'soil-activator' => [
        'name' => 'Navyakosh Soil Activator',
        'category' => 'Soil Booster',
        'image' => 'images/bio-fertilizer.jpg',
        'price' => 'Contact for Price',
        'description' => 'Rejuvenate your soil with Navyakosh Soil Activator. Our unique formula replenishes essential nutrients, improves soil structure, and enhances microbial activity for optimal plant growth. Transform tired soil into fertile ground and watch your plants grow with Navyakosh Soil Activator.',
        'benefits' => [
            'Replenishes essential soil nutrients',
            'Improves soil structure and texture',
            'Enhances beneficial microbial activity',
            'Promotes healthy root development',
            'Increases water retention capacity',
            'Reduces soil compaction'
        ],
        'usage' => 'Apply 25-50 kg per acre based on soil condition. Mix thoroughly with topsoil before planting or apply around existing plants.',
        'components' => 'Phosphate Solubilizing Bacteria (PSB), Potassium Solubilizing Bacteria (KSB), Mycorrhiza (VAM), Azotobacter, Organic matter'
    ],
    'flower-booster' => [
        'name' => 'Navyakosh Flower Booster',
        'category' => 'Flower Care',
        'image' => 'images/fertilizer2.webp',
        'price' => 'Rs. 262.50',
        'description' => 'Enhance the beauty of your flowers with Navyakosh Flower Booster. Our unique mix of nutrients enriches the soil, supports strong root growth, and fosters plentiful blooming. Transform your garden with vibrant flowers and long lasting blossoms using Navyakosh Flower Booster.',
        'benefits' => [
            'Promotes abundant flowering',
            'Enhances flower color and fragrance',
            'Supports strong root growth',
            'Extends blooming period',
            'Improves plant immunity',
            'Safe for all flowering plants'
        ],
        'usage' => 'Apply 50-100 grams per plant during blooming season. Repeat every 15-20 days for continuous flowering.',
        'components' => 'Phosphate Solubilizing Bacteria, Potassium Mobilizing Biofertilizer (KMB), Mycorrhiza (VAM), NPK blend, Micronutrients'
    ],
    'cacti-succulent' => [
        'name' => 'Navyakosh for Cacti & Succulent',
        'category' => 'Plant Care',
        'image' => 'images/fertilizers.webp',
        'price' => 'Contact for Price',
        'description' => 'Nourish your cacti and succulents with Navyakosh Cacti and Succulents. Formulated to meet the unique nutritional needs of these resilient plants, this specialized blend promotes healthy growth and vibrant foliage. Give your desert darlings the care they deserve with Navyakosh Cacti and Succulents.',
        'benefits' => [
            'Specially formulated for desert plants',
            'Promotes healthy, compact growth',
            'Enhances natural plant colors',
            'Improves drought resistance',
            'Balanced slow-release nutrition',
            'Prevents root rot with proper drainage support'
        ],
        'usage' => 'Apply 20-30 grams per pot during growing season. Water lightly after application. Avoid over-fertilizing.',
        'components' => 'Low-nitrogen formula, Phosphate Solubilizing Bacteria, Potassium Solubilizing Bacteria, Sand and perlite mix, Micronutrients'
    ],
    'garden-fertilizer' => [
        'name' => 'Navyakosh Organic Fertilizers for Garden (1kg)',
        'category' => 'Garden Care',
        'image' => 'images/front.jpeg',
        'price' => 'Rs. 150.00',
        'description' => 'Boost your garden and flowers with the 1kg pack of Crop-Specific Navyakosh Organic Fertilizer from LCB Fertilizers. Designed for home gardeners, kitchen gardeners who want higher yields, healthier soil, and sustainable farming. Navyakosh tackles key pain points like low crop output, high input costs, water scarcity, and soil degradation.',
        'benefits' => [
            'Perfect for home and kitchen gardens',
            'Improves soil health by 32-74%',
            'Reduces irrigation needs by 33%',
            'Increases yield by 15-35%',
            'Cost-effective one-time application',
            '100% organic and eco-friendly'
        ],
        'usage' => 'Apply 50-100 grams per plant during seedling transplantation. For vegetables, apply around the base and water thoroughly.',
        'components' => 'Mycorrhiza (VAM), Phosphate Solubilizing Bacteria, Azospirillum, Rhizobium, Azotobacter, NPK, Blue-Green Algae'
    ],
    'microbial-consortium' => [
        'name' => 'Navyakosh Microbial Consortium (1kg)',
        'category' => 'Professional Grade',
        'image' => 'images/soil-health.jpg',
        'price' => 'Rs. 1,500.00',
        'description' => 'Navyakosh Microbial Consortium is a high-efficiency microbial inoculum developed by LCB Fertilizers Pvt. Ltd. for advanced organic fertilizer production. Each packet is designed to convert up to 2 metric tons of organic biomass into nutrient-rich biofertilizer within 7-10 days.',
        'benefits' => [
            'Contains 18-22 beneficial microorganisms',
            'Converts 2 metric tons of biomass',
            'Produces nutrient-rich biofertilizer in 7-10 days',
            'Supports nitrogen fixation and phosphorus solubilization',
            'Enhances soil organic carbon',
            'Ideal for large-scale organic farming'
        ],
        'usage' => 'Mix 1kg consortium with 2 metric tons of organic biomass. Maintain proper moisture and turn the pile every 3-4 days. Ready in 7-10 days.',
        'components' => 'Synergistic blend of 18-22 beneficial microorganisms including nitrogen fixers, phosphorus solubilizers, and nutrient mobilizers'
    ],
    '50kg-pack' => [
        'name' => 'Navyakosh Organic Fertilizer 50Kg Pack',
        'category' => 'Farm Grade',
        'image' => 'images/navyakosh-maize.jpeg',
        'price' => 'Rs. 999.00',
        'description' => 'Boost your farm productivity with the 50kg pack of Crop-Specific Navyakosh Organic Fertilizer from LCB Fertilizers. Designed for farmers who want higher yields, healthier soil, and sustainable farming. Navyakosh tackles key pain points like low crop output, high input costs, water scarcity, and soil degradation.',
        'benefits' => [
            'Field trials prove 4.95% increase in wheat yield',
            'Cuts irrigation needs by 33% through SAP technology',
            'Reduces chemical fertilizer use by 30-50%',
            'Boosts soil organic matter by 32-74%',
            'Backed by government support',
            'Suitable for all major crops'
        ],
        'usage' => 'Apply 4-5 bags (200-250 kg) per acre during land preparation. For irrigated crops, apply second dose of 2-3 bags after 45-60 days.',
        'components' => 'Complete microbial blend including PSB, Azospirillum, Rhizobium, Azotobacter, NPK, Mycorrhiza (VAM), KMB, and Super Absorbent Polymer (SAP)'
    ]
];

// Get current product data
$product = isset($products[$product_slug]) ? $products[$product_slug] : $products['soil-activator'];

// Process order form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize inputs
    $firstName = htmlspecialchars(trim($_POST['firstName'] ?? ''));
    $lastName = htmlspecialchars(trim($_POST['lastName'] ?? ''));
    $email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars(trim($_POST['phone'] ?? ''));
    $address = htmlspecialchars(trim($_POST['address'] ?? ''));
    $city = htmlspecialchars(trim($_POST['city'] ?? ''));
    $quantity = htmlspecialchars(trim($_POST['quantity'] ?? '1'));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));
    $productName = htmlspecialchars(trim($_POST['productName'] ?? $product['name']));
    
    // Validation
    $errors = [];
    if (empty($firstName)) $errors[] = 'First name is required';
    if (empty($lastName)) $errors[] = 'Last name is required';
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Valid email is required';
    if (empty($phone)) $errors[] = 'Phone number is required';
    if (empty($address)) $errors[] = 'Address is required';
    
    if (empty($errors)) {
        // Build email content
        $email_subject = "New Product Order: $productName - $firstName $lastName";
        
        $email_body = "
        <html>
        <head>
            <style>
                body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
                .container { max-width: 600px; margin: 0 auto; padding: 20px; }
                .header { background: #1e7b3c; color: white; padding: 20px; text-align: center; }
                .content { padding: 20px; background: #f5f5f5; }
                .field { margin-bottom: 15px; }
                .label { font-weight: bold; color: #1e7b3c; }
                .value { margin-top: 5px; }
                .product-info { background: #fff; padding: 15px; border-radius: 10px; margin-bottom: 20px; border-left: 4px solid #1e7b3c; }
                .footer { text-align: center; padding: 20px; font-size: 12px; color: #666; }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='header'>
                    <h1>New Product Order</h1>
                </div>
                <div class='content'>
                    <div class='product-info'>
                        <h3 style='color: #1e7b3c; margin-top: 0;'>Product Ordered</h3>
                        <p><strong>Product:</strong> $productName</p>
                        <p><strong>Quantity:</strong> $quantity</p>
                    </div>
                    
                    <h3 style='color: #1e7b3c;'>Customer Details</h3>
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
                        <div class='label'>Delivery Address:</div>
                        <div class='value'>$address" . ($city ? ", $city" : "") . "</div>
                    </div>
                    " . ($message ? "
                    <div class='field'>
                        <div class='label'>Additional Notes:</div>
                        <div class='value'>$message</div>
                    </div>
                    " : "") . "
                </div>
                <div class='footer'>
                    This order was placed from the Navyakosh website product page.
                </div>
            </div>
        </body>
        </html>
        ";
        
        // Send email using the hosting server
        $sent = sendServerEmail(
            $mail_config,
            $mail_config['to_email'],
            $email_subject,
            $email_body,
            $email,
            "$firstName $lastName"
        );
        
        if ($sent) {
            $success_message = "Thank you, $firstName! Your order for $productName has been received. We will contact you within 24 hours to confirm your order.";
        } else {
            $error_message = "Sorry, there was an error processing your order. Please try again or contact us directly at " . $mail_config['to_email'];
        }
    } else {
        $error_message = implode('<br>', $errors);
    }
}

/**
 * Send email through the hosting server.
 */
function sendServerEmail($config, $to, $subject, $body, $reply_to = '', $reply_to_name = '') {
    $headers = [
        'MIME-Version: 1.0',
        'Content-Type: text/html; charset=UTF-8',
        'From: ' . formatEmailHeader($config['from_name'], $config['from_email']),
        'X-Mailer: PHP/' . phpversion()
    ];
    
    if ($reply_to) {
        $headers[] = 'Reply-To: ' . formatEmailHeader($reply_to_name, $reply_to);
    }
    
    $safe_subject = str_replace(["\r", "\n"], '', $subject);
    return mail($to, $safe_subject, $body, implode("\r\n", $headers));
}

function formatEmailHeader($name, $email) {
    $clean_name = str_replace(['"', "\r", "\n"], '', $name);
    $clean_email = filter_var($email, FILTER_SANITIZE_EMAIL);

    return '"' . $clean_name . '" <' . $clean_email . '>';
}

$page_title = $product['name'] . ' | Navyakosh Bio-Fertilizers';
$page_description = substr($product['description'], 0, 160);

include 'includes/header.php';
?>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1><?php echo $product['name']; ?></h1>
            <div class="breadcrumb">
                <a href="index.php">Home</a>
                <span>/</span>
                <a href="products.php">Products</a>
                <span>/</span>
                <span><?php echo $product['name']; ?></span>
            </div>
        </div>
    </section>

    <!-- Product Detail Section -->
    <section class="section product-detail-section">
        <div class="container">
            <div class="product-detail-grid">
                <!-- Product Image -->
                <div class="product-detail-image reveal-left">
                    <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                    <span class="product-badge"><?php echo $product['category']; ?></span>
                </div>
                
                <!-- Product Info -->
                <div class="product-detail-info reveal-right">
                    <span class="product-category"><?php echo $product['category']; ?></span>
                    <h1 class="product-name"><?php echo $product['name']; ?></h1>
                    <p class="product-price"><?php echo $product['price']; ?></p>
                    
                    <div class="product-description">
                        <p><?php echo $product['description']; ?></p>
                    </div>
                    
                    <div class="product-benefits-list">
                        <h3>Key Benefits</h3>
                        <ul>
                            <?php foreach ($product['benefits'] as $benefit): ?>
                            <li><i class="fas fa-check"></i> <?php echo $benefit; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    
                    <div class="product-usage-info">
                        <h3>Usage Instructions</h3>
                        <p><?php echo $product['usage']; ?></p>
                    </div>
                    
                    <div class="product-components">
                        <h3>Key Components</h3>
                        <p><?php echo $product['components']; ?></p>
                    </div>
                    
                    <a href="#order-form" class="btn btn-primary btn-lg">
                        <i class="fas fa-shopping-cart"></i>
                        Order Now
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Order Form Section -->
    <section class="section order-form-section" id="order-form">
        <div class="container">
            <div class="order-form-wrapper">
                <div class="order-form-info reveal-left">
                    <span class="section-badge">
                        <i class="fas fa-shopping-bag"></i>
                        Place Your Order
                    </span>
                    <h2>Order <span><?php echo $product['name']; ?></span></h2>
                    <p>Fill out the form below to place your order. We will contact you within 24 hours to confirm your order and arrange delivery.</p>
                    
                    <div class="order-benefits">
                        <div class="order-benefit">
                            <div class="order-benefit-icon">
                                <i class="fas fa-truck"></i>
                            </div>
                            <div>
                                <h4>Fast Delivery</h4>
                                <p>Delivery within 3-5 business days</p>
                            </div>
                        </div>
                        <div class="order-benefit">
                            <div class="order-benefit-icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <div>
                                <h4>Quality Guaranteed</h4>
                                <p>100% authentic products</p>
                            </div>
                        </div>
                        <div class="order-benefit">
                            <div class="order-benefit-icon">
                                <i class="fas fa-headset"></i>
                            </div>
                            <div>
                                <h4>Expert Support</h4>
                                <p>Free agricultural consultation</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="order-form-container reveal-right">
                    <?php if ($success_message): ?>
                    <div class="alert alert-success">
                        <div class="alert-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                        </div>
                        <div><?php echo $success_message; ?></div>
                    </div>
                    <?php endif; ?>
                    
                    <?php if ($error_message): ?>
                    <div class="alert alert-error">
                        <div class="alert-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                        </div>
                        <div><?php echo $error_message; ?></div>
                    </div>
                    <?php endif; ?>
                    
                    <form class="order-form" method="POST">
                        <input type="hidden" name="productName" value="<?php echo $product['name']; ?>">
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label>First Name <span class="required">*</span></label>
                                <input type="text" name="firstName" placeholder="Your First Name" required value="<?php echo htmlspecialchars($_POST['firstName'] ?? ''); ?>">
                            </div>
                            <div class="form-group">
                                <label>Last Name <span class="required">*</span></label>
                                <input type="text" name="lastName" placeholder="Your Last Name" required value="<?php echo htmlspecialchars($_POST['lastName'] ?? ''); ?>">
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label>Email Address <span class="required">*</span></label>
                                <input type="email" name="email" placeholder="youremail@example.com" required value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
                            </div>
                            <div class="form-group">
                                <label>Phone Number <span class="required">*</span></label>
                                <input type="tel" name="phone" placeholder="+255 734 567 890" required value="<?php echo htmlspecialchars($_POST['phone'] ?? ''); ?>">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label>Delivery Address <span class="required">*</span></label>
                            <input type="text" name="address" placeholder="Street Address" required value="<?php echo htmlspecialchars($_POST['address'] ?? ''); ?>">
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label>City</label>
                                <input type="text" name="city" placeholder="City" value="<?php echo htmlspecialchars($_POST['city'] ?? ''); ?>">
                            </div>
                            <div class="form-group">
                                <label>Quantity</label>
                                <select name="quantity">
                                    <option value="1">1 Unit</option>
                                    <option value="2">2 Units</option>
                                    <option value="3">3 Units</option>
                                    <option value="5">5 Units</option>
                                    <option value="10">10 Units</option>
                                    <option value="20+">20+ Units (Bulk Order)</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label>Additional Notes</label>
                            <textarea name="message" rows="4" placeholder="Any special instructions or questions..."><?php echo htmlspecialchars($_POST['message'] ?? ''); ?></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-block">
                            <i class="fas fa-paper-plane"></i>
                            Submit Order
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Products -->
    <section class="section related-products">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-badge">
                    <i class="fas fa-leaf"></i>
                    Related Products
                </span>
                <h2 class="section-title">You May Also <span>Like</span></h2>
            </div>
            
            <div class="related-products-grid">
                <?php 
                $count = 0;
                foreach ($products as $slug => $prod): 
                    if ($slug !== $product_slug && $count < 3):
                        $count++;
                ?>
                <div class="carousel-product-card reveal">
                    <div class="carousel-product-image">
                        <img src="<?php echo $prod['image']; ?>" alt="<?php echo $prod['name']; ?>">
                        <span class="product-badge"><?php echo $prod['category']; ?></span>
                    </div>
                    <div class="carousel-product-content">
                        <span class="product-category"><?php echo $prod['category']; ?></span>
                        <h3 class="product-title"><?php echo $prod['name']; ?></h3>
                        <p class="product-description"><?php echo substr($prod['description'], 0, 100) . '...'; ?></p>
                        <a href="product-detail.php?product=<?php echo $slug; ?>" class="product-btn">View Details</a>
                    </div>
                </div>
                <?php 
                    endif;
                endforeach; 
                ?>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
