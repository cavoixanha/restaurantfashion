<?php
 $query = "select*from tbl_nhom_sp";
 $resuil = mysql_query ( $query );
?>
<div >
<div style="float:left;margin-left:50px;margin-top:50px;border:1px solid #09F;border-radius:5px;margin-bottom:20px">
 <table width="300" border="1" cellpadding="1">
  <tr>
    <th width="150" scope="col">Nhóm sản phẩm</th>
    <th width="150" scope="col"><select name="id_nhomsp" id="id_nhomsp" >
    <?php 
    while ($row=mysql_fetch_assoc($resuil))
  	{
  	?> 	
    	<option value="<?php echo $row["id_nhom_sp"] ?> selected="selected" >
    	<?php echo $row["ten_nhom_sp"] ?>
    	</option>
    <?php 
  		}
 	?>
    </select></th>
  </tr>
</table>
</div>
<div class="top" style="margin-left:50px">
	<table width="100%" border="1" cellpadding="1" style="text-align:left">
	<tr width="166" scope="row">
    	<td colspan="2" style="text-align:center">SỬA SẢN PHẨM NAM</td>
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
    <td><select name="selectSize" id="selectSize">
    <?php 
    while ($row=mysql_fetch_assoc($resuilSize))
  	{
  	?> 	
    	<option value="<?php echo $row["id_san_pham"] ?> selected="selected" >
    	<?php echo $row["size"] ?>
    	</option>
    <?php 
  		}
 	?>
      </select></td>
  </tr>
  <tr>
    <th scope="row">Giới tính</th>
    <td><select name="selectSex" id="selectSex">
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
    <td><input type="text" name="so_luong" id="so_luong"></td>
  </tr>
  <tr>
    <th scope="row">Phần trăm Sale</th>
    <td><input type="text" name="phan_tram_giam" id="phan_tram_giam"></td>
  </tr>
  <tr>
    <th scope="row">Tiêu đề</th>
    <td><input type="text" name="tieu_de" id="tieu_de"></td>
  </tr>
  <tr>
    <th scope="row">Ảnh đại diện</th>
    <td><input type="file" name="Upload" id="Upload" /></td>
  </tr>
  <tr>
    <th scope="row">Nội dung</th>
    <td width="80%"><textarea class="ckeditor" name="noidung"></textarea></td>
  </tr>
  <tr>
    <th scope="row">Ngày nhập</th>
    <td><input type="datetime" name="ngay_nhap" id="ngay_nhap"></td>
  </tr>
  <tr style="margin:30px">
    <th scope="row" colspan="2" ><input type="submit" name="btnSave" id="btnSave" value="Save" style="margin-left:100px">
      <input type="reset" name="btnCancel" id="btnCancel" value="Cancel"style="margin-left:100px"></th>
  </tr>
</table>
</div>
</div>