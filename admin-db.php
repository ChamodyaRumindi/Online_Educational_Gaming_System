<!DOCTYPE html>
<html>
  <head>
    <link rel="styleSheet" href="css/admin-db.css" />
    <link rel="styleSheet" href="css/admin-sidebar.css" />
    <?php include 'header.php'; ?>
  </head>

  <body>
    <div class="a-container">
      <?php include 'admin-sidebar.php'; ?>
      <div class="db-container">
        <div class="in-numbers">
          <div class="in-numbers-item">
            <h3>Total Members:</h3>
            <p>110</p>
          </div>
          <div class="in-numbers-item">
            <h3>Total Free Members:</h3>
            <p>60</p>
          </div>
          <div class="in-numbers-item">
            <h3>Total Premium Members:</h3>
            <p>40</p>
          </div>
          <div class="in-numbers-item">
            <h3>Total Overdue Members:</h3>
            <p>10</p>
          </div>
          <div class="in-numbers-item">
            <h3>New Members Registerd in last 30 days:</h3>
            <p>50</p>
          </div>
          <div class="in-numbers-item">
            <h3>New Free Members Registerd in last 30 days:</h3>
            <p>30</p>
          </div>
          <div class="in-numbers-item">
            <h3>New Premium Members Registerd in last 30 days:</h3>
            <p>20</p>
          </div>
          <div class="in-numbers-item">
            <h3>Total Income in last 30 days:</h3>
            <p>400 USD</p>
          </div>
        </div>
        <div class="graphical">
          <div class="p-chart">
            <p>Members</p>
          </div>
          <div class="m-chart">
            <p>Member Registrations - past 6 Months</p>
          </div>
          <div class="i-chart">
            <p>income - past 6 months</p>
          </div>
        </div>
      </div>
    </div>
  </body>
  <?php include('./footer.php'); ?>
</html>
