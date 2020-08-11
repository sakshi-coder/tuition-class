<?php
session_start();

include "connection.php";
$u=$_GET['e'];
$p=$_GET['p'];

setcookie("e",$u);
echo "<br>NAME".$_COOKIE["e"];
if((strcmp($u,"sakshi")==0) && (strcmp($p,"sakshi")==0))
{
header('location:http://192.168.100.252/ty10/project/apage.html');
}
else
{
$result = pg_query("SELECT reg_as FROM registration WHERE rname='$u' and confirm_password='$p';");
/*$q=pg_query("select rid from registration rname='$u' and confirm_password='$p';");
$z=pg_fetch_array($q);
$_SESSION['rid']=$z[0];
 */
while($r=pg_fetch_row($result))
{
$o=$r[0];
echo "reg as".$o;
}
if($o=='tutor')
{
	echo"is tutor";
	header('location:http://192.168.100.252/ty10/project/tpage.php');
	exit();
}
else if($o=='student')
{
	echo"is student";
	header('location:http://192.168.100.252/ty10/project/spage.php');
	exit();
}
 
elseif(!$o)
{
echo"not registered";
header('location:http://192.168.100.252/ty10/project/main1.html');
exit();
}
}

/*
$user = pg_num_rows($result);
$q="select rid from registration user_name='$u' and password='$p';";
$id=pg_query($q);
$q="select * from registration where user_name='$u' and password='$p';";
$id=pg_query($q);
$id1=pg_fetch_array($id);
//echo "<br>ssssssssssssssssssssssssssss".$id1[0];
$_SESSION['rid']=$id1[0];
echo "<br>sessss".$_SESSION['rid'];
$log=time();   
$cdate=date('y-m-d',$log);
if ($user!=0)
{ 
$c="insert into login(email,password,logindate,logintime)values('$u','$p','$cdate','$log');";
$x=pg_query($c);
if(!$x)
{
echo " query failed";
header('location:http://192.168.100.252/ty10/project/main1.html');
}
else
{
if($o=='Student')
{
header('location:http://192.168.100.252/ty10/project/spage.php');
}
elseif($o=='Tutor')
{
header('location:http://192.168.100.252/ty10/project/tpage.php');
}
}
}
else
{
echo "Username does not  exists";
header('location:http://192.168.100.252/ty10/project/reg1.html');
}
}*/
?>
