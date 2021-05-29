<?php 
      $title = 'Sign Up';
      include 'header.php'; 
?>
<link rel="styleSheet" href="css/signup.css" />

<section class="main-container">
<div class="su-container">
  <h1>SIGN UP</h1>
  <div class="signup-form">
    <form action="includes/signup.inc.php" method="POST">
      <div class="form-row">
        <input required placeholder="First Name..." type="text" name="fname" />
        <input required placeholder="Last Name..." type="text" name="lname" />
      </div>
      <input required placeholder="Email..." type="text" name="email" />
      <input required placeholder="Username..." type="text" name="uname" />
      <input required placeholder="Password..." type="password" name="pwd" />
      <input
        required
        placeholder="Confirm Password..."
        type="password"
        name="repwd"
      />
      <p>
        by submitting this form you agree to our <a href="#">terms of use</a>
      </p>
      <button class="submit-btn" type="submit" name="submit">SIGN UP</button>
    </form>
  </div>
  <p>Already a member ? <a href="login.php">Log In!</a></p>
</div>
<div class="bg-img">
    <img src="images/signup-bg.png" alt="Sign Up">
</div>
<?php
    /*check errors in sign up */
    
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all fields!</p>";
        }

        else if ($_GET["error"] == "invalidemail") {
            echo "<p>Choose a proper e-mail!</p>";
        }

        else if ($_GET["error"] == "invaliduid") {
            echo "<p>Choose a proper username!</p>";
        }

        else if ($_GET["error"] == "passwordsdontmatch") {
            echo "<p>Passwords doesn't match!</p>";
        }

        else if ($_GET["error"] == "stmtfailed") {
            echo "<p>Something went wrong, Try again!</p>";
        }

        else if ($_GET["error"] == "emailtaken") {
            echo "<p>E-mail already taken!</p>";
        }

        else if ($_GET["error"] == "none") {
            echo "<p>You have signed up!</p>";
        }
    }
?>
</section>

<?php
    include_once 'footer.php';
?>


      <!-- <div class="seperator"><b>Or</b><b>Sign</b><b>In</b><b>With</b></div> -->

      <!-- <div class="socialIcon">
        <a class="btn1" href="#">
          <img class="social" src="images/Facebook.png" />
        </a>

        <a class="btn1" href="#">
          <img class="social" src="images/Twitter.png" />
        </a>

        <a class="btn1" href="#">
          <img class="social" src="images/G-mail.png" />
        </a>
      </div> -->
