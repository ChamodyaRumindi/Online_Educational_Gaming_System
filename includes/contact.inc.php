<?php
   session_start();
?>

<?php
    if (isset($_POST["submit"])){
        require 'database.inc.php';

        $mid = $_session["memberID"];
        $name = $_POST["name"]; 
        $subject = $_POST["subject"];
        $email = $_POST["email"];
        $description = $_POST["description"];

        if(isset($_POST["memberID"]))
        {
          $sql = "INSERT INTO contact(memberID, name, subject, email, description) VALUES($mid, $name, $subject, $email, $description)";
        }
        else{
          $sql = "INSERT INTO contact(name, subject, e-mail, description) VALUES($name, $subject, $email, $description)";
        }
    }
    else{
        header("location: ../contact us.php");
        exit();
    }
?>
