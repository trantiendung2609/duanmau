<?php
//Kết nối đến CSDL
function connection()
{
    try {
        $conn = new PDO("mysql:host=localhost; dbname=xshop; charset=utf8", "root", "");
        return $conn;
    } catch (PDOException $e) {
        echo "lỖI KẾT NỐI DỮ LIỆU: " . $e->getMessage();
    }
}
