<?php
	// Start Session
	session_start();
	
	include 'dbconnect.php';
	$con = dbConnect();
?>
<!DOCTYPE HTML>
<html>

<head>
  <title>View Event</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
</head>

<body>
<?php // Ensure that user is logged in first.
	if( $_SESSION['userType'] != "administrator" )
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
          <h2>View Your Event</h2>
        </div>
      </div>
      <?php include 'menu.php'; ?>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      
      <div id="content">
        <!-- insert the page content here -->
        <h1>View:</h1>
		<?php
			
			if( !mysqli_connect_errno($con) )
			{
				$query = "SELECT * FROM Booking, EventType, Customer WHERE B_Email=C_Email AND B_Eventtype=Eventtype_name ";

				if( $res = mysqli_query($con,$query) )
				{
					if( mysqli_num_rows($res) > 0 )
					{
						
						echo "<table width='140%'>";
					
						while( $row = mysqli_fetch_array($res) )
						{
							// First Row
							echo "<tr><th style='width:100px; text-align:center' >Date</th>";
							echo "<th style='text-align:center'>Event Type</th>";
							echo "<th style='text-align:center'>Customer Email</th>";
							echo "<th style='text-align:center'>Price</tr>";
							
							
							// Second Row
							echo "<td style='text-align:center'>{$row['B_Date']}</td>";
							echo "<td style='text-align:center'>{$row['Eventtype_name']}</td>";
							echo "<td style='text-align:center'>{$row['B_Email']}</td>";
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


		
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
		Hotel Alma Online Reservation System 「CPSC471-TUT01-GROUP05」
    </div>
  </div>
</body>
</html>
