<?php
	$tenserver = "localhost";
	$username = "root";
	$password = "";
	$database_name = "web_ban_quan_ao";
	$con = mysql_connect($tenserver,$username,$password,8080);
	mysql_select_db($database_name,$con);
	if(!$con){
		die ("Couldn not conntect; ".mysql_error());
	}
	mysql_set_charset("utf8",$con);
?>