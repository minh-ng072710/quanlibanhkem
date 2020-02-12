<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>practice</title>
</head>
	

<body>
	
	<hr>
	<center><h1>Cách 1</h1></center>
	<select>
		<?php 
			for($i=1;$i<=12;$i++){
				echo"<option><p>Tháng $i</p></option>"; 
			}
		?>
	</select> 
	<hr>
	<center><h1>Cách 2</h1></center>
	<select>
		<?php for($i=1;$i<=12;$i++) {?>
			<?php echo"<option><p>Tháng $i</p></option>"?>
		<?php } ?>
	</select>
		<hr>
		<center><h1>Tháng chẵn lẽ</h1></center>
		<?php for($i=1;$i<=12;$i++){?>
			<?php if($i%2==1){?>
		<option><b><?=$i;?></b>--lẻ</br></option>
		<?php } else{?>
<option><i><?=$i ?></i>--chẵn</p></option>
<?php } ?>
<?php } ?>
<hr>
		<center><h1>Vòng lặp do...while c1</h1></center>
<?php 
	$t=0;
	do{
		echo"<p>số $t</p>";
		$t+=5;
	}while($t<=100);
?>
<hr>
<center><h1>Vòng lặp do...while c2</h1></center>
	<?php $u=0; do{?>
		<?="số".$u."</br>"?>
<?php $u+=5; } while($u<=100);?>

	
}
	
}
<hr>
<hr>
	<center><h1>Hướng đối tượng</h1></center>
	<?php 
		class hocsinh{
			public $hoten;
			public $ngaysinh;
			}
		$teo=new hocsinh;
		$teo->hoten="abc";
		$teo->ngaysinh='12345';
		echo "Họ Tên:".$teo->hoten."<br>";
		echo " Tuổi:".$teo->ngaysinh."<br>";
	?>

<hr>
	<center><h1>Hướng đối tượng_set_get</h1></center>
	<?php 
	class SanPham{
		public $TenSP;
		public $Gia;
		public function minh($t,$g){
			$this->TenSP=$t;
			$this->Gia=$g;
		}
	}
	$abc= new SanPham;
	$abc->minh("asvgdsc","4567");
	echo "Tên SP: ".$abc->TenSP."</br>";
	echo "Gia: ".$abc->Gia."</br";
	
	?>

<hr>
<hr>
<center><h1>extends</h1></center>
	<?php
		class Test{
			public $public='Public_Parent';
			
			protected $protected="Protect";
			private $private=''
		}

	?>

	

			
</body>
</html>