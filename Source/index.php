<?php
// include_once "admin/model/Category.php";
// include_once "admin/model/CategoryQuery.php";
// include_once "admin/controller/CategoryController.php";
include_once "admin/model/Product.php";
include_once "admin/model/ProductQuery.php";
include_once "admin/controller/ProductController.php";

include "./public/Layout/header.php";


if (isset($_GET['act'])) {
    $act = $_GET['act'];
    // echo "act: $act";
    switch ($act) {
        case "":
            header('location:index.php');
            break;
    }
} else {
    $proCtrl = new ProductController();
    $proCtrl->homeShowList();
}
include "./admin/footer.php";
