<?php
session_start();
include('duan1');  // Kết nối cơ sở dữ liệu

$user_id = 1;  // Giả sử người dùng có ID là 1

// Lấy giỏ hàng của người dùng
$query = $pdo->prepare("SELECT c.id_cart, ci.id_cart_item, ci.quantity, p.title_product, p.price_product, p.img_product 
                        FROM cart c 
                        JOIN cart_items ci ON c.id_cart = ci.id_cart 
                        JOIN product p ON ci.id_product = p.id_product 
                        WHERE c.id_user = :user_id");
$query->execute(['user_id' => $user_id]);
$cart_items = $query->fetchAll(PDO::FETCH_ASSOC);

// Xử lý cập nhật giỏ hàng
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_cart'])) {
    foreach ($_POST['quantity'] as $index => $quantity) {
        $update_stmt = $pdo->prepare("UPDATE cart_items SET quantity = :quantity WHERE id_cart_item = :id");
        $update_stmt->execute(['quantity' => $quantity, 'id' => $_POST['cart_id'][$index]]);
    }
    header("Location: cart.php");
    exit;
}

// Xóa sản phẩm khỏi giỏ hàng
if (isset($_GET['remove_id'])) {
    $remove_id = $_GET['remove_id'];
    $delete_stmt = $pdo->prepare("DELETE FROM cart_items WHERE id_cart_item = :id");
    $delete_stmt->execute(['id' => $remove_id]);
    header("Location: cart.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
</head>

<body>
    <h1>Giỏ hàng</h1>
    <form method="POST">
        <?php foreach ($cart_items as $item): ?>
            <div class="cart-item">
                <img src="img/<?= $item['img_product']; ?>" alt="<?= $item['title_product']; ?>">
                <p><?= $item['title_product']; ?></p>
                <p><?= number_format($item['price_product']); ?> đ</p>
                <input type="number" name="quantity[]" value="<?= $item['quantity']; ?>" min="1" required>
                <input type="hidden" name="cart_id[]" value="<?= $item['id_cart_item']; ?>">
                <a href="cart.php?remove_id=<?= $item['id_cart_item']; ?>">Xóa</a>
            </div>
        <?php endforeach; ?>
        <button type="submit" name="update_cart">Cập nhật giỏ hàng</button>
    </form>
    <a href="bill.php">Tiến hành thanh toán</a>

</body>

</html>