<?php
session_start();

if(!isset($_POST['Submit'])){
    exit('!');
}

$salt = "Hsjhjkh123213";

$username = htmlentities($_POST['user_name']);
$password = md5($salt . htmlentities($_POST['user_password1']));
$firstname = htmlentities($_POST['firstname']);
$lastname = htmlentities($_POST['lastname']);
$role = htmlentities($_POST['role']);
$gender = htmlentities($_POST['field＿name']);

include('conn.php');
$result = mysqli_query($db, "SELECT * FROM registration WHERE username='$username'");
$count = mysqli_num_rows($result);
if ($count > 0) {
  echo "Sorry, the username already exist, please try another username";
}
else{
  $query = mysqli_query($db, "INSERT INTO registration (username, password, firstname, lastname, gender, role, score, level) VALUES ('$username', '$password', '$firstname', '$lastname', '$gender', '$role', 0, '1')");
  $_SESSION['username'] = $username;//$_SESSION['username'] used to check if user login
   $url  =  'work.php' ;
   echo " <script language = 'javascript' type = 'text/javascript'> ";
   echo " window.location.href = '$url' ";
   echo " </script> ";
}


?>
