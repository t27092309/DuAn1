<?php
include 'functions.php';

session_start();
$userId = $_SESSION['user_id'];
$productId = $_POST['product_id'];
$quantity = $_POST['quantity'];

addToCart($userId, $productId, $quantity);

header("Location: cart.php");
exit;
?>