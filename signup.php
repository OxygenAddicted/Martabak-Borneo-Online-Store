<?php
	session_start();

	include("back_end/koneksi.php");
	include("back_end/functions.php");
	include("front_end/signup_page.php");
	
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$user_id = "";
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		if(!empty($username) && !empty($password) && !is_numeric($username))
		{
			$user_id = random_num(20);
			$query = "insert into users (user_id,username,password) values ('$user_id','$username','$password')";
			
			mysqli_query($connection, $query);
			
			header("location: login.php");
			die;
		} else
		{
			echo "Please enter valid information.";
		}	
	}
?>
