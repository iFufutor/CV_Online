<?php
	// On appelle la session
	session_start();

	// On détruit la session
	session_destroy();

	// On expire le cookie de session
	setcookie("PHPSESSID","",time()-1);

	// On écrase le tableau de session
	$_SESSION = array();

	// On redirige sur l'index
	header("Location: ../index.php");
?>
