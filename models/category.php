<?php 

    function loadall_category($key_word=""){
        $sql = "SELECT * FROM category WHERE 1";

        if($key_word!=""){
            $sql.=" AND name LIKE '%".$key_word."%'";
        }

        $listCategory = pdo_query($sql);
        return  $listCategory;
    }