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
            header('location: ../Source/admin/view/dashboard/index.php');
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
