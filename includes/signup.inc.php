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