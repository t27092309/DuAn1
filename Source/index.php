<?php
session_start();
// include_once "admin/model/Category.php";
// include_once "admin/model/CategoryQuery.php";
// include_once "admin/controller/CategoryController.php";
include_once "admin/model/Product.php";
include_once "admin/model/ProductQuery.php";
include_once "admin/controller/ProductController.php";

include_once "client/model/Auth.php";
include_once "client/controller/AuthController.php";

include "./public/Layout/header.php";


if (isset($_GET['act'])) {
    $act = $_GET['act'];
    // echo "act: $act";
    switch ($act) {
        case "":
            header('location:index.php');
            break;
        case "login":
            $authCtrl = new AuthController();
            $authCtrl->index();
            break;
        case "register":
            $authCtrl = new AuthController();
            $authCtrl->register();
            break;
        case "logout":
            $authCtrl = new AuthController();
            $authCtrl->logout();
            break;
        case "handleLogin":
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST)) { 
                $data = $_POST;
                $authCtrl = new AuthController();
                $authCtrl->handleLogin($data);
            } else {
                echo "Không có dữ liệu được gửi từ form.";
            }
            break;
        case "handleRegister":
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST)) { 
                $data = $_POST;
                $authCtrl = new AuthController();
                $authCtrl->handleRegister($data);
            } else {
                echo "Không có dữ liệu được gửi từ form.";
            }
            break;
    }
} else {
    $proCtrl = new ProductController();
    $proCtrl->homeShowList();
}
include "./admin/footer.php";
