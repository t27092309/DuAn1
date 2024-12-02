<style>
    .slides img{
    width: 100%;
    height: 100%;
    border-radius: 10px;
    object-fit: cover;
    /* box-shadow: 0 4px 10px rgba(0, 1, 2, 1); */
}
</style>
<main>
    <!-- Banner -->
    <section class="banner">
    <div class="slideshow-container">
        <div class="slides">
            <img src="IMG/Banner_1.webp" alt="Slide 1">
        </div>
        <div class="slides">
            <img src="IMG/Banner_2.webp" alt="Slide 2">
        </div>
        <div class="slides">
            <img src="IMG/Banner_3.webp" alt="Slide 3">
        </div>
    </div>

    <div class="dots">
        <span class="dot" onclick="setSlide(1)"></span>
        <span class="dot" onclick="setSlide(2)"></span>
        <span class="dot" onclick="setSlide(3)"></span>
    </div>

    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        // Tự động chuyển slide sau mỗi 3 giây
        setInterval(() => {
            changeSlide(1);
        }, 2000);

        function changeSlide(n) {
            showSlides(slideIndex += n);
        }

        function setSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("slides");
            let dots = document.getElementsByClassName("dot");

            if (n > slides.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = slides.length }

            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }

            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }

            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
    </script>
</section>


    <!-- Categories Section -->
    <section class="categories">
        <div class="container">
            <h2>Danh mục nổi bật</h2>
            <div class="category-list">
                <div class="category-item">
                    <img src="https://cdn0.fahasa.com/media/wysiwyg/Thang-06-2024/icon_ManngaT06.png" alt="Category 1">
                    <p>Manga</p>
                </div>
                <div class="category-item">
                    <img src="https://cdn0.fahasa.com/media/wysiwyg/Duy-VHDT/Danh-muc-san-pham/240715/atomichabit100x100.jpg" alt="Category 2">
                    <p>Văn Học</p>
                </div>
                <div class="category-item">
                    <img src="https://cdn0.fahasa.com/media/wysiwyg/Duy-VHDT/Danh-muc-san-pham/241003/kinhte-1.jpg" alt="Category 3">
                    <p>Kinh Doanh</p>
                </div>
                <div class="category-item">
                    <img src="https://cdn0.fahasa.com/media/wysiwyg/Duy-VHDT/Danh-muc-san-pham/bup-sen-xanh-100x100.png" alt="Category 4">
                    <p>Tiểu Thuyết</p>
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
                        <a style="text-decoration: none; color: white" href="admin/?act=product-detail&id=<?= $product->id_product ?>" >Mua ngay</a>
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
                    <img src="https://cdn0.fahasa.com/media/magentothem/banner7/DeliT12_840x320.jpg" alt="Promo 1">
                    <p></p>
                </div>
                <div class="promo-item">
                    <img src="https://cdn0.fahasa.com/media/magentothem/banner7/TrangDCGS_0711_ResizeBanner_840x320.png" alt="Promo 2">
                    <p></p>
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
