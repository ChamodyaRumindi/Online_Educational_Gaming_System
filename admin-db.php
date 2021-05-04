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
        <div class="innumbers">
          <h3>Total Members:</h3>
          <h3>Total Free Members:</h3>
          <h3>Total Premium Members:</h3>
          <h3>New Members Registerd in last 30 days:</h3>
          <h3>New Free Members Registerd in last 30 days:</h3>
          <h3>New Premium Members Registerd in last 30 days:</h3>
          <h3>Total Income in last 30 days:</h3>
        </div>
        <div class="graphical"></div>
      </div>
    </div>
  </body>
  <?php include('./footer.php'); ?>
</html>
