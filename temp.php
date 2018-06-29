<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>

* {box-sizing: border-box;}

.mySlides {display: none;}

/* Slideshow container */
.slider-container {
  max-width: 600px;
  position: relative;
  margin: auto;
}

.comment-box {
	padding:20px;
	width: 800px;
	min-height: 110px;
	font-size: 30px;
	font-style: italic;
	text-align: center;
	border: 2px solid darkgrey;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>

<body>
	
	<div class="slider-container">

	<div class="mySlides fade">
		<p class="comment-box">
			Comment 01 fgkj fkjg ndfkg ndfjg kdjfg kdfjgkdjfgk dfg kjdfg kfdjgk dfgj 
		</p>
	</div>

	<div class="mySlides fade">
		<p class="comment-box">
			Comment 02
		</p>
	</div>

	<div class="mySlides fade">
		<p class="comment-box">
			Comment 03
		</p>
	</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

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
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
</body>
</html>