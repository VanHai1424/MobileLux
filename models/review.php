<?php 
    function loadall_review($id_product = 0) {
        $sql = "SELECT r.*, u.user AS user_name FROM `review` r
        JOIN `user` u ON r.id_user = u.id 
        WHERE 1";
        if(isset($id_product) && ($id_product > 0)) {
            $sql .= " AND id_product = $id_product";
        }
        $listReview = pdo_query($sql);
        return $listReview;
    }