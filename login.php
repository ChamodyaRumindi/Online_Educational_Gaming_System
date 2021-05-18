<?php

    include_once 'header.php';
    
?>


<!DOCTYPE>
<html>
    <head>
        <link rel="styleSheet" href="css/login.css" />
    </head>
    <body>
    <section>
        <div class ="login"> 
            <form id ="login" method ="POST" action ="includes/login.inc.php">  
            <h2>SIGN IN</h2>
            
                <div class ="form-group">
                    <label><b>E-mail</b></label><br>

                    <input type ="email" name ="email" id ="email" placeholder="e-mail address" required autofocus/> 
                    
                    <br>
                
                </div>

                <div class ="form-group">
                    <label><b>Password</b></label><br>
                    
                    <input type ="password" name ="pwd" id ="pwd" placeholder="password" maxlength ="10" required/>

                    <br>

                </div>
                
                <div class="l-container">
                    <div class="checkbox">
                        <label><b>Remember ME</b></label>
                        <input type ="checkbox" name= "remember" id ="remember"/>
                    </div>
                <a class ="reset-psw" href ="#">Forgot Password?</a>
                </div>

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

<?php

    /*check whether empty inputs */
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all fields!</p>";
        }

        else if ($_GET["error"] == "wronglogin") {
            echo "<p>Incorrect login information!</p>";
        }
    
    }
?>



    </section> 
    </body>

    
    
</html>

<?php
    include_once 'footer.php';
?>