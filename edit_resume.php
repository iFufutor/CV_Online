<?php
session_start();
	if ((!isset($_SESSION['email'])))
	{
		      header('Location: login.php');
		exit();
	}
?>

<!doctype html>
<html>
    
<head>
    <?php
        include("includes/header.php");
    ?>
    <title>Edit your Resume</title>
</head>

<body>
    <?php
        include("includes/menu.php");
        include("include/fields_infos.php");
        include("includes/edit_resume.php");
        include("includes/scroll_to_top.php");
        include("includes/footer.php");
    ?>
</div>
<!-- Main container END -->
</body>
    
</html>