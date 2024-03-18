<?php 

    function load_product_top10(){
        $sql="SELECT * FROM product WHERE 1 ORDER BY id DESC LIMIT 0,10";
        $listProduct = pdo_query($sql);
        return $listProduct;
    }   

    function loadall_product($key_word = "", $id_category = 0) {
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

    function loadone_product($id){
        $sql="SELECT p.*, c.name AS category_name FROM product p 
        JOIN category c ON p.id_category = c.id 
        WHERE p.id=$id";
        $product = pdo_query_one($sql);
        return $product;
    }

    function loadall_product_related($id, $idCategory) {
        $sql = "SELECT * FROM `product` WHERE id_category = $idCategory AND id <> $id";
        $productRelated = pdo_query($sql);
        return $productRelated;
    }