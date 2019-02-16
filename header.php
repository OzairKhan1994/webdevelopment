<!DOCTYPE html>
<html>
<head>
  
  <title>Php Project</title>
  <meta charset="utf-8"  name="viewport" content="width=device-width">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-grid.css">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-grid.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-reboot.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  </head>
<body>
  <div class="main-content">
<nav class="navbar navbar-expand-md rounded navbar-dark bg-dark">
 	<a href="" class="navbar-brand"> <img src="assets/img/logo1.png" class="img-fluid" height="70" width="70">WEB DEVELOPMENT</a>
 	<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#collapsible-div">
 		<span class="navbar-toggler-icon"></span>
 	</button>
  <div  class="collapse navbar-collapse" id="collapsible-div">
  	<ul class="navbar-nav justify-content-center w-100">
  		<li class="nav-item">
  		<a href="index.php" class="nav-link">Home</a> </li>
  		<li class="nav-item">
  		<a href="aboutus.php" target="_blank" class="nav-link">About us</a>
  		 </li>
  		<li class="nav-item">
  		<a href="portfolio.php" target="_blank" class="nav-link">PortFolio</a>
  		 </li>
  		<li class="nav-item">
  			<a href="contact.php" target="_blank" class="nav-link">Contact</a>
  		 </li>
  	</ul>
  	<ul class="navbar-nav justify-content-end w-100">
  		<li class="nav-item">
  		<a href="signup.php" class="nav-link">Sign Up</a> </li>
  		<li class="nav-item">
  		<a href="login.php" class="nav-link">Login</a>
  		 </li>
  	</ul>
  </div>
 </nav>

<?php
   $i=1;
   $table = 5;
   do{
     echo $table.' x '.$i.' = '.$table*$i."<br>";
     $i++; 
   }
   while ($i <= 10)
?>  