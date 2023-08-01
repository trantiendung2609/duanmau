<?php
//render giao diện người dùng
//$path: tên file đường dẫn trong views
//$data: là dữ liệu được gửi vào view
function render($path, $data = [])
{
    extract($data);
    $view = "./mvc/views/" . $path . "/" . $path . ".php";
    include_once "./mvc/views/layout.php";
}
