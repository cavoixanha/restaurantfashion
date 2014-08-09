<script>
function thongbao(thongbao){
	alert(thongbao);
}
</script>
<?php
if (isset ( $_SESSION ['giohang'] )) {
	$_SESSION ['giohang'] = $_SESSION ['giohang'] . "," . $_GET ['id_mon_an'];
// 	return thongbao("Vừa thêm 1 sản phẩm vào giỏ hàng");
} else {
	$_SESSION ['giohang'] = $_GET ['id_mon_an'];
// 	return thongbao("Vừa thêm 1 sản phẩm vào giỏ hàng");
}
?>
