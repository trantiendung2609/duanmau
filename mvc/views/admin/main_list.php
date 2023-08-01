<article>
  <div class="container-fluid">
    <div class="article_admin_title">
      <h2>quản lý hàng hóa</h2>
    </div>
    <div class="article_admin_list">
      <a class="btn btn-primary btn-lg add" href="admin-add">Thêm sản phẩm</a>
      <br>
      <br>
      <table class="table">
        <thead>
          <tr>
            <th>STT</th>
            <th>Ảnh</th>
            <th>Tên sản phẩm</th>
            <th>Thể loại sản phẩm</th>
            <th>Đơn giá</th>
            <th>Lượt xem</th>
            <th>Ngày đăng</th>
            <th>hành động</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1 ?>
          <?php foreach ($hang_hoa_new as $hhn) : ?>
            <tr>
              <td><?php echo $i++; ?></td>
              <td>
                <img src="public/images/products/<?= $hhn['hinh'] ?>" width="100px" height="100px" alt="" />
              </td>
              <td><?= $hhn['ten_hh'] ?></td>
              <td><?= $hhn['dac_biet'] == 0 ? 'Bình thường' : 'Đặc biệt' ?></td>
              <td><?= $hhn['don_gia'] ?></td>
              <td><?= $hhn['so_luot_xem'] ?></td>
              <td><?= $hhn['ngay_nhap'] ?></td>
              <td>
                <a href="edit-danh-sach-hang-hoa?id=<?= $hhn['ma_hh'] ?>" class="btn btn-edit btn-default" onclick="return confirm('Bạn có chắc chắn không?');">Sửa</a>
                <a href="delete?id=<?= $hhn['ma_hh'] ?>" class="btn btn-delete btn-danger" onclick="return confirm('Bạn có chắc chắn không?');">Xóa</a>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
      <hr>
    </div>
  </div>
</article>