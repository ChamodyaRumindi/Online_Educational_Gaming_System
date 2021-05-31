    

    <link rel="styleSheet" href="css/SubscriptionSetting -Page.css" />
    <link rel="styleSheet" href="css/sidebar.css" />
    <?php 
      $title = 'SubscribeSetting-Page';
      include 'header.php'; 
    ?>



<link href="css/SubscriptionSetting-Page.css" rel="stylesheet" type="text/css">
<div style="display: flex;flex-direction: row;justify-content: space-around;width: 100%;"


        
        
        

    <div>
    <div class="u-container">
            <?php include 'user-sidebar.php'; ?>
        <div style="width: 50%;">
             
        </div>
        </div>
     
        <div style="width: 50%;">
        
        Your Subscription : Premium Membership<br></br>
        Plan              : Monthly<br></br>
        Renewal Date      : 21/03/2021<br></br>

        
        <div class="buttons">
          <input type="button" value="Renew Now" class="Renew-Now" onClick="Renew Now ()">
          <input type="button" value="Cancel Subscription" class="Cancel-Subscription" onClick="Cancel Subscription()">
        </div>
 
        </div>

    </div>
 

  <?php include('./footer.php'); ?>