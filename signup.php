<?php

    include_once 'header.php';

?>

<?php
    if (isset($_POST["submit"])) {
        /*echo "It works";*/

        $name = $_POST["fname"];
        $email = $_POST["email"];
        $pwd = $_POST["pwd"];
        $pwdRepeat = $_POST["pwdrepeat"];

        require_once 'database.php';
        require_once 'functions.php';

        if (emptyInputSignup($name, $email, $pwd, $pwdRepeat) !== false) {
            header ("location: ../signup.php?error=emptyinput");
            exit();
        }

        if (invalidEmail($email) !== false) {
            header ("location: ../signup.php?error=invalidemail");
            exit();
        }

        if (pwdMatch($pwd, $pwdRepeat) !== false) {
            header ("location: ../signup.php?error=passwordsdontmatch");
            exit();
        }

        if (uidExists( $conn, $email) !== false) {
            header ("location: ../signup.php?error=emailtaken");
            exit();
        }

        createUser($conn, $name, $email, $pwd);


    }

    else {
        header ("location: ../signup.php");
        exit();
    }


?>


<!DOCTYPE>

<html>
    <head>
        <link rel="styleSheet" href="css/signup.css" />
    </head>

    <body>
        <section class ="signup_form">
            <h2>SIGN UP</h2>

            <div class ="signup-form-form">

                <form action ="includes/signup.php" method ="POST">
                        <label><b>Full Name*</b></label>
                    <br><br>
                        <input type ="text" name ="fname" placeholder ="full name" required/>
                    <br><br>
                        <label><b>E-mail*</b></label>
                    <br><br>

                        <input type ="email" name ="email" placeholder ="e-mail" required/>
                    <br><br>
                        <label><b>Password* minimum 8 charactors</b></label>
                        
                    <br><br>
                        <input type ="password" name ="pwd" placeholder ="password" required/>
                    <br><br>
                        <label><b>Confirm Password*</b></label>
                    <br><br>
                       
                        <input type ="password" name ="pwdrepeat" placeholder ="confirm password" required/>
                    <br>

                        <p>by submitting this form you agree to our terms of use</p>
                    <br>    
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
        </section>
    </body>
</html>




<?php
    include_once 'footer.php';
?>