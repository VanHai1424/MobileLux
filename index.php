<?php 
    include_once 'models/pdo.php';
    include_once 'models/category.php';
    include_once 'models/product.php';

    $listCategory = loadall_category();
    if (isset($_GET['act']) && ($_GET['act'] != '')) {
        $act = $_GET['act'];
        $arr = ['signin', 'signup', 'logout', 'forgot_pass'];
        if (!in_array($act, $arr)) {
            include_once 'views/header.php';
        }

        switch ($act) {
            case 'categories':
                if ((isset($_POST['keyw']) && ($_POST['keyw'] != ""))) {
                    $keyw = $_POST['keyw'];
                } else {
                    $keyw = "";
                }
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $id = $_GET['id'];
                } else {
                    $id = 0;
                }
                $listProduct = loadall_product($keyw, $id);
                include 'views/order/categories.php';
                break;

            case 'product_detail':
                include_once 'views/order/product_detail.php';
                break;

            case 'cart':
                include_once 'views/order/cart.php';
                break;

            case 'checkout':
                include_once 'views/order/checkout.php';
                break;

            case 'signin':
                include_once 'views/login/signin.php';
                break;
                
            case 'signup':
                include_once 'views/login/signup.php';
                break;
                
            case 'forgot_pass':
                include_once 'views/login/forgot_pass.php';
                break;
        }
    } else {
        include_once 'views/header.php';
        $listProductTop10 = load_product_top10();
        

        include_once 'views/home.php';
    }
        include_once 'views/footer.php';
    
?>

