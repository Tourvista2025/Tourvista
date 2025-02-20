<html>
<head>
<link rel="stylesheet" href="registration.css">
<style>
.logout {
 background:url('https://dh3vbjnk0bnfa.cloudfront.net/static/centralauth/images/btn-login-hover.png') no-repeat 5px 5px #484B4F;
  width: 100px;
  cursor:pointer;
  border-radius:50px;
  padding:10px 20px 10px 0;
  color:White;
  font-size:14px;
  text-align:left;
  text-indent:40px;
  display:block;
  margin:0 auto;
 
  /* Animations: */
  -webkit-transition-timing-function: ease-in-out;
  -webkit-transition-duration: .4s;
  -webkit-transition-property: all;
  
  -moz-transition-timing-function: ease-in-out;
  -moz-transition-duration: .4s;
  -moz-transition-property: all;
}

.logout:hover {
  background-image: url( 'https://dh3vbjnk0bnfa.cloudfront.net/static/centralauth/images/btn-login.png' );
  background-position: 65px 5px;
  text-indent: 15px;  
}
</style>
<script type="text/javascript" src="registration.js"></script>
<title>Registration Form</title>
</head>
<body>
<div class='cont'>
<img src='logo1.png' height='95px' width='95px'>
<div class='list'>
<ul>
<li ><a href='home.php'><span class="landing-page-text01">Home</span></a>&nbsp;
<li ><a href='about.php'><span class="landing-page-text02">About</span></a>&nbsp;
<li class='home'><a href='registration.php'><span class="landing-page-text03">SignUp</span></a>&nbsp;
<li><a href='login.php'><span class="landing-page-text03">LogIn</span></a>&nbsp;
<li><a href='feedback.php'><span class="landing-page-text04">Feedback</span></a>&nbsp;
<li>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<?php
$servername="localhost";
$username="root";
$password="0000";
$database="project";
$conn=mysqli_connect($servername,$username,$password,$database);
if(isset($_GET['but1'])) {
	$q1="delete from tmp";
	mysqli_query($conn, $q1);
	print "NO USER LOGGED IN";
}
$q="select name from tmp";
$result = $conn->query($q);
if(mysqli_num_rows($result)>0){
while($row=$result->fetch_assoc()){
$res=$row['name'];
}
print $res;
}
?>
<!--<li><form method='get'><button type="submit" name='but1' class='logout'>Logout</button></form>-->
</ul>
</div>
</div>
<div class="bgimg">
<br>
<div class='frm'>
<form method="post">
<table width="40%" align="center" bgcolor="black" cellspacing="0" cellpadding="10">
<tr><th colspan='2' align="center"><font size=6>New Member Log-In</font><hr></th></tr>
<tr><th>Full Name: </th><td><input type="text" name='fn' placeholder="Enter your full Name" id='f1' required></td></tr>
<tr><th>E-mail Id: </th><td><input type="text" name='em' placeholder="Enter Email-id" id='e1' required></td></tr>
<tr><th>Mobile No: </th><td><input type="text" name='phno' placeholder="Enter Mobile no." id='ph1' required></td></tr>
<tr><th>Address: </th><td><input type="text" name='addr' placeholder="Enter Address" required></td></tr>
<tr><th>Nationality: </th><td><input type="text" name='nt' placeholder="Enter nationality" required></td></tr>
<tr><td colspan='2'><hr></td></tr>
<tr><th>User Id: </th><td><input type="text" name='uid' placeholder="Create Your User Id" required></td></tr>
<tr><th>Password: </th><td><input type="password" name='pass' placeholder="Create Password" id='p1'required></td></tr>
<tr><th>Confirm Password: </th><td><input type="password" placeholder="Enter password again" id='p2' required></td></tr>
<tr><td colspan='2' align="center"><input type="checkbox" id='chk1'>I agree to the terms of service and privacy policy of the agency.</td></tr>
<tr>
<th colspan=2>
<div class='but'>
<button onclick='check()'>Sign Up</button>&ensp;
<button onclick="window.location.href='home.php'">Cancel</button>&ensp;

<button onclick="window.location.href='login.php'">Already Registered</button>
</div>
</th>
</tr>
</table>
</form>
</div>
</div>
<?php
$servername="localhost";
$username="root";
$password="0000";
$database="project";
$conn=mysqli_connect($servername,$username,$password,$database);
$fullname=$_POST['fn'];
$email=$_POST['em'];
$phno=$_POST['phno'];
$addr=$_POST['addr'];
$nationality=$_POST['nt'];
$user=$_POST['uid'];
$password=$_POST['pass'];
$ins="insert into user_details values('$fullname','$email',$phno,'$addr','$nationality','$user','$password')";
mysqli_query($conn, $ins);
header('Location:login.php');
?>
</body>
</html>