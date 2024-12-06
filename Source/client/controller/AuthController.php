<?php
class AuthController
{
    public $authQuery;

    public function __construct()
    {
        $this->authQuery = new Auth();
    }
    public function index()
    {
        include "client/view/auth/login.php";
    }
    public function register()
    {
        include "client/view/auth/register.php";
    }
    public function profile($id)
    {
        $profile = $this->authQuery->getProfile($id);
        include "client/view/auth/profile.php";
    }

    public function changePass($id)
    {
        $profile = $this->authQuery->getProfile($id);
        include "client/view/auth/changePass.php";
    }

    public function handleChangePass($data)
    {
        $profile = $this->authQuery->getProfile($data['id']);
        if (!password_verify($data['password_old'], $profile['password'])) {
            $_SESSION['message']['error'] = "Mật khẩu không chính xác";
            header('Location: index.php?act=changePassword');
            exit();
        }
        if($data['password_new'] != $data['re_password_new']){
            $_SESSION['message']['error'] = "Mật khẩu phải giống nhau";
            header('location: index.php?act=changePassword');
            exit();
        }
        if (strlen($data['password_new']) < 6) {
            $_SESSION['message']['error'] = "Mật khẩu phải có ít nhất 6 ký tự.";
            header('location: index.php?act=changePassword');
            exit();
        }

        $profile = $this->authQuery->updatePass($data);
        if($profile){
            $_SESSION['message']['success'] = "Cập nhật thành công";
        } else {
            $_SESSION['message']['error'] = "Cập nhật thất bại";
        }
        header('location: index.php?act=profile');
    }

    public function updateProfile($data)
    {
        $profile = $this->authQuery->updateProfile($data);
        if($profile){
            $_SESSION['message']['success'] = "Cập nhật thành công";
        } else {
            $_SESSION['message']['error'] = "Cập nhật thất bại";
        }
        header('location: index.php?act=profile');
    }   
    public function logout()
    {
        if(isset($_SESSION['user'])){
            unset($_SESSION['user']);
        }
        header('location: index.php');
    }
    public function handleLogin($data)
    {
        $result = $this->authQuery->handleLogin($account, $data);
        if($result['role'] === 1){
            header('location: ../Source/admin/?act=product-list');
        } else {
            header('location: index.php');
        }
    }
    public function handleRegister($data)
    {
        if(isset($data) && (is_array($data))){
            if (strlen($data['password']) < 6) {
                $_SESSION['error']['password'] = "Mật khẩu phải có ít nhất 6 ký tự.";
            } elseif ($data['password'] != $data['re_password']) {
                $_SESSION['error']['password'] = "Mật khẩu phải giống nhau.";
            }
            if (!empty($_SESSION['error'])) {
                header('location: index.php?act=register');
                exit();
            }
        }
        unset($_SESSION['error']);
        $this->authQuery->setInfoAccount($data);
        $result = $this->authQuery->insertAccount();
        if($result)
        {
            $_SESSION['success']['message'] = "Đăng ký thành công";
            header('location: index.php?act=login');
        }
    }
}
