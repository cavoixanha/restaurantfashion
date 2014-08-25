<div class="main">
	<div class="content_tt">
		<?php
		if (isset ( $_GET ['id_tin_tuc'] )) {
			$query = "select * from tbl_tin_tuc where id_tin_tuc=" . $_GET ['id_tin_tuc'];
			$result = mysql_db_query ( "web_ban_quan_ao", $query );
			if (! $result) {
				echo "Loi " . mysql_error ( $result );
			}
			while ( $row_tintuc = mysql_fetch_assoc ( $result ) ) {
				?>
			<div class="image group">
			<div class="grid images_3_of_1">
				<img src="<?php echo $row_tintuc['anh_minh_hoa'] ?>" alt="" />
			</div>
			<div class="grid news_desc">
				<h3><?php echo $row_tintuc['tieu_de'] ?></h3>
				<h4>
						Đăng ngày <?php echo $row_tintuc['ngay_dang'] ?> bởi <span><a
						href="#">quiviteam</a></span>
				</h4>
					<?php echo $row_tintuc['noi_dung'] ?>
			</div>
		</div>
		<?php
			}
		}
		?>
	</div>
</div>