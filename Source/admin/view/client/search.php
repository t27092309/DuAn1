<?php
// Kết nối đến cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "duan1"; // Tên cơ sở dữ liệu

$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Lấy từ khóa tìm kiếm
$keyword = isset($_GET['query']) ? $_GET['query'] : '';

// Truy vấn cơ sở dữ liệu
$stmt = $conn->prepare("
    SELECT 
        product.id_product, 
        product.title_product, 
        product.img_product, 
        product.price_product, 
        product.description_product, 
        category.name_category
    FROM product 
    LEFT JOIN category 
    ON product.id_category = category.id_category
    WHERE product.title_product LIKE ? OR product.description_product LIKE ?
");
$like_keyword = "%$keyword%";
$stmt->bind_param("ss", $like_keyword, $like_keyword);
$stmt->execute();
$result = $stmt->get_result();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="./sty.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <style>
        /* General reset */
/* General reset */
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
/* Main */
main {
    display: flex;
    gap: 20px;
    margin: 20px 0;
}

.list {
    width: 23%;
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
    /* margin-bottom: 10px; */
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
}

.SP1 {
    width: 200px;
    height: auto;
    background-color: white;
    border-radius: 8px;
    padding: 15px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    text-align: center;
}
.SP1 img {
    width: 100%;
    height: 150px;
    object-fit: cover;
}
.SP1:hover {
    transform: translateY(-5px);
    transition: all 0.3s ease;
}
.SP1 button {
    background-color: #f44336;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    font-size: 14px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    font-weight: bold;
}

.SP1 button:hover {
    background-color: #d32f2f;
}
.account{
    width: 100px;
}
.cart{
    width: 100px;
}
    </style>
</head>
<body>
<header>
        <header class="header">
        
        <div class="container">
            <div class="logo">
                <a href="../index.php">FAHASA</a>
            </div>
            <nav class="menu">
                <ul>
                    <li><a href="../index.php">Trang chủ</a></li>
                    <li><a href="#">Sách</a></li>
                    <li><a href="#">Văn phòng phẩm</a></li>
                    <li><a href="#">Đồ chơi</a></li>
                    <li><a href="#">Khuyến mãi</a></li>
                </ul>
            </nav>
            <div class="search-bar">
            <form action="search.php" method="GET">
                <input type="text" name="query" placeholder="Tìm kiếm sản phẩm..." value="<?php echo htmlspecialchars($keyword); ?>">
                <button type="submit">Tìm kiếm</button>
            </form>
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
            <h2>Kết quả tìm kiếm cho: "<?php echo htmlspecialchars($keyword); ?>"</h2>
        <div class="SP">
            <?php if ($result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <div class="SP1">
                        <img src="/DuAn1<?php echo htmlspecialchars($row['img_product']); ?>" alt="<?php echo htmlspecialchars($row['title_product']); ?>">
                        <h3><?php echo htmlspecialchars($row['title_product']); ?></h3>
                        <p><strong>Giá:</strong> <?php echo htmlspecialchars($row['price_product']); ?> VND</p>
                        <button>Thêm vào giỏ</button>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p>Không tìm thấy sản phẩm nào.</p>
            <?php endif; ?>
        </div>
    </div>
</main>
</body>
</html>
<?php
$conn->close();
?>