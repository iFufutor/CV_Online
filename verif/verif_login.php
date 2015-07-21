<?php 

	include("../includes/connect_db.php");

	$email = $_GET['email'];
	$passwd = md5($_GET['password']);
	$sql = "SELECT * FROM user WHERE email=\"$email\"";
	$req = mysqli_query($base,$sql) or die("Erreur SQL");

	while(($data = mysqli_fetch_array($req, MYSQLI_BOTH))!=false)
	{
		$id = $data["id"];
		$password = $data["password"];

		if($passwd == $password)
		{		
			session_start();
			$_SESSION['email'] = $email;
			$_SESSION['id'] = $id;
		}
		else
		{
			echo 'Incorrect password';
		}
    }
?>
