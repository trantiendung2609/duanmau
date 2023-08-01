<article>
  <div class="container-fluid">
    <div class="article_admin_thong_ke_danh_muc">
      <div class="article_admin_title">
        <h2>thống kê danh mục</h2>
      </div>
      <div class="article_admin_list">
        <table class="table">
          <thead>
            <tr>
              <th>STT</th>
              <th>Loại hàng</th>
              <th>Số lượng</th>
              <th>Giá cao nhất</th>
              <th>Giá thấp nhất</th>
              <th>Giá trung bình</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1 ?>
            <?php foreach ($thong_ke as $item) : ?>
              <tr>
                <td><?= $i++ ?></td>
                <td><?= $item['ten_loai'] ?></td>
                <td><?= $item['soluong'] ?></td>
                <td><?= $item['giacao'] ?></td>
                <td><?= $item['giathap'] ?></td>
                <td><?= round($item['giatrungbinh']) ?></td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>
        <hr>
        <a class="btn btn-primary btn-lg thong_ke" href="admin-thong-ke?id=bieu_do_danh_muc">Xem biểu đồ thống kê danh mục</a>
      </div>
    </div>
    <div class="article_admin_thong_ke_binh_luan">
      <div class="article_admin_title">
        <h2>thống kê bình luận</h2>
      </div>
      <div class="article_admin_list">
        <table class="table">
          <thead>
            <tr>
              <th>STT</th>
              <th>Mã sản phẩm</th>
              <th>Tên Sản phẩm</th>
              <th>Hành động</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 0 ?>
            <?php foreach ($hang_hoa_all as $item) : ?>
              <tr>
                <td> <?= $i++ ?></td>
                <td><?= $item['ma_hh'] ?></td>
                <td><?= $item['ten_hh'] ?></td>
                <td><a href="thong-ke-binh-luan-chi-tiet?id=<?= $item['ma_hh'] ?>" class="btn btn-delete btn-danger">Chi tiết</a>
                  
                </td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>
        <hr>
      </div>
    </div>
  </div>
</article>