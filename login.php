<?php
	include("back_end/koneksi.php");
	include("back_end/functions.php");
	include("./front_end/login_page.php");
	session_start();
	
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		if(!empty($username) && !empty($password) && !is_numeric($username)){
			$query = "select * from users where username = '$username' limit 1";
			$result = mysqli_query($connection, $query);
			
			if ($result){
				if ($result && mysqli_num_rows($result)>0){
					$user_data = mysqli_fetch_assoc($result);
					if($user_data['password'] === $password){
						$_SESSION['user_id'] = $user_data['user_id'];
						header("location: index.php");
						die;
					}
				}
			}
		}
		else{
			echo "Wrong username or password.";
		}	
		
		if(isset($_SESSION['username'])){
			header("location: index.php");
			die;
		}
	}
?>
