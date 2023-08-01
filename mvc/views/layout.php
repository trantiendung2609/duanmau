<?php include_once "header.php"; ?>
<?php if ($path == "404") {
    include_once "./mvc/views/404.php";
} else if($path == 'sign_up') {
    include_once "./mvc/views/sign_up.php";
} else if($path == 'update_account') {
    include_once "./mvc/views/update_account.php";
}else{
    include_once "article.php";
} ?>

<?php include_once "footer.php"; ?>
