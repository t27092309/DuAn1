<?php
session_start();

// Khởi tạo giỏ hàng
$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ Hàng & Flash Sale</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <!-- Banner -->
        <div class="banner">
            <img src="/img/TrangCTthang10_Mainbanner_Resize_Header_1263x60.png" alt="Main Banner">
        </div>

        <!-- Menu -->
        <div class="menu">
            <img src="/img/fahasa-logo.png" alt="Fahasa Logo" class="logo">
            <div class="search-container">
                <input class="search-input" type="text" placeholder="Search...">
                <span class="search-icon"></span>
            </div>
            <div class="menu-icons">
                <img src="/img/Vector.png" alt="Icon">
                <img src="/img/Vector (1).png" alt="Icon">
                <img src="/img/Vector (2).png" alt="Icon">
                <img src="/img/Vector (3).png" alt="Icon">
            </div>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <!-- Left Section: Cart Products -->
            <div class="left-section">
                <div class="cart">
                    <h2>Giỏ Hàng</h2>
                    <div class="cart-header">
                        <label><input type="checkbox" id="select-all"> Chọn tất cả (<?= count($cart) ?> sản phẩm)</label>
                        <span class="quantity-header">Số lượng</span>
                        <span>Thành tiền</span>
                    </div>

                    <!-- Product Items -->
                    <?php foreach ($cart as $item): ?>
                        <div class="cart-item">
                            <input type="checkbox" class="item-checkbox">
                            <div class="product-details">
                                <p><?= htmlspecialchars($item['name']) ?></p>
                                <span class="item-price"><?= number_format($item['price']) ?></span> đ
                            </div>
                            <div class="quantity">
                                <input type="number" class="item-quantity" value="<?= $item['quantity'] ?>" min="1">
                            </div>
                            <span class="total-price"><?= number_format($item['price'] * $item['quantity']) ?> đ</span>
                            <button class="remove">🗑️</button>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Tổng tiền -->
            <div class="total-section">
                <strong>Tổng cộng: <span id="cart-total">0</span> đ</strong>
            </div>

            <!-- Form thêm sản phẩm -->
            <form id="add-product-form" method="POST">
                <h2>Thêm sản phẩm mới</h2>
                <label>
                    Tên sản phẩm: 
                    <input type="text" name="name" required>
                </label>
                <label>
                    Giá: 
                    <input type="number" name="price" min="1000" required>
                </label>
                <button type="submit">Thêm sản phẩm</button>
            </form>

            <!-- Right Section -->
            <div class="right-section">
                <!-- Discount Section -->
                <div class="discount-section">
                    <div class="discount-header">
                        <h2>Mã giảm giá</h2>
                        <a href="#">Xem thêm ></a>
                    </div>
                    <div class="discount-codes">
                        <div class="code-box"></div>
                        <div class="code-box"></div>
                        <div class="code-box"></div>
                    </div>
                </div>

                <!-- Shipping Method -->
                <div class="shipping-method">
                    <span>Phương thức vận chuyển:</span>
                    <span class="shipping-option">Giao hàng nhanh <a href="#">Tùy chọn khác</a></span>
                </div>

                <!-- Total Section -->
                <div class="total-section">
                    <div class="total-row">
                        <span>Thành tiền:</span>
                        <span id="subtotal">0 đ</span>
                    </div>
                    <div class="total-row">
                        <span>Tổng số tiền (gồm VAT):</span>
                        <span id="total">0 đ</span>
                    </div>
                </div>

                <!-- Checkout Button -->
                <div class="checkout-button">
                    <button id="checkout-btn">Thanh toán</button>
                </div>
            </div>
        </div>

        <!-- Newsletter Section -->
        <div class="newsletter-section">
            <p class="newsletter-text">Vui lòng nhập thông tin</p>
            <div class="newsletter-input">
                <input type="email" placeholder="Nhập email của bạn">
                <button class="subscribe-btn">Đăng ký</button>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="footer-section">
            <h3>Dịch vụ</h3>
            <p>Điều khoản sử dụng</p>
            <p>Chính sách bảo mật thông tin</p>
            <p>Chính sách vận chuyển</p>
        </div>
        <div class="footer-section">
            <h3>Hỗ trợ</h3>
            <p>Chính sách đổi trả hoàn tiền</p>
            <p>Chính sách bảo hành - bồi hoàn</p>
            <p>Chính sách khách sỉ</p>
        </div>
        <div class="footer-section">
            <img src="/img/fahasa-logo.png" alt="Fahasa Logo">
            <p>Địa chỉ: 387-389 Hai Bà Trưng, Quận 3, TP.HCM</p>
            <div class="payment-icons">
                <img src="/img/momopay.png 2.png" alt="MoMo">
                <img src="/img/vnpay_logo.png 2.png" alt="VNPay">
                <img src="/img/ahamove_logo3.png 2.png" alt="Ahamove">
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        // JavaScript logic here...
    </script>
</body>

</html>
