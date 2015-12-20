<?php

	session_start(); //funkcja pozwalająca dokumentowi korzystać z sesji. Sesja jest to globalny pojemnik na dane
	
	if(!isset($_SESSION['zalogowany'])) //zwróci TRUE jeśli nie jest ustawiona
	{
		header('Location: index.php');
		exit();
	}
?>


<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8"/>
	<title>Bramka sms</title>
	<meta name="description" content="bramka sms"/>
	<meta name="keywords" content="bramka, sms"/>
	<meta http-equiv="X-UA-Compatible" content="IE-edge,chrome=1"/>
	<link rel="stylesheet" href="css/style.css">
	
	

</head>

<body>


cvbxv

</body>

</html>