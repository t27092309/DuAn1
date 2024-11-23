<?php
// Lấy thông tin giỏ hàng của người dùng
$user_id = 1; // Giả sử người dùng có ID là 1

$query = $pdo->prepare("SELECT c.quantity, p.name, p.price, p.image FROM cart c JOIN products p ON c.product_id = p.id WHERE c.user_id = :user_id");
$query->execute(['user_id' => $user_id]);
$cart_items = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="cart">
    <h2>Giỏ hàng</h2>
    <?php foreach ($cart_items as $item): ?>
        <div class="cart-item">
            <img src="/img/<?php echo $item['image']; ?>" alt="<?php echo $item['name']; ?>">
            <p><?php echo $item['name']; ?></p>
            <p><?php echo number_format($item['price']); ?> đ</p>
            <p>Số lượng: <?php echo $item['quantity']; ?></p>
            <p>Thành tiền: <?php echo number_format($item['price'] * $item['quantity']); ?> đ</p>
        </div>
    <?php endforeach; ?>
</div>