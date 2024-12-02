<?php
session_start();

// Kiểm tra nếu người dùng chưa đăng nhập
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php'); // Chuyển hướng đến trang đăng nhập nếu chưa đăng nhập
    exit();
}

include 'functions.php';
$userId = $_SESSION['user_id'];
$cartItems = getCartItems($userId);

// Tính tổng tiền
$totalAmount = 0;
foreach ($cartItems as $item) {
    $totalAmount += $item['price_product'] * $item['quantity'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Thanh toán</title>
    <link rel="stylesheet" href="checkout.css">
</head>

<body>
    <h1>Thanh toán</h1>

    <h3>Thông tin giỏ hàng:</h3>
    <table>
        <thead>
            <tr>
                <th>Sản phẩm</th>
                <th>Số lượng</th>
                <th>Giá</th>
                <th>Tổng</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cartItems as $item): ?>
                <tr>
                    <td><?php echo $item['title_product']; ?></td>
                    <td><?php echo $item['quantity']; ?></td>
                    <td><?php echo number_format($item['price_product']); ?> VNĐ</td>
                    <td><?php echo number_format($item['price_product'] * $item['quantity']); ?> VNĐ</td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h3>Tổng tiền: <?php echo number_format($totalAmount); ?> VNĐ</h3>

    <!-- Form nhập thông tin thanh toán -->
    <form method="post" action="process_checkout.php">
        <h4>Thông tin thanh toán</h4>
        <label for="name">Họ tên:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="address">Địa chỉ giao hàng:</label>
        <input type="text" id="address" name="address" required><br><br>

        <label for="phone">Số điện thoại:</label>
        <input type="text" id="phone" name="phone" required><br><br>

        <label for="payment_method">Phương thức thanh toán:</label>
        <select id="payment_method" name="payment_method">
            <option value="cod">Thanh toán khi nhận hàng</option>
            <option value="bank">Chuyển khoản ngân hàng</option>
        </select><br><br>

        <button type="submit">Xác nhận thanh toán</button>
    </form>
</body>

</html>