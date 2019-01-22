<?php
	$field = $_GET['field'];
	if($field == 'username'){
	$pattern1 = "/^[a-zA-Z1-9]{1,16}$/";
	if($_GET['username'] == ""){echo "<p style=\"color:red; margin-top:-11px; margin-bottom:10px; margin-left:85px;\">this field is compulsory<p>";}
	else if( preg_match($pattern1,$_GET['username'])){ echo "";}
	else echo "<p style=\"color:red; margin-top:-11px; margin-bottom:10px; margin-left:85px;\">English letters and digitals only<p>";
	}
	
	if($field == 'password'){
	$pattern2 = "/^[a-zA-Z1-9]{1,16}$/";
	if($_GET['password'] == ""){echo "<p style=\"color:red; margin-top:-11px; margin-bottom:10px; margin-left:85px;\">this field is compulsory<p>";}
	else if( preg_match($pattern2,$_GET['password'])) {echo "";}
	else echo "<p style=\"color:red; margin-top:-11px; margin-bottom:10px; margin-left:85px;\">English letters and digitals only<p>";
	}
	
	if($field == 'password1'){
	$pattern3 = "/^[a-zA-Z0-9]{1,16}$/";
	if($_GET['password1'] == ""){echo "<p style=\"color:red; margin-top:-11px; margin-bottom:10px; margin-left:85px;\">this field is compulsory<p>";}
	else if( preg_match($pattern3,$_GET['password1'])) {echo "";}
	else echo "<p style=\"color:red; margin-top:-11px; margin-bottom:10px; margin-left:85px;\">English letters and digitals only<p>";
	}

	if($field == 'firstname'){
	$pattern3 = "/^[a-zA-Z]{1,16}$/";
	if($_GET['firstname'] == ""){echo "<p style=\"color:red; margin-top:-11px; margin-bottom:10px; margin-left:85px;\">this field is compulsory<p>";}
	else if( preg_match($pattern3,$_GET['firstname'])) {echo "";}
	else echo "<p style=\"color:red; margin-top:-11px; margin-bottom:10px; margin-left:85px;\">English letters only<p>";
	}

	if($field == 'lastname'){
	$pattern4 = "/^[a-zA-Z]{1,16}$/";
	if($_GET['lastname'] == ""){echo "<p style=\"color:red; margin-top:-11px; margin-bottom:10px; margin-left:85px;\">this field is compulsory<p>";}
	else if( preg_match($pattern4,$_GET['lastname'])) {echo "";}
	else echo "<p style=\"color:red; margin-top:-11px; margin-bottom:10px; margin-left:85px;\">English letters only<p>";
	}
	
	if($field == 'role'){
	$pattern4 = "/^[a-zA-Z]{1,16}$/";
	if($_GET['role'] == ""){echo "<p style=\"color:red; margin-top:-11px; margin-bottom:10px; margin-left:85px;\">this field is compulsory<p>";}
	else if( preg_match($pattern4,$_GET['role'])) {echo "";}
	else echo "<p style=\"color:red; margin-top:-11px; margin-bottom:10px; margin-left:85px;\">English letters only<p>";
	}
?>