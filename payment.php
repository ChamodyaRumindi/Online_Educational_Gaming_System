  <link rel="stylesheet" href="css/payment.css" />
  <?php 
      $title = 'Payment';
      include 'header.php'; 
  ?>
  </header>
  
    
    
    <div class="container">
      <div class="imgDiv">
        <img src="images/payment-methods.png" alt="payment-picture" width="500" />
      </div>
      <div class="formDiv">
        <form action="" method="post">
          <?php
           require 'includes/database.inc.php';
           $mid = $_SESSION["memberID"];
           $result = mysqli_query($conn, "SELECT email FROM Member_email WHERE memberID = $mid");
           $emails= mysqli_fetch_array($result);
           echo '<label for="name">Name:</label>
                 <input disabled type="text" name="userName" id="name" value = "'.$_SESSION["firstName"].' '.$_SESSION["lastName"].'"/><br />';
           echo '<label for="email">Email:</label>
                <input disabled type="email" name="email" id="email" value="'.$emails[0].'"/>';
           mysqli_close($conn);
          ?>
          <br />
          <p>Membership:Premium</p>
          <p>Plan:Monthly Subcription</p>
          <p>Amount:$19.00</p>
          <button type="submit">Pay Now</button>
        </form>
      </div>
    </div>

  <?php include('./footer.php'); ?>

