<?php
//Hiên thị contact
function show_contact()
{
    $top_10_yeu_thich_hang_hoa = top_10_yeu_thich_hang_hoa();
    $danh_muc_loai_hang = danh_muc_loai_hang();
    render('contact', [ "top_10_yeu_thich_hang_hoa" => $top_10_yeu_thich_hang_hoa,"danh_muc_loai_hang" => $danh_muc_loai_hang]);
}