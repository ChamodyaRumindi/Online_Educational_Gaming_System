    <title>Dashboard</title>

    <link rel="styleSheet" href="css/user-db.css" />
    <link rel="styleSheet" href="css/sidebar.css" />
    <?php 
      $title = 'User Dashboard';
      include 'header.php'; 
    ?>
  </head>

  <body>
    <div class="u-container">
      <?php include 'user-sidebar.php'; ?>
      <div class="db-container">
        <div class="history">
            <p id="p2">MY SCORE</p>
            <h2>123456</h2>
            <table style="width: 100%" border="1" >
               
               <tr>
                   <th>Game</th>
                   <th>Time</th>
                   <th>Score</th>
               </tr>

               <tbody class="table-body">
               <tr id="row1">
                 <td></td>
                 <td></td>
                 <td></td>
               </tr>
               </tbody>

            </table>
        </div>
        <div class="stats">
            <p id="p3"><b> My Status </b></p>
            
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