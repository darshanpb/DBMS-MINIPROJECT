<?php include('server.php') ?>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Project</title>
    <head>
<style>
/* Basics */
html, body {
    width: 100%;
    height: 100%;
    font-family: "Helvetica Neue", Helvetica, sans-serif;
    color: #444;
    -webkit-font-smoothing: antialiased;
    background: #f0f0f0;
}
#container {
    position: fixed;
    width: 750px;
    height: 320px;
    top: 50%;
    left: 50%;
    margin-top: -200px;
    margin-left: -350px;
	background: #fff;
    border-radius: 3px;
    border: 1px solid #ccc;
    box-shadow: 0 1px 2px rgba(0, 0, 0, .1);

}
form {
    margin: 0 auto;
    margin-top: 10px;
}
label {
    color: #555;
    display: inline-block;
    margin-left: 18px;
    padding-top: 10px;
    font-size: 14px;
}
p a {
    font-size: 11px;
    color: #aaa;
    float: right;
    margin-top: -13px;
    margin-right: 20px;
 -webkit-transition: all .4s ease;
    -moz-transition: all .4s ease;
    transition: all .4s ease;
}
p a:hover {
    color: #555;
}
input {
    font-family: "Helvetica Neue", Helvetica, sans-serif;
    font-size: 12px;
    outline: none;
}
input[type=text],
input[type=number],
input[type=email],
input[type=password] {
    color: #777;
    padding-left: 10px;
    margin: 10px;
    margin-top: 12px;
    margin-left: 18px;
    width: 290px;
    height: 35px;
	border: 1px solid #c7d0d2;
    border-radius: 2px;
    box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .4), 0 0 0 5px #f5f7f8;
-webkit-transition: all .4s ease;
    -moz-transition: all .4s ease;
    transition: all .4s ease;
	}
input[type=text]:hover,
input[type=number]:hover,
input[type=email]:hover,
input[type=password]:hover {
    border: 1px solid #b6bfc0;
    box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .7), 0 0 0 5px #f5f7f8;
}
input[type=text]:focus,
input[type=number]:focus,
    input[type=email]:focus,
input[type=password]:focus {
    border: 1px solid #a8c9e4;
    box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .4), 0 0 0 5px #e6f2f9;
}
#lower {
    background: #ecf2f5;
    width: 100%;
    height: 69px;
    margin-top: 80px;
	  box-shadow: inset 0 1px 1px #fff;
    border-top: 1px solid #ccc;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
}
input[type=checkbox] {
    margin-left: 20px;
    margin-top: 30px;
}
.check {
    margin-left: 3px;
	font-size: 11px;
    color: #444;
    text-shadow: 0 1px 0 #fff;
}
.column {
    float: left;
    width: 50%;
    padding: 10px;
    height: 210px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
input[type=submit] {
    float: right;
    margin-right: 20px;
    margin-top: 20px;
    width: 80px;
    height: 30px;
font-size: 14px;
    font-weight: bold;
    color: #fff;
    background-color: #acd6ef; /*IE fallback*/
    background-image: -webkit-gradient(linear, left top, left bottom, from(#acd6ef), to(#6ec2e8));
    background-image: -moz-linear-gradient(top left 90deg, #acd6ef 0%, #6ec2e8 100%);
    background-image: linear-gradient(top left 90deg, #acd6ef 0%, #6ec2e8 100%);
    border-radius: 30px;
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
* {
    box-sizing: border-box;
}
</style>

</head>

<body>
    <br>
    <h3 style ="text-align:center;">Welcome to</h3>
    <h1 style="text-align:center;">Order Management System</h1>
    <div id="container">
        <form action="registration.php" method="post">
          <div class="row">
            <div class="column">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="phone">Contact No:</label>
            <input type="number" id="phone" name="phone" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password_1" required>
          </div>
          <div class="column">
            <label for="address">address:</label>
            <input type="text" id="address" name="address" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Confirm Password:</label>
            <input type="password" id="password1" name="password_2" required >
          </div>
        </div>
            <div id="lower">
                <label>Already a User!<br><a href="login.php" >Login</a></label>
                <input type="submit" name="reg_user" value="Register">
            </div><!--/ lower-->
        </form>
    </div><!--/ container-->
    <!-- End Page Content -->
</body>
</html>
