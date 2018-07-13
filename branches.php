<?php
session_start();

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Salon/Branches</title>
<link rel="shortcut icon" href="images/leaf-mould.png">
<link rel="stylesheet" type="text/css" href="css/head.css">
<link rel="stylesheet" type="text/css" href="css/animationndimages.css">
<link rel="stylesheet" type="text/css" href="css/animationimages_branches.css">
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
  <img src="images/bridal.jpg" alt="Slide 4" />
  <img src="images/0U6A6663-1.jpg" alt="Slide 3" />

  <img src="images/c700x420.jpg" alt="Slide 2" />

  <img src="images/Hair-Care-Tips-For-Long-Hair-760x400.jpg"alt="Slide 1" />
  
</div>

     
<div id="branchdiv">
<h2 align="center" >Branches</h2>
<ul>
<li><a href="#">Ne'Aura Beauty Outlet and Salon-Borella</a></li>
<li><a href="#">Ne'Aura Beauty Outlet and Salon Moratuwa</a></li>
<li><a href="#">Ne'Aura Beauty Outlet and Salon Kelaniya</a></li>
</ul>
</div>
<div id="appointmentdiv">
<h2 align="center">Make an Appointment here!!</h2>


<legend id='f1'>Join with us!!</legend>
<a href="appointment.php"><img src='images/KelleyOrthodontics-RequestAppointmentButton.png' width='150px' height='50px' name='qap' value='Quick Appointment'/>
<br>
<a href="customer.php"><img src='images/new_button_login.png' width='150px' height='50px' name='log'/></a>
<br>
<label for='account' id='f4'>Not a member? Create a free account and get exclusive discounts and many more!!</label>
<br>
<a href="cusreg.php"><img src='images/CreateAccount2.png' width='200px' height='100px' name='sign' id='account'/></a>


</div>
<!--Footer-->

<?php require_once('layout/footer.php'); ?>

</body>
</html>
