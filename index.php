<?php

session_start();
//require_once('layout/header.php');
require_once('inc/config.php');

$selectq="SELECT * FROM comments ORDER BY (time) DESC LIMIT 3";
$selectcon=mysqli_query($connection,$selectq);

if(isset($_POST['submit'])){
	$id=$_SESSION['customerid'];
	//echo "id".$id;
	$comment=$_POST['comment'];

	$cquery="INSERT INTO comments (customerid, comment) VALUES ($id,'$comment')";
	//echo $cquery;
	$commentcon=mysqli_query($connection,$cquery);
	if($commentcon){
		header("location: ./index.php");
	}else{
		echo "<script>alert('Something went wrong!')</script>";
	}
}


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
<link rel="shortcut icon" href="images/leaf-mould.png">
<link rel="stylesheet" type="text/css" href="css/head.css">
<link rel="stylesheet" type="text/css" href="css/animationndimages.css">
<link rel="stylesheet" type="text/css" href="css/home.css">
<link rel="stylesheet" type="text/css" href="css/footerdesign.css">
</head>

<body>
<div id="divhead1">
<h1 id="h11">Ne'Aura</h1>
<img style="float:left; margin-left:5px; margin-top:8px;" src="images/leaf-mould.png" width="50px" height="50px"/>
<img class="snlogo" src="images/facebook-logo_318-49940.jpg" width="20px" height="20px" alt="Facebookconnect"/>
<img class="snlogo" src="images/69366.png" width="20px" height="20px" alt="Instagramconnect"/>
<img class="snlogo" src="images/images_(1).png" width="20px" height="20px" alt="Twitterconnect"/>
<h6 id="h61">Beauty Product Outlets and Salons</h6>
</div>

<ul class="main-navigation">

    <li><a href="index.php">Home</a></li>
    <li><a href="#">Products</a>
        <ul>
            <li><a href="skincare.php">Skin Care</a></li>
            <li><a href="haircare.php">Hair Care</a></li>
            <li><a href="bodycare.php">Body Care</a></li>
            <li><a href="outlets.php">Outlets</a></li>
        </ul></li>
    <li><a href="#">Salons</a>
        <ul>
            <li><a href="#">Services</a></li>
            <li><a href="branches.php">Branches</a></li>
        </ul>
    </li>
    <li><a href="#">About Us</a></li>
    <li><a href="#">Contact Us</a></li>
    <?php 
        if(!isset($_SESSION['email'])){
            echo "
            <li><a href='#'>Login</a>
                <ul>
                    <li><a href='admin.php'>Admin Login</a>

                    </li>
                    <li><a href='customer.php'>My Login</a></li>
                </ul>
            </li>
            ";
        }else{
            echo "
            <li><a href='#''>My Profile</a>
                <ul>
                    <li><a href='editCustomer.php?id=".$_SESSION['email']."'>Edit Details</a></li>
                    <li><a href='./logout.php''>Logout</a></li>
                </ul>
            </li>
            ";
        }
    ?>
      
</ul>

     <div class="fling-minislide">
  <img src="images/Post1-Ayurveda-101.png" alt="Slide 4" />
  <img src="images/beauty.jpg" alt="Slide 3" />

  <img src="images/home page middle slide 03.jpg" alt="Slide 2" />

  <img src="images/tmb_69055_9432.jpg" alt="Slide 1" />
  
</div>
     
<div id="productservice">
<h2 align="center"> Our Services</h2>
<img  id="pic1" src="images/online-makeup-academy-photo.jpg" width="25%" height="200px"alt="makeup"/>
<img class="pics" src="images/Girl-Receiving-Cosmetic-Pink-F-16051799-1000x578.0.0.jpg" width="25%" height="200px" alt="facial"/>
<img class="pics" src="images/12-hair3.jpg" width="25%" height="200px" alt="hair"/>
<img class="pics" src="images/shutterstock_495464569.jpg" width="25%" height="200px" alt="waxing"/>
<img class="pics" src="images/manicure-600x600.jpg" width="25%" height="200px" alt="manicure"/>
</div>
<div id="productservice2">
<h2 align="center" class="sub">Our Favourite Products</h2>
<img  id="pic2" src="images/products/New folder/face/scrub-sandun-tube.jpg" width="25%" height="200px" alt="1"/>
<img class="pics" src="images/products/New folder/hair/p-4289-hair-fall-control-oil__02706.1495951375.1280.1280.jpg" width="25%" height="200px" alt="2"/>
<img class="pics" src="images/products/New folder/hair/godapara-shampoo.jpg" width="25%" height="200px" alt="3"/>
<img class="pics" src="images/products/New folder/body/body-wash-aloe-vera.jpg" width="25%" height="200px" alt="4"/>
<img class="pics" src="images/products/New folder/body/moisturising-lotion.jpg" width="25%" height="200px" alt="4">
</div>


<div class="slider-container">
<?php

	while($result=mysqli_fetch_assoc($selectcon)){
 		$comment="<div id='commnt1' class='mySlides fade'>
 		<img src='images/view1.png' width='50px' height='50px' alt='pen' style='margin-left:600px; margin-top:30px; box-shadow:2px 2px #FFF;'/>
 		<h2 align='center' class='sub'>User Comments</h2>
 		<p> ".$result['comment']."</p></div>";
 		echo $comment;
     }
 ?>
     <div style="text-align:center">
      	<span class="dot"></span> 
      	<span class="dot"></span> 
      	<span class="dot"></span> 
    </div>
 </div>
</div>
<div>

<form action="" method="POST">
	<input type="text" name="comment" placeholder="Enter your comment here">
	<input type="submit" value="submit" name="submit">

</form>

</div>


<!--Footer-->
    
    <?php require_once('layout/footer.php'); ?>

<!-- Comment box JS start -->

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 4000); // Change image every 2 seconds
}
</script>

<!-- Comment box JS start -->

</body>
</html>
