<?php
error_reporting(E_ALL); 
ini_set('display_errors',1);
session_start();

if(empty($_POST["username"]) or empty($_POST["password"])){
	exit("Sorry, please fill all the fields.");
} else {
	include("bd.php");
	$username = mysql_real_escape_string($_POST['username']);
	$password = mysql_real_escape_string($_POST['password']);
	$sql = "SELECT * FROM users  WHERE username='$username' and password='$password' LIMIT 1";
	
	if($result = mysql_query($sql,$db)) {
		if(mysql_num_rows($result) == 1){
			echo "Congratulations, you are in.";
		}
		else{
			exit("Sorry man, username or password incorrect.");
		}
	} else {
		echo "Ошибон в mysql_query";
	}
}
?>


