<?php 
	include ("../config.php");
	$tendanhmuc = $_POST['tendanhmuc'];
	$id=$_GET["id"];
	if(isset($_POST["them"]))
	{
		$sql=" insert into tbl_danh_muc (ten_danh_muc) values ('$tendanhmuc')";
		mysql_query ($sql);
		//echo ("thêm thành công");
		header("location:../../Indexs.php?quanly=danh_muc_sp&ac=them");
	}
	else if (isset($_POST["sua"]))
	{
		
	}else 
	{
		$sql="delete from tbl_danh_muc where id_danh_muc='$id'";
		mysql_query($sql);
		header("location:../../Indexs.php?quanly=danh_muc_sp&ac=them");
	}
?>