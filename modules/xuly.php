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
		case "logout":
			if (isset($_COOKIE["userKH"])) {
				setcookie("userKH","",time () - 3600, "/");
				header ( "location: ../index.php" );
			}
			break;
	}
}
?>
<html>
</html>