<?php
	$cartItemCount = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
?>
<div class="header">
	<div class="headertop_desc">
		<div class="call">
			<p>
				<span>Bạn cần hỗ trợ?</span> gọi tới số <span class="number">1-22-3456789</span>
			</p>
		</div>
		<div class="account_desc">
			<ul>
						<?php
						if (isset ( $_COOKIE ["userKH"] )) {
							echo "<li><a href='login.php'>Xin Chào ".$_COOKIE ["userKH"]."</a></li>";
							echo '<li><a href="modules/xuly.php?ac=logout">Đăng Xuất</a></li>';
						} else {
							?>
							<li><a href="manager_acc_kh.php?ac=register">Đăng Ký</a></li>
							<li><a href="manager_acc_kh.php?ac=login">Đăng nhập</a></li> 
						<?php
						}
						?>
						<li><a href="index_shopcart.php?page=cart">Giỏ hàng <?php echo "({$cartItemCount})"; ?></a></li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
	<div class="header_top">
		<div class="logo">
			<a href="index.html"><img src="images/logo1.png" alt="" /></a>
		</div>
		<div class="cart">
			<p>
				<span><a href="index_shopcart.php?page=cart">Giỏ hàng <?php echo "({$cartItemCount})"; ?></a></span>
			
			
			<div id="dd" class="wrapper-dropdown-2">
				<img src="images/cart.png">
				<ul class="dropdown">
				</ul>
			</div>
			</p>
		</div>

		<div class="clear"></div>
	</div>
	<div class="header_bottom">
		<div class="menu">
			<ul>
				<li class="active"><a href="index.php">Trang chủ</a></li>
				<li><a href="index.php?ac=about">Giới thiệu</a></li>
				<li><a href="index.php?ac=news">Tin tức</a></li>
				<li><a href="index.php?ac=contact">Liên hệ</a></li>
				<div class="clear"></div>
			</ul>
		</div>
		<div class="search_box">
			<form action = "index.php" method = "get">
				<input type="hidden" name="ac" value="timkiem">
				<input type="text" name="tim" value="<?php
				if (isset($_GET['tim'])) {
					echo $_GET['tim'];
				}else{
					echo "Tìm kiếm";
				} ?>" onfocus="this.value = '';">
				<input type="submit" value="">
			</form>
		</div>
		<div class="clear"></div>
	</div>
</div>