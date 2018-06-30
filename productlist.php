<?php
session_start();
require_once('inc/config.php');
require_once('layout/header.php');

$query="SELECT * FROM items";
$querycon=mysqli_query($connection,$query);

$item='';
while ($result=mysqli_fetch_assoc($querycon)) {
	$productname=$result['name'];
	$productid=$result['id'];
	$item=$item."<a href='product.php?product=$productid'>$productname</a><br><br>";
}

?>

<p>
<?php echo $item; ?>
</p>


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