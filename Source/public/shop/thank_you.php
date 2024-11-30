<?php
session_start();

// Kiểm tra nếu người dùng chưa đăng nhập
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php'); // Chuyển hướng đến trang đăng nhập nếu chưa đăng nhập
    exit();
}

// Lấy thông tin người dùng hoặc đơn hàng nếu cần
$userId = $_SESSION['user_id'];

// Nếu muốn hiển thị thêm thông tin đơn hàng
$orderId = $_SESSION['id_order'] ?? null;
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cảm ơn!</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 20px;
            background-color: #f9f9f9;
            color: #333;
        }

        .thank-you-container {
            max-width: 600px;
            margin: 50px auto;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        h1 {
            color: #27ae60;
        }

        p {
            line-height: 1.6;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #fff;
            background-color: #27ae60;
            padding: 10px 20px;
            border-radius: 5px;
            transition: 0.3s;
        }

        a:hover {
            background-color: #219150;
        }
    </style>
</head>

<body>
    <div class="thank-you-container">
        <h1>Cảm ơn bạn!</h1>
        <p>Đơn hàng của bạn đã được đặt thành công. Chúng tôi sẽ liên hệ để xác nhận và giao hàng trong thời gian sớm
            nhất.</p>
        <?php if ($orderId): ?>
            <p>Mã đơn hàng của bạn là: <strong>#<?= htmlspecialchars($orderId) ?></strong></p>
        <?php endif; ?>
        <p>Nếu có bất kỳ thắc mắc nào, vui lòng liên hệ với chúng tôi qua <a
                href="mailto:support@example.com">support@example.com</a>.</p>
        <a href="index.php">Quay về trang chủ</a>
    </div>
</body>

</html>