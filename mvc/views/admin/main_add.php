<article>
            <div class="container">
                <div class="article_admin_title">
                    <h2>quản lý hàng hóa</h2>
                </div>
                <div class="article_admin_add_product">
                    <form action="?ctr=save-hang-hoa" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Mã hàng hóa</label>
                                    <input class="form-control" type="text" name="ma_hh" readonly placeholder="auto number"
                                        disabled>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Tên hàng hóa</label>
                                    <input class="form-control" type="text" name="ten_hh" placeholder="tên hàng" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Đơn giá</label>
                                    <input class="form-control" type="number" name="don_gia" min="0" value="0">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Loại hàng</label>
                                    <select class="form-control" name="ma_loai" id="" required>
                                        <option value="">Mã loại</option>
                                        <?php foreach($loai_hang  as $lh):?>
                                            <option value="<?= $lh["ma_loai"]?>"><?= $lh["ten_loai"]?></option>
                                        <?php endforeach?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Giảm giá</label>
                                    <input class="form-control" type="number" name="giam_gia"  value="0">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group d-flex flex-column">
                                    <label for="">Hình</label>
                                    <input type="file" name="hinh" placeholder="" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Mô tả</label>
                                    <textarea name="mo_ta" class="w-100 description form-control" required></textarea>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-lg" type="submit" name="btn_insert">Thêm</button>
                        <a class="btn btn-secondary btn-lg" href="admin">Danh sách</a>
                    </form>
                </div>
            </div>
        </article>