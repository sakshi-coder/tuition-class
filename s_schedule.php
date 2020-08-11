<?php

include"connection.php";
//include"s1_schedule.php";
//include"s2_schedule.php";
//include"s3_schedule.php";

$a=$_GET['a'];

echo "NAME: ".$_COOKIE["t1"];
$z=$_COOKIE["t1"];
$r=pg_query(" update studentt set shid='$a' where sname='$z';");
//$r=Mysql_query("insert into studentt(shname) values((select sname from studentt where sname='$z')'$a');");

if(!$r)
{
	echo"time table not selected";
}
	else
	{
		echo"selected";
	 header('Location:http://192.168.100.252/ty10/project/pay.php');
     exit();
}
?>

	
		
