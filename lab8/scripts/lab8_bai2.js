// JavaScript Document
var s="HTML & JAVASCRIPT";
var a=new Array();
for(var i=0;i<s.length;i++){
	if(s.charAt(i)==" ")
		continue;
	else{
		var j=0;
	while(j<a.length){
		if(a[j]==s.charAt(i))
			break;
		j++;
	}
	if(j==a.length)
		a.push(s.charAt(i));
	}
}
alert("Số ký tự khác nhau không tính khoảng trắng là " + a.length + " : " + a.toString());