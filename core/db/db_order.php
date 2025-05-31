<?php
require_once 'mysql.php';
$pdo = get_pdo();

function get_all_orders()
{
    global $pdo;

    $sql = "SELECT * FROM ORDERS";
    $stmt = $pdo->prepare($sql);

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();
    $orderList = array();

    if (count($result) > 0) {
        // Hiển thị dữ liệu của bảng
        foreach ($result as $row) {
            $order = array(
                "id" => $row["id"],
                "code" => $row["code"],
                "status" => $row["status"],
                "users_id" => $row["users_id"],
                "address" => $row["address"],
                "phone" => $row["phone"],
                "payment_status" => $row["payment_status"],
                "date" => $row["date"],
            );
            array_push($orderList, $order);
        }
    }
    return $orderList;
}

function get_orders_by_user_id_with_items($userId)
{
    global $pdo;

    $sql = "SELECT
                o.id AS order_id,
                o.code,
                o.date,
                o.payment_status,
                oi.id AS order_item_id,
                oi.quantity,
                oi.price,
                p.id AS product_id,
                p.name AS product_name,
                p.image AS product_image
            FROM orders o
            JOIN order_items oi ON oi.orders_id = o.id
            JOIN products p ON p.id = oi.products_id
            WHERE o.users_id = :userId
            ORDER BY o.id, oi.id";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':userId', $userId, PDO::PARAM_INT);
    $stmt->execute();

    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $orders = [];
    foreach ($rows as $row) {
        $orderId = $row['order_id'];
        if (!isset($orders[$orderId])) {
            $orders[$orderId] = [
                'id' => $orderId,
                'code' => $row['code'],
                'date' => $row['date'],
                'payment_status' => $row['payment_status'],
                'items' => []
            ];
        }

        // Thêm item
        $orders[$orderId]['items'][] = [
            'order_item_id' => $row['order_item_id'],
            'product_id' => $row['product_id'],
            'product_name' => $row['product_name'],
            'product_image' => $row['product_image'],
            'quantity' => $row['quantity'],
            'price' => $row['price']
        ];
    }

    // reset key để trả về mảng chuẩn, không phải associative array
    return array_values($orders);
}

function delete_order($orders_id)
{
    global $pdo;

    $sql = "DELETE FROM ORDERS WHERE ID=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $orders_id);

    $stmt->execute();
}

function insert_order($orders)
{
    global $pdo;

    $orders['date'] = date('Y-m-d');

    $sql = "INSERT INTO orders (code, status, users_id, address, phone, date, payment_status) 
            VALUES (:code, :status, :users_id, :address, :phone, :date, :payment_status)";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':code', $orders['code']);
    $stmt->bindParam(':status', $orders['status']);
    $stmt->bindParam(':users_id', $orders['users_id']);
    $stmt->bindParam(':address', $orders['address']);
    $stmt->bindParam(':phone', $orders['phone']);
    $stmt->bindParam(':date', $orders['date']);
    $stmt->bindParam(':payment_status', $orders['payment_status']);

    $stmt->execute();

    return $pdo->lastInsertId();
}



function get_order($orders_id)
{
    global $pdo;

    $sql = "SELECT * FROM ORDERS WHERE ID=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $orders_id);


    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();

    // Lặp kết quả
    foreach ($result as $row) {
        return array(
            'id' => $row['id'],
            'code' => $row['code'],
            'status' => $row['status'],
            'users_id' => $row['users_id'],
            'address' => $row['address'],
            'phone' => $row['phone'],
            'payment_status' => $row['payment_status'],
            'date' => $row['date'],
        );
    }

    return null;
}

function update_order($order)
{
    global $pdo;
    $sql = "UPDATE ORDERS SET CODE=:code, STATUS=:status, USERS_ID=:users_id, ADDRESS=:address, PHONE=:phone, PAYMENT_STATUS=:payment_status WHERE ID=:id";
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':id', $order['id']);
    $stmt->bindParam(':code', $order['code']);
    $stmt->bindParam(':status', $order['status']);
    $stmt->bindParam(':users_id', $order['users_id']);
    $stmt->bindParam(':address', $order['address']);
    $stmt->bindParam(':phone', $order['phone']);
    $stmt->bindParam(':payment_status', $order['payment_status']);

    $stmt->execute();
}

function update_payment_status($code, $paymentStatus)
{
    global $pdo;
    $sql = "UPDATE ORDERS SET PAYMENT_STATUS = :payment_status WHERE CODE = :code";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':code', $code);
    $stmt->bindParam(':payment_status', $paymentStatus);
    $stmt->execute();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);
    if (isset($data['code']) && isset($data['payment_status'])) {
        update_payment_status($data['code'], $data['payment_status']);
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false, "error" => "Thiếu CODE hoặc payment_status"]);
    }
}

function get_orders_by_date($date)
{
    global $pdo;

    $sql = "SELECT * FROM ORDERS WHERE date >= :dateFrom AND date <= :dateArrive";
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':dateFrom', $date['dateFrom']);
    $stmt->bindParam(':dateArrive', $date['dateArrive']);

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();
    $orderList = array();

    if (count($result) > 0) {
        // Hiển thị dữ liệu của bảng
        foreach ($result as $row) {
            $order = array(
                "id" => $row["id"],
                "code" => $row["code"],
                "status" => $row["status"],
                "users_id" => $row["users_id"],
                "address" => $row["address"],
                "phone" => $row["phone"],
                "date" => $row["date"],
            );
            array_push($orderList, $order);
        }
    }
    return $orderList;
}
