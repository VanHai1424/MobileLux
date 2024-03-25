<?php 

function addOrder($name, $phone, $address, $payMethod, $total, $date, $idUser){
    $sql="INSERT INTO `order` (`name`, `phone`, `address`, `pay_method`, `total`, `date`, `id_user`) 
    VALUES ('$name', '$phone', '$address', $payMethod, $total, '$date', $idUser);";
    $id = pdo_executeid($sql);
    return $id;
}

function addCart($quantity, $price, $idProduct, $idOrder){
    $sql="INSERT INTO `cart` (`quantity`, `price`, `id_product`, `id_order`) 
    VALUES ($quantity, $price, $idProduct, $idOrder);";
    pdo_execute($sql);
}

function loadall_order() {
    $sql = "SELECT * FROM `order` WHERE 1 ORDER BY `id` DESC";
    $listOrder = pdo_query($sql);
    return $listOrder;
}

function load_orderDetail($id){
    $sql =  "SELECT 
                ord.id AS order_id,
                ord.name AS order_name,
                ord.phone AS order_phone,
                ord.address AS order_address,
                ord.pay_method AS order_pay_method,
                ord.total AS order_total,
                ord.date AS order_date,
                user.user AS user_name,
                user.email AS user_email,
                cart.quantity AS cart_quantity,
                cart.price AS cart_price,
                product.name AS product_name,
                product.image AS product_img
            FROM 
                `order` AS ord
            JOIN 
                `user` AS user ON ord.id_user = user.id
            JOIN 
                `cart` ON ord.id = cart.id_order
            JOIN 
                `product` AS product ON cart.id_product = product.id
            WHERE 
            ord.id = $id;    
            ";
            
    $orderDetail = pdo_query($sql);
    return $orderDetail;
}