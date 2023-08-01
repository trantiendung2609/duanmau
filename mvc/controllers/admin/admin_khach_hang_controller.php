<?php
function list_khach_hang()
{


    if (isset($_SESSION['email'])) {
        $danh_muc_khach_hang =  danh_muc_khach_hang();
        render_layout_admin("main_khach_hang", ['danh_muc_khach_hang' => $danh_muc_khach_hang]);
    } else {
        header('Location: error-not-found');
    }
}
function delete_khach_hang($id)
{
    $img_khach_hang = '';
    $select_khach_hang_with_id = select_khach_hang_with_id($id);
    foreach ($select_khach_hang_with_id as $item_sl) {
        $img_khach_hang = $item_sl;
    }
    extract($img_khach_hang);
    khach_hang_delete($id, $hinh);
    header("Location: admin?ctr=admin-khach-hang");
}

function edit_khach_hang($id)
{
    $information_khach_hang = '';
    $select_khach_hang_with_id =  select_khach_hang_with_id($id);
    foreach ($select_khach_hang_with_id as $khach_hang) {
        $information_khach_hang = $khach_hang;
    }
    extract($information_khach_hang);
    render_layout_admin("form_edit_khach_hang", ['ma_kh' => $ma_kh, 'ho_ten' => $ho_ten, 'email' => $email, 'vai_tro' => $vai_tro, 'hinh' => $hinh]);
}
function save_edit_danh_sach_khach_hang()
{
    extract($_POST);
    $image = $_FILES['image_khach_hang'];
    $hinh = $image['name'];
    move_uploaded_file($image['tmp_name'], "public/images/members/" . $hinh);
    $data = [
        $hinh,
        $vai_tro,
        $ma_kh
    ];
    save_edit_khach_hang($data, $hinh);
}
