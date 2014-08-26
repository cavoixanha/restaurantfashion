<?php
	session_start();
	// $id=$_GET['id'];
	$id=intval($_GET['id']);
	if(isset($_SESSION['cart'][$id]))
	{
		$qty = $_SESSION['cart'][$id] + 1;
	}
	else
	{
		$qty=1;
	}
	$_SESSION['cart'][$id]=$qty;
	
	header("location:index_shopcart.php?page=cart");
	
	exit();
?>