<?php 
	if(isset($_GET["ac"]))
	{
		$ac = $_GET["ac"];
		if($ac == "them")
		{
			include("Modules/danh_muc_sp/them.php");
		}else{
			include("Modules/danh_muc_sp/sua.php");
		}
	}	
	include("Modules/danh_muc_sp/lietke.php");
?>