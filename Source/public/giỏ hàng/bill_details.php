<?php
session_start();

// Kiểm tra nếu người dùng chưa đăng nhập
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php'); // Chuyển hướng đến trang đăng nhập nếu chưa đăng nhập
    exit();
}

include 'db_connection.php'; // Kết nối cơ sở dữ liệu

// Lấy ID người dùng và đơn hàng từ session
$userId = $_SESSION['user_id'];
$orderId = $_SESSION['id_order'] ?? null;

// Kiểm tra nếu không có orderId
if (!$orderId) {
    header('Location: orders.php'); // Chuyển hướng đến trang lịch sử đơn hàng
    exit();
}

try {
    // Lấy thông tin đơn hàng
    $stmt = $pdo->prepare("
        SELECT o.id_order, o.total_amount, o.payment_method, o.created_at, o.name, o.address, o.phone, o.status
        FROM orders o
        WHERE o.id_order = ? AND o.user_id = ?
    ");
    $stmt->execute([$orderId, $userId]);
    $order = $stmt->fetch(PDO::FETCH_ASSOC);

    // Kiểm tra nếu không tìm thấy đơn hàng
    if (!$order) {
        header('Location: orders.php'); // Chuyển hướng nếu không tìm thấy đơn hàng
        exit();
    }

    // Lấy chi tiết sản phẩm trong đơn hàng từ bảng `cart_items`
    $stmtItems = $pdo->prepare("
        SELECT p.title_product, ci.quantity, p.price_product
        FROM cart_items ci
        JOIN product p ON ci.id_product = p.id_product
        JOIN cart c ON ci.id_cart = c.id_cart
        WHERE c.id_user = ? AND c.id_cart = ?
    ");
    $stmtItems->execute([$userId, $orderId]);
    $items = $stmtItems->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Lỗi khi kết nối cơ sở dữ liệu: " . $e->getMessage());
}

// Định nghĩa trạng thái đơn hàng
$orderStatus = [
    'pending' => 'Đang xử lý',
    'completed' => 'Đã giao hàng',
    'cancelled' => 'Đã hủy',
];
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết đơn hàng #<?= htmlspecialchars($orderId) ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            padding: 20px;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #27ae60;
            margin-bottom: 20px;
        }

        .order-info,
        .items {
            margin-bottom: 20px;
        }

        .order-info p {
            line-height: 1.6;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            text-align: left;
            padding: 10px;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f4f4f4;
        }

        .total {
            text-align: right;
            font-weight: bold;
            font-size: 1.2em;
        }

        .back-link {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #fff;
            background-color: #27ae60;
            padding: 10px 20px;
            border-radius: 5px;
            transition: 0.3s;
        }

        .back-link:hover {
            background-color: #219150;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Chi tiết đơn hàng #<?= htmlspecialchars($orderId) ?></h1>
        <div class="order-info">
            <h2>Thông tin đơn hàng</h2>
            <p><strong>Họ và tên:</strong> <?= htmlspecialchars($order['name']) ?></p>
            <p><strong>Địa chỉ:</strong> <?= htmlspecialchars($order['address']) ?></p>
            <p><strong>Số điện thoại:</strong> <?= htmlspecialchars($order['phone']) ?></p>
            <p><strong>Ngày đặt hàng:</strong> <?= date("d/m/Y H:i:s", strtotime($order['created_at'])) ?></p>
            <p><strong>Phương thức thanh toán:</strong>
                <?= ($order['payment_method'] == 1) ? 'Thanh toán khi nhận hàng' : 'Thanh toán trực tuyến' ?></p>
            <p><strong>Trạng thái đơn hàng:</strong>
                <?= htmlspecialchars($orderStatus[$order['status']] ?? 'Không xác định') ?></p>
        </div>

        <div class="items">
            <h2>Chi tiết sản phẩm</h2>
            <table>
                <thead>
                    <tr>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Đơn giá</th>
                        <th>Thành tiền</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (count($items) > 0): ?>
                        <?php foreach ($items as $item): ?>
                            <tr>
                                <td><?= htmlspecialchars($item['title_product']) ?></td>
                                <td><?= htmlspecialchars($item['quantity']) ?></td>
                                <td><?= number_format($item['price_product'], 0, ',', '.') ?> VND</td>
                                <td><?= number_format($item['quantity'] * $item['price_product'], 0, ',', '.') ?> VND</td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="4">Không có sản phẩm nào trong đơn hàng này.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <p class="total">Tổng cộng: <?= number_format($order['total_amount'], 0, ',', '.') ?> VND</p>

        <a href="index.php" class="back-link">Quay lại trang chủ</a>
    </div>
</body>

</html>