<div class="login-wrapper">
    <h3>Xin chào</h3>
    <p class="mb-20">Bạn chưa có tài khoản? <a href="index.php?act=register">đăng ký tại đây</a></p>
    <span class="text-success">
        <?php
        if(isset($_SESSION['success']['message'])){
            echo $_SESSION['success']['message'];
            unset($_SESSION['success']);
        }
        ?>
    </span>
    <form action="index.php?act=handleLogin" method="post">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Vui lòng nhập tài khoản. Ví dụ abc@gmail.com">
        </div>

        <div class="form-group mb-20">
            <label for="password">Mật khẩu</label>
            <input type="password" name="password" id="password" placeholder="Vui lòng nhập mật khẩu">
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