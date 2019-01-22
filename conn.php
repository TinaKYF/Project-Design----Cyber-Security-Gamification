<?php
//This work is licensed under a Creative Commons Attribution 4.0 International License.

$dbConnection = array("server" => "localhost", "database" => "cybersecurity", "username" => "root", "pwd" => "1994168");

$db = new mysqli($dbConnection["server"], $dbConnection["username"], $dbConnection["pwd"], $dbConnection["database"]) or die("not connetced");

/* if(!$db){
	echo "no";

} */
?>
