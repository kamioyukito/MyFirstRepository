<?php

//Connect to DB
$mysqlconn = new mysqli('localhost','root','awl5719');


if(!$mysqlconn){
	die('Could not connect'.mysql_error());
}

echo 'Connected to SQL.<br><br>';

//Create Database
$query = "CREATE DATABASE IF NOT EXISTS DBawl";

if($mysqlconn->query($query)===TRUE){
	echo "<p>Database created: ".$query."</p>";
}	
else{
	echo "<p>Error:".mysql_error()."</p>";
}

//Select database to work with
$mysqlconn->select_db("DBawl");
echo "<p>Selected the user database<br><br>";

//Creating table in the database
$query = "CREATE TABLE IF NOT EXISTS users
		(uid int(10) NOT NULL auto_increment PRIMARY KEY,
		username varchar(50) NOT NULL,
		password varchar(50) NOT NULL,
		email varchar(100) NOT NULL)";

echo $query;

if($mysqlconn->query($query)===TRUE){
	echo "<p>DB table user created.<br></p>";
}
else{
	echo "<p>Error:".mysql_error()."</p>";
}

//check if user already exist in the table
$querySelectUserName = "SELECT * FROM users WHERE username = 'admin'";
if ($result=mysqli_query($mysqlconn,$querySelectUserName)) {
	if(mysqli_num_rows($result)>0){
		echo "User already exists";
	}
	else{
		echo "User does not exists yet! Adding user";
	//Add user Admin into users table
	$query = "INSERT INTO DBawl.users(username,password,email)
				VALUES('admin','awl5719','yiminshen1220@gmail.com')";

		if($mysqlconn->query($query)===TRUE){
			echo "<p>Admin record added.<br><br>".$query."</p>";
		}
		else{
			echo "<p>Error:".mysql_error()."</p>";
		}
	}
}
else{
	echo "Error";
}

?>