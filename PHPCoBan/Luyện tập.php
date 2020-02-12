<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<center>Construct</center>
	<?php
		class A{
			function __construct(){
				echo"Nguyễn Gia Minh";
			}
		}
	$a=new A();
	?>
	<hr>
	<center>destruct</center>
	<?php
		class test{
			function __construct(){
				echo("tôi là construct  ");
				
			}
			function __destruct(){
				echo("tôi là destruct  ");
			}
		}
	$minh=new test();
	echo"chào bạn<br>";
	unset ($minh);
	echo"Tạm biệt <br>";
	?>
	<center>chồng hàm</center>
	<?php
		class LopCha{
			var $m="đây là biến m trong lớp cha";
			function A()
			{
				echo $this->m;
			}
		}
	
		class LopCon extends LopCha{
			var $y="đây là biến y trong lớp con";
			function A(){
				parent::A();
				echo $this->y;
			}
		}
		$test=new LopCon();
		$test->A();
	?>
	
<center>Kết nối DB</center>
	<?php
	$db=new sqli("localhost","giaminh","123456","tintuc");
	if($db->connect_error>0) die("Lỗi: ".$db->connect_error);
	$$db->set_charset(utf8);
	$kq=$db->querry"
	?>
	
</body>
</html>