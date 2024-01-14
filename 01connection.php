<?php


$server ="localhost";
$username ="root";
$userpass ="";
$db ="Me";



$con = mysql_connection($server, $username, $userpass);
 
if (!$con) {
    
    die("connection is failed" .mysql_connection_error());

}
  
$db="create database".$db;
$res= mysqli_query($con,$db);



?>