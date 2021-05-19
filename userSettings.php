<!DOCTYPE html>
<html>
    <head>
        <title>Settings</title>
    
        <link rel="stylesheet" href="css/userSettings.css" />
        <link rel="styleSheet" href="css/sidebar.css" />
        <?php include "header.php"; ?>        
    </head>

    <body>
         <script language="javascript" type="text/javascript">
         
         </script>

    <div class="st-container">
        <?php include "user-sidebar.php"; ?>
        <div class="settings-form>">

       <form class="form-details" method="POST">
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

          <input type="button" value="Save" >
          <br><br>

          <label for="delete">Delete account:   </label>
          <input type="button" value="Delete" >
       </form>
        </div>
    </div>
        
    </body>
    <?php include "footer.php"; ?>
</html>