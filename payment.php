<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Payment Page</title>
       <link rel="stylesheet" href="css/payment.css" />
  </head>
  <body>

  <header>
  <?php include 'header.php'; ?>
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
  </body>

  <?php include('./footer.php'); ?>
</html>
