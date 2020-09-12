<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#bdc3c7">
	<div id="main-wrapper">
	<center><h2>Login Form</h2></center>
		<form action="index.php" method="post">
		<table border="0" bgcolor="blue" align="center" cellspacing="20">
			
				<tr>
				<td>Email :</td>
				<td><input type="text" name="email" placeholder="Email Address" required></td>
				</tr>
   
				<tr>
				<td>Mobile :</td>
				<td><input type="text" name="mobile" placeholder="Mobile Number" required></td>
				</tr>
				
				<tr>
				<td><a href="dashboard.php"><button class="login_button" name="login" type="button">Login</button></a></td>
				</tr>
			
		</form>
		</div>
</body>
</html>