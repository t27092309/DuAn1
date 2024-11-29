<?php
session_start();

// Kiểm tra nếu người dùng chưa đăng nhập
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php'); // Chuyển hướng đến trang đăng nhập nếu chưa đăng nhập
    exit();
}

include 'functions.php';
$userId = $_SESSION['user_id'];

// Lấy thông tin thanh toán từ form
$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$paymentMethod = $_POST['payment_method'];

// Tính tổng tiền
$cartItems = getCartItems($userId);
$totalAmount = 0;
foreach ($cartItems as $item) {
    $totalAmount += $item['price_product'] * $item['quantity'];
}

// Lưu thông tin đơn hàng vào cơ sở dữ liệu (Giả sử bạn có bảng `orders`)
$conn = mysqli_connect('localhost', 'root', '', 'duan1');
$sql = "INSERT INTO orders (user_id, name, address, phone, total_amount, payment_method)
        VALUES ($userId, '$name', '$address', '$phone', $totalAmount, '$paymentMethod')";

if (mysqli_query($conn, $sql)) {
    // Xóa giỏ hàng sau khi thanh toán thành công
    $sqlDelete = "DELETE FROM cart WHERE user_id = $userId";
    mysqli_query($conn, $sqlDelete);

    // Chuyển hướng đến trang cảm ơn
    echo "Cảm ơn bạn đã thanh toán! Đơn hàng của bạn đã được xác nhận.";
    header('Location: thank_you.php');  // Chuyển hướng đến trang cảm ơn
} else {
    echo "Lỗi: " . mysqli_error($conn);
}

mysqli_close($conn);
?>