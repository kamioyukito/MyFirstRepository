<?php

session_start();

if ($_SESSION['logged_in']!=1) {
	header("url=login.php");
}else{
	$username = $_SESSION['username'];
	$email = $_SESSION['email'];
}
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Welcome <?= $username ?></title>
	<link rel="stylesheet" href="indexstyle.css">
</head>
<body>
	<div>
		<h2>Logged in as</h2>
		<p>
			<?php
			echo "User name:".$username."<br>"."Email: ".$email."<br>";
			echo "User name:".$_SESSION['username']."<br>"."Email: ".$_SESSION['email'];	
			?>		
		</p>
	</div>
</body>
</html>