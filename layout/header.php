<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ne'Aura</title>
    <link rel="stylesheet" type="text/css" href="css/Admin-style.css">
    <link rel="stylesheet" type="text/css" href="css/head.css">
    <link rel="stylesheet" type="text/css" href="css/animationndimages.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/footerdesign.css">
	<link rel="stylesheet" type="text/css" href="css/CustomerReg-style.css">
	<link rel="stylesheet" type="text/css" href="css/Customer-style.css">
    <link rel="shortcut icon" href="images/leaf-mould.png">
	<link rel="stylesheet" type="text/css" href="css/animationimages_branches.css">
	<link rel="stylesheet" type="text/css" href="css/footerdesign.css">

	
</head>
<body>
<div id="divhead1">
    <h1 id="h11">Ne'Aura</h1>
    <img style="float:left; margin-left:5px; margin-top:8px;" src="Images/leaf-mould.png" width="50px" height="50px"/>
    <img class="snlogo" src="Images/facebook-logo_318-49940.jpg" width="20px" height="20px" alt="Facebookconnect"/>
    <img class="snlogo" src="Images/69366.png" width="20px" height="20px" alt="Instagramconnect"/>
    <img class="snlogo" src="Images/images%20(1).png" width="20px" height="20px" alt="Twitterconnect"/>
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