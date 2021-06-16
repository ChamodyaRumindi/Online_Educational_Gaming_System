<!DOCTYPE html>
<html>

<head>
<?php 
      $title = 'Home';
      include 'header.php'; 
    ?>
<!--css link part-->
<link rel="stylesheet" type="text/css" href="css/h.css">
<!--<link rel="stylesheet" type="text/css" href="css/Style1.css">-->

</head>
<body>
<script src ="index.js"></script>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="images/1.jpg" style="width:100%">
  <div class="text">Play</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images/4.jpg" style="width:100%">
  <div class="text">Play</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images/3.jpg" style="width:100%">
  <div class="text">Play</div>
</div>


<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images/2.jpg" style="width:100%">
  <div class="text">Play</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
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

<!--brows by grade-->

<h1>Brows by grade</h1>

<div class="btn-group">
  <button>Grade-1</button>
  <button>Grade-2</button>
  <button>Grade-3</button>
  <button>Grade-4</button>
  <button>Grade-5</button>
</div>
<hr>

  <!--popular subject-->
  <h1>popular subject</h1>
  
  <div class="dropdown">
    <button class="dropbtn">Dropdown 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div>
<hr>

</body>
<?php
include 'footer.php';
?>