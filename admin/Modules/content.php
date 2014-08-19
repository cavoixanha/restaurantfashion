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
		
	?>
</div>