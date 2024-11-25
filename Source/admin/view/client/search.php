 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body, ul, li, h1, h2, h3, p {
    margin: 0;
    padding: 0;
    list-style: none;
}

/* Fonts and colors */
body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    background-color: #f8f9fa;
    color: #333;
}

a {
    text-decoration: none;
    color: inherit;
}

.container {
    width: 90%;
    max-width: 1200px;
    margin: auto;
}
/* Header */
.header {
    background-color: #e91e63;
    color: #fff;
    padding: 15px 0;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.header .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.header .logo a {
    font-size: 28px;
    font-weight: bold;
    text-decoration: none;
    color: #fff;
    text-transform: uppercase;
    letter-spacing: 2px;
}

.header .menu ul {
    list-style: none;
    display: flex;
    gap: 30px;
}

.header .menu a {
    text-decoration: none;
    color: #fff;
    font-size: 16px;
    transition: color 0.3s ease;
}

.header .menu a:hover {
    color: #ffc107;
}

.header .search-bar {
    display: flex;
    gap: 10px;
    align-items: center;
}

.header .search-bar input {
    padding: 8px 15px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    width: 250px;
}

.header .search-bar button {
    background-color: #ffc107;
    color: #333;
    border: none;
    padding: 8px 15px;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
    transition: background-color 0.3s ease;
}

.header .search-bar button:hover {
    background-color: #ff9800;
}

.header-actions a {
    color: #333;
    text-decoration: none;
}

.header-actions i {
    margin-right: 5px;
}
/* Header */
header {
    width: 100%;
    height: 104px;
    margin: 0 auto;
}

/* Main */
main {
    display: flex;
    gap: 20px;
    margin: 20px 0;
}

.list {
    width: 30%;
    height: 1600px;
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.list h1, .list h2 {
    margin-bottom: 15px;
    color: #f44336;
}

.list ul li {
    margin-bottom: 10px;
}

.list label {
    font-size: 14px;
    color: #555;
}

/* Products */
.products {
    width: 70%;
}

.dea {
    display: flex;
    justify-content: flex-start;
    gap: 15px;
    margin-bottom: 20px;
}

.dea .box, .dea .box1 {
    background-color: white;
    padding: 10px 15px;
    border-radius: 5px;
    font-size: 14px;
    font-weight: bold;
    color: #f44336;
    border: 1px solid #f44336;
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s;
}

.dea .box:hover, .dea .box1:hover {
    background-color: #f44336;
    color: white;
}

.SP {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    margin: 50px 10px;
}

.SP1 {
    width: 200px;
    height: 400px;
    background-color: white;
    border-radius: 8px;
    padding: 15px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.SP1:hover {
    transform: translateY(-5px);
    transition: all 0.3s ease;
}
.footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px 0;
}

.footer ul {
    list-style: none;
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-top: 10px;
}

.footer a {
    color: #ffc107;
    text-decoration: none;
    transition: color 0.3s ease;
}

.footer a:hover {
    color: #ff9800;
}
    </style>
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
                <button> <a href="./search.php">Tìm kiếm</a></button>
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
            <div class="h1">
                <h1>Chọn phân loại sách </h1>
            </div>
            <div class="listbook">
                <h2>Tất cả nhóm sản phẩm :</h2>
                <nav>
                    <ul style="list-style: none;">
                        <li><label><input type="checkbox">Tiểu thuyết</label></li> <br>
                        <li><label><input type="checkbox">Light Novel</label></li> <br>
                        <li><label><input type="checkbox">Truyện ngắn</label></li> <br>
                        <li><label><input type="checkbox">Truyện trinh thám</label></li> <br>
                        <li><label><input type="checkbox">Kiếm hiệp</label></li><br>
                        <li><label><input type="checkbox">Truyện ngắn</label></li><br>
                        <li><label><input type="checkbox">Light Novel</label></li><br>
                        <li><label><input type="checkbox">Cuoc song</label></li><br>
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
                        <li><label><input type="checkbox">Kim Đồng</label></li> <br>
                        <li><label><input type="checkbox">Nhã Nam</label> </li> <br>
                        <li><label><input type="checkbox">Minh Thắng</label></li> <br>
                        <li><label><input type="checkbox">Than Y</label></li> <br>
                        <li><label><input type="checkbox">Đinh Tị</label></li><br>
                    </ul>
                </nav>
            </div>
            <div class="Language">
                <h2>Language :</h2>
                <nav>
                    <ul style="list-style: none;">
                        <li><label><input type="checkbox">Tiếng Việt</label></li> <br>
                        <li><label><input type="checkbox">Tiếng Anh</label></li> <br>
                        <li><label><input type="checkbox">Tiếng Đức</label></li> <br>
                    </ul>
                </nav>
            </div>
            <div class="type">
                <h2>Loại sách :</h2>
                <nav>
                    <ul style="list-style: none;">
                        <li><label><input type="checkbox">Bìa cứng</label></li> <br>
                        <li><label><input type="checkbox">Bìa mềm</label></li> <br>
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
