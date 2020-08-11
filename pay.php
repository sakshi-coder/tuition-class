<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
@media (max-width: 800px) {
      flex-direction: column-reverse;
  }
  
  
body {
  
font-family: "Lato", sans-serif}


li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}

.navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial, Helvetica, sans-serif;
}



.navbar a {
  float:right;
  font-size: 20px;
  color: white;
  text-align: center;
  padding: 24px 16px;
  text-decoration: none;
}

.dropdown {
  float: right;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 20px;  
  border: none;
  outline: none;
  color: white;
  padding: 24px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: center;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}

/*blur bg */
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}
body{
.bg-image {
background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5));
  /* The image used */
  
  /* Add the blur effect */
  filter: blur(8px);
  -webkit-filter: blur(8px);
  
  /* Full height */
  height: 100%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}}

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 135%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 50%;
  padding: 20px;
  text-align: left;
 font-size:20px;
}


/*   inner box of login    */

input[type=text], input[type=password] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  font-size:18px;
}

.container {
  padding: 16px;
}
span.reg {
  float: right;
  padding-top: 16px;
}

.header {
z-index: 2;  padding: 20px;
  text-align: center;
  font-size: 35px;
}


.id1{
  position: absolute;
  left:20px;
  top: 95px;
  align:center;
  z-index: 2;

}

.foot{
font-family:"Comic Sans MS", cursive, sans-serif;
padding: 40px;
background-color:black;
font-size:20px;
color:white;
text-align:center;
}
.query{
font-size:25px;}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}


/* Set a style for all buttons */
button {
	font-size:20px;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .loginbtn {
  float: left;
  width: 50%;
}

</style>
</head>
<body>
<form method="get" action="http://192.168.100.252/ty10/project/pay1.php">
<div class="navbar">
  <li style="float:left"><a>@Siona Classes</a></li>
 <a href="">Contact us</a>
  <a href="http://192.168.100.252/ty10/project/faculty">Feedback</a>
  <a href="http://192.168.100.252/ty10/project/aboutus">About us</a>
  <a href="http://192.168.100.252/ty10/project/facilities">Facilities</a>
  <a href="http://192.168.100.252/ty10/project/feedback">Faculty</a>
  <div class="dropdown">
    <button class="dropbtn">Classes
    </button>
    <div class="dropdown-content">
      <a href="http://192.168.100.252/ty10/project/class.html">8th grade</a>
      <a href="http://192.168.100.252/ty10/project/class.html">9th grade</a>
      <a href="http://192.168.100.252/ty10/project/class.html">10th grade</a>
    </div>
  </div>   
  
  <a href="http://192.168.100.252/ty10/project/main1.html">Home</a>
</div>

<div class="header">
  <h1>Siona Classes</h1>
 <img class="id1" src="http://192.168.100.252/ty10/project/logo.png"width="200" height="150">
<hr color="teal">
</div>
<div class="bg-image" ><img src="http://192.168.100.252/ty10/project/login1.jpg" width="1400" height="1000">
  </div>

<div class="bg-text">

<?php
echo "NAME: ".$_COOKIE["t1"];
?>

<h1 style="text-align:center">Payment </h1>
<hr>  <div class="container">

<label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <!--add icons-->
			 &nbsp;&nbsp;<img src="http://192.168.100.252/ty10/project/mc.jpg">&nbsp;&nbsp;
			 <img src="http://192.168.100.252/ty10/project/mt.jpg">&nbsp;&nbsp;
			 <img src="http://192.168.100.252/ty10/project/v.jpg">
            </div>
    <label><b>Name on Card:</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" placeholder="Enter Name " name="n" required>
<br>
    <label><b>Credit card number:</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="tel" name="no" placeholder="1111-2222-3333-4444" pattern="[0-9]{4}[0-9]{4}[0-9]{4}[0-9]{4}]"required>
    <br>
	<label><b>Exp Month</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;
	<input type="text" placeholder="september" name="em" required>
    <br>
	<label><b>Exp Year</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="tel" placeholder="2019"pattern="[0-9]{4}" name="ey" required>
     <br>
	 
	<label><b>CVV</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 <input type="tel" placeholder="###" pattern="[0-9]{3}"name="cvv" required>
        <br><br>
		
		
		<?php
		
//session_start();
echo" TOTAL".$_SESSION['tot']."<br>";
$x=$_SESSION['tot'];
echo"THE TOTAL AMOUNT IS:".$x;

?>
		
		
		
	<div class="clearfix">
      <button type="button" class="cancelbtn"><a href="http://192.168.100.252/ty10/project/subject.php">Cancel</a></button>
      <button type="submit" class="loginbtn">submit</a></button>
    </div>
</div>
</div></div>
 <footer class="foot">
<div class="query">
	Contact Us:9876543210<br>
	Email:xzb@gmail.com<br>
	
<p style="font-size:25px;">	Siona Classes gives you the education you want and the attention you need.</p>
<br></div><br><br>
	<div style="float:right;">power by @xxyyzz</div>
	</footer>	
</footer> 
</form>
</body>
</html>
