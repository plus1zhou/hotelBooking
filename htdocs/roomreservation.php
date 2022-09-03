<?php
	// Start Session
	session_start();
	
	include 'dbconnect.php';
	$con = dbConnect();
?>
<!DOCTYPE HTML>
<html>

<head>
  <title>Room Reservation</title>
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
          <h2>View Our Room</h2>
        </div>
      </div>
      <?php include 'menu.php'; ?>
    </div>
    <div id="content_header"></div>
    <div id="site_content">

	<div class="sidebar">
        <!-- insert your sidebar items here -->
        <?php
		echo "<img src='picture/double.png' />";
		echo "<img src='picture/family.png' />";
		echo "<img src='picture/queen.png' />";
		echo "<img src='picture/single.png' />";
        ?>
      </div>
      
      <div id="content">
        <!-- insert the page content here -->
        <h1>View Room:</h1>
		<?php
			
			if( !mysqli_connect_errno($con) )
			{
				$query = "SELECT * FROM RoomType";

				if( $res = mysqli_query($con,$query) )
				{
					if( mysqli_num_rows($res) > 0 )
					{

						echo "<table width='100%'>";
					
						while( $row = mysqli_fetch_array($res) )
						{
							// First Row
							echo "<tr><th style='width:100px; text-align:center' >Room Type</th>";
							echo "<th style='text-align:center'>Description</th>";
							echo "<th style='text-align:center'>Number of Room</th>";
							echo "<th style='text-align:center'>Price</tr>";
							
							
							// Second Row
							echo "<td style='text-align:center'>{$row['Roomtype_name']}</td>";
							echo "<td style='text-align:center'>{$row['Roomtype_des']}</td>";
							echo "<td style='text-align:center'>{$row['Roomtype_number']}</td>";
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

		<form action="reservation.php" method="post" style='text-align:center'>
          <div class="form_settings">
            <p style="padding-top: 0px"><input class="submit" type="submit" name="reservation" value="Reservation" /></p>
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
