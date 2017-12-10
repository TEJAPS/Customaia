<?php include 'connection.php';
session_start();
include 'connection.php';
if($_SESSION["whostatus"]=="provider")
{}
else
{ header("location:404.html");
session_destroy();
}
?>
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text.css'/>
		<!--//webfonts-->
</head>
<body>
	<form>
<input type="button" value="Add Product" onclick="window.location.href='addprod.html'" />
</form>

<div class=row>
		<div class=col> Product Name</div>
		<div class=col> Price</div>
		<div class=col> Size</div>
		<div class=col> Color</div>
		<div class=col> Seller Name</div>
		<div class=col> Producr Look</div>		
</div>

<?php $sql="select * from sellerproducts";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {																			
								while($row = $result->fetch_assoc())
									{
		?>
		<div class=row>
        <div class=col-md-3><?php echo $row['pname']; ?></div>
        <div class=col-md-3><?php echo $row['price']; ?></div>
		<div class=col-md-3><?php echo $row['size']; ?></div>
		<div class=col-md-3><?php echo $row['color']; ?></div>
		<div class=col-md-3><?php echo $row['seller_name']; ?></div>
		<div class=col-md-3><img src="images\<?php echo $row['image_of_pro']; ?>" alt="can't load" /></div>
      </div>
<?php }}?>


<table class="table">
    <thead>
      <tr>
        <th>Product Name</th>
        <th>Price</th>
		<th>Size</th>
		<th>Color</th>
		<th>Seller Name</th>
		<th>Producr Look</th>
      </tr>
    </thead>
    <tbody>
		<?php $sql="select * from sellerproducts";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {																			
								while($row = $result->fetch_assoc())
									{
		?>
		<tr>
        <td><?php echo $row['pname']; ?></td>
        <td><?php echo $row['price']; ?></td>
		<td><?php echo $row['size']; ?></td>
		<td><?php echo $row['color']; ?></td>
		<td><?php echo $row['seller_name']; ?></td>
		<td><img src="images\<?php echo $row['image_of_pro']; ?>" alt="can't load" ></td>
      </tr>
			<?php }}?>      
    </tbody>


</body>
</html>