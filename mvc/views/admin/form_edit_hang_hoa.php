<article>
    <div class="container">
        <div class="article_admin_title">
            <h2>quản lý hàng hóa</h2>
        </div>
        <div class="article_admin_add_product">
            <form action="save-edit-danh-sach" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Mã hàng hóa</label>
                            <input class="form-control" type="text" name="ma_hh"  value="<?= $id ?> " readonly>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Tên hàng hóa</label>
                            <input class="form-control" type="text" name="ten_hh" value="<?= $ten_hh ?>">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Đơn giá</label>
                            <input class="form-control" type="number" name="don_gia" min="0" value="<?= $don_gia ?>">
                            
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Loại hàng</label>
                            <select class="form-control" name="ma_loai" id="">
                                <option value="<?= $ma_loai_bang_loai ?>"><?= $ten_loai_bang_loai ?></option>
                                <?php foreach ($danh_muc_loai_hang  as $lh) : ?>
                                    <option value="<?= $lh["ma_loai"] ?>"><?= $lh["ten_loai"] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Thể loại hàng</label>
                            <select class="form-control" name="dac_biet" id="">
                                <?php if($dac_biet==0){?>
                                <option value="<?= $dac_biet ?>"><?= $dac_biet==0?'Bình thường':'Đặc biệt' ?></option>
                                <option value="1">Đặc biệt</option>
                              <?php }else{?>
                                <option value="<?= $dac_biet ?>"><?= $dac_biet==0?'Bình thường':'Đặc biệt' ?></option>
                                <option value="0">Bình thường</option>
                                <?php }?>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Giảm giá</label>
                            <input class="form-control" type="number" name="giam_gia" value="<?= $giam_gia ?>">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group d-flex flex-column">
                            <label for="">Hình</label>
                            <input type="file" name="hinh" placeholder="" required>
                            <img src="public/images/products/<?= $hinh ?>" width="100px" height="100px" alt="" />
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="">Mô tả</label>
                            <textarea name="mo_ta" class="w-100 description form-control"><?= $mo_ta ?></textarea>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary btn-lg" type="submit" name="btn_insert">Lưu</button>
                <a class="btn btn-secondary btn-lg" href="admin">Trở lại</a>
            </form>
        </div>
    </div>
</article>