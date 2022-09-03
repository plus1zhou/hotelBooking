<?php
	// Start Session
    session_start();
    
?>

<!DOCTYPE HTML>
<html>

    

<head>
  <title>register</title>
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
          <h2>Registration</h2>
        </div>
      </div>
      <?php include 'menu.php'; ?>
    </div>
    <div id="site_content">
      <div id="contents">
        <!-- insert the page content here -->
        <h1>Account Registration</h1>
        <p>What type of account do you want to create</p>
        
        <form action="customer.php" method="post">
          <div class="form_settings">
            <p style="padding-top: 0px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="Customer" /></p>
          </div>
        </form>

        <form action="administrator.php" method="post">
            <div class="form_settings">
            <p style="padding-top: 0px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="Administrator" /></p>
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
