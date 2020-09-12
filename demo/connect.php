<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "registerform";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn) 
{
  //echo "Connected successfully";
}
else
{
	echo "Connection Failed";
}
?>