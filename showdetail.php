<?php
include('conn.php');

    if(isset($_SESSION['username'])){
		$username = $_SESSION['username'];
		$con = mysqli_connect("localhost","root","","cybersecurity");
		if (!$con)
		  {
		  die('Could not connect: ' . mysql_error());
		  }

		$result = mysqli_query($con, "SELECT * FROM registration WHERE username='$username'");
		while($row = mysqli_fetch_array($result))
	    {
			$_SESSION['name'] = $row['firstname'] . " " . $row['lastname'];
	    }
	}
?>