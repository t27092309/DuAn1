<?php
// include_once "admin/model/Category.php";
// include_once "admin/model/CategoryQuery.php";
// include_once "admin/controller/CategoryController.php";
include_once "admin/model/Product.php";
include_once "admin/model/ProductQuery.php";
include_once "admin/controller/ProductController.php";
// include "global.php";
include_once "./public/model/taikhoan.php";

include "./public/Layout/header.php";


if (isset($_GET['act'])) {
    $act = $_GET['act'];
    // echo "act: $act";
    switch ($act) {
        case "":
            header('location:index.php');
            break;
            // case "lien-he":
            //     $proCtrl = new ProductController();
            //     $proCtrl->homeLienHe();
            //     break;
            // case "lien-he":
            //     $proCtrl = new ProductController();
            //     $proCtrl->homeLienHe();
            //     break;

            // case "gioi-thieu":
            //     $proCtrl = new ProductController();
            //     $proCtrl->homeGioiThieu();
            //     break;
            // case "gioi-thieu":
            //     $proCtrl = new ProductController();
            //     $proCtrl->homeGioiThieu();
            //     break;
    }
} else {
} else {
    $proCtrl = new ProductController();
    $proCtrl->homeShowList();
}
if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'dangky':
            include 'public/taikhoan/dangky.php';
            break;

        case 'dangnhap':
            include 'public/taikhoan/dangnhap.php';
            break;

        case 'edit_taikhoan':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $address = $_POST['address'];
                $phone = $_POST['phone'];
                $id = $_POST['id'];
                update_taikhoan($id, $email, $user, $pass, $address, $phone);
                $_SESSION['user'] = checkuser($user, $pass);
                $thongbao = "Cập nhật tài khoản thành công!";
            }

            include "view/taikhoan/edit_taikhoan.php";
            break;
        case 'quenmk':
            if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
                $email = $_POST['email'];
                $checkemail = checkemail($email);
                if (is_array($checkemail)) {
                    $thongbao = "Mật khẩu của bạn là:" . $checkemail['pass'];
                } else {
                    $thongbao = "Email này không tồn tại!";
                }
            }

            include "public/taikhoan/quenmk.php";
            break;
        case "thoat":
            session_unset();
            header('location:index.php');
            break;
    }
} else {
    // include "view/home.php";
}



include "./admin/footer.php";
