<?php
error_reporting(E_ALL); 
session_start();
if(empty($_POST["username"]) or empty($_POST["password"])){
	exit("Sorry, please fill all the fields.");
} else {
	include("bd.php");
	$username = mysql_real_escape_string($_POST['username']);
	$password = mysql_real_escape_string($_POST['password']);
	$result = mysql_query("SELECT * FROM users  WHERE username='$username' and password='$password'",$db);
	if(mysql_num_rows($result)){
		echo "Congratulations, you are in.";
	}
	else{
		exit("Sorry man, username or password incorrect.");
	}
}
?>


