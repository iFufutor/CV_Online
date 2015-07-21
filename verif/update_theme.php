<?php
    session_start();

	if ((!isset($_SESSION['email'])))
	{
		      header('Location: ../login.php');
		exit();
	}
    include("../includes/connect_db.php");

    $template = $_GET['Choisie'];

    $sql = 'UPDATE user SET template="'.$template.'" WHERE id="'.$_SESSION['id'].'"';
    mysqli_query($base,$sql) or die ('Erreur SQL !'.$sql.'<br />'.mysqli_error());
    echo 'Updated';



?>