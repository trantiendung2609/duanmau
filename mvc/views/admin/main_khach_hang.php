<article>
  <div class="container-fluid">
    <div class="article_admin_title">
      <h2>quản lý khách hàng</h2>
    </div>
    <div class="article_admin_list">
      <table class="table">
        <thead>
          <tr>
            <th>STT</th>
            <th>Mã khách hàng</th>
            <th>Họ tên</th>
            <th>Email</th>
            <th>Ảnh</th>
            <th>Kích hoạt</th>
            <th>Vai trò</th>
            <th>Hành động</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1 ?>
          <?php foreach ($danh_muc_khach_hang as $kh) : ?>
            <tr>
              <td><?php echo $i++; ?></td>
              <td>
                <?= $kh['ma_kh'] ?>
              </td>
              <td><?= $kh['ho_ten'] ?></td>
              <td><?= $kh['email'] ?></td>
              <td> <img src="public/images/members/<?= $kh['hinh'] ?>" width="100px" height="100px" alt="" /></td>
              <td><?php if ($kh['kich_hoat'] == 1) {
                    echo "Đã kích hoạt";
                  } ?></td>
              <td><?php if ($kh['vai_tro'] == "0") {
                    echo "Thành viên";
                  } else {
                    echo "Quản trị";
                  } ?></td>

              <td>

                <a href="edit-khach-hang?id=<?= $kh['ma_kh'] ?>" class="btn btn-edit btn-default" onclick="return confirm('Bạn có chắc chắn không?');">Sửa</a>

                <?php if ($kh['vai_tro'] == 1) {
                  echo "";
                } else { ?>
                  <a href="delete-khach-hang?id=<?= $kh['ma_kh'] ?>" class="btn btn-delete btn-danger" onclick="return confirm('Bạn có chắc chắn không?');">Xóa</a>
                <?php } ?>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
      <hr>
    </div>
  </div>
</article>