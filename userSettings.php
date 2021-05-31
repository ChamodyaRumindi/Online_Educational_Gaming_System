        <link rel="stylesheet" href="css/userSettings.css" />
        <link rel="styleSheet" href="css/sidebar.css" />
        <?php 
            $title = 'Settings';
            include 'header.php'; 

            require_once 'includes/database.inc.php';
            $mid = $_SESSION['memberID'];
            $result = mysqli_query($conn, "SELECT firstName, lastName FROM member WHERE memberID = $mid;");
            $memberDetails = mysqli_fetch_array($result);
            $fName = $memberDetails[0];
            $lName = $memberDetails[1];

            $result = mysqli_query($conn, "SELECT email FROM member_email WHERE memberID = $mid;");
            $memberEmail = mysqli_fetch_array($result);
            $email = $memberEmail[0];

            mysqli_close($conn); 
        ?>

    <div class="st-container">
        <?php include "user-sidebar.php"; ?>

       <div class="setting-form">
       <form class="form-details" method="POST" action="includes/edituserprofile.inc.php">
          
          <label for="propic">Change Profile Picture:    </label>
          <input type ="file" id="propic" name="propic">
          <br>
          <img src="images/defaultProfile.png" class="st-image">
          <br><br>
          
          <?php 
            echo '<label for="name">Change First Name:     </label>
                <input type="text" class="fields" id="fname" name="fname" value = "'.$fName.'" required >';
            echo '<br> <br>';

            echo '<label for="name">Change Last Name:     </label>
                <input type="text" class="fields" id="lname" name="lname" value = "'.$lName.'" required>';
            echo '<br> <br>';

            echo '<label for="email">Change E-mail:    </label>
            <input type="email" class="fields" id="email" name="email" placeholder="abcTest@gmail.com" value = "'.$email.'"required>'
          ?>
          <input type="submit" value="Save" class="save-button" onclick="return confirm('Are you sure?')">
        </form>
        
        <form class="form-details" method="POST" action="includes/changeuserpassword.inc.php">
          <label for="pwd">Change Password:    </label>
          <input required type="password" class="fields" maxlength="50" id="pwd" name="pwd" placeholder="Current password">
          <br><br>
          <input required type="password" class="fields" maxlength="50" id="pwd1" name="pwd1" placeholder="New password">
          <br><font size="1" color="red">(*minimum 8 characters)</font>
          <br><br>
          <input required type="password" class="fields" maxlength="50" id="pwd1" name="pwd1" placeholder="Confirm password">
          <br><br>

          <input type="submit" value="Save" class="save-button" onclick="return confirm('Are you sure?')">
       </form>
       <label for="delete">Delete account:   </label>
        <input type="button" value="Delete" class="delete-button" >
    </div>
        
    </div>

    <?php include "footer.php"; ?>
