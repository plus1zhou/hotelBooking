<?php
	// Start Session
	session_start();
?>
<!DOCTYPE HTML>
<html>

<head>
  <title>Administrator Account</title>
  <meta name="description" content="CPSC471 Project" />
  <meta name="keywords" content="CPSC471 Project" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
</head>

<body>
<?php $_SESSION["userType"] = "administrator" ?>
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
      <div class="sidebar">
        <!-- insert your sidebar items here -->
        <?php include 'administratorinformation.php'; ?>
      </div>
      <div id="content">

        <!-- insert the page content here -->

        <form id="form_39437" class="appnitro"  method="post" action="viewreservedroom.php" method="post">
			<div class="form_description">
				<h2>View Reserved Rooms</h2>
		    </div>						
			<ul >	
			
			<div class="buttons">
				<input type="hidden" name="form_id" value="39437" />
				<input id="submit" class="button_text" type="submit" name="View" value="View" />
			</div>
			</ul>
			</form>
		<form id="form_39438" class="appnitro"  method="post" action="viewbookedevent.php" method="post">
			<div class="form_description">
				<h2>View Booked Events</h2>
		    </div>						
			<ul >	
			
			<div class="buttons">
				<input type="hidden" name="form_id" value="39438" />
				<input id="submit" class="button_text" type="submit" name="View" value="View" />
			</div>
			</ul>
			</form>
		<form id="form_39438" class="appnitro"  method="post" action="createroom.php" method="post">
			<div class="form_description">
				<h2>Create Rooms</h2>
		    </div>						
			<ul >	
			
			<div class="buttons">
				<input type="hidden" name="form_id" value="39438" />
				<input id="submit" class="button_text" type="submit" name="Create" value="Creare" />
			</div>
			</ul>
			</form>

		<form id="form_39438" class="appnitro"  method="post" action="createevent.php" method="post">
			<div class="form_description">
				<h2>Create Events</h2>
		    </div>						
			<ul >	
			
			<div class="buttons">
				<input type="hidden" name="form_id" value="39438" />
				<input id="submit" class="button_text" type="submit" name="Create" value="Create" />
			</div>
			</ul>
			</form>

     	 <form id="form_39439" class="appnitro"  method="post" action="administratoreditaccount.php" method="post">
			<div class="form_description">
				<h2>Edit Account</h2>
		    </div>						
			<ul >	
			
			<div class="buttons">
				<input type="hidden" name="form_id" value="39439" />
				<input id="submit" class="button_text" type="submit" name="Edit" value="Edit" />
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
