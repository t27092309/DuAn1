<?php
include 'db_connection.php';

session_start();
$_SESSION['user_id'] = 1; // Thiết lập tạm ID người dùng

// Lấy danh sách sản phẩm
$stmt = $pdo->query("SELECT * FROM product");
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Danh sách sản phẩm</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h1>Danh sách sản phẩm</h1>
    <?php foreach ($products as $product): ?>
        <div>
            <!-- Hiển thị ảnh sản phẩm từ đường dẫn CSDL -->
            <img src="img/<?php echo $product['img_product']; ?>" alt="<?php echo $product['title_product']; ?>"
                width="100">
            <h3><?php echo $product['title_product']; ?></h3>
            <p>Giá: <?php echo number_format($product['price_product']); ?> VNĐ</p>
            <form method="post" action="add_to_cart.php">
                <input type="hidden" name="product_id" value="<?php echo $product['id_product']; ?>">
                <input type="number" name="quantity" value="1" min="1">
                <button type="submit">Thêm vào giỏ</button>
            </form>
        </div>
    <?php endforeach; ?>
</body>

</html>