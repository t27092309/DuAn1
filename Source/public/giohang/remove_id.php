<?php
if (isset($_GET['remove_id'])) {
    $remove_id = $_GET['remove_id'];

    // Xóa sản phẩm khỏi giỏ hàng
    $delete_stmt = $pdo->prepare("DELETE FROM cart WHERE id = :id AND user_id = :user_id");
    $delete_stmt->execute(['id' => $remove_id, 'user_id' => $user_id]);
}
?>