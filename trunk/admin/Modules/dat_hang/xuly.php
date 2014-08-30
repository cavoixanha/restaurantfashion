<?php 
	include ("../config.php");
	$id_kh=$_POST["ma_kh"];
	$dia_chi=$_POST["dia_chi"];
	$ngay_dat=$_POST["ngay_dat"];
	$gio_dat=$_POST["gio_dat"];
	$trang_thai=$_POST["checkTT"];
	$id=$_GET["id_hoa_don"];
	if(isset($_POST["them"]))
	{
		$sql="insert into tbl_hoa_don(id_khach_hang,dia_chi_giao,ngay_dat,gio_dat,trang_thai) 
				values('$id_kh','$dia_chi','$ngay_dat','$gio_dat','$trang_thai')";
		mysql_query($sql);
		header("location:../../Indexs.php?quanly=dat_hang&ac=them");
	}
	else if (isset($_POST["sua"]))
	{
		//code sua
	}else
	{
		$sql="delete from tbl_hoa_don where id_hoa_don='$id'";
		mysql_query($sql);
		header("location:../../Indexs.php?quanly=dat_hang&ac=them");
	}
?>