  <link rel="styleSheet" href="css/sidebar.css" />
  <link rel="styleSheet" href="css/all-members.css" />
  <link rel="styleSheet" href="css/messagebox.css" />
  <?php 
      $title = 'Add Members';
      include 'header.php'; 
      include_once ('./includes/admin-config.inc.php');
  ?>


  <body>
    <div class="a-container">
      <?php include 'admin-sidebar.php'; ?>
      <div class="alm-container">
      <div id="msgbox-area" class="msgbox-area"></div>
        <h2>Members</h2>
        <div class = "table" >
        <table class = "member-table">
          <tr>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Joined Date</th>
            <th>Current Rank</th>
            <th>Membership Type</th>
            <th>Plan</th>
            <th>Status</th>
            <th>Renewal Date</th>
            <th></th>
            <th></th>
          </tr>
          <?php
              require 'includes/database.inc.php';

              $sql = "SELECT M.memberID, M.username, M.firstName, M.lastName, M.m_rank, M.TID, ME.email, MM.m_plan, MM.m_status, MM.start_date, MM.renewal_date
              FROM Member AS M
              JOIN Member_email AS ME ON ME.memberID = M.memberID
              JOIN Membership AS MM ON MM.memberID = M.memberID";
              $result = mysqli_query($conn, $sql);

              if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                  echo '<tr>';
                  echo '<td>'.$row["firstName"].' '.$row["lastName"].'</td>';
                  echo '<td>'.$row["username"].'</td>';
                  echo '<td>'.$row["email"].'</td>';
                  echo '<td>'.$row["start_date"].'</td>';
                  echo '<td>'.$row["m_rank"].'</td>';
                  if($row["TID"] == 1){
                    echo '<td>Premium</td>';
                  }
                  else if($row["TID"] == 2){
                    echo '<td>Free</td>';
                  }
                  echo '<td>'.$row["m_plan"].'</td>';
                  echo '<td>'.$row["m_status"].'</td>';
                  echo '<td>'.$row["renewal_date"].'</td>';
                  echo '<td><a href="modifymember.php?id='.$row['memberID'].'" class="tablebtn">Modify</a></td>';
                  echo '<td><form action="includes/deletemember.inc.php" name="delete-member" method="get">
                        <input type="hidden" name="rowid" value="'.$row['memberID'].'">
                        <button class="tablebtn2" type="submit" onClick="return confirm(\'Are you sure?. this operation cannot be undone!\')">Delete</button>
                        </form></td>';
                  echo '</tr>';
                }
              }
              else {
                echo '<tr>';
                echo '<td colspan="10">O Members Found!</td>';
                echo '</tr>';
              }
          ?>
        </table>
        </div>
      </div>
    </div>
  <div class= "output">
        
  </div>
  <script src="./js/messagebox.js"></script>
<?php
  if (isset($_GET["error"])) {
    if ($_GET["error"] == "none") {
      echo '<script> msgboxbox.show("Member successfully deleted from the database"); </script>';
    }
    if ($_GET["error"] == "mmnone") {
      echo '<script> msgboxbox.show("Member successfully modified"); </script>';
    }
  }
?>

  <?php include('./footer.php'); ?>

