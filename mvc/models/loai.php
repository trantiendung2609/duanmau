<?php
//function lấy toàn bộ dữ liệu bảng loai 
function danh_muc_loai_hang()
{
    $conn = connection();
    $sql = "SELECT * FROM loai";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

//funtion insert hàng hóa
function loai_insert($data = [])
{
    $conn = connection();
    $sql = "INSERT INTO `loai`( `ten_loai`) VALUES (?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
    header("Location: ?ctr=admin-danh-sach-loai");
}
//delete loai
function loai_delete($id)
{
    $conn = connection();
    $sql = "DELETE FROM `loai` WHERE `ma_loai` = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

function get_products_alike($id)
{
    $conn = connection();
    $sql = "SELECT * FROM `loai` l JOIN `hang_hoa` hh ON l.ma_loai = hh.ma_loai WHERE l.`ma_loai` = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

//funtion thống kê loại hàng
function thong_ke()
{
    $conn = connection();
    $sql = "SELECT loai.ma_loai, loai.ten_loai, COUNT(*) As 'soluong', MAX(hang_hoa.don_gia) AS 'giacao', MIN(hang_hoa.don_gia) AS 'giathap', AVG(hang_hoa.don_gia) AS 'giatrungbinh' FROM loai JOIN hang_hoa on loai.ma_loai = hang_hoa.ma_loai GROUP BY loai.ma_loai, loai.ten_loai";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
