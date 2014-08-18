<div class="content1_left">
	<div class="content1_top">
		<div class="heading">
			<h3>Sản phẩm khuyến mãi</h3>
		</div>

		<div class="clear"></div>
	</div>
	<div class="section group">
	<?php 
	$query = "select * from tbl_san_pham where phan_tram_sale > 0 order by ngay_nhap desc LIMIT 0,2";
	$result = mysql_db_query ( "web_ban_quan_ao", $query );
	if(!$result)
	{
		echo "Loi ".mysql_error($result);
	}
	while ( $row = mysql_fetch_assoc ( $result ) ) {
	?>
		<div class="grid_1_of_41 images_1_of_41">
			<a href="preview.html"><img src="<?php echo $row['anh_dai_dien'] ?>"
				alt="" /></a>
			<h2><?php echo $row['ten_san_pham'] ?></h2>
			<div class="price-details1">
				<div class="price-number1">
					<p>
						<span class="rupees1">Giá: <?php echo $row['gia']*(100-$row['phan_tram_sale'])/100 ?></span>
					</p>
				</div>
				<div class="add-cart1">
					<h4>
						<a href="preview.php?id=<?php echo $row['id_san_pham'] ?>">Mua hàng</a>
					</h4>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	<?php 
	}
	?>
	</div>
	<div class="see">
		<p>
			<a href="#">Xem tất cả</a>
		</p>
	</div>
	<div class="clear"></div>
	<!-- <div class="hotrotructuyen">
		<div class="content1_top">
			<div class="heading">
				<h3>Hỗ trợ trực tuyến</h3>
			</div>

			<div class="clear"></div>
		</div>
		<div class="contact_chat">
			<ul class="chat">
				<li><a href="#"><img src="images/skype-ct.png"></a></li>
				<li><a href="#"><img src="images/yahoo-ct.png"></a></li>
			</ul>
		</div>
		<div class="clear"></div>
	</div> -->

	<div class="news">
		<div class="content1_top">
			<div class="heading">
				<h3>Tin tức</h3>
			</div>

			<div class="clear"></div>
		</div>
		<div class="section1">
		<?php 
		$query = "select * from tbl_tin_tuc LIMIT 0,2";
		$result = mysql_db_query ( "web_ban_quan_ao", $query );
		if(!$result)
		{
			echo "Loi ".mysql_error($result);
		}
		while ( $row_tintuc = mysql_fetch_assoc ( $result ) ) {
		?>
			<div class="grid_1_of_42 images_1_of_42">
				<a href="preview.html"><img src="<?php echo $row_tintuc['anh_minh_hoa'] ?>" alt="" /></a>
				<h2>
					<a href="index.php?ac=detail_news&id_tin_tuc=<?php echo $row_tintuc['id_tin_tuc'] ?>"><?php echo $row_tintuc['tieu_de'] ?></a>
				</h2>
			</div>
		<?php 
		}
		?>
		</div>
	</div>
	<div class="see">
		<p>
			<a href="index.php?ac=news">Xem tất cả</a>
		</p>
	</div>
	<div class="clear"></div>
</div>