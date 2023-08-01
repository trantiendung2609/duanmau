<div class="article_home--slider">
  <div id="carouselExampleIndicators" class="article_slider carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
      <img class="d-block w-100" src="./public/images/products/10-laptop-man-hinh-4k-chan-thuc-song-dong-nhat-2020.jpg" alt="Second slide" />
        <div class="carousel-caption carousel-caption--items d-none d-md-block">
          <h5>Laptop Asus</h5>
        </div>
      </div>
      <?php foreach ($products_special as $ps) : ?>

      <div class="carousel-item">
        <img class="d-block w-100" src="./public/images/products/<?= $ps['hinh'] ?>" alt="Second slide" />
        <div class="carousel-caption carousel-caption--items d-none d-md-block">
          <h5><?= $ps['ten_hh'] ?></h5>
        </div>
      </div>
      <?php endforeach ?>
      
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>