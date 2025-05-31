<?php
ob_start();
require_once '../core/db/db_order.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $body = json_decode(file_get_contents("php://input"), true);

    if (isset($body['code']) && isset($body['payment_status'])) {
        update_payment_status($body['code'], $body['payment_status']);
        ob_end_clean(); // Xóa output thừa trước khi echo JSON
        echo json_encode(["success" => true]);
        exit;
    } else {
        ob_end_clean();
        echo json_encode(["success" => false, "error" => "Thiếu code hoặc payment_status"]);
        exit;
    }
} else {
    ob_end_clean();
    echo json_encode(["success" => false, "error" => "Phương thức không hợp lệ"]);
    exit;
}
