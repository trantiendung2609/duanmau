<article>
    <div class="container">
    
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <form class="signup" action="?ctr=check-update-account" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label class="label_update" for="">Họ và tên</label>
                                            <input type="text" class="form-control input_update" name="ho_ten" value="<?= $_SESSION['ho_ten'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label class="label_update" for="">Email</label>
                                            <input type="email" class="form-control input_update" name="email" value="<?= $_SESSION['email'] ?> " readonly>
                                        </div>

                                        <div class="form-group">
                                            <label class="label_update" for="">Mật khẩu cũ</label>
                                            <input type="password" class="form-control input_update" name="old_pass" value="" required>
                                         
                                        </div>
                                        <div class="form-group">
                                            <label class="label_update" for="">Mật khẩu mới</label>
                                            <input type="password" class="form-control input_update" name="new_pass" required>
                                         
                                        </div>
                                        <div class="form-group">
                                            <label class="label_update" for="">Xác nhận mật khẩu mới</label>
                                            <input type="password" class="form-control input_update" name="cf_new_pass" required>
                                         
                                        </div>
                                        <div class="form-group">
                                            <label class="label_update" for="">Ảnh đại diện</label><br>
                                            <input class=" image_update" type="file" name="image_update" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-success btn_update " value="Cập nhật">
                                            <a class="btn btn-success btn_update " href="home">Quay lại</a>
                                        </div>
                                    </form>


                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</article>