<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<style>
		#form_login {background-color: #7C7B7B;border-radius: 10%;width: 300px;height:150px;padding: 20px}
	</style>


</head>

<body>
	<form id="form_login" method="post" action="xulydangnhap.php">
		<p><label for="u">Tên đăng nhập: </label>
			<input type="text" id="u" name="u" placeholder="Enter Password" required>
		</p>
		<p><label for="p">Password: </label>
			<input type="text" id="p" name="p" placeholder="Enter password" required>
		</p>
		<p>
			<button type="submit">Đăng nhập</button>
			<input type="checkbox" checked="checked">Ghi nhớ?
		</p>
		
	
	</form>
</body>
</html>