<?php
session_start();
include('duan1');  // Kết nối cơ sở dữ liệu

if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];
    $user_id = 1;  // Giả sử người dùng có ID là 1

    // Kiểm tra sản phẩm đã có trong giỏ hay chưa
    $stmt = $pdo->prepare("SELECT * FROM cart WHERE id_user = :user_id");
    $stmt->execute(['user_id' => $user_id]);
    $cart = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$cart) {
        // Nếu chưa có giỏ hàng, tạo mới
        $stmt = $pdo->prepare("INSERT INTO cart (id_user) VALUES (:user_id)");
        $stmt->execute(['user_id' => $user_id]);
        $cart_id = $pdo->lastInsertId();  // Lấy ID giỏ hàng vừa tạo
    } else {
        $cart_id = $cart['id_cart'];
    }

    // Kiểm tra sản phẩm có trong giỏ chưa
    $stmt = $pdo->prepare("SELECT * FROM cart_items WHERE id_cart = :cart_id AND id_product = :product_id");
    $stmt->execute(['cart_id' => $cart_id, 'product_id' => $product_id]);
    $cart_item = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($cart_item) {
        // Cập nhật số lượng nếu sản phẩm đã có trong giỏ
        $new_quantity = $cart_item['quantity'] + $quantity;
        $update_stmt = $pdo->prepare("UPDATE cart_items SET quantity = :quantity WHERE id_cart = :cart_id AND id_product = :product_id");
        $update_stmt->execute(['quantity' => $new_quantity, 'cart_id' => $cart_id, 'product_id' => $product_id]);
    } else {
        // Thêm sản phẩm vào giỏ hàng
        $insert_stmt = $pdo->prepare("INSERT INTO cart_items (id_cart, id_product, quantity) VALUES (:cart_id, :product_id, :quantity)");
        $insert_stmt->execute(['cart_id' => $cart_id, 'product_id' => $product_id, 'quantity' => $quantity]);
    }

    header("Location: cart.php");
    exit;
}
header("Location: cart.php");  // Chuyển đến giỏ hàng
// Hoặc
header("Location: index.php");  // Quay lại trang sản phẩm

?>