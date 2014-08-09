<?php
session_start ();
?>
<?php

if ($_GET ['act'] == 'themgiohang') {
	include ("themsanpham.php");
} else if ($_GET ['act'] == 'xemcart') {
	include ("xemgiohang.php");
}
?>
<div>
	<table>
		<tr>
			<td>Tên món ăn</td>
			<td>Đơn giá</td>
		</tr>	
<?php
if (isset ( $_SESSION ['giohang'] ) == false) {
	echo "Chưa chọn mua gì cả";
	exit ();
}
$sql_mon_an = "select * from sanpham where id_mon_an in ({$_SESSION['giohang']})";
$kq = mysql_query ( $sql_mon_an );
while ( $dong = mysql_fetch_assoc ( $kq ) ) {
	$tensanpham = $dong->ten_mon;
	$dongia = $dong->don_gia;
	?>
	<tr>
			<td><?php echo("$tensanpham")?></td>
			<td><?php echo("$dongia")?></td>
		</tr>
	<?php
}
?>
</table>
</div>
