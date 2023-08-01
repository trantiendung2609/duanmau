<?php
function update_account() {
    if (isset($_SESSION['email'])) {
       render('update_account');
    }else{
        header('Location: error-not-found');
    }
}
function check_update_account(){
    extract($_POST);
    $image = $_FILES['image_update'];
    $hinh = $image['name'];
    $id = $_SESSION['ma_kh'];
    move_uploaded_file($image['tmp_name'], "public/images/members/" . $hinh);
    $data = [
        $new_pass,
        isset($ho_ten)?$ho_ten:'',
        $hinh
    ];
    handle_update_account($id,  isset($old_pass )?$old_pass :'', $data, $hinh);
}
//đang xử lý

function render_result_update_account($error_update_account) {
    render('update_account',['error_update_account'=>$error_update_account]);
}
//đang xử lý
