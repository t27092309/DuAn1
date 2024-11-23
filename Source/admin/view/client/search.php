 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./sty.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
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
                <div class="product-list">
                <?php 
                foreach($homeProductList as $product):
                ?>
                <!-- Product Item -->
                <div class="product-item">
                    <img src="/DuAn1<?= $product->img_product ?>" alt="Product 1">
                    <h3><?= $product->title_product ?></h3>
                    <p class="price"><?= $product->price_product ?></p>
                    <button>Mua ngay</button>
                </div>
                <?php endforeach ?>
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
        <footer style="background-color: #f8f9fa; padding: 20px; box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);">
            <div style="display: flex; flex-wrap: wrap; justify-content: space-between; max-width: 1200px; margin: 0 auto; padding: 20px 10px;">
                <!-- Thông tin công ty -->
                <div style="flex: 1 1 300px; margin-bottom: 20px;">
                    <h3 style="margin-bottom: 10px; color: #333;">Fuhasa</h3>
                    <p style="color: #555;">Công ty TNHH Fuhasa</p>
                    <p style="color: #555;">Địa chỉ: Cao đẳng FPT Polytechnic</p>
                    <p style="color: #555;">Hotline: <a href="tel:0365295814" style="color: #007bff; text-decoration: none;">0365 295 814</a></p>
                    <p style="color: #555;">Email: <a href="mailto:support@fuhasa.com" style="color: #007bff; text-decoration: none;">support@fuhasa.com</a></p>
                    <div style="flex: 1 1 200px; margin-bottom: 20px;">
                        <h4 style="margin-bottom: 10px; color: #333;">Theo dõi chúng tôi</h4>
                        <div style="display: flex; gap: 10px;">
                            <a href="#" style="text-decoration: none;">
                                <img src="facebook-icon.png" alt="Facebook" style="width: 30px; height: 30px;">
                            </a>
                            <a href="#" style="text-decoration: none;">
                                <img src="instagram-icon.png" alt="Instagram" style="width: 30px; height: 30px;">
                            </a>
                            <a href="#" style="text-decoration: none;">
                                <img src="twitter-icon.png" alt="Twitter" style="width: 30px; height: 30px;">
                            </a>
                            <a href="#" style="text-decoration: none;">
                                <img src="youtube-icon.png" alt="YouTube" style="width: 30px; height: 30px;">
                            </a>
                        </div>
                    </div>
                </div>
        
                <!-- Dấu gạch phân cách -->
                <div style="width: 1px; background-color: #ddd; margin: 0 20px;"></div>
    
    
                 <!-- Dịch vụ -->
                 <div style="flex: 1 1 200px; margin-bottom: 20px;">
                    <h4 style="margin-bottom: 10px; color: #333;">Dịch vụ</h4>
                    <ul style="list-style: none; padding: 0;">
                        <li style="margin-bottom: 15px;"><a href="#" class="hover-link">Điều khoản sử dụng</a></li>
                        <li style="margin-bottom: 15px;"><a href="#" class="hover-link">Chính sách bảo mật thông tin cá nhân</a></li>
                        <li style="margin-bottom: 15px;"><a href="#" class="hover-link">Chính sách bảo mật thanh toán</a></li>
                        <li><a href="#" class="hover-link">Hệ thống trung tâm - nhà sách</a></li>
                        
                    </ul>
                    <h4 style="margin-bottom: 10px; color: #333;">LIÊN HỆ</h4>
                    <p style="color: #555;">Địa chỉ: FPT Polytechnic</p>
                </div>
    
                <div style="flex: 1 1 200px; margin-bottom: 20px;">
                    <h4 style="margin-bottom: 10px; color: #333;">Hỗ trợ</h4>
                    <ul style="list-style: none; padding: 0;">
                        <li style="margin-bottom: 15px;"><a href="#" class="hover-link">Hỗ trợ khách hàng</a></li>
                        <li style="margin-bottom: 15px;"><a href="#" class="hover-link">Chính sách đổi trả</a></li>
                        <li style="margin-bottom: 15px;"><a href="#" class="hover-link">Giao hàng tận nơi</a></li>
                        <li style="margin-bottom: 15px;"><a href="#" class="hover-link">Bảo hành sản phẩm</a></li>
                    </ul>
                    <br>
                    
    
    
                    <p style="color: #555;">cskh@fahasa.com.vn</p>
                </div>
        
                <!-- Tài khoản của tôi -->
                <div style="flex: 1 1 200px; margin-bottom: 20px;">
                    <h4 style="margin-bottom: 10px; color: #333;">Tài khoản của tôi</h4>
                    <ul style="list-style: none; padding: 0;">
                        <li style="margin-bottom: 15px;"><a href="#" class="hover-link">Đăng nhập</a></li>
                        <li style="margin-bottom: 15px;"><a href="#" class="hover-link">Đăng ký</a></li>
                        <li style="margin-bottom: 15px;"><a href="#" class="hover-link">Quản lý tài khoản</a></li>
                        <li style="margin-bottom: 15px;"><a href="#" class="hover-link">Lịch sử mua hàng</a></li>
                    </ul>
                    <br>
                    
    
                    <p style="color: #555;">HOTLINE : 0365 295 814</p>
                </div>
        
                
                
            </div>
        
            <!-- Bản quyền -->
            <div style="text-align: center; padding-top: 10px; color: #555; border-top: 1px solid #ddd;">
                <p>Giấy chứng nhận Đăng ký Kinh doanh số 0304132047 do Sở Kế hoạch và Đầu tư Thành phố Hồ Chí Minh cấp ngày 20/12/2005, đăng ký thay đổi lần thứ 10, ngày 20/05/2022.</p>
            </div>
        </footer>
        
        <style>
            /* CSS cho hiệu ứng hover */
            .hover-link {
                text-decoration: none;
                color: #007bff;
                transition: color 0.3s, text-decoration 0.3s;
            }
        
            .hover-link:hover {
                color: #0056b3;
                text-decoration: underline;
            }
        </style>
    </footer>
</body>
</html>
