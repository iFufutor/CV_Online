<?php
include("../includes/connect_db.php");

	   // Test si les mots de passe sont les mêmes
	   if ($_GET['password1'] != $_GET['password2']) 
       {
           echo "Password is not the same";
	   }
	   else 
       {
		  // Verification que email pas déjà utilisé
		  $sql = 'SELECT * FROM user WHERE email="'.mysqli_real_escape_string($base,$_GET['email']).'"';
		  $req = mysqli_query($base,$sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysqli_error());
		  $data = mysqli_fetch_array($req, MYSQLI_BOTH);

        
		  if ($data[0] == 0) 
          {
		      $sql = 'INSERT INTO user VALUES("", "'.mysqli_real_escape_string($base,$_GET['email']).'", "'.mysqli_real_escape_string($base,md5($_GET['password1'])).'","'.mysqli_real_escape_string($base,$_GET['name']).'","'.mysqli_real_escape_string($base,$_GET['firstname']).'","1")';
		      mysqli_query($base,$sql) or die('Erreur SQL !'.$sql.'<br />'.mysqli_error());

              //On crée la variable de session
		      //session_start();
		      echo 'You successfully registered. Please log in now.';
		  }
		  else 
          {
		  echo "This email adress is already used.";
		  }
	   }
?>