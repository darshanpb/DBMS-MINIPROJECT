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
<body>


    <table>

    <tr>
        <h2>Order id</h2>
     <td><h2></h2></td>
        <td><h2></h2></td>
      <td><h2></h2></td>
      <td><h2></h2></td></tr>

     <?php
$con=mysqli_connect("localhost","root","","project");
    $query="SELECT * FROM orders  where C_ID=$C_ID";
    $result=mysqli_query($con,$query);
        while($row=mysqli_fetch_array($result))
        {
            echo "<form action='updateorder1.php'  method=post>";
             echo "<td><input type=text name=ORD_ID value='".$row['ORD_ID']."'></td>";
            echo "<td><input type=text name=C_ID value='".$row['C_ID']."'></td>";
             echo "<td><input type=text name=PRO_ID value='".$row['PRO_ID']."'></td>";
             echo "<td><input type=text name=ORD_DATE value='".$row['ORD_DATE']."'></td>";
             echo "<td><input type=text name=branch value='".$row['ORD_QUANTITY']."'></td>";
             echo "<td><input type=text name=branch value='".$row['ORD_AMOUNT']."'></td>";
            echo "<td><input type=submit></td>";
            echo "</form></tr>";
        }
            ?>

    </table>
</body>
</html>
