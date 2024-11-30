<?php
session_start();

// Kiểm tra nếu người dùng chưa đăng nhập
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php'); // Chuyển hướng đến trang đăng nhập nếu chưa đăng nhập
    exit();
}

include 'functions.php';
$userId = $_SESSION['user_id'];

// Kết nối cơ sở dữ liệu
$conn = mysqli_connect('localhost', 'root', '', 'duan1');
if (!$conn) {
    die("Kết nối cơ sở dữ liệu thất bại: " . mysqli_connect_error());
}

// Lấy thông tin thanh toán từ form
$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$paymentMethod = $_POST['payment_method'];

// Kiểm tra giỏ hàng trống
$cartItems = getCartItems($userId);
if (empty($cartItems)) {
    die("Giỏ hàng trống. Không thể xử lý thanh toán.");
}

// Tính tổng tiền
$totalAmount = 0;
foreach ($cartItems as $item) {
    $totalAmount += $item['price_product'] * $item['quantity'];
}

// Sử dụng prepared statement để thêm đơn hàng
$stmt = mysqli_prepare($conn, "INSERT INTO orders (user_id, name, address, phone, total_amount, payment_method) VALUES (?, ?, ?, ?, ?, ?)");
mysqli_stmt_bind_param($stmt, 'issdss', $userId, $name, $address, $phone, $totalAmount, $paymentMethod);

if (!mysqli_stmt_execute($stmt)) {
    die("Lỗi khi thêm đơn hàng: " . mysqli_stmt_error($stmt));
}

$orderId = mysqli_insert_id($conn); // Lấy ID đơn hàng mới tạo

// Lưu chi tiết đơn hàng vào bảng bill_details
foreach ($cartItems as $item) {
    if (empty($item['id_product'])) {
        die("Lỗi: id_product không hợp lệ cho sản phẩm " . print_r($item, true));
    }

    $stmtDetails = mysqli_prepare($conn, "INSERT INTO bill_details (quantity_product, price_product, id_bill, id_product) VALUES (?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmtDetails, 'idii', $item['quantity'], $item['price_product'], $orderId, $item['id_product']);

    if (!mysqli_stmt_execute($stmtDetails)) {
        die("Lỗi khi thêm chi tiết đơn hàng: " . mysqli_stmt_error($stmtDetails));
    }
}

// Xóa giỏ hàng và các mục giỏ hàng liên quan
$stmtDelete = mysqli_prepare($conn, "DELETE FROM cart WHERE id_user = ?");
mysqli_stmt_bind_param($stmtDelete, 'i', $userId);
mysqli_stmt_execute($stmtDelete);

$stmtDeleteCartItems = mysqli_prepare($conn, "DELETE FROM cart_items WHERE id_cart IN (SELECT id_cart FROM cart WHERE id_user = ?)");
mysqli_stmt_bind_param($stmtDeleteCartItems, 'i', $userId);
mysqli_stmt_execute($stmtDeleteCartItems);

// Chuyển hướng đến trang cảm ơn
header('Location: thank_you.php');
exit();


?>