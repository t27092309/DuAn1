<?php
// include_once "admin/model/Category.php";
// include_once "admin/model/CategoryQuery.php";
// include_once "admin/controller/CategoryController.php";
include_once "admin/model/Product.php";
include_once "admin/model/ProductQuery.php";
include_once "admin/controller/ProductController.php";
// include "global.php";

include "./public/Layout/header.php";


if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case "":
            header('location:index.php');
            break;
        // case "lien-he":
        //     $proCtrl = new ProductController();
        //     $proCtrl->homeLienHe();
        //     break;

        // case "gioi-thieu":
        //     $proCtrl = new ProductController();
        //     $proCtrl->homeGioiThieu();
        //     break;
    }
}
 else {
    $proCtrl = new ProductController();
    $proCtrl->homeShowList();
}
include "./admin/footer.php";