<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Session Home</title>
	
	<?php
		session_start();
		$username = $_SESSION["username"];
		unset($_SESSION['username']);
		unset($_SESSION['password']);
		unset($_SESSION['answer']);
		session_destroy();
 	?>
	
</head>

<body>
	<p><?php echo $username; ?> successfully signed out... visit again...</p>
</body>
</html>