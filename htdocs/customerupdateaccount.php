<?php
    session_start();

  ?>
  <?php
    include_once 'dbconnect.php';
    $con = dbConnect();

    $UID = $_SESSION['userID'];
    $name = $_POST["user"];
    $pword = $_POST["password"];
    $bdate = $_POST["birthday"];

  if ($name != NULL){
    $query = "UPDATE Customer SET C_Name= '$name' WHERE CustomerID = $UID ";
    mysqli_query($con, $query);
    echo "<p>Name Successfully Updated!</p>";
  }
  if ($pword != NULL){
    $query = "UPDATE Customer SET C_Password = '$pword' WHERE CustomerID = $UID ";
    mysqli_query($con, $query);
    echo "<p>Password Successfully Updated!</p>";
  }
  if ($bdate != NULL){
    $query = "UPDATE Customer SET C_Birthday = '$bdate' WHERE CustomerID = $UID ";
    mysqli_query($con, $query);
    echo "<p>Birth Date Successfully Updated!</p>";
  }
  header('Location: customeraccount.php');
?>