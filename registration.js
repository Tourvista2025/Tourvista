function chk_name() {
	n=document.getElementById("f1").value;  
	s1 =/^[A-Za-z]+ [A-Za-z]+$/;
	if(n.match(s1))
		return true;
	else
		return false;
}

function chk_phno() {
	n=document.getElementById("ph1").value;  
	s1 =/^[0-9]+$/;
	if(n.match(s1) && n.length==10)
		return true;
	else
		return false;
}

function chk_email() {
	n=document.getElementById("e1").value;  
	s1 =/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if(n.match(s1))
		return true;
	else
		return false;
}

function chk_pass() {
	n=document.getElementById("p1").value;  
	m=document.getElementById("p2").value;  
	if(m=="" || n=="")
		return false;
	else if(m==n)
		return true;
	else
		return false;
}

function check() {
	x=document.querySelector('#chk1');
	if(chk_name() && chk_email() && chk_pass() && chk_phno() && x.checked) {
		confirm("Are you sure you want to sign Up");
		alert("Sign Up Successful!");
		self.location="login.html";
	}
	else if(!chk_name()) {
		alert("Invalid Name");
		document.getElementById('f1').value='';
		document.getElementById('f1').focus();
	}
	else if(!chk_email()) {
		alert("Invalid Email-ID");
		document.getElementById('e1').value='';
		document.getElementById('e1').focus();
	}
	else if(!chk_phno()) {
		alert("Invalid Mobile Number");
		document.getElementById('ph1').value='';
		document.getElementById('ph1').focus();
	}
	else if(!chk_pass()) {
		alert("Password not matched");
		document.getElementById('p1').value='';
		document.getElementById('p2').value='';
		document.getElementById('p1').focus();
	}
	else if(!x.checked) {
		alert('Please agree to the T&C');
	}
}