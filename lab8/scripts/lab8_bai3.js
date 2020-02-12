// JavaScript Document
function randomNumber(){
	var a=Math.floor((Math.random()*100)+0);
	var b=Math.floor((Math.random()*100)+0);
	document.getElementById("so1").value=a;
	document.getElementById("so2").value=b;
}
function check(){
	var kq=document.getElementById("cong2so").value;
	var a=document.getElementById("so1").value;
	var b=document.getElementById("so2").value;
	var sum=parseInt(a)+parseInt(b);
	if(sum==kq){
		document.getElementById("kq").innerHTML="Đúng";
		document.getElementById("kq").style.color="green";
	}
	else{
		document.getElementById("kq").innerHTML="Sai";
		document.getElementById("kq").style.color="red";
	}
}