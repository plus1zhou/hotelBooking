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
		  <h2>Booking!</h2>
        </div>
      </div>
      <?php include 'menu.php'; ?>
    </div>
    <div id="site_content">
      <div id="content" >




	  <form action="bookingdb.php" method="POST">
	  	<table >
			<tr>
				<th style='text-align:center'>Date   :</th>
				<td><input type="date" name="date" max="2979-12-31" size=35></td>
			</tr>

			<tr>
				<th style='text-align:center'>Event Type   :</th>
				<td>
				<?php
					echo "<select name=event_type>";
					$qup="select Eventtype_name from EventType";
					$con=mysqli_connect("localhost","root","root",'Hotel');
					$rs=mysqli_query($con,$qup);
					while($res=mysqli_fetch_row($rs))
					{
						echo "<option value='".$res[0]."'>".$res[0]."</option>";
					}
					echo "<select>";
					echo "</td>";
				?>
	
			</tr>


			<tr>
				<th style='text-align:center'>Email   :</th>
				<td colspan=4><input type="text" name="user" size=35></td>
			</tr>


			<tr>
				<th style='text-align:center'> Special Requirements, if any  :</th>
				<td colspan=4><textarea name="special_requirments" rows=3 cols=33></textarea>
			</tr>

			<tr>
				<td colspan=2 style='text-align:center'>
				<input class="submit" type="submit" name="contact_submitted" value="Submit" />
				<input type=reset name=s2 value="clear"><a href=reservation.php></a></td>
			</tr>

		</table>
	  </form>


    </div>
    <div id="content_footer"></div>
    <div id="footer">
      Hotel Alma Online Reservation System 「CPSC471-TUT01-GROUP05」
    </div>
  </div>
</body>
</html>

