<?php
	include_once '../header.php';
?>

<section>
	<div class='cunstruction'>
		<h2>Sign Up Page</h2><br/>
	</div>
</section>
<form action="post_signup.php" method="post">
	<p>Username: <input type="text" name="username" id="username" ></p><br/>
	<p>Password: <input type="test" name="userpassword" id="userpassword"></p><br/>
	<p>E-mail: <input type="text" name="useremail" id="useremail"></p><br/>
	<p>
		<input type="submit" name="Submit" value="Sign Up">
		<a href="login.php">Login</a>
	</p>
</form>

<?php
	include_once '../footer.php';
?>