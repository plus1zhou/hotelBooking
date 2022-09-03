<h3>Administrator Information</h3>
<?php
	include_once 'dbconnect.php';
	
	// Connect to Database
	$con = dbConnect();
	
	// Connected?
	if( !mysqli_connect_errno($con) )
	{

		$query = "SELECT * FROM Administrator as A WHERE A.AdministratorID='{$_SESSION['userID']}' ";

		if( $res = mysqli_query($con,$query) )
		{
			if( mysqli_num_rows($res) > 0 )
			{
				echo "<table>";
				while( $row = mysqli_fetch_array($res))
				{
					// Row 1: Name
					echo "<tr>";
					echo "<td><b>Name: " . $row['A_Name'] . "</b></td>";
					echo "</tr>";
					// Row 2: Email
					echo "<tr>";
					echo "<td colspan='2'>Email: " . $row['A_Email'] . "</td>";
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