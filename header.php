<?php
  session_start(); 
?>

<!DOCTYPE html>
<html>
  <head>
    <title><?php if (isset($title)) {echo "OEGPlay - "; echo $title;} else {echo "OEGPlay";} ?></title>
    <link rel="styleSheet" href="css/header.css" />
    <link rel="styleSheet" href="css/footer.css" />
    <nav class="navbar">
      <div class="logo-container">
        <a href="index.php"
          ><img src="images/OEGplay.png" alt="OEGPlay" class="nav-logo"
        /></a>
      </div>
      <div class="nav-container">
        <ul class="nav-links">
          <li class="nav-item"><a href="index.php">Home</a></li>
          <li class="nav-item"><a href="#">Games</a></li>
          <li class="nav-item"><a href="#">Subjects</a></li>

          <?php 
            if (isset($_SESSION["memberID"])) {
              if ($_SESSION["TID"] == 2){
                echo '<li class="nav-item"><a href="#">Pricing</a></li>';
              }
              echo '<li class="nav-item"><a href="includes/logout.inc.php">Log Out</a></li>';
              echo '<li class="nav-item-profile">';
              echo '<a href="user-db.php?id='.$_SESSION["memberID"].'">'.$_SESSION["firstName"].' '.$_SESSION["lastName"].'</a>';
              echo '<img class ="profile-img" src="images/defaultProfile.png" alt="profile">';
              echo '</li>';
            }
            else if (isset($_SESSION["adminID"])) {
              echo '<li class="nav-item"><a href="includes/logout.inc.php">Log Out</a></li>';
              echo '<li class="nav-item-profile">';
              echo '<a href="admin-db.php?id='.$_SESSION["adminID"].'">'.$_SESSION["firstName"].' '.$_SESSION["lastName"].'</a>';
              echo '<img class ="profile-img" src="images/defaultProfile.png" alt="profile">';
              echo '</li>';
            }
            else {
              echo '<li class="nav-item"><a href="#">Pricing</a></li>';
              echo '<li class="nav-item-signin"><a href="login.php">Sign In </a></li>';
              echo '<li class="nav-item-signup"><a href="signup.php">Sign Up </a></li>';
            }
          ?>
        </ul>
      </div>
    </nav>
  </head>
  <body>
