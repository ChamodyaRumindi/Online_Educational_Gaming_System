<?php

    include_once 'header.php';
    
?>
<?php

    if (isset($_POST["log"])){
        
        $email = $_POST["email"];
        $password = $_POST["psw"];

        require_once 'database.php';
        require_once 'functions.php';

        if(emptyInputSignIn($email, $password) !== false) {
            header("location: ../login.php?error=emptyinput");
            exit();
        }
    }

    else{

        header("location: ../login.php");
        exit();
    }
    

?>

<!DOCTYPE>
<html>
    <head>  
        <link rel="styleSheet" href="css/login.css" />
    </head>

    <body>
        <div class ="login"> 
            <form id ="login" method ="POST" action ="includes/login.php">  
            <h2>SIGN IN</h2>
            
                <div class ="form-group">
                    <label><b>E-mail</b></label><br>

                    <input type ="email" name ="email" id ="email" placeholder="e-mail address" required autofocus/> 
                    
                    <br>
                
                </div>

                <div class ="form-group">
                    <label><b>Password</b></label><br>
                    
                    <input type ="password" name ="psw" id ="psw" placeholder="password" maxlength ="10" required/>

                    <br>

                </div>
                
                

                <a class ="reset-psw" href ="#">Forgot Password?</a>
                
                <br><br>

                <button type ="submit" class ="login-btn"  name ="log" id ="log">LOG IN</button>

                
            
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
    </body>

    
    
</html>

<?php
    include_once 'footer.php';
?>