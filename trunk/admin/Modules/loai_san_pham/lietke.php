<?php 
	if (isset($_GET['page'])) {
		$page = $_GET['page'];
	}else {
		$page = 1;
	}
	$query = "select*from tbl_nhom_sp ";	
	$rows = mysql_db_query ( "web_ban_quan_ao", $query );
?>
<link href="../../CSS/style.css" rel="stylesheet" type="text/css">
<div style="margin-top:200px; margin-left:50px;text-align:center">
	<table width="90%" border="1" cellpadding="1">
	<tr>
    	<td colspan="5" style="text-align:center">DANH SÁCH NHÓM SẢN PHẨM</td>
    </tr>
  <tr>
  	<th scope="col">STT</th>
    <th scope="col">Mã nhóm sản phẩm</th>
    <th scope="col">Danh mục sản phẩm</th> 
    <th scope="col">Danh mục sản phẩm</th> 
    <th style="width: 100px">Ảnh đại diện</th>
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
  	<td><?php echo $i++ ?></td>
    <td><?php echo $dong['id_nhom_sp']?></td>
    <td><?php echo $dong['ten_nhom_sp']?></td>
    <td><?php echo $dong['id_danh_muc']?></td> 
    <td style="width: 100px"><?php echo $dong['anh_dai_dien']?></td>
    <td width="50px">
   		<a href="Indexs.php?quanly=loai_san_pham&ac=sua">Sửa</a>
    </td>
    <td width="50px">
    <a href="../Modules/loai_san_pham/xuly.php?id=<?php echo $dong['id_nhom_sp']?>">Xóa</a>
    </td>
  </tr>
  <?php 
  	}
  ?>
</table>
</div>

