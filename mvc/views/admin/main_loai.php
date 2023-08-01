<article>
  <div class="container">
    <div class="article_admin_title">
      <h2>quản lý hàng hóa</h2>
    </div>
    <div class="article_admin_loai">
      <form action="add-loai" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col">
            <div class="form-group">
              <label for="">Mã loại</label>
              <input class="form-control" type="text" name="ma_loai" readonly placeholder="auto number" disabled />
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label for="">Tên loại</label>
              <input class="form-control" type="text" name="ten_loai" placeholder="tên hàng" required/>
            </div>
          </div>
        </div>
        <button class="btn btn-primary btn-lg" type="submit" name="btn_insert">
          Thêm
        </button>
        <a class="btn btn-secondary btn-lg" href="admin-danh-sach-loai">Danh sách loại</a>
      </form>
 
    </div>
  </div>
</article>