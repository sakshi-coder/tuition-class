<?php
include"connection.php";
$tn=$_POST['t1'];
$sn=$_POST['t2'];
$c=$_POST['t3'];
$b=$_POST['t4'];
$bh=$_POST['t5'];
$s=$_POST['t6'];
$ec=$_POST['t7'];
$Em=$_POST['t8'];

$z=pg_query("insert into test test_name,student_name,class,board,batch,subject,chapter,marks value('$tn','$sn','$c','$b','$bh','$s','$ec','$Em') ;");
if(!$z)
{
	echo"inserted";
}
else
{
	echo"done";
}