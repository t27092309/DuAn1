<div class="boxright" >
             
             <div class="mb" >
                <div class="box_title">TÀI KHOẢN</div>
                <div class="box_content form_account">
                  <?php 
                  if(isset($_SESSION['user'])){
                    extract($_SESSION['user'])
                    ?> 
                      Xin chào:<?=$user?> 
                    <li> <a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                    <li> <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a></li>
                    <?php
                    if($role==1){
                    ?>
                    <li><a href="admin/index.php">Đăng nhập Admin</a></li>
                    <?php } ?>
                    <li> <a href="index.php?act=thoat">Thoát</a></li>

                  
                  <?php
                  }else{
                  ?>
                    <form action="index.php?act=dangnhap" method="POST">
                    <h4>Tên đăng nhập</h4><br>
                    <input type="text" name="user" id="">
                    <h4>Mật khẩu</h4><br>
                    <input type="password" name="pass" id=""><br>
                    <input type="checkbox" name="" id="">Ghi nhớ tài khoản?
                   <br><input type="submit" value="Đăng nhập" name="dangnhap">
                  </form>
                   <li class="form_li"><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                   <li class="form_li"><a href="index.php?act=dangky">Đăng kí thành viên</a></li>
                    <?php
                  }
                  ?>
                </div>
             </div>
        
            </div>
           