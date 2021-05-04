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

        <form action="" method="post">
          <label for="name">Game Name:</label>
          <input type="text" name="gamename" id="name" required /> <br />

          <label for="desc">Description:</label>
          <textarea name="description" id="desc" rows="10" cols="30"></textarea>
          <br />

          <label for="inst">Instructions:</label>
          <textarea
            name="instructions"
            id="inst"
            rows="10"
            cols="30"
          ></textarea>
          <br />

          <label for="grades">Grade:</label>
          <select name="grade" id="grades">
            <option value="PreSchool">PreSchool</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
          </select>
          <br />

          <label for="categories">Category:</label>
          <select name="category" id="categories">
            <option value="Quiz">Quiz</option>
            <option value="Puzzel">Puzzel</option>
          </select>
          <br />

          <label for="gfile">Game File:</label>
          <input type="file" name="gamefile" id="gfile" /> <br />

          <label for="gthumbnail">Thumbnail:</label>
          <input type="file" name="thumbnail" id="gthumbnail" /> <br />
          <input
            type="reset"
            onclick="return confirm('Your input data will be lost!')"
          />
          <input
            type="submit"
            value="Add Game"
            onclick="return confirm('Please confirm!')"
          />
        </form>
      </div>
    </div>
  </body>

  <?php include('./footer.php'); ?>
</html>
