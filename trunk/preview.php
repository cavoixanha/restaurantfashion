<!DOCTYPE HTML>
<html>
<head>
<title>Chi tiết sản phẩm</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport"
	content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
<link href="css/easy-responsive-tabs.css" rel="stylesheet"
	type="text/css" media="all" />
<link rel="stylesheet" href="css/global.css">
<script src="js/slides.min.jquery.js"></script>
<script>
	$(function() {
		$('#products').slides({
			preload : true,
			preloadImage : 'img/loading.gif',
			effect : 'slide, fade',
			crossfade : true,
			slideSpeed : 350,
			fadeSpeed : 500,
			generateNextPrev : true,
			generatePagination : false
		});
	});
</script>
</head>
<body>
	<div class="wrap">
		<div class="header">
			<?php 
			include_once 'modules/config.php';
			include 'modules/header_top.php';
			if (isset($_GET['id'])) {
				$id_san_pham = $_GET['id'];
				$query = "select * from tbl_san_pham where id_san_pham = ".$id_san_pham;
				$result = mysql_db_query ( "web_ban_quan_ao", $query );
				if(!$result)
				{
					echo "Loi ".mysql_error();
				}
				while ( $row = mysql_fetch_assoc ( $result ) ) {
			?>
			
			<div class="main">
				<div class="content_view">
					<div class="content_top">
						<div class="clear"></div>
					</div>
					<div class="section group">
						<div class="cont-desc span_1_of_2">
							<div class="product-details">
								<div class="grid images_3_of_2">
									<div id="container">
										<div id="products_example">
											<div id="products">
												<div class="slides_container">
													<a href="#" target="_blank"><img
														src="<?php echo $row['anh_dai_dien'] ?>" alt="shop_quan_ao" /></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="desc span_3_of_2">
									<h2><?php echo $row['ten_san_pham'] ?></h2>
									<div class="price">
										<p>
											Giá: <span><?php echo $row['gia']*(100-$row['phan_tram_sale'])/100 ?></span>
										</p>
									</div>
									<div class="available">
										<p>Lựa chọn :</p>
										<ul>
											<li>Màu: <select>
													<option>Bạc</option>
													<option>Đen</option>
													<option>Vàng</option>
													<option>Đỏ</option>
											</select></li>
											<li>Size:<select>
													<option>M</option>
													<option>L</option>
													<option>S</option>
											</select></li>
											<li>Số lượng:<select>
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
													<option>5</option>
											</select></li>
										</ul>
									</div>
									<div class="share-desc">
										<div class="share">
											<p>Share:</p>
											<ul>
												<li><a href="#"><img src="images/facebook.png" alt="" /></a></li>
												<li><a href="#"><img src="images/twitter.png" alt="" /></a></li>
											</ul>
										</div>
										<div class="button">
											<span><a href="#">MUA NGAY</a></span>
										</div>
										<div class="clear"></div>
									</div>
									<div class="wish-list">
										<ul>
											<li class="wish"><a href="#">Thêm vào giỏ hàng</a></li>
										</ul>
									</div>
								</div>
								<div class="clear"></div>
							</div>
							<div class="product_desc">
								<div id="horizontalTab">
									<ul class="resp-tabs-list">
										<li>Chi tiết sản phẩm</li>
										<div class="clear"></div>
									</ul>
									<div class="resp-tabs-container">
										<div class="product-desc">
											<!-- <p></p> -->
											<h3><?php echo $row['tieu_de'] ?></h3>
											<?php echo $row['noi_dung'] ?>
										</div>

									</div>
								</div>
							</div>
							<script type="text/javascript">
								$(document).ready(function() {
									$('#horizontalTab').easyResponsiveTabs({
										type : 'default', //Types: default, vertical, accordion           
										width : 'auto', //auto or any width like 600px
										fit : true
									// 100% fit in a container
									});
								});
							</script>
							<div class="content_bottom">
								<div class="heading">
									<h3>Sản phẩm liên quan</h3>
								</div>
								<div class="see">
									<p>
										<a href="#">Xem tất cả</a>
									</p>
								</div>
								<div class="clear"></div>
							</div>
							<div class="section group">
								<?php 
								$query = "select * from tbl_san_pham where id_nhom_sp = ".$row['id_nhom_sp']." LIMIT 0,4";
								$result = mysql_db_query ( "web_ban_quan_ao", $query );
								if(!$result)
								{
									echo "Loi ".mysql_error();
								}
								
								//Lấy Những Sản Phẩm trong nhóm
								while ( $row_nhom = mysql_fetch_assoc ( $result ) ) {
								?>
								<div class="grid_1_of_4 images_1_of_4_detail">
									<a href="#"><img src="<?php echo $row_nhom['anh_dai_dien'] ?>" alt="" /></a>
									<div class="price" style="border: none">
										<div class="add-cart_view" style="float: none">
											<h4>
												<a href="preview.php?id=<?php echo $row_nhom['id_san_pham'] ?>">Chi tiết</a>
											</h4>
										</div>
										<div class="clear"></div>
									</div>
								</div>
								<?php 
								}
								?>
							</div>
						</div>
						<div class="header_bottom_left_view">
							<div class="categories_view">
								<ul class="ac-menu">
									<h3>DANH MỤC SẢN PHẨM</h3>
									<li id="one"><a href="#one">Áo nữ</a>
										<ul class="sub-menu">
											<li><a href="#one">Áo thun</a></li>
										</ul></li>
									<li id="two"><a href="#two">Váy Đầm</a>
										<ul class="sub-menu">
											<li><a href="#two">Chân váy</a></li>
											<li><a href="#two">Đầm dự tiệc</a></li>
											<li><a href="#two">Set váy</a></li>
										</ul></li>
									<li id="three"><a href="#three">Quần nữ</a>
										<ul class="sub-menu">
											<li><a href="#three">Quần jean dài</a></li>
											<li><a href="#three">Quần jean short</a></li>
										</ul></li>
									<li id="four"><a href="#four">Giày nữ</a>
										<ul class="sub-menu">
											<li><a href="#four">Giày thể thao</a></li>
											<li><a href="#four">Giày sandal</a></li>
											<li><a href="#four">Giày cao gót</a></li>
										</ul></li>
									<li><a href="#">Jumsuil</a></li>
									<li id="five"><a href="#five">Phụ kiện</a>
										<ul class="sub-menu">
											<li><a href="#five">Đồng hồ</a></li>
											<li><a href="#five">Giỏ sách</a></li>
											<li><a href="#five">Ví</a></li>
										</ul></li>
									<li><a href="#">Mỹ Phẩm</a></li>
									<li id="six"><a href="#six">Áo nam</a>
										<ul class="sub-menu">
											<li><a href="#six">Áo thun</a></li>
											<li><a href="#six">Áo sơ-mi</a></li>
										</ul></li>
									<li><a href="#">Quần nam</a></li>

									<li><a href="#">Loại khác</a></li>

								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<?php
			}
 		}
		include 'modules/footer.php'; 
		?>
		
		<script type="text/javascript">
			$(document).ready(function() {
				$().UItoTop({
					easingType : 'easeOutQuart'
				});

			});
		</script>
		<a href="#" id="toTop"><span id="toTopHover"> </span></a>
	</div>
</body>
</html>