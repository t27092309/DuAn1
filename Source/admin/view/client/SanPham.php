
    <main>
        <div class="container">
            <section class="pro">
                <div class="product">
                    <div class="poster">
                        <div class="product-list">

                            <!-- Product Item -->
                                <div class="product-item">
                                    <img src="/DuAn1<?= $product->img_product ?>" alt="Product 1">
                                </div>
                        </div>
                    </div>
                    <div class="chosse">
                        <div class="box"></div>
                        <div class="box"></div>
                        <div class="box"></div>
                    </div>
                    <div class="click">
                        <div class="them">Thêm vào giỏ hàng</div>
                        <div class="buy">Mua ngay</div>
                    </div>
                    <p class="p">Chính sách ưu đãi của Fahasa</p>
                    <div class="Ch">
                        <p>Giao hàng nhanh</p>
                        <p>Đổi trả miễn phí toàn quốc</p>
                        <p>Ưu đãi khi mua số lượng lớn</p>
                    </div>
                </div>

                <div class="product2">
                        <div class="detail">
                            <h1 class="h1"><?= $product->title_product ?></h1>
                            <h2 style="color: red;"><?= $product->price_product ?>đ</h2>
                            <div class="di">
                                <div class="bulletin">
                                    Nhà cung cấp: <?= $product->supplier ?><br>
                                    Nhà xuất bản: <?= $product->publisher ?>
                                </div>
                                <div class="bulletin">
                                    Tác giả: <?= $product->author_product ?> <br>
                                </div>
                            </div>
                        </div>

                    <div class="detaila">
                        <div class="product-description">
                            <h2>Thông tin chi tiết</h2>
                            <table class="table">
                                <tr>
                                    <td>Mã hàng</td>
                                    <td><?= $product->id_product ?></td>
                                </tr>
                                <tr>
                                    <td>Tên Nhà Cung Cấp</td>
                                    <td><?= $product->supplier ?></td>
                                </tr>
                                <tr>
                                    <td>Tác giả</td>
                                    <td><?= $product->author_product ?></td>
                                </tr>
                                <tr>
                                    <td>NXB</td>
                                    <td><?= $product->publisher ?></td>
                                </tr>
                                <tr>
                                    <td>Trọng lượng (gr)</td>
                                    <td><?= $product->weight ?></td>
                                </tr>
                                <tr>
                                    <td>Kích Thước Bao Bì</td>
                                    <td><?= $product->size ?></td>
                                </tr>
                                <tr>
                                    <td>Số trang</td>
                                    <td><?= $product->page_number ?></td>
                                </tr>
                            </table>

                        </div>
                    </div>
                    <div class="detailb">
                        <section class="shipping-info">
                            <h2>Thông tin vận chuyển</h2>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Vùng</th>
                                        <th>Thời gian giao hàng</th>
                                        <th>Phí vận chuyển</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Hà Nội</td>
                                        <td>2-3 ngày</td>
                                        <td>Miễn phí</td>
                                    </tr>
                                    <tr>
                                        <td>TP.HCM</td>
                                        <td>2-3 ngày</td>
                                        <td>Miễn phí</td>
                                    </tr>
                                    <tr>
                                        <td>Các tỉnh khác</td>
                                        <td>3-5 ngày</td>
                                        <td>30.000 đ</td>
                                    </tr>
                                </tbody>
                            </table>
                        </section>

                    </div>

                </div>


            </section>

            <section class="product-description">
                <h2>Mô tả sản phẩm</h2>
                <p><?= $product->description_product ?></p>
            </section>

            <section class="fahasa-recommendations">
                <h2>FAHASA GIỚI THIỆU</h2>
                <div class="recommendations-grid">

                    <div class="product-card">
                        <img src="<?= $pros->img_product ?>" alt="Product 1">
                        <h3>Hoa Học Trò - Số...</h3>
                        <p class="price"><span>19,000 đ</span> <del>20,000 đ</del></p>
                    </div>
                    <div class="product-card">
                        <img src="./Image/recommend-2.png" alt="Product 2">
                        <h3>Hoa Học Trò - Số...</h3>
                        <p class="price"><span>19,000 đ</span> <del>20,000 đ</del></p>
                    </div>
                    <div class="product-card">
                        <img src="./Image/recommend-3.png" alt="Product 3">
                        <h3>Hoa Học Trò - Số...</h3>
                        <p class="price"><span>19,000 đ</span> <del>20,000 đ</del></p>
                    </div>
                    <div class="product-card">
                        <img src="./Image/recommend-4.png" alt="Product 4">
                        <h3>Hoa Học Trò - Số...</h3>
                        <p class="price"><span>19,000 đ</span> <del>20,000 đ</del></p>
                    </div>
                </div>
            </section>

            <section class="product-reviews">
                <h2>Đánh giá sản phẩm</h2>
                <div class="rating-overview">
                    <div class="rating-score">
                        <h3>4,5/5</h3>
                        <div class="stars">★★★★☆</div>
                        <p>(30 đánh giá)</p>
                    </div>
                </div>
                <textarea placeholder="Viết đánh giá của bạn..."></textarea>
                <button class="submit-review">Gửi đánh giá</button>
            </section>
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