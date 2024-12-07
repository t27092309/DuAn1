<div class="profile-wrapper">
    <div class="side_bar">
        <a href="index.php?act=profile">Thông tin tài khoản</a>
        <a href="index.php?act=changePassword">Đỗi mật khẩu</a>
        <a href="index.php?act=logout">Đăng xuất</a>
    </div>
    <div class="profile">
        <?php
        if(isset($_SESSION['message']['success'])){
            echo '<span class="text-success">'.$_SESSION['message']['success'].'</span>';
        }
        if(isset($_SESSION['message']['error'])){
            echo '<span class="text-error">'.$_SESSION['message']['error'].'</span>';
        }
        unset($_SESSION['message']);
        ?>
        <form action="index.php?act=updateProfile" method="post">
            <div class="col mb-20">
                <div class="form-group">
                    <label for="">Tên</label>
                    <input type="text" name="name" value="<?=$profile['username'] ?? ''?>">
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" value="<?=$profile['email'] ?? ''?>">
                </div>
            </div>

            <div class="col mb-20">
                <div class="form-group">
                    <label for="">Số điện thoại</label>
                    <input type="text" name="phone" value="<?=$profile['phone'] ?? ''?>">
                </div>

                <div class="form-group">
                    <label for="">Địa chỉ</label>
                    <input type="text" name="address" value="<?=$profile['address'] ?? ''?>">
                </div>
            </div>

            <div class="form-group mb-20">
                <label for="">Ghi chú</label>
                <textarea name="description" cols="30" rows="10">
                    <?=$profile['description'] ?? ''?>
                </textarea>
            </div>

            <input type="hidden" name="id" value="<?=$profile['id'] ?? ''?>">
            <div class="form-group">
                <button class="bton">Huỷ</button>
                <button class="bton" type="submit">Thay đỗi</button>
            </div>
        </form>
    </div>
</div>