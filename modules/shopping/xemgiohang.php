<?php
//session_start ();
	$tenserver = "localhost";
	$username = "root";
	$password = "";
	$database_name = "db_php_web_datmon_nh";
	/*$database_name = "news";*/
	$con = mysql_connect($tenserver,$username,$password,8080);
	mysql_select_db($database_name,$con);
	if(!$con){
		die ("Couldn not conntect; ".mysql_error());
	}
	mysql_set_charset("utf8",$con);
?>
<div style="width:960px;border:1px solid aqua;border-radius:5px">
	<table style="width:100%">
		<tr>
			<th>Ten san pham</th>
			<th>Don gia</th>
			<th>Them</th>
		</tr>
<?php
if (! isset ( $_SESSION ['giohang'] )) {
	echo "Chưa chọn mua gì cả";
	exit ();
	header ( "location: index.php" );
} else {
		$tongtien = 0;
	$listsp = $_SESSION ['giohang'];
	$item = explode ( ",", $listsp );	
	foreach ( $item as $i ) {
		$sql_gio_hang = "select * from tbl_mon_an where id_mon_an = $i";
		$result = mysql_db_query ("db_php_web_datmon_nh", $sql_gio_hang );		
			while ( $row = mysql_fetch_assoc( $result ) ) {
				$Tenmonan = $row["ten_mon"];
				$dongia = $row["don_gia"];
				$tongtien += $dongia;
				echo "<tr>
					<td>$Tenmonan</td> 
					<td>$dongia";
			
				echo "</td><td><a href='index.php?ac=xoa&id=1'>Xoa</a></td></tr>";
			}
		//}
	}
	echo "</tr><td><b>Tong tien</b></td><td>$tongtien</td></tr>";
}
?>
</table>
</div>
<?php

?>