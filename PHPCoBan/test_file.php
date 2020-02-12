<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php	
	$filename="/php01/test/ham.php";
	echo basename($filename);
	$filename1="mime.html";
	echo "<p>kích thước của file là: ".filesize($filename1)."byte</p>";
	$filename_exit="dendamuoi.html";
	if(file_exists($filename_exit)==true){
		echo "<p>Có file</p>";			
	}else{
		echo "<p>file không tồn tại</p>";
	}
	$f="mime.html";
	$f_open=fopen($f,"r");
	$str=fread($f_open,filesize($f));
	fclose($f_open);
	echo $str;
	
	

	?>
	<hr>
	<?php
	mkdir("m",0777,false);
	
	$filename = 'counter.txt';
	$str = "19686";
	file_put_contents($filename, $str);
		?>
</body>
</html>