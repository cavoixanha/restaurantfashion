<?php 
	if(isset($_GET["ac"]))
	{
		$ac = $_GET["ac"];
		if($ac == "them")
		{
			include("Modules/thoi_trang_khac/them.php");
		}else{
			include("Modules/thoi_trang_khac/sua.php");
		}
	}	
	include("Modules/thoi_trang_khac/lietke.php");
?>