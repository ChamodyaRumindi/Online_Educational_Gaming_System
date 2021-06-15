<?php
    if (isset($_POST["submit"])){

        $email = $_POST["email"];
        $name = $_POST["name"]; 
        $subject = $_POST["subject"];
        $description = $_POST["description"];

        $sql = "INSERT INTO contact(email, name, subject, description) VALUES($email, $name, $subject, $description)"
    }
    else{
        header("location: ../contact us.php");
        exit();
    }
?>
