<?php
	session_start();
	$cart=$_SESSION['cart'];
	$id=$_GET['id'];
	unset($_SESSION['cart']);
	header("location:index_shopcart.php?page=cart");
	exit();
?>