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
<img class="snlogo" src="images/images (1).png" width="20px" height="20px" alt="Twitterconnect"/>
<h6 id="h61">Beauty Product Outlets and Salons</h6>
</div>

<ul class="main-navigation">

    <li><a href="index.php">Home</a></li>
    <li><a href="#">Products</a>
        <ul>
            <li><a href="#">Skin Care</a></li>
            <li><a href="#">Hair Care</a></li>
            <li><a href="#">Body Care</a></li>
            <li><a href="#">Outlets</a></li>
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
<form>
<legend id="f1">Join with us!!</legend>
<input type="image" id="f2" src="images/KelleyOrthodontics-RequestAppointmentButton.png" width="150px" height="50px" name="qap" value="Quick Appointment"/>
<br>
<input type="image" id="f3" src="images/new_button_login.png" width="150px" height="50px" name="log"/>
<br>
<label for="account" id="f4">Not a member? Create a free account and get exclusive discounts and many more!!</label>
<br>
<input type="image" id="f5" src="images/CreateAccount2.png" width="200px" height="100px" name="sign" id="account"/>


</form>
</div>
<!--Footer-->

 
  
    <div id="d11a">
    <h1 id="footerlogo" style="float:left; font-family:myfont; color:#060; text-shadow:2px 2px 2px #FFFFFF; padding:0px;"> Ne'Aura</h1>
		<img style="float:left; left:15px; top:20px; position:relative;" src="images/leaf-mould.png" width="30px" height="30px"/>
	</div>
	
	<div class="places" id="d11b">
		<p> <img src="images/256-256-76f453c62108782f0cad9bfc2da1ae9d.png" width="30px" height="30px"/>
			<span class="sf1">Ne'Aura Borella</span><br><br>
			<span class="sf2">Ne'Aura Beauty Outlet and Salon
           <br></span>
			<span class="sf3">No.53,<br> 
				Senanayaka Rd<br> 
				Borella<br>
                Contact:2556478 </span><br> 
			
		</p>
	</div>
	
	<div class="places"  id="d11c">
		<p> <img src="images/256-256-76f453c62108782f0cad9bfc2da1ae9d.png" width="30px" height="30px"/>
			<span class="sf1">Ne'Aura Moratuwa</span><br><br>
			<span class="sf2">Ne'Aura Beauty Outlet and Salon<br></span>
			<span class="sf3">N0.58,<br> 
			Katubedda Junction,<br>
			Moratuwa</span> 
		</p>
	</div>
	
	<div class="places"  id="d11c">
		<p> <img src="images/256-256-76f453c62108782f0cad9bfc2da1ae9d.png" width="30px" height="30px"/>
			<span class="sf1">Ne'Aura Kelaniya</span><br><br>
			<span class="sf2">Ne'Aura Beauty Outlet and Salon<br></span>
			<span class="sf3">N0.40,<br> 
			Pilimathalawa Rd,<br>
			Kelaniya</span> 
		</p>
	</div>
	<div id="d11e">
		<p>Follow Us</p>
		<p><img src="images/images (7).jpg" width="30px" height="30px"/>
		<img src="images/images (5).jpg" width="30px" height="30px"/>
		<img src="images/images (6).jpg"width="30px" height="30px"/></p>
	</div>
	
	
</div>
<div id="d11f">
		<a href="#" class="a5">Home </a> |
		<a href="#" class="a5">Products </a> |
		<a href="#" class="a5">Salons</a> |
		<a href="#" class="a5">Login</a> |
		<a href="#" class="a5">About Us</a> |
		<a href="#" class="a5">Contact Us </a>  
		
	</div>
	<div id="d11g">
		<span>
			&#169 2014-2018 Ne'Aura Group Inc.
		</span>
		<a href="#" class="a5">Privacy Statement Terms and Conditions</a>
	</div>






</body>
</html>
