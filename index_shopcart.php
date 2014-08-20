<?php 
	// include 'modules/config.php'; 
	session_start();
    require 'modules/config.php';

    if(isset($_GET['page'])){

      $pages=array("preview","cart");
      
      if(in_array($_GET['page'], $pages)){

        $_page=$_GET['page'];

      } else{

        $_page="preview";
      } 

    }else{

        $_page="preview";
    }

?>
<!DOCTYPE HTML>
<html>
<head>
<title>UNIQUE FASHION</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport"
	content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/slider.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/shopcart.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/startstop-slider.js"></script>
</head>
<body>
	<div class="wrap">
		
        
		<?php include 'modules/header_top.php'; ?>
		
		<div id="main">
            <?php 

            	require $_page.".php"; 

        	?>
        </div>
        
		<div style="clear: both;"></div>

		<?php include 'modules/footer.php'; ?>

		<script type="text/javascript">
		$(document).ready(function() {			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
		<a href="#" id="toTop"><span id="toTopHover"> </span></a>
	</div>
</body>
</html>