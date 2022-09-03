
<?php
    session_start();
    include_once 'dbconnect.php';
    $con = dbConnect();


    $query = "INSERT INTO Event (E_Name, E_des)
  VALUES ('" . $_POST["eventname"] . "', '" . $_POST["des"] . "')";
  
  if(mysqli_query($con, $query))
  {
    echo "<p>Account Successfully created!</p>";
    session_regenerate_id(true);
		$_SESSION['userType'] = "customer";
		$_SESSION['userID'] = mysqli_fetch_array(mysqli_query($con, "SELECT LAST_INSERT_ID()"))[0];
    // Redirect to this page if successfully inserted data
    header('Location: administratoraccount.php');

  }
  else
  {
    echo "ERROR: Could not execute $query." . mysqli_error($con);
  }
	

?>