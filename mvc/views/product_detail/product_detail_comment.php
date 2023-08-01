<div class="article_product_detail--comment">
  <h2>Bình luận</h2>
  <?php if (isset($_SESSION['vai_tro'])) { ?>
    <nav class="article_product_detail--result-comment">
      <ul>
        <?php foreach ($result_comment as $cmt) : ?>
          <li class="list_item_comment"> <span class="result-comment-item"><?= $cmt['noi_dung'] ?></span> <span class="information_person_comment"><strong><?= $cmt['ho_ten'] ?></strong>,<em><?= $cmt['ngay_bl'] ?></em></span> </li>
        <?php endforeach ?>
      </ul>
    </nav>
    <hr>
    <form action="send-comment?ma-hh=<?= $ma_hh?>" method="POST" enctype="application/x-www-form-urlencoded" class="article_product_detail--form-comment">
      <input type="text" name="comment" placeholder="Bình luận" />
      <button class="btn_comment btn btn-primary btn-lg">Gửi</button>
    </form>
  <?php } else { ?>
    <a class="notification_login" href="home"><h2>Vui lòng đăng nhập để bình luận</h2></a>
  <?php } ?>
</div>