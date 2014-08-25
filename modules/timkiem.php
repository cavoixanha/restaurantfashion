<script type="text/javascript">
$(document).ready(function(){
	$(".grid_1_of_4:nth-child(4n+1)").addClass("grid_1_of_4_first");
});
</script>
<div class="content_bottom">
	<div class="heading">
		<h3>Tìm Sản phẩm</h3>
	</div>
	<div class="see">
		<p>
			<a href="">Xem tất cả</a>
		</p>
	</div>
	<div class="clear"></div>
</div>
<div class="section group">
<?php
if (isset($_GET['tim'])) {
// phân trang cho sản phẩm
if (isset ( $_GET ['page'] )) {
	$page = $_GET ['page'];
} else {
	$page = 1;
}
$start_from = ($page - 1) * 8;
$query = "select * from tbl_san_pham where ten_san_pham like  N'%".$_GET['tim']."%' order by ngay_nhap desc LIMIT $start_from , 8";
$result = mysql_db_query ( "web_ban_quan_ao", $query );
if (! $result) {
	echo "Loi " . mysql_error ( $result );
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
					<span class="rupees">Giá: <?php echo $row['gia']*(100-$row['phan_tram_sale'])/100 ?></span>
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
?>
</div>
<?php
// link so trang
$sqlsotrang = "SELECT COUNT(id_san_pham) FROM tbl_san_pham where ten_san_pham like  N'%".$_GET['tim']."%'";
$rs_result = mysql_db_query ( "web_ban_quan_ao", $sqlsotrang );
$row = mysql_fetch_row ( $rs_result );
$total_records = $row [0];
// $total_records = mysql_num_rows($rs_result);
$total_page = ceil ( $total_records / 8 );
?>
<div class="content-pagenation">
	<ul>
		<li><a href="index.php?ac=timkiem&tim=<?php echo $_GET['tim'] ?>">Frist</a></li>
	<?php
	for($i = 1; $i <= $total_page; $i ++) {
		if ($i == $page) {
			?>
		<li class="active"><a
			href="index.php?ac=timkiem&tim=<?php echo $_GET['tim'] ?>&page=<?php echo $i ?>"><?php echo $i ?></a></li>
		<?php
		} else {
			?>
	<!-- <li class="active"><a href="#">1</a></li>
	<li><a href="#">2</a></li>
	<li><a href="#">3</a></li>
	<li><span>....</span></li> -->
		<li><a href="index.php?ac=timkiem&tim=<?php echo $_GET['tim'] ?>&page=<?php echo $i ?>"><?php echo $i ?></a></li>
	<?php
		}
	}
	?>
		<li><a href="index.php?ac=timkiem&tim=<?php echo $_GET['tim'] ?>&page=<?php echo $total_page ?>">Last</a></li>
	</ul>
	<div class="clear"></div>
</div>
<?php 
}else{
?>
<p>Bạn Vui Lòng Nhập Dữ Liệu!</p>
<?php
}
?>