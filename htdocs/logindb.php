
<?php
    session_start();
    include_once 'dbconnect.php';
    $con = dbConnect();

	$user_name = mysqli_real_escape_string($con,$_POST['user']);
	$user_password = mysqli_real_escape_string($con,$_POST['password']);
	$accountType = $_REQUEST['accountType'];
	
	if ($accountType == "customer"){
		$sql = "SELECT `CustomerID`, `C_Email`, `C_Password`, `C_Name`, `C_Birthday` FROM `Customer` WHERE C_Email = '$user_name'";
	}elseif ($accountType == "administrator"){
		$sql = "SELECT `AdministratorID`, `A_Email`, `A_Password` FROM `Administrator` WHERE A_Email = '$user_name'";
	}
	
	if(!($result = mysqli_query($con, $sql))){
	}


	while($row = mysqli_fetch_array($result)){
		if ($accountType == "customer"){
			
			$userName = $row['C_Email'];
			$password = $row['C_Password'];
			$userID = $row['CustomerID'];
			
		}elseif($accountType == "administrator"){
			$userName = $row['A_Email'];
			$password = $row['A_Password'];
			$userID = $row['AdministratorID'];

		}
	}
	if($user_password == $password && strcasecmp($user_name, $userName) == 0){
		echo "Login Successful!";
		session_regenerate_id(true);
		$_SESSION['userType'] = $accountType;
		$_SESSION['userID'] = $userID;
		
		
		
	}else{
		echo "Login Failed!";
	}echo "<p>Redirecting to homepage </p>";
	echo '<meta http-equiv="Refresh" content="2; url=index.php">';

?>