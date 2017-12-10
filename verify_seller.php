
<?php
session_start();
include 'connection.php';	


//code for insert
	    $uname=$_POST['uname'];
	    $pwd=$_POST['pwd'];
		
		
			echo "<h2>PHP is Fun!'$uname' '$pwd' </h2> ";					
$sql="select * from seller where name like '$uname' and pwd like '$pwd'";
										$result=$conn->query($sql);
										if ($result->num_rows > 0) {
											$_SESSION["status"]="userin";
											$_SESSION["whostatus"]="provider";
											$_SESSION["user"]="$uname";
											?>
											success
											<?php
											header("location:addprod.html");
										}
										else
										{	$_SESSION["status"]="nallow";
											header("location:index.html");											
											?> 
											
											failed
											<?php
										}
									
?>

















