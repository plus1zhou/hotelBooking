
<?php
    session_start();
    include_once 'dbconnect.php';
    $con = dbConnect();

    
    $query = "INSERT INTO Reservation (R_CID, R_COD, R_Number_of_Room, R_Room_type, R_Email, R_Phone_Number, R_SR)
  VALUES ('" . $_POST["cid"] . "', '" . $_POST["cod"] . "' , '" . $_POST["number_of_room"] . "', '" . $_POST["room_type"] . "', '" . $_POST["user"] . "', '" . $_POST["phone_number"] . "', '" . $_POST["special_requirments"] . "')";


  if(mysqli_query($con, $query))
  {
    echo "<p>Account Successfully created!</p>";
    session_regenerate_id(true);
		$_SESSION['userType'] = "customer";
		$_SESSION['userID'] = mysqli_fetch_array(mysqli_query($con, "SELECT LAST_INSERT_ID()"))[0];
    // Redirect to this page if successfully inserted data
    header('Location: roombill.php');
	

  }
  else
  {
    echo "ERROR: Could not execute $query." . mysqli_error($con);
    
  }

  if(mysqli_query($con, $qq))
  {
    echo "<p>Account Successfully created!</p>";
	
  }
  else
  {
    echo "ERROR: Could not execute $qq." . mysqli_error($con);
    
  }


?>

