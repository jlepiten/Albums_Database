<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>input album data</title>
	<link rel="stylesheet" href="css/style.css" />
</head>

<body>

<?php

require('db.php');

if(isset($_POST['id'])){

	// arguments
	$id = $_POST['id'];
	$title = $_POST['title'];
	$artist = $_POST['artist'];
	$year = $_POST['year'];

	$query = "INSERT INTO Albums VALUES($id, $title, $artist, $year)";
	$result = execute_query($query);

	// checks if query is successful
	if($result){

		echo "<h3>Query successful. Your entered data: </h3>";

		// display all data in Albums table
		$query = "SELECT * FROM Albums";
		$dresult = mysql_query($query);
		echo "<table>";
		while ($row = mysql_fetch_array($result)) {
			echo "<tr><td>" . $row['id'] . "</td><td>" . $row['title'] .
			"</td><td>" . $row['artist'] . "</td><td>" . $row['year']  . "</td></tr>";
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
		<h2>Albums</h2>

		<form action="album.php" method="POST" name="album">
			<input type="number" name="id" placeholder="id #" required />
			<input type="text" name="title" placeholder="title" required />
			<input type="text" name="artist" placeholder="artist" required />
			<input type="text" name="year" placeholder="year" required />
			<input name="submit" type="submit" value="Submit"/>
		</form>

	</div>
</div>

<?php }
mysql_close();
 ?>

</body>

</html>
