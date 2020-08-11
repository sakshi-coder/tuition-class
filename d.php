<?php
include"connection.php";
$n=$_GET['t1'];
$op=$_GET['a'];
switch($op)
{
case 1:$a=pg_query("delete from feedback where fname='$n';" );
if(!$a)
{
	echo"not done";
}
else
{
	echo"deleted";
}
break;
}
?>
