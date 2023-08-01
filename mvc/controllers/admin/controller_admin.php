<?php
function render_layout_admin($path, $data = [])
{
    extract($data);
    $views_admin = "./mvc/views/admin/" . $path . ".php";
    include_once "./mvc/views/admin/layout_admin.php";
}
