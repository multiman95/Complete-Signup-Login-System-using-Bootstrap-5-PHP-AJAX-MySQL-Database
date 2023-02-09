<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

	<h1 class="text-center mt-5">Login Page</h1>
		
		<div class="container">
			
			<div class="card">
				<div class="card-body bg-success">
					
					<div class="d-flex justify-content-center">
						<form id="loginForm">

						<div class="form-group col-lg-12">
							<label class="text-white">Email</label>
							<input type="text" id="userEmail" class="form-control">
						</div>

						<br/>
						
						<div class="form-group col-lg-12">
							<label class="text-white">Password</label>
							<input type="password" id="userPassword" class="form-control">
						</div>

						<div class="d-grid gap-2 mt-3">
							<button class="btn btn-primary btn-block">
							Login
							</button>
						</div>

						<center>
							<p class="mt-4">New User?
								<a href="signup.php" class="text-white">
									Signup
								</a>
							</p>

							<p class="mt-4">Forgot Password? 
								<a href="forgot-password.php" class="text-white">
									Reset Password
								</a>
							</p>
						</center>

					</form>

					
					</div>

				</div>
			</div>

	</div>

	<script src="js/bootstrap.min.js"></script>
</body>
</html>
