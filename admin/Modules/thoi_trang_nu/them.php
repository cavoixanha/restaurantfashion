 <?php 
  	$sql="select*from tbl_danh_muc";
  	$kq =mysql_query($sql);
  ?>
<link href="../../CSS/style.css" rel="stylesheet" type="text/css">
<form action="Modules/thoi_trang_khac/xuly.php" method="post">
<div style="float:left;margin-left:50px;margin-top:50px;border:1px solid #09F;border-radius:5px;">
<table>
	<tr>
    <th width="150" scope="col">Danh mục sản phẩm</th>  
    <th width="150" scope="col"><select name="id_danh_muc" id="id_danh_muc" >
       <?php 
  	while ($dong=mysql_fetch_assoc($kq))
  	{
  	?> 	
    	<option  value="<?php echo $dong["id_danh_muc"] ?>"selected="<?php echo $dong["id_danh_muc"] ?>" >
    	<?php echo $dong["ten_danh_muc"] ?>
    	</option>
    <?php 
  		}
 	?>
 	    </select> 
 	</th>
 	 </tr>  	
</table>
<?php 
  $query="select*from tbl_nhom_sp where id_danh_muc";
  $resuil =mysql_query($query);
  ?>
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
	<table width="400" border="1" cellpadding="1" style="text-align:left">
	<tr width="166" scope="row">
    	<td colspan="2" style="text-align:center">THÊM SẢN PHẨM NỮ</td>
    </tr>
  <tr>
    <th width="166" scope="row">Tên sản phẩm</th>
    <td width="218"><input type="text" name="ten_sp" id="ten_sp"></td>
  </tr>
  <tr>
    <th scope="row">Size</th>
    <td><label for="size"></label>
      <input type="text" name="size" id="size"></td>
  </tr>
  <tr>
    <th scope="row">Giới tính</th>
    <td><label for="gioi_tinh"></label>
      <input type="text" name="gioi_tinh" id="gioi_tinh"></td>
  </tr>
  <tr>
    <th scope="row">Giá</th>
    <td><label for="gia"></label>
      <input type="text" name="gia" id="gia"></td>
  </tr>
  <tr>
    <th scope="row">Số lượng</th>
    <td><label for="so_luong"></label>
      <input type="text" name="so_luong" id="so_luong"></td>
  </tr>
  <tr>
    <th scope="row">Phần trăm Sale</th>
    <td><label for="phan_tram_giam"></label>
      <input type="text" name="phan_tram_giam" id="phan_tram_giam"></td>
  </tr>
  <tr>
    <th scope="row">Tiêu đề</th>
    <td><label for="tieu_de"></label>
      <input type="text" name="tieu_de" id="tieu_de"></td>
  </tr>
  <tr>
    <th scope="row">Ảnh đại diện</th>
    <td><label for="anh_dai_dien"></label>
      <input type="text" name="anh_dai_dien" id="anh_dai_dien"></td>
  </tr>
  <tr>
    <th scope="row">Nội dung</th>
    <td><label for="noi_dung"></label>
      <input type="text" name="noi_dung" id="noi_dung"></td>
  </tr>
  <tr>
    <th scope="row">Ngày nhập</th>
    <td><label for="ngay_nhap"></label>
      <input type="text" name="ngay_nhap" id="ngay_nhap"></td>
  </tr>
  <tr style="margin:30px">
    <th scope="row" colspan="2" ><input type="submit" name="btnSave" id="btnSave" value="Save" style="margin-left:100px">
      <input type="reset" name="btnCancel" id="btnCancel" value="Cancel"style="margin-left:100px"></th>
  </tr>
</table>
</div>
</form>


