<?php
// Khởi tạo giỏ hàng nếu chưa có
if (!isset($_SESSION['cartItems'])) {
    $_SESSION['cartItems'] = []; // Giỏ hàng trống
}
$cartItems = $_SESSION['cartItems'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="css.css">
</head>

<body>
    <h1>Giỏ hàng</h1>
    <table>
        <thead>
            <tr>
                <th>Ảnh</th>
                <th>Sản phẩm</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Tổng</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php $totalAmount = 0; ?>
            <?php foreach ($cartItems as $item): ?>
                <tr>
                    <td><img src="../img/<?php echo $item['img_product']; ?>" alt="<?php echo $item['title_product']; ?>"
                            width="100"></td>
                    <td><?php echo $item['title_product']; ?></td>
                    <td><?php echo number_format($item['price_product']); ?> VNĐ</td>
                    <td>
                        <form method="post" action="update_cart.php">
                            <input type="hidden" name="cart_item_id" value="<?php echo $item['id_cart_item']; ?>">
                            <input type="number" name="quantity" value="<?php echo $item['quantity']; ?>" min="1">
                            <button type="submit">Cập nhật</button>
                        </form>
                    </td>
                    <td><?php
                    $itemTotal = $item['price_product'] * $item['quantity'];
                    echo number_format($itemTotal); ?> VNĐ
                    </td>
                    <td>
                        <form method="post" action="remove_cart.php">
                            <input type="hidden" name="cart_item_id" value="<?php echo $item['id_cart_item']; ?>">
                            <button type="submit">Xóa</button>
                        </form>
                    </td>
                </tr>
                <?php $totalAmount += $itemTotal; ?>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Hiển thị tổng tiền -->
    <h3>Tổng tiền: <?php echo number_format($totalAmount); ?> VNĐ</h3>

    <!-- Nút thanh toán -->
    <form method="post" action="checkout.php">
        <button type="submit">Thanh toán</button>
    </form>
</body>

</html>