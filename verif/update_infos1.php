<?php
session_start();

    if ((!isset($_SESSION['email'])))
    {
              header('Location: ../login.php');
        exit();
    }
    echo 'You successfully update your infos.';
    //Mise à jour des infos dans le fichier XML
    $name = "../users/infos".$_SESSION['id'].".xml";
    $file = fopen($name, "w+");
    $_xml ="<?xml version=\"1.0\" encoding=\"utf-8\" ?>\n\n";
    $_xml .="<infos>\n";
        $_xml .="\t<name>".$_GET['name']."</name>\n";
        $_xml .="\t<first_name>".$_GET['firstname']."</first_name>\n";
        $_xml .="\t<email>".$_GET['email']."</email>\n";
        $_xml .="\t<city>".$_GET['city']."</city>\n";
        $_xml .="\t<birth>\n";
            $_xml .="\t\t<date>".$_GET['birthday']."</date>\n";
        $_xml .="\t</birth>\n";
        $_xml .="\t<high_school>\n";
            $_xml .="\t\t<high_school_name>".$_GET['high']."</high_school_name>\n";
            $_xml .="\t\t<high_school_graduation>".$_GET['high_school_grade']."</high_school_graduation>\n";
            $_xml .="\t\t<high_school_description>".$_GET['description']."</high_school_description>\n";
        $_xml .="\t</high_school>\n";
        $_xml .="\t<upper_school>\n";
            $_xml .="\t\t<upper_school_name>".$_GET['upper']."</upper_school_name>\n";
            $_xml .="\t\t<upper_school_graduation>".$_GET['upper_school_grade']."</upper_school_graduation>\n";
            $_xml .="\t\t<upper_school_description>".$_GET['description2']."</upper_school_description>\n";
        $_xml .="\t</upper_school>\n";
        $_xml .="\t<socials>\n";
            $_xml .="\t\t<twitter>".$_GET['twitter']."</twitter>\n";
            $_xml .="\t\t<facebook>".$_GET['facebook']."</facebook>\n";
            $_xml .="\t\t<google>".$_GET['google']."</google>\n";
            $_xml .="\t\t<instagram>".$_GET['instagram']."</instagram>\n";
        $_xml .="\t</socials>\n";
    $_xml .="</infos>";
    fwrite($file, $_xml);
    fclose($file);
?>

