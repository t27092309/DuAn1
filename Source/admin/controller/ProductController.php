<?php
class ProductController
{
    public $productQuery;

    public function __construct()
    {
        $this->productQuery = new ProductQuery();
    }
    public function __destruct() {}

    public function homeShowList(){
        $homeProductList = $this->productQuery->all();
        include "admin/view/client/trangChu.php";
    }

    public function productDetail($id_product){
        $productDetail = $this->productQuery->detail($id_product);

        include "admin/view/client/SanPham.php";
    }

    public function showList()
    {

        $productList = $this->productQuery->all();
        include "view/product/list.php";
    }

    public function showCreate()
    {
        $product = new Product();
        $tbLoi = "";
        $tbThanhCong = "";

        if (isset($_POST['submitForm'])) {
            // var_dump($_POST);
            // echo "<hr>";


            $product->title_product = trim($_POST['title_product']);
            $product->price_product = $_POST['price_product'];
            $product->description_product = $_POST['description_product'];
            $product->author_product = $_POST['author_product'];
            $product->id_category = $_POST['id_category'];


            if ($product->title_product === "" || $product->price_product === "") {
                $tbLoi = "Tiêu đề và giá không được bỏ trống";
            }

            var_dump($_FILES);
            $thamSo1 = $_FILES['file_upload']['tmp_name'];
            $thamSo2 = "../IMG/" . $_FILES['file_upload']['name'];
            if (move_uploaded_file($thamSo1, $thamSo2)) {
                $product->img_product = "/Source/IMG/" . $_FILES['file_upload']['name'];
            } else {
                $tbLoi = "Upload failed";
            }
            if ($tbLoi == "") {
                $productCreate = $this->productQuery->insert($product);
                if ($productCreate == "success") {
                    $tbThanhCong = "Thêm mới thành công!!!";

                    $product = new Product();
                }
            }
        }

        include "view/product/create.php";
    }

    public function showDetail()
    {


        include "view/product/detail.php";
    }

    public function showUpdate($id_product)
    {
        if ($id_product !== "") {
            $product = new Product();
            $tbLoi = "";
            $tbThanhCong = "";
            $product = $this->productQuery->find($id_product);
            if (isset($_POST['submitForm'])) {
                $product->title_product = trim($_POST['title_product']);
                $product->price_product = $_POST['price_product'];
                $product->description_product = $_POST['description_product'];
                $product->author_product = $_POST['author_product'];
                $product->id_category = $_POST['id_category'];

                if ($product->title_product === "" || $product->price_product === "") {
                    $tbLoi = "Tiêu đề và giá không được bỏ trống";
                }

                // var_dump($_FILES);
                $thamSo1 = $_FILES['file_upload']['tmp_name'];
                $thamSo2 = "../IMG/" . $_FILES['file_upload']['name'];
                if (move_uploaded_file($thamSo1, $thamSo2)) {
                    $product->img_product = "/Source/IMG/" . $_FILES['file_upload']['name'];
                } else {
                    $tbLoi = "Upload failed";
                }

                if ($tbLoi == "") {
                    $productUpdate = $this->productQuery->update($id_product, $product);
                    if ($productUpdate == "success") {
                        $tbThanhCong = "Update successfully";

                        $product = new Product();
                    }
                }
            }
        }

        include "view/product/update.php";
    }
    public function showDelete($id_product)
    {
        if ($id_product !== "") {
            $productDelete = $this->productQuery->delete($id_product);

            if ($productDelete == "success") {
                header('location:?act=product-list');
            } else {
                echo "Delete error";
            }
        } else {
            echo "<h1> Lỗi: Tham số id trống. Mời bạn kiểm tra tham số id trên đường dẫn url. </h1>";
        }

        include "view/product/create.php";
    }
    public function showSearch(){
        
    }

    
}
