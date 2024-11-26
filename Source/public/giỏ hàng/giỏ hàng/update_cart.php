<?php
include 'functions.php';

$cartItemId = $_POST['cart_item_id'];
$quantity = $_POST['quantity'];

updateCartItem($cartItemId, $quantity);

header("Location: cart.php");
exit;
?>