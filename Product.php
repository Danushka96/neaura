<?php
session_start();
require_once('inc/config.php');

if(isset($_GET['product'])){
	$product=$_GET['product'];
	$selectq="SELECT * FROM items WHERE id='$product' LIMIT 1";
	//echo $selectq;
	$selectcon=mysqli_query($connection,$selectq);
	$result=mysqli_fetch_assoc($selectcon);

	$borellaq="SELECT quantity FROM branchitems WHERE itemid='$product' AND branchid='1'";
	$borellacon=mysqli_query($connection,$borellaq);
	$borellares=mysqli_fetch_assoc($borellacon);

	$moratuwaq="SELECT quantity FROM branchitems WHERE itemid='$product' AND branchid='2'";
	$moratuwacon=mysqli_query($connection,$moratuwaq);
	$moratuwares=mysqli_fetch_assoc($moratuwacon);

	$kelaniyaq="SELECT quantity FROM branchitems WHERE itemid='$product' AND branchid='3'";
	$kelaniyacon=mysqli_query($connection,$kelaniyaq);
	$kelaniyares=mysqli_fetch_assoc($kelaniyacon);

}else{
	header('location: index.php');
}

?>

<!doctype html>
<head>
<html>
<meta charset="utf-8">
<title><?php echo $result['name']; ?></title>
<link rel="shortcut icon" href="images/leaf-mould.png">
<link rel="stylesheet" type="text/css" href="css/head.css">
<link rel="stylesheet" type="text/css" href="css/footerdesign.css">
<link rel="stylesheet" type="text/css" href="css/Productavailabilitycheck1.css">


</head>

<body>
<div id="divhead1">
<h1 id="h11">Ne'Aura</h1>
<img style="float:left; margin-left:5px; margin-top:8px;" src="images/leaf-mould.png" width="50px" height="50px"/>
<a href="https://facebook.com"><img class="snlogo" src="images/facebook-logo_318-49940.jpg" width="20px" height="20px" alt="Facebookconnect"/></a>
<a href="https://intergram.com"><img class="snlogo" src="images/69366.png" width="20px" height="20px" alt="Instagramconnect"/></a>
<a href="https://twitter.com"><img class="snlogo" src="images/images (1).png" width="20px" height="20px" alt="Twitterconnect"/></a>
<h6 id="h61">Beauty Product Outlets and Salons</h6>
</div>

<ul class="main-navigation">

  <li><a href="#">Home</a></li>
  <li><a href="#">Products</a>
    <ul>
     <li><a href="#">Skin Care</a></li>
      <li><a href="#">Hair Care</a></li>
      <li><a href="#">Body Care</a></li>
      <li><a href="Salon_Outlets.html">Outlets</a></li>
      </ul></li>
      <li><a href="#">Salons</a>
      <ul>
      <li><a href="#">Services</a></li>
      <li><a href="Salon_Branches.html">Branches</a></li>
      </ul>
      </li>
      <li><a href="#">Login</a>
      <ul>
      <li><a href="#">Admin Login</a>
      
      </li>
      <li><a href="#">My Login</a></li>
      </ul>
      </li>
      <li><a href="#">About Us</a></li>
      <li><a href="#">Contact Us</a></li>
      
      </ul>
    
    <div id="pro1"><h3 id="title"><?php echo $result['name']; ?></h3>
    <img class="products" src="<?php echo 'images/products/New folder/'.$result['image']; ?>" width="300px" height="300px" alt="Facewash"/>
    
    </div>
    <div id="bran">
    <div id="brans1">
    	<h3>Ne'Aura - Borella</h3>
    	<h2 style="margin-left: 25px"><?php if($borellares['quantity']>0){echo "Available";}else{ echo "Not Available";} ?></h2>
    </div>
    <div class="brans">
    	<h3>Ne'Aura - Moratuwa</h3>
    	<h2 style="margin-left: 25px"><?php if($moratuwares['quantity']>0){echo "Available";}else{ echo "Not Available";} ?></h2>
    </div>
    <div class="brans">
    	<h3>Ne'Aura - Kelaniya</h3>
    	<h2 style="margin-left: 25px"><?php if($kelaniyares['quantity']>0){echo "Available";}else{ echo "Not Available";} ?></h2>
    </div>
    </div>
        
<!--Footer-->
 <?php require_once('layout/footer.php'); ?>

</body>
</html>
