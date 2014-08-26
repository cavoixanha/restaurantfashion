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
<meta name="viewport"content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/slider.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/startstop-slider.js"></script>
<link href="css/social.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$(".grid_1_of_4:nth-child(4n+1)").addClass("grid_1_of_4_first");
});
</script>
</head>
<body>
	<div class="wrap">
		
		<?php include 'modules/header_top.php'; ?>

		<?php include 'modules/content.php'; ?>
		<div class="clear"></div>
			<ul id="social_side_links">
				<li class="social-popout"><a href="http://facebook.com" target="_blank"><img src="images/social/facebook.png" alt="" /></a></li>
				<li class="social-popout"><a href="http://skype.com" target="_blank"><img src="images/social/skype.png" alt="" /></a></li>
				<li class="social-popout"><a href="http://yahoo.com" target="_blank"><img src="images/social/yahoo.png" alt="" /></a></li>
			</ul>

		<?php include 'modules/footer.php'; ?>	
	</div>
		
</body>
</html>