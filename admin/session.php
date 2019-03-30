<?php 
if( !isset($_SESSION['user_id']) || !isset($_SESSION['role_id']) || $_SESSION['role_id'] != 1) {
	header('location:login.php');
}

?>