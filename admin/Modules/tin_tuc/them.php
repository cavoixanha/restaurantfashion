<script type="text/javascript"
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>');</script>   	
<!-- <link href="../../CSS/style.css" rel="stylesheet" type="text/css"> -->
<blockquote>
  <form action="../Modules/tin_tuc/xuly.php" method="post">
    <div class="top" style="margin-left: 50px">
      <table width="960" border="1" cellpadding="1" style="text-align: left">
        <tr width="166" scope="row">
          <td colspan="2" style="text-align: center">THÊM TIN TỨC</td>
          </tr>
        <tr>
          <th width="166" scope="row">Tiêu đề</th>
          <td width="218"><input type="text" name="title" id="title"></td>
          </tr>
        <tr>
          <th scope="row">Ảnh minh họa</th>
          <td><input type="text" name="image"
					id="image"></td>
          </tr>
        <tr>
          <th scope="row">Nội dung</th>
          <td><textarea class="ckeditor" name="noidung" id="noidung"></textarea></td>
          </tr>
        <tr>
          <th scope="row">Ngày đăng</th>
          <td><input type="date" name="ngay_dang" id="ngay_dang"></td>
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
</blockquote>


