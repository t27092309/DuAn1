<?php
include_once "controller/ProductController.php";
include_once "model/Product.php";
include_once "model/ProductQuery.php";

$id = "";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    echo "id: $id <hr/>";
}
$act = "";
if (isset($_GET["act"])) {
    $act = $_GET["act"];
    echo "act: $act<hr/>";

    switch ($act) {
        case "":
            header('location:index.php');
            break;
    
        // case "category-list":
        //     $categoryCtrl = new CategoryController();
        //     $categoryCtrl->showListCategory();
        //     break;
    
        // case "category-create":
        //     $categoryCtrl = new CategoryController();
        //     $categoryCtrl->showCreate();
        //     break;
        // case "category-update":
        //     $categoryCtrl = new CategoryController();
        //     $categoryCtrl->showUpdate($id);
        //     break;
    
        // case "category-delete":
        //     $categoryCtrl = new CategoryController();
        //     $categoryCtrl->showDelete($id);
        //     break;
    
        // case "category-detail":
        //     $categoryCtrl = new CategoryController();
        //     $categoryCtrl->showdetail();
        //     break;
    // -------------------------------------------------------------
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
            $proCtrl->showDetail($id);
            break;
    
        default:
            include "view/404.php";
            break;
    }
    
}