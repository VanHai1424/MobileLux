<?php 
    session_start();
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $img = $_POST['img'];
        $price = $_POST['price'];
        $totalQty = $_POST['totalQty'];
        $quantity = $_POST['quantity'] > 0 ? $_POST['quantity'] : 1;
        $cart = $_SESSION['cart'] ?? [];
        $index = array_search($id, array_column($cart, 'id'));
        if($index !== false) {
            if(($_SESSION['cart'][$index]['quantity'] + $quantity) >= $totalQty) {
                $_SESSION['cart'][$index]['quantity'] = $totalQty;
            } else {
                $_SESSION['cart'][$index]['quantity'] += $quantity;
            }
            
        } else {
            $product = [
                'id' => $id,
                'name' => $name,
                'img' => $img,
                'price' => $price,
                'totalQty' => $totalQty,
                'quantity' => $quantity,
            ];
            $_SESSION['cart'][] = $product;
        }
        echo count($_SESSION['cart']);
    } else {
        echo 'Yêu cầu không hợp lệ !';
    }
?>