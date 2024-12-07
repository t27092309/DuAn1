<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="./public/Layout/styles.css">
    <link rel="stylesheet" href="./public/Layout/sanpham.css">
    <link rel="stylesheet" href="./public/Layout/auth.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js">
    <link rel="stylesheet" href="/node_modules/@splidejs/splide/dist/css/splide.min.css">
    <style>
        .container {
    width: 100%;
    max-width: 1440px;
    margin: 0 auto;
}
.banner img{
    margin: 10px 0px 30px 0px;
    width: 1490px;
}
/* Header */
.header {
    background-color: #f44336;
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
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
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
    background-color: #f44336;
}
    </style>
</head>

<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="logo">
                <a href="index.php">FAHASA</a>
            </div>
            <nav class="menu">
                <ul>
                    <li><a href="index.php">TRANG CHỦ</a></li>
                    <li><a href="#">HOT</a></li>
                    <li><a href="#">NEW BOOKS</a></li>

                    <li><a href="public/shop/index.php">CATEGORY</a></li>
                </ul>
            </nav>
            <div class="search-bar">
                <input type="text" placeholder="Tìm kiếm sản phẩm...">
                <button> <a style="text-decoration: none; color: white" href="admin/view/client/search.php">Search</a></button>
            </div>
            <div class="header-actions">

                <?php
                if (isset($_SESSION['user'])) {
                    echo '<div class="dropdown">
                            <a href="#" class="account">
                                <i class="fas fa-user"></i> '.$_SESSION["user"]["username"].'
                            </a>
                            <div class="dropdown-menu">
                                <a href="index.php?act=profile">Thông tin cá nhân</a>
                                <a href="index.php?act=logout">Đăng xuất</a>
                            </div>
                        </div>';
                } else {
                    echo '<a href="index.php?act=login" class="account">
                                <i class="fas fa-user"></i> Đăng nhập
                            </a>';
                }
                ?>
                <a href="public/shop/cart.php" class="cart">
                    <i class="fas fa-shopping-cart"></i> Giỏ hàng
                </a>
                <!-- <a href="admin/?act=product-list">
                    <i></i>a
                </a> -->
            </div>
        </div>
    </header>