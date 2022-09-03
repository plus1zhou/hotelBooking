<?php
    session_start();

  ?>
  <?php
    include_once 'dbconnect.php';
    $con = dbConnect();

    $UID = $_SESSION['userID'];
    $aType = $_SESSION['userType'];

  if ($aType == "customer" ){
    $query = "DELETE FROM Customer WHERE CustomerID = $UID ";
  }

  if ($aType == "administrator"){
    $query = "DELETE FROM Administrator WHERE AdministratorID = $UID ";
  }

  if($res = mysqli_query($con,$query)){
    echo "<p>Account Successfully Deleted!</p>";
    session_start();
    session_regenerate_id();
    session_destroy();
    header('Location: index.php');
  }else{
    echo "ERROR: could not execute $sql. " . mysqli_error($con);
  }
?>