<?php 
      $title = 'Sign Up';
      include 'header.php'; 
?>
        <link rel="styleSheet" href="css/signup.css" />
        <section class ="signup_form">
            

            <div class ="signup-form-form">

                <form action ="includes/signup.inc.php" method ="POST">
                     <h2>SIGN UP</h2>
                        <label><b>First Name</b></label>
                    <br>
                        <input type ="text" name ="fname" placeholder ="first name" required/>
                    <br>
                        <label><b>Last Name</b></label>
                    <br>
                        <input type ="text" name ="lname" placeholder ="last name" required/>
                    <br>
                        <label><b>E-mail</b></label>
                    <br>

                        <input type ="email" name ="email" placeholder ="e-mail" required/>
                    
                    <br>
                        <label><b>User Name</b></label>
                    <br>
                    
                        <input type ="text" name ="uid" placeholder ="user name" required/>
                    <br>
                        <label id ="character"><b>Password</b></label>
                        
                    <br>
                        <input type ="password" name ="pwd" placeholder ="password" pattern ="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title ="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/>
                    <br>
                        <label><b>Confirm Password</b></label>
                    <br>
                       
                        <input type ="password" name ="pwdrepeat" placeholder ="confirm password" required/>
                    <br>

                        <p>by submitting this form you agree to our <a href = "#">terms of use</a></p>
                       
                        <button type ="submit" name ="submit">SIGN UP</button>


                        <div class ="seperator"><b>Or</b><b>Sign</b><b>In</b><b>With</b></div>

                    <div class ="socialIcon">
                    <a class ="btn1" href ="#">
                        <img class ="social" src ="images/Facebook.png"/>
                    </a>

                    <a class ="btn1" href ="#">  
                        <img class ="social" src ="images/Twitter.png"/>
                    </a>

                    <a class ="btn1" href ="#">  
                        <img class ="social" src ="images/G-mail.png"/>
                    </a>
                </div>
                </form>
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