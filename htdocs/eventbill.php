<?php
	// Start Session
	session_start();
	
	include 'dbconnect.php';
	$con = dbConnect();
?>
<!DOCTYPE HTML>
<html>

<head>
  <title>Event Bill</title>
  <meta name="description" content="CPSC471 Project" />
  <meta name="keywords" content="CPSC471 Project" />
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
          <h2>View Your Bill</h2>
        </div>
      </div>
      <?php include 'menu.php'; ?>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      
      <div id="content">
        <!-- insert the page content here -->
        <body>

		<?php
			include_once 'dbconnect.php';
	
			// Connect to Database
			$con = dbConnect();
	
			// Connected? 
			if( !mysqli_connect_errno($con) )
			{
			
				
				$query = "SELECT * FROM Booking, EventType WHERE BookingID='{$_SESSION['userID']}' AND B_Eventtype=Eventtype_name ";
				$roomtype=$_SESSION['B_Eventtype'];


				if( $res = mysqli_query($con,$query) )
				{
					if( mysqli_num_rows($res) > 0 )
					{
						echo "<table>";

						while( $row = mysqli_fetch_array($res))
						{
							// Row 1: Date
							echo "<tr>";
							echo "<td>Date: " . $row['B_Date'] . "</td>";
							echo "</tr>";
						
							// Row 2: Description
		
							echo "<tr>";
							echo "<td>Room Type: " . $row['B_Eventtype'] . "</td>";
							echo "</tr>";

							echo "<tr>";
							echo "<td>Cost: " . $row['Eventtype_CAD'] . " CAD</td>";
							echo "</tr>";



						}
							echo "</table>";
							mysqli_free_result($res);
						}
					else // No results? 
					{
						echo "No matching records found!";
					}
				}
				else // Error in SQL Statment
				{
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
