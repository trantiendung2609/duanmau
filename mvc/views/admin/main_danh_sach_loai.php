<article>
  <div class="container">
    <div class="article_admin_title">
      <h2>quản lý loại</h2>
    </div>
    <div class="article_admin_list_loai">
      <table class="table">
        <thead>
          <tr>
            <th>STT</th>
            <th>Mã loại</th>
            <th>Tên loại</th>
            <th>Hành động</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1 ?>
          <?php foreach ($danh_muc_loai_hang as $lh) : ?>
            <tr>
              <td><?php echo $i++; ?></td>
              <td><?php echo $lh['ma_loai']; ?></td>
              <td><?php echo $lh['ten_loai']; ?></td>
              <td>
                <a href="delete-danh-sach-loai?id=<?= $lh['ma_loai'] ?>" class="btn btn-delete btn-danger" onclick="return confirm('Bạn có chắc chắn không?');">Xóa</a>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
      <hr>
      <a class="btn btn-primary btn-lg add" href="admin-loai">Thêm loại</a>
      <a class="btn btn-primary btn-lg add" href="admin-add">Thêm sản phẩm</a>

    </div>
  </div>
</article>