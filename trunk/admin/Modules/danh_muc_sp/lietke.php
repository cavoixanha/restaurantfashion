<?php 
	if (isset($_GET['page'])) {
		$page = $_GET['page'];
	}else {
		$page = 1;
	}
	$query = "select*from tbl_danh_muc";	
	$rows = mysql_db_query ( "web_ban_quan_ao", $query );
?>
<link href="../../CSS/style.css" rel="stylesheet" type="text/css">
<form action="Modules/danh_muc_sp/xuly.php" method="get">
<div class="bottom" style="margin-top:40px;margin:auto;text-align: center">
	<table width="100%" border=1 cellpadding="1">
	<tr>
    	<td colspan="3" style="text-align:center">DANH SÁCH DANH MỤC SẢN PHẨM</td>
    </tr>
  <tr>
  	<th scope="col">STT</th>
  	<th scope="col">Mã danh mục </th>
    <th scope="col">Tên danh mục</th>
    <th scope="col" colspan="2">Quản lý</th>
  </tr>
  <?php
	if (! $rows) {
		echo 'Lỗi SQL: ' . mysql_error ();
		echo "\r\n<br />";
		echo 'SQL: ' . $query;
		exit ();
	}
	if ($rows == false) {
		echo "Lỗi";
		return;
	}
	$i = 1;
	
	while ($dong = mysql_fetch_assoc($rows)) {
	?>
  <tr>
 	 <td><?php echo $i++?></td>
    <td><?php echo $dong['id_danh_muc']?></td>
    <td><?php echo $dong['ten_danh_muc']?></td>
    <td width="50px">
   		<a href="Indexs.php?quanly=danh_muc_sp&ac=sua">Sửa</a>
    </td>
    <td width="50px">
    <a href="Modules/danh_muc_sp/xuly.php?xoa=danh_muc_san_pham&id=<?php echo $dong['id_danh_muc']?>">Xóa</a>
    </td>
  </tr>
  <?php 
  	}
  ?>
</table>
</div>
</form>