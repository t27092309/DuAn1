<style>
    .thongbao{
        color:red;
        text-align:center;
    }
    
</style>
<main class="catalog  mb ">
          
          <div class="boxleft">
          <div class="mb">
                <div class="box_title">CẬP NHẬT TÀI KHOẢN</div>
                <div class="box_content">
                <?php
                if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                    extract($_SESSION['user']);
                }
                ?>
                <div class="box_dangky">
                <form action="index.php?act=edit_taikhoan" method="POST">
                 <div class="mb1">
                   <div class="mb10"> 
                Email:
                    &emsp;<input type="email" name="email" placeholder="Email" value="<?=$email?>"> <br> <br>
                    </div> 
                    User:
                    &emsp; <input type="text" name="user" placeholder="User"value="<?=$user?>"><br><br>
                   Pass: 
                   &emsp; <input type="password" name="pass" placeholder="Password"value="<?=$pass?>"><br><br>
                   Địa chỉ: 
                   &emsp; <input type="text" name="address" placeholder="Address"value="<?=$address?>"><br><br>
                  Điện Thoại: 
                  &emsp; <input type="text" name="phone" placeholder="Tel"value="<?=$phone?>"><br><br>
                    <input type="hidden" name="id"value="<?=$id?>">
                    <input type="submit" value="Cập Nhật" name="capnhat">
                    <input type="reset" value="Nhập lại">
            </div>
                </form>
                <h4 class="thongbao">
                <?php 
                
                if(isset($thongbao)&&($thongbao!="")){
                    echo $thongbao;
                }
                ?>
                </h4>
                </div>
             </div>
            </div>
            
         </div>
         
      </main>
  