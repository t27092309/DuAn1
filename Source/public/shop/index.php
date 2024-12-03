<?php
include 'db_connection.php';
session_start();
$_SESSION['user_id'] = 1; // Thiết lập tạm ID người dùng

// Số lượng sản phẩm trên mỗi trang
$limit = 9;
$page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
$offset = ($page - 1) * $limit;

// Truy vấn sản phẩm từ cơ sở dữ liệu với LIMIT và OFFSET
$stmt = $pdo->prepare("SELECT * FROM product LIMIT :limit OFFSET :offset");
$stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Truy vấn tổng số sản phẩm để tính toán phân trang
$totalProducts = $pdo->query("SELECT COUNT(*) FROM product")->fetchColumn();
$totalPages = ceil($totalProducts / $limit);
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fahasa - Trang chủ</title>
    <!-- CSS và thư viện -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="sanpham.css">
</head>

<body>
    <!-- Header -->
    <?php include('includes/header.php'); ?>

    <!-- Banner -->
    <div class="banner my-4">
        <img src="/shop/img//img/TrangCTT10_1024_Flashsale_1920X400.png.png" alt="Flash Sale Banner"
            class="img-fluid rounded">
    </div>

    <!-- Flash Sale -->
    <section class="flash-sale bg-danger text-white py-5 text-center">
        <h1 class="mb-4">FLASH SALE</h1>
        <p>Kết thúc trong: <span id="countdown-timer" class="fw-bold">10:40:10</span></p>
        <div class="d-flex justify-content-center gap-4 mt-4">
            <div class="sale-time">
                <span class="fw-bold">06:00</span>
                <p>Đang bán</p>
            </div>
            <div class="sale-time">
                <span class="fw-bold">08:00</span>
                <p>Đang bán</p>
            </div>
            <div class="sale-time">
                <span class="fw-bold">10:00</span>
                <p>Đang bán</p>
            </div>
            <div class="sale-time">
                <span class="fw-bold">12:00</span>
                <p>Đang bán</p>
            </div>
        </div>
    </section>

    <!-- Product List -->
    <section class="product-list container py-5">
        <h2 class="text-center mb-5">Danh sách sản phẩm</h2>
        <div class="row g-4">
            <?php foreach ($products as $product): ?>
                <!-- Product Item -->
                <div class="col-md-4">
                    <div class="product card">
                        <img src="img/<?php echo $product['img_product']; ?>" alt="<?php echo $product['title_product']; ?>"
                            class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title"><?php echo $product['title_product']; ?></h5>
                            <?php
                            // Xử lý giá để loại bỏ dấu 'đ' và định dạng lại giá
                            $price = str_replace(['đ', ','], '', $product['price_product']); // Loại bỏ dấu phân cách và "đ"
                            $formattedPrice = number_format((float) $price); // Định dạng lại giá trị
                            ?>
                            <p class="card-text text-danger fw-bold"><?php echo $formattedPrice; ?> đ</p>
                            <form method="post" action="add_to_cart.php">
                                <input type="hidden" name="product_id" value="<?php echo $product['id_product']; ?>">
                                <input type="number" name="quantity" value="1" min="1" class="form-control mb-2">
                                <button type="submit" class="btn btn-danger">Thêm vào giỏ hàng</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Pagination -->
        <div class="pagination text-center mt-5">
            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                <a href="?page=<?php echo $i; ?>" class="btn btn-secondary"><?php echo $i; ?></a>
            <?php endfor; ?>
        </div>
    </section>

    <!-- Footer -->
    <?php include('includes/footer.php'); ?>

    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>