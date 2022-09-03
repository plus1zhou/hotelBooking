<?php
	// Start Session
	session_start();
	
	include 'dbconnect.php';
	$con = dbConnect();
?>
<!DOCTYPE HTML>
<html>

<head>
  <title>Event Booking
  </title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
</head>

<body>
<?php // Ensure that user is logged in first.
	if( $_SESSION['userType'] != "customer" )
	{
		// Redirect to Sign up
		echo "<script> location.href='register.php'; </script>";
		exit;
	}
?>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.php">Hotel<span class="logo_colour">Alma</span></a></h1>
		  <!-- Make sure you put the proper page name here -->
          <h2>View Our Event</h2>
        </div>
      </div>
      <?php include 'menu.php'; ?>
    </div>
    <div id="content_header"></div>
    <div id="site_content">

	  <div class="sidebar">
        <!-- insert your sidebar items here -->
        <?php
		echo "<img src='picture/indoor.jpeg' />";
		echo "<img src='picture/meeting.jpeg' />";
		echo "<img src='picture/outdoor.jpeg' />";
		echo "<img src='picture/party.jpeg' />";
        ?>
      </div>
      
      <div id="content">
        <!-- insert the page content here -->
        <h1>View Event:</h1>
		<?php
			
			if( !mysqli_connect_errno($con) )
			{
				$query = "SELECT * FROM EventType";

				if( $res = mysqli_query($con,$query) )
				{
					if( mysqli_num_rows($res) > 0 )
					{
			

						echo "<table width='100%'>";
					
						while( $row = mysqli_fetch_array($res) )
						{
							// First Row
							echo "<tr><th style='width:100px; text-align:center' >Event Type</th>";
							echo "<th style='text-align:center'>Description</th>";
							echo "<th style='text-align:center'>Location</th>";
							echo "<th style='text-align:center'>Price</tr>";
							
							
							// Second Row
							echo "<td style='text-align:center'>{$row['Eventtype_name']}</td>";
							echo "<td style='text-align:center'>{$row['Eventtype_des']}</td>";
							echo "<td style='text-align:center'>{$row['EventLocation']}</td>";
							echo "<td style='text-align:center'>{$row['Eventtype_CAD']}</td>";
						}
					
						echo "</table>";

					}
				}
				else{
					echo "ERROR: could not execute $sql. " . mysqli_error($con);
				}	
			}	
			
		?>

		<form action="booking.php" method="post" style='text-align:center'>
          <div class="form_settings">
            <p style="padding-top: 0px"><input class="submit" type="submit" name="book" value="Book" /></p>
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
