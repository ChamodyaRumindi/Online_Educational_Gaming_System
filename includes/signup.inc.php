<?php
    if (isset($_POST["submit"])) {
        /*echo "It works";*/

        $name = $_POST["fname"];
        $email = $_POST["email"];
        $pwd = $_POST["pwd"];
        $pwdRepeat = $_POST["pwdrepeat"];

        require_once 'database.inc.php';
        require_once 'functions.inc.php';


            /*check whether the inputs are empty*/

        if (emptyInputSignup($name, $email, $pwd, $pwdRepeat) !== false) {
            header ("location: ../signup.php?error=emptyinput");
            exit();
        }

            /*check whether the  e-mail is invalid */

        if (invalidEmail($email) !== false) {
            header ("location: ../signup.php?error=invalidemail");
            exit();
        }
            /*check whether the passwords does not match */

        if (pwdMatch($pwd, $pwdRepeat) !== false) {
            header ("location: ../signup.php?error=passwordsdontmatch");
            exit();
        }

            /*check whether the email is exist */

        if (emailExists( $conn, $email) !== false) {
            header ("location: ../signup.php?error=emailtaken");
            exit();
        }

        /*no errors occur, then signup the user into the databse */

        createUser($conn, $name, $email, $pwd);
    }

    else {
        header ("location: ../signup.php");
        exit();
    }
 

?>