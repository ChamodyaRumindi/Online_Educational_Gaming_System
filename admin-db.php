
  <link rel="styleSheet" href="css/admin-db.css" />
  <link rel="styleSheet" href="css/sidebar.css" />
  <?php 
      $title = 'Admin Dashboard';
      include 'header.php'; 
      include_once ('./includes/admin-config.inc.php');
  ?>
  <?php
    require 'includes/database.inc.php';

    $result = mysqli_query($conn, "SELECT COUNT(memberID) FROM Member");
    $totalMembers = mysqli_fetch_array($result);

    $result = mysqli_query($conn, "SELECT COUNT(memberID) FROM Member WHERE TID = 2");
    $freeMembers = mysqli_fetch_array($result);

    $result = mysqli_query($conn, "SELECT COUNT(memberID) FROM Member WHERE TID = 1");
    $premiumMembers = mysqli_fetch_array($result);

    $result = mysqli_query($conn, "SELECT COALESCE(SUM(amount),0) FROM Payment WHERE p_datetime BETWEEN NOW() - INTERVAL 30 DAY AND NOW()");
    $totalIncome = mysqli_fetch_array($result);

    echo $totalMembers[0];
    echo $premiumMembers[0];
    echo $freeMembers[0];
    echo $totalIncome[0];

    echo '<script>
          document.addEventListener("DOMContentLoaded", () => {
            dbCounter("c1", 0, '.$totalMembers[0].', 2500);
            dbCounter("c2", 0, '.$premiumMembers[0].', 2500);
            dbCounter("c3", 0, '.$freeMembers[0].', 2500);
            dbCounter("c4", 0, '.$totalIncome[0].', 2500);
          });
          </script>';

    $result = mysqli_query($conn, "SELECT COUNT(memberID) FROM Membership WHERE m_status = 'Expired'");
    $overdueMembers = mysqli_fetch_array($result);

    $result = mysqli_query($conn, "SELECT COUNT(memberID) FROM Membership WHERE start_date BETWEEN NOW() - INTERVAL 30 DAY AND NOW()");
    $newMembers = mysqli_fetch_array($result);

    $result = mysqli_query($conn, "SELECT COUNT(MID)FROM Member AS M INNER JOIN Membership AS MM ON MM.memberID = M.memberID WHERE M.TID = 2 AND MM.start_date BETWEEN NOW() - INTERVAL 30 DAY AND NOW();");
    $newFreeMembers = mysqli_fetch_array($result);

    $result = mysqli_query($conn, "SELECT COUNT(MID)FROM Member AS M INNER JOIN Membership AS MM ON MM.memberID = M.memberID WHERE M.TID = 1 AND MM.start_date BETWEEN NOW() - INTERVAL 30 DAY AND NOW();");
    $newPremiumMembers = mysqli_fetch_array($result);

  ?>
  
  <div class="a-container">
      <?php include 'admin-sidebar.php'; ?>
      <div class="db-container">
        <div class="db-counter">
          <div class="counter-coulmn">
            <span id="c1" class="counter-item"></span>
            <h4>Total members</h4>
          </div>
          <div class="counter-coulmn">
            <span id="c2" class="counter-item"></span>
            <h4>Premium members</h4>
          </div>
          <div class="counter-coulmn">
            <span id="c3" class="counter-item"></span>
            <h4>Free members</h4>
          </div>
          <div class="counter-coulmn">
            <span id="c4" class="counter-item"></span>
            <h4>Total Income (Last 30 days)</h4>
          </div>
        </div>
        
        <div class="in-numbers">
          <?php
            echo '<div>
                  <div class="in-numbers-item">
                    <h3>Total Overdue Members:</h3>
                    <p>'.$overdueMembers[0].'</p>
                  </div>
                  <div class="in-numbers-item">
                    <h3>New Members Registerd in last 30 days:</h3>
                    <p>'.$newMembers[0].'</p>
                  </div>
                  <div class="in-numbers-item">
                    <h3>New Free Members Registerd in last 30 days:</h3>
                    <p>'.$newPremiumMembers[0].'</p>
                  </div>
                  <div class="in-numbers-item">
                    <h3>New Premium Members Registerd in last 30 days:</h3>
                    <p>'.$newFreeMembers[0].'</p>
                  </div>
                </div>'
          ?>
        </div>
      </div>
    </div>
<script src="./js/admin-db.js"></script>
<?php include('./footer.php'); ?>

