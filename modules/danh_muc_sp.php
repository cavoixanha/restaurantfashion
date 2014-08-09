<div class="header_bottom_left">
	<div class="categories">
		<h3>DANH MỤC SẢN PHẨM</h3>
		<ul class="ac-menu">
		
<?php
include 'config.php';
$query = "select * from tbl_danh_muc";
$result = mysql_db_query ( "web_ban_quan_ao", $query );
while ( $row = mysql_fetch_assoc ( $result ) ) {
	echo "<li id=" . $row ["id_danh_muc"] . "><a href='#" . $row ["id_danh_muc"] . "'>" . $row ["ten_danh_muc"] . "</a>"; // danhmuc.php?ac='" . $row ["id_danh_muc"] . "
	echo "<ul class='sub-menu'>";
	$query_sub = "select * from tbl_nhom_sp where id_danh_muc = " . $row ["id_danh_muc"];
	$result_sub = mysql_db_query ( "web_ban_quan_ao", $query_sub );
	while ( $row_sub = mysql_fetch_assoc ( $result_sub ) ) {
	?>
		<li><a href="index.php?ac=detail_nhom&&id_nhom_sp=<?php echo $row_sub ["id_nhom_sp"] ?>&ten_nhom_sp=<?php echo $row_sub ['ten_nhom_sp'] ?>"><?php echo $row_sub ["ten_nhom_sp"]  ?></a></li>
	<?php
	}
	echo "</ul>";
	echo "</li>";
}
?>
		</ul>
	</div>
</div>