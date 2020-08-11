<?php
include"connection.php";
$t=$_GET['t1'];
$tn=$_GET['t2'];
$fb=$_GET['t3'];
$fc=$_GET['t4'];
$b=$_GET['t5'];
$c=$_GET['t6'];

 $r="insert into noti(nname,by_teacher,for_batch,for_class,board,content) values('$t','$tn','$fb','$fc','$b','$c');";

$z=pg_query("$r");
if(!$z)
{
	echo"not inserted";
}
else
{
	echo"inserted";
	
	header("location:http://192.168.100.252/ty10/project/tpage.php");
	exit();
	}	
?>
