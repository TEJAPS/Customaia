<?php 
include 'connection.php';
session_start();

if($_SESSION["whostatus"]=="enduser")
{}
else
{ header("location:404.html");
session_destroy();
}
//code for insert
	    $pname=$_POST['pname'];
	    $price=$_POST['price'];
		$size=$_POST['size'];
		$color=$_POST['color'];
		$seller_name=$_POST['seller_name'];
		//$image = $_FILES['image']['name'];			
		//$target = "images/".basename($_FILES['image']['name']);		
		//$image_text = mysqli_real_escape_string($dbname, $_POST['image_text']);
//		$sql = "INSERT INTO images (image, text) VALUES ('$image', '$image_text')";
//		mysqli_query($db, $sql);
		$user=$_SESSION['user'];//buyer's name
		
		$image = 'modified'." ".$_POST['image_of_pro'];
		
		

    $sql="insert into cart values ('$pname','$price','$size','$color','$seller_name','$image','$user')";
  
    //if ($conn->query($sql) === TRUE and  move_uploaded_file($_FILES['image']['tmp_name'], $target)) 
		if ($conn->query($sql)) 
		{
    echo "New record created successfully";			
	 header("location:listproducts.php");
	
		}
	else 
		{
    echo "did't add seller";
		$msg = "Failed to upload image";
		header("location:index.html");
        }
		
?>

















