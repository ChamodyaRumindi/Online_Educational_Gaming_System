        <link rel="stylesheet" href="css/userSettings.css" />
        <link rel="styleSheet" href="css/sidebar.css" />
        <?php 
            $title = 'Settings';
            include 'header.php'; 
        ?>

         <script language="javascript" type="text/javascript">
         function save()
         {
             document.getElementByClass("save-button").innerHTML=alert("Saved!!!");
         }
         function delete()
         {
             alert("Your account is successfully deleted!!");
         }
         </script>

    <div class="st-container">
        <?php include "user-sidebar.php"; ?>

       <div class="setting-form">
       <form class="form-details" method="POST">
          Change Profile Picture:
          <input type ="search" id="bsearch" name="bsearch">
          <input type="button" name="browse" value="Browse">
          <br>
          <img src="images/defaultProfile.png" class="st-image">
          <br><br>
          
          <label for="name">Change Name:     </label>
          <input type="text" class="fields" id="name" name="name" required>
          <br> <br>

          <label for="email">Change E-mail:    </label>
          <input type="email" class="fields" id="email" name="email" placeholder="abcTest@gmail.com" required>
          <br><br>

          <label for="pwd">Change Password:    </label>
          <input type="password" class="fields" maxlength="50" id="pwd" name="pwd" placeholder="Current password">
          <br><br>
          <input type="password" class="fields" maxlength="50" id="pwd1" name="pwd1" placeholder="New password">
          <br><font size="1" color="red">(*minimum 8 characters)</font>
          <br><br>
          <input type="password" class="fields" maxlength="50" id="pwd1" name="pwd1" placeholder="Confirm password">
          <br><br>

          <input type="button" value="Save" class="save-button" onClick="save()">
          <br><br><br />

          <label for="delete">Delete account:   </label>
          <input type="button" value="Delete" class="delete-button" onClick="delete()">
       </form>
    </div>
        
    </div>

    <?php include "footer.php"; ?>
