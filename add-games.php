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

          <div class="form-item">
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
          </div>

          <div class="form-item">
            <label for="categories">Category:</label>
            <select name="category" id="categories">
              <option value="Quiz">Quiz</option>
              <option value="Puzzel">Puzzel</option>
            </select>
          </div>

          <div class="form-item">
            <label for="gfile">Game File:</label>
            <input type="file" name="gamefile" id="gfile" />
          </div>

          <div class="form-item">
            <label for="gthumbnail">Thumbnail:</label>
            <input type="file" name="thumbnail" id="gthumbnail" />
          </div>

          <div class="ag-buttons">
            <input
              type="reset"
              onclick="return confirm('Your input data will be lost!')"
            />
            <input
              type="submit"
              value="Add Game"
              onclick="return confirm('Please confirm!')"
            />
          </div>
        </form>
      </div>
    </div>
  </body>

  <?php include('./footer.php'); ?>
</html>
