<?php

session_start();

    if ((!isset($_SESSION['email'])))
    {
              header('Location: ../login.php');
        exit();
    }


//UPLOAD DE LA PHOTO DE PROFIL
    $dossier = '../users/';
    $fichier = basename($_FILES['file']['name']);
    $taille_maxi = 1000000; //en octets
    $taille = filesize($_FILES['file']['tmp_name']);
    $extensions = array('.png');
    $extension = strrchr($_FILES['file']['name'], '.');
    
if(!in_array($extension, $extensions)) //Extension non valide
    {
    	$erreur = 'You must upload a PNG file.';
    }

    if($taille>$taille_maxi)
    {
        $erreur = 'File size is too big';
    }

    if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
    {
    	$new_name= 'id';
    	$new_name = $new_name.$_SESSION['id'].$extension;

    	if(move_uploaded_file($_FILES['file']['tmp_name'], $dossier . $new_name)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
        {
        	header('Location: ../edit_resume.php');
        }

        else //Sinon (la fonction renvoie FALSE).
        {
        	echo 'Failed to upload your file';
        }
    }
    
    else
    {
    	echo $erreur;
    }
?>