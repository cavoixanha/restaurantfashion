<?php
include ("config.php");
$id=$_GET["id"];
$giohang=$_SESSION["giohang"];
$arr = explode(",", $giohang);

for ($i = 0; $i < count($arr); $i++) {
	if ($item == $id) {
		unset($arr[$i]);
	}
}

?>