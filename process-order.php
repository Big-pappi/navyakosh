<?php
/**
 * Process Order Form Submission
 * Handles fertilizer product orders
 */

header('Content-Type: application/json');

// Check if POST request
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
    exit;
}

// Get form data
$product = isset($_POST['product']) ? trim($_POST['product']) : '';
$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
$quantity = isset($_POST['quantity']) ? intval($_POST['quantity']) : 1;
$message = isset($_POST['message']) ? trim($_POST['message']) : '';

// Validate required fields
if (empty($product) || empty($name) || empty($email) || empty($phone)) {
    echo json_encode(['success' => false, 'message' => 'Please fill in all required fields']);
    exit;
}

// Validate email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'Please enter a valid email address']);
    exit;
}

// Validate quantity
if ($quantity < 1) {
    $quantity = 1;
}

// Prepare email content
$to = 'chedybreezy@gmail.com'; // Change to actual email
$subject = 'New Product Order - ' . $product;

$emailBody = "
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: #1e7b3c; color: white; padding: 20px; text-align: center; }
        .content { background: #f9f9f9; padding: 30px; }
        .field { margin-bottom: 15px; }
        .label { font-weight: bold; color: #1e7b3c; }
        .footer { background: #333; color: white; padding: 15px; text-align: center; font-size: 12px; }
    </style>
</head>
<body>
    <div class='container'>
        <div class='header'>
            <h1>New Product Order</h1>
        </div>
        <div class='content'>
            <div class='field'>
                <span class='label'>Product:</span><br>
                {$product}
            </div>
            <div class='field'>
                <span class='label'>Customer Name:</span><br>
                {$name}
            </div>
            <div class='field'>
                <span class='label'>Email:</span><br>
                {$email}
            </div>
            <div class='field'>
                <span class='label'>Phone:</span><br>
                {$phone}
            </div>
            <div class='field'>
                <span class='label'>Quantity:</span><br>
                {$quantity}
            </div>
            " . ($message ? "<div class='field'>
                <span class='label'>Additional Notes:</span><br>
                {$message}
            </div>" : "") . "
        </div>
        <div class='footer'>
            Navyakosh Bio-Fertilizers | Premium Organic Solutions
        </div>
    </div>
</body>
</html>
";

// Email headers
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$headers .= "From: Navyakosh Orders <noreply@bizlogicsolutions.com>\r\n";
$headers .= "Reply-To: {$email}\r\n";

// Try to send email
$mailSent = @mail($to, $subject, $emailBody, $headers);

// Log order to file as backup
$logFile = 'orders/orders.log';
$logDir = dirname($logFile);

if (!file_exists($logDir)) {
    @mkdir($logDir, 0755, true);
}

$logEntry = date('Y-m-d H:i:s') . " | Product: {$product} | Name: {$name} | Email: {$email} | Phone: {$phone} | Qty: {$quantity} | Notes: {$message}\n";
@file_put_contents($logFile, $logEntry, FILE_APPEND | LOCK_EX);

// Return success (even if email fails, order is logged)
echo json_encode([
    'success' => true, 
    'message' => 'Order submitted successfully'
]);
