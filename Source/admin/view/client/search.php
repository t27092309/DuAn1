 
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
                <a href="index.php">FAHASA</a>
            </div>
            <nav class="menu">
                <ul>
                    <li><a href="index.php">Trang chủ</a></li>
                    <li><a href="#">Sách</a></li>
                    <li><a href="#">Văn phòng phẩm</a></li>
                    <li><a href="#">Đồ chơi</a></li>
                    <li><a href="#">Khuyến mãi</a></li>
                </ul>
            </nav>
            <div class="search-bar">
                <input type="text" placeholder="Tìm kiếm sản phẩm...">
                <button> <a href="admin/view/client/search.php">Tìm kiếm</a></button>
            </div>
            <!-- <div id="header-actions">

                <a href="#" class="account">
                    <i class="fas fa-user"></i> Tài khoản
                </a>
                <a href="#" class="cart">
                    <i class="fas fa-shopping-cart"></i> Giỏ hàng
                </a>
                <a href="admin/?act=product-list">
                    <i></i>a -->
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
</body>
</html>
