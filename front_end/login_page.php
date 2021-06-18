<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Meta tags -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
		<!-- Font Montserrat --> 
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400&display=swap" rel="stylesheet">

		<!-- Icon -->
        <link rel="icon" href="./upload/logo/logo_borneo.png">

		<!-- JavaScript -->
		<script src='script.js'></script>

		<!-- Popper -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
        
        <title>Login</title>
    </head>
	
	<body>
		<style>
			body{
				font-family: 'Montserrat', sans-serif;
			}

			.navbar{
				background: #fbff00;
				box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
				border-radius: 0px 0px 50px 50px;
				padding: 30px;
			}

			#loginform{
				margin: 150px 35% 0 35%;
			}

			#loginform .form-floating input{
				background: #fcff60;
				border: 1px solid #fbfd74;
				box-sizing: border-box;
				box-shadow: inset 0px 4px 5px rgba(0, 0, 0, 0.25);
				border-radius: 20px;
			}

			#loginform p{
				text-align: center;
			}

			#loginform a{
				text-decoration: none;
				color: black;
			}

			.btn{
				color: black;
				background: #f7f320;
				border: 1px solid #fbfd74;
				box-sizing: border-box;
				box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
				border-radius: 22px;
				}

			.btn:hover{
				background: #fbff00;
				border: 1px solid #FFDDCA;
				color: black;
			}
			</style>
		<nav class="navbar sticky-top navbar-expand-lg py-4 navbar-light">
            <div class="container-fluid">
				<div id="logo">
                	<a href="#"><img width="100px" src="./upload/logo/logo_borneo.png" alt="Martabak Borneo"></a>
				</div>
				<div class="navbar-brand" href="#">
					<h3>Login</h3>
				</div>
            </div>
        </nav>

		<div id="loginform">
			<form method="post" class="col g-3">
				<div class="col-12 mb-3">
					<h2><b>Login</b></h2>
				</div>

				<div class="form-floating col-12 mb-3">
					<input class="form-control" id="floatingInput" required autocomplete="off" name="username" type="text" placeholder="Username">
					<label for="floatingInput">Username</label>
				</div>

				<div class="form-floating col-12 mb-3">
					<input class="form-control" id="formInputPassword" required autocomplete="off" name="password" type="password" placeholder="Password">
					<label for="formInputPassword">Password</label>
				</div>

				<div class="col-12 mb-3">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="showpassCheck" onclick="showpass()">
						<label class="form-check-label" for="showpassCheck">
						Show Password</label>
					</div>
				</div>

				<div class="d-grid col-12 mb-5">
					<button type="submit" class="btn btn-primary">Login</button>
				</div>

				<div class="col-12 mb-3">
					<p>Have not signed up yet?<a href="signup.php"><br>Click to sign up</a></p>
				</div>
			</form>
		</div>
	</body>
</html>
