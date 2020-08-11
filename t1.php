
<?php

		include "connection.php";
$n=$_POST['t1'];
$cno=$_POST['t2'];
$c=$_POST['t3'];
$q=$_POST['t4'];
$b=$_POST['t5'];
$sh=$_POST['t6'];
$e=$_POST['t7'];

$op=$_POST['a'];

switch($op)
{
	
case 2: $a=mysql_query("update tutor set contact_no='$cno' where tname='$n';");
if(!$a)
{
echo"not updated"	;
}
else
{
	echo"hhdone";
}
break;

case 3: $a=mysql_query("update tutor set class='$c' where tname='$n';");
if(!$a)
{
echo"not updated"	;
}
else
{
	echo"hhdone";
}
break;

case 4: $a=mysql_query("update tutor set quali='$q' where tname='$n';");
if(!$a)
{
echo"not updated"	;
}
else
{
	echo"hhdone";
}
break;

case 5: $a=mysql_query("update tutor set board='$b' where tname='$n';");
if(!$a)
{
echo"not updated"	;
}
else
{
	echo"hhdone";
}

break;
case 6: $a=mysql_query("update tutor set shname='$sh' where tname='$n';");
if(!$a)
{
echo"not updated"	;
}
else
{
	echo"hhdone";
}


	}
?>