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
	<style type="text/css">
		.email-error{
 	color: red;
 	font-weight: bold;
 	float: right;
 	display: none;
 }
 .password-error{
 	color: red;
 	font-weight: bold;
 	float: right;
 	display: none;
 }
 .user-error{
 	color: red;
 	font-weight: bold;
 	float: right;
 	display: none;
 }
 .confirm-password-error{
 	color: red;
 	font-weight: bold;
 	float: right;
 	display: none;
 }
 .login-container{
 	margin-top: 10%;
 }
 .login-submit{
 	

 }
 .error{
 	border: 1px solid red !important;
 }
 .success{
 	border: 1px solid green !important;
 }
	</style>
</head>
<body>
	<?php require_once 'auth-header.php'?>
		<div class="container login-container">
			<div class="row">
				<div class="offset-md-4 col-md-4">
					<?php 
					session_start();
					if( isset($_SESSION['error']) &&  $_SESSION['error'] == true ) { ?>

						<div class="alert alert-danger alert-dismissible fade show" role="alert">
						  	<strong>Error!</strong>  <?php echo $_SESSION['message'] ;?>
						  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true">&times;</span>
						  </button>
						</div>

				<?php  }  ?>
					<h4 class="login-heading"> Sign In </h4>
					<form action="logic.php" method="post">
						<div class="form-group">
							<label>Email</label>
							<input class="form-control" type="email" id="email" name="email">
							<span class="email-error">Email is required</span>
						</div>

						<div class="form-group">
							<label>Password</label>
							<input class="form-control" type="password" id="password" name="password">
							<span class="password-error">Password is required</span>
						</div>
						
						<div class="form-group">
							<button name="login_submit" class="btn btn-success btn-block 	login-submit float-left">Submit</button>
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
					var username = $('#username').val();
					var email = $('#email').val();
					var password = $('#password').val();
					var confirmpassword = $('#confirm-password').val();
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
					if(username == ''){
						$('.user-error').show(500);
						$('#username').addClass('error');
						$('#username').removeClass('success');
					}else{
						$('.user-error').hide();
						$('#username').removeClass('error');
						$('#username').addClass('success');
					}
					if(confirmpassword == ''){
						$('.confirm-password-error').show(500);
						$('#confirm-password').addClass('error');
						$('#confirm-password').removeClass('success');
					}else{
						$('.confirm-password-error').hide();
						$('#confirm-password').removeClass('error');
						$('#confirm-password').addClass('success');
					}
				});
			});
		</script>
</body>


</html>