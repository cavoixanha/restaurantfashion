<?php 
	if (isset($_GET['page'])) {
		$page = $_GET['page'];
	}else {
		$page = 1;
	}
	$query = "select*from tbl_san_pham order by id_san_pham";	
	$rows = mysql_db_query ( "web_ban_quan_ao", $query );
?>
<link href="../../CSS/style.css" rel="stylesheet" type="text/css">
<div class="bottom" style="margin-top:40px">
	<table width="100%" border=1 cellpadding="1">
	<tr>
    	<td colspan="13" style="text-align:center">DANH SÁCH SẢN PHẨM</td>
    </tr>
  <tr>
  	<th scope="col">STT</th>
    <th scope="col">Tên sản phẩm</th>
    <th scope="col">Nhóm sản phẩm</th>
    <th scope="col">Size</th>
    <th scope="col">Giá</th>
    <th scope="col">Tiêu đề</th>
    <th style="width: 100px">Ảnh đại diện</th>
    <th scope="col">Nội dung</th>
    <th scope="col">Ngày nhập</th>
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
    <td><?php echo $dong['ten_san_pham']?></td>
    <td><?php echo $dong['id_nhom_sp']?></td>
    <td><?php echo $dong['size']?></td>
    <td><?php echo $dong['gia']?></td>
    <td><?php echo $dong['tieu_de']?></td>
    <td style="width: 100px"><?php echo $dong['anh_dai_dien']?></td>
    <td><?php echo $dong['noi_dung']?></td>
    <td><?php echo $dong['ngay_nhap']?></td>
    <td width="50px">
   		<a href="Indexs.php?quanly=thoi_trang_khac&ac=sua">Sửa</a>
    </td>
    <td width="50px">
    <a href="Modules/thoi_trang_khac/xuly.php?id=<?php echo $dong['id_san_pham']?>">Xóa</a>
    </td>
  </tr>
  <?php 
  	}
  ?>
</table>
</div>