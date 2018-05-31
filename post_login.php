<?php

session_start();

include 'dbconnect.php';

$mysqli->select_db("DBawl");

$myuser = $_POST['username'];
$mypwd = $_POST['userpassword'];

$query = "SELECT * FROM users WHERE username='$myuser' and password='$mypwd'";
$result = $mysqli->query($query);
$count = mysqli_num_rows($result);

if ($count == 1) {
	$user = $result->fetch_assoc();
	echo("Found the user");
	$_SESSION['username']=$user['username'];
	$_SESSION['email']=$user['email'];
	$_SESSION['logged_in']=true;
	header("Refresh:2; url=profile.php");

}elseif ($count > 1) {
	echo("User name or Password incorrect, please try again.");
}else{
	echo("User does not exist");
}

?>