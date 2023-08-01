<?php
function product_detail($id, $name_pr)
{
    $top_10_yeu_thich_hang_hoa = top_10_yeu_thich_hang_hoa();
    $danh_muc_loai_hang = danh_muc_loai_hang();
    render('product_detail', ["id" => $id, "name_pr" => $name_pr, "top_10_yeu_thich_hang_hoa" => $top_10_yeu_thich_hang_hoa, "danh_muc_loai_hang" => $danh_muc_loai_hang]);
}
function product_detail_id_and_name($id, $views, $loai)
{

    $data_id = [
        $id
    ];
    $data_views = [
        $views, $id
    ];
    $data_loai = [
        $loai,
        $id
    ];
    get_product_with_id($data_id, $data_views, $data_loai);
}

function render_product_detail($result, $result_comment, $result_loai)
{
   
    $dpd = '';
    foreach ($result as $data_product_detail) {
        $dpd = $data_product_detail;
    }
    $top_10_yeu_thich_hang_hoa = top_10_yeu_thich_hang_hoa();
    $danh_muc_loai_hang = danh_muc_loai_hang();
    extract($dpd);
    render('product_detail', ['result_loai' => $result_loai, 'result_comment' => $result_comment, "ten_hh" => $ten_hh, "ma_hh" => $ma_hh, "don_gia" => $don_gia, "giam_gia" => $giam_gia, "hinh" => $hinh, "mo_ta" => $mo_ta, "noi_dung" => $noi_dung, "top_10_yeu_thich_hang_hoa" => $top_10_yeu_thich_hang_hoa, "danh_muc_loai_hang" => $danh_muc_loai_hang]);
}


function send_comment($ma_hh)
{
    extract($_POST);
    $date = date("Y-m-d H:i:s");
    $ma_kh = $_SESSION["ma_kh"];
    $noi_dung = $comment;
    $data= [
        $ma_kh,
        $ma_hh,
        $noi_dung,
        $date
    ];
    add_comment($data,$ma_hh);
}
