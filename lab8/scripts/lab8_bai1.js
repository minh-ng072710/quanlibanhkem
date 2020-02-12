var a= new Array(10);
document.write("Các phần tử ban đầu trong mảng: ")
for(var i=0;i<10;i++){
	a[i]=Math.floor((Math.random()*100)+1);
	document.write(a[i]+" ");
}
document.write("<br />");
document.write("Các phần tử sau khi đảo ngược: ");
for(var i=a.length-1;i>=0;i--){
	
	document.write(a[i]+" ");
}