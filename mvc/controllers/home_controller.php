<?php
//Hiên thị trang chủ
function show_home()
{
    $count_hang_hoa_all = count_hang_hoa_all();
    $products_special = products_special();
    $hang_hoa_offset = hang_hoa_offset();
    $top_10_yeu_thich_hang_hoa = top_10_yeu_thich_hang_hoa();
    $danh_muc_loai_hang = danh_muc_loai_hang();
    render('home', [
        'count_hang_hoa_all' => $count_hang_hoa_all, 'products_special' => $products_special,
        "hang_hoa_offset" => $hang_hoa_offset,
        "top_10_yeu_thich_hang_hoa" => $top_10_yeu_thich_hang_hoa,
        "danh_muc_loai_hang" => $danh_muc_loai_hang
    ]);
}
function login()
{
    if (isset($_POST['btn_login'])) {
        login_check($_POST);
    } else {
        header('Location: error-not-found');
    }
}
function logout()
{
    session_unset();
    header("location: home");
}
