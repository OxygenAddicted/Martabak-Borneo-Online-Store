<?php
	session_start();
	include("back_end/koneksi.php");
	include("back_end/functions.php");
	
	$user_data = check_login($connection);
	
	if ($user_data == false){
		header("location: login.php");
	}
	else{
		$user_id_to_cart = $_SESSION['user_id']; 
		
		// user id to cart; save user_id for cart usage
		echo "<script>console.log('$user_id_to_cart');</script>";
		echo "<script>console.log('this is for testing only.');</script>";
		
		include ("./front_end/homepage.php");
		
		if (isset($_POST['add'])){
			$product = $_POST['product_name'];

			$c = "SELECT * FROM testing2";
			$res = mysqli_query($connection, $c);
			$count = 0;
			while ($row = mysqli_fetch_array($res)){
				++$count;
			}

			$sql = "INSERT INTO testing2 (id, user_id, product) VALUES ($count, '$user_id_to_cart', '$product')";
			mysqli_query($connection, $sql);
		}
	}
?>
