<?php

function load_product_top10()
{
    $sql = "SELECT * FROM product WHERE 1 ORDER BY id DESC LIMIT 0,10";
    $listProduct = pdo_query($sql);
    return $listProduct;
}

// thuong nguyen
function selectAllProducts()
{
    $sql = "SELECT p.id as p_id, p.name as p_name, p.image as p_image, p.price as p_price, p.color as p_color, p.memory as p_memory, p.desc as p_desc, c.id as c_id, c.name as c_name FROM product as p INNER JOIN category as c ON p.id_category = c.id ORDER BY p.id DESC";
    $stmt = pdo_query($sql);
    return $stmt;
}


function selectOneProduct($id)
{
    $sql = "SELECT p.id as p_id, p.name as p_name, p.image as p_image, p.price as p_price, p.color as p_color, p.memory as p_memory, p.quantity as p_quantity , p.desc as p_desc, c.id as c_id, c.name as c_name FROM product as p INNER JOIN category as c ON p.id_category = c.id WHERE p.id = $id ORDER BY p.id";
    $stmt = pdo_query_one($sql);
    return $stmt;
}

function updateOneProduct($id, $name, $price, $color, $memory, $category, $image, $desc)
{
    $sql = "UPDATE product SET name = ?, price = ?, color = ?, memory = ?, id_category = ?, image = ?, `desc` = ? WHERE id = ?";
    pdo_execute($sql, $name, $price, $color, $memory, $category, $image, $desc, $id);
}

function insertOneProduct($name, $price, $color, $memory, $category, $image, $desc)
{
    $sql = "INSERT INTO product (name, price, color, memory, id_category, image, `desc`) VALUES (?, ?, ?, ?, ?, ?, ?)";
    pdo_execute($sql, $name, $price, $color, $memory, $category, $image, $desc);
}

function deleteOneProduct($id)
{
    $sql = "DELETE FROM product WHERE id = $id";
    pdo_delete_one($sql);
}



// end



function loadall_product($key_word = "", $id_category = 0)
{
    $sql = "SELECT p.*, c.name AS category_name
                FROM product p
                JOIN category c ON p.id_category = c.id
                WHERE 1";

    if ($key_word != "") {
        $sql .= " AND p.name LIKE '%" . $key_word . "%'";
    }

    if ($id_category > 0) {
        $sql .= " AND p.id_category =" . $id_category . "";
    }
    $sql .= " ORDER BY p.price ASC";
    $listProduct = pdo_query($sql);
    return  $listProduct;
}

function loadone_product($id)
{
    $sql = "SELECT p.*, c.name AS category_name FROM product p 
        JOIN category c ON p.id_category = c.id 
        WHERE p.id=$id";
    $product = pdo_query_one($sql);
    return $product;
}

function loadall_product_related($id, $idCategory)
{
    $sql = "SELECT * FROM `product` WHERE id_category = $idCategory AND id <> $id";
    $productRelated = pdo_query($sql);
    return $productRelated;
}