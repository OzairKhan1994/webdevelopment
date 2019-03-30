<?php
		require_once '../connection.php';

		if(isset($_POST['login_submit'])){
			$email    = $_POST['email'];
			$password = $_POST['password'];
			$query = "SELECT * from users where email = '".$email."'  AND password = '".md5($password)."' ";
			$result = $conn->query($query);
			if($result->num_rows > 0){
				
				$user = $result->fetch_assoc();
				session_start();
				$_SESSION['user_id'] = $user['id'];
				$_SESSION['role_id'] = $user['role_id'];
				$_SESSION['name'] = $user['name'];
				$_SESSION['email'] = $user['email'];
				header('location:index.php');
				
			}else{
				if($conn->error){
					echo $conn->error;
				}else{
					echo "Record Not Found";
				}
			}
		}

		if(isset($_POST['signup_submit'])){
			print_r($_POST);
			$name    = $_POST['name'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$password2    = $_POST['password2'];
			exist();
			$query = "Select * from users where email = '".$email."'  AND password = '".md5($password)."' ";
			$result = $conn->query($query);
			if($result->num_rows > 0){
				
				$user = $result->fetch_assoc();
				session_start();
				$_SESSION['user_id'] = $user['id'];
				$_SESSION['role_id'] = $user['role_id'];
				$_SESSION['name'] = $user['name'];
				$_SESSION['email'] = $user['email'];
				header('location:index.php');
				
			}else{
				if($conn->error){
					echo $conn->error;
				}else{
					echo "Record Not Found";
				}
			}
		}



?>