<?php
session_start();

// Khởi tạo giỏ hàng
$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];

// Thêm sản phẩm vào giỏ hàng
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_product'])) {
    $product_name = htmlspecialchars($_POST['name']);
    $product_price = floatval($_POST['price']);
    $product_quantity = 1;

    $cart[] = [
        'name' => $product_name,
        'price' => $product_price,
        'quantity' => $product_quantity
    ];

    $_SESSION['cart'] = $cart;
}

// Cập nhật giỏ hàng
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_cart'])) {
    if (isset($_POST['quantity']) && is_array($_POST['quantity'])) {
        foreach ($_POST['quantity'] as $index => $quantity) {
            $cart[$index]['quantity'] = max(1, intval($quantity)); // Đảm bảo số lượng >= 1
        }
        $_SESSION['cart'] = $cart;
    }
}

// Xóa sản phẩm khỏi giỏ hàng
if (isset($_GET['remove'])) {
    $remove_index = intval($_GET['remove']);
    if (isset($cart[$remove_index])) {
        unset($cart[$remove_index]);
        $_SESSION['cart'] = array_values($cart); // Đặt lại chỉ số mảng
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ Hàng & Flash Sale</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Giỏ Hàng</h1>

        <!-- Hiển thị giỏ hàng -->
        <div class="cart">
            <?php if (!empty($cart)): ?>
                <form method="POST">
                    <table>
                        <thead>
                            <tr>
                                <th>Sản phẩm</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($cart as $index => $item): ?>
                                <tr>
                                    <td><?= htmlspecialchars($item['name']) ?></td>
                                    <td><?= number_format($item['price']) ?> đ</td>
                                    <td>
                                        <input type="number" name="quantity[<?= $index ?>]" value="<?= $item['quantity'] ?>" min="1">
                                    </td>
                                    <td><?= number_format($item['price'] * $item['quantity']) ?> đ</td>
                                    <td>
                                        <a href="?remove=<?= $index ?>">Xóa</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <button type="submit" name="update_cart">Cập nhật giỏ hàng</button>
                </form>
            <?php else: ?>
                <p>Giỏ hàng của bạn trống.</p>
            <?php endif; ?>
        </div>

        <!-- Tổng tiền -->
        <div class="total-section">
            <h2>
                Tổng cộng: <?= number_format(array_reduce($cart, function ($sum, $item) {
                    return $sum + ($item['price'] * $item['quantity']);
                }, 0)) ?> đ
            </h2>
        </div>

        <!-- Thêm sản phẩm mới -->
        <form method="POST">
            <h2>Thêm sản phẩm mới</h2>
            <label for="name">Tên sản phẩm:</label>
            <input type="text" name="name" id="name" required>
            <label for="price">Giá:</label>
            <input type="number" name="price" id="price" min="1000" required>
            <button type="submit" name="add_product">Thêm sản phẩm</button>
        </form>
    </div>
</body>

</html>
