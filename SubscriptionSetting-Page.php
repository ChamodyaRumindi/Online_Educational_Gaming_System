<link rel="stylesheet" href="css/SubscriptionSetting-Page.css" />
<link rel="stylesheet" href="css/sidebar.css" />

<?php
 $title = 'SubscriptionSetting -Page';
 include 'header.php';
 include_once ('./includes/user-config.inc.php');
?>

<div class="main-div">
  <div class="sub-div1">

     <?php
    include 'user-sidebar.php';
    ?>
  </div>


  <div class="sub-div2">

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