<article>
    <div class="container-fluid">
        <div class="article_admin_thong_ke_binh_luan">
            <div class="article_admin_title">
                <h2>thống kê bình luận chi tiết</h2>
            </div>
            <div class="article_admin_list">
                <table class="table">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Mã bình luận</th>
                            <th>Tên khách hàng</th>
                            <th>Nội dung</th>
                            <th>Ngày bình luận</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0 ?>
                        <?php foreach ($binh_luan_with_id as $item) : ?>
                            <tr>
                                <td> <?= $i++ ?></td>
                                <td><?= $item['ma_bl'] ?></td>
                                <td><?= $item['ho_ten'] ?></td>
                                <td><?= $item['noi_dung'] ?></td>
                                <td><?= $item['ngay_bl'] ?></td>
                                <td>
                                    <a href="delete-binh-luan?id=<?= $item['ma_bl'] ?>&ma_hh=<?= $item['ma_hh'] ?>" class="btn btn-delete btn-danger" onclick="return confirm('Bạn có chắc chắn không?');">Xóa</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                    <a href="admin-thong-ke"  class="btn btn-delete btn-danger">Trở lại</a>
                </table>
                <hr>
            </div>
        </div>
    </div>
</article>