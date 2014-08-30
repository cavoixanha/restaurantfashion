<?php
	$sql = "select*from tbl_danh_muc";
	$kq = mysql_query ( $sql );
?>
<script type="text/javascript"
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>');</script>	
<!-- <link href="../../CSS/style.css" rel="stylesheet" type="text/css"> -->
<form action="../Modules/thoi_trang_khac/xuly.php" method="post">
	<div class="top" style="margin-left:60px;padding-left:50px;margin-top:20px">
		<table width="400" border="1" cellpadding="1" style="text-align: left">
			<tr width="166" scope="row">
				<td colspan="2" style="text-align: center">SỬA NHÓM SẢN PHẨM</td>
			</tr>
			<tr>
				<th width="166" scope="row">Tên nhóm sản phẩm</th>
				<td width="218"><input type="text" name="ten_nhom_sp" id="ten_nhom_sp"></td>
			</tr>
			<tr>
				<th scope="row">Tên danh mục </th>
				<td><select name="danhmuc">
				<?php
						while ( $dong = mysql_fetch_assoc ( $kq ) ) {
						?> 	
		    				<option value="<?php echo $dong["id_danh_muc"] ?>" selected="<?php echo $dong["id_danh_muc"] ?>" >
		    				<?php echo $dong["ten_danh_muc"]?>
		    				</option>
	    				<?php
						}
						?></select></td>
			</tr>
			<tr>
				<th scope="row">Ảnh đại diện</th>
				<td><label for="anh_dai_dien"></label> <input type="text"
					name="anh_dai_dien" id="anh_dai_dien"></td>
			</tr>
			<tr style="margin: 30px">
				<th scope="row" colspan="2"><input type="submit" name="btnSave"
					id="btnSave" value="Save" style="margin-left: 100px"> <input
					type="reset" name="btnCancel" id="btnCancel" value="Cancel"
					style="margin-left: 100px"></th>
			</tr>
		</table>
	</div>
</form>


