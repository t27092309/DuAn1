<?php
if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];
    $user_id = 1; // Giả sử người dùng có ID là 1, bạn cần quản lý session người dùng

    // Kiểm tra xem sản phẩm đã có trong giỏ hàng chưa
    $stmt = $pdo->prepare("SELECT * FROM cart WHERE product_id = :product_id AND user_id = :user_id");
    $stmt->execute(['product_id' => $product_id, 'user_id' => $user_id]);
    $cart_item = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($cart_item) {
        // Nếu có, cập nhật số lượng
        $new_quantity = $cart_item['quantity'] + $quantity;
        $update_stmt = $pdo->prepare("UPDATE cart SET quantity = :quantity WHERE product_id = :product_id AND user_id = :user_id");
        $update_stmt->execute(['quantity' => $new_quantity, 'product_id' => $product_id, 'user_id' => $user_id]);
    } else {
        // Nếu chưa có, thêm mới vào giỏ hàng
        $insert_stmt = $pdo->prepare("INSERT INTO cart (product_id, quantity, user_id) VALUES (:product_id, :quantity, :user_id)");
        $insert_stmt->execute(['product_id' => $product_id, 'quantity' => $quantity, 'user_id' => $user_id]);
    }
}
?>