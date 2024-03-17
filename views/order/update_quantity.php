<?php 
    session_start();
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $quantity = $_POST['quantity'];
        // $str = $_POST['str'];
        $index = array_search($id, array_column($_SESSION['cart'], 'id'));
        if($index !== false) {
            $_SESSION['cart'][$index]['quantity'] = $quantity;
            
        } else {
            echo 'Sản phẩm không tồn tại';
        }

    } else {
        echo 'Yêu cầu không hợp lệ !';
    }
?>