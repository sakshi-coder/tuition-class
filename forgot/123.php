<?php

switch($ch)
{
case a:$q=Mysql_query('insert into student(shid)values(1);');
if(!$q)
{
		echo"insert failed";
		}
		else{
		
		echo"done";
		header(location:http://localhost/pay.html);
		exit();
		}
break;
case b:$w=Mysql_query('insert into student(shid)values(2);');
if(!$w)
{
		echo"insert failed";
		}
		else{
		
		echo"done";
		header(location:http://localhost/pay.html);
		exit();
		}
break;
case c:$e=Mysql_query('insert into student(shid)values(3);');
if(!$e)
{
		echo"insert failed";
		}
		else{
		
		echo"done";
		header(location:http://localhost/pay.html);
		exit();
		}
break;
}
?>