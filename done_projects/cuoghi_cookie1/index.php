<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

<?php

$secret = "76gyuhwegftt87gyrgyuefgf43y8f87rgf8ehr8ogyhefgbusdgfu87yut89";

if(isset($_POST["username"]) && isset($_POST["password"])){
	if($_POST["username"] == "admin" && $_POST["password"] == "qwerty"){
		setcookie("secret",$secret);
	}
}

?>

	<form action="#" method="post">
		<label for="username">Username</label>
		<input type="text" name="username">

		<label for="password">Password</label>
		<input type="text" name="password">

		<button type="submit">Login</button>
	
	</form>

<?php

if($_COOKIE["secret"] == $secret)
	echo "<img src=\"img.jpg\">";

?>
	
</body>
</html>
