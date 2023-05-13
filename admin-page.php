<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
</head>
<body>

	<?php
		// Check if admin ID and password are correct
		if(isset($_POST['submit'])){
			$admin_id = "admin";
			$admin_password = "password";
			if($_POST['admin_id'] == $admin_id && $_POST['admin_password'] == $admin_password){
				// Redirect to admin page if ID and password are correct
				header("Location: index3.php");
				exit;
			}
			else{
				// Display error message if ID or password are incorrect
				echo "<p style='color:red;'>Invalid ID or password. Please try again.</p>";
			}
		}
	?>

	<h2>Admin Login</h2>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
		<label for="admin_id">Admin ID:</label>
		<input type="text" name="admin_id" id="admin_id"><br><br>

		<label for="admin_password">Password:</label>
		<input type="password" name="admin_password" id="admin_password"><br><br>

		<input type="submit" name="submit" value="Log In">
	</form>

</body>
</html>
