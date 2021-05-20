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
        <form action="" method="#">
          <label for="name">Name:</label>
          <input type="text" name="userName" id="name" /><br />
          <label for="email">Email:</label>
          <input type="email" name="email" id="email" />
          <br />
          <p>Membership:Premium</p>
          <p>Plan:Monthly Subcription</p>
          <p>Due:M$19.00</p>
          <p>Next Due date:M$19.00</p>
          <button type="submit">Pay Now</button>
        </form>
      </div>
    </div>

  <?php include('./footer.php'); ?>

