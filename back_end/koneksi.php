<?php
	
	$server = "localhost";
	$user = "root";
	$pass = "";
	$db_name = "db_pw2";

	
	$connection = @mysqli_connect($server, $user, $pass) or die("<center style='padding: 5vh'><h1>Tidak Bisa Tersambung ke Server Database!</h1><br><h2>Cause: ".mysqli_connect_error()."</h2></center>");;


	$select_db = @mysqli_select_db($connection, $db_name) or die("<center style='padding: 5vh'><h1>Database Tidak Ditemukan!</h1></center>");;
?>
