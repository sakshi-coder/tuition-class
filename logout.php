<?php   
session_start(); //to ensure you are using same session
session_destroy(); //destroy the session
header("location:http://192.168.100.252/ty10/project/slogin.html"); //to redirect back to "slogin.html" after logging out
exit();
?>
