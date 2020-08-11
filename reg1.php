<?php
include"connection.php";
$n=$_POST['t1'];
$e=$_POST['t2'];
$c=$_POST['t3'];
$p=$_POST['t4'];
$cp=$_POST['t5'];
$t=$_POST['r'];


$f="insert into registration(rname,rcontactno,reg_as,confirm_password)values('$n','$c','$t','$cp');";
$z=pg_query($f);

$d="insert into rlogin(email,password)values('$e','$p');";
$x=pg_query($d);

if(!$z && !$x)
{
echo "failed";
}
else
{
echo "saved";
header('location:http://192.168.100.252/ty10/project/slogin.html');
exit();
}
?>
