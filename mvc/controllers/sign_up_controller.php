<?php
function sign_up()
{

    render('sign_up');
}
function check_sign_up()
{
    extract($_POST);
    $image  = $_FILES['image_sign_up'];
    $hinh = $image['name'];
    move_uploaded_file($image['tmp_name'], "public/images/members/" . $hinh);
    $data = [
        $pass,
        $ho_ten,
        $email,
        $hinh,
        1,
        0
    ];
    sign_up_member($data,$cf_pass);
}
function sign_up_success()
{
    render('sign_up', [true]);
}
