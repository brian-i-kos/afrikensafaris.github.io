<?php
	session_start();

	include("connection.php");
	include("function.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($email) &&!empty($password) && !is_numeric($user_name))
		{

			//save to database
			$query = "insert into users (name,email,password) values ('$user_name','$email','$password')";

			mysqli_query($conn, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>SIGNUP</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
     <form action="signup.php" method="post">
     	<h2>SIGNUP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="user_name" placeholder="User Name"><br>
         <label>Email</label>
     	<input type="Email" name="email" placeholder="Email"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit"name="Register">Register</button>
		 <p>Already have an account?<a href="login.php">Login here</a></p>
     </form>

	
</body>
</html>