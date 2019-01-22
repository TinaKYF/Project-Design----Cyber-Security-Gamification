<?php
session_start();

// login off
/* if($_GET['action'] == "logout"){
    unset($_SESSION['userid']);
    unset($_SESSION['username']);
    echo 'Successfully login off��Click here <a href="login.html">Login</a>';
    exit;
} */

//Login
if(!isset($_POST['submit'])){
    exit('!');
}

$salt = "Hsjhjkh123213";

$username = htmlentities($_POST['username']);
$password = md5($salt . htmlentities($_POST['password']));

include('conn.php');
function login($username, $password, $db) {
    $result = mysqli_query($db, "SELECT * FROM Registration WHERE username='$username' AND password='$password'") or die("there's an error");
    $count = mysqli_num_rows($result);
    if ($count == 0){
      exit('Sorry, your username or password is not correct, please <a href="javascript:history.back(-1);">Try</a> Again');
    }else{
      $_SESSION['username']= $username;
      $url  =  "CyberSecurityGame.html" ;
    	echo " <script language = 'javascript' type = 'text/javascript'> ";
    	echo " window.location.href = '$url' ";
    	echo " </script> "; //redirect to home page
    }
} // END LOGIN FUNCTION
// If the username and password are alright
//$check_query = mysql_query("select uid from user where username='$username' and password='$password'
//limit 1");
if($username == "root" && $password == "Group62018"){
    //Login successfully
    $_SESSION['username'] = $username;//$_SESSION['username'] used to check if user login
    //$_SESSION['userid'] = $result['uid'];
  	$url  =  "CyberSecurityGame.html" ;
  	echo " <script language = 'javascript' type = 'text/javascript'> ";
  	echo " window.location.href = '$url' ";
  	echo " </script> ";
    //echo 'Click here <a href="login.php?action=logout">Login off</a> Login<br />';
}
else{
  login($username, $password, $db);
}
?>
