<?php
 include 'connection.php';
 session_start();
include 'connection.php';
if($_SESSION["whostatus"]=="enduser")
{}
else
{ 
session_destroy();
header("location:404.html");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Bootstrap E-Commerce Template- DIGI Shop mini</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Fontawesome core CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!--Slide Show Css -->
    <link href="assets/ItemSlider/css/main-style.css" rel="stylesheet" />
    <!-- custom CSS here -->
    <link href="assets/css/style.css" rel="stylesheet" />
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>
$( function() {
    $( ".draggable" ).draggable();
  } );
</script>
	<style>
	

#c {
  background-color: grey;
  margin-top: 10px;
  position:relative;
  top:0;
  left:0;
}

button {
  padding: 10px 20px;
}
.color
{
border-radius:50%;
display:inline-block;
}

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://rawgit.com/kangax/fabric.js/master/dist/fabric.min.js"></script>

</head>
<body>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><strong>DIGI</strong> Shop</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Track Order</a></li>
                    <li><button ">Logout</a></li>	

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">24x7 Support <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><strong>Call: </strong>+09-456-567-890</a></li>
                            <li><a href="#"><strong>Mail: </strong>info@yourdomain.com</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><strong>Address: </strong>
                                <div>
                                    234, New york Street,<br />
                                    Just Location, USA
                                </div>
                            </a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                        <input type="text" placeholder="Enter Keyword Here ..." class="form-control">
                    </div>
                    &nbsp; 
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="well well-lg offer-box text-center">


                   Today's Offer : &nbsp; <span class="glyphicon glyphicon-cog"></span>&nbsp;40 % off  on purchase of $ 2,000 and above till 24 dec !                
              
               
                </div>
                <div class="main box-border">
                    <div id="mi-slider" class="mi-slider">
                        <ul>

                            <li><a href="#">
                                <img src="assets/ItemSlider/images/1.jpg" alt="img01"><h4>Boots</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/2.jpg" alt="img02"><h4>Oxfords</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/3.jpg" alt="img03"><h4>Loafers</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/4.jpg" alt="img04"><h4>Sneakers</h4>
                            </a></li>
                        </ul>
                        <ul>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/5.jpg" alt="img05"><h4>Belts</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/6.jpg" alt="img06"><h4>Hats &amp; Caps</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/7.jpg" alt="img07"><h4>Sunglasses</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/8.jpg" alt="img08"><h4>Scarves</h4>
                            </a></li>
                        </ul>
                        <ul>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/9.jpg" alt="img09"><h4>Casual</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/10.jpg" alt="img10"><h4>Luxury</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/11.jpg" alt="img11"><h4>Sport</h4>
                            </a></li>
                        </ul>
                        <ul>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/12.jpg" alt="img12"><h4>Carry-Ons</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/13.jpg" alt="img13"><h4>Duffel Bags</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/14.jpg" alt="img14"><h4>Laptop Bags</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/15.jpg" alt="img15"><h4>Briefcases</h4>
                            </a></li>
                        </ul>
                        <nav>
                            <a href="#">Shoes</a>
                            <a href="#">Accessories</a>
                            <a href="#">Watches</a>
                            <a href="#">Bags</a>
                        </nav>
                    </div>
                    
                </div>
                <br />
            </div>
            <!-- /.col -->
            
            <div class="col-md-3 text-center">
                <div class=" col-md-12 col-sm-6 col-xs-6" >
                    <div class="offer-text">
                        30% off here
                    </div>
                    <div class="thumbnail product-box">
                        <img src="assets/img/dummyimg.png" alt="" />
                        <div class="caption">
                            <h3><a href="#">Samsung Galaxy </a></h3>
                            <p><a href="#">Ptional dismiss button </a></p>
                        </div>
                    </div>
                </div>
                <div class=" col-md-12 col-sm-6 col-xs-6">
                    <div class="offer-text2">
                        30% off here
                    </div>
                    <div class="thumbnail product-box">
                        <img src="assets/img/dummyimg.png" alt="" />
                        <div class="caption">
                            <h3><a href="#">Samsung Galaxy </a></h3>
                            <p><a href="#">Ptional dismiss button </a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-md-3">
                <div>
                    <a href="#" class="list-group-item active">Electronics
                    </a>
                    <ul class="list-group">

                        <li class="list-group-item">Mobile
      <span class="label label-primary pull-right">234</span>
                        </li>
                        <li class="list-group-item">Computers
                      <span class="label label-success pull-right">34</span>
                        </li>
                        <li class="list-group-item">Tablets
                         <span class="label label-danger pull-right">4</span>
                        </li>
                        <li class="list-group-item">Appliances
                             <span class="label label-info pull-right">434</span>
                        </li>
                        <li class="list-group-item">Games & Entertainment
                             <span class="label label-success pull-right">34</span>
                        </li>
                    </ul>
                </div>
                <!-- /.div -->
                <div>
                    <a href="#" class="list-group-item active list-group-item-success">Clothing & Wears
                    </a>
                    <ul class="list-group">

                        <li class="list-group-item">Men's Clothing
                             <span class="label label-danger pull-right">300</span>
                        </li>
                        <li class="list-group-item">Women's Clothing
                             <span class="label label-success pull-right">340</span>
                        </li>
                        <li class="list-group-item">Kid's Wear
                             <span class="label label-info pull-right">735</span>
                        </li>

                    </ul>
                </div>
	
                <!-- /.div -->
                <div>
                    <a href="#" class="list-group-item active">Accessaries & Extras
                    </a>
                    <ul class="list-group">
                        <li class="list-group-item">Mobile Accessaries
                             <span class="label label-warning pull-right">456</span>
                        </li>
                        <li class="list-group-item">Men's Accessaries
                             <span class="label label-success pull-right">156</span>
                        </li>
                        <li class="list-group-item">Women's Accessaries
                             <span class="label label-info pull-right">400</span>
                        </li>
                        <li class="list-group-item">Kid's Accessaries
                             <span class="label label-primary pull-right">89</span>
                        </li>
                        <li class="list-group-item">Home Products
                             <span class="label label-danger pull-right">90</span>
                        </li>
                        <li class="list-group-item">Kitchen Products
                             <span class="label label-warning pull-right">567</span>
                        </li>
                    </ul>
                </div>
                <!-- /.div -->
                <div>
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-success"><a href="#">New Offer's Coming </a></li>
                        <li class="list-group-item list-group-item-info"><a href="#">New Products Added</a></li>
                        <li class="list-group-item list-group-item-warning"><a href="#">Ending Soon Offers</a></li>
                        <li class="list-group-item list-group-item-danger"><a href="#">Just Ended Offers</a></li>
                    </ul>
                </div>
                <!-- /.div -->
                <div class="well well-lg offer-box offer-colors">


                    <span class="glyphicon glyphicon-star-empty"></span>25 % off  , GRAB IT                 
              
                   <br />
                    <br />
                    <div class="progress progress-striped">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"
                            style="width: 70%">
                            <span class="sr-only">70% Complete (success)</span>
                            2hr 35 mins left
                        </div>
                    </div>
                    <a href="#">click here to know more </a>
                </div>
                <!-- /.div -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
               
                <!-- /.div -->
               
                <!-- /.row -->
              
                
                <div>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Clothing</a></li>
                        <li class="active">Men's Clothing</li>
                    </ol>
                </div>
                <!-- /.div -->
                <div class="row">
                    <div class="btn-group alg-right-pad">
                        <button type="button" class="btn btn-default"><strong>3005  </strong>items</button>
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                Sort Products &nbsp;
      <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">By Price Low</a></li>
                                <li class="divider"></li>
                                <li><a href="#">By Price High</a></li>
                                <li class="divider"></li>
                                <li><a href="#">By Popularity</a></li>
                                <li class="divider"></li>
                                <li><a href="#">By Reviews</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
				<?php 
				$pname=$_POST['pname'];
				$seller_name=$_POST['seller_name'];
										$sql="select * from sellerproducts where pname like '$pname' and seller_name like '$seller_name'";
										$result=$conn->query($sql);
										if ($result->num_rows > 0) { $i=0;
											while($row = $result->fetch_assoc())
											{ 
				?>		
                    <div class="col-md-8 text-center col-sm-12 col-xs-12"  >
                        <div class="thumbnail product-box" >
						
						<button id="rect">Rect</button>
						<button id="circ">Circ</button>					
						<button id="delete">Delete</button>
						<button id="arc">Arc</button>
						<input type="text" id="text" placeholder="Add text..." />
						<br> 
						<?php if($i==0){$coloring=$row["color"];  $parts = explode(' ', $coloring); $j=str_word_count($coloring);}?>
						<div id="color"  >
						<?php
						if($i==0){ while($j>0){?>
						<button id="<?php echo $parts[$j-1]; ?>" class="color" style="background-color:<?php echo $parts[$j-1]; ?>" value="<?php echo $parts[$j-1]; ?>"></button>
						<?php $j--;} }  $i++;?>
						</div>
						<form  action=cart.php  method=post   enctype=multipart/form-data>
						
						<!--<canvas id="c" height=400px width=400px ></canvas>-->
						<div style="position: relative;"  draggable="true" ondragstart="drag(event)" >
						 <canvas id="c"  ondrop="drop(event)" ondragover="allowDrop(event)" width=400px height=400px   style="position: absolute; left: 0; top: 0;  z-index: 0;"></canvas>
						 
						  
							

						 <canvas id="layer2"   width=400px height=400px  style="position: absolute; left: 0; top: 0; z-index: 1;" ondrop="drop(event)" ondragover="allowDrop(event)"></canvas>
						   

						   <canvas id="layer21" width=400px height=400px ondrop="drop(event)" ondragover="allowDrop(event)"
						   style="position: relative; left:0px; top:0px; display:none; z-index: 0;"></canvas>
							
						   <button style="float:middle" type="button" class=success value="at_last" onclick="ending()">SAVE</button>
						</div>
						<br>  
						<p class="save">
						</p>						                          
                            <div class="caption">
                                <h3><a href="#"><?php $temp=$row["image_of_pro"]; ?><input type=text value=<?php echo $row["image_of_pro"]; ?> style="display:none"/></a></h3>
                               
                            </div>
                        </div>
                    </div>                    
                    <!-- /.col -->
                    <div class="col-md-4 text-center col-sm-6 col-xs-6">
                        <div class="thumbnail product-box" length=160>
                            
                            <div class="caption">							
                                <h3><a href="#"><input type=text name=pname id=pname value=<?php echo $row['pname'];?> style="display:none" ></a><?php echo $row['pname'];?></h3>
                                <p><u>Price :</u> <strong><input type=text name=price id=price value=<?php echo $row['price'];?> style="display:none"><?php echo $row['price'];?> </strong>  </p>
                                <p><u>Size :</u><a href="#"><input type=text name=size id=size value=<?php echo $row['size'];?> style="display:none"></a><?php echo $row['size'];?></p>
                                <p><u>Color :</u><input type=text name=color id=color value=<?php echo $row['color'];?> style="display:none"> <?php echo $row['color'];?></p>
								<p><u>Seller Name :</u><input type=text name=seller_name id=seller_name value=<?php echo $row['seller_name'];?> style="display:none"> <?php echo $row['seller_name'];?> </p>
                                <p><button type="submit" class="btn btn-success" role="button">Add To Cart</button> </p>
								<a id="download">Download as image</a>
                            </div>
							
                        </div>
                    </div>
                    <!-- /.col -->
						 </form>
						<?php														
							}//while											
						}?>
						
								
                </div>
							<br>
								
                            <div class="dropdown" ondrop="drop(event)" ondragover="allowDrop(event)">
								<button onclick="myFunction()" class="dropbtn()"><button>
                               <div id="myDropdown" class="dopdown-conten" ondrop="drop(event)" ondragover="allowDrop(event)">
								<img src="images/cn1" width=50 height=50  class="draggable" draggable="true" ondragstart="drag(event)"  />								
								<img src="images/cn2" width=50  height=50 class="draggable" draggable="true" ondragstart="drag(event)" />
								<img src="images/cn3"  width=50 height=50 class="draggable" draggable="true" ondragstart="drag(event)"  />
								</div>
							</div> 
							<div class="dropdown" ondrop="drop(event)" ondragover="allowDrop(event)">
								<button onclick="myFunction()" class="dropbtn()"><button>
                               <div id="myDropdown" class="dopdown-conten" ondrop="drop(event)" ondragover="allowDrop(event)">
								<img src="images/cn4" id=cn4 onclick="forme('cn4')" width=50 height=50 draggable="true" ondragstart="drag(event)" />								
									<img src="images/c5.jsp" id=c5 onclick="forme('c5')" width=50 height=50 draggable="true" ondragstart="drag(event)" />
									<img src="images/cn6" id=cn6 onclick="forme('cn6')"  width=50 height=50 draggable="true" ondragstart="drag(event)" />
								</div>
							</div>
							
							
                            <script>
							
				
									
                <!-- /.row -->
                <div class="row">
                    <ul class="pagination alg-right-pad">
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    <div class="col-md-12 download-app-box text-center">

        <span class="glyphicon glyphicon-download-alt"></span>Download Our Android App and Get 10% additional Off on all Products . <a href="#" class="btn btn-danger btn-lg">DOWNLOAD  NOW</a>

    </div>

    <!--Footer -->
    <div class="col-md-12 footer-box">


        <div class="row small-box ">
            <strong>Mobiles :</strong> <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> | 
            <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |
              <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |  <a href="#">Sony</a> | 
            <a href="#">Microx</a> |<a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |
            <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |  
            <a href="#">Sony</a> | <a href="#">Microx</a> | view all items
         
        </div>
        <div class="row small-box ">
            <strong>Laptops :</strong> <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx Laptops</a> | 
            <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |
              <a href="#">Sony Laptops</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |  <a href="#">Sony</a> | 
            <a href="#">Microx</a> |<a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |
            <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |  
            <a href="#">Sony</a> | <a href="#">Microx</a> | view all items
        </div>
        <div class="row small-box ">
            <strong>Tablets : </strong><a href="#">samsung</a> |  <a href="#">Sony Tablets</a> | <a href="#">Microx</a> | 
            <a href="#">samsung </a>|  <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |
              <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung Tablets</a> |  <a href="#">Sony</a> | 
            <a href="#">Microx</a> |<a href="#">samsung Tablets</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |
            <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |  
            <a href="#">Sony</a> | <a href="#">Microx Tablets</a> | view all items
            
        </div>
        <div class="row small-box pad-botom ">
            <strong>Computers :</strong> <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> | 
            <a href="#">samsung Computers</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |
              <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |  <a href="#">Sony</a> | 
            <a href="#">Microx Computers</a> |<a href="#">samsung Computers</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |
            <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx Computers</a> |<a href="#">samsung</a> |  
            <a href="#">Sony</a> | <a href="#">Microx</a> | view all items
            
        </div>
        <div class="row">
            <div class="col-md-4">
                <strong>Send a Quick Query </strong>
                <hr>
                <form>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" required="required" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" required="required" placeholder="Email address">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <textarea name="message" id="message" required="required" class="form-control" rows="3" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit Request</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-4">
                <strong>Our Location</strong>
                <hr>
                <p>
                     234, New york Street,<br />
                                    Just Location, USA<br />
                    Call: +09-456-567-890<br>
                    Email: info@yourdomain.com<br>
                </p>

                2014 www.yourdomain.com | All Right Reserved
            </div>
            <div class="col-md-4 social-box">
                <strong>We are Social </strong>
                <hr>
                <a href="#"><i class="fa fa-facebook-square fa-3x "></i></a>
                <a href="#"><i class="fa fa-twitter-square fa-3x "></i></a>
                <a href="#"><i class="fa fa-google-plus-square fa-3x c"></i></a>
                <a href="#"><i class="fa fa-linkedin-square fa-3x "></i></a>
                <a href="#"><i class="fa fa-pinterest-square fa-3x "></i></a>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec nisl odio. Mauris vehicula at nunc id posuere. Curabitur nec nisl odio. Mauris vehicula at nunc id posuere. 
                </p>
            </div>
        </div>
        <hr>
    </div>
    <!-- /.col -->
    <div class="col-md-12 end-box ">
        &copy; 2014 | &nbsp; All Rights Reserved | &nbsp; www.yourdomain.com | &nbsp; 24x7 support | &nbsp; Email us: info@yourdomain.com
    </div>
    <!-- /.col -->
    <!--Footer end -->
    <!--Core JavaScript file  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--bootstrap JavaScript file  -->
    <script src="assets/js/bootstrap.js"></script>
    <!--Slider JavaScript file  -->
    <script src="assets/ItemSlider/js/modernizr.custom.63321.js"></script>
    <script src="assets/ItemSlider/js/jquery.catslider.js"></script>
    <script>
        $(function () {

            $('#mi-slider').catslider();

        });
		</script>

<script>
var img=new Image();
img.src="images/<?php echo $temp; ?>";
var ctx1=document.getElementById('c').getContext("2d");
img.onload=function()
{
	ctx1.drawImage(this, 0, 0, 400,400);	
}

//var ctx2=document.getElementById('layer2').getContext("2d");

var canvas = new fabric.Canvas('layer2'); 
ctx2=canvas.getContext("2d");           
//canvas.setBackgroundImage('images/<?php echo $temp;?>',canvas.renderAll.bind(canvas));
canvas.renderAll();
$("#text").on("click", function(e) {
text = new fabric.Text($("#text").val(), { left: 100, top: 100 });
	  canvas.add(text);
});
$("#rect").on("click", function(e) {
  	rect = new fabric.Rect({
    left: 40,
    top: 40,
    width: 50,
    height: 50,      
    fill: 'transparent',
    stroke: 'green',
    strokeWidth: 5,
			  });  
  canvas.add(rect);
});

$("#circ").on("click", function(e) {
  	rect = new fabric.Circle({
    left: 40,
    top: 40,
    radius: 50,     
    fill: 'transparent',
    stroke: 'green',
    strokeWidth: 5,
			  });  
  canvas.add(rect);
});


$("#arc").on("click", function(e) {
  	rect = new fabric.Circle({
    x: 40,
    y: 40,
    radius: 50, 
	startAngle:Math.PI*2,
	endAngle:Math.PI*3,
    fill: 'transparent',
    stroke: 'green',
    strokeWidth: 5,
			  });  
			  
			  
	var d = document.getElementById("layer2");
var ctx10 = d.getContext("2d");
ctx10.beginPath();
ctx10.arc(95,30,40,10,2*Math.PI);
ctx10.stroke();
			  

  canvas.add(rect);
});



//$("#save").on("click", function(e) {
  //	$(".save").html(canvas.toSVG());
//});


$("#delete").on("click", function(e) {
  	canvas.remove(canvas.getActiveObject());
});
$(".color").on("click",function(e){
canvas.getActiveObject().set("fill", this.value);
canvas.renderAll();});

function downloadCanvas(link, canvasId, filename) {
    link.href = document.getElementById('layer21').toDataURL();
    link.download = filename;
}
document.getElementById('download').addEventListener('click', function() {
	var name='modified'+'<?php echo $temp;?>';
    downloadCanvas(this, 'layer21', name);
}, false);
function forme(ev)
							{
								img=document.getElementById(ev);
								canvas=document.getElementById('layer2');
								ctx=canvas.getContext("2d");
								ctx.drawImage(img,130,160,width=100,height=100);
								

							}//last
							
function ending()
{
dest=document.getElementById('layer21').getContext('2d');
dest.drawImage(document.getElementById('c'),0,0);
dest.drawImage(document.getElementById('layer2'),0,0);
dest.style.position=absolute;
dest.style.display=	none;
	window.alert("modification saved");
	
}

</script>


</body>
</html>
