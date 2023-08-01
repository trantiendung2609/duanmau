<?php
function list_products_detail($id)
{
    $get_products_alike = get_products_alike($id);
    $top_10_yeu_thich_hang_hoa = top_10_yeu_thich_hang_hoa();
    $danh_muc_loai_hang = danh_muc_loai_hang();
    render('list_products_detail', ["get_products_alike" => $get_products_alike, "top_10_yeu_thich_hang_hoa" => $top_10_yeu_thich_hang_hoa, "danh_muc_loai_hang" => $danh_muc_loai_hang]);
}

function search_products($ten_hh)
{
    $search_hh_theo_ten = search_hh_theo_ten($ten_hh);
    $top_10_yeu_thich_hang_hoa = top_10_yeu_thich_hang_hoa();
    $danh_muc_loai_hang = danh_muc_loai_hang();
    render('list_products_search', ["search_hh_theo_ten" => $search_hh_theo_ten, "top_10_yeu_thich_hang_hoa" => $top_10_yeu_thich_hang_hoa, "danh_muc_loai_hang" => $danh_muc_loai_hang]);

}
