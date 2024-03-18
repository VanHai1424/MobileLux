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