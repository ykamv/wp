<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Session Home</title>
	
	<?php
		session_start();
		$username = $_SESSION["username"];
		$password = $_SESSION["password"];
		$answer = $_SESSION["answer"];
 	?>
	
</head>

<body>
	<p>Your username is : <?php echo $username; ?> </p>
	<p>Your password is : <?php echo $password; ?> </p>
	<p>Your selected answer is : "<?php echo $answer; ?>" </p>
	<br>
	<form action="logout.php" method="post" name="form1">
		<input type="submit" name="submit1" id="submit1" value="logout">
	</form>
	
</body>
</html>