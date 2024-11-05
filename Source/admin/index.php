<?php
include_once "controller/ProducrController.php";
include_once "model/Product.php";
include_once "model/ProductQuery.php";

$act = "";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
echo "Giá trị của act là: " . $act . "<hr>";

$id = "";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
echo "Giá trị id là: " . $act . "<hr>";

switch ($act) {
    case "":
        // Điều hướng sang trang mặc định (trang danh sách) nếu người dùng không truyền "act"
        header("Location: ?act=product-list");
        break;

    case "product-list":
        // Hiển thị trang danh sách và xử lý logic
        $productCtrl = new ProductController();
        $productCtrl->showList();
        break;

    case "product-create":
        // Hiển thị trang tạo mới và xử lý logic
        $productCtrl = new ProductController();
        $productCtrl->showCreate();
        break;

    case "product-detail":
        // Hiển thị trang chi tiết và xử lý logic
        $productCtrl = new ProductController();
        $productCtrl->showDetail($id);
        break;

    case "product-update":
        // Hiển thị trang chỉnh sửa và xử lý logic
        $productCtrl = new ProductController();
        $productCtrl->showUpdate($id);
        break;

    case "product-delete":
        // Hiển thị trang chỉnh sửa và xử lý logic
        // $productCtrl = new ProductController();
        // $productCtrl->delete($id);
        break;

    default:
        // Hiển thị "trang 404 fage not found" nếu giá trị "act" không nằm trong danh sách phía trên.
        include "view/404.php";
        break;
}
