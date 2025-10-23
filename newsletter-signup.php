<?php
/**
 * NEWSLETTER SIGNUP HANDLER
 * Processes email signups and sends to Substack
 * CORS-enabled for AJAX requests
 */

// Set CORS headers to allow requests from your domain
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

// Handle preflight requests
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

// Only process POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
    exit();
}

// Get the email from the request
$input = json_decode(file_get_contents('php://input'), true) ?? $_POST;
$email = trim($input['email'] ?? '');

// Validate email
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid email address']);
    exit();
}

// ===== SUBSTACK INTEGRATION =====
// Option 1: Using Substack's email API (requires API key from Substack settings)
// Set your Substack API key in an environment variable or config file
$substackApiKey = getenv('SUBSTACK_API_KEY') ?: '';

if (!$substackApiKey) {
    // Fallback: Save to local file for manual import
    $dataFile = __DIR__ . '/emails.csv';
    $handle = fopen($dataFile, 'a');
    if ($handle) {
        fputcsv($handle, [$email, date('Y-m-d H:i:s')]);
        fclose($handle);
        
        http_response_code(200);
        echo json_encode([
            'success' => true,
            'message' => 'Thank you for subscribing! Check your email for confirmation.',
            'note' => 'Substack API key not configured. Email saved locally.'
        ]);
    } else {
        http_response_code(500);
        echo json_encode(['error' => 'Unable to save subscription']);
    }
    exit();
}

// ===== OPTION A: Direct Substack API (if using Substack Pro) =====
// Substack's API endpoint for adding subscribers
$substackEndpoint = 'https://substack.com/api/v1/add_email';

$curlData = json_encode([
    'email' => $email
]);

$ch = curl_init($substackEndpoint);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $curlData);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Authorization: Bearer ' . $substackApiKey
]);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($httpCode === 200) {
    http_response_code(200);
    echo json_encode([
        'success' => true,
        'message' => 'Thank you for subscribing! Check your email for confirmation.'
    ]);
} else {
    // Log the error for debugging
    error_log('Substack API error: ' . $response);
    
    // Fallback: Save locally and send confirmation email
    $dataFile = __DIR__ . '/emails.csv';
    $handle = fopen($dataFile, 'a');
    if ($handle) {
        fputcsv($handle, [$email, date('Y-m-d H:i:s'), 'pending_substack']);
        fclose($handle);
    }
    
    // Send a local confirmation email
    $to = $email;
    $subject = 'Welcome to Hudson Valley Ticks Newsletter';
    $message = "Thank you for subscribing to our newsletter!\n\nYou'll receive monthly updates about tick prevention, Lyme disease education, and Hudson Valley-specific safety tips.\n\nBest regards,\nHudson Valley Ticks Team";
    $headers = "From: info@hudsonvalleyticks.com\r\nContent-Type: text/plain; charset=UTF-8";
    
    mail($to, $subject, $message, $headers);
    
    http_response_code(200);
    echo json_encode([
        'success' => true,
        'message' => 'Thank you for subscribing! Check your email for confirmation.'
    ]);
}
?>
