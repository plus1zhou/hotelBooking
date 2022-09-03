
<?php
    session_start();
    include_once 'dbconnect.php';
    $con = dbConnect();

    $user_name = mysqli_real_escape_string($con,$_POST['user']);
	
    $sql = "SELECT * FROM Administrator WHERE A_Email = '{$user_name}' ";
        
	$result = mysqli_query($con, $sql);

	echo "Num Rows: " . mysqli_num_rows($result) . "; Query: {$sql}</br>";
	if (mysqli_num_rows($result)>=1){

        echo "<script type='text/javascript'>alert('This email already resgistered');</script>";
		header('//history(-1)');
		
        echo "<meta http-equiv='Refresh' content='2; url={$_SERVER['HTTP_REFERER']}'>";
   exit;   
  }

    $query = "INSERT INTO Administrator (A_Name, A_Email, A_Password)
  VALUES ('{$_POST["admininame"]}', '{$user_name}', '{$_POST["password"]}')";

  //$result = mysqli_query($connection, $query);


  if(mysqli_query($con, $query))
  {
    echo "<p>Account Successfully created!</p>";
    session_regenerate_id(true);
		$_SESSION['userType'] = "administrator";
		$_SESSION['userID'] = mysqli_fetch_array(mysqli_query($con, "SELECT LAST_INSERT_ID()"))[0];
    // Redirect to this page if successfully inserted data
    header('Location: index.php');
  }
  else
  {
    echo "ERROR: Could not execute $query." . mysqli_error($con);
  
  }
?>