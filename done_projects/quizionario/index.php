<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

<?php
	
function prettyPrint($obj){
	echo "<pre>";
	print_r($obj);
	echo "</pre>";
}

// Leggo il file json e lo trasformo in un array
$jsonText = file_get_contents("domande.json");
$quizArray = (array) json_decode($jsonText);	// Convertiamo da StdObject ad array associativo

prettyPrint($quizArray);


// Separo le chiavi dai valori (le domande dalle risposte)
// Domande = Chiavi
// Risposte = Valori
$quizQuestions = array_keys($quizArray);
$quizAnswers = array_values($quizArray);

// Inizializzo la sessione se questa non è ancora presente 
if(session_status() == PHP_SESSION_NONE){
	session_start();
}

// Se è la prima iterazione, inizializzo le prime variabili
if(!isset($_SESSION["answersN"])){
	$_SESSION["answersN"] = 0;
	$_SESSION["correctAnswersN"] = 0;
}

// Se il client manda risposta
if(isset($_POST["answer"])){
	$_SESSION["answersN"]++;
	$lastAnswer = $quizAnswers[$_SESSION["questionN"]];
	if($lastAnswer == $_POST["answer"])
		$_SESSION["correctAnswersN"]++;

	echo $_SESSION["correctAnswersN"];
}


$_SESSION["questionN"] = random_int(0,count($quizArray));



?>


	<form action="#" method="POST">
		<p><?= $quizQuestions[$_SESSION["questionN"]] ?></p>
		<input type="text" name="answer">
		<button type="text">Submit</button>
	</form>
					


	
</body>
</html>
