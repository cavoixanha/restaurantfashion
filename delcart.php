<?php
session_start ();
$cart = $_SESSION ['cart'];
$id = $_GET ['id'];
if ($id == 0) {
	unset ( $_SESSION ['cart'] );
} else {
	unset ( $_SESSION ['cart'] [$id] );
}
header ( "location:index_shopcart.php?page=cart" );
exit ();
?>