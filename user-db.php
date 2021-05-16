<!DOCTYPE html>
<html>
  <head>
    <link rel="styleSheet" href="css/user-db.css" />
    <link rel="styleSheet" href="css/sidebar.css" />
    <?php include 'header.php'; ?>
  </head>

  <body>
    <div class="u-container">
      <?php include 'user-sidebar.php'; ?>
      <div class="db-container">
        <div class="history">
            <p id="p2">MY SCORE</p>
            <h2>123456</h2>
            <table style="width: 100%" border="1">
               <tr>
                   <td colspan="3">Clear history</td>
               </tr>
               <tr>
                   <td>Game</td>
                   <td>Time</td>
                   <td>Score</td>
               </tr>
               <tr id="row1">
                 <td></td>
                 <td></td>
                 <td></td>
               </tr>
            </table>
        </div>
        <div class="stats">
            <p id="p3">
               <center>My Status</center>
            </p>
            Type of subscription :- Premium<br><br>
            Member since :- 21/01/2021<br><br>
            Total time played :- 4:45:34<br><br>
            Number of games played :- 24<br><br>
            Rank :- Gold<br>
        </div>
      </div>
    </div>
  </body>

  <?php include('./footer.php'); ?>
</html>