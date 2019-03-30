<?php
error_reporting(0); 
?>
<!DOCTYPE html>
<html>
<head>
  <title>UI Learning</title>
  <meta charset="utf-8" name = "view-port" content="width=device-width">

  
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-grid.css">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-grid.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-reboot.css">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  
  
</head>
<body>
  <div class="main-content">
    <nav class="navbar navbar-expand-lg rounded bg-dark navbar-dark navbar-fixed-top">
    <a href="index.php" class="navbar-brand"> <img src="assets/img/img.png" class="img-fluid"width="65">M.O.K</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-id" aria-controls="navbar-id" aria-expanded="false" aria-lable="toggle-navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar-id">
      <ul class="navbar-nav mr-auto justify-content-center w-100">
        <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="aboutus.php">About</a></li>
        <li class="nav-item"><a class="nav-link" href="portfolio.php">Portfolio</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
        
      </ul>
        <ul class="navbar-nav justify-content-end  w-50" style="margin-right: 10%!important">
        <?php 
          session_start();
          if( isset($_SESSION) && $_SESSION['user_id'] && $_SESSION['role_id'] == 2){ ?>
             <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <?php echo $_SESSION['name']?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                  </li>

        <?php   }else{
        ?>
        <li class="nav-item">
          <a href="signup.php" class="nav-link" ><i class="fas fa-user-plus"></i> SignUP</a>
        </li>

        <li class="nav-item"><a class="nav-link"  href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a></li>
      <?php } ?>
        
      </ul> 
        
      
      
    </div>
    
  </nav>
  <div class="fade modal" id="signUp" tabindex="-1">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title"> SignUp </h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>User Name:</label>
            <input class="form-control" type="text" name="name">
          </div>
          <div class="form-group">
            <label>Email:</label>
            <input class="form-control" type="email" name="email">
          </div>
          <div class="form-group">
            <label>Password:</label>
            <input class="form-control" type="Password" name="Password">
          </div>
          <div class="form-group">
            <label>Confirm password:</label>
            <input class="form-control" type="password" name="confirm_password">
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-dark btn1">Submit</button>
          <button class="btn btn-dark btn1"data-dismiss="modal">Close</button>
        </div>    
      </div>
    </div>
  </div>
  <div class="fade modal" id="signin" tabindex="-1">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title"> Signin </h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>User Name:</label>
            <input class="form-control" type="text" name="name">
          </div>
          <div class="form-group">
            <label>Email:</label>
            <input class="form-control" type="email" name="email">
          </div>
          <div class="form-group">
            <label>Password:</label>
            <input class="form-control" type="Password" name="Password">
          </div>
          <div class="form-group">
            <label>Confirm password:</label>
            <input class="form-control" type="password" name="confirm_password">
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-dark btn1">Submit</button>
          <button class="btn btn-dark btn1"data-dismiss="modal">Close</button>
        </div>  
          
      </div>
    </div>
  </div><br>