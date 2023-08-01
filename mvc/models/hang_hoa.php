<?php
//function lấy toàn bộ dữ liệu bảng hang_hoa
function hang_hoa_all()
{
    $conn = connection();
    $sql = "SELECT * FROM hang_hoa";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
//function đếm toàn bộ dữ liệu bảng hang_hoa
function count_hang_hoa_all()
{
    $item_on_page = !empty($_GET['item_page']) ? $_GET['item_page'] : 9;
    $current_page = !empty($_GET['page']) ? $_GET['page'] : 1;
    $conn = connection();
    $sql = "SELECT count(*) as soluong FROM hang_hoa";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $totalRecords = $result;
    foreach ($totalRecords as $item_so_luong) {
        $item = $item_so_luong;
    };

    extract($item);
    $totalPages = ceil($soluong / $item_on_page);
    return ($totalPages);
}
//function lấy toàn bộ dữ liệu bảng hang_hoa theo offset
function hang_hoa_offset()
{
    $item_on_page = !empty($_GET['item_page']) ? $_GET['item_page'] : 9; // số sản phẩm trên 1 trang
    $current_page = !empty($_GET['page']) ? $_GET['page'] : 1; // trang số ?
    $offset = ($current_page - 1) * $item_on_page; //lấy sản phẩm và bắt đầu từ sản phẩm số 0
    $conn = connection();
    $sql = "SELECT * FROM hang_hoa order by ma_hh ASC LIMIT $item_on_page offset $offset";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
//function lấy toàn bộ dữ liệu bảng hang_hoa và sắp xếp theo mới nhất
function hang_hoa_new()
{
    $conn = connection();
    $sql = "SELECT * FROM hang_hoa order by ma_hh desc";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
//function lấy toàn bộ dữ liệu bảng hang_hoa có số lượt xem từ 10 -> 20
function so_luot_xem_hang_hoa_trong_khoang()
{
    $conn = connection();
    $sql = "SELECT * FROM hang_hoa where so_luot_xem >= 10 and so_luot_xem <= 20 ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

//function lấy toàn bộ dữ liệu bảng hang_hoa top_10_yeu_thich_hang_hoa
function top_10_yeu_thich_hang_hoa()
{
    $conn = connection();
    $sql = "SELECT * FROM  hang_hoa where 1 order by so_luot_xem desc limit 0,10";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
//funtion insert hàng hóa
function hang_hoa_insert($data = [])
{
    $conn = connection();
    $sql = "INSERT INTO `hang_hoa`( `ten_hh`, `don_gia`, `giam_gia`, `hinh`, `ma_loai`,`ngay_nhap`, `mo_ta`) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
}
//funtion delete hàng hóa
function hang_hoa_delete($id, $hinh)
{
    $conn = connection();
    $sql = "DELETE FROM `hang_hoa` WHERE `ma_hh` = $id";
    $stmt = $conn->prepare($sql);
    if ($stmt->execute()) {
        unlink("./public/images/products/" . $hinh);
    }
}
//funtion lấy hàng hóa theo id
function select_hang_hoa_with_id($id)
{
    $conn = connection();
    $sql = "SELECT * FROM `hang_hoa`  WHERE ma_hh = $id";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
//funtion save edit danh sách
function save_edit_list($data = [])
{
    $conn = connection();
    $sql = "UPDATE `hang_hoa` SET `ten_hh` = ?, `don_gia` = ?, `giam_gia` = ?, `hinh` =  ?, `ma_loai` = ?,`dac_biet`=?,`ngay_nhap` = ?,  `mo_ta` = ? WHERE `hang_hoa`.`ma_hh` = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt->execute($data)) {
        header("Location: admin");
    }
}

//funtion lấy hàng hóa theo id và cập nhật lượt xem
function get_product_with_id($data_id = [], $data_views = [], $data_loai = [])
{
    $conn = connection();
    $sql = "SELECT * FROM `hang_hoa` WHERE ma_hh = ?";
    $sql_so_luot_xem = "UPDATE `hang_hoa` SET `so_luot_xem`= ?+1 WHERE ma_hh = ?";
    $stmt = $conn->prepare($sql);
    $stmt_so_luot_xem = $conn->prepare($sql_so_luot_xem);
    $stmt->execute($data_id);
    $stmt_so_luot_xem->execute($data_views);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $sql_comment = "SELECT hh.`ma_hh`, `ten_hh`, `don_gia`, `giam_gia`, hh.`hinh`, `mo_ta`, `noi_dung`, kh.`ma_kh`,`ho_ten`,`ngay_bl` FROM `hang_hoa` hh JOIN binh_luan bl ON hh.ma_hh = bl.ma_hh JOIN khach_hang kh on bl.ma_kh = kh.ma_kh WHERE hh.ma_hh = ? order by ngay_bl DESC";
    $stmt_comment = $conn->prepare($sql_comment);
    $stmt_comment->execute($data_id);
    $result_comment = $stmt_comment->fetchAll(PDO::FETCH_ASSOC);


    $sql_alike = "SELECT so_luot_xem,ma_hh,ten_hh, hh.ma_loai, `ten_loai` FROM `hang_hoa` hh join `loai` l on hh.ma_loai = l.ma_loai WHERE hh.ma_loai = ? and hh.ma_hh != ?";
    $stmt_loai = $conn->prepare($sql_alike);
    $stmt_loai->execute($data_loai);
    $result_loai = $stmt_loai->fetchAll(PDO::FETCH_ASSOC);

    handler_product_with_id($result, $result_comment, $result_loai);
}
function handler_product_with_id($result, $result_comment, $result_loai)
{
    render_product_detail($result, $result_comment, $result_loai);
}


//function san pham dac biet
function products_special()
{
    $conn = connection();
    $sql = "SELECT * FROM `hang_hoa` WHERE dac_biet";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

//function search hang hoa theo ten
function search_hh_theo_ten($value_hh){
    $conn = connection();
    $sql = "SELECT * FROM `hang_hoa` hh Join `loai` l on hh.ma_loai = l.ma_loai WHERE `ten_hh` like '%$value_hh%' or `ten_loai` like '%$value_hh%'";
    $stmt = $conn->prepare($sql);
    $result = $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return($result) ;
}