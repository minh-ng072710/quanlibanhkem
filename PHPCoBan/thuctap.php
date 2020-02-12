<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	 class thuctap{
		 public $host="localhost";
		 public $username="user";
		 public $pass="admin";
		 public $dbname="tintuc";
		 private $db;
			function __construct(){
				$this->db=new MySQLi($this->host,$this->username,$this->pass,$this->dbname);
				$this->db->set_charset("utf8");
			}
			
		function TinMoiTrong1Loai($idLT, $sotin){
		$sql="SELECT idTin, TieuDe,TomTat,urlHinh FROM tin 
			WHERE idLT = $idLT ORDER BY idTin DESC LIMIT 0, $sotin";
		$kq = $this->db-> query($sql);		
		return $kq;	
		}
		 function ListLoaiTin (){
			$sql="SELECT idLT, Ten FROM loaitin WHERE lang='vi' AND AnHien=1";
			$kq = $this->db->query($sql);	
			return $kq;
		 }
	
		 function xulylogin($u,$p){
			 $sql="select * from user where username='$u'and password='$p'";
			 $kq=$this->db->query($str);
			 if($kq->num_rows>0) return $kq->fetch_assoc();
			 else return false;
			 
		 }



			
		}
	?>
</body>
</html>