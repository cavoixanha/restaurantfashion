<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<style type="text/css" media="screen">
		.main{
			float: right;
			margin: 0 auto;
			clear: both;
			width: 80%;
			height: auto;
		}
		form.process_form{
			margin-top: -450px;
			margin-left: 200px;
			
		}
		tr.process_trten th, tr.process_tr td {
			border: 1px solid black;
			padding: 10px 55px;
			text-align: center;

		}
		tr.process_trten th{
			background-color: #444;
			color: white;
		}
		td.btntt{
	        border: 1px solid #444;
	        font-size: 20px;
	        text-transform: uppercase;
	        font-weight: bold;
	        padding: 10px 10px;
	        
    	}
    	.main h1{
    		background-color: #bd1c1c;
    		width: 82.4%;
    		padding: 14px 10px;
    		border-bottom: 1px solid #bd1c1c;
    		font-size: 23px;
    		font-weight: bold;
    		color: white;
    		text-align: center;
    	}
	</style>
</head>
<body>
	<?php include 'hoadonthanhtoan1.php';?>
	<div class="main">
		<form class="process_form">
			<table class="process_tb">
				<h1>CHI TIẾT SẢN PHẨM</h1>
				<tr class="process_trten">
					<th>Tên sản phẩm</th>
					<th>Size</th>
					<th>Đơn giá</th>
					<th>Số lượng</th>
				</tr>
				<?php
					settype($price,"integer");
					settype($quantity,"integer");
					$name = $_POST['tensp'];
					$price = $_POST['gia'];
					$quantity = $_POST['quantity'];
					$size = $_POST['size'];
				?>
				<tr class="process_tr">
					<td><?php echo $name ?></td>
					<td><?php echo $size ?></td>
					<td><?php echo  number_format($price) ?>đ</td>
					<td><?php echo $quantity ?></td>
				</tr>
				<tr class="process_trtt">
					<td class="btntt">Tổng Tiền: <?php echo number_format($quantity * $price) ?>đ</td>
				</tr>
			</table>
		</form>
	</div>
	<?php include 'modules/footer.php'; ?>
</body>
</html>