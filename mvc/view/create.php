<html>
<head>
	<title>Add new</title>
</head>

	<a href="home.php"> Back</a> |
	<a href="../controller/logout.php"> Logout</a>
        
<body>
	<form method="post" action="regCheck.php" enctype="">
		username: <input type="text" name="username" value=""><br>
		password: <input type="password" name="password" value=""><br>
		email: <input type="email" name="email" value=""><br>
		<input type="hidden" name="fname" value="create"><br>
		<input type="submit" name="submit" value="Create">
	</form>
</body>
</html>