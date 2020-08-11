 <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body {font-family: "Lato", sans-serif;

text-align: justify; /* For Edge */
  -moz-text-align-last: center; /* For Firefox prior 58.0 */
  }

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
  border: 3px solid #f1f1f1;
  position: absolute;
  top:110%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 90%;
  padding: 10px;
  text-align: left;
  

}


/*   inner box of login    */

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn {
     width: 50%;
  }
}

button {
font-size:25px;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 70%;
  
}

button:hover {
  opacity: 0.8;
}

.container {
  padding: 16px;
font-size:12px;
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

table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child {
  background-color: coral;
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

</style>
</head>
<body>
<form method="get"action="http://192.168.100.252/ty10/project/apage.html">
<div class="navbar">
  <li style="float:left"><a>@Excel Classes</a></li>
 <a href="http://192.168.100.252/ty10/project/contactus.html">Contact us</a>
  <a href="http://192.168.100.252/ty10/project/faculty.html">Feedback</a>
  <a href="http://192.168.100.252/ty10/project/aboutus.html">About us</a>
  <a href="http://192.168.100.252/ty10/project/facilities.html">Facilities</a>
  <a href="http://192.168.100.252/ty10/project/feedback.html">Faculty</a>
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
  <h1>Excel Classes</h1>
 <img class="id1" src="http://192.168.100.252/ty10/project/logo.png"width="200" height="150">
<hr color="teal">
</div>
<div class="bg-image" ><img src="http://192.168.100.252/ty10/project/103.jfif" width="1400" height="700">
  </div>

<div class="bg-text">
<h2>Student info</h2>
<hr>  <div class="container">

<?php
include"connection.php";
$a=pg_query("select * from pay;");
if(!$a)
{
	echo"error";
}
else
{
	echo"done";
		echo"<table border=1>";
	echo"<tr><td>srno</td><td>payment name </td><td>card no</td><td>valid month</td><td>valid year</td><td>cvv</td><td>amt</td></tr>";
while($r=pg_fetch_row($a))
{
	    echo "<tr><td>".$r[0]."</td><td>".$r[1]."</td><td>".$r[2]."</td><td>".$r[3]."</td><td>".$r[4]."</td><td>".$r[5]."</td><td>".$r[6]."</td></tr>";
}
echo"</table>";
}

?>


<br>

   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <button type="submit" style="font-size:25px;width:30%;">Go back</a></button>
   </div>
</div>
<footer class="foot">
<div class="query">
	contact us: 9876543210<br>
	email:xzb@gmail.com<br>
	
<p style="font-size:25px;">	Excel Classes gives you the education you want and the attention you need.</p>
<br> 
</div><br><br>
	<div style="float:right;">power by @xxyyzz</div>
	</footer>	
	</form>
</body>
</html>
