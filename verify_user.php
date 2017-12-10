
<?php

include 'connection.php';	
session_start();

//code for insert
	    $uname=$_POST['uname'];
	    $pwd=$_POST['pwd'];
		
		
			echo "<h2>PHP is Fun!'$uname' '$pwd' </h2> ";					
$sql="select * from buyer where name like '$uname' and pwd like '$pwd'";
										$result=$conn->query($sql);
										if ($result->num_rows > 0) {
											$_SESSION["status"]="userin";
											$_SESSION["whostatus"]="enduser";
											$_SESSION["user"]="$uname";
											?>
											success
											<?php
											header("location:listproducts.php");
										}
										else
										{	$_SESSION["status"]="nallow";
											header("location:404.html");											
											?> 
											
											failed
											<?php
										}
									
?>

















