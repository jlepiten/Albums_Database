
<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<title>Welcome Home</title>
	<link rel="stylesheet" href="css/style.css" />
</head>

<body>
<div class="container">
<div class="header"><h1>Welcome to the database</h1></div>
<div class="form">

<p>Hello <?php echo $_SESSION['username']; ?></p>

<p> To enter new album data <a href="album.php" target="_blank">Click Here</a></p>

<p> To enter new artist data <a href="artist.php" target="_blank">Click Here</a></p>

</div>

</div>

</body>

</html>