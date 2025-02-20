<html>
<head>
<title>Tourvista</title>
<style>
.solid-button-container {
  display: flex;
  position: relative;
}
.solid-button-button {
  color: white;
  border: none;
  padding-top: 5px;
  padding-left: 10px;
  border-radius: 50px;
  padding-right: 10px;
  padding-bottom: 5px;
  background-color: black;
}

.outline-button-container {
  display: flex;
}
.outline-button-button {
  color: black;
  padding-top: 5px;
  border-color: white;
  border-width: 1px;
  padding-left: 10px;
  border-radius: 50px;
  padding-right: 10px;
  padding-bottom: 5px;
  background-color: yellow;
}

.place-card-container {
  width: 300px;
  display: flex;
  align-items: center;
  flex-direction: column;
}
.place-card-image {
  width: 100%;
  height: 250px;
  object-fit: cover;
  border-radius: 10px;
  border-top-left-radius: 15px;
  border-top-right-radius: 15px;
}
.place-card-container1 {
  width: 100%;
  display: flex;
  padding-top:10px;
  padding-bottom:25px;
  align-items: center;
  flex-direction: column;
}
.place-card-text {
  font-size: 20px;
  font-style: normal;
  font-weight: 700;
  padding-bottom: var(--dl-space-space-halfunit);
}
.place-card-text1 {
  font-size: 12px;
  max-width: 250px;
  margin-bottom: var(--dl-space-space-doubleunit);
}
@media(max-width: 767px) {
  .place-card-container {
    width: 200px;
  }
}
@media(max-width: 479px) {
  .place-card-container {
    width: 300px;
  }
}

.landing-page-container {
	
  width: 100%;
  height: auto;
  display: flex;
  min-height: 100vh;
  align-items: center;
  flex-direction: column;
}
.landing-page-top-container {
	margin-top:90px;
  width: 96%;
  height: 700px;
  display: flex;
  align-items: center;
  flex-direction: column;
  background-size: cover;
  background-image: url(jatayu.jpg);
  background-position: 0% 40%;
  padding-bottom:30px;
}
.landing-page-navbar {
  margin-top:20px;
  width: 100%;
  display: flex;
  padding: 1px;
  max-height:200px;
  max-width: 1300px;
  align-items: center;
  flex-direction: row;    
}
.landing-page-right-side {
  display: flex;
  align-items: center;
  flex-direction: row;
  justify-content: space-between;
}
.landing-page-links-container {
  display: flex;
  align-items: center;
  flex-direction: row;
  justify-content: space-between;
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
.landing-page-link {
  display: contents;
}
.landing-page-burger-menu {
  display: none;
  align-items: center;
  flex-direction: row;
  justify-content: space-between;
}
.landing-page-burger-menu {
  width: 24px;
  height: 24px;
}
.landing-page-mobile-menu {
  top: 0px;
  flex: 0 0 auto;
  left: 0px;
  width: 100%;
  height: 100%;
  display: none;
  padding: var(--dl-space-space-doubleunit);
  z-index: 100;
  position: absolute;
  flex-direction: column;
  justify-content: space-between;
  background-color: #fff;
}
.landing-page-nav {
  flex: 0 0 auto;
  display: flex;
  align-items: flex-start;
  flex-direction: column;
}
.landing-page-top {
  flex: 0 0 auto;
  width: 100%;
  display: flex;
  align-items: center;
  margin-bottom: var(--dl-space-space-doubleunit);
  flex-direction: row;
  justify-content: space-between;
}
.landing-page-close-menu {
  flex: 0 0 auto;
  display: flex;
  align-items: flex-start;
  flex-direction: column;
}
.landing-page-icon03 {
  width: 24px;
  height: 24px;
}
.landing-page-right-side1 {
  width: 100%;
  display: flex;
  align-items: flex-start;
  flex-direction: column;
  justify-content: space-between;
}
.landing-page-links-container1 {
  display: flex;
  align-items: flex-start;
  margin-bottom: 16px;
  flex-direction: column;
  justify-content: space-between;
}
.landing-page-text05 {
  margin-bottom: 8px;
}
.landing-page-text06 {
  margin-bottom: 8px;
}
.landing-page-text07 {
  margin-bottom: 8px;
}
.landing-page-link01 {
  display: contents;
}
.landing-page-follow-container {
  display: flex;
  align-items: flex-start;
  flex-direction: column;
  justify-content: space-between;
}
.landing-page-text09 {
  padding-bottom: var(--dl-space-space-halfunit);
}
.landing-page-icons-container {
  width: 100px;
  display: flex;
  align-items: flex-start;
  flex-direction: row;
  justify-content: space-between;
}
.landing-page-link02 {
  display: contents;
}
.landing-page-icon05 {
  width: 24px;
  height: 24px;
}
.landing-page-link03 {
  display: contents;
}
.landing-page-icon07 {
  width: 24px;
  height: 24px;
}
.landing-page-link04 {
  display: contents;
}
.landing-page-icon09 {
  width: 24px;
  height: 24px;
}
.landing-page-hero {
  flex: 1;
  width: 100%;
  display: flex;
  max-width: 1000px;
  align-items: center;
  padding-top: var(--dl-space-space-tripleunit);
  padding-left: var(--dl-space-space-doubleunit);
  padding-right: var(--dl-space-space-doubleunit);
  flex-direction: row;
  padding-bottom: var(--dl-space-space-tripleunit);
  justify-content: space-between;
}
.landing-page-content-container {
  display: flex;
  align-items: flex-start;
  flex-direction: column;
}
.landing-page-text11 {
  padding-top: 10px;
  padding-bottom: 10px;
}
.landing-page-main {
  width: 100%;
  display: flex;
  align-items: center;
  padding-top: var(--dl-space-space-quadruple);
  padding-left: var(--dl-space-space-doubleunit);
  padding-right: var(--dl-space-space-doubleunit);
  flex-direction: column;
  padding-bottom: var(--dl-space-space-quadruple);
  justify-content: flex-start;
}
.landing-page-text16 {
  color: #376466;
  font-size:22;
}
.landing-page-cards-container {
  width: 100%;
  display: flex;
  grid-gap: var(--dl-space-space-doubleunit);
  flex-wrap: wrap;
  max-width: 1000px;
  margin-top: 30px;
  align-items: flex-start;
  margin-bottom: var(--dl-space-space-doubleunit);
  flex-direction: row;
  justify-content: space-between;
  padding-bottom:35px;  
}
.landing-page-footer {
  color:black;
  width: 100%;
  display: flex;
  padding-top:20px;
  padding-bottom:20px;
  align-items: center;
  flex-direction: row;
  justify-content: center;
  background-color: grey;
  
}
.landing-page-menu {
  width: 100%;
  display: flex;
  max-width: 1000px;
  align-items: center;
  flex-direction: row;
  justify-content: space-between;
}
.landing-page-links-container2 {
  display: flex;
  align-items: center;
  flex-direction: row;
  justify-content: space-between;
}
.landing-page-container1 {
  display: flex;
  align-items: flex-start;
  margin-left: 100px;
  flex-direction: column;
}
.landing-page-link05 {
  margin-bottom: 5px;
  color: white;
  text-decoration: none;
}
.landing-page-link06 {
  margin-bottom: 5px;
  color: white;
  text-decoration: none;
}
.landing-page-link07 {
  margin-bottom: 5px;
  color: white;
  text-decoration: none;
}
.landing-page-link08 {
  margin-bottom: 5px;
  color: white;
  text-decoration: none;
}
.landing-page-container2 {
  display: flex;
  align-items: flex-start;
  margin-left: 100px;
  flex-direction: column;
}
.landing-page-link09 {
  margin-bottom: 5px;
  color: white;
  text-decoration: none;
}
.landing-page-link10 {
  margin-bottom: 5px;
  color: white;
  text-decoration: none;
}
.landing-page-link11 {
  margin-bottom: 5px;
  color: white;
  text-decoration: none;
}
.landing-page-link12 {
  margin-bottom: 5px;
  color: white;
  text-decoration: none;
}
.landing-page-follow-container1 {
  display: flex;
  align-items: center;
  margin-left: 50px;
  flex-direction: column;
  justify-content: space-between;
}
.landing-page-text17 {
  padding-bottom: var(--dl-space-space-halfunit);
}
.landing-page-icons-container1 {
  width: 100px;
  display: flex;
  align-items: flex-start;
  flex-direction: row;
  justify-content: space-between;
}
.landing-page-link13 {
  display: contents;
}
.landing-page-icon11 {
  fill: white;
  width: 24px;
  height: 24px;
}
.landing-page-link14 {
  display: contents;
}
.landing-page-icon13 {
  fill: white;
  width: 24px;
  height: 24px;
}
.landing-page-link15 {
  display: contents;
}
.landing-page-icon15 {
  fill: white;
  width: 24px;
  height: 24px;
}
@media(max-width: 991px) {
  .landing-page-hero {
    padding-left: var(--dl-space-space-tripleunit);
    padding-right: var(--dl-space-space-tripleunit);
  }
  .landing-page-cards-container {
    justify-content: center;
  }
}
@media(max-width: 767px) {
  .landing-page-right-side {
    display: none;
  }
  .landing-page-burger-menu {
    display: flex;
  }
  .landing-page-hero {
    justify-content: center;
  }
  .landing-page-content-container {
    align-items: center;
  }
  .landing-page-text10 {
    font-size: 2.5rem;
  }
  .landing-page-text11 {
    text-align: center;
  }
  .landing-page-main {
    padding-left: var(--dl-space-space-unit);
    padding-right: var(--dl-space-space-unit);
  }
  .landing-page-menu {
    flex-direction: column;
  }
  .landing-page-links-container2 {
    margin-top: var(--dl-space-space-tripleunit);
    margin-bottom: var(--dl-space-space-tripleunit);
    justify-content: space-between;
  }
  .landing-page-container1 {
    margin-left: 0px;
  }
}
@media(max-width: 479px) {
  .landing-page-text10 {
    font-size: 2rem;
    text-align: center;
  }
  .landing-page-subheading {
    font-size: 1.3rem;
    text-align: center;
  }
  .landing-page-links-container2 {
    margin-top: var(--dl-space-space-doubleunit);
    align-items: flex-start;
    justify-content: flex-start;
  }
  .landing-page-link05 {
    margin-bottom: var(--dl-space-space-halfunit);
  }
  .landing-page-link06 {
    margin-bottom: var(--dl-space-space-halfunit);
  }
  .landing-page-link07 {
    margin-bottom: var(--dl-space-space-halfunit);
  }
  .landing-page-link08 {
    margin-bottom: var(--dl-space-space-halfunit);
  }
  .landing-page-container2 {
    height: 100%;
    align-items: flex-start;
    margin-left: 50px;
  }
  .landing-page-link09 {
    margin-bottom: var(--dl-space-space-halfunit);
  }
  .landing-page-link10 {
    margin-bottom: var(--dl-space-space-halfunit);
  }
  .landing-page-link11 {
    margin-bottom: var(--dl-space-space-halfunit);
  }
  .landing-page-link12 {
    margin-bottom: var(--dl-space-space-halfunit);
  }
  .landing-page-follow-container1 {
    margin-left: 0px;
  }
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
	color:blue;
	transition:0.75s;
}
ul li.home a{
	background-color:white;
	color:black;
}
button {
	cursor: pointer;
	border-radius: 100px;
  	padding-left: 10px;
  	padding-right: 10px;
  	padding-top: 5px;
  	padding-bottom: 5px;
  	background-color: gray;
  	-webkit-animation-timing-function: ease-in-out;
  	-webkit-transition-duration: .4s;
  	-webkit-transition-property: all;
}
.cont {
	background-color:black;
	width: 100%;
  display: flex;
  align-items: center;
  flex-direction: row;
  justify-content: center;
  position:fixed;
}

 
  /* Animations: */
  -webkit-transition-timing-function: ease-in-out;
  -webkit-transition-duration: .4s;
  -webkit-transition-property: all;
  
  -moz-transition-timing-function: ease-in-out;
  -moz-transition-duration: .4s;
  -moz-transition-property: all;



</style>
<script type="text/javascript" src="home.js"></script>
<div class="landing-page-container">
<div class='cont'>
<img src='logo1.png' height='95px' width='95px'>
<div class='list'>
<ul>
<li class='home'><a href='home.html'><span class="landing-page-text01">Home</span></a>&nbsp;
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
<li><form method='get'><button type="submit" name='but1' class='logout'>Logout</button></form>
</ul>
</div>
</div>
	
<div class="landing-page-top-container">

<nav data-role="Header" class="landing-page-navbar">
<!--<img src='try.png' height='200px' width='200px'>-->
<h1><i><font size=7>&nbsp;TOURVISTA</font></i></h1>
<div class="landing-page-right-side">
<div class="landing-page-links-container">

</div>

</div>
</nav>
<div class="landing-page-hero">
<div class="landing-page-content-container">
<h1>Get your personal travel home.</h1>
<span class="landing-page-text11"><b><font size=4 color='white'>Each property is hand-picked,
personally visited and cannot be found elsewhere.</font></b></span>
<br><br>
<a href="#national" class="landing-page-link"><button class='solid-button-button'>Explore Domestic Places</button></a><br><br>
<a href="#international" class="landing-page-link"><button class='solid-button-button'>Explore International Places</button></a>
</div>
</div>
</div>

<div id="national" class="landing-page-main">
<h1><u>DOMESTIC TOURS</u></h1>
<span class="landing-page-text16"><b>Recommended</b></span>
<div class="landing-page-cards-container">
<div class="place-card-container">
<img alt="image" src="goa.jpg" class="place-card-image"/>
<div class="place-card-container1">
<span class="place-card-text"><span>Goa</span></span>
<span class="place-card-text1">
The paradise of South Asia!
</span>
<div class="outline-button-container">
<button class="outline-button-button button" onclick='open_goa()'>Discover place</button>
</div>
</div>
</div>
<div class="place-card-container">
<img alt="image" src="puri.jpg" class="place-card-image"/>
<div class="place-card-container1">
<span class="place-card-text"><span>Puri</span></span>
<span class="place-card-text1">
Green Puri, Clean Puri
</span>
<div class="outline-button-container">
<button class="outline-button-button button" onclick='open_puri()'>Discover place</button>
</div>
</div>
</div>
<div class="place-card-container">
<img alt="image" src="digha.jpg" class="place-card-image"/>
<div class="place-card-container1">
<span class="place-card-text"><span>Digha</span></span>
<span class="place-card-text1">
West Bengal
</span>
<div class="outline-button-container">
<button class="outline-button-button button" onclick='open_digha()'>Discover place</button>
</div>
</div>
</div>
<div class="place-card-container">
<img alt="image" src="sringar.jpg" class="place-card-image"/>
<div class="place-card-container1">
<span class="place-card-text"><span>Srinagar</span></span>
<span class="place-card-text1">
The city of lakes and the Venice of the East
</span>
<div class="outline-button-container">
<button class="outline-button-button button" onclick='open_srinagar()'>Discover place</button>
</div>
</div>
</div>
<div class="place-card-container">
<img alt="image" src="guwahati.jpg" class="place-card-image"/>
<div class="place-card-container1">
<span class="place-card-text"><span>Guwahati</span></span>
<span class="place-card-text1">
Assam, Naturally Wild
</span>
<div class="outline-button-container">
<button class="outline-button-button button" onclick='open_guwahati()'>Discover place</button>
</div>
</div>
</div>
<div class="place-card-container">
<img alt="image" src="Vaishnodev.jpg" class="place-card-image"/>
<div class="place-card-container1">
<span class="place-card-text"><span>Vaishnodevi</span></span>
<span class="place-card-text1">
Prem se bolo Jai Mata Di
</span>
<div class="outline-button-container">
<button class="outline-button-button button" onclick='open_Vaishnodevi()'>Discover place</button>
</div>
</div>
</div>
<div class="place-card-container">
<img alt="image" src="ooty.jpg" class="place-card-image"/>
<div class="place-card-container1">
<span class="place-card-text"><span>Ooty</span></span>
<span class="place-card-text1">
Ooty-queen of hill stations
</span>
<div class="outline-button-container">
<button class="outline-button-button button" onclick='open_ooty()'>Discover place</button>
</div>
</div>
</div>
<div class="place-card-container">
<img alt="image" src="madurai.jpg" class="place-card-image"/>
<div class="place-card-container1">
<span class="place-card-text"><span>Madurai</span></span>
<span class="place-card-text1">
National park in the Nilgiri Mountains
</span>
<div class="outline-button-container">
<button class="outline-button-button button" onclick='open_madurai()'>Discover place</button>
</div>
</div>
</div>
<div class="place-card-container">
<img alt="image" src="amritsar.jpg" class="place-card-image"/>
<div class="place-card-container1">
<span class="place-card-text"><span>Amritsar</span></span>
<span class="place-card-text1">
Ambarsar and historically known as Ramdaspur
</span>
<div class="outline-button-container">
<button class="outline-button-button button" onclick='open_amritsar()'>Discover place</button>
</div>
</div>
</div>
<div class="place-card-container">
<img alt="image" src="delhi.jpg" class="place-card-image"/>
<div class="place-card-container1">
<span class="place-card-text"><span>Delhi</span></span>
<span class="place-card-text1">
Capital Of <b>India!</b>
</span>
<div class="outline-button-container">
<button class="outline-button-button button" onclick='open_delhi()'>Discover place</button>
</div>
</div>
</div>
<div class="place-card-container">
<img alt="image" src="kerala.jpg" class="place-card-image"/>
<div class="place-card-container1">
<span class="place-card-text"><span>Kerala</span></span>
<span class="place-card-text1">God's Own Country</span>
<div class="outline-button-container">
<button class="outline-button-button button" onclick='open_kerala()'>Discover place</button>
</div>
</div>
</div>
<div class="place-card-container">
<img alt="image" src="varanasi.jpg" class="place-card-image"/>
<div class="place-card-container1">
<span class="place-card-text"><span>Varanasi</span></span>
<span class="place-card-text1">
<b>Benaras</b>
</span>
<div class="outline-button-container">
<button class="outline-button-button button" onclick='open_varanasi()'>Discover place</button>
</div>
</div>
</div>
<div class="place-card-container">
<img alt="image" src="an.jpg" class="place-card-image"/>
<div class="place-card-container1">
<span class="place-card-text"><span>Andaman And Nicobar</span></span>
<span class="place-card-text1">
<b>Island</b>
</span>
<div class="outline-button-container">
<button class="outline-button-button button" onclick='open_an()'>Discover place</button>
</div>
</div>
</div>
<div class="place-card-container">
<img alt="image" src="jaipur.jpg" class="place-card-image"/>
<div class="place-card-container1">
<span class="place-card-text"><span>Jaipur</span></span>
<span class="place-card-text1">
<b>Pink City</b>
</span>
<div class="outline-button-container">
<button class="outline-button-button button" onclick='open_jaipur()'>Discover place</button>
</div>
</div>
</div>
<div class="place-card-container">
<img alt="image" src="sundar.jpg" class="place-card-image"/>
<div class="place-card-container1">
<span class="place-card-text"><span>Sundarban</span></span>
<span class="place-card-text1">The Mangrove Forest</span>
<div class="outline-button-container">
<button class="outline-button-button button" onclick='open_sundar()'>Discover place</button>
</div>
</div>
</div>
</div>
</div>
<div id="international" class="landing-page-main">
<h1><u>INTERNATIONAL TOURS</u></h1>
<span class="landing-page-text16"><b>Recommended</b></span>
<div class="landing-page-cards-container">
<div class="place-card-container">
<img alt="image" src="https://images.unsplash.com/photo-1529655683826-aba9b3e77383?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&h=1000" class="place-card-image"/>
<div class="place-card-container1">
<span class="place-card-text"><span>London</span></span>
<span class="place-card-text1">
The Big Smoke
</span>
<div class="outline-button-container">
<button class="outline-button-button button" onclick='open_london()'>Discover place</button>
</div>
</div>
</div>
<div class="place-card-container">
<img alt="image" src="rome.jpg" class="place-card-image"/>
<div class="place-card-container1">
<span class="place-card-text"><span>Rome</span></span>
<span class="place-card-text1">
The city of echoes, the city of illusions, and the city of yearning
</span>
<div class="outline-button-container">
<button class="outline-button-button button" onclick='open_rome()'>Discover place</button>
</div>
</div>
</div>
<div class="place-card-container">
<img alt="image" src="las.jpg" class="place-card-image"/>
<div class="place-card-container1">
<span class="place-card-text"><span>Las Vegas</span></span>
<span class="place-card-text1">
What happens in Vegas stays in Vegas
</span>
<div class="outline-button-container">
<button class="outline-button-button button" onclick='open_las()'>Discover place</button>
</div>
</div>
</div>
<div class="place-card-container">
<img alt="image" src="sing.jpg" class="place-card-image"/>
<div class="place-card-container1">
<span class="place-card-text"><span>Singapore</span></span>
<span class="place-card-text1">
Passion Made Possible is the destination
</span>
<div class="outline-button-container">
<button class="outline-button-button button" onclick='open_sing()'>Discover place</button>
</div>
</div>
</div>
<!--<div class="place-card-container">
<img alt="image" src="https://images.unsplash.com/photo-1585211969224-3e992986159d?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&h=1000" class="place-card-image"/>
<div class="place-card-container1">
<span class="place-card-text"><span>Amsterdam</span></span>
<span class="place-card-text1">
its Amsterdam
</span>
<div class="outline-button-container">
<button class="outline-button-button button">Discover place</button>
</div>
</div>
</div>
<div class="place-card-container">
<img alt="image" src="https://images.unsplash.com/photo-1564221710304-0b37c8b9d729?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&h=1000" class="place-card-image"/>
<div class="place-card-container1">
<span class="place-card-text"><span>Barcelona</span></span>
<span class="place-card-text1">
its barcelona
</span>
<div class="outline-button-container">
<button class="outline-button-button button">
<span>Discover place</span>-->
</button>
</div>
</div>
</div>
</div>-->

<div class="landing-page-footer">
<div class="landing-page-menu">
<h1>Travel as your wish</h1>
<div class="landing-page-links-container2">
<div class="landing-page-container1">
<a href="https://example.com" target="_blank" rel="noreferrer noopener" class="landing-page-link05">
Tour packages
</a>
<a href="https://example.com" target="_blank" rel="noreferrer noopener" class="landing-page-link06">
Personalized offers
</a>
<a href="https://example.com" target="_blank" rel="noreferrer noopener" class="landing-page-link07">Special deals</a>
<a href="https://example.com" target="_blank" rel="noreferrer noopener" class="landing-page-link08">Summer holiday</a>
</div>
<div class="landing-page-container2">
<a href="about.php" target="_blank" rel="noreferrer noopener" class="landing-page-link09">About us</a>
<a href="https://example.com" target="_blank" rel="noreferrer noopener" class="landing-page-link10">FAQ</a>
<a href="https://example.com" target="_blank" rel="noreferrer noopener" class="landing-page-link11">Terms and conditions</a>
<a href="https://example.com" target="_blank" rel="noreferrer noopener" class="landing-page-link12">Contact</a>
</div>
</div>
<div class="landing-page-follow-container1">
<span class="landing-page-text17">Follow us on</span>
<div class="landing-page-icons-container1">
<a href="https://www.instagram.com" target="_blank" rel="noreferrer noopener" class="landing-page-link13" >
<svg viewBox="0 0 877.7142857142857 1024" class="landing-page-icon11">
<img src="insta.png" alt="insta" height='30px'>

</svg>
</a>
<a href="https://www.facebook.com" target="_blank" rel="noreferrer noopener" class="landing-page-link14">
<svg viewBox="0 0 602.2582857142856 1024" class="landing-page-icon13">
<img src="fb.png" alt="fb" height='30px'>

</svg>
</a>
<a href="https://twitter.com" target="_blank" rel="noreferrer noopener" class="landing-page-link15">
<svg viewBox="0 0 950.8571428571428 1024" class="landing-page-icon15">
<img src="download.png" alt="twiter" height='30px'>
</svg>
</a>
</div>
</div>
</div>
</div>
</div>

</body>
</html>