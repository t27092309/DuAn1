<?php
session_start();
unset($_SESSION["username"]);
header("location:/DuAn1/Source/index.php");
?>