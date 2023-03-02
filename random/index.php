<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

<?php 

// PHP_SESSION_NONE		= Non c'è una sessiona attiva 
// PHP_SESSION_ACTIVE	= C'è una sessione attiva
// PHP_SESSION_DISABLED = Le sessioni sono state disabilitate nella configurazione del servizio o nell'avvio del comando (-d)

//$expireTime = time() + (24 * 60 * 60);
setcookie("cookiename","cookievalue");

// Se non è presente una sessione, avviala
if(session_status() == PHP_SESSION_NONE) 
	session_start()
?>
	
</body>
</html>
