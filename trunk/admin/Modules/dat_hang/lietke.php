<?php 
	if (isset($_GET['page'])) {
		$page = $_GET['page'];
	}else {
		$page = 1;
	}
	$query = "select*from tbl_hoa_don order by id_khach_hang";	
	$rows = mysql_db_query ( "web_ban_quan_ao", $query );
?>
<link href="../../CSS/style.css" rel="stylesheet" type="text/css">
<div class="right" style="margin-top:40px">
	<table width="960" border="1" cellpadding="1">
	<tr>
    	<td colspan="9" style="text-align:center">DANH SÁCH ĐƠN HÀNG</td>
    </tr>
  <tr>
  	<th scope="col">STT</th>
    <th scope="col">Mã HD</th>
    <th scope="col">Khách Hàng</th>
    <th scope="col">Địa chỉ</th>
    <th scope="col">Ngày Đặt</th>
    <th scope="col">Giờ Đặt</th>
    <th scope="col">Trạng Thái</th>
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
  	<td><?php echo $i ?></td>
    <td><?php echo $dong['id_hoa_don']?></td>
    <td><?php echo $dong['ten_khach_hang']?></td>
    <td><?php echo $dong['dia_chi_giao']?></td>
    <td><?php echo $dong['ngay_dat']?></td>
    <td><?php echo $dong['gio_dat']?></td>
    <td><?php echo $dong['trang_thai']?></td>
    <td width="50px">
   		<a href="Indexs.php?quanly=dat_hang&ac=sua">Sửa</a>
    </td>
    <td width="50px">
    <a href="Modules/dat_hang/xuly.php?id=<?php echo $dong['id_hoa_don']?>">Xóa</a>
    </td>
  </tr>
  <?php 
  	}
  ?>
</table>
</div>

