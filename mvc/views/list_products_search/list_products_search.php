<div class="article_list_products_detail article_list_products_detail-search">
    <div class="row">

        <?php if ($search_hh_theo_ten == []) {?>
           <div class="col-5 mb-4">
                   <span style="font-size: 20px; width: 100%">Không có sản phẩm bạn cần tìm</span>
                </div>
        <?php } else { ?>
            <?php
            foreach ($search_hh_theo_ten as $item) : ?>
                <div class="col-4 mb-4">
                    <a href="product-detail?id=<?= $item['ma_hh'] ?>&name_pr=<?= $item['ten_hh'] ?>&views=<?= $item['so_luot_xem'] ?>&loai=<?= $item['ma_loai'] ?>" class="article_list_product--link">
                        <div class="article_list_product">
                            <img src="./public/images/products/<?= $item['hinh'] ?>" alt="" />
                            <div class="article_list_product_information">
                                <span class="article_product_information--price"><?= $item['don_gia'] ?>$</span>
                                <span class="article_product_information--name"><?= $item['ten_hh'] ?></span>
                            </div>
                        </div>
                    </a>
                </div>

            <?php endforeach ?>
        <?php } ?>

    </div>
</div>