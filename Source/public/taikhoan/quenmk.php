<style>
    .thongbao{
        color:red;
        text-align:center;
    }
    
</style>
<main class="catalog  mb ">
          
          <div class="boxleft">
            <div class="mb1">
          <div class="mb">
                <div class="box_title">QUÊN MẬT KHẨU</div>
                <div class="box_content">
                <div class="box_dangky">
                <form action="index.php?act=quenmk" method="POST">
                   Email: &emsp;<input type="email" name="email" placeholder="Email"> <br> <br>
                   
                    <input type="submit" value="Gửi" name="guiemail" >
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
    <?php
        include_once "view/boxright.php";
        
    ?>
         
      </main>
      <!-- BANNER 2 -->