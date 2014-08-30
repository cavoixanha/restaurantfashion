<div id="content">
	<?php 
		if(isset($_GET['quanly']))
		{
			$tam=$_GET['quanly'];
		
		}else
		{
			$tam="";
		}
		if($tam =="thoi_trang_nam")
		{
			include("thoi_trang_nam/main.php");			
		}
		else if($tam =="thoi_trang_nu")
		{
			include("thoi_trang_nu/main.php");
		}
		else if($tam == "thoi_trang_khac" )
		{
			include("thoi_trang_khac/main.php");
		}
		else if($tam == "danh_muc_sp" )
		{
			include("danh_muc_sp/main.php");
		}
		else if($tam == "dat_hang" )
		{
			include("dat_hang/main.php");
		}
		else if($tam == "loai_san_pham" )
		{
			include("loai_san_pham/main.php");
		}
		else if($tam == "tin_tuc" )
		{
			include("tin_tuc/main.php");
		}
	?>
</div>