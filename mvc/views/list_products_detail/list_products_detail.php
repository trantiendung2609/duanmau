<div class="article_list_products_detail">
  <div class="row">

    <?php
    foreach ($get_products_alike as $item) : ?>
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
  </div>
</div>