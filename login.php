<?php
session_start();
	if ((isset($_SESSION['email'])))
	{
		// la variable 'login' de session est non déclaré ou vide
		      header('Location: edit_resume.php');
		exit();
	}
?>
<!doctype html>
<html>

<head>
    <?php
        include("includes/header.php");
    ?>
    <title>Login</title>
</head>
    
<body>
    <?php
        include("includes/menu.php");
        include("includes/login.php");
        include("includes/scroll_to_top.php");
        include("includes/footer.php");
    ?>
</div>
<!-- Main container END -->
</body>

</html>