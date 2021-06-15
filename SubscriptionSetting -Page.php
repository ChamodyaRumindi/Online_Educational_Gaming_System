<link rel="stylesheet" href="css/SubscriptionSetting -Page.css" />

<?php

 $title = 'SubscriptionSetting -Page';
 include 'header.php';
?>

<div class="main-div">
  <div class="sub-div1">

     <img src="./images/defaultProfile.png" alt="user-profile"width="200px"/>
     <h4>Nethmini Tharuka</h4>
     <p><small>Premium Member</small></p>

     <div class="user-div">
       
       <ul>
       <li class="select-div">Dashboard</li>
       <li class="select-div" id="active">Subsription</li>
       <li class="select-div">Settings</li>
       <li class="select-div">Log Out</li>
       </ul>
     </div>


  </div>

  
  

  <div class="sub-div2">

  <div class="line-break"></div>


  <div class="sub-divContainer">
  <h3>Your Subscription : Premium Membership</h3>
  <h3>Plan              : Monthly</h3>
  <h3>Renewal Date      : 21/03/2021</h3>

  <div class="button-div">
    <button type="submit" name="RenewNow"  class="RenewNow-button" onclick="return confirm('Are you sure? Renew Now!')">Renew Now</button>
    <button type="submit" name="CancelSubscription"  class="CancelSubscription-button" onclick="return confirm('Are you sure? Cancel Subscription!')" >Cancel Subscription</button>
  </div>
  </div>



  </div>





</div>



<?php include('./footer.php'); ?>