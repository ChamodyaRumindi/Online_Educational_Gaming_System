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
  <div class="numbertext">3 / 4</div>
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
  
  <button class="bon">Mathematics</button>
  <button class="bon">Science</button>
  <button class="bon">English</button>
  <button class="bon">History</button>
  <button class="bon">Health</button>

<br><br><br>

<hr>

<!--popular Game-->
<div class="game-header">
  <h1>popular Game</h1>

  <button class="butt"><span>View AllGames </span></button>

  <form method="post">
  <label>Search Games</label>
  <input type="text" name="Search">
  <input type="submit" name="submit">
</div>

<div class="game-container">
<div class="box">
				<div class="bicon">
					<img src="images/game1.png" class="logbcon">
				</div>
				<div class="content">
                <a href="www.game.lk"><h2>Play</h2></a>
                <p>Quize(Grade-3/game-1)</p>
				</div>
			</div>

      <div class="box">
				<div class="bicon">
					<img src="images/game2.png" class="logbcon">
				</div>
				<div class="content">
                <a href="www.game.lk"><h2>Play</h2></a>
                <p>Quize(Grade-2/game-1)</p>
				</div>
			</div>

      <div class="box">
				<div class="bicon">
					<img src="images/game4.png" class="logbcon">
				</div>
				<div class="content">
                <a href="www.game.lk"><h2>Play</h2></a>
                <p>Quize(Grade-5/game-1)</p>
				</div>
			</div>

      <div class="box">
				<div class="bicon">
					<img src="images/game3.png" class="logbcon">
				</div>
				<div class="content">
                <a href="www.game.lk"><h2>Play</h2></a>
                <p>Quize(Grade-4/game-1)</p>
				</div>
			</div>
</div>

</body>
<?php
include 'footer.php';
?>