<?php
//registration.php

include('database_connection.php');
$message = '';
if(isset($_POST["register"]))
{
			$query = "
		INSERT INTO user_details (user_email, user_password, user_name, user_type, user_status) 
		VALUES (:user_email, :user_password, :user_name, :user_type, :user_status)
		";	
		$statement = $connect->prepare($query);
		$statement->execute(
			array(
				':user_email'		=>	$_POST["user_email"],
				':user_password'	=>	password_hash($_POST["user_password"], PASSWORD_DEFAULT),
				':user_name'		=>	$_POST["user_name"],
				':user_type'		=>	'user',
				':user_status'		=>	'active'
			)
		);
		$result = $statement->fetchAll();
		if(isset($result))
		{
           // header('Location: login.php');
			$message = "Registration successful please login <a href='login.php'>login</a>";
		}
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Order Management System</title>		
		<script src="js/jquery-1.10.2.min.js"></script>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
		<br />
		<div class="container">
			<h2 align="center">Order Management System</h2>
			<br />
			<div class="panel panel-default">
				<div class="panel-heading">Register</div>
				<div class="panel-body">
					<form method="post">
						<?php echo $message; ?>
                        <div class="form-group">
							<label>User Name</label>
							<input type="text" name="user_name" class="form-control" required />
						</div>
						<div class="form-group">
							<label>User Email</label>
							<input type="email" name="user_email" class="form-control" required />
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="user_password" class="form-control" required />
						</div>
						<div class="form-group">
							<input type="submit" method="post" name="register" value="Register" class="btn btn-info" /><h5>Already a user?!!..</h5><a href="login.php" >login</a>
						</div>
					</form>
				</div>
			</div>
		</div>
                
	</body>
</html>