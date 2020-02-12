<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<p><?php $h="abcldf";echo "chuỗi có ".strlen($h)."  kí tự";?></p>
	<?php $main="nguyengiaminh";
		$needfine="m";
		$find=strpos($main,$needfine);
		if($find==false){?>
	<?php echo"Không tìm thấy kí tự: ".$needfine."trong chuỗi"."</br>" ?>
	<?php } else { ?>
	<?php echo"kí tự này ở vị trí thứ: ".$find."trong chuỗi chính"."</br>" ?>
	<?php } ?>
	
		<center>STR_REPLACE</center>
	<table width="300px"height="600" border="1px" solid >
		<tr>
	<?php $chuoigoc="Nguyễn Gia Minh";
	echo $Chuoisau=str_replace("Gia","nhật",$chuoigoc); 
	?>
		</tr>
		<center>Str_str</center>
	<?php $chuoidau="minh.ng2419@s@inhvien.hoasen.edu.vn"?>
	<?php echo substr($chuoidau,13)?>
	 <?php echo sha1(md5(md5("123")));?>
		</table>
</body>
</html>