<?php
// Nhận dữ liệu từ form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];

    // Kiểm tra dữ liệu hợp lệ
    if (empty($name) || $price <= 0) {
        echo "Tên sản phẩm và giá không hợp lệ!";
        exit;
    }

    // Thêm sản phẩm vào danh sách (tạm lưu vào session)
    session_start();
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    $_SESSION['cart'][] = [
        'name' => $name,
        'price' => $price,
        'quantity' => 1,
    ];

    // Quay về trang chính
    header("Location: index.php");
    exit;
}
?>
