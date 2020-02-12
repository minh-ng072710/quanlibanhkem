
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	session_start();
	require_once("thuctap.php");
	$tt=new thuctap;
	$u=trim($_POST['u']);
	$p=trim($_POST['p']);
	$kq=$tt->xulydangnhap($u,$p);
	if
	
	?>
	
</body>
</html>