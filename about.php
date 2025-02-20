<html>
<head>
<link rel='stylesheet' href='about1.css'>
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
</head>
<body>
<div class='cont'>
<img src='logo1.png' height='95px' width='95px'>
<div class='list'>
<ul>
<li ><a href='home.php'><span class="landing-page-text01">Home</span></a>&nbsp;
<li class='home'><a href='about.php'><span class="landing-page-text02">About</span></a>&nbsp;
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
<li><form method='get'><button type="submit" name='but1' class='logout'>Logout</button></form>
</ul>
</div>
</div>
<div class="about-section">
<div class='header'>
  <font size='8'><i><b><br>&emsp;&emsp;About Us</b></i></font>

</div>
  <b>
  <p>This site is developed by the students mentioned below.</p>
  <p>Please do share your feedback on the site.</p>
  </b>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">

  <div class="column">
    <div class="card">
      <img src="sayan.jpg" alt="sayan" style="width:100%" height='400px'>
      <div class="container">
        <h2>SAYAN SINHA</h2>
        
        <p>ssinha.asn@gmail.com</p>
		<p>8617332984
        <p><a href="mailto:ssinha.asn@gmail.com"><button class="button">Contact</button></a></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="gurleen.jpg" alt="gurleen" style="width:100%" height='400px'>
      <div class="container">
        <h2>GURLEEN KAUR</h2>
       
        <p>kaur.gurlee25@gmail.com</p>
		<p>8250945626
        <p><a href="mailto:kaur.gurlee25@gmail.com"><button class="button">Contact</button></a></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="pritam.jpg" alt="Pritam" style="width:100%" height='400px'>
      <div class="container">
        <h2>PRITAM DE</h2>
        
        
        <p>depritam3@gmail.com
		 <p>7585092294
        <p><a href="mailto:depritam3@gmail.com"><button class="button">Contact</button></a></p>
      </div>
    </div>
  </div>
  
 </div>
 
<div class="row">

<div class="column">
    <div class="card">
      <img src="sohan.jpg" alt="sohan" style="width:100%" height='400px'>
      <div class="container">
        <h2>SOHAN HAZRA</h2>
                <p>sohanhazra47@gmail.com</p>
		<p>7903882266
        <p><a href="mailto:sohanhazra47@gmail.com"><button class="button">Contact</button></a></p>
      </div>
    </div>
  </div>

<div class="column">
    <div class="card">
      <img src="sam.jpg" alt="sampriti" style="width:100%" height='400px'>
      <div class="container">
        <h2>SAMPRITI CHOWDHURY</h2>
                <p>sampritichowdhury15@gmail.com</p>
		<p>9083127471
        <p><a href="mailto:sampritichowdhury15@gmail.com"><button class="button">Contact</button></a></p>
      </div>
    </div>
  </div>
  
 <div class="column">
    <div class="card">
      <img src="zafar.jpg" alt="zafar" style="width:100%" height='400px'>
      <div class="container">
        <h2>KHANDEKAR ZAFAR HASSAN</h2>
       
        
        <p>Khandekarzafar2003@gmail.com</p>
		<p>9832200340
        <p><a href="mailto:Khandekarzafar2003@gmail.com"><button class="button">Contact</button></a></p>
      </div>
    </div>
  </div>
  
</div> 
</body>
</html>
