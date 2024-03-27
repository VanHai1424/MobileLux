<?php 
    function loadall_review($id_product = 0) {
        $sql = "SELECT r.*, u.user AS user_name, p.name AS product_name  FROM `review` r
        JOIN `user` u ON r.id_user = u.id 
        JOIN `product` p ON r.id_product = p.id
        WHERE 1";
        if(isset($id_product) && ($id_product > 0)) {
            $sql .= " AND id_product = $id_product";
        }
        $listReview = pdo_query($sql);
        return $listReview;
    }

    function insert_review($idUser, $idProduct, $content, $date){
        $sql = "INSERT INTO `review`(`content`, `date`, `id_user`, `id_product`) VALUES ('$content', '$date', $idUser, $idProduct)";
        pdo_execute($sql);
    }

    function delete_review($id) {
        $sql = "DELETE FROM `review` WHERE id=$id";
        pdo_execute($sql);
    }