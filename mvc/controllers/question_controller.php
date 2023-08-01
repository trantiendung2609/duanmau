<?php
function show_question() {
    $top_10_yeu_thich_hang_hoa = top_10_yeu_thich_hang_hoa();
    $danh_muc_loai_hang = danh_muc_loai_hang();
    render('question', ["top_10_yeu_thich_hang_hoa" => $top_10_yeu_thich_hang_hoa, "danh_muc_loai_hang" => $danh_muc_loai_hang]);
}