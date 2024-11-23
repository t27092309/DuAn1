<?php
session_start();
$user_id = $_SESSION['user_id']; // ID của khách hàng hiện tại
$sql = "SELECT * FROM customers WHERE id = :user_id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':user_id', $user_id);
$stmt->execute();
$customer = $stmt->fetch(PDO::FETCH_ASSOC);
?>