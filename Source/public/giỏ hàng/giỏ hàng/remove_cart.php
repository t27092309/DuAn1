<?php
include 'functions.php';

$cartItemId = $_POST['cart_item_id'];

removeCartItem($cartItemId);

header("Location: cart.php");
exit;
?>