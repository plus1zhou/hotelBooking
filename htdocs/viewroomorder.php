<?php

	// Start Session
	session_start();
	
	include 'dbconnect.php';
	$con = dbConnect();
?>
<!DOCTYPE HTML>
<html>

<head>
  <title>Room Order</title>
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
          <h2>View Your Room Order</h2>
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
				$query = "SELECT * FROM Reservation, RoomType, Customer WHERE R_Email=C_Email AND R_Room_Type=Roomtype_name ";

				if( $res = mysqli_query($con,$query) )
				{
					if( mysqli_num_rows($res) > 0 )
					{
		

						echo "<table width='140%'>";
					
						while( $row = mysqli_fetch_array($res) )
						{
							// First Row
							echo "<tr><th style='width:100px; text-align:center' >Check-in Date</th>";
							echo "<th style='width:100px; text-align:center' >Check-out Date</th>";
							echo "<th style='text-align:center'>Room Type</th>";
							echo "<th style='text-align:center'>Number of Room</th>";
							echo "<th style='text-align:center'>Price</tr>";
							
							
							// Second Row
							echo "<td style='text-align:center'>{$row['R_CID']}</td>";
							echo "<td style='text-align:center'>{$row['R_COD']}</td>";
							echo "<td style='text-align:center'>{$row['Roomtype_name']}</td>";
							echo "<td style='text-align:center'>{$row['R_Number_of_Room']}</td>";
							echo "<td style='text-align:center'>{$row['Roomtype_CAD']}</td>";
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
