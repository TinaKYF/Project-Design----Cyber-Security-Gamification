<?php
session_start();

include('conn.php');

if ($_POST["point"] != null) {
  $point = $_POST["point"];
  $level = $_POST["level"];
  if(isset($_SESSION['username'])){
  $username = $_SESSION['username'];}
  $sql = "UPDATE registration SET score='$point' WHERE username='$username'";
  $sql2 = "UPDATE registration SET level='$level' WHERE username='$username'";
  if (mysqli_query($db, $sql) && mysqli_query($db, $sql2)) {
    echo "Record updated successfully";
  }
  else {
    echo "Error updating record: " . mysqli_error($conn);
  }
  mysqli_close($db);
}
else{
  $point = "None";
}
?>
