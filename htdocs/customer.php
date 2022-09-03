<?php
	// Start Session
	session_start();
?>
<!DOCTYPE HTML>
<html>

<head>
  <title>Customer Register</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
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
          <h2>Customer Registration</h2>
        </div>
      </div>
      <?php include 'menu.php'; ?>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <div id="content2">
        <!-- insert the page content here -->
        <h1>Customer Registration</h1>
        <p>Please enter you details below</p>
        <form action="customerdb.php" method="post">
          <div class="form_settings">

            <p>
              <span>Email Address</span>
              <input class= "contact" type="text" name="user" id="username">
            </p>
            <p>
              <span>Full Name</span>
              <input class= "contact" type="text" name="fullname" id="fname">
            </p>
            <p>
              <span>Password</span>
              <input class= "contact" type="password" name="password" id="password">
            </p>
            <p>
              <span>Birth Date</span>
              <input class= "contact" type="date" name="birthday" id="bdate">
            </p>
            
            
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="Sign up" /></p>
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
