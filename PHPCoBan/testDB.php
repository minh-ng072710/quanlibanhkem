<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	$db=new MySQLi('localhost','user','admin','tintuc');
	if($db->connect_error>0){
		die("Lỗi: ".$db->Connect_error);
		
	}
	$db->set_charset("utf8");
	$kq=$db->query("SELECT idTL, TenTL FROM theloai");
	if(!$kq){
		die("lỗi: ".$db->connect_error);
	}
	echo "<h3>"."Số dòng dữ liệu lấy được:".$kq->num_rows."</h3>";
	
	print_r($row);
	while($row=$kq->fetch_assoc()){
		echo "<h4>".$row['TenTL']."</h4>";
	}
	
?>
</body>
</html>