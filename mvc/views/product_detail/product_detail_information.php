<form enctype="application/x-www-form-urlencoded" class="article_product_detail--infomation">
  <div class="article_product_detail--infomation-img">
    <img src="public/images/products/<?= $hinh ?>" alt="" />
  </div>
  <nav class="article_product_detail--infomation-list">
    <ul>
      <li>Mã hh: <?= $ma_hh ?></li>
      <li>Tên hh: <?= $ten_hh ?></li>
      <li>Đơn giá: <?= $don_gia ?></li>
      <li>Giảm giá: <?= $giam_gia ?>%</li>
    </ul>
  </nav>
  <div class="article_product_detail--infomation-description">
    <p>
      <?= $mo_ta ?>
    </p>
  </div>
  <div class="article_product_detail--btn">
    <button type="submit" class="btn btn-danger">
      Mua ngay
    </button>
    <a class="btn text-white" style="background-color: #55acee" href="#!">
      <i class="fa-solid fa-cart-arrow-down"></i>
      Thêm vào giỏ hàng
    </a>
  </div>
</form>