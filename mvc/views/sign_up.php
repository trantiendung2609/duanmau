<article>
    <div class="container">
        <?php if ($data == true) {
        ?>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 name="hehe">Bạn đã đăng ký thành công </h2>
                            <a class="btn btn-success btn_sign-up" href="home">Đăng nhập</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php

        } else { ?>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <form class="signup" action="?ctr=check-sign-up" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label class="label_sign-up" for="">Họ và tên</label>
                                            <input type="text" class="form-control input_sign-up" name="ho_ten" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="label_sign-up" for="">Email</label>
                                            <input type="email" class="form-control input_sign-up" name="email" required>
                                            <?php
                                            if (isset($_GET['email']) == 'false') {
                                                $error['sign_up-email'] = '<span class="error">Email đã tồn tại</span>';
                                                echo $error['sign_up-email'];
                                            } else {
                                                echo "";
                                            }
                                            ?>
                                        </div>

                                        <div class="form-group">
                                            <label class="label_sign-up" for="">Mật khẩu</label>
                                            <input type="password" class="form-control input_sign-up" name="pass" required>
                                            <?php if (isset($_GET['cf_pass']) == 'false') {
                                                $error['sign_up-pass'] = '<span class="error">Mật khẩu không khớp</span>';
                                                echo $error['sign_up-pass'];
                                            } else {
                                                echo "";
                                            }
                                            ?>
                                        </div>
                                        <div class="form-group">
                                            <label class="label_sign-up" for="">Xác nhận mật khẩu</label>
                                            <input type="password" class="form-control input_sign-up" name="cf_pass" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="label_sign-up" for="">Ảnh đại diện</label><br>
                                            <input class=" image_sign-up" type="file" name="image_sign_up" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-success btn_sign-up " value="Đăng ký">
                                            <a class="btn btn-success btn_sign-up " href="home">Đăng nhập</a>
                                        </div>
                                    </form>


                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

    </div>
</article>