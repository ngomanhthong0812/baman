<?php
include_once './core/db/boot.php';
$informationError = array(
    'error' => "",
    'phone' => "",
    'address' => "",
    'email' => "",
    'firstname' => "",
    'payment_method' => "",
);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $total = 0;
    if (isset($_POST['firstname']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['address'])) {
        $informationError['phone'] = $_POST['phone'];
        $informationError['address'] = $_POST['address'];
        $informationError['firstname'] = $_POST['firstname'];
        $informationError['email'] = $_POST['email'];
        $informationError['payment_method'] = $_POST['payment_method'];
        if ($_POST['phone'] != "" && $_POST['address'] != "") {
            $pattern = '/^(03|05|07|08|09)[0-9]{8}$/';
            $checkPhone = preg_match($pattern, $_POST['phone']);
            if (!empty($checkPhone)) {
                $email = $_SESSION['email'];
                $user = get_user_by_email($email);
                $code = generateRandomCode();

                if ($user) {
                    $id = $user['id'];
                    $orders = array(
                        'code' => $code,
                        'status' => 'processing',
                        'users_id' => $id,
                        'address' => $_POST['address'],
                        'phone' => $_POST['phone'],
                        'payment_status' => 'unpaid'
                    );
                    $_SESSION['code'] = $code;
                    $_SESSION['date'] = date('Y-m-d');
                    $_SESSION['payment_method'] = $_POST['payment_method'];
                    $order_id = insert_order($orders);

                    $cart = $_SESSION['cart'];
                    for ($i = 0; $i < count($cart); $i++) {
                        $orderItems = array(
                            "orders_id" => $order_id,
                            "product_id" => $cart[$i]['productId'],
                            "quantity" => $cart[$i]['quantity'],
                            "price" => $cart[$i]['productPrice'] * $cart[$i]['quantity'],
                        );
                        $total += $orderItems['price'];
                        $updateQuantityProduct = array(
                            'id' => $cart[$i]['productId'],
                            'quantity' => $cart[$i]['quantity'],
                        );
                        update_product_quantity_by_id($updateQuantityProduct);
                        insert_order_items($orderItems);
                    }
                    $_SESSION['total'] = $total + $total * 0.1;

                    header('location: order.php?code=' . $_SESSION['code']);
                    unset($_SESSION['cart']);
                }
            } else {
                $informationError['error'] = "error: &nbsp; invalid phone number.";
                include_once './view/_checkout.php';
            }
        } else {
            if ($_POST['phone'] == "" && $_POST['address'] == "") {
                $informationError['error'] = "error: &nbsp; Số điện thoại và địa chỉ không được để trống.";
            } else {
                if ($_POST['phone'] != "" && $_POST['address'] == "") {
                    $informationError['error'] = "error: &nbsp; Địa chỉ không được để trống.";
                } else {
                    $informationError['error'] = "error: &nbsp; Số điện thoại không được để trống hoặc không đúng định dạng.";
                }
            }
            include_once './view/_checkout.php';
        }
    }
}
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $productList = get_all_products();
    $_SESSION['isCheckout'] = false;
    if (isset($_SESSION['email']) && $_SESSION['email'] != "" && isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
        include_once './view/_checkout.php';
    } else {
        $_SESSION['isCheckout'] = true;
        header('location: login.php');
    }
}

function generateRandomCode($length = 6)
{
    $characters = '0123456789';
    $charactersLength = strlen($characters);
    $randomCode = '';

    for ($i = 0; $i < $length; $i++) {
        $randomCode .= $characters[rand(0, $charactersLength - 1)];
    }

    return $randomCode;
}
