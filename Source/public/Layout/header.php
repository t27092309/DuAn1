<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="./public/Layout/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js">
    <link rel="stylesheet" href="/node_modules/@splidejs/splide/dist/css/splide.min.css">
</head>

<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="logo">
                <a href="#">FAHASA</a>
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
                <button> <a href="./Source/public/Layout/search.html">Tìm kiếm</a></button>
            </div>
            <div class="header-actions">

                <a href="?act=dangnhap" class="account">
                    <i class="fas fa-user"></i> Tài khoản
                </a>
                <a href="#" class="cart">
                    <i class="fas fa-shopping-cart"></i> Giỏ hàng
                </a>
            </div>
        </div>
    </header>