<?php
if (isset($_POST['update_quantity'])) {
    $cart_id = $_POST['cart_id'];
    $new_quantity = $_POST['quantity'];

    // Cập nhật số lượng
    $update_stmt = $pdo->prepare("UPDATE cart SET quantity = :quantity WHERE id = :cart_id AND user_id = :user_id");
    $update_stmt->execute(['quantity' => $new_quantity, 'cart_id' => $cart_id, 'user_id' => $user_id]);
}
?>