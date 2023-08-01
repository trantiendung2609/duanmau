<?php
function show_admin_list()
{
    if (isset($_SESSION['email'])) {
        $hang_hoa_new = hang_hoa_new();
        render_layout_admin("main_list", ['hang_hoa_new' => $hang_hoa_new]);
    }else{
        header('Location: error-not-found');

    }
 

}
function delete_hang_hoa($id)
{
    $img_hang_hoa = '';
    $select_hang_hoa_with_id = select_hang_hoa_with_id($id);
    foreach ($select_hang_hoa_with_id as $item_sl) {
        $img_hang_hoa = $item_sl;
    }
    extract($img_hang_hoa);
    hang_hoa_delete($id,$hinh);
    header("Location: admin");
}
function edit_hang_hoa($id)
{
    $danh_muc_loai_hang = danh_muc_loai_hang();
    $select_hang_hoa_with_id = select_hang_hoa_with_id($id);
    $select_hang_hoa_id = "";
    foreach ($select_hang_hoa_with_id as $slhh) {
        $select_hang_hoa_id = $slhh;
    }
    foreach ($danh_muc_loai_hang  as $lh) {
        if ($lh['ma_loai'] == $select_hang_hoa_id["ma_loai"]) {
            $ma_loai_bang_loai = $lh['ma_loai'];
            $ten_loai_bang_loai = $lh['ten_loai'];
        }
    }
    extract($select_hang_hoa_id);
    render_layout_admin("form_edit_hang_hoa", ['dac_biet' => $dac_biet,"danh_muc_loai_hang" => $danh_muc_loai_hang, "ten_loai_bang_loai" => $ten_loai_bang_loai, 'id' => $id, "ten_hh" => $ten_hh, "don_gia" => $don_gia, "giam_gia" => $giam_gia, "hinh" => $hinh, "ma_loai_bang_loai" => $ma_loai_bang_loai, "mo_ta" => $mo_ta]);
}
function save_edit_danh_sach()
{
    $date = date("Y-m-d");
    extract($_POST);
    $image = $_FILES['hinh'];
    $hinh = $image['name'];
    $data = [
        $ten_hh,
        $don_gia,
        $giam_gia,
        $hinh,
        $ma_loai,
        $dac_biet,
        $date,
        $mo_ta,
        $ma_hh
    ];
    move_uploaded_file($image['tmp_name'], "public/images/products/" . $hinh);
    save_edit_list($data);
}
