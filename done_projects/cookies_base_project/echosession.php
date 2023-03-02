
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

<?php

	if(session_status() == PHP_SESSION_ACTIVE){
		if(isset($_SESSION["username"])){
			$username = $_SESSION["username"];
			echo "il valore della variabile di sessione username è $username";
		}
	}

?>

</body>
</html>
