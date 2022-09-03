<?php
	// Start Session
	session_start();
?>
<!DOCTYPE HTML>
<html>

<head>
  <title>Customer Account</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
</head>

<body>
<?php $_SESSION["userType"] = "customer" ?>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.php">Hotel<span class="logo_colour">Alma</span></a></h1>
		  <!-- Make sure you put the proper page name here -->
          <h2>Your Account</h2>
        </div>
      </div>
      <?php include 'menu.php'; ?>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      
      <div id="content">

        <!-- insert the page content here -->

      <!-- View room -->
      <form id="form_39437" class="appnitro"  method="post" action="viewroomorder.php" method="post">
			<div class="form_description">
				<h2>View Room Order</h2>
		    </div>						
			<ul >	
			
			<div class="buttons">
				<input type="hidden" name="form_id" value="39439" />
				<input id="submit" class="button_text" type="submit" name="View" value="View" />
			</div>
			</ul>
			</form>

	  <!-- View event -->
      <form id="form_39437" class="appnitro"  method="post" action="vieweventorder.php" method="post">
			<div class="form_description">
				<h2>View Event Order</h2>
		    </div>						
			<ul >	
			
			<div class="buttons">
				<input type="hidden" name="form_id" value="39439" />
				<input id="submit" class="button_text" type="submit" name="View" value="View" />
			</div>
			</ul>
			</form>	

      <!-- Edit Account -->
      <form id="form_39437" class="appnitro"  method="post" action="customereditaccount.php" method="post">
			<div class="form_description">
				<h2>Account Information</h2>
		    </div>						
			<ul >	
			
			<div class="buttons">
				<input type="hidden" name="form_id" value="39439" />
				<input id="submit" class="button_text" type="submit" name="View" value="Edit" />
			</div>
			</ul>
			</form>

      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
		Hotel Alma Online Reservation System 「CPSC471-TUT01-GROUP05」
    </div>
  </div>
</body>
</html>
