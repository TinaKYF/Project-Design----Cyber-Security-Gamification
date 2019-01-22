<?php
	session_start();

	if (isset($_SESSION['username'])){
		unset($_SESSION['username']);
	}
	// Finally, destroy the session.
	session_destroy();
	$url  =  "index.php" ;  
	echo " <script language = 'javascript' type = 'text/javascript'> ";  
	echo " window.location.href = '$url' ";  
	echo " </script> ";
?>