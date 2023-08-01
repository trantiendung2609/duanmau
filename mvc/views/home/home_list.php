<div class="article_home--list-product">
  <div class="row">
    <?php foreach ($hang_hoa_offset as $hh) : ?>
      <div class="col-4 mb-4">
        <a href="product-detail?id=<?= $hh['ma_hh'] ?>&name_pr=<?= $hh['ten_hh'] ?>&views=<?= $hh['so_luot_xem'] ?>&loai=<?= $hh['ma_loai'] ?>" class="article_product--link">
          <div class="article_product">
            <img src="./public/images/products/<?= $hh['hinh'] ?>" alt="" />
            <div class="article_product_information">
              <span class="article_product_information--price"><?= $hh['don_gia'] ?>$</span>
              <span class="article_product_information--name"><?= $hh['ten_hh'] ?></span>
            </div>
          </div>
        </a>
      </div>
    <?php endforeach ?>
    <div class="page_number_block">
      <?php for ($i = 1; $i <= $count_hang_hoa_all; $i++) : ?>
        <a href="?item_page=<?= 9 ?>&page=<?= $i ?>" class="page_number"><?= $i ?></a>
      <?php endfor ?>
    </div>
  </div>
</div>