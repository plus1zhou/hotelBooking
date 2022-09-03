<?php
	// Start Session
	session_start();
?>
<!DOCTYPE HTML>
<html>

<head>
  <title>Staff</title>
  <meta name="description" content="CPSC471 Project" />
  <meta name="keywords" content="CPSC471 Project" />
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
          <h2>Our Staff</h2>
        </div>
      </div>
      <?php include 'menu.php'; ?>
    </div>
    <div id="content_header"></div>
    <div id="site_content">

    <div class="sidebar">
        <!-- insert your sidebar items here -->
        <?php
		echo "<img src='picture/3.jpeg' />";
		echo "<img src='picture/4.jpeg' />";
	
        ?>
      </div>
    
      <div id="content">
        <div style="text-align:center;"> 
        <?php
        echo "<img src='picture/manager.png' />";
        echo "<img src='picture/chef.png' />";
        echo "<img src='picture/receptionist.png' />";
        echo "<img src='picture/housekeeper.png' />";
        ?>
        </div>
        
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      Hotel Alma Online Reservation System 「CPSC471-TUT01-GROUP05」
    </div>
  </div>
</body>
</html>
