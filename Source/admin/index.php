<?php
define("SITE_URL", "http://localhost/DuAn1/Source");

include_once "controller/ProductController.php";
include_once "model/Product.php";
include_once "model/ProductQuery.php";
include_once "controller/CategoryController.php";
include_once "model/Category.php";
include_once "model/CategoryQuery.php";

include "./header.php";

include "./footer.php";


$id = "";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // echo "id: $id <hr/>";
}
$act = "";
if (isset($_GET["act"])) {
    $act = $_GET["act"];
    // echo "act: $act<hr/>";

    switch ($act) {
        case "":
            header('location:index.php');
            break;

        case "product-list":
            $proCtrl = new ProductController();
            $proCtrl->showList();
            break;

        case "product-create":
            $proCtrl = new ProductController();
            $proCtrl->showCreate();
            break;

        case "product-update":
            $proCtrl = new ProductController();
            $proCtrl->showUpdate($id);
            break;

        case "product-delete":
            $proCtrl = new ProductController();
            $proCtrl->showDelete($id);
            break;

        case "product-detail":
            $proCtrl = new ProductController();
            $proCtrl->productDetail($id);
            $proCtrl->prosInProductDetail();
            break;

        case "home":
            $proCtrl = new ProductController();
            $proCtrl->homeShowList();
            break;
            // case "search":
            //     $proCtrl = new ProductController();
            //     $proCtrl->search();
            //     break;

        case "category-list":
            $cateCtrl = new CategoryController();
            $cateCtrl->showListCategory();
            break;

        case "category-create":
            $cateCtrl = new CategoryController();
            $cateCtrl->showCreateCategory();
            break;

        case "category-update":
            $cateCtrl = new CategoryController();
            $cateCtrl->showUpdateCategory($id);
            break;

        case "category-delete":
            $cateCtrl = new CategoryController();
            $cateCtrl->showDeleteCategory($id);
            break;
            
        default:
            include "view/404.php";
            break;
    }
}
