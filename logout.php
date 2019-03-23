<?php 
	session_start();
    if( isset($_SESSION['user_id'] ) && $_SESSION['role_id'] == 2  ) {
    	
           session_destroy();
           header('location:login.php');
    }else{
    	echo "in else";
    }
   

?>