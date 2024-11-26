<?php
session_start(); // Khởi tạo session nếu chưa có

include_once "admin/model/ProductQuery.php"; // Đường dẫn đến file ProductQuery
$productQuery = new ProductQuery();
$accountQuery = new AccountQuery($productQuery->pdo);

$thongbao = "";

if (isset($_POST['dangnhap'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    // Kiểm tra thông tin đăng nhập
    $checkuser = $accountQuery->checkuser($user, $pass);

    if ($checkuser) {
        // Lưu thông tin người dùng vào session
        $_SESSION['user'] = $checkuser;
        $thongbao = "Đăng nhập thành công! Chào mừng bạn.";
        // Chuyển hướng đến trang chủ hoặc trang quản lý
        header('Location: index.php');
        exit();
    } else {
        $thongbao = "Tài khoản hoặc mật khẩu không đúng. Vui lòng kiểm tra lại!";
    }
}
?>

<!-- HTML form đăng nhập -->
<main class="catalog mb">
    <div class="formdangnhap">
        <form action="index.php?act=dangnhap" method="POST">
            <h3>Đăng nhập</h3>
            <label for="user">Tên đăng nhập</label>
            <input type="text" name="user" id="user" placeholder="Nhập tên đăng nhập" required>
            <label for="pass">Mật khẩu</label>
            <input type="password" name="pass" id="pass" placeholder="Nhập mật khẩu" required>
            <div class="remember">
                <input type="checkbox" id="remember">
                <label for="remember">Ghi nhớ tài khoản?</label>
            </div>
            <input type="submit" value="Đăng nhập" name="dangnhap">
        </form>
        <ul class="form_links">
            <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
            <li><a href="index.php?act=dangky">Đăng ký thành viên</a></li>
        </ul>

        <!-- Hiển thị thông báo nếu có -->
        <h2 class="thongbao">
            <?php
            if (isset($thongbao) && !empty($thongbao)) {
                echo $thongbao;
            }
            ?>
        </h2>
    </div>
</main>

<style>
    .formdangnhap {
        width: 90%;
        /* Chỉnh kích thước nhỏ hơn màn hình */
        max-width: 350px;
        /* Đảm bảo form không quá lớn */
        margin: 50px auto;
        /* Căn giữa */
        padding: 20px;
        border: 2px solid #ccc;
        /* Viền bao ngoài */
        border-radius: 10px;
        /* Bo tròn góc */
        background-color: #f9f9f9;
        /* Nền sáng */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        /* Bóng đổ nhẹ */
    }

    /* Tiêu đề của form */
    .formdangnhap h3 {
        text-align: center;
        color: #007bff;
        font-size: 20px;
        margin-bottom: 20px;
    }

    /* Style cho nhãn và ô nhập liệu */
    .formdangnhap label {
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
        font-size: 14px;
        color: #333;
    }

    .formdangnhap input[type="text"],
    .formdangnhap input[type="password"] {
        width: calc(100% - 20px);
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 14px;
        box-sizing: border-box;
    }

    /* Ghi nhớ tài khoản */
    .remember {
        display: flex;
        align-items: center;
        font-size: 14px;
        margin-bottom: 15px;
    }

    .remember input {
        margin-right: 5px;
    }

    /* Nút đăng nhập */
    .formdangnhap input[type="submit"] {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 5px;
        background-color: #007bff;
        color: #fff;
        font-size: 16px;
        cursor: pointer;
        margin-top: 10px;
    }

    .formdangnhap input[type="submit"]:hover {
        background-color: #0056b3;
    }

    /* Liên kết quên mật khẩu và đăng ký */
    .form_links {
        text-align: center;
        margin-top: 15px;
    }

    .form_links {
        display: flex;
        /* Sử dụng Flexbox */
        justify-content: space-between;
        /* Dàn đều sang hai bên */
        margin-top: 15px;
        padding: 0;
    }

    .form_links li {
        list-style: none;
        margin: 5px 0;
    }

    .form_links a {
        text-decoration: none;
        color: #007bff;
        font-size: 14px;
    }

    .form_links a:hover {
        text-decoration: underline;
    }
</style>