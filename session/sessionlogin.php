<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Session Login</title>
</head>

<body>

<?php

	session_start();

	if (isset($_POST['submit']))
	{
		$_SESSION['username'] = $_POST['username']; //write login to server storage
		$_SESSION['password'] = $_POST['password'];
		$_SESSION['answer'] = $_POST['answer'];
		header("location:home.php"); //redirect to welcome
	}
?>

<form action="" method="post" name="form">
	<label for="login">Username : </label><input type="text" name="username"><br><br>
	<label for="password">Password : </label><input type="password" name="password"><br><br>
	<label>Select Answer : </label>
	<input type="radio" id="yes" name="answer" value="Yes" checked="Checked">
	<label for="yes">Yes</label>
	<input type="radio" id="no" name="answer" value="No">
	<label for="no">No</label><br><br>
	<input type="submit" name="submit">
	<input type="reset" name="reset">
</form>

	
</body>
</html>