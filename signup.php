<!DOCTYPE html>
<html>
<head>
	<title>UI Learning</title>
	<meta charset="utf-8" name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-reboot.min.css">
	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"> -->
</head>
<body>
	<?php require_once 'auth-header.php'?>
		<div class="container login-container">
			<div class="row">
				<div class="offset-md-4 col-md-4">
					<?php
					session_start();
					if(isset ($_SESSION['success']) && $_SESSION['success'] == true) {?>
						<div class="alert alert-success alert-dismissible fade show" role="alert">
								  <strong>Success</strong> <?php echo $_SESSION['message'] ;?>
								  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
								    <span aria-hidden="true">&times;</span>
								  </button>
								</div>
								<?php
								$_SESSION['success'] = false;
								?>
				<?php	} else if(isset ($_SESSION['error']) && $_SESSION['error'] == true) { ?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
								  <strong>Success</strong> <?php echo $_SESSION['message'] ;?>
								  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
								    <span aria-hidden="true">&times;</span>
								  </button>
								</div>
								<?php
								$_SESSION['success'] = false;
								?>
							<?php } ?>
					<h4 class="login-heading"> Sign Up </h4>
					<form action="logic.php" method="post">
					<div class="form-group">
						<label>User Name</label>
						<input class="form-control" type="text" name="name" required>
						<span class="user-error">User Name is required</span>
					</div>

					<div class="form-group">
						<label>Email</label>
						<input class="form-control" type="email" id="email" name="email" required>
						<span class="email-error">Email is required</span>
					</div>

					<div class="form-group">
						<label>Password</label>
						<input class="form-control" type="password" id="password" name="password" required>
						<span class="password-error">Password is required</span>
					</div>

					<div class="form-group">
						<label>Confirm Password</label>
						<input class="form-control" type="password" id="confirm_password" name="confirm_password" required>
						<span class="confirm-password-error">Please Enter password as above</span>
					</div>
					<div class="form-group">
						<button name="signup_submit" class="btn btn-success btn-block login-submit float-left"> Submit</button>
					</div>
					</form>
				</div>
			</div>
		</div>
<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('.login-submit').click(function(){
					var email = $('#email').val();
					var password = $('#password').val();
					var confirmpassword = $('#confirm_password').val();
					if(email == ''){
						$('.email-error').show(500);
						$('#email').addClass('error');
						$('#email').removeClass('success');
					}else{
						$('.email-error').hide();
						$('#email').removeClass('error');
						$('#email').addClass('success');
					}
					if(password == ''){
						$('.password-error').show(500);
						$('#password').addClass('error');
						$('#password').removeClass('success');
					}else{
						$('.password-error').hide();
						$('#password').removeClass('error');
						$('#password').addClass('success');
					}
					if(confirmpassword == ''){
						$('.confirm-password-error').show(500);
						$('#confirm_password').addClass('error');
						$('#confirm_password').removeClass('success');
					}else{
						$('.confirm-password-error').hide();
						$('#confirm_password').removeClass('error');
						$('#confirm_password').addClass('success');
					}

				});

				$('#email').blur(function(){
					var email = $('#email').val();
					if(email == 'wa.135875@gmail.com'){
						$('.email-error').text('This Email already exist').val('').focus().show(500);
						$('#email').addClass('error');
						$('#email').removeClass('success');
					}else{
						$('.email-error').hide();
						$('#email').removeClass('error');
						$('#email').addClass('success');
					}
				});
			});
		</script>
</body>
</html>