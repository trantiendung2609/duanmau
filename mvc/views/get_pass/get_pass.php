<div class="get_pass_layout">
    <div class="card card_get_pass">
        <h2 class="card-header bg-primary title_get_pass">Quên mật khẩu</h2>
        <div class="card-body">

            <form action="?ctr=get-pass-now" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group form_get_pass">
                            <label for="form-control">Vui lòng điền email</label>
                            <input class="form-control" type="email" name="email" value=" " required>
                        </div>
                        <?php if (isset($_SESSION['vai_tro'])) {?>
                        
                        <div class="form-group form_get_pass">
                            <?php if(isset($mat_khau_khach_hang) &&  $mat_khau_khach_hang != '' && $_SESSION['ma_kh'] == $ma_khach_hang){
                                echo "<h3 class='text-warning'>Mật khẩu của bạn là: $mat_khau_khach_hang</h3>";
                            } else if(isset($mat_khau_khach_hang) &&  $mat_khau_khach_hang != '' && $_SESSION['ma_kh'] != $ma_khach_hang){
                                echo '<h3 class="text-warning">Vui lòng nhập email của cá nhân</h3>';
                            }else if(isset($mat_khau_khach_hang) &&  $mat_khau_khach_hang == '' && $_SESSION['ma_kh'] != $ma_khach_hang){
                                echo '<h3 class="text-warning">Email chưa được đăng ký</h3>';
                            }?>
                        </div>

                        <?php }else{?>  
                            <div class="form-group form_get_pass">
                            <?php if(isset($mat_khau_khach_hang) &&  $mat_khau_khach_hang != ''){
                                echo "<h3 class='text-warning'>Mật khẩu của bạn là: $mat_khau_khach_hang</h3>";
                            } else if(isset($mat_khau_khach_hang) &&  $mat_khau_khach_hang == ''){
                                echo '<h3 class="text-warning">Email chưa được đăng ký</h3>';
                            }else {
                                echo '';
                            }?>
                        </div>
                        <?php }?>
                    </div>
                </div>
                <button class="btn btn-primary btn-lg btn_send_get_pass" type="submit" name="btn_send_get_pass">Gửi</button>
                <a class="btn btn-secondary btn-lg btn_home_form_get_pass" href="home">Trở lại</a>
            </form>
        </div>
    </div>
    <div id="cloud-scroll"></div>
</div>