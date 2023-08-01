<?php
//thống kê danh mục
function show_thong_ke()
{
    if (isset($_SESSION['email'])) {
        $thong_ke = thong_ke();
        $hang_hoa_all = hang_hoa_all();
        render_layout_admin('main_thong_ke', ['thong_ke' => $thong_ke, 'hang_hoa_all' => $hang_hoa_all]);
    } else {
        header('Location: error-not-found');
    }
}
function show_bieu_do_thong_ke()
{
    if (isset($_SESSION['email'])) {
        $thong_ke = thong_ke();
        render_layout_admin('main_bieu_do_thong_ke', ['thong_ke' => $thong_ke]);
    } else {
        header('Location: error-not-found');
    }
}
function delete_binh_luan($id, $ma_hh)
{
    handle_delete_binh_luan($id, $ma_hh);
}
