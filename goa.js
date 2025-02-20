function cacl() {
nop=Number(document.getElementById("n1").value);
hotel=Number(document.getElementById("s1").value);
tnsp=Number(document.getElementById("m1").value);
tot=((hotel+tnsp)*nop);
document.getElementById("rs").value=tot;
if(tot>0)
	document.getElementById("b1").disabled=false;
}
function op() {
	window.open('payment.html');
}