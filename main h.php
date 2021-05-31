<!DOCTYPE html>
<html>

<head>
<?php 
      $title = 'Home';
      include 'header.php'; 
    ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--css link part-->
<link rel="stylesheet" type="text/css" href="css/h.css">
<link rel="stylesheet" type="text/css" href="css/Style1.css">
</head>
<body>


<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 2</div>
  <img src="img/3.jpg" style="width:100%">
  <div class="text">Play</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="img/4.jpg" style="width:100%">
  <div class="text">Play</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3/ 4</div>
  <img src="img/1.jpg" style="width:100%">
  <div class="text">Play</div>
</div>   

<div class="mySlides fade">
  <div class="numbertext">4 / 1</div>
  <img src="img/2.jpg" style="width:100%">
  <div class="text">Play</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
<!--brows by grade-->
<div class="container">
<h2>Brows by Grade</h2>
<p>
<button class="but-black ">perschool</button>
<button class="button button2">number1</button>
<button class="button button2">number2</button>
<button class="button button2">number3</button>
<button class="button button2">number4</button>
<button class="button button2">number5</button>
<hr>

<!--popular subject-->
<button class="button button2">popular subject</button>
<button class="button button2">view all subject</button>

<hr>
<!--popular Game-->
<h2>popular subject</h2>
<div class="box">
				<div class="bicon">
					<img src="images/game4.png" class="logbcon">
				</div>
				<div class="content">
                <a href="www.game.lk"><h2>Play</h2></a>
                <p>Quize(Grade-4/game-1)</p>
				</div>
			</div>
</body>


  <?php
  include('./footer.php'); 
  ?>
</html>