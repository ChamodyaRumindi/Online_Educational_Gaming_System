<?php

/*signup functions*/

function emptyInputSignup($name, $email, $pwd, $pwdRepeat) {
    $result;

    /*check the empty input fields */
    if (empty($name) || empty($email) || empty($pwd) || empty($pwdRepeat)){
        $result = true;

    }

    else {
        $result = false;
    }

    return $result;
}



function invalidEmail($email) {
    $result;

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
    $result;

    /*check the passwords are match */
    if ($pwd !== $pwdRepeat) {
        $result = true;
    }

    else {
        $result = false;
    }

    return $result;
}



/*check whether the email already exists in the database */
function emailExists( $conn, $email) {
    
    /*sql statement */
    $sql = "SELECT * FROM users WHERE usersEmail = ?;";

    /*initialize new prepare statement */
    $stmt = mysqli_stmt_init($conn);

    /*check whether any mistake happens in prepare statement */

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header ("location: ../signup.php?error=stmtfailed");
            exit();

    }

    /*if no errors, then pass the data from the user */

    mysqli_stmt_bind_param($stmt, "s", $email);
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






function createUser($conn, $name, $email, $pwd) {

    /*insert data into the datbase */

    $sql = "INSERT INTO users (usersName, usersEmail, usersPwd) VALUES (?, ?, ?);";

    /*initialize new prepare statement */
    $stmt = mysqli_stmt_init($conn);

    /*check the statement failed */
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header ("location: ../signup.php?error=stmtfailed");
            exit();

    }

    /*encrypted password*/
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sss", $name, $email, $hashedPwd);
    mysqli_stmt_execute($stmt);        //execute the statement
    mysqli_stmt_close($stmt);         //close the statement

    header ("location: ../signup.php?error=none");
    exit();
}


/*login functions*/

function emptyInputLogin($email, $pwd) {
    $result;

    /*check whether inputs are empty */
    if (empty($email) || empty($pwd)) {
        $result = true;

    }

    else {
        $result = false;
    }

    return $result;
}


function  loginUser($conn, $email, $pwd) {
    $emailExists = emailExists( $conn, $email);

    /*check whether the email is already exists */
    if ($emailExists === false) {
        header("location: ../login.php?error=wronglogin");
            exit();
    }


    $pwdHashed = $emailExists["usersPwd"];            //read the encrypted password
    $checkPwd = password_verify($pwd, $pwdHashed);   //verify the password in the databse

    /*check whether the encrypted password and entered password are different */
    if ($checkPwd === false) {
        header("location: ../login.php?error=wronglogin");
            exit();
    }

    else if ($checkPwd === true) {
        session_start();
        $_SESSION["userid"] = $emailExists["usersId"];
        $_SESSION["useremail"] = $emailExists["usersEmail"];

        header("location: ../index.php");
            exit();
    }        
}

?>