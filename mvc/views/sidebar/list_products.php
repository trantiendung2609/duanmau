<div class="article_category_products">
    <h2>danh mục</h2>
    <ul class="list-group list_products">
        <?php foreach($danh_muc_loai_hang as $danh_muc):?>
        <li><a  class="list-group-item" data-ma-loai="<?= $danh_muc["ma_loai"]?>" href="list-products?id=<?= $danh_muc['ma_loai']?>&name_pr=<?= $danh_muc['ten_loai']?>"><?= $danh_muc["ten_loai"]?></a></li>
        <?php endforeach?>
    </ul>
</div>