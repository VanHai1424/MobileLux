<?php 
    if (isset($_GET['act']) && ($_GET['act'] != '')) {
        $act = $_GET['act'];
        $arr = ['signin', 'signup', 'logout', 'forgot_pass'];
        if (!in_array($act, $arr)) {
            include 'views/header.php';
        }

        switch ($act) {
            case 'categories':
                include_once 'views/order/categories.php';
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
        include 'views/home.php';
    }
        include 'views/footer.php';
    
?>

