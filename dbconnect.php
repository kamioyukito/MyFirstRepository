<?php

//Mysql Database connection
$mysqli = new mysqli('localhost','root','awl5719');

//Check connection
if(mysqli_connect_error()){
	printf("Connection failed: %s\n",mysqli_connect_error());
	exit();
}

?>