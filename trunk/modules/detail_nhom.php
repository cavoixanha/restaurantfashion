<div class="content_bottom">
	<div class="heading">
		<h3>
		<?php 
			if (isset($_GET['ten_nhom_sp'])) {
				echo $_GET['ten_nhom_sp'];
			}
		?>
		</h3>
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
	if (isset($_GET['id_nhom_sp'])) {
		$query = "select * from tbl_san_pham where id_nhom_sp = ".$_GET['id_nhom_sp']." order by gia desc LIMIT 0,4";
		$result = mysql_db_query ( "web_ban_quan_ao", $query );
		if(!$result)
		{
			echo "Loi ".mysql_error();
		}
		while ( $row = mysql_fetch_assoc ( $result ) ) {
			?>
		<div class="grid_1_of_4 images_1_of_4">
			<a href="preview.php?id=<?php echo $row['id_san_pham'] ?>"><img
				src="<?php echo $row['anh_dai_dien'] ?>" alt="" /></a>
			<h2><?php echo $row['ten_san_pham'] ?></h2>
			<div class="price-details">
				<div class="price-number">
					<p>
						<span class="rupees">Giá: <?php echo $row['gia'] ?></span>
					</p>
				</div>
				<div class="add-cart">
					<h4>
						<a href=preview.php?id="<?php echo $row['id_san_pham'] ?>">Mua hàng</a>
					</h4>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	<?php
		}
	}
	?>
</div>