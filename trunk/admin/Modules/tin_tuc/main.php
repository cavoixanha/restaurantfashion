<?php 
	if(isset($_GET["ac"]))
	{
		$ac = $_GET["ac"];
		if($ac == "them")
		{
			include("Modules/tin_tuc/them.php");
		}else{
			include("Modules/tin_tuc/sua.php");
		}
	}	
	include("Modules/tin_tuc/lietke.php");
?>