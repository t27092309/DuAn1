<div class="login-wrapper">
    <h3>Xin chào</h3>
    <p class="mb-20">Bạn đã có tài khoản? <a href="index.php?act=login">đăng nhập tại đây</a></p>
    <form action="index.php?act=handleRegister" method="post">
        <div class="form-group">
            <label for="name">Họ tên</label>
            <input type="text" name="name" id="name" placeholder="Vui lòng nhập họ tên">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Vui lòng nhập tài khoản. Ví dụ abc@gmail.com">
        </div>

        <div class="form-group mb-20">
            <label for="password">Mật khẩu</label>
            <input type="password" name="password" id="password" placeholder="Vui lòng nhập mật khẩu">
            <p class="text-danger">
                <?php
                if(isset($_SESSION['error']['password']) && (!empty($_SESSION['error']['password'])))
                {
                    echo $_SESSION['error']['password'];
                    unset($_SESSION['error']);
                }
                ?>
            </p>
        </div>

        <div class="form-group mb-20">
            <label for="re_password">Xác nhận mật khẩu</label>
            <input type="password" name="re_password" id="re_password" placeholder="Vui lòng xác nhận mật khẩu">
        </div>

        <div class="form-group">
            <input type="checkbox" name="remember" id="remember">
            <label for="remember">Ghi nhớ tôi</label>
        </div>

        <div class="form-group">
            <input type="submit" value="Đăng nhập">
        </div>
    </form>
</div>