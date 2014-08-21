<?php 
	include ("../../config.php");
	$loaisanpham=$_POST["id_nhomsp"];
	$tensanpham=$_POST["ten_sp"];
	$size=$_POST["size"];
	$sex=$_POST["gioi_tinh"];
	$gia=$_POST["gia"];
	$soluong=$_POST["so_luong"];
	$phantram=$_POST["phan_tram_giam"];
	$tieude=$_POST["tieu_de"];
	$anh=$_POST["anh_dai_dien"];
	$noidung=$_POST["noi_dung"];
	$id=$_GET["id"];
	if(isset($_POST["them"]))
	{
		$sql="insert into thoi_trang_khac(id_nhomsp,ten_sp,size,gioi_tinh,gia,so_luong,phan_tram_giam,tieu_de,anh_dai_dien,noi_dung) 
				values('$loaisanpham','$tensanpham','$size','$sex','$gia','$soluong','$phantram','$tieude','$anh','$noidung')";
		mysql_query($sql);
		header("location:../../Indexs.php?quanly=thoi_trang_khac&ac=them");
	}
	else if (isset($_POST["xoa"]))
	{
		$sql="delete from tbl_san_pham where id_san_pham='$id'";
		mysql_query($sql);
		//header("location:../../Indexs.php?quanly=thoi_trang_khac&ac=them");
	}else
	{
		
	}
?>