<?php 
    include_once 'header.php'; 
    include_once '../models/pdo.php';     
    include_once '../models/order.php';
    if(isset($_GET['act']) && ($_GET['act'] != '')) {
        $act = $_GET['act'];
        switch($act) {
            // Product
            case 'list_product':
                include_once 'product/list.php';
                break;

            case 'add_product':
                include_once 'product/add.php';
                break;

            case 'edit_product':
                include_once 'product/edit.php';
                break;

            // Categories    
            case 'list_category':
                include_once 'category/list.php';
                break;

            case 'add_category':
                include_once 'category/add.php';
                break;

            case 'edit_category':
                include_once 'category/edit.php';
                break; 
    
            // Orders    
            case 'list_order':
                $listOrder = loadall_order();
                include_once 'order/list.php';
                break;
  
            case 'orders_detail':
                if(isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $listOrderDetail = load_orderDetail($_GET['id']);
                }
                include_once 'order/order_detail.php';
                break;

            // Users    
            case 'list_user';
                include_once 'user/list.php';
                break;

            case 'add_user':
                include_once 'user/add.php';
                break;

            case 'edit_user':
                include_once 'user/edit.php';
                break;

            // Reviews    
            case 'list_review':
                include_once 'review/list.php';
                break;
        }
    } else {
        include_once 'home.php';
    }
    include_once 'footer.php';

