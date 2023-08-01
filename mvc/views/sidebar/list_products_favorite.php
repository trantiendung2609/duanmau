<div class="article_category_products--favorite">
    <h2>top 10 yêu thích</h2>
    <ul>
        <?php foreach($top_10_yeu_thich_hang_hoa as $top):?>
        <li>
            <a href="product-detail?id=<?= $top['ma_hh']?>&name_pr=<?= $top['ten_hh']?>&views=<?=  $top['so_luot_xem']?>&loai=<?=  $top['ma_loai']?>"><img class="col-4" src="./public/images/products/<?= $top['hinh']?>" alt="" /><span class="col-8"><?= $top['ten_hh']?></span></a>
        </li>
        <hr>
        <?php endforeach?>
    </ul>
</div>