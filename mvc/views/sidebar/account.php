<div class="article_account">
    <h2>tài khoản</h2>
    <?php if (isset($_SESSION['vai_tro']) && $_SESSION['vai_tro'] != 1) { ?>
        <form action="?ctr=logout" method="POST" class="article_account_form">
            <div class="form-outline form_group mb-4">
                <label class="form-label" for="form2Example1">Xin chào</label>
            </div>
            <div class="row mb-4">
                <div class="col d-flex">
                    <div class="form-check">
                        <img src="./public/images/members/<?= $_SESSION['hinh'] ?>" alt="" width="100%" height="100%">
                    </div>
                </div>
            </div>
            <div class="form-outline form_group mb-4 text-center">
                <label class="form-label" for="form2Example2"><?= $_SESSION['ho_ten'] ?></label>
            </div>
            <div class="article_account_form--information-more">
                <a href="get-pass">Quên mật khẩu?</a><br /><br />
                <a href="update-account?status=active">Cập nhật tài khoản</a>
            </div>
            <button type="submit" class="btn btn-primary btn-block mb-4">
                Thoát
            </button>
        </form>
    <?php } else {
    ?>
        <form action="?ctr=login-success" method="POST" class="article_account_form">
            <div class="form-outline form_group mb-4">
                <label class="form-label" for="form2Example1">Tên đăng nhập</label>
                <input type="email" name="user" id="form2Example1" class="form-control" required />
            </div>
            <div class="form-outline form_group mb-4">
                <label class="form-label" for="form2Example2">Mật khẩu</label>
                <input type="password" id="form2Example2" class="form-control" name="pass" required />
                <br>
                <?php
                if (isset($_GET['login']) == 'false') {
                    $error['user_and_pass_false'] = '<span class="error">Tên đăng nhập hoặc mật khẩu sai</span>';
                    echo $error['user_and_pass_false'];
                } else {
                    echo "";
                }
                ?>
            </div>
            <div class="row mb-4">
                <div class="col d-flex">
                    <div class="form-check">
                        <label class="form-check-label" for="form2Example31">
                            Ghi nhớ tài khoản

                        </label>
                        <input class="form-check-input" type="checkbox" value="" id="form2Example31" />
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block mb-4" name="btn_login">
                Đăng nhập
            </button>
            <div class="article_account_form--information-more">
                <a href="get-pass">Quên mật khẩu?</a><br /><br />
                <a href="sign-up">Đăng ký thành viên</a>
            </div>
        </form>
    <?php } ?>

</div>