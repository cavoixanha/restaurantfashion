<script type="text/javascript"
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>');</script>   	
<!-- <link href="../../CSS/style.css" rel="stylesheet" type="text/css"> -->
<blockquote>
  <form action="../Modules/thoi_trang_khac/xuly.php" method="post">
    <div class="top" style="margin-left: 50px">
      <table width="400" border="1" cellpadding="1" style="text-align: left">
        <tr width="166" scope="row">
          <td colspan="2" style="text-align: center">SỬA HÓA ĐƠN</td>
        </tr>
        <tr>
          <th width="166" scope="row">Mã Khách Hàng</th>
          <td width="218"><input type="text" name="ma_kh" id="ma_kh"></td>
          </tr>
        <tr>
          <th scope="row">Địa chỉ</th>
          <td><label for="size"></label> <input type="text" name="dia_chi"
					id="dia_chi"></td>
          </tr>
        <tr>
          <th scope="row">Ngày đặt</th>
          <td><input type="date"
					name="ngay_dat" id="ngay_dat"></td>
          </tr>
        <tr>
          <th scope="row">Giờ đặt</th>
          <td><input type="time" name="gio_dat" id="gio_dat"></td>
          </tr>
        <tr>
          <th scope="row">Trạng thái</th>
          <td><input type="checkbox" name="checkTT" id="checkTT" />
            đã giao hàng</td>
          </tr>
        <tr style="margin: 30px">
          <th scope="row" colspan="2"><input type="submit" name="btnSave"
					id="btnSave" value="Lưu" style="margin-left: 100px"> <input
					type="reset" name="btnCancel" id="btnCancel" value="Cancel"
					style="margin-left: 100px"></th>
          </tr>
        </table>
      </div>
  </form>
</blockquote>


