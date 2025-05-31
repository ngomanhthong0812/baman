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
                $total += $item['price'] * $item['quantity'];
            }

            // Cộng thêm 10% tiền ship
            $order['total_amount'] = $total * 1.1;
        }
        unset($order);


        // Truyền dữ liệu $orders sang view
        include_once './view/_my-order.php';
    } else {
        // Nếu chưa đăng nhập thì chuyển hướng hoặc báo lỗi
        header('Location: /login.php');
        exit;
    }
}
