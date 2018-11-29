<?php
	session_start();

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
<style media="screen">
.button {
	background-color: #9752d8; /* Green */
	border: none;
	color: white;
	padding: 16px 32px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 16px;
	margin: 4px 2px;
	-webkit-transition-duration: 0.0s; /* Safari */
	transition-duration: 0.0s;
	cursor: pointer;
}
.button1 {
    background-color: white;
    color: black;
    border: 2px solid #9752d8;
}

.button1:hover {
    background-color: #9752d8;
    color: white;
}
.logout{
    background-color: #f44336;
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}


logout.hover, logout.active {
    background-color: red;
}
</style>
</head>
<body>
	<div class="header">
		<p style="text-align:right;"> <a href="index.php?logout='1'" class="logout">logout</a> </p>
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php
						echo $_SESSION['success'];
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
		<?php endif ?>
	</div>
	<section>
	  <article3>
	    <ul>
	      <h3>Products details</h3>
	<div>
	<a href="products.php" class="button button1">Products Available</a>
	</div>
	    </ul>
	  </article3>
	  <article>
			<ul>
				<h3>Order details</h3>
				<div>
					<a href="vieworder.php" class="button button1">view Myorders</a>
					<a href="updateorder.php" class="button button1">Update Order</a>
					<a href="deleteorder.php" class="button button1">Delete Order</a>
				</div>
			</ul>
	  </article>
	</section>
 </body>
</html>
