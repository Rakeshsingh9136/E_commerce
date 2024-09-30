<?php
require '../razorpay-php-master/Razorpay.php'; // Make sure to include the Razorpay PHP SDK

use Razorpay\Api\Api;

header('Content-Type: application/json');

// Initialize Razorpay API
$keyId = 'rzp_test_Xjia6oKF1Me5t4';
$keySecret = 'J67sl3WoOrfctJhoslAfit7F';
$api = new Api($keyId, $keySecret);

// Get the request body
$requestBody = json_decode(file_get_contents('php://input'), true);

if (!isset($requestBody['amount'], $requestBody['currency'], $requestBody['receipt'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid request']);
    exit;
}

$amount = $requestBody['amount'];
$currency = $requestBody['currency'];
$receipt = $requestBody['receipt'];

try {
    // Create an order
    $orderData = [
        'amount' => $amount, // amount in smallest currency unit
        'currency' => $currency,
        'receipt' => $receipt,
    ];
    $order = $api->order->create($orderData);

    // Return the order details
    echo json_encode($order);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Failed to create order: ' . $e->getMessage()]);
}
?>
