<?php
	session_start();
	session_destroy();
	
	header("location: slogin.php");
	echo"You have been Logged out <a href='plogin.php'>Click here to login</a>";
	?>