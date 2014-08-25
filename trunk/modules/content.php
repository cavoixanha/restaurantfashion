<?php
if (isset ( $_GET ['ac'] )) {
	if ($_GET ['ac'] == "about" || $_GET ['ac'] == "contact" || $_GET ['ac'] == "news" || $_GET ['ac'] == "detail_news") {
		switch ($_GET ["ac"]) {
			case "contact" :
				include 'modules/contact.php';
				break;
			case "news" :
				include 'modules/news.php';
				break;
			case "detail_news" :
				include 'modules/detail_news.php';
				break;
			default :
				include 'modules/about.php';
				break;
		}
	} else {
		include 'modules/header_bottom.php';
		?>
		<div id="content">
			<div class="main">
					<?php include 'modules/content_left.php'; ?>
					<div class="content">
					<?php
					switch ($_GET ["ac"]) {
						/*
						 * case "register" : include 'modules/register.php'; break; case "login" : include 'modules/login.php'; break;
						 */
						case "detail_nhom" :
							include 'modules/detail_nhom.php';
							break;
						case "allproduct" :
							include 'modules/allproduct.php';
							break;
						case "all_nhom_sp" :
							include 'modules/all_nhom_sp.php';
							break;
						case "timkiem" :
							include 'modules/timkiem.php';
							break;
						default :
							include 'modules/main.php';
							break;
					}
					?>
				</div>
			</div>
		</div>
<?php
	}
} else {
	include 'modules/header_bottom.php';
	?>
<div id="content">
	<div class="main">
				<?php include 'modules/content_left.php'; ?>
				<div class="content">
		   			<?php include 'modules/main.php'; ?>
		   		</div>
	</div>
</div>
<?php
}
?>