
<div id="menubar">
<ul id="menu">
<?php // Dynamic Menu
	if( $_SESSION["userType"] == "customer" ): ?>
  <li><a href="index.php">Home</a></li>
  <li><a href="roomreservation.php">Room Reservation</a></li>
  <li><a href="eventbooking.php">Event Booking</a></li>
  <li><a href="customeraccount.php">Account</a></li>
  <li><a href="staff.php">Staffs</a></li>
  <li><a href="index.php?logout=true">Sign Out</a></li>

<?php elseif( $_SESSION["userType"] == "administrator"): ?>
  <li><a href="index.php">Home</a></li>
  <li><a href="administratoraccount.php"> Account </a></li>
  <li><a href="index.php?logout=true">Sign Out</a></li>
  
<?php else: ?>
  <li><a href="index.php">Home</a></li>
  <li><a href="register.php">Register</a></li>
  <li><a href="login.php">Login</a></li>
  <li><a href="aboutus.php">About Us</a></li>
  <li><a href="contactus.php">Contact Us</a></li>
<?php endif; ?>
</ul>
</div>
