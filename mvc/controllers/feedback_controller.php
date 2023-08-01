<?php
function show_feedback() {
    $top_10_yeu_thich_hang_hoa = top_10_yeu_thich_hang_hoa();
    $danh_muc_loai_hang = danh_muc_loai_hang();
    render('feedback', ["top_10_yeu_thich_hang_hoa" => $top_10_yeu_thich_hang_hoa, "danh_muc_loai_hang" => $danh_muc_loai_hang]);
}