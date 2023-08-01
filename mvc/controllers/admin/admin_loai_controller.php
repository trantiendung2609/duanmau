<?php
function show_admin_loai() {
    if (isset($_SESSION['email'])) {
        render_layout_admin("main_loai");
    }else{
        header('Location: error-not-found');

    }
} 
function admin_add_loai() {
    extract($_POST);
    loai_insert([$ten_loai]);
}
function admin_danh_sach_loai() {
    $danh_muc_loai_hang = danh_muc_loai_hang();
    render_layout_admin("main_danh_sach_loai",["danh_muc_loai_hang" => $danh_muc_loai_hang]);
} 

function delete_loai($id){
    loai_delete($id);
    header("Location: add-loai?ctr=admin-danh-sach-loai");
}