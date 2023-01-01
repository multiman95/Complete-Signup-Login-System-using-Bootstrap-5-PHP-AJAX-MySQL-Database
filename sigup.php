<!DOCTYPE html>
<html>
<head>
	<title>Signup Page</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

	<h1 class="text-center mt-5">Signup Page</h1>
		
		<div class="container">
			
			<div class="card">
				<div class="card-body bg-success">
					
					<div class="d-flex justify-content-center">
						<form id="loginForm" class="mt-4">

						
						<div class="row">
							<div class="col-6">
								<input type="text" id="firstname" class="form-control" placeholder="Firstname">
							</div>
							<div class="col-6">
								<input type="text" id="firstname" class="form-control" placeholder="Lastname">
							</div>
						</div>

						<div class="row mt-4">
							<div class="col-6">
								<input type="text" id="userEmail" class="form-control" placeholder="Email">
							</div>
							<div class="col-6">
								<input type="text" id="phone_number" class="form-control" placeholder="Phone Number">
							</div>
						</div>

						<div class="row mt-4">
							<div class="col-6">
								<input type="text" id="userPass" class="form-control" placeholder="Password">
							</div>
							<div class="col-6">
								<input type="text" id="confirm_pass" class="form-control" placeholder="Confirm Password">
							</div>
						</div>

						<div class="d-grid gap-2 mt-3">
							<button class="btn btn-primary btn-block">
							Signup
							</button>
						</div>

						<center>
							<p class="mt-4">Already a User?
								<a href="index.php" class="text-white">
									Login
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