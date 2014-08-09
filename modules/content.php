<?php
if (isset ( $_GET ['ac'] )) {
	switch ($_GET ["ac"]) {
		/*
		 * case "register" : include 'modules/register.php'; break; case "login" : include 'modules/login.php'; break;
		 */
		case "detail_nhom" :
			include 'modules/header_bottom.php';
			?>
			<div id="content">
				<div class="main">
					<?php include 'modules/content_left.php'; ?>
					<div class="content">
			   			<?php include 'modules/detail_nhom.php';?>
			   		</div>
				</div>
			</div>
		<?php
			break;
		case "about":
			include 'modules/about.php';
			break;
		case "contact":
			include 'modules/contact.php';
			break;
		case "news":
			include 'modules/news.php';
			break;
		case "detail_news":
			include 'modules/detail_news.php';
			break;
		default :
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
			break;
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