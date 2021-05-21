<?php

/*signup functions*/

function emptyInputSignup($fname, $lname, $email, $username, $pwd, $pwdRepeat) {
    $result=0;

    /*check the empty input fields */
    if (empty($fname) || empty($lname) || empty($email) || empty($username) ||empty($pwd) || empty($pwdRepeat)){
        $result = true;

    }

    else {
        $result = false;
    }

    return $result;
}


/*function invalidUid($username) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/").$username) {
        $result = true;
    }
    
    else {
        $result = false;
    }
}*/

function invalidEmail($email) {
    $result=0;

    /*check the email */
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }

    else {
        $result = false;
    }

    return $result;
}



function pwdMatch($pwd, $pwdRepeat) {
    $result=0;

    /*check the passwords are match */
    if ($pwd !== $pwdRepeat) {
        $result = true;
    }

    else {
        $result = false;
    }

    return $result;
}


/*check whether the username or email already exists in the database */

function uidExists($conn, $username) {
    $sql = "SELECT * FROM Member WHERE username = ?;";

    /*initialize new prepare statement */
    $stmt = mysqli_stmt_init($conn);

    /*check whether any mistake happens in prepare statement */

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header ("location: ../signup.php?error=stmtfailed");
            exit();

    }

    /*if no errors, then pass the data from the user */

    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;     /*return all the data from the databse if the user exists inside the database */

    }

    else {
        $result = false;
        return $result;
    }

    /*close the prepare statement */
    mysqli_stmt_close($stmt);
}


function emailExists($conn, $email) {
    $sql = "SELECT * FROM Member_email WHERE email = ?;";

    /*initialize new prepare statement */
    $stmt = mysqli_stmt_init($conn);

    /*check whether any mistake happens in prepare statement */

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header ("location: ../signup.php?error=stmtfailed");
            exit();

    }

    /*if no errors, then pass the data from the user */

    mysqli_stmt_bind_param($stmt, "s",  $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;     /*return all the data from the databse if the user exists inside the database */

    }

    else {
        $result = false;
        return $result;
    }

    /*close the prepare statement */
    mysqli_stmt_close($stmt);
}







function createUser($conn, $fname, $lname, $username, $pwd, $email) {

    /*insert data into the datbase */

    $sql = "INSERT INTO Member ( firstName, lastName, username, m_password) VALUES ('?', '?', '?', '?');";
    
    /*$query = mysqli_query($conn,$sql); 

    if ($query){
        $sql2 = "INSERT INTO Member_email (email) VALUES ('$email')";
        $result = mysqli_query($conn,$sql2);
        
    }*/




    /*initialize new prepare statement */
    $stmt = mysqli_stmt_init($conn);

    /*check the statement failed */
   if (mysqli_stmt_prepare($stmt, $sql)) {
        $sql2 = "INSERT INTO Member_email (email) VALUES ('?');";
        /*header ("location: ../signup.php?error=stmtfailed");
            exit();*/

    }
    else {
        header ("location: ../signup.php?error=stmtfailed");
            exit();
    }

    /*encrypted password*/
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssss", $fname, $lname, $username, $hashedPwd, $email);
    mysqli_stmt_execute($stmt);        //execute the statement
    mysqli_stmt_close($stmt);         //close the statement

    header ("location: ../signup.php?error=none");
    exit();
   
}

















/*login functions*/

function emptyInputLogin($username, $pwd) {
    $result;

    /*check whether inputs are empty */
    if (empty($username) || empty($pwd)) {
        $result = true;

    }

    else {
        $result = false;
    }

    return $result;
}


function  loginUser($conn, $username, $pwd) {
    $uidExists = uidExists( $conn, $username);

    /*check whether the email is already exists */
    if ($uidExists === false) {
        header("location: ../login.php?error=wronglogin");
            exit();
    }


    $pwdHashed = $uidExists["m_password"];            //read the encrypted password
    $checkPwd = password_verify($pwd, $pwdHashed);   //verify the password in the databse

    /*check whether the encrypted password and entered password are different */
    if ($checkPwd === false) {
        header("location: ../login.php?error=wronglogin");
            exit();
    }

    else if ($checkPwd === true) {
        session_start();
        $_SESSION["memberID"] = $uidExists["memberID"];
        $_SESSION["username"] = $uidExists["username"];

        header("location: ../index.php");
            exit();
    }        
}

?>