<html>
<head>
<style>
* {
 margin: 0;
 padding: 0;
 box-sizing: border-box;
}
@import url('https://fonts.googleapis.com/css?family=Roboto:100');
.container {
 width: 390px;
 height: 500px;
 background: #000;
 margin-left: auto;
 margin-right: auto;
 margin-bottom:50px;
 padding-top:11px;
 -webkit-box-shadow: 0px 0px 114px 2px rgba(0, 0, 0, 0.75);	
 -moz-box-shadow: 0px 0px 114px 2px rgba(0, 0, 0, 0.75);
 box-shadow: 0px 0px 114px 2px rgba(0, 0, 0, 0.75);
 margin-top:10px;
}
.text {
 position: absolute;
 margin-top: 200px;
 background: #000;
 margin-left: 75px;
 color: gray;
 width: 250px;
 height: 44px;
 padding-left: 3px;
 z-index: 100;
 font-family: 'Roboto', sans-serif;
 padding-top: 21px;
 transition: all 600ms cubic-bezier(0.895, 0.03, 0.685, 0.22);
}
 .text:hover {
  font-size: 25px;
 }
 .text:focus {
  font-size: 19px;
 }
.pass {
 position: absolute;
 margin-top: 255px;
 background: #000;
 margin-left: 75px;
 color: gray;
 width: 250px;
 height: 44px;
 padding-left: 3px;
 z-index: 100;
 font-family: 'Roboto', sans-serif;
 padding-top: 21px;
 transition: all 600ms cubic-bezier(0.895, 0.03, 0.685, 0.22);
}
.pass:hover {
  font-size: 25px;
 }
.pass:focus {
  font-size: 19px;
 }
 .fgp {
 
 margin-top: 370px;
 margin-left: 205px;
 font-family: 'Roboto', sans-serif;
}

button {
 position: absolute;
 z-index: 100;
 width: 149px;
 height: 43px;
 border: 1px solid #fff;
 background: #000;
 font-family: 'Roboto', sans-serif;
 color: #fff;
 font-size: 16px;
 border-radius: 22px;
 margin-top: 421px;
 margin-left: 120.5px;
 transition: 0.5s;
 cursor: pointer;
}
 button:hover {
  color: #000;
 background: #fff;
}
.header {
 position: absolute;
 text-align: center;
 font-family: 'Roboto', sans-serif;
 color: #fff;
 font-size: 48px;
 margin-left: 128px;
 margin-top: 50px;
}
.info {
 position: absolute;
 text-align: center;
 font-family: 'Roboto', sans-serif;
 color: #BDFFBD;
 font-size: 14px;
 margin-left: 125px;
 margin-top: 100px;
}
.list ul li{
		display:inline-block;
		padding-right:10px;
		padding-top:5px;
}
.list ul li a{
	text-decoration:none;
	padding-left:8px;
	padding-bottom:2px;
	padding-top:2px;
	color:white;
}
.list ul li a:hover{
	background-color:white;
	border:5px solid;
	border-radius:3px;
	color:black;
	transition:0.75s;
}
ul li.home a{
	background-color:white;
	color:black;
}

button {
	cursor: pointer;
}

.cont{
	background-color:black;
	width: 100%;
  display: flex;
  padding-top:10px;
  padding-bottom:10px;
  flex-direction: row;
  justify-content: center;
  position:fixed;
  margin-top:10px;
  
}	
.landing-page-text01 {
  margin-right: 10%;
}
.landing-page-text02 {
  margin-right: 10%;
}
.landing-page-text03 {
  margin-right: 10%;
}
.landing-page-text04 {
  margin-right: 10%;
}
.fontawesomesvg {width: 1em;
      height: 1em;
      vertical-align: -.125em;
	  zoom:1.5;
    }
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
<script>
function chk() {
	a=document.getElementById("f1").value;
	b=document.getElementById("f2").value;
	if(a=="") {
		alert('Please Enter Your User Name');
		document.getElementById("f1").value="";
		document.getElementById("f1").focus;
	}
}
</script>
<title>
LogIn
</title>
</head>
<body>
<div class='cont'>
<img src='logo1.png' height='95px' width='95px'>&emsp;&emsp;&emsp;&emsp;
<div class='list'>
<ul>
<li ><a href='home.php'><span class="landing-page-text01">Home</span></a>&nbsp;
<li><a href='about.php'><span class="landing-page-text02">About</span></a>&nbsp;
<li><a href='registration.php'><span class="landing-page-text03">SignUp</span></a>&nbsp;
<li class='home'><a href='login.php'><span class="landing-page-text03">LogIn</span></a>&nbsp;
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
<li><form method='get'><button type="submit" name='but1' class='logout'>Logout</button></form>
</ul>
</div> 
</div>	
<br><br><br><br><br><br>
<a href='registration.php' style="margin-left:1290px">
<svg class='fontawesomesvg' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Free 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. --><path d="M399 384.2C376.9 345.8 335.4 320 288 320H224c-47.4 0-88.9 25.8-111 64.2c35.2 39.2 86.2 63.8 143 63.8s107.8-24.7 143-63.8zM512 256c0 141.4-114.6 256-256 256S0 397.4 0 256S114.6 0 256 0S512 114.6 512 256zM256 272c39.8 0 72-32.2 72-72s-32.2-72-72-72s-72 32.2-72 72s32.2 72 72 72z"/></svg>
SignUp Now</a>

<div class="container">
 <div class="header">Sign In</div>
 <form method='post'>
 <input class='text' name='un' id='f1' type="text" placeholder='Username' required>
 <input class='pass' name='ps' id='f2' type="password" placeholder='Password' required>
 <button type='submit' onclick="chk()">Sign In</button>
 </form>
 
 <div class='fgp'>
 
 <a href='forget.php'>Forgot Password</a></div>
</div>
<?php
 
$uname=$_POST['un'];
$pas=$_POST['ps'];
$servername="localhost";
$username="root";
$password="0000";
$database="project";
$conn=mysqli_connect($servername,$username,$password,$database);
$q1="select * from user_details where user_id='$uname' and pass='$pas'";
$q2="insert into tmp values('$uname')";
$r=$conn->query($q1);
if(mysqli_num_rows($r)>0){
print "<script>self.location='home.php';</script>";
$q3="delete from tmp;";
mysqli_query($conn, $q3);
mysqli_query($conn, $q2);
}
if(mysqli_num_rows($r)==0 && !($uname=="") && !($pas==""))
print "<script>alert('Invalid details');</script>";

?>
</body>
</html>