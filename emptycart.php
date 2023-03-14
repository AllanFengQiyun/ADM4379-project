<?php
session_start();
unset($_SESSION['cart']);
header("location:cart.php?".$_SERVER['QUERY_STRING']);
?>