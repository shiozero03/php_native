<?php 

	$host = 'localhost';
	$db = 'db_sistemposyandu';
	$user = 'root';
	$pass = '';

	$conn = mysqli_connect($host, $user, $pass, $db);
	if(!$conn){
		die('failed'.$conn->connect_error);
	}

?>