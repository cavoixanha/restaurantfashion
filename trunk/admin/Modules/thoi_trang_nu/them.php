<?php
	$sql = "select*from tbl_danh_muc";
	$kq = mysql_query ( $sql );
?>
<script type="text/javascript"
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>');</script>

<script type="text/javascript">
 //function getDanhMuc(dropdown){
// 	var myindex  = dropdown.selectedIndex;
//     var id = dropdown.options[myindex].value;
	<?php
// 		$html = "";
//		$html = "<option>nam</option>";
// 		$query = "select*from tbl_nhom_sp where id_danh_muc=".id;
// 		$resuil = mysql_query ( $query );
// 		while ( $row = mysql_fetch_assoc ( $resuil ) ) {
// 			$html += '<option value=".'.$row["id_nhom_sp"].'selected="selected" >'
// 					.$row["ten_nhom_sp"].'</option>';
// 		}
	?>
// 	alert(id);
// }

$(document).ready(function(){
 //	$('.id_nhomsp').
});
</script>
<!-- <link href="../../CSS/style.css" rel="stylesheet" type="text/css"> -->
<form action="Modules/thoi_trang_nu/xuly.php" method="post" enctype="multipart/form-data">
	<div style="float: left; margin-left: 50px; margin-top: 50px; border: 1px solid #09F; border-radius: 5px;">
		<table>
			<tr>
				<th width="150" scope="col">Danh mục sản phẩm</th>
				<th width="150" scope="col">
					<select name="id_danh_muc" id="id_danh_muc" onchange="getDanhMuc(this.form.id_danh_muc);">
		       			<?php
						while ( $dong = mysql_fetch_assoc ( $kq ) ) {
						?> 	
		    				<option value="<?php echo $dong["id_danh_muc"] ?>" selected="<?php echo $dong["id_danh_muc"] ?>" >
		    				<?php echo $dong["ten_danh_muc"]?>
		    				</option>
	    				<?php
						}
						?>
	 	    		</select>
 	    		</th>
			</tr>
<?php
 $query = "select*from tbl_nhom_sp where id_danh_muc";
 $resuil = mysql_query ( $query );
?>
			<tr>
				<th width="150" scope="col">Nhóm sản phẩm</th>
				<th width="150" scope="col">
					<select name="id_nhomsp" id="id_nhomsp">
	<?php 
   		 while ($row=mysql_fetch_assoc($resuil))
  	{
  	?> 	
    	<option value="<?php echo $row["id_nhom_sp"] ?> selected="selected" >
    	<?php echo $row["ten_nhom_sp"] ?>
    	</option>
    <?php 
  		}
 	?>  			</select>
    			</th>
			</tr>
		</table>
	</div>
	<div class="top" style="margin-left: 50px">
		<table width="100%" border="1" cellpadding="1" style="text-align: left">
			<tr width="166" scope="row">
				<td colspan="2" style="text-align: center">THÊM SẢN PHẨM NỮ</td>
			</tr>
			<tr>
				<th width="166" scope="row">Tên sản phẩm</th>
				<td width="218"><input type="text" name="ten_sp" id="ten_sp"></td>
			</tr>
			    <?php
 					$sqlSize = "select size from tbl_san_pham";
 					$resuilSize = mysql_query ( $sqlSize );
				?>
			<tr>
				<th scope="row">Size</th>
				<td><input type="text" name="size" id="size" /></td>
			</tr>
			<tr>
				<th scope="row">Giới tính</th>
				<td>
				  <select name="selectSex" id="selectSex">
				  <option value="true">Nam</option>
   				 <option value="false">Nữ</option>
		        </select></td>
			</tr>
			<tr>
				<th scope="row">Giá</th>
				<td><input type="text" name="gia" id="gia"></td>
			</tr>
			<tr>
				<th scope="row">Số lượng</th>
				<td><input type="text"
					name="so_luong" id="so_luong"></td>
			</tr>
			<tr>
				<th scope="row">Phần trăm Sale</th>
				<td><input type="text"
					name="phan_tram_giam" id="phan_tram_giam"></td>
			</tr>
			<tr>
				<th scope="row">Tiêu đề</th>
				<td><input type="text" name="tieu_de"
					id="tieu_de"></td>
			</tr>
			<tr>
				<th scope="row">Ảnh đại diện</th>
				<td><input type="file" name="upload" id="upload" /></td>
			</tr>
			<tr>
				<th scope="row">Nội dung</th>
				<td width="80%"><textarea class="ckeditor" name="noidung"></textarea></td>
			</tr>
			<tr>
				<th scope="row">Ngày nhập</th>
				<td><input type="datetime""ngay_nhap" id="ngay_nhap"></td>
			</tr>
			<tr style="margin: 30px">
				<th scope="row" colspan="2"><input type="submit" name="btnAdd"
					id="btnAdd" value="Thêm" style="margin-left: 100px"> <input
					type="reset" name="btnCancel" id="btnCancel" value="Cancel"
					style="margin-left: 100px"></th>
			</tr>
		</table>
	</div>
</form>


