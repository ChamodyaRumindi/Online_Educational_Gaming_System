<?php

    include_once 'header.php';
    
?>


<!DOCTYPE>
<html>
<<<<<<< Updated upstream
    <head>
        <link rel="styleSheet" href="css/login.css" />
=======
    <head>  
    <link rel="styleSheet" href="css/login.css" />
>>>>>>> Stashed changes
    </head>
    <body>
    <section class ="login">
        <div class ="form_group"> 
            
            <form method ="POST" action ="includes/login.inc.php">  
				<h2>SIGN IN</h2>
            
                
                    <label><b>E-mail or User Name</b></label><br>

                    <input type ="text" name ="username" id ="username" placeholder="e-mail address / user name" required /> 
                    
                    <br>
                
                    <label><b>Password</b></label><br>
                    
                    <input type ="password" name ="pwd" id ="pwd" placeholder="password" maxlength ="10" required/>

                    <br>             
                
<<<<<<< Updated upstream
                <div class="l-container">
                    <div class="checkbox">
                        <label><b>Remember ME</b></label>
                        <input type ="checkbox" name= "remember" id ="remember"/>
                    </div>
                <a class ="reset-psw" href ="#">Forgot Password?</a>
                </div>
=======
				
                <div class ="checkbox_container">
                    <input type ="checkbox" name= "remember" id ="remember"/>
					<span>Remember Me</span>

                    <a class ="reset-psw" href ="#">Forgot Password?</a>
                </div>
                <br><br>
>>>>>>> Stashed changes

                <button type ="submit" class ="login-btn"  name ="log" id ="log">LOG IN</button>

                
            
                <hr>
				
				<p class ="or">Or Sign In With</p>

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