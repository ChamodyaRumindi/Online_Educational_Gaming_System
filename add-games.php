<!DOCTYPE html>
<html>
  <head>
    <link rel="styleSheet" href="css/admin-sidebar.css" />
    <link rel="styleSheet" href="css/add-games.css" />
    <?php include 'header.php'; ?>
  </head>

  <body>
    <div class="a-container">
      <?php include 'admin-sidebar.php'; ?>
      <div class="ag-container">
        <h2>- Add a game -</h2>

        <form action="includes/addgame.inc.php" method="post" name="addgamef" onsubmit="return validateForm()" enctype="multipart/form-data" >
          <div class="form-item">
            <label for="name">Game Name:</label>
            <input type="text" name="gamename" id="name" required />
          </div>

          <div class="form-item">
            <label for="desc">Description:</label>
            <textarea
              name="description"
              id="desc"
              rows="5"
              cols="50"
            ></textarea>
          </div>

          <div class="form-item">
            <label for="inst">Instructions:</label>
            <textarea
              name="instructions"
              id="inst"
              rows="5"
              cols="50"
            ></textarea>
          </div>

          
          <?php
              require 'includes/database.inc.php';

              $sql = "SELECT gradeName FROM Grade";
              $result = mysqli_query($conn, $sql);

              if (mysqli_num_rows($result) > 0) {
                echo '<div class="form-item">';
                echo '<label for="grades">Grade:</label>';
                echo '<select name="grade" id="grades" required>';
                echo '<option disabled selected value> -- Select Grade -- </option>';
                while($row = mysqli_fetch_assoc($result)) {
                  echo '<option value="'.$row['gradeName'].'" >'.$row["gradeName"].'</option>';  
                }
                echo '</select>';
                echo '</div>';
              } else {
                echo "O Grades Found!";
              }

              $sql = "SELECT categoryName FROM Category";
              $result = mysqli_query($conn, $sql);

              if (mysqli_num_rows($result) > 0) {
                echo '<div class="form-item">';
                echo '<label for="categories">Category:</label>';
                echo '<select name="category" id="categories" required>';
                echo '<option disabled selected value> -- Select Category -- </option>';
                while($row = mysqli_fetch_assoc($result)) {
                  echo '<option value="'.$row['categoryName'].'" >'.$row["categoryName"].'</option>';
                }
                echo '</select>';
                echo '</div>';
              } else {
                echo "O Categories Found!";
              }

              $sql = "SELECT subjectName FROM Subject";
              $result = mysqli_query($conn, $sql);

              if (mysqli_num_rows($result) > 0) {
                echo '<div class="form-item">';
                echo '<label for="subjects">Subject:</label>';
                echo '<select name="subject" id="subjects" required>';
                echo '<option disabled selected value> -- Select Subject -- </option>';
                while($row = mysqli_fetch_assoc($result)) {
                  echo '<option value="'.$row['subjectName'].'" >'.$row["subjectName"].'</option>';
                }
                echo '</select>';
                echo '</div>';
              } else {
                echo "O Subjects Found!";
              }

              $sql = "SELECT devID FROM Developer";
              $result = mysqli_query($conn, $sql);

              if (mysqli_num_rows($result) > 0) {
                echo '<div class="form-item">';
                echo '<label for="developers">Developer ID:</label>';
                echo '<select name="developer" id="developers" required>';
                echo '<option disabled selected value> -- Select Developer -- </option>';
                while($row = mysqli_fetch_assoc($result)) {
                  echo '<option value="'.$row['devID'].'" >'.$row["devID"].'</option>';
                }
                echo '</select>';
                echo '</div>';
              } else {
                echo "O Developers Found!";
              }

              mysqli_close($conn); 
          ?>

          <div class="form-item">
            <label for="gaccess">Access Level:</label>'
            <select name="access" id="gaccess" required>
                <option disabled selected value> -- Select Access Level -- </option>
                <option value="Free">Free</option>
                <option value="Premium">Premium</option>
            </select>
          </div>

          <div class="form-item">
            <label for="gfile">Game File:</label>
            <input type="file" name="gamefile" id="gfile" required/>
          </div>

          <div class="form-item">
            <label for="gthumbnail">Thumbnail:</label>
            <input type="file" name="thumbnail" id="gthumbnail" />
          </div>

          <div class="ag-buttons">
            <button class="reset-btn" type= "reset" onclick="return confirm('All data will be lost!')">Reset</button>
            <button class="addgame-btn" name = "submit" type= "submit" onclick="return confirm('Please confirm!')">Add Game</button>
          </div>
        </form>
        <div class= "output">
        <?php
          if (isset($_GET["error"])) {
            if ($_GET["error"] == "none") {
              echo "<h1>Successfully Added!</h1>";
            }
            if ($_GET["error"] == "1") {
              echo "<p>You can not upload a game file of this type!. only js,html are allowd</p>";
            }
            if ($_GET["error"] == "2") {
              echo "<p>There was an error uplaoding game file!</p>";
            }
            if ($_GET["error"] == "3") {
              echo "<p>Game file is too big!</p>";
            }
            if ($_GET["error"] == "4") {
              echo "<p>You can not upload a game file of this type!. only jpg,jpeg and png are allowd</p>";
            }
            if ($_GET["error"] == "5") {
              echo "<p>here was an error uplaoding thumbnail!</p>";
            }
            if ($_GET["error"] == "6") {
              echo "<p>Thumbnail is too big!</p>";
            }
          }
          ?>
      </div>
      </div>
    </div>
  </body>
  <?php include('./footer.php'); ?>
</html>