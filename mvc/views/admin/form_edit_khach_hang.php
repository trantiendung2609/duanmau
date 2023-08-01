<article>
    <div class="container">
        <div class="article_admin_title">
            <h2>quản lý khách hàng</h2>
        </div>
        <br>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-12 ">
                            <div class="form-group">
                                <form class="signup" action="save-edit-khach-hang" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label class="label_save_khach_hang" for="">Mã khách hàng</label><br>
                                        <input class="form-control" type="text" name="ma_kh" readonly value="<?= $ma_kh ?>">
                                    </div>
                                    <div class="form-group">
                                        <label class="label_save_khach_hang" for="">Tên khách hàng</label><br>
                                        <input class="form-control" type="text" name="ten_kh" readonly value="<?= $ho_ten ?>">
                                    </div>
                                    <div class="form-group">
                                        <label class="label_save_khach_hang" for="">Email</label><br>
                                        <input class="form-control" type="text" name="email" readonly value="<?= $email ?>">
                                    </div>
                                    <div class="form-group">
                                        <label class="label_save_khach_hang" for="">Vai trò</label><br>
                                        <select name="vai_tro" id="" >
                                            <?php if ($vai_tro == 1) {
                                            ?>
                                                <option value="<?= $vai_tro ?>"><?= $vai_tro == 1 ? "Quản trị" : "Thành viên" ?></option>
                                                <option value="0">Thành viên</option>
                                            <?php } else { ?>
                                                <option value="<?= $vai_tro ?>"><?= $vai_tro == 1 ? "Quản trị" : "Thành viên" ?></option>
                                                <option value="1">Quản trị</option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="label_save_khach_hang" for="">Ảnh đại diện</label><br>
                                        <input class=" image_sign-up" type="file" name="image_khach_hang" required>
                                        <img src="public/images/members/<?= $hinh ?>" alt="" width="150px" height="200px">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-success btn_save " value="Lưu">
                                        <a class="btn btn-success btn_sign-up " href="admin-khach-hang" style="font-size: 18px;height: 4rem;line-height:3rem">Trở lại</a>
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