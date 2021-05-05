<?php

    include_once 'header.php';

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

                <form action ="includes/signup.inc.php" method ="POST">
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