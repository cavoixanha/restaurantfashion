<?php 
	if(isset($_GET["ac"]))
	{
		$ac = $_GET["ac"];
		if($ac == "them")
		{
			include("Modules/thoi_trang_nam/them.php");
		}else{
			include("Modules/thoi_trang_nam/sua.php");
		}
	}	
	include("Modules/thoi_trang_nam/lietke.php");
?>