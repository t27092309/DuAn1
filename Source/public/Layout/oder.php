<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "duan1";

$conn = new mysqli($host, $username, $password, $database);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Xử lý cập nhật trạng thái
    $id_order = $_POST['id_order'];
    $new_status = $_POST['status'];
    
    $sql_update = "UPDATE orders SET status = ? WHERE id_order = ?";
    $stmt = $conn->prepare($sql_update);
    $stmt->bind_param("si", $new_status, $id_order);
    
    if ($stmt->execute()) {
        echo "<script>alert('Cập nhật thành công!');</script>";
    } else {
        echo "<script>alert('Cập nhật thất bại!');</script>";
    }
}

// Truy vấn danh sách đơn hàng
$sql = "SELECT * FROM orders";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Đơn Hàng</title>
    <style>
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f4f4f4; }
    </style>
</head>
<body>
    <h1>Danh Sách Đơn Hàng</h1>
    <table>
        <thead>
            <tr>
                <th>ID Đơn Hàng</th>
                <th>Tên Người Nhận</th>
                <th>Địa Chỉ</th>
                <th>Ngày Đặt Hàng</th>
                <th>Số Điện Thoại</th>
                <th>Tổng Tiền</th>
                <th>Phương Thức Thanh Toán</th>
                <th>Trạng Thái</th>
                <th>Hành Động</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['id_order'] ?></td>
                    <td><?= htmlspecialchars($row['name']) ?></td>
                    <td><?= htmlspecialchars($row['address']) ?></td>
                    <td><?= htmlspecialchars($row['order_date']) ?></td>
                    <td><?= htmlspecialchars($row['phone']) ?></td>
                    <td><?= number_format($row['total_amount'], 0, ',', '.') ?> VND</td>
                    <td><?= htmlspecialchars($row['payment_method']) ?></td>
                    <td><?= htmlspecialchars($row['status']) ?></td>
                    <td>
                        <form method="POST" style="display: inline-block;">
                            <input type="hidden" name="id_order" value="<?= $row['id_order'] ?>">
                            <select name="status">
                                <option value="Pending" <?= $row['status'] == 'Đã Xác Nhận' ? 'selected' : '' ?>>Đã Xác Nhận</option>
                                <option value="Processing" <?= $row['status'] == 'Đang Giao Hàng' ? 'selected' : '' ?>>Đang Giao Hàng</option>
                                <option value="Completed" <?= $row['status'] == 'Đã Nhận Hàng' ? 'selected' : '' ?>>Đã Nhận Hàng</option>
                                <option value="Cancelled" <?= $row['status'] == 'Hủy Đơn Hàng' ? 'selected' : '' ?>>Hủy Đơn Hàng</option>
                            </select>
                            <button type="submit">Cập Nhật</button>
                        </form>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>
