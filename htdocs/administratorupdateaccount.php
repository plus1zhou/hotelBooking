<?php
    session_start();
  ?>
  <?php
    include_once 'dbconnect.php';
    $con = dbConnect();

    $UID = $_SESSION['userID'];
    $pword = $_POST["password"];

  if ($pword != NULL){
    $query = "UPDATE Administrator SET A_Password= '$pword' WHERE AdministratorID = $UID ";
    mysqli_query($con, $query);
    echo "<p>Password Successfully Updated!</p>";
  }
  
  header('Location: administratoraccount.php');
?>