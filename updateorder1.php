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


$con=mysqli_connect("localhost","root","","votertable");
$query="UPDATE  orders set C_ID='$_POST[C_ID]',='$_POST[ORD_ID]',ORD_DATE='$_POST[ORD_DATE]',ORD_QUANTITY='$_POST[ORD_QUANTITY]',ORD_AMOUNT='$_POST[ORD_AMOUNT]' WHERE ORD_ID='$_POST[ORD_ID]'";
if(mysqli_query($con,$query))
{
    header("refresh:1; url=updateorder.php");

}
else
    echo "error";
?>
