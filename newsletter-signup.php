<?php
/**
 * NEWSLETTER SIGNUP HANDLER - CSV ONLY
 * Simple, reliable email capture to CSV file
 */

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

// Save to CSV file
$dataFile = __DIR__ . '/emails.csv';
$handle = fopen($dataFile, 'a');

if ($handle) {
    // Write: email, timestamp
    fputcsv($handle, [$email, date('Y-m-d H:i:s')]);
    fclose($handle);
    
    http_response_code(200);
    echo json_encode([
        'success' => true,
        'message' => 'Thank you for subscribing! Check your email for confirmation.'
    ]);
} else {
    http_response_code(500);
    echo json_encode(['error' => 'Unable to save subscription']);
}
?>
