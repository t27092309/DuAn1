<?php
session_start();
include 'functions.php';

$userId = $_SESSION['user_id'];
$cartItems = getCartItems($userId);
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

    <?php if (empty($cartItems)): ?>
        <p>Giỏ hàng của bạn đang trống.</p>
    <?php else: ?>
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
                        <td><img src="img/<?php echo $product['img_product']; ?>" alt="<?php echo $product['title_product']; ?>"
                                class="card-img-top"></td>
                        <td><?php echo $item['title_product']; ?></td>
                        <td><?php echo number_format($item['price_product']); ?> VNĐ</td>
                        <td>
                            <form method="post" action="update_cart.php">
                                <input type="hidden" name="cart_item_id" value="<?php echo $item['id_cart_item']; ?>">
                                <input type="number" name="quantity" value="<?php echo $item['quantity']; ?>" min="1">
                                <button type="submit">Cập nhật</button>
                            </form>
                        </td>
                        <td>
                            <?php
                            $itemTotal = $item['price_product'] * $item['quantity'];
                            echo number_format($itemTotal);
                            ?> VNĐ
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
        <h3>Tổng tiền: <?php echo number_format($totalAmount); ?> VNĐ</h3>
        <form method="post" action="checkout.php">
            <button type="submit">Thanh toán</button>
        </form>
    <?php endif; ?>
</body>

</html>