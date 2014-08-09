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
							<li><a href="register.php">Đăng Ký</a></li>
				<li><a href="login.php">Đăng nhập</a></li> 
						<?php
						}
						?>
						<li><a href="#">Giỏ hàng</a></li>
				<li><a href="#">Tài khoản của tôi</a></li>
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
				<span>Giỏ hàng (0) :</span>
			
			
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
				<!-- <li><a href="delivery.html">Sản phẩm</a></li> -->
				<li><a href="index.php?ac=news">Tin tức</a></li>
				<li><a href="index.php?ac=contact">Liên hệ</a></li>
				<div class="clear"></div>
			</ul>
		</div>
		<div class="search_box">
			<form>
				<input type="text" value="Tìm kiếm" onfocus="this.value = '';"
					onblur="if (this.value == '') {this.value = 'Search';}"><input
					type="submit" value="">
			</form>
		</div>
		<div class="clear"></div>
	</div>
</div>