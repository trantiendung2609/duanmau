<?php
function show_admin_add()
{
    $loai_hang = danh_muc_loai_hang();
    render_layout_admin("main_add", ["loai_hang" => $loai_hang]);
}

function save_hang_hoa()
{
    $date = date("Y-m-d");
    extract($_POST);
    $image  = $_FILES['hinh'];
    $hinh = $image['name'];
    move_uploaded_file($image['tmp_name'], "public/images/products/" . $hinh);
    $data = [
        $ten_hh,
        $don_gia,
        $giam_gia,
        $hinh,
        $ma_loai,
        $date,
        $mo_ta
    ];
    hang_hoa_insert($data);
    header("location: admin?status=active");
}
