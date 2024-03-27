<?php
ob_start();
include_once 'header.php';
include_once '../models/pdo.php';
include_once '../models/order.php';
include_once '../models/product.php';
include_once '../models/category.php';
include_once '../models/review.php';
include_once '../models/user.php';
// hepler
include_once '../helper.php';
if (isset($_GET['act']) && ($_GET['act'] != '')) {
    $act = $_GET['act'];
    switch ($act) {
            // Product
        case 'list_product':
            $dataProducts = selectAllProducts();
            include_once 'product/list.php';
            break;

        case 'add_product':

            $dataCategory = selectAllCategory();

            if (isset($_POST['submit'])) {
                $name = $_POST['name'];
                $price = intval($_POST['price']);
                $color = $_POST['color'];
                $memory = $_POST['memory'];
                $category = $_POST['id_category'];
                $image = $_FILES['image'];
                $desc = $_POST['desc'];

                if (empty($name)) {
                    $_SESSION['errors']['name'] = 'Vui lòng nhập name';
                } else {
                    unset($_SESSION['errors']['name']);
                }

                if (empty($price)) {
                    $_SESSION['errors']['price'] = 'Vui lòng nhập price';
                } else {
                    unset($_SESSION['errors']['price']);
                }

                if (empty($color)) {
                    $_SESSION['errors']['color'] = 'Vui lòng nhập color';
                } else {
                    unset($_SESSION['errors']['color']);
                }

                if (empty($memory)) {
                    $_SESSION['errors']['memory'] = 'Vui lòng nhập memory';
                } else {
                    unset($_SESSION['errors']['memory']);
                }

                if (empty($category)) {
                    $_SESSION['errors']['category'] = 'Vui lòng nhập category';
                } else {
                    unset($_SESSION['errors']['category']);
                }

                if (empty($image['name'])) {
                    $_SESSION['errors']['image'] = 'Vui lòng nhập image';
                } else {
                    unset($_SESSION['errors']['image']);
                }

                if (empty($desc)) {
                    $_SESSION['errors']['desc'] = 'Vui lòng nhập desc';
                } else {
                    unset($_SESSION['errors']['desc']);
                }

                if (empty($_SESSION['errors'])) {
                    $imageSaveDB = upload_file($image, '../upload/');
                    insertOneProduct($name, $price, $color, $memory, $category, $imageSaveDB, $desc);
                    header('location: index.php?act=list_product');
                }
            }

            include_once 'product/add.php';
            break;

        case 'edit_product':
            $id = $_GET['id'] ?? null;

            $product = selectOneProduct($id);
            $dataCategory = selectAllCategory();

            if (isset($_POST['submit'])) {
                $id = $_POST['id'] ?? $product['p_id'];
                $name = $_POST['name'];
                $price = $_POST['price'];
                $price = str_replace('.', '', $price);
                $color = $_POST['color'];
                $memory = $_POST['memory'];
                $category = $_POST['id_category'] ?? $product['c_id'];
                $image = $_FILES['image'];
                $desc = $_POST['desc'];

                $imageSaveDB = '';


                if (empty($name)) {
                    $_SESSION['errors']['name'] = 'Vui lòng nhập name';
                } else {
                    unset($_SESSION['errors']['name']);
                }

                if (empty($price)) {
                    $_SESSION['errors']['price'] = 'Vui lòng nhập price';
                } else {
                    unset($_SESSION['errors']['price']);
                }

                if (empty($name)) {
                    $_SESSION['errors']['name'] = 'Vui lòng nhập name';
                } else {
                    unset($_SESSION['errors']['name']);
                }

                if (empty($image['name'])) {
                    $imageSaveDB = $product['p_image'];
                } else {
                    $imageSaveDB = upload_file($image, '../upload/');
                }

                if (empty($desc)) {
                    $_SESSION['errors']['desc'] = 'Vui lòng nhập desc';
                } else {
                    unset($_SESSION['errors']['desc']);
                }
                // echo $imageSaveDB . "</br>";

                if (empty($_SESSION['errors'])) {
                    updateOneProduct($id, $name, $price, $color, $memory, $category, $imageSaveDB, $desc);
                    header("location: index.php?act=list_product");
                }
            }

            include_once 'product/edit.php';
            break;

        case 'delete_product':
            $id = $_GET['id'] ?? null;
            deleteOneProduct($id);
            header('location: index.php?act=list_product');
            break;

            // Categories    
        case 'list_category':
            $listCategory = loadall_category();
            include_once 'category/list.php';
            break;

        case 'add_category':
            if(isset($_POST['submit'])) {
                $name = $_POST['name'];
                $image = $_FILES['image'];
                $imageSaveDB = upload_file($image, '../upload/');
                insert_category($name, $imageSaveDB);
                header('location: index.php?act=list_category');
                $thongBao = "Thêm danh mục thành công";
            }
            include_once 'category/add.php';
            break;

        case 'edit_category':
            if(isset($_GET['id']) && ($_GET['id'] > 0)) {
                $category = loadone_category($_GET['id']);
            }
            include_once 'category/edit.php';
            break;
        
        case 'update_category':
            if(isset($_POST['submit'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $image = $_FILES['image'];
                $imageSaveDB = upload_file($image, '../upload/');
                update_category($name, $imageSaveDB, $id);
            }
            $listCategory = loadall_category();
            include_once 'category/list.php';
            break;   
            
        case 'delete_category':
            if(isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_category($_GET['id']);
            }

            $listCategory = loadall_category();
            include_once 'category/list.php';
            break;        

            // Orders    
        case 'list_order':
            $keyw = $_POST['keyw'] ?? "";
            $listOrder = loadall_order($keyw);
            include_once 'order/list.php';
            break;

        case 'orders_detail':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $listOrderDetail = load_orderDetail($_GET['id']);
            }
            include_once 'order/order_detail.php';
            break;

        case 'update_status':
            if(isset($_POST['submit'])) {
                $id = $_POST['id'];
                $status = $_POST['status'];
                updateStatus($id, $status);
                header("Location: index.php?act=orders_detail&id=$id");
            }
            break;

            // Users    
        case 'list_user';
            $dataUsers = selectAllUsers();
            include_once 'user/list.php';
            break;

        case 'add_user':
            if (isset($_POST['submit'])) {
                $name = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $role = $_POST['role'] ?? $user['role'];

                if (empty($name)) {
                    $_SESSION['errors']['name'] = 'Vui lòng nhập name';
                } else {
                    unset($_SESSION['errors']['name']);
                }

                if (empty($pass)) {
                    $_SESSION['errors']['pass'] = 'Vui lòng nhập pass';
                } else {
                    unset($_SESSION['errors']['pass']);
                }

                if (empty($email)) {
                    $_SESSION['errors']['email'] = 'Vui lòng nhập email';
                } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $_SESSION['errors']['email'] = 'Nhập đúng định dạng';
                } else {
                    unset($_SESSION['errors']['email']);
                }

                if (empty($role) && $role == null) {
                    $_SESSION['errors']['role'] = 'Vui lòng nhập role';
                } else {
                    unset($_SESSION['errors']['role']);
                }


                if (empty($_SESSION['errors'])) {
                    insert_user($name, $pass, $email, $role);
                    header('location: index.php?act=list_user');
                }
            }
            include_once 'user/add.php';
            break;

        case 'edit_user':
            $id = $_GET['id'] ?? null;
            $user = loadone_user($id);

            if (isset($_POST['submit'])) {
                $id = $_POST['id'] ?? $user['id'];
                $name = $_POST['name'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $role = $_POST['role'] ?? $user['role'];


                if (empty($name)) {
                    $_SESSION['errors']['name'] = 'Vui lòng nhập name';
                } else {
                    unset($_SESSION['errors']['name']);
                }

                if (empty($pass)) {
                    $_SESSION['errors']['pass'] = 'Vui lòng nhập pass';
                } else {
                    unset($_SESSION['errors']['pass']);
                }

                if (empty($email)) {
                    $_SESSION['errors']['email'] = 'Vui lòng nhập email';
                } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $_SESSION['errors']['email'] = 'Nhập đúng định dạng';
                } else {
                    unset($_SESSION['errors']['email']);
                }

                if (empty($role) && $role == null) {
                    $_SESSION['errors']['role'] = 'Vui lòng nhập role';
                } else {
                    unset($_SESSION['errors']['role']);
                }

                if (empty($_SESSION['errors'])) {
                    updateOneUser($name, $pass, $email, $role, $id);
                    header('location: index.php?act=list_user');
                }
            }

            include_once 'user/edit.php';
            break;

        case 'delete_user':
            $id = $_GET['id'] ?? null;
            deleteOneUser($id);
            header('location: index.php?act=list_user');
            break;

            // Reviews    
        case 'list_review':
            $listReview = loadall_review();
            include_once 'review/list.php';
            break;

        case 'delete_review':
            if(isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_review($_GET['id']);
            }
            $listReview = loadall_review();
            include 'review/list.php';
            break;    
    }
} else {
    include_once 'home.php';
}
include_once 'footer.php';