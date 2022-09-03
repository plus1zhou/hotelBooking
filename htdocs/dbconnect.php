<?php
	
	// Connect to Database
	function dbConnect()
	{
		$con = mysqli_connect("localhost","root","root","Hotel");
		
		// Handle Connection Errors:
		if( mysqli_connect_errno($con) )
		{
			echo "<script type='text/javascript'>alert('Failed to Connect to the Database');</script>";
			header('//history(-1)');
			exit;
		}
		
		return $con;
	}
	
?>
