<?php
include("connect.php");
error_reporting(0);
?>
 
<html>
<head>
  <title>Registration Form</title>
  <link rel="stylesheet" href="css/form.css">
</head>
<body>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
 <form>
 <table border="0" bgcolor="blue" align="center" cellspacing="20">
   <tr>
    <td>FullName :</td>
    <td><input type="text" name="fullname" placeholder="Full Name" required></td>
   </tr>
   <tr>
    <td>Email :</td>
    <td><input type="text" name="email" placeholder="Email Address" required></td>
   </tr>
   <tr>
    <td>Mobile :</td>
    <td><input type="text" name="mobile" placeholder="Mobile Number" required></td>
   </tr> 
   <tr>
    <td>Plan :</td>
    <td>
     <select name="plan" required>
      <option selected hidden value="">Select Code</option>
      <option value="standard">standard</option>
      <option value="advanced">advanced</option>
      <option value="pro">pro</option>
     </select>
    </td>
   </tr>
   <tr>
    <td><input type="submit" name="submit" value="Submit"> 
	<a href="login.php"><button class="login_button" name="Go To Login" type="button">Login</button></a></td>
   </tr>
  </table>
 </form>
</body>
</html>

<?php

$fn=$_GET['fullname'];
$ea=$_GET['email'];
$mn=$_GET['mobile'];
$pl=$_GET['plan'];

$query="INSERT INTO REGISTER VALUES ('$fn','$ea','$mn','$pl')";
$data=mysqli_query($conn,$query);

if($data)
{
	echo '<script>alert("Data inserted succesfully")</script>';
}
else
{
	echo "Failed to insert data in database";
}

?>