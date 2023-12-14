<?php
include_once './core/db/boot.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['email']) && isset($_POST['name']) && isset($_POST['phone']) &&  isset($_POST['address'])) {
        $email = $_SESSION['email'];
        $user = get_by_email_users($email);
        if ($user) {
            $id = $user['id'];
            $orders = array(
                'code' => string_random(10),
                'status' => 'pending',
                'users_id' => $id,
                'address' => $_POST['address'],
                'phone' => $_POST['phone'],
                'date' => date('Y-m-d H:i:s'), 
            );
            insert_orders($orders);

            $orderId = get_last_inserted_order_id();

            $cart = $_SESSION['cart'];
            for ($i = 0; $i < count($cart); $i++) {
                $orderItems = array(
                    "orders_id" => $orderId,
                    "products_id" => $cart[$i]['productId'],
                    "quantity" => $cart[$i]['quantity'],
                    "price" => $cart[$i]['productPrice'] *  $cart[$i]['quantity'],
                );
                insert_order_items($orderItems);
            }
            unset($_SESSION['cart']);
            header('location: home.php');
        }else{
            header('location: login.php');
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    include_once './view/_checkout.php';
}

function string_random($len = 10){
    $keys = array_merge(range(0,9), range('a', 'z'));

    $key = "";
    for($i=0; $i < $len; $i++) {
        $key .= $keys[mt_rand(0, count($keys) - 1)];
    }
    return $key;
}

function get_last_inserted_order_id() {
    global $pdo; // Biến PDO cần được khai báo ở đây, thay thế bằng biến PDO của bạn
    return $pdo->lastInsertId();
}
