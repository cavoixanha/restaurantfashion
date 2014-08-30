<?php 
	include ("../config.php");
	$nhomsanpham=$_POST["ten_nhom_sp"];
	$id_danhmuc=$_POST["id_danh_muc"];
	$anh=$_POST["anh_dai_dien"];
	$id=$_GET["id_nhom_sp"];
	if(isset($_POST["them"]))
	{
		$sql="insert into tbl_nhom_sp(ten_nhom_sp,id_danh_muc,anh_dai_dien) 
				values('$nhomsanpham','$id_danhmuc','$anh')";
		mysql_query($sql);
		header("location:../../Indexs.php?quanly=loai_san_pham&ac=them");
	}
	else if (isset($_POST["sua"]))
	{
		//code sua
	}else
	{
		$sql="delete from tbl_nhom_sp where id_nhom_sp='$id'";
		mysql_query($sql);
		header("location:../../Indexs.php?quanly=loai_san_pham&ac=them");
	}
?>