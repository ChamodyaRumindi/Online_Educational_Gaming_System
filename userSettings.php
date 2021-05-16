<?php
  include "header.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Settings</title>
    
        <link href="css/userSettings.css" rel="stylesheet" type="text/css">        
    </head>

    <body>
        <img src="images/defaultProfile.png" alt="Default Profile Photo" class="profile">
         
        <div class="about">
        <p id="p1"><b>Pasindu Lakshan</b></p>
        Premium Member<br>
        </div>

        <ul class="menu">
            <li><a href="#">Dashboard</a></li>
            <li><a href="choosesubscription.php">Subscription</a></li>
            <li><a class="active" href="usersettings.php">Settings</a></li>
            <li><a href="">Log out</a></li>
        </ul>
        <div class="vl"></div>

       <form class="details" method="POST">
          Change Profile Picture:
          <input type ="search" id="bsearch" name="bsearch">
          <input type="button" name="browse" value="Browse">
          <br><br><br><br><br><br>
          
          <label for="name">Change Name:     </label>
          <input type="text" id="name" name="name" value="Pasindu Lakshan"required>
          <br> <br>

          <label for="email">Change E-mail:    </label>
          <input type="email" id="email" name="email" value="abcTest@gmail.com" required>
          <br><br>

          <label for="pwd">Change Password:    </label>
          <input type="password" maxlength="8" id="pwd" name="pwd" placeholder="Current password">
          <br><br>
          <input type="password" maxlength="8" id="pwd" name="pwd" placeholder="New password">
          <br><br>
          <input type="password" maxlength="8" id="pwd" name="pwd" placeholder="Confirm password">
          <br><br>
       </form>
        
    </body>
</html>

<?php
  include "footer.php";
?>