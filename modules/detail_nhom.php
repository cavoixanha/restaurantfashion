<?php
function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}
?>
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
		<p style="float: right;">
			<a href="#">Xem tất cả</a>
		</p>
	</div>
	<div style="float:right;padding: 0px 20px 0px;">
		<a  style="color: white;text-decoration: none;font-size: 10px;display: box;padding: 5px 20px 5px;" href="index.php?ac=detail_nhom&id_nhom_sp=<?php echo $_GET['id_nhom_sp']?>&ten_nhom_sp=<?php echo $_GET['ten_nhom_sp'] ?>&sx=giathapdencao">Giá Thấp Đến Cao</a>
		<a  style="color: white;text-decoration: none;font-size: 10px;display: box;padding: 5px 20px 5px;" href="<?php echo str_replace("&sx=giathapdencao", "", $_SERVER["REQUEST_URI"]) ?>">Giá Cao Đến Thấp</a>
	</div>
	<div class="clear"></div>
</div>
<div class="section group">
	<?php
	if (isset($_GET['id_nhom_sp'])) {
		if (isset($_GET['sx'])) {
			if ($_GET['sx'] == "giathapdencao") {
				$query = "select * from tbl_san_pham where id_nhom_sp = ".$_GET['id_nhom_sp']." order by gia";
			}
		}else{
			$query = "select * from tbl_san_pham where id_nhom_sp = ".$_GET['id_nhom_sp']." order by gia desc";
		}
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
						<a href="preview.php?id=<?php echo $row['id_san_pham'] ?>">Mua hàng</a>
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