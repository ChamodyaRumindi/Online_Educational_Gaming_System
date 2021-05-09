<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/choosesubscription.css" />
    <title>choose subscription page</title>
  </head>
  <body>

  <header>
  <?php include 'header.php'; ?>
  </header>


  	<!--Start content of the page-->
    <div class="containerDiv">
      <div class="headerTextDiv">
        <h1>Choose Your Subcription</h1>
        <p>You can start for free and Upgrade at anytime</p>
      </div>
      <div class="toggleSwithDiv">
        <p>Monthly</p>
        <label class="switch">
          <input type="checkbox" />
          <span class="slider round"></span>
        </label>
        <p>Annually (Save 20%)</p>
      </div>
      <div class="upgradeCardDiv">
        <div class="upgradeCard">
          <div class="contentDiv">
            <h3>Free</h3>
            <h3>$0/mon</h3>
            <button>Sign Up for free</button>
            <hr />
            <ul>
				<li>Lorem, ipsum dolor sit amet </li>
				<li>Lorem, ipsum dolor sit amet </li>
				<li>Lorem, ipsum dolor sit amet </li>
				<li>Lorem, ipsum dolor sit amet </li>
			</ul>
            <button>Sign Up for free</button>
          </div>
        </div>
		<div class="upgradeCard">
			<div class="contentDiv">
			  <h3>Free</h3>
			  <h3>$0/mon</h3>
			  <button>Sign Up for free</button>
			  <hr />
			  <ul>
				  <li>Lorem, ipsum dolor sit amet </li>
				  <li>Lorem, ipsum dolor sit amet </li>
				  <li>Lorem, ipsum dolor sit amet </li>
				  <li>Lorem, ipsum dolor sit amet </li>
			  </ul>
			  <button>Sign Up for free</button>
			</div>
		  </div>
    </div>

    <!--End content of the page-->
  </body>

  <?php include('./footer.php'); ?>
</html>
