 <?php
 include"connection.php";
 $u=$_GET['u'];
 $e=$_GET['e'];
 $c=$_GET['c'];
 
 
 $a=mysql_query("insert into feedback(fname,email,comment)values('$u','$e','$c');");
 if(!$a)
 {
	 echo"not inserted";
 }
 else
 {
	 echo"done";
	 header("location:http://192.168.100.252/ty10/project/feedback.php");
	 exit();
 }
	 ?>
