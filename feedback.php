<html>
<head>
<style>
.feedback{
    width: 100%;
    max-width: 780px;
    background: #fff;
    margin: 0 auto;
    padding: 15px;
    box-shadow: 1px 1px 16px rgba(0, 0, 0, 0.3);
}
.survey-hr{
  margin:10px 0;
  border: .5px solid #ddd;
}
.star-rating {
   margin: 25px 0 0px;
  font-size: 0;
  white-space: nowrap;
  display: inline-block;
  width: 175px;
  height: 35px;
  overflow: hidden;
  position: relative;
  background: url('data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjREREREREIiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=');
  background-size: contain;
}
.star-rating i {
  opacity: 0;
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  width: 20%;
  z-index: 1;
  background: url('data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjRkZERjg4IiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=');
  background-size: contain;
}
.star-rating input {
  -moz-appearance: none;
  -webkit-appearance: none;
  opacity: 0;
  display: inline-block;
  width: 20%;
  height: 100%;
  margin: 0;
  padding: 0;
  z-index: 2;
  position: relative;
}
.star-rating input:hover + i,
.star-rating input:checked + i {
  opacity: 1;
}
.star-rating i ~ i {
  width: 40%;
}
.star-rating i ~ i ~ i {
  width: 60%;
}
.star-rating i ~ i ~ i ~ i {
  width: 80%;
}
.star-rating i ~ i ~ i ~ i ~ i {
  width: 100%;
}
.choice {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  text-align: center;
  padding: 20px;
  display: block;
}
span.scale-rating{
margin: 5px 0 15px;
    display: inline-block;
   
    width: 100%;
   
}
span.scale-rating>label {
  position:relative;
    -webkit-appearance: none;
  outline:0 !important;
    border: 1px solid grey;
    height:33px;
    margin: 0 5px 0 0;
  width: calc(10% - 7px);
    float: left;
  cursor:pointer;
}
span.scale-rating label {
  position:relative;
    -webkit-appearance: none;
  outline:0 !important;
    height:33px;
      
    margin: 0 5px 0 0;
  width: calc(10% - 7px);
    float: left;
  cursor:pointer;
}
span.scale-rating input[type=radio] {
  position:absolute;
    -webkit-appearance: none;
  opacity:0;
  outline:0 !important;
    /*border-right: 1px solid grey;*/
    height:33px;
 
    margin: 0 5px 0 0;
  
  width: 100%;
    float: left;
  cursor:pointer;
  z-index:3;
}
span.scale-rating label:hover{
background:#fddf8d;
}
span.scale-rating input[type=radio]:last-child{
border-right:0;
}
span.scale-rating label input[type=radio]:checked ~ label{
    -webkit-appearance: none;

    margin: 0;
  background:#fddf8d;
}
span.scale-rating label:before
{
  content:attr(value);
    top: 7px;
    width: 100%;
    position: absolute;
    left: 0;
    right: 0;
    text-align: center;
    vertical-align: middle;
  z-index:2;
}
.header {
	padding-top:80px;
	flex-direction: row;  
  justify-content: space-between;
  display:flex;
  align-content:center;
}
.list ul li{
		display:inline-block;
		padding-right:10px;
		padding-top:5px;
		color:white;
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
	transition:0.25s;
}
ul li.home a{
	background-color:white;
	color:black;
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
.cont {
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
<title>Feedback</title>
</head>
<body>
<div class='cont'>
<img src='logo1.png' height='95px' width='95px'>
<div class='list'>
<ul>
<li ><a href='home.php'><span class="landing-page-text01">Home</span></a>&nbsp;
<li><a href='about.php'><span class="landing-page-text02">About</span></a>&nbsp;
<li><a href='registration.php'><span class="landing-page-text03">SignUp</span></a>&nbsp;
<li><a href='login.php'><span class="landing-page-text03">LogIn</span></a>&nbsp;
<li class='home'><a href='feedback.php'><span class="landing-page-text04">Feedback</span></a>&nbsp;
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
<div class='header'>
<font size='8'><i><b><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;FEEDBACK</b></i></font>
</div>
<section>
    <div class="rt-container">
          <div class="col-rt-12">
              <div class="Scriptcontent">
<div class="feedback">
<p>Hey Visitors,<br>
Thank you for visiting us!! Hope you enjoyed Your tour well, comfortable and memorable.
<h4>Please rate your tour experience for the following parameters</h4>

<form method="post" action="#action-url">
<label>1. Your overall experience with us ?</label><br>
  
<span class="star-rating">
  <input type="radio" name="rating1" value="1"><i></i>
  <input type="radio" name="rating1" value="2"><i></i>
  <input type="radio" name="rating1" value="3"><i></i>
  <input type="radio" name="rating1" value="4"><i></i>
  <input type="radio" name="rating1" value="5"><i></i>
</span>
  <div class="clear"></div> 
  <hr class="survey-hr">
<label>2. Services like fooding,lodging,site-seens,etc.</label><br>
<span class="star-rating">
  <input type="radio" name="rating2" value="1"><i></i>
  <input type="radio" name="rating2" value="2"><i></i>
  <input type="radio" name="rating2" value="3"><i></i>
  <input type="radio" name="rating2" value="4"><i></i>
  <input type="radio" name="rating2" value="5"><i></i>
</span>
  <div class="clear"></div> 
  <hr class="survey-hr">
<label>3. Your opinion about the place you visited.</label><br><br/>
  <div style="color:grey">
    <span style="float:left">
     POOR
    </span>
    <span style="float:right">
      BEST
    </span>
    
  </div>
<span class="scale-rating">
  <label value="1">
  <input type="radio" name="rating" >
  <label style="width:100%;"></label>
  </label>
  <label value="2">
  <input type="radio" name="rating" >
  <label style="width:100%;"></label>
  </label>
  <label value="3">
  <input type="radio" name="rating">
  <label style="width:100%;"></label>
  </label>
  <label value="4">
  <input type="radio" name="rating">
  <label style="width:100%;"></label>
  </label>
  <label value="5">
  <input type="radio" name="rating">
  <label style="width:100%;"></label>
  </label>
  <label value="6">
  <input type="radio" name="rating">
  <label style="width:100%;"></label>
  </label>
  <label value="7">
  <input type="radio" name="rating">
  <label style="width:100%;"></label>
  </label>
  <label value="8">
  <input type="radio" name="rating">
  <label style="width:100%;"></label>
  </label>
  <label value="9">
  <input type="radio" name="rating">
  <label style="width:100%;"></label>
  </label>
  <label value="10">
  <input type="radio" name="rating" value="10">
  <label style="width:100%;"></label>
  </label>
</span>
  <div class="clear"></div> 
  <hr class="survey-hr"> 
  4. Please select the place you have visited&emsp;&emsp;&emsp;
  <select>
  <option hidden>Select place</option>
  <option>Goa</option>
  <option>Puri</option>
  <option>Digha</option>
  <option>Srinagar</option>
  <option>Guwahati</option>
  <option>Vaishnodevi</option>
  <option>Ooty</option>
  <option>Madurai</option>
  <option>Amritsar</option>
  <option>Delhi</option>
  <option>Kerala</option>
  <option>Varanasi</option>
  <option>Sundarban</option>
  <option>London</option>
  <option>Rome</option>
  <option>Las Vegas</option>
  <option>Singapore</option>
  </select>
    <hr class="survey-hr">
<label for="m_3189847521540640526commentText">5. Any Other suggestions:</label><br/><br/>
<textarea cols="75" name="commentText" rows="5" style="100%"></textarea><br>
<br>
  <div class="clear"></div> 
<input style="background:#43a7d5;color:#fff;padding:12px;border:0" type="submit" value="Submit your review">&nbsp;
</form>
                  </div> 
    		</div>
		</div>
    </div>
</section>
	</body>
</html>