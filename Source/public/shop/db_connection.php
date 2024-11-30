<?php
$host = 'localhost';
$db = 'duan1';
$user = 'root'; // Thay bằng tên người dùng MySQL của bạn
$pass = '';     // Thay bằng mật khẩu MySQL của bạn

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Kết nối thất bại: " . $e->getMessage());
}
?>