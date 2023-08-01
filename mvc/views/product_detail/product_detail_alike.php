<div class="article_product_detail--alike">
    <h2>Hàng cùng loại</h2>
    <nav class="product_alike">
        <ul>
            <?php foreach( $result_loai as $row):?>
            <li><a href="product-detail?id=<?= $row['ma_hh']?>&name_pr=<?= $row['ten_hh']?>&views=<?=  $row['so_luot_xem']?>&loai=<?= $row['ma_loai']?>"><?= $row['ten_hh']?></a></li>
            <?php endforeach?>
        </ul>
    </nav>
</div>