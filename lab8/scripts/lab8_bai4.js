function kiemtra(){
	s="";
	if(document.getElementById("idUsername").value.length==0){
		s+="Tên đăng nhập không được để trống";
	}
	else{
		ten=document.getElementById("idUsername").value;
		if(ten.length<6)
			s+="Tên đăng nhập phải tối thiểu 6 ký tự. ";
		if(ten.indexOf(" ")>=0)
			s+="Tên đăng nhập không được có khoảng trắng. ";
	}

	if(document.getElementById("idPass").value.length==0)
		s+="Mật khẩu không được để trống. ";
	else{
		mk=document.getElementById("idPass").value;
		so=0;
		for(i=0;i<mk.length;i++)
			if(!isNaN(mk[i]))
				so++;
		if(so==0)
			s+="Mật khẩu phải chứa số. ";
		else if(so==mk.length)
			s+="Mật khẩu phải chứa chữ. ";
	}
	
	if(document.getElementById("idName").value.length==0)
		s+="Họ tên không được để trống. ";
	if(document.getElementById("idDate").value.length==0)
		s+="Ngày sinh không được để trống. ";
	
	if(document.getElementById("idHdd").value.length==0)
		s+="Phải có hình đại diện. ";
	if(document.getElementById("idCauhoi").value!="")
		if(document.getElementById("idTraloi").value.length==0)
			s+="Phải có câu trả lời.";
	
	if(s=="")
		return true;
	else
	{
		alert(s);
		return false;
	}
}