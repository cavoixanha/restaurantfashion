<div class="main">
	<div class="content_tt">
		<?php 
		$query = "select * from tbl_tin_tuc order by ngay_dang desc LIMIT 0,4";
		$result = mysql_db_query ( "web_ban_quan_ao", $query );
		if(!$result)
		{
			echo "Loi ".mysql_error($result);
		}
		while ( $row_tintuc = mysql_fetch_assoc ( $result ) ) {
		?>
		<div class="image group">
			<div class="grid images_3_of_1">
				<img src="<?php echo $row_tintuc['anh_minh_hoa'] ?>" alt="" />
			</div>
			<div class="grid news_desc">
				<h3><a href="index.php?ac=detail_news&id_tin_tuc=<?php echo $row_tintuc['id_tin_tuc'] ?>"><?php echo $row_tintuc['tieu_de'] ?></a></h3>
				<h4>
					Đăng ngày <?php echo $row_tintuc['ngay_dang'] ?> bởi <span><a href="#">quiviteam</a></span>
				</h4>
				<?php echo $row_tintuc['noi_dung'] ?><a href="index.php?ac=detail_news&id_tin_tuc=<?php echo $row_tintuc['id_tin_tuc'] ?>" title="more">[....]</a>
			</div>
		</div>
		<?php 
		}
		?>
		<!-- <div class="image group">
			<div class="grid images_3_of_1">
				<img src="images/newsimg1.jpg" alt="" />
			</div>
			<div class="grid news_desc">
				<h3>"Cơn lốc" săn hàng hiệu bình dân giảm giá</h3>
				<h4>
					Đăng ngày 12/06/2014 bởi <span><a href="#">quiviteam</a></span>
				</h4>
				<p>
					Từ nhiều năm nay, các tín đồ thời trang Việt đã dần quen thuộc với
					các thương hiệu thời trang quốc tế, đặc biệt là những thương hiệu
					bình dân có tính ứng dụng cao như Zara, H&M, Top shop... Tuy vậy,
					với đại đa số chị em thì mức giá được cho là bình dân của nước
					ngoài vẫn còn khá cao. Hơn nữa, để mua được hàng chính hãng lại khá
					mất công. Nếu không thể trực tiếp ra nước ngoài mua đồ, phần lớn
					chị em chọn cách nhờ mua qua người thân xách tay về, hoặc đặt hàng
					qua các cửa hàng nhận đặt và chuyển phát nhanh... Những cách như
					vậy còn nhiều hạn chế vì sẽ đội chi phí lên cao và khá mất công
					chọn, đặt. Việc đặt hàng này chỉ thực sự nở rộ khi tới những kỳ
					giảm giá lớn mà các hãng tung ra hàng năm. <a href="#" title="more">[....]</a>
				</p>
			</div>
		</div>
		<div class="image group">
			<div class="grid images_3_of_1">
				<img src="images/newsimg2.jpg" alt="" />
			</div>
			<div class="grid news_desc">
				<h3>Mẫu sinh đôi "gây bão" khi rủ casting thời trang</h3>
				<h4>
					Đăng ngày 12/06/2014 bởi <span><a href="#">quiviteam</a></span>
				</h4>
				<p>Không giống bất kỳ buổi casting người mẫu nào khác từng diễn ra
					trong làng thời trang Việt trước đây, buổi casting mẫu cho show
					thời trang Thu/Đông của NTK Đỗ Mạnh Cường diễn ra vào sáng qua
					(22/6) thu hút sự chú ý khi bất ngờ xuất hiện hằng trăm cặp sinh
					đôi, thậm chí còn có những trường hợp sinh ba đến tìm hiếm cơ hội
					làm mẫu..</p>
				<p>
					Tất cả những cặp song sinh, sinh ba được lựa chọn sẽ được lấy số đo
					và thiết kế riêng để phù hợp với vóc dáng của từng người. Đó cũng
					chính là lý do vì sao mà buổi casting được diển ra khá sớm trước 5
					tháng để có sự chuần bị kỹ lưỡng.<a href="#" title="more">[....]</a>
				</p>
			</div>
		</div>
		<div class="image group">
			<div class="grid images_3_of_1">
				<img src="images/newsimg3.jpg" alt="" />
			</div>
			<div class="grid news_desc">
				<h3>Sự âm thầm trở lại của thân hình siêu mỏng</h3>
				<h4>
					Đăng ngày 12/06/2014 bởi <span><a href="#">quiviteam</a></span>
				</h4>
				<p>Thân hình size 0 đã trở thành một trào lưu phổ biến trong nhiều
					năm về trước. Những người mẫu khẳng khiu trên sàn catwalk, những
					ngôi sao ép cân để diện trang phục khi ra phố... tất cả đã tạo nên
					"cơn sốt" giữ vóc dáng siêu mỏng với phụ nữ khắp thế giới. Nhưng
					cũng như sự tuần hoàn của thời trang, trào lưu mình dây đã rơi vào
					thoái trào, nhường ngôi cho những thân hình nóng bỏng, đầy đặn hơn.
					Các ngôi sao có thân hình đồng hồ cát như Jennifer Lopez, Rihanna,
					Christina Aguilera,...</p>
				<p>
					Điều gì đang xảy ra trên phố? Đối với những cô gái trẻ, những người
					luôn rất nhạy cảm với thời trang và mọi xu hướng, điều tương tự
					dường như đang xảy ra, không ít trong số họ cũng tôn sùng kiểu mình
					dây từ các ngôi sao Hollywood.<a href="#" title="more">[....]</a>
				</p>
			</div>
		</div> -->
		<div class="content-pagenation">
			<li><a href="#">Frist</a></li>
			<li class="active"><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><span>....</span></li>
			<li><a href="#">Last</a></li>
			<div class="clear"></div>
		</div>
	</div>
</div>