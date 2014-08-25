<!DOCTYPE HTML>
<html>
<head>
<title>UNIQUE FASHION</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript">
function thongbao(){
	alert("Đăng Ký Thành Công!");
	window.location = "../index.php";
}
</script>
</head>
<body>
</body>
</html>
<?php
include 'config.php';
if (isset ( $_GET ["ac"] )) {
	switch ($_GET ["ac"]) {
		case "login" :
			$username = $_POST ["username"];
			$password = $_POST ["password"];
			$sql = "select * from tbl_khach_hang where username='$username'";
			try {
				$result = mysql_db_query ( "web_ban_quan_ao", $sql );
				if (! $result) {
					echo 'Lỗi SQL: ' . mysql_error ();
					echo "\r\n<br />";
					echo 'SQL: ' . $sql;
					exit ();
				}
			} catch ( Exception $e ) {
				// echo $e."nam";
			}
			
			if ($result != null) {
				while ( $item = mysql_fetch_assoc ( $result ) ) {
					if ($item ["password"] == $password) {
						setcookie ( "userKH", $item["ten_khach_hang"], time () + 3600, "/" );
						header ( "location: ../index.php" );
					}
				}
			}
			/*
			 * if (! filter_var ( $username, FILTER_VALIDATE_EMAIL )) { echo "Bạn Phải Nhập Mail!"; } else { echo "Nhập Thành Công!"; header ( "header:index.php" ); }
			 */
			break;
		case "register":
			$name = $_POST['name'];
			$email = $_POST['email'];
			$address = $_POST['address'];
			$phone = $_POST['phone'];
			$username = $_POST ["username"];
			$password = $_POST ["password"];
			$sql = "INSERT INTO tbl_khach_hang (`ten_khach_hang` ,  `dia_chi` ,  `sdt` ,  `username` ,  `password` ,  `email` )  VALUES (N'$name',N'$address','$phone','$username','$password','$email')";
			$result = mysql_db_query ( "web_ban_quan_ao", $sql );
			if (! $result) {
				echo 'Lỗi SQL: ' . mysql_error ();
				echo "\r\n<br />";
				echo 'SQL: ' . $sql;
				exit ();
			}
			if ($result == 1) {
				echo "<script type='text/javascript'>thongbao()</script>";
// 				header ( "location: ../index.php" );
			}
			break;
		case "logout":
			if (isset($_COOKIE["userKH"])) {
				setcookie("userKH","",time () - 3600, "/");
				header ( "location: ../index.php" );
			}
			break;
	}
}
?>