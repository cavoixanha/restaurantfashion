<<?php 
	if(isset($_GET["ac"]))
	{
		$ac = $_GET["ac"];
		if($ac == "them")
		{
			include("Modules/thoi_trang_nu/them.php");
		}else{
			include("Modules/thoi_trang_nu/sua.php");
		}
	}	
	include("Modules/thoi_trang_nu/lietke.php");
?>