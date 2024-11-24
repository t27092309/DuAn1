<main>
    <!-- Banner -->
    <section class="banner">
        <div class="container">
            <div class="splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide"><img style="width: 100%;" src="../Source/IMG/Banner_1.webp" alt="">
                        </li>
                        <!-- <li class="splide__slide"><img style="width: 100%;" src="../Source/IMG/Banner_2.webp" alt="">
                        </li>
                        <li class="splide__slide"><img style="width: 100%;" src="../Source/IMG/Banner_3.webp" alt="">
                        </li>
                        <li class="splide__slide"><img style="width: 100%;" src="../Source/IMG/Banner_4.webp" alt="">
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="categories">
        <div class="container">
            <h2>Danh mục nổi bật</h2>
            <div class="category-list">
                <div class="category-item">
                    <img src="https://via.placeholder.com/200x200" alt="Category 1">
                    <p>Sách Mới</p>
                </div>
                <div class="category-item">
                    <img src="https://via.placeholder.com/200x200" alt="Category 2">
                    <p>HOT Trend</p>
                </div>
                <div class="category-item">
                    <img src="https://via.placeholder.com/200x200" alt="Category 3">
                    <p>SALE</p>
                </div>
                <div class="category-item">
                    <img src="https://via.placeholder.com/200x200" alt="Category 4">
                    <p>Khuyến Mãi</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="featured-products">
        <div class="container">
            <h2>Sản phẩm nổi bật</h2>
            <div class="product-list">
                <?php 
                foreach($homeProductList as $product):
                ?>
                <!-- Product Item -->
                <div class="product-item" >
                    <img src="/DuAn1<?= $product->img_product ?>" alt="Product 1">
                    <h3><?= $product->title_product ?></h3>
                    <p class="price"><?= $product->price_product ?></p>
                    <button>
                        <a href="./SanPham.php">Mua ngay</a>
                    </button>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>


    <!-- Promotions -->
    <section class="promotions">
        <div class="container">
            <h2>Chương trình khuyến mãi</h2>
            <div class="promo-list">
                <div class="promo-item">
                    <img src="https://via.placeholder.com/600x300" alt="Promo 1">
                    <p>Giảm 50% Sách Giáo Khoa</p>
                </div>
                <div class="promo-item">
                    <img src="https://via.placeholder.com/600x300" alt="Promo 2">
                    <p>Mua 2 Tặng 1 Văn Phòng Phẩm</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
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
</main>


<!-- <script src="/node_modules/@splidejs/splide/dist/js/splide.min.js" type="text/Javascript"></script>
<script type="text/javascript">
    var splide = new Splide('.splide', {
        type: 'loop',
        perPage: 1,
        focus: 0,
        omitEnd: true,
        autoplay: true,
    });

    splide.mount();
</script> -->
