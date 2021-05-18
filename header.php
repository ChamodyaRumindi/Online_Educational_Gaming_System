<?php
  session_start(); 
?>


<link rel="styleSheet" href="css/header.css" />
<link rel="styleSheet" href="css/footer.css" />
<nav class= "navbar">
      <div class="logo-container">
        <a href="/oegplay"
          ><img src="images/OEGplay.png" alt="OEGPlay" class="nav-logo"
        /></a>
      </div>
      <div class="nav-container">
        <ul class="nav-links">
          <li class="nav-item"><a href="/oegplay">Home</a></li>
          <li class="nav-item"><a href="#">Games</a></li>
          <li class="nav-item"><a href="#">Subjects</a></li>
          <li class="nav-item"><a href="#">Pricing</a></li>


        <?php
        //check whether the user is already logged in

          /*if (isset($_SESSION["useremail"])) {
            echo "<li class="nav-item-signin"><a href ='#'>My Account </a></li>";
            echo "<li class="nav-item-signup"><a href ='includes/logout.inc.php'>Log Out </a></li>";
          }

          else {
            echo "<li class="nav-item-signin"><a href='login.php'>Sign In </a></li>";
            echo "<li class="nav-item-signup"><a href='signup.php'>Sign Up </a></li>";
          }*/
        
        
        
        ?>
        




          <li class="nav-item-signin"><a href="/oegplay/login.php">Sign In </a></li>
          <li class="nav-item-signup"><a href="/oegplay/signup.php">Sign Up </a></li>
        </ul>
      </div>
    </nav>
