<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

<?php

if(isset($_COOKIE["cookiename"])){
	$cookie = $_COOKIE["cookiename"];
	echo "Il valore di cookiename è $cookie";
}else{
	echo "il cookie \" cookiename \" non è stato impostato";
}

?>


</body>
</html>
