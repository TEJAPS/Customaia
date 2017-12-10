<?php 
	//connect to database
	//$db=mysqli_connect("localhost","root","","authentication");
	$servername = "localhost";
	$uname = "root";
	$pwd = "";
	$dbname = "cmz";
	$conn=new mysqli($servername ,$uname,$pwd,$dbname);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
?>