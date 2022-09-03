<?php
	// Start Session
    session_start();
?>
<!DOCTYPE HTML>
<html>

<head>
  <title>Edit Account</title>
  <meta name="description" content="CPSC471 Project" />
  <meta name="keywords" content="CPSC471 Project" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.php">Hotel<span class="logo_colour">Alma</span></a></h1>
		  <!-- Make sure you put the proper page name here -->
          <h2>Edit Account</h2>
        </div>
      </div>
      <?php include 'menu.php'; ?>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
    <div class="sidebar">
        <!-- insert your sidebar items here -->
        <?php include 'administratorinformation.php'; ?>
      </div>
      <div id="content">
        <!-- insert the page content here -->
        <h1>Change Account Information</h1>
        <p>Please edit your account details below</p>
        <form action="administratorupdateaccount.php" method="post">
          <div class="form_settings">
            
            <p>
              <span>Change Password:</span>
              <input class= "contact" type="password" name="password" id="password">
            </p>
            
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="Save" /></p>
          </div>
        </form>
        <form action="deleteaccount.php" method="post">
          <div class="form_settings">
          <label><b> WARNING THIS CANNOT BE UNDONE!</label> 
            <p style="padding-top: 15px"><input class="submit" type="submit" name="contact_submitted" value="Delete Account" /></p>
          </div>
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
