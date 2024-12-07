<div class="wrapper">
    <?php
    if(isset($_SESSION['message']['error'])){
        echo '<span class="text-error">'.$_SESSION['message']['error'].'</span>';
    }
    unset($_SESSION['message']);
    ?>
    <form action="index.php?act=handleChangePass" method="post">
        <div class="form-group mb-20">
            <label for="">Mật khẩu cũ</label>
            <input type="password" name="password_old">
        </div>

        <div class="form-group mb-20">
            <label for="">Mật khẩu mới</label>
            <input type="password" name="password_new">
        </div>

        <div class="form-group mb-20">
            <label for="">Xác nhận mật khẩu</label>
            <input type="password" name="re_password_new">
        </div>

        <input type="hidden" name="id" value="<?=$profile['id']?>">

        <button class="bton">Thay đỗi</button>
    </form>
</div>