<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Login Form</title>
	<link rel="stylesheet" href="css/style.css" />
</head>

<body>

<?php

require('db.php');
$conn = connect();
require('createTables.php');
session_start();

	if(isset($_POST['username'])){

		header("Location: index.php");

		$username = stripslashes($_REQUEST['username']);
		$username = mysqli_real_escape_string($con,$username);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		$query = "SELECT * FROM `users` WHERE username='$username' AND password='$password'";
		$result = mysqli_query($conn,$query) or die(mysqli_error());
		$rows = mysqli_num_rows($result);

		if($rows==1){

			$_SESSION['username'] = $username;

			header("Location: index.php"); // Redirect user to index.php

		}
		else{

			echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
		}

		disconnect();

	}
	else{

?>

<div class="container">
	<div class="form">
		<h2>Log In</h2>

		<form action="login.php" method="POST" name="login">
			<input type="text" name="username" placeholder="Username" required />
			<input type="password" name="password" placeholder="Password" required />
			<input name="submit" type="submit" value="Login"/>
		</form>

		<p>Not registered yet? <a href='registration.php'>Register Here</a></p>
	</div>

<?php } ?>

</body>

</html>
