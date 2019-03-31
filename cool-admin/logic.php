<?php

		require_once '../connection.php';
		session_start();
		if(isset($_POST['login_submit'])){
			$email    = $_POST['email'];
			$password = $_POST['password'];
			$query = "SELECT * from users where email = '".$email."'  AND password = '".md5($password)."' ";
			$result = $conn->query($query);
			if($result->num_rows > 0){
				
				$user = $result->fetch_assoc();
				
				$_SESSION['user_id'] = $user['id'];
				$_SESSION['role_id'] = $user['role_id'];
				$_SESSION['name'] = $user['name'];
				$_SESSION['email'] = $user['email'];
				header('location:index.php');
				
			}else{
				$_SESSION['error'] = true;
				if($conn->error){
					$_SESSION['message'] = $conn->error;
				}else{
					$_SESSION['message'] =   "Invalid email or password";
				}
				header('location:login.php');
			}
		}

		


?>