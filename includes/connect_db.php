<?php
		$base = mysqli_connect ('localhost', 'root', 'root');
		if(!$base)
		{
			die("Impossible to connect to database");
		}
		$db = mysqli_select_db ($base,'cv_online');
		if(!$db)
		{
			die("Impossible to select database");
		}
?>
