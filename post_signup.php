<?php

include 'dbconnect.php';

$mysqli->select_db("DBawl");


$myuser = $_POST['username'];
$mypwd = $_POST['userpassword'];
$myemail = $_POST['useremail'];
/*
$myuser = mysql_real_escape_string($mysqli,$_REQUEST['username']);
$mypwd = mysql_real_escape_string($mysqli,$_REQUEST['userpassword']);
$myemail = mysql_real_escape_string($myemail,$_REQUEST['useremail']);
*/

$query = "INSERT INTO users(username,password,email)VALUES('$myuser','$mypwd','$myemail')";

if($mysqli->query($query)===TRUE){
	header("location: signup_success.php");
}
else{
	echo "Error";
}


?>