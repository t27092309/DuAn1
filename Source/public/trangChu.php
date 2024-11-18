    
    <main>
        <!-- Banner -->
        <section class="banner">
            <div class="container">
                <div class="splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide"><img style="width: 100%;" src="/Source/IMG/Banner_1.webp" alt="">
                            </li>
                            <li class="splide__slide"><img style="width: 100%;" src="/Source/IMG/Banner_2.webp" alt="">
                            </li>
                            <li class="splide__slide"><img style="width: 100%;" src="/Source/IMG/Banner_3.webp" alt="">
                            </li>
                            <li class="splide__slide"><img style="width: 100%;" src="/Source/IMG/Banner_4.webp" alt="">
                            </li>
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
                        <p>Văn Phòng Phẩm</p>
                    </div>
                    <div class="category-item">
                        <img src="https://via.placeholder.com/200x200" alt="Category 3">
                        <p>Đồ Chơi</p>
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
                    <!-- Product Item -->
                    <div class="product-item">
                        <img src="https://via.placeholder.com/200x250" alt="Product 1">
                        <h3>Sách Kỹ Năng</h3>
                        <p class="price">150,000 VNĐ</p>
                        <button>Mua ngay</button>
                    </div>
                    <div class="product-item">
                        <img src="https://via.placeholder.com/200x250" alt="Product 2">
                        <h3>Bút Màu</h3>
                        <p class="price">50,000 VNĐ</p>
                        <button>Mua ngay</button>
                    </div>
                    <div class="product-item">
                        <img src="https://via.placeholder.com/200x250" alt="Product 3">
                        <h3>Đồ Chơi Trẻ Em</h3>
                        <p class="price">200,000 VNĐ</p>
                        <button>Mua ngay</button>
                    </div>
                    <div class="product-item">
                        <img src="https://via.placeholder.com/200x250" alt="Product 4">
                        <h3>Vở Học Sinh</h3>
                        <p class="price">20,000 VNĐ</p>
                        <button>Mua ngay</button>
                    </div>
                    <div class="product-item">
                        <img src="https://via.placeholder.com/200x250" alt="Product 4">
                        <h3>Vở Học Sinh</h3>
                        <p class="price">20,000 VNĐ</p>
                        <button>Mua ngay</button>
                    </div>
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
        <footer class="footer">
            <div class="container">
                <p>&copy; 2024 Fahasa. All rights reserved.</p>
                <ul>
                    <li><a href="#">Chính sách bảo mật</a></li>
                    <li><a href="#">Điều khoản sử dụng</a></li>
                    <li><a href="#">Liên hệ</a></li>
                </ul>
            </div>
        </footer>
    </main>

    <script src="/node_modules/@splidejs/splide/dist/js/splide.min.js"></script>
    <script type="text/javascript">
        var splide = new Splide('.splide', {
            type: 'loop',
            perPage: 1,
            focus: 0,
            arrowPath: 'm7.61 0.807-2.12...',
            omitEnd: true,
            autoplay: true,
        });

        splide.mount();
    </script>