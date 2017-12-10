<?php include 'connection.php';
session_start();

//code for insert
	    $pname=$_POST['pname'];
	    $price=$_POST['price'];
		$size=$_POST['size'];
		$color=$_POST['color'];
		//$image = $_FILES['image']['name'];			
		//$target = "images/".basename($_FILES['image']['name']);		
		//$image_text = mysqli_real_escape_string($dbname, $_POST['image_text']);
//		$sql = "INSERT INTO images (image, text) VALUES ('$image', '$image_text')";
//		mysqli_query($db, $sql);
		$user=$_SESSION['user'];
		$image = $_FILES['image']['name'];
		$target = "images/".basename($_FILES['image']['name']);
		

    $sql="insert into sellerproducts values ('$pname','$price','$size','$color','$user','$image')";
  
    //if ($conn->query($sql) === TRUE and  move_uploaded_file($_FILES['image']['tmp_name'], $target)) 
		if ($conn->query($sql) === TRUE and  move_uploaded_file($_FILES['image']['tmp_name'], $target)) 
		{
    echo "New record created successfully";
		
	
	 header("location:addprod.html");
	
		}
	else 
		{
    echo "did't add seller";
		$msg = "Failed to upload image";
		header("location:index.html");
        }
		
?>

















