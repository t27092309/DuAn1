<?php
class ProductQuery{
public $pdo;

public function __construct()
{
    try {
        $this->pdo = new PDO("mysql:host=localhost; port=3306; dbname=duan1", "root", "");
        // echo "Connect database successfully";
        // echo "<hr>";
    } catch (Exception $error) {
        echo "Connect database failed";
        echo "Error: " . $error->getMessage();
        echo "<hr>";
    }
}

public function __destruct()
{
    $this->pdo = null;
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./sty.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="./public/Layout/styles.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="logo">
                <a href="#">FAHASA</a>
            </div>
            <nav class="menu">
                <ul>
                    <li><a href="?act=home">Trang chủ</a></li>
                    <li><a href="#">Sách</a></li>
                    <li><a href="#">Văn phòng phẩm</a></li>
                    <li><a href="#">Đồ chơi</a></li>
                    <li><a href="#">Khuyến mãi</a></li>
                </ul>
            </nav>
            <div class="search-bar">
                <input type="text" placeholder="Tìm kiếm sản phẩm...">
                <button>Tìm kiếm</button>
            </div>
            <div class="header-actions">

                <a href="admin/?act=product-list" class="account">
                    <i class="fas fa-user"></i> Tài khoản
                </a>
                <a href="#" class="cart">
                    <i class="fas fa-shopping-cart"></i> Giỏ hàng
                </a>
            </div>
        </div>
    </header>
    <main>
        <div class="list">
            <form action="filter.php" method="GET">

            <div class="h1">
                <h1>Chọn phân loại sách </h1>
            </div>
            <div class="listbook">
                <h2>Tất cả nhóm sản phẩm :</h2>
                <nav>
                    <ul style="list-style: none;">
                        <li>Tiểu thuyết</li> <br>
                        <li>Light Novel</li> <br>
                        <li>Truyện ngắn</li> <br>
                        <li>Truyện trinh thám</li> <br>
                        <li>Kiếm hiệp</li><br>
                        <li>Tiểu thuyết</li><br>
                        <li>Truyện ngắn</li><br>
                        <li>Light Novel</li><br>
                        <li>Cuoc song</li><br>
                    </ul>
                </nav>
                
            </div>
            <div class="price">
                <h2>Tuỳ chọn giá :</h2>
                <nav>
                    <ul style="list-style: none;">
                        <li><label><input type="checkbox"> 0đ - 150,000đ (61,401)</label></li>
                        <li><label><input type="checkbox"> 150,000đ - 300,000đ (13,507)</label></li>
                        <li><label><input type="checkbox"> 300,000đ - 500,000đ (4,300)</label></li>
                    </ul>
                </nav>
            </div>
            <div class="Author">
                <h2>Nhà xuất bản :</h2>
                <nav>
                    <ul style="list-style: none;">
                        <li>Kim Đồng</li> <br>
                        <li>Nhã Nam</li> <br>
                        <li>Minh Thắng</li> <br>
                        <li>Đông A</li> <br>
                        <li>Đinh Tị</li><br>
                    </ul>
                </nav>
            </div>
            <div class="Language">
                <h2>Language :</h2>
                <nav>
                    <ul style="list-style: none;">
                        <li>Tiếng Việt</li> <br>
                        <li>Tiếng Anh</li> <br>
                        <li>Tiếng Đức</li> <br>
                    </ul>
                </nav>
            </div>
            <div class="type">
                <h2>Loại sách :</h2>
                <nav>
                    <ul style="list-style: none;">
                        <li>Bìa cứng</li> <br>
                        <li>Bìa mềm</li> <br>
                    </ul>
                </nav>
            </div>
            </form>
        </div>
        <div class="products">
            <div class="dea">
                <div class="box1">
                    Sắp xếp theo:
                </div>
                <div class="box">
                    Phù hợp
                </div>
                <div class="box">
                    Bán chạy
                </div>
                <div class="box">
                    Yêu thích
                </div>
            </div>

            <div class="SP">
                <div class="SP1">
                </div>
                <div class="SP1">                                      
                </div>
                <div class="SP1">                                      
                </div>
                <div class="SP1">                                      
                </div>
            </div>
            <div class="SP">
                <div class="SP1">
                </div>
                <div class="SP1">                                      
                </div>
                <div class="SP1">                                      
                </div>
                <div class="SP1">                                      
                </div>
            </div>
            <div class="SP">
                <div class="SP1">
                </div>
                <div class="SP1">                                      
                </div>
                <div class="SP1">                                      
                </div>
                <div class="SP1">                                      
                </div>
            </div>
            <div class="SP">
                <div class="SP1">
                </div>
                <div class="SP1">                                      
                </div>
                <div class="SP1">                                      
                </div>
                <div class="SP1">                                      
                </div>
            </div>
            <div class="SP">
                <div class="SP1">
                </div>
                <div class="SP1">                                      
                </div>
                <div class="SP1">                                      
                </div>
                <div class="SP1">                                      
                </div>
            </div>
            <div class="SP">
                <div class="SP1">
                </div>
                <div class="SP1">                                      
                </div>
                <div class="SP1">                                      
                </div>
                <div class="SP1">                                      
                </div>
            </div>
            <div class="SP">
                <div class="SP1">
                </div>
                <div class="SP1">                                      
                </div>
                <div class="SP1">                                      
                </div>
                <div class="SP1">                                      
                </div>
            </div>
            <div class="SP">
                <div class="SP1">
                </div>
                <div class="SP1">                                      
                </div>
                <div class="SP1">                                      
                </div>
                <div class="SP1">                                      
                </div>
            </div>
            <div class="SP">
                <div class="SP1">
                </div>
                <div class="SP1">                                      
                </div>
                <div class="SP1">                                      
                </div>
                <div class="SP1">                                      
                </div>
            </div>
        </div>
    </main>
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
            <img src="./img/fahasa-logo.png" alt="Fahasa Logo">
            <p>Địa chỉ: 387-389 Hai Bà Trưng, Quận 3, TP.HCM</p>
            <div class="payment-icons">
                <img src="./img/vnpay_logo.png 2.png" alt="MoMo">
                <img src="/img/vnpay_logo.png 2.png" alt="VNPay">
                <img src="./img/ahamove_logo3.png 2.png" alt="Ahamove">
            </div>
        </div>
    </footer>
</body>
</html>
