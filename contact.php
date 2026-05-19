<?php
/**
 * Navyakosh Contact Page with Server Email
 * Uses the hosting server's PHP mail() function.
 */

// Server mail configuration
$mail_config = [
    'from_email' => 'support@bizlogicsolutions.com',
    'from_name' => 'Navyakosh Bio-Fertilizers',
    'to_email' => 'chedybreezy@gmail.com',
];

$success_message = '';
$error_message = '';

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize inputs
    $firstName = htmlspecialchars(trim($_POST['firstName'] ?? ''));
    $lastName = htmlspecialchars(trim($_POST['lastName'] ?? ''));
    $email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars(trim($_POST['phone'] ?? ''));
    $subject = htmlspecialchars(trim($_POST['subject'] ?? ''));
    $cropType = htmlspecialchars(trim($_POST['cropType'] ?? ''));
    $farmSize = htmlspecialchars(trim($_POST['farmSize'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));
    $newsletter = isset($_POST['newsletter']) ? 'Yes' : 'No';
    
    // Validation
    $errors = [];
    if (empty($firstName)) $errors[] = 'First name is required';
    if (empty($lastName)) $errors[] = 'Last name is required';
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Valid email is required';
    if (empty($subject)) $errors[] = 'Subject is required';
    if (empty($message)) $errors[] = 'Message is required';
    
    if (empty($errors)) {
        // Build email content
        $email_subject = "New Contact Form: $subject - $firstName $lastName";
        
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
                .footer { text-align: center; padding: 20px; font-size: 12px; color: #666; }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='header'>
                    <h1>New Contact Form Submission</h1>
                </div>
                <div class='content'>
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
                        <div class='value'>" . ($phone ?: 'Not provided') . "</div>
                    </div>
                    <div class='field'>
                        <div class='label'>Subject:</div>
                        <div class='value'>$subject</div>
                    </div>
                    <div class='field'>
                        <div class='label'>Crop Type:</div>
                        <div class='value'>" . ($cropType ?: 'Not specified') . "</div>
                    </div>
                    <div class='field'>
                        <div class='label'>Farm Size:</div>
                        <div class='value'>" . ($farmSize ?: 'Not specified') . "</div>
                    </div>
                    <div class='field'>
                        <div class='label'>Message:</div>
                        <div class='value'>$message</div>
                    </div>
                    <div class='field'>
                        <div class='label'>Newsletter Subscription:</div>
                        <div class='value'>$newsletter</div>
                    </div>
                </div>
                <div class='footer'>
                    This email was sent from the Navyakosh website contact form.
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
            $success_message = "Thank you, $firstName! Your message has been sent successfully. We will get back to you within 24 hours.";
        } else {
            $error_message = "Sorry, there was an error sending your message. Please try again or contact us directly at " . $mail_config['to_email'];
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
?>


   
<?php
/**
 * Navyakosh Home Page
 */
$page_title = 'Biz-Logic-Navyakosh | Premium Bio-Fertilizers for Sustainable Agriculture';
$page_description = 'Navyakosh Bio-Fertilizer - Premium bio-fertilizers for sustainable agriculture. Enhance crop yield and soil health naturally.';

include 'includes/header.php';
?>

    <!-- Contact Hero -->
     
    <section class="contact-hero">
        <!--
        <div class="hero-particles">
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
        </div>
       -->
        <div class="contact-hero-content">
            <h1>Get In Touch</h1>
            <p>Ready to transform your farming? Our agricultural experts are here to help you achieve sustainable success.</p>
        </div>
    </section>

    <!-- Contact Cards -->
    <div class="contact-cards-wrapper">
        <div class="contact-cards">
            <div class="contact-card">
                <div class="contact-card-icon">
                    <svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                </div>
                <h3>Visit Our Office</h3>
                <p>Upanga, Mindu St<br>Dar Es Salaam,<br>Tanzania</p>
                <a href="#" class="contact-card-link">
                    Get Directions
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
            </div>
            
            <div class="contact-card">
                <div class="contact-card-icon">
                    <svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                </div>
                <h3>Call Us Anytime</h3>
                <p>Main: +255 684 316 177</p>
                <a href="tel:+255684316177" class="contact-card-link">
                    Call Now
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
            </div>
            
            <div class="contact-card">
                <div class="contact-card-icon">
                    <svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                </div>
                <h3>Email Us</h3>
                <p>General: info@bizlogicsolutions.com</p>
                <a href="mailto:info@bizlogicsolutions.com" class="contact-card-link">
                    Send Email
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
            </div>
            
            <div class="contact-card">
                <div class="contact-card-icon">
                    <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                </div>
                <h3>Working Hours</h3>
                <p>Monday - Friday: 8:00AM - 5:00PM<br>Saturday: 8:00AM - 1:00PM<br>Sunday: Closed</p>
                <a href="#contact-form" class="contact-card-link">
                    Book Appointment
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
            </div>
        </div>
    </div>

    <!-- Main Contact Section -->
    <section class="contact-main" id="contact-form">
        <div class="contact-container">
            <!-- Info Side -->
            <div class="contact-info-side">
                <span class="contact-info-badge">Let&apos;s Talk</span>
                <h2>Start Your <span>Sustainable</span> Farming Journey</h2>
                <p>Have questions about our bio-fertilizers or need expert advice for your crops? Our team of certified agronomists and agricultural specialists is ready to help you achieve sustainable farming success.</p>
                
                <div class="contact-features">
                    <div class="contact-feature">
                        <div class="contact-feature-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                        </div>
                        <div class="contact-feature-content">
                            <h4>Expert Consultation</h4>
                            <p>Free advice from certified agronomists with 15+ years experience</p>
                        </div>
                    </div>
                    
                    <div class="contact-feature">
                        <div class="contact-feature-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        </div>
                        <div class="contact-feature-content">
                            <h4>Quick Response</h4>
                            <p>We respond to all inquiries within 24 hours guaranteed</p>
                        </div>
                    </div>
                    
                    <div class="contact-feature">
                        <div class="contact-feature-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                        </div>
                        <div class="contact-feature-content">
                            <h4>Customized Solutions</h4>
                            <p>Tailored recommendations specific to your farm and crops</p>
                        </div>
                    </div>
                </div>
                
                <div class="contact-social">
                    <h4>Follow Us on Social Media</h4>
                    <div class="social-icons">
                        <a href="#" class="social-icon" aria-label="Facebook">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                        </a>
                        <a href="#" class="social-icon" aria-label="Twitter">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"/></svg>
                        </a>
                        <a href="#" class="social-icon" aria-label="Instagram">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
                        </a>
                        <a href="#" class="social-icon" aria-label="YouTube">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"/><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02" fill="#fff"/></svg>
                        </a>
                        <a href="#" class="social-icon" aria-label="WhatsApp">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Form Side -->
            <div class="contact-form-side">
                <div class="form-header">
                    <h3>Send Us a Message</h3>
                    <p>Fill out the form below and we will get back to you shortly</p>
                </div>
                
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
                
                <form class="contact-form" method="POST" action="contact.php">
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
                            <label>Phone Number</label>
                            <div class="input-wrapper">
                                <input type="tel" name="phone" placeholder="+255 734 567 890" value="<?php echo htmlspecialchars($_POST['phone'] ?? ''); ?>">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Subject <span class="required">*</span></label>
                        <div class="input-wrapper">
                            <select name="subject" required>
                                <option value="">Select a subject</option>
                                <option value="General Inquiry" <?php echo (($_POST['subject'] ?? '') === 'General Inquiry') ? 'selected' : ''; ?>>General Inquiry</option>
                                <option value="Product Information" <?php echo (($_POST['subject'] ?? '') === 'Product Information') ? 'selected' : ''; ?>>Product Information</option>
                                <option value="Farm Consultation" <?php echo (($_POST['subject'] ?? '') === 'Farm Consultation') ? 'selected' : ''; ?>>Farm Consultation</option>
                                <option value="Partnership Opportunity" <?php echo (($_POST['subject'] ?? '') === 'Partnership Opportunity') ? 'selected' : ''; ?>>Partnership Opportunity</option>
                                <option value="Technical Support" <?php echo (($_POST['subject'] ?? '') === 'Technical Support') ? 'selected' : ''; ?>>Technical Support</option>
                                <option value="Feedback" <?php echo (($_POST['subject'] ?? '') === 'Feedback') ? 'selected' : ''; ?>>Feedback</option>
                            </select>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label>What crops do you grow?</label>
                            <div class="input-wrapper">
                                <select name="cropType">
                                    <option value="">Select crop type</option>
                                    <option value="Legumes" <?php echo (($_POST['cropType'] ?? '') === 'Legumes') ? 'selected' : ''; ?>>Legumes</option>
                                    <option value="Tobacco" <?php echo (($_POST['cropType'] ?? '') === 'Tobacco') ? 'selected' : ''; ?>>Tobacco</option>
                                    <option value="Maize" <?php echo (($_POST['cropType'] ?? '') === 'Maize') ? 'selected' : ''; ?>>Maize</option>
                                    <option value="Rice" <?php echo (($_POST['cropType'] ?? '') === 'Rice') ? 'selected' : ''; ?>>Rice</option>
                                    <option value="Sugarcane" <?php echo (($_POST['cropType'] ?? '') === 'Sugarcane') ? 'selected' : ''; ?>>Sugarcane</option>
                                    <option value="Palm" <?php echo (($_POST['cropType'] ?? '') === 'Palm') ? 'selected' : ''; ?>>Palm</option>
                                    <option value="Multiple Crops" <?php echo (($_POST['cropType'] ?? '') === 'Multiple Crops') ? 'selected' : ''; ?>>Multiple Crops</option>
                                    <option value="Other" <?php echo (($_POST['cropType'] ?? '') === 'Other') ? 'selected' : ''; ?>>Other</option>
                                </select>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Farm Size (in acres)</label>
                            <div class="input-wrapper">
                                <input type="text" name="farmSize" placeholder="e.g., 50 acres" value="<?php echo htmlspecialchars($_POST['farmSize'] ?? ''); ?>">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><line x1="3" y1="9" x2="21" y2="9"/><line x1="9" y1="21" x2="9" y2="9"/></svg>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Your Message <span class="required">*</span></label>
                        <textarea name="message" placeholder="Tell us how we can help you with your farming needs..." required><?php echo htmlspecialchars($_POST['message'] ?? ''); ?></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label class="checkbox-group">
                            <input type="checkbox" name="newsletter" value="yes" <?php echo isset($_POST['newsletter']) ? 'checked' : ''; ?>>
                            <span class="checkbox-custom">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            </span>
                            <span class="checkbox-label">Subscribe to our newsletter for farming tips, new products, and exclusive offers</span>
                        </label>
                    </div>
                    
                    <div class="form-group">
                        <label class="checkbox-group">
                            <input type="checkbox" name="privacy" required>
                            <span class="checkbox-custom">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            </span>
                            <span class="checkbox-label">I agree to the <a href="#">Privacy Policy</a> and <a href="#">Terms of Service</a> <span class="required">*</span></span>
                        </label>
                    </div>
                    
                    <button type="submit" class="submit-btn">
                        <span>Send Message</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <iframe 
         src="https://www.google.com/maps?q=Upanga,Tanzania&output=embed"
         width="100%"
         height="100%"
         style="border:0;"
         allowfullscreen=""
         loading="lazy">
        </iframe>
        <div class="map-overlay">
            <div class="map-card">
                
                <a href="https://maps.google.com" target="_blank" class="btn-primary">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                    Get Directions
                </a>
            </div>
        </div>
    </section>

    

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
    /* Enhanced Contact Page Styles */
        .contact-hero {
            position: relative;
            min-height: 60vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            background: linear-gradient(135deg, #1c2a23 0%, #1e7b3c 50%, #15572b 100%);
        }
        
        .contact-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('images/maize1.jpg') center/cover;
            opacity: 0.5;
            animation: slowZoom 25s infinite alternate;
        }
        
        .contact-hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            color: #fff;
            padding: 40px 20px;
        }
        
        .contact-hero h1 {
            font-family: 'Playfair Display', serif;
            font-size: 4rem;
            font-weight: 700;
            margin-bottom: 20px;
            text-shadow: 2px 4px 20px rgba(0,0,0,0.3);
            animation: fadeInUp 0.8s ease-out;
        }
        
        .contact-hero p {
            font-size: 1.3rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
            animation: fadeInUp 0.8s ease-out 0.2s backwards;
        }
        
        /* Floating Contact Cards */
        .contact-cards-wrapper {
            position: relative;
            margin-top: -100px;
            z-index: 10;
            padding: 0 20px;
        }
        
        .contact-cards {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
            max-width: 1280px;
            margin: 0 auto;
        }
        
        .contact-card {
            background: #fff;
            padding: 40px 30px;
            border-radius: 24px;
            text-align: center;
            box-shadow: 0 20px 60px rgba(0,0,0,0.1);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }
        
        .contact-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, #1e7b3c, #6db33f, #f5a623);
            transform: scaleX(0);
            transition: transform 0.4s ease;
        }
        
        .contact-card:hover::before {
            transform: scaleX(1);
        }
        
        .contact-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 30px 80px rgba(45, 138, 62, 0.2);
        }
        
        .contact-card-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #1e7b3c, #2d9a4e);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            position: relative;
            animation: pulse 3s infinite;
        }
        
        .contact-card-icon::after {
            content: '';
            position: absolute;
            inset: -3px;
            border-radius: 22px;
            background: linear-gradient(135deg, #1e7b3c, #6db33f);
            z-index: -1;
            opacity: 0.3;
            filter: blur(10px);
        }
        
        .contact-card-icon svg {
            width: 36px;
            height: 36px;
            stroke: #fff;
            stroke-width: 2;
            fill: none;
        }
        
        .contact-card h3 {
            font-size: 1.25rem;
            font-weight: 700;
            color: #1a1a2e;
            margin-bottom: 15px;
        }
        
        .contact-card p {
            color: #6b7280;
            font-size: 0.95rem;
            line-height: 1.8;
            margin-bottom: 20px;
        }
        
        .contact-card-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #1e7b3c;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .contact-card-link:hover {
            color: #15572b;
            gap: 12px;
        }
        
        /* Main Contact Section */
        .contact-main {
            padding: 120px 20px;
            background: linear-gradient(180deg, #f8faf5 0%, #fff 100%);
        }
        
        .contact-container {
            max-width: 1280px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1.2fr;
            gap: 60px;
            align-items: start;
        }
        
        /* Contact Info Side */
        .contact-info-side {
            position: sticky;
            top: 120px;
        }
        
        .contact-info-badge {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: rgba(45, 138, 62, 0.1);
            color: #1e7b3c;
            padding: 10px 20px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 25px;
        }
        
        .contact-info-badge::before {
            content: '';
            width: 8px;
            height: 8px;
            background: #f5a623;
            border-radius: 50%;
            animation: blink 1.5s infinite;
        }
        
        .contact-info-side h2 {
            font-family: 'Playfair Display', serif;
            font-size: 2.8rem;
            color: #1a1a2e;
            margin-bottom: 20px;
            line-height: 1.2;
        }
        
        .contact-info-side h2 span {
            color: #1e7b3c;
        }
        
        .contact-info-side > p {
            color: #6b7280;
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 40px;
        }
        
        /* Features List */
        .contact-features {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin-bottom: 40px;
        }
        
        .contact-feature {
            display: flex;
            gap: 20px;
            align-items: flex-start;
            padding: 20px;
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
        }
        
        .contact-feature:hover {
            transform: translateX(10px);
            box-shadow: 0 10px 40px rgba(45, 138, 62, 0.15);
        }
        
        .contact-feature-icon {
            width: 50px;
            height: 50px;
            min-width: 50px;
            background: linear-gradient(135deg, #1e7b3c, #6db33f);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .contact-feature-icon svg {
            width: 24px;
            height: 24px;
            stroke: #fff;
        }
        
        .contact-feature-content h4 {
            font-size: 1.1rem;
            font-weight: 600;
            color: #1a1a2e;
            margin-bottom: 5px;
        }
        
        .contact-feature-content p {
            color: #6b7280;
            font-size: 0.95rem;
        }
        
        /* Social Links */
        .contact-social {
            padding-top: 30px;
            border-top: 2px solid #e5e7eb;
        }
        
        .contact-social h4 {
            font-size: 1rem;
            font-weight: 600;
            color: #1a1a2e;
            margin-bottom: 20px;
        }
        
        .social-icons {
            display: flex;
            gap: 15px;
        }
        
        .social-icon {
            width: 50px;
            height: 50px;
            background: #fff;
            border: 2px solid #e5e7eb;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }
        
        .social-icon:hover {
            background: #1e7b3c;
            border-color: #1e7b3c;
            transform: translateY(-5px);
        }
        
        .social-icon:hover svg {
            stroke: #fff;
            fill: #fff;
        }
        
        .social-icon svg {
            width: 22px;
            height: 22px;
            stroke: #1a1a2e;
            transition: all 0.3s ease;
        }
        
        /* Form Side */
        .contact-form-side {
            background: #fff;
            padding: 50px;
            border-radius: 32px;
            box-shadow: 0 30px 80px rgba(0,0,0,0.08);
            position: relative;
            overflow: hidden;
        }
        
        .contact-form-side::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, rgba(45, 138, 62, 0.05) 0%, transparent 70%);
            pointer-events: none;
        }
        
        .form-header {
            text-align: center;
            margin-bottom: 40px;
            position: relative;
        }
        
        .form-header h3 {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            color: #1a1a2e;
            margin-bottom: 10px;
        }
        
        .form-header p {
            color: #6b7280;
        }
        
        /* Alert Messages */
        .alert {
            padding: 20px 25px;
            border-radius: 16px;
            margin-bottom: 30px;
            display: flex;
            align-items: flex-start;
            gap: 15px;
            animation: slideDown 0.5s ease-out;
        }
        
        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .alert-success {
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.1), rgba(45, 138, 62, 0.1));
            border: 2px solid #10b981;
            color: #065f46;
        }
        
        .alert-error {
            background: linear-gradient(135deg, rgba(239, 68, 68, 0.1), rgba(220, 38, 38, 0.1));
            border: 2px solid #ef4444;
            color: #991b1b;
        }
        
        .alert-icon {
            width: 28px;
            height: 28px;
            min-width: 28px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .alert-success .alert-icon {
            background: #10b981;
        }
        
        .alert-error .alert-icon {
            background: #ef4444;
        }
        
        .alert-icon svg {
            width: 16px;
            height: 16px;
            stroke: #fff;
        }
        
        /* Form Styles */
        .contact-form {
            position: relative;
        }
        
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 25px;
        }
        
        .form-group {
            margin-bottom: 25px;
            position: relative;
        }
        
        .form-group label {
            display: block;
            font-weight: 600;
            color: #1a1a2e;
            margin-bottom: 10px;
            font-size: 0.95rem;
        }
        
        .form-group label .required {
            color: #ef4444;
        }
        
        .input-wrapper {
            position: relative;
        }
        
        .input-wrapper svg {
            position: absolute;
            left: 18px;
            top: 50%;
            transform: translateY(-50%);
            width: 20px;
            height: 20px;
            stroke: #9ca3af;
            transition: all 0.3s ease;
            pointer-events: none;
        }
        
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 18px 20px 18px 55px;
            border: 2px solid #e5e7eb;
            border-radius: 14px;
            font-family: inherit;
            font-size: 1rem;
            color: #1a1a2e;
            background: #fff;
            transition: all 0.3s ease;
        }
        
        .form-group select {
            cursor: pointer;
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='%239ca3af' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 15px center;
            background-size: 20px;
            padding-right: 50px;
        }
        
        .form-group textarea {
            min-height: 150px;
            resize: vertical;
            padding: 18px 20px;
        }
        
        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #1e7b3c;
            box-shadow: 0 0 0 5px rgba(45, 138, 62, 0.1);
        }
        
        .form-group input:focus + svg,
        .form-group select:focus + svg {
            stroke: #1e7b3c;
        }
        
        .form-group input::placeholder,
        .form-group textarea::placeholder {
            color: #9ca3af;
        }
        
        /* Checkbox Styles */
        .checkbox-group {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            cursor: pointer;
        }
        
        .checkbox-group input {
            display: none;
        }
        
        .checkbox-custom {
            width: 24px;
            height: 24px;
            min-width: 24px;
            border: 2px solid #e5e7eb;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }
        
        .checkbox-group input:checked + .checkbox-custom {
            background: #1e7b3c;
            border-color: #1e7b3c;
        }
        
        .checkbox-custom svg {
            width: 14px;
            height: 14px;
            stroke: #fff;
            opacity: 0;
            transform: scale(0);
            transition: all 0.3s ease;
        }
        
        .checkbox-group input:checked + .checkbox-custom svg {
            opacity: 1;
            transform: scale(1);
        }
        
        .checkbox-label {
            font-size: 0.95rem;
            color: #6b7280;
            line-height: 1.5;
        }
        
        .checkbox-label a {
            color: #1e7b3c;
            font-weight: 500;
        }
        
        .checkbox-label a:hover {
            text-decoration: underline;
        }
        
        /* Submit Button */
        .submit-btn {
            width: 100%;
            padding: 20px 40px;
            background: linear-gradient(135deg, #1e7b3c, #2d9a4e);
            color: #fff;
            border: none;
            border-radius: 14px;
            font-size: 1.1rem;
            font-weight: 700;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            margin-top: 10px;
        }
        
        .submit-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: 0.6s;
        }
        
        .submit-btn:hover::before {
            left: 100%;
        }
        
        .submit-btn:hover {
            background: linear-gradient(135deg, #15572b, #1e7b3c);
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(45, 138, 62, 0.4);
        }
        
        .submit-btn svg {
            width: 22px;
            height: 22px;
            stroke: #fff;
            transition: transform 0.3s ease;
        }
        
        .submit-btn:hover svg {
            transform: translateX(5px);
        }
        
        /* Map Section */
       .map-section {
          height: 500px;
          position: relative;
          overflow: hidden;
        }
        
        .map-bg {
            width: 100%;
            height: 100%;
            filter: grayscale(30%);
        }
        
        .map-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(26, 26, 46, 0.7), rgba(45, 138, 62, 0.5));
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
       .map-card {
          background: #ffffff00;
          padding: 40px 50px;
          border-radius: 24px;
          text-align: center;
          font: White;
          max-width: 400px;
          transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .map-card:hover {
          transform: translateY(-5px);
          box-shadow: 0 25px 70px rgba(0,0,0,0.2);
        }
        
        .map-card h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            color: #1a1a2e;
            margin-bottom: 15px;
        }
        
        .map-card p {
            color: #6b7280;
            margin-bottom: 25px;
            line-height: 1.8;
        }
        
        .map-card .btn-primary {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: #1e7b3c;
            color: #fff;
            padding: 14px 30px;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .map-card .btn-primary:hover {
            background: #15572b;
            transform: translateY(-3px);
        }
        
        /* FAQ Section */
        .faq-section {
            padding: 100px 20px;
            background: #fff;
        }
        
        .faq-container {
            max-width: 900px;
            margin: 0 auto;
        }
        
        .faq-header {
            text-align: center;
            margin-bottom: 60px;
        }
        
        .faq-header h2 {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            color: #1a1a2e;
            margin-bottom: 15px;
        }
        
        .faq-header p {
            color: #6b7280;
            font-size: 1.1rem;
        }
        
        .faq-list {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        
        .faq-item {
            background: #f8faf5;
            border-radius: 20px;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        
        .faq-item:hover {
            box-shadow: 0 10px 40px rgba(45, 138, 62, 0.1);
        }
        
        .faq-question {
            padding: 25px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            font-weight: 600;
            color: #1a1a2e;
            font-size: 1.1rem;
        }
        
        .faq-question svg {
            width: 24px;
            height: 24px;
            stroke: #1e7b3c;
            transition: transform 0.3s ease;
        }
        
        .faq-item.active .faq-question svg {
            transform: rotate(180deg);
        }
        
        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease;
        }
        
        .faq-answer-content {
            padding: 0 30px 25px;
            color: #6b7280;
            line-height: 1.8;
        }
        
        .faq-item.active .faq-answer {
            max-height: 300px;
        }
        
        /* Responsive */
        @media (max-width: 1024px) {
            .contact-cards {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .contact-container {
                grid-template-columns: 1fr;
                gap: 60px;
            }
            
            .contact-info-side {
                position: relative;
                top: auto;
            }
        }
        
        @media (max-width: 768px) {
            .contact-hero h1 {
                font-size: 2.5rem;
            }
            
            .contact-cards {
                grid-template-columns: 1fr;
            }
            
            .contact-cards-wrapper {
                margin-top: -60px;
            }
            
            .contact-form-side {
                padding: 30px 25px;
            }
            
            .form-row {
                grid-template-columns: 1fr;
            }
            
            .contact-info-side h2 {
                font-size: 2rem;
            }
        }
</style>

<?php include 'includes/footer.php'; ?>
