<?php 
	if(isset($_GET["ac"]))
	{
		$ac = $_GET["ac"];
		if($ac == "them")
		{
			include("Modules/loai_san_pham/them.php");
		}else{
			include("Modules/loai_san_pham/sua.php");
		}
	}	
	include("Modules/loai_san_pham/lietke.php");
?>