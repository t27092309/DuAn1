<?php
include_once "admin/model/ProductQuery.php"; 


$productQuery = new ProductQuery();
$accountQuery = new AccountQuery($productQuery->pdo);

$thongbao = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['dangky'])) {
  $user = trim($_POST['user']);
  $email = trim($_POST['email']);
  $pass = trim($_POST['pass']);

  // Kiểm tra xem email đã tồn tại chưa
  if ($accountQuery->checkemail($email)) {
    $thongbao = "Email này đã được sử dụng!";
  } else {
    // Thêm tài khoản mới
    $result = $accountQuery->insert_taikhoan($user, $email, $pass);
    if ($result) {
      $thongbao = "Đăng ký thành công! Bạn có thể đăng nhập ngay bây giờ.";
    } else {
      $thongbao = "Đăng ký thất bại! Vui lòng thử lại.";
    }
  }
}
?>

<main class="catalog mb">
  <div class="formdangky">
    <div class="mb">
      <div class="box_title">ĐĂNG KÝ THÀNH VIÊN</div>
      <div class="box_content">
        <form action="index.php?act=dangky" method="post">
          <span>Tên đăng nhập: <br></span>
          <input type="text" name="user" placeholder="Username" required>
          <span>Email: <br></span>
          <input type="email" name="email" placeholder="Email" required>
          <span>Password: <br></span>
          <input type="password" name="pass" placeholder="Password" required>
          <input type="submit" name="dangky" value="Đăng ký">
          <input type="reset" value="Nhập lại">
        </form>
        <p class="login-footer">Bạn đã có tài khoản? <a href="?act=dangnhap">Đăng Nhập</a></p>
        <h2 class="thongbao">
          <?php
          if (isset($thongbao) && $thongbao != "") {
            echo $thongbao;
          }
          ?>
        </h2>
      </div>
    </div>
  </div>
</main>



<style>
  /* Đặt style cho phần bên trái chứa form đăng ký */
  .boxleft {
    width: 400px;
    /* Chiều rộng cố định cho form */
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin: 0 auto;
    /* Đặt form vào giữa theo chiều ngang */
  }

  /* Style cho tiêu đề của form */
  .box_title {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 20px;
    color: #333;
    text-align: center;
  }

  /* Style cho nội dung form */
  .box_content {
    text-align: center;
    /* Căn giữa nội dung bên trong form */
  }

  /* Style cho các nhãn và input */
  .box_content span {
    font-weight: bold;
    margin-top: 10px;
    display: block;
  }

  .box_content input[type="text"],
  .box_content input[type="email"],
  .box_content input[type="password"] {
    width: calc(100% - 20px);
    /* Để các input có kích thước phù hợp */
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
  }

  .box_content input[type="submit"],
  .box_content input[type="reset"] {
    width: calc(50% - 20px);
    padding: 10px;
    margin: 10px 5px;
    /* Khoảng cách giữa các nút */
    border: none;
    border-radius: 5px;
    font-size: 16px;
    background-color: #007bff;
    color: white;
    cursor: pointer;
  }

  .box_content input[type="submit"]:hover,
  .box_content input[type="reset"]:hover {
    background-color: #0056b3;
  }

  /* Style cho thông báo */
  .thongbao {
    color: #d9534f;
    /* Màu đỏ cho thông báo lỗi */
    font-size: 18px;
    margin-top: 20px;
    text-align: center;
    /* Căn giữa thông báo */
  }

  .formdangky {
    width: 90%;
    max-width: 400px;
    margin: 50px auto;
    border: 2px solid #ccc;
    border-radius: 10px;
    background-color: #fff;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
    padding: 20px;
  }

  .login-footer {
    margin-top: 10px;
  }

  .login-footer a {
    text-decoration: none;
  }
</style>