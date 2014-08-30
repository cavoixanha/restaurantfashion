<?php 
	include ("../config.php");
	$tieu_de=$_POST["title"];
	$anh_dai_dien=$_POST["image"];
	$noi_dung=$_POST["noidung"];
	$ngaydang=$_GET["ngay_dang"];
	$id=$_GET["id_tin_tuc"];
	if(isset($_POST["them"]))
	{
		$sql="insert into tbl_tin_tuc(tieu_de,anh_minh_hoa,noi_dung,ngay_dang) 
				values('$tieu_de','$anh_dai_dien','$noi_dung','$ngaydang')";
		mysql_query($sql);
		header("location:../../Indexs.php?quanly=tin_tuc&ac=them");
	}
	else if (isset($_POST["sua"]))
	{
		//code sua
	}else
	{
		$sql="delete from tbl_san_pham where id_tin_tuc='$id'";
		mysql_query($sql);
		header("location:../../Indexs.php?quanly=tin_tuc&ac=them");
	}
?>