<?php 
	if (isset($_GET['page'])) {
		$page = $_GET['page'];
	}else {
		$page = 1;
	}
	$query = "select*from tbl_tin_tuc order by ngay_dang";	
	$rows = mysql_db_query ( "web_ban_quan_ao", $query );
?>
<link href="../../CSS/style.css" rel="stylesheet" type="text/css">
<div style="margin-top:550px; width:100%; height:auto;border:1px solid #9C3;border-radius:5px;">
	<table width="100%" border="1" cellpadding="1">
	<tr>
    	<td colspan="9" style="text-align:center">DANH SÁCH ĐƠN HÀNG</td>
    </tr>
  <tr>
  	<th scope="col">STT</th>
    <th scope="col">Mã TT</th>
    <th scope="col">Tiêu Đề</th>
    <th scope="col">Ảnh minh họa</th>
    <th scope="col">Nội dung</th>
    <th scope="col">Ngày Đăng</th>
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
    <td><?php echo $dong['id_tin_tuc']?></td>
    <td><?php echo $dong['tieu_de']?></td>
    <td><?php echo $dong['anh_minh_hoa']?></td>
    <td style="width:40%"><?php echo $dong['noi_dung']?></td>
    <td><?php echo $dong['ngay_dang']?></td>
    <td width="50px">
   		<a href="Indexs.php?quanly=tin_tuc&ac=sua">Sửa</a>
    </td>
    <td width="50px">
    <a href="Modules/tin_tuc/xuly.php?id=<?php echo $dong['id_tin_tuc']?>">Xóa</a>
    </td>
  </tr>
  <?php 
  	}
  ?>
</table>
</div>

