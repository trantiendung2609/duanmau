<?php
function binh_luan_chi_tiet($id) {
    if (isset($_SESSION['email'])) {
        $binh_luan_with_id = binh_luan_with_id($id);
        render_layout_admin("main_thong_ke_chi_tiet", ['binh_luan_with_id' => $binh_luan_with_id]);
    }else{
        header('Location: error-not-found');

    }
}