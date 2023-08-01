<?php
//function lấy toàn bộ dữ liệu bảng khach_hang
$flag = false;
function danh_muc_khach_hang()
{
    $conn = connection();
    $sql = "SELECT * FROM khach_hang";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
//function lấy toàn bộ dữ liệu bảng khach_hang có id
function select_khach_hang_with_id($id)
{
    $conn = connection();
    $sql = "SELECT * FROM khach_hang where ma_kh = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
// check login
function login_check($valueOfFormLogin)
{
    extract($valueOfFormLogin);
    $valueOfDbByTableKhachHang = danh_muc_khach_hang();
    $user_form = $user;
    $pass_form = $pass;
    search_user($valueOfDbByTableKhachHang, $user_form, $pass_form);
}

function search_user($valueCheck, $user_form, $pass_form)
{
    foreach ($valueCheck as $vc) {
        extract($vc);
        if ($email == $user_form && $mat_khau == $pass_form) {
            $flag = true;
            $_SESSION['vai_tro'] = $vai_tro;
            $_SESSION['ho_ten'] = $ho_ten;
            $_SESSION['hinh'] = $hinh;
            $_SESSION['ma_kh'] = $ma_kh;
            $_SESSION['email'] = $email;
        }
    }
    if ($flag == true && $_SESSION['vai_tro'] == '1') {
        header("Location: admin");
    } else  if ($flag == true && $_SESSION['vai_tro'] != '1') {
        show_home();
    } else {
        header("Location: home?login=false");
    }
}

// check sign up
function sign_up_member($valueSignUpMember, $cf_pass)
{
    $check = false;
    $conn = connection();
    $danh_muc_khach_hang = danh_muc_khach_hang();
    foreach ($danh_muc_khach_hang as $item) {

        if ($item['email'] == $valueSignUpMember[2]) {
            $check = true;
        }
    }
    if ($check == true) {
        header("Location: sign-up?email=false");
    } else {
        if ($valueSignUpMember[0] != $cf_pass) {
            header("Location: sign-up?cf_pass=false");
        } else {
            $sql = "INSERT INTO `khach_hang`(`mat_khau`, `ho_ten`, `email`, `hinh`, `kich_hoat`, `vai_tro`) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            if ($stmt->execute($valueSignUpMember)) {
                header("Location: sign-up-success");
            }
        }
    }
}

//delete khach hang
function khach_hang_delete($id, $hinh)
{
    $conn = connection();
    $sql_commnet = "DELETE FROM `binh_luan` WHERE `ma_kh` = $id";
    $stmt_comment = $conn->prepare($sql_commnet);
    $stmt_comment->execute();
    $sql = "DELETE FROM `khach_hang` WHERE `ma_kh` = $id";
    $stmt = $conn->prepare($sql);
    if ($stmt->execute()) {
        unlink("./public/images/members/" . $hinh);
    }
}

//funtion save edit khách hàng
function save_edit_khach_hang($data = [], $hinh)
{
    $conn = connection();
    $sql = "UPDATE `khach_hang` SET `hinh` =  ?, `vai_tro` = ? WHERE `khach_hang`.`ma_kh` = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt->execute($data)) {
        header("Location: admin-khach-hang");
    }
}

//function get pass for customer
function get_pass_for_customer($data)
{
    $conn = connection();
    $sql = "SELECT * FROM khach_hang WHERE  `email` = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    handle_get_pass_for_customer($result);
}
function handle_get_pass_for_customer($result)
{
    $mat_khau_khach_hang = '';
    $ma_khach_hang = '';
    foreach ($result as $information_customer) {
        $mat_khau_khach_hang = $information_customer['mat_khau'];
        $ma_khach_hang = $information_customer['ma_kh'];
    }
    get_pass_now_render($mat_khau_khach_hang, $ma_khach_hang);
}
//đang xử lý
function handle_update_account($id, $old_pass, $data, $old_img_failed)
{
    $select_khach_hang_with_id = select_khach_hang_with_id($id);
    foreach ($select_khach_hang_with_id as $select) {
        $information_member = $select;
    }
    extract($information_member);
    if ($old_pass != $mat_khau) {
        check_error_update_account($old_img_failed);
    } else {
        $conn = connection();
        $sql = "UPDATE `khach_hang` SET `mat_khau` = ? , `ho_ten` = ?, `hinh` = ? WHERE `khach_hang`.`ma_kh` = $id";
        $stmt = $conn->prepare($sql);
        if ($stmt->execute($data)) {
            session_unset();
            header("Location: home");
        }
    }
}

function check_error_update_account($old_img_failed)
{
    if ($old_img_failed != '') {
        unlink("./public/images/members/" . $old_img_failed);
        $error_update_account =  'mật khẩu không khớp';
        render_result_update_account($error_update_account);
    } else {
        $error_update_account =  'mật khẩu không khớp';
        render_result_update_account($error_update_account);
    }
}
//đang xử lý
