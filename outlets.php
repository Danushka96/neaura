<?php
session_start();

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Outlets</title>
<link rel="shortcut icon" href="images/leaf-mould.png">
<link rel="stylesheet" type="text/css" href="css/head.css">
<link rel="stylesheet" type="text/css" href="css/footerdesign.css">
<link rel="stylesheet" type="text/css" href="css/animationndimages.css">
<link rel="stylesheet" type="text/css" href="css/animationimages_outlets.css">


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
  <img src="images/naturesecrets_bodybutter-e1430977193716.jpg" alt="Slide 4" />
  <img src="images/bottom slide 02.jpg" alt="Slide 3" />

  <img src="images/home_page_bottom_slide_06.jpg"alt="Slide 2" />

  <img src="images/home_page_bottom_slide_07.jpg"alt="Slide 1" />
  
</div>
     
<div id="branchdiv">
<h2 align="center" style="position:relative; top:20px;">Outlet and Salon Chain</h2>
<ul>
<li><a href="#">Ne'Aura Beauty Outlet and Salon-Borella</a></li>
<li><a href="#">Ne'Aura Beauty Outlet and Salon Moratuwa</a></li>
<li><a href="#">Ne'Aura Beauty Outlet and Salon Kelaniya</a></li>
</ul>
</div>
<div id="appointmentdiv">
<h2 align="center" style="position:relative; top:20px;" f>Check Product Availability</h2>
<form>
<label for="out">Select the product category here!</label>
<br>
<select id="out" onchange="redirectlink(this.value)">
<option value="1">Face Care</option>
<option value="2">Hair Care</option>
<option value="3">Body Care</option>
</select>

</form>
</div>
<?php require_once('layout/footer.php'); ?>


<script>
	
function redirectlink(type){
	if(type=='1'){
		window.open('productlist.php?type=1');

	}else if(type=='2'){
		window.open('productlist.php?type=2');
	}else if(type=='3'){
		window.open('productlist.php?type=3');
	}else{
		console.log("hi");
	}
}

</script>



</body>
</html>
