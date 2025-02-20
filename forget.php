<html>
<head><title>Forgot Password</title>
<style>
.container {
 width: 390px;
 height: 500px;
 background:black;
 margin-left: auto;
 margin-right: auto;
 margin-bottom:50px;
 padding-top:10px;
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
.pass1 {
 position: absolute;
 margin-top: 315px;
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
 margin-left: 18px;
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
	margin-top:10px;
	background-color:black;
	width: 100%;
  display: flex;
  padding-top:10px;
  padding-bottom:10px;
  align-items: center;
  flex-direction: row;
  justify-content: center;
  position:fixed;
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
n=document.getElementById("p1").value;
n=document.getElementById("p2").value;
</script>
</head>
<body>
<div class='cont'>
<img src='logo1.png' height='95px' width='95px'>&emsp;&emsp;&emsp;&emsp;
<div class='list'>
<ul>
<li ><a href='home.php'><span class="landing-page-text01">Home</span></a>&nbsp;
<li><a href='about.php'><span class="landing-page-text02">About</span></a>&nbsp;
<li><a href='registration.php'><span class="landing-page-text03">SignUp</span></a>&nbsp;
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
</div><br><br><br><br><br><br><br><br>	
<div class="container">
 <div class="header">Forget Password</div>
 <form method='post'>
 <input class='text' name='un' type="text" placeholder='Username' required>
 <input class='pass' name='ps' type="password" placeholder='Password' required>
 <input class='pass1' name='ps1' type="password" placeholder='Confirm Password' required>
 <button type='submit'>Re-set Password</button>
 </form>
</div>
<?php
$uname=$_POST['un'];
$pas=$_POST['ps'];
$pas1=$_POST['ps1'];
$servername="localhost";
$username="root";
$password="0000";
$database="project";
$conn=mysqli_connect($servername,$username,$password,$database);
$q1="select * from user_details where user_id='$uname'";
$q2="update user_details set pass=$pas where user_id='$uname'";
$r=$conn->query($q1);
if($pas==$pas1){
if(mysqli_num_rows($r)>0){
mysqli_query($conn, $q2);
print "<script>alert('Password Updated Successfully');</script>";
print "<script>self.location='login.php';</script>";
}
if(mysqli_num_rows($r)==0 && !($uname=="") && !($pas==""))
print "<script>alert('User Name not valid');</script>";
}
else
	print "<script>alert('Password doesnt matched!');</script>";
?>
</body>
</html>