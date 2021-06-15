<link rel="styleSheet" href="css/Contact us.css" />
    <?php 
      $title = 'Contact Us';
      include 'header.php'; 
    ?>
    
    <!--content of the page-->

    <h3 id="heading1">If you have questions or just want to get in touch,<br> use the form below</h3>
   
    <br>

    <!--Add a form-->
    <div class="cu-body">
    <form method="post">
      <label for="email">Your e-mail address</label></br>
      <input type="email" class="fields" id="email" name="email" required></br>

      <label for="name">Full name</label></br>
      <input type="text" class="fields" id="name" name="fullname" required></br>

      <label for="sub">Subject</label></br>
      <input type="text" class="fields" id="sub" name="sub" required></br>

      <label for="descr">Description</label></br>
      <textarea id="descr" name="descr" required></textarea></br>

      we will respond as soon as possible
      <br><br />
      <input type="button"  class="btn1" name="reset" value="Reset">
      <input type="button" class="btn1" name="submit" value="Submit">
    </form>

    <?php
    /*check errors in contact us page */
    
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            
            echo '<script language="javascript">';
            echo 'alert("Fill in all fields!")';
            echo '</script>';
        }

        else if ($_GET["error"] == "invalidemail") {
            
            echo '<script language="javascript">';
            echo 'alert("Choose a proper e-mail!")';
            echo '</script>';
        }

        else if ($_GET["error"] == "stmtfailed") {
            
            echo '<script language="javascript">';
            echo 'alert("Something went wrong, Try again!")';
            echo '</script>';
        }
    }
?>

    </div>

    <?php include('./footer.php'); ?>
  

