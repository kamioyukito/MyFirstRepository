<?php
	include_once 'header.php';
?>

<section>
	<div class='cunstruction'>
		<h2>Login Page</h2><br/>
	</div>
	<div>
		<form action="post_login.php" method="post">
			<p>Username: <input type="text" name="username" id="username" ></p><br/>
			<p>Password: <input type="test" name="userpassword" id="userpassword"></p><br/>
			<p>
				<input type="submit" name="Submit" value="Login">
				<a href="signup.php">Sign Up</a>
			</p>
		</form>
	</div>
</section>

<?php
	include_once 'footer.php';
?>
