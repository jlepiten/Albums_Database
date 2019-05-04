<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>input artist data</title>
	<link rel="stylesheet" href="css/style.css" />
</head>

<body>

<?php

require('db.php');
$conn = connect();

if(isset($_POST['id'])){

	// arguments
	$id = $_POST['id'];
	$name = $_POST['name'];
	$ethnicity = $_POST['ethnicity'];
	$age = $_POST['age'];

	$query = "INSERT INTO artists VALUES($id, $name, $ethnicity, $age)";
	$result = mysqli_query($conn, $query);

	// checks if query is successful
	if($result){

		echo "<h3>Query successful. Your entered data: </h3>";

		// display all data in artists table
		$query = "SELECT * FROM artists";
		$dresult = mysqli_query($conn, $query);
		echo "<table>";
		while ($row = mysql_fetch_array($result)) {
			echo "<tr><td>" . $row['id'] . "</td><td>" . $row['name'] .
			"</td><td>" . $row['ethnicity'] . "</td><td>" . $row['age']  . "</td></tr>";
		}
		echo "</table>";

		header("refresh:5; url=index.php");
		echo "<p>Redirecting in 5 seconds... if not, click <a href="index.php">here</a>.</p>"
	}
	else {

		echo "<h3>Query <b>unsuccessful</b>.</h3>";
	}

 }
 else{

?>

<div class="container">
	<div class="form">
		<h2>Artists</h2>

		<form action="artist.php" method="POST" name="artist">
			<input type="number" name="id" placeholder="id #" required />
			<input type="text" name="name" placeholder="name" required />
			<input type="text" name="ethnicity" placeholder="ethnicity" required />
			<input type="number" name="age" placeholder="age" required />
			<input name="submit" type="submit" value="Submit"/>
		</form>

	</div>
</div>

<?php } ?>

</body>

</html>
