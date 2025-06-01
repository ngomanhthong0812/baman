<?php
include_once './core/db/boot.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_SESSION['user_id'])) {
        $userId = $_SESSION['user_id'];
        include_once './core/db/db_order.php';
        $orders = get_orders_by_user_id_with_items($userId);

        foreach ($orders as &$order) {
            $total = 0;
            foreach ($order['items'] as $item) {
                $total += $item['price'];
            }
            $order['total_amount'] = $total + ($total * 0.1);
        }
        unset($order);

        include_once './view/_my-order.php';
    } else {
        header('Location: /login.php');
        exit;
    }
}
