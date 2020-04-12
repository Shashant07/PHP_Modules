<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
</head>
<body>
	<?php
		if(isset($_POST['submit'])){
			$userName = $_POST['userName'];
			$password = $_POST['password'];

			echo "Hello " . $userName;
			echo "Your Password is " . $password;
		}
	?>
	
	<form action="ExtractingInformationFromForm.php" method="post">
		<br>
		<input type="text" name="userName" placeholder="Enter Username">
		<input type="password" name="password" placeholder="Enter Password">
		<br>
		<br>
		<input type="submit" name="submit">
	</form>
		
</body>
</html>