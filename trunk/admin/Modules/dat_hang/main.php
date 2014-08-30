<?php 
	if(isset($_GET["ac"]))
	{
		$ac = $_GET["ac"];
		if($ac == "them")
		{
			include("Modules/dat_hang/them.php");
		}else{
			include("Modules/dat_hang/sua.php");
		}
	}	
	include("Modules/dat_hang/lietke.php");
?>