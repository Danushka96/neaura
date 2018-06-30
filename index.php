<?php

session_start();
require_once('layout/header.php');
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


      <div class="fling-minislide">
  <img src="images/Post1-Ayurveda-101.png" alt="Slide 4" />
  <img src="images/beauty.jpg" alt="Slide 3" />

  <img src="images/home_page_middle_slide_03.jpg" alt="Slide 2" />

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
