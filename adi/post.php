<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Adine | POST</title>
</head>
<body>

	<form action="post.php" method="post">
		Name: <input type="text" name="name"><br>
		E-mail: <input type="text" name="email"><br>
		<input type="submit">
	</form>

	Welcome <?php echo $_POST["name"]; ?><br>
	Your email address is: <?php echo $_POST["email"]; ?>


</body>
</html>