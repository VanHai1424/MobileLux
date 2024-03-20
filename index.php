<?php 
    include_once 'models/pdo.php';
    include_once 'models/category.php';
    include_once 'models/product.php';
    include_once 'models/review.php';
    include_once 'models/user.php';
    include_once 'models/order.php';

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
                if(isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $product = loadone_product($_GET['id']);
                    $productRelated = loadall_product_related($_GET['id'], $product['id_category']);
                    $productReviews = loadall_review($_GET['id']);
                }
                include_once 'views/order/product_detail.php';
                break;
            
            case 'review':
                if(isset($_POST['submit'])) {
                    $idProduct = $_POST['id'];
                    $content = $_POST['content'];
                    $date = date('Y/m/d');
                    $idUser = $_SESSION['user']['id'];
                    insert_review($idUser, $idProduct, $content, $date);
    
                    $product = loadone_product($idProduct);
                    $productRelated = loadall_product_related($idProduct, $product['id_category']);
                    $productReviews = loadall_review($idProduct);
                    include 'views/order/product_detail.php';
                }
                break;    

            case 'cart':
                include_once 'views/order/cart.php';
                break;

            case 'checkout':
                if(isset($_SESSION['user'])) {
                    $user = loadone_user($_SESSION['user']['id']);
                }
                include_once 'views/order/checkout.php';
                break;

            case 'order':
                if($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $tel = $_POST['tel'];
                    $address = $_POST['address'];
                    $payMethod = $_POST['pay_method'];
                    $total = array_reduce($_SESSION['cart'], function($result, $item) {
                        return $result + $item['price'] * $item['quantity'];
                    }, 0);
                    $idUser = $_SESSION['user']['id'];
                    $date = date('Y/m/d');
                    if($payMethod == 1) {
                        $idOrder = addOrder($name, $tel, $address, $payMethod, $total, $date, $idUser);
                        foreach ($_SESSION['cart'] as $value) {
                            extract($value);
                            addCart($quantity, $price * $quantity, $id, $idOrder);
                        }
                        unset($_SESSION['cart']);
                        echo '<script>window.location.href = "./views/order/success.php"</script>';
                    }
                    
                }
                break; 

            case 'signin':
                if(isset($_POST['submit'])) {
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $loginMess = signin($user, $pass);
                    if($loginMess == "") {
                        if($_SESSION['user']['role'] === 0) header("Location: ./admin/index.php");
                        else header("Location: index.php");
                    }
                }
                include_once 'views/login/signin.php';
                break;
                
            case 'signup':
                if(isset($_POST['submit'])) {
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    $repass = $_POST['repass'];
                    if($pass == $repass) {
                        insert_user($user, $pass, $email, 1);
                        echo '<script>alert("Đăng ký thành công !")</script>';
                    } else {
                        $mess = "<span class='text-danger'>Nhập lại mật khẩu không chính xác !</span>";
                    };
                }
                include_once 'views/login/signup.php';
                break;
              
            case 'logout':
                logout();    
                include 'views/login/signin.php';
                break;    

            case 'forgot_pass':
                if(isset($_POST['submit'])) {
                    $email = $_POST['email'];
                    $sendMailMess = send_mail($email);
                }
                include 'views/login/forgot_pass.php';
                break;
        }
    } else {
        include_once 'views/header.php';
        $listProductTop10 = load_product_top10();
        

        include_once 'views/home.php';
    }
        include_once 'views/footer.php';
    
?>

