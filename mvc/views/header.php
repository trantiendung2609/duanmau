<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./public/font/icons/fontawesome-free-6.1.1-web/fontawesome-free-6.1.1-web/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="./public/font/icons/icofont/icofont/icofont.min.css" />
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="./public/css/clients/header.css">
    <link rel="stylesheet" href="./public/css/clients/main_home.css">
    <link rel="stylesheet" href="./public/css/clients/sidebar.css">
    <link rel="stylesheet" href="./public/css/clients/footer.css">
    <link rel="stylesheet" href="./public/css/clients/contact.css">
    <link rel="stylesheet" href="./public/css/clients/sign_up.css">
    <link rel="stylesheet" href="./public/css/clients/get_pass.css">
    <link rel="stylesheet" href="./public/css/clients/product_detail.css">
    <link rel="stylesheet" href="./public/css/clients/list_products_detail.css">
    <link rel="stylesheet" href="./public/css/clients/update_account.css">
    <link rel="stylesheet" href="./public/css/clients/responsive.css" />
    <title><?= !isset($_GET['ctr']) ? 'home' : $_GET['ctr'] ?></title>
</head>

<body>
    <div class="container-fluid">
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-3 col-md-3 col-sm-4 col-xs-5">
                        <div class="header_logo">
                            <a href="home"><img src="./public/images/xshop.png" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10 col-md-9 col-sm-8 col-xs-7">
                        <div class="header_search-and-basket">
                            <div class="header_search-and-basket--item header_search">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </div>
                            <div class="header_search-and-basket--item header_basket">
                                <i class="icofont-basket"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <nav class="header_nav">
                            <ul>
                                <li><a href="home">Trang chủ</a></li>
                                <li><a href="about">Giới thiệu</a></li>
                                <li><a href="contact">Liên hệ</a></li>
                                <li><a href="feedback">Góp ý</a></li>
                                <li><a href="question">Hỏi đáp</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="header_search-input">
                <form action="search-products" method="GET">
                    <input type="text" placeholder="Tìm kiếm" name="value_search" />
                    <button type='submit'><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
        </header>