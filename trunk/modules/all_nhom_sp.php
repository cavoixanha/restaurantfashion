<script type="text/javascript">
$(document).ready(function(){
	$(".grid_1_of_4:nth-child(4n+1)").addClass("grid_1_of_4_first");
});
</script>
<div class="content_bottom">
	<div class="heading">
		<h3>Nhóm Sản Phẩm</h3>
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
	$query = "select * from tbl_nhom_sp";
	$result = mysql_db_query ( "web_ban_quan_ao", $query );
	if(!$result)
	{
		echo "Loi ".mysql_error();
	}
	$count = 0;
	while ( $row = mysql_fetch_assoc ( $result ) ) {
		$count++;
		?>
	<div class="grid_1_of_4 images_1_of_4">
		<a href="index.php?ac=detail_nhom&id_nhom_sp=<?php echo $row['id_nhom_sp'] ?>&ten_nhom_sp=<?php echo $row['ten_nhom_sp'] ?>"><img
			src="<?php echo $row['anh_dai_dien'] ?>" alt="" /></a>
		<h2><?php echo $row['ten_nhom_sp'] ?></h2>
	</div>
	<?php
	}
	?>
</div>