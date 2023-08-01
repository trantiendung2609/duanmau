<article>
  <div class="container">
    <div class="row">
      <div class="article_home">
        <div class="col-9">
          <?php include_once $view ?>
        </div>
        <div class="col-3">
          <!-- account -->

          <?php include_once "sidebar/account.php" ?>
          <!-- list products -->
          <?php include_once "sidebar/list_products.php" ?>
          <!-- list products favorite -->
          <?php include_once "sidebar/list_products_favorite.php" ?>

        </div>
      </div>
    </div>
  </div>
</article>