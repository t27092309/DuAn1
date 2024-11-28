<?php
session_start();


if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'dangky':
            include 'public/taikhoan/dangky.php';
            if (isset($_POST['dangky']) && $_POST['dangky']) {
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];

                // Bảo mật hơn với prepared statements
                insert_taikhoan($user, $email, $pass);
                echo "<script> alert('Đăng ký thành công.')</script>";
            }
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = checkuser($user, $pass);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    //  $thongbao=" Bạn đã đăng nhập thành công!";
                    header('Location: index.php');
                } else {
                    $thongbao = "Tài khoản không tồn tại.Vui lòng kiểm tra hoặc đăng ký!";
                }
            }

            include "public/taikhoan/dangky.php";
            break;
        case 'edit_taikhoan':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $address = $_POST['address'];
                $id = $_POST['id'];
                update_taikhoan($id, $email, $user, $pass, $address);
                $_SESSION['user'] = checkuser($user, $pass);
                $thongbao = "Cập nhật tài khoản thành công!";
            }

            include "public/taikhoan/edit_taikhoan.php";
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
}

include "view/footer.php";
