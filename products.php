<?php
 include('server.php');
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
<style>
table {

    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 8px;
    text-align: center;
    border-bottom: 1px solid #ddd;
}
h1 {
  text-align: center;
}

tr:hover {background-color:#f5f5f5;}
input[type=submit] {
    float: center;
    margin-right: 20px;
    margin-top: 20px;
    width: 90px;
    height: 30px;
font-size: 14px;
    font-weight: bold;
    color: #fff;
    background-color: #acd6ef; /*IE fallback*/
    background-image: -webkit-gradient(linear, left top, left bottom, from(#acd6ef), to(#6ec2e8));
    background-image: -moz-linear-gradient(top left 90deg, #acd6ef 0%, #6ec2e8 100%);
    background-image: linear-gradient(top left 90deg, #acd6ef 0%, #6ec2e8 100%);
    border-radius: 10px;
    border: 1px solid #66add6;
    box-shadow: 0 1px 2px rgba(0, 0, 0, .3), inset 0 1px 0 rgba(255, 255, 255, .5);
    cursor: pointer;
}
input[type=submit]:hover {
    background-image: -webkit-gradient(linear, left top, left bottom, from(#b6e2ff), to(#6ec2e8));
    background-image: -moz-linear-gradient(top left 90deg, #b6e2ff 0%, #6ec2e8 100%);
    background-image: linear-gradient(top left 90deg, #b6e2ff 0%, #6ec2e8 100%);
}
input[type=submit]:active {
    background-image: -webkit-gradient(linear, left top, left bottom, from(#6ec2e8), to(#b6e2ff));
    background-image: -moz-linear-gradient(top left 90deg, #6ec2e8 0%, #b6e2ff 100%);
    background-image: linear-gradient(top left 90deg, #6ec2e8 0%, #b6e2ff 100%);
}
</style>
</head>
<body>
<table >
    <h1>Products available</h1>
    <tr>
      <th><h2>ID</h2></th>
      <th><h2>Name</h2></th>
      <th><h2>Price</h2></th>
      <th><h2>Order</h2></th>
    </tr>
<?php
    $con=mysqli_connect("localhost","root","","project");
$query="select * from products";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
{
		echo"<form method='post' action='products.php'>";
    echo"<tr>";
    echo"<td>".$row['PRO_ID']."</td>";
    echo"<td>" .$row['PRO_NAME']."</td>";
    echo"<td>" .$row['PRO_PRICE']."</td>";
    echo"<td><input type='submit'value='placeorder' name='place_order' ></td>";
    echo"</tr></form>";
}
?>
    </table>
    </body>
</html>
