<?php
session_start();
$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ Hàng</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <!-- Hiển thị sản phẩm trong giỏ hàng -->
        <div class="cart">
            <h2>Giỏ Hàng</h2>
            <div class="cart-header">
                <span>Sản phẩm</span>
                <span>Giá</span>
                <span>Số lượng</span>
                <span>Thành tiền</span>
            </div>

            <?php foreach ($cart as $item): ?>
                <div class="cart-item">
                    <span><?php echo htmlspecialchars($item['name']); ?></span>
                    <span><?php echo number_format($item['price']); ?> đ</span>
                    <span><?php echo $item['quantity']; ?></span>
                    <span><?php echo number_format($item['price'] * $item['quantity']); ?> đ</span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>