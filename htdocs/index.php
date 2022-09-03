<?php
	// Start Session
  session_start();
  If(!isset($_SESSION['userType'])||!isset($_SESSION['userID'])){
    $_SESSION['userType'] = 'guest';
		$_SESSION['userID'] = NULL;
  }
	
	if( isset($_GET['logout']) && $_GET['logout'] == 'true' )
	{
		$_SESSION['userType'] = 'guest';
		$_SESSION['userID'] = NULL;
	}
?>

<!DOCTYPE html>
<html>

<head>
  <title>HotelAlma</title>
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
		  <h2>Welcome!</h2>
        </div>
      </div>
      <?php include 'menu.php'; ?>
    </div>
    <div id="site_content">
      <div id="content">
        <!-- insert the page content here -->
        <h1>Welcome to Our Hotel Alma Reservation System!</h1>
        <p>This site is for reserve a good night in Calgary! Please create an account and get started!</p>
      </div>
      <div> 
        <?php
        echo "<img src='picture/1.png' />";
        ?>
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      Hotel Alma Online Reservation System 「CPSC471-TUT01-GROUP05」
    </div>
  </div>
</body>
</html>
