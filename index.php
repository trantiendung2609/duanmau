<?php
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
//models
require_once './mvc/models/connection.php';
require_once './mvc/models/hang_hoa.php';
require_once './mvc/models/loai.php';
require_once './mvc/models/khach_hang.php';
require_once './mvc/models/binh_luan.php';



//controllers
require_once "./mvc/controllers/controller.php";
require_once "./mvc/controllers/home_controller.php";
require_once "./mvc/controllers/errors_controller.php";
require_once "./mvc/controllers/about_controller.php";
require_once "./mvc/controllers/contact_controller.php";
require_once "./mvc/controllers/feedback_controller.php";
require_once "./mvc/controllers/question_controller.php";
require_once "./mvc/controllers/sign_up_controller.php";
require_once "./mvc/controllers/get_pass.php";
require_once "./mvc/controllers/product_detail.php";
require_once "./mvc/controllers/list_products_detail.php";
require_once "./mvc/controllers/update_account_controller.php";






//controllers admin
require_once "./mvc/controllers/admin/controller_admin.php";
require_once "./mvc/controllers/admin/admin_add_controller.php";
require_once "./mvc/controllers/admin/admin_list_controller.php";
require_once "./mvc/controllers/admin/admin_loai_controller.php";
require_once "./mvc/controllers/admin/admin_khach_hang_controller.php";
require_once "./mvc/controllers/admin/admin_thong_ke_controller.php";
require_once "./mvc/controllers/admin/admin_thong_ke_binh_luan_chi_tiet_controller.php";








//Lấy thông tin controller từ URL
$ctr = $_GET['ctr'] ?? '/';
switch ($ctr) {
    case '/':
    case 'home':
        show_home();
        break;
    case 'contact':
        show_contact();
        break;
    case 'about':
        show_about();
        break;
    case 'feedback':
        show_feedback();
        break;
    case 'question':
        show_question();
        break;

    case 'admin':
        show_admin_list();
        break;
    case 'admin-add':
        show_admin_add();
        break;
    case 'admin-loai':
        show_admin_loai();
        break;
    case 'admin-khach-hang':
        list_khach_hang();
        break;
    case 'admin-thong-ke':
        if (!isset($_GET['id'])) {
            show_thong_ke();
        } else {
            show_bieu_do_thong_ke();
        }
        break;
    case 'thong-ke-binh-luan-chi-tiet':
        $id = $_GET['id'];
        binh_luan_chi_tiet($id);
        break;
    case 'delete-binh-luan':
        $id = $_GET['id'];
        $ma_hh = $_GET['ma_hh'];
        delete_binh_luan($id, $ma_hh);
        break;
    case 'save-hang-hoa':
        save_hang_hoa();
        break;
    case 'delete':
        $id = $_GET['id'];
        delete_hang_hoa($id);
        break;
    case 'delete-khach-hang':
        $id = $_GET['id'];
        delete_khach_hang($id);
        break;
    case 'edit-khach-hang':
        $id = $_GET['id'];
        edit_khach_hang($id);
        break;
    case 'save-edit-khach-hang':
        save_edit_danh_sach_khach_hang();
        break;
    case 'login-success':
        login();
        break;
    case 'logout':
        logout();
        break;
    case 'sign-up':
        sign_up();
        break;
    case 'check-sign-up':
        check_sign_up();
        break;
    case 'sign-up-success':
        sign_up_success();
        break;
    case 'add-loai':
        admin_add_loai();
        break;
    case 'admin-danh-sach-loai':
        admin_danh_sach_loai();
        break;
    case 'delete-danh-sach-loai':
        $id = $_GET['id'];
        delete_loai($id);
        break;
    case 'edit-danh-sach-hang-hoa':
        $id = $_GET['id'];
        edit_hang_hoa($id);
        break;
    case 'save-edit-danh-sach':
        save_edit_danh_sach();
        break;
    case 'get-pass':
        get_pass();
        break;
    case 'get-pass-now':
        get_pass_now();
        break;
    case "product-detail":
        $id = $_GET['id'];
        $views = $_GET['views'];
        $loai = $_GET['loai'];
        product_detail_id_and_name($id, $views, $loai);
        break;
    case "list-products":
        $id = $_GET['id'];
        list_products_detail($id);
        break;
    case "send-comment":
        $ma_hh = $_GET['ma-hh'];
        send_comment($ma_hh);
        break;
    case "search-products":
        $ten_hh = $_GET['value_search'];
        search_products($ten_hh);
        break;
    case "update-account":
        update_account();
        break;
    case "check-update-account":
        check_update_account();
        break;

    
    default:
        error_404_show();
}
