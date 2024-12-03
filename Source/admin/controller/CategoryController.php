<?php
class CategoryController
{
    public $categoryQuery;

    public function __construct()
    {
        $this->categoryQuery = new CategoryQuery();
    }
    public function __destruct() {}
    public function homeShowListCategory()
    {
        $homeCategoryList = $this->categoryQuery->CategoryAll();
        include "admin/view/client/trangChu.php";
    }
    public function showListCategory()
    {

        $categoryList = $this->categoryQuery->CategoryAll();
        include "view/category/list.php";
    }

    public function showCreateCategory()
    {
        $category = new Category();
        $tbLoi = "";
        $tbThanhCong = "";

        if (isset($_POST['submitForm'])) {
            // var_dump($_POST);
            // echo "<hr>";


            $category->title_category = trim($_POST['title_product']);
            $category->id_category = $_POST['id_category'];

            if ($category->title_category === "") {
                $tbLoi = "Tiêu đề và giá không được bỏ trống";
            }

            var_dump($_FILES);
            $thamSo1 = $_FILES['file_upload']['tmp_name'];
            $thamSo2 = "../IMG/" . $_FILES['file_upload']['name'];
            if (move_uploaded_file($thamSo1, $thamSo2)) {
                $category->img_category = "/Source/IMG/" . $_FILES['file_upload']['name'];
            } else {
                $tbLoi = "Upload failed";
            }
            if ($tbLoi == "") {
                $categoryCreate = $this->categoryQuery->insertCategory($category);
                if ($categoryCreate == "success") {
                    $tbThanhCong = "Thêm mới thành công!!!";

                    $category = new Category();
                }
            }
        }

        include "view/category/create.php";
    }
    
    public function showUpdateCategory($id_category)
    {
        if ($id_category !== "") {
            $category = new Category();
            $tbLoi = "";
            $tbThanhCong = "";
            $category = $this->categoryQuery->detailCategory($id_category);
            if (isset($_POST['submitForm'])) {
                $category->title_category = trim($_POST['title_product']);
                $category->id_category = $_POST['id_category'];
    
                if ($category->title_category === "") {
                    $tbLoi = "Tiêu đề và giá không được bỏ trống";
                }
    
                var_dump($_FILES);
                $thamSo1 = $_FILES['file_upload']['tmp_name'];
                $thamSo2 = "../IMG/" . $_FILES['file_upload']['name'];
                if (move_uploaded_file($thamSo1, $thamSo2)) {
                    $category->img_category = "/Source/IMG/" . $_FILES['file_upload']['name'];
                } else {
                    $tbLoi = "Upload failed";
                }

                if ($tbLoi == "") {
                    $categoryUpdate = $this->categoryQuery->updateCategory($id_category, $category);
                    if ($categoryUpdate == "success") {
                        $tbThanhCong = "Thêm mới thành công!!!";
    
                        $category = new Category();
                    }
                }
            }
        }

        include "view/category/update.php";
    }

    public function showDeleteCategory($id_category)
    {
        if ($id_category !== "") {
            $categoryDelete = $this->categoryQuery->deleteCategory($id_category);

            if ($categoryDelete == "success") {
                header('location:?act=category-list');
            } else {
                echo "Delete error";
            }
        } else {
            echo "<h1> Lỗi: Tham số id trống. Mời bạn kiểm tra tham số id trên đường dẫn url. </h1>";
        }

        include "view/category/create.php";
    }
}
