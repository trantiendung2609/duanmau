<?php
function add_comment($data, $ma_hh)
{
    $conn = connection();
    $select_hang_hoa_with_id = select_hang_hoa_with_id($ma_hh);
    foreach ($select_hang_hoa_with_id as $row) {
        $items = $row;
    }
    extract($items);

    $sql = "INSERT INTO `binh_luan`(`ma_kh`, `ma_hh`, `noi_dung`, `ngay_bl`) VALUES (?, ?, ?, ?) ";
    $stmt = $conn->prepare($sql);
    if ($stmt->execute($data)) {
        header("location: product-detail?id=$ma_hh&name_pr=$ten_hh&views=$so_luot_xem&loai=$ma_loai");
    }
}

function binh_luan_all()
{
    $conn = connection();
    $sql = "SELECT ma_bl, noi_dung, kh.ho_ten, hh.ten_hh, ngay_bl FROM binh_luan bl JOIN khach_hang kh on bl.ma_kh = kh.ma_kh JOIN hang_hoa hh on bl.ma_hh = hh.ma_hh WHERE 1 ORDER BY ngay_bl DESC" ;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function handle_delete_binh_luan($id, $ma_hh){
    $conn = connection();
    $sql = "DELETE FROM binh_luan WHERE ma_bl = $id" ;
    $stmt = $conn->prepare($sql);
    if($stmt->execute()){
        header("Location: thong-ke-binh-luan-chi-tiet?id=$ma_hh");
    }
}

function binh_luan_with_id($id)
{
    $conn = connection();
    $sql = "SELECT bl.ma_hh, ma_bl, noi_dung, kh.ho_ten, hh.ten_hh, ngay_bl FROM binh_luan bl JOIN khach_hang kh on bl.ma_kh = kh.ma_kh JOIN hang_hoa hh on bl.ma_hh = hh.ma_hh WHERE bl.ma_hh = $id ORDER BY ngay_bl DESC;" ;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}