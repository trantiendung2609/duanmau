<?php
function get_pass()
{
    $top_10_yeu_thich_hang_hoa = top_10_yeu_thich_hang_hoa();
    $danh_muc_loai_hang = danh_muc_loai_hang();
    render('get_pass', ["top_10_yeu_thich_hang_hoa" => $top_10_yeu_thich_hang_hoa, "danh_muc_loai_hang" => $danh_muc_loai_hang]);
}
function get_pass_now() {
    extract($_POST);
    $data =[
        $email
    ];
    get_pass_for_customer($data);
}
function get_pass_now_render($mat_khau_khach_hang,$ma_khach_hang){
    $top_10_yeu_thich_hang_hoa = top_10_yeu_thich_hang_hoa();
    $danh_muc_loai_hang = danh_muc_loai_hang();
    render('get_pass', ["top_10_yeu_thich_hang_hoa" => $top_10_yeu_thich_hang_hoa, "danh_muc_loai_hang" => $danh_muc_loai_hang,"mat_khau_khach_hang" =>$mat_khau_khach_hang,'ma_khach_hang' => $ma_khach_hang]);
}