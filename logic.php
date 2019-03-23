<?php 
session_start();
require_once 'connection.php';
    if(isset($_POST['signup_submit'])){ 
        $name    = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password2    = $_POST['password2'];
        
        $query = "INSERT into  users (role_id,name,email,password,created_at) values('2','".$name."', '".$email."','".md5($password)."','".date('Y-m-d')."')";
        if($conn->query($query) === true){
            $_SESSION['success'] = true;
            $_SESSION['error'] = false;
            $_SESSION['message'] = "Record inserted successfully";

            
        }else{
            $_SESSION['success'] = false;
            $_SESSION['error'] = true;
            if($conn->error){
                $_SESSION['message'] = $conn->error;
            }else{
                $_SESSION['message'] =  "something went wrong";
            }
        }
        header('location: signup.php');
    }

    if(isset($_POST['login_submit'])){
        $email    = $_POST['email'];
        $password = $_POST['password'];
        $query = "SELECT * from users where email = '".$email."'  AND password = '".md5($password)."' and role_id = '2' ";
        $result = $conn->query($query);
        if($result->num_rows > 0){
            
            $user = $result->fetch_assoc();
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['role_id'] = $user['role_id'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['success'] = true;
            $_SESSION['error'] = false;
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
<!-- <?php

$cars = array ("Mehran","alto","cultus","WagonR","civic");
array_splice($cars,2,1,array("Bolan","Swift"));
print_r($cars);
echo "<br>";

?>

<?php
  $days =  array("Mon", "Tues", "Wed", "Thur" );
  foreach ($days as $key => $value) {
   	echo $value."<br>";
   } 
?>
<?php


$users =array( array("a"),array("b"),array("c"),array("d"),array("e"));
  foreach ($users as $key => $value) {
  	foreach ($value as $inner_key => $data) {
  		echo $data."<br>";
  		
  	}
  }

?> -->







<!-- <?php
  $days =  array("Mon", "Tues", "Wed", "Thur" );
  foreach ($days as $key => $value) {
   	echo $value."<br>";
   } 
?>
<?php
   $i=1;
   $table = 5;
   do{
     echo $table.' x '.$i.' = '.$table*$i."<br>";
     $i++; 
   }
   while ($i <= 10)
?>  
<?php 
   for ($i=1; $i <= 10 ; $i++) { 
     for ($j=1; $j < $i  ; $j++) { 
       echo "*";
     }
     echo "<br>";
   }
   ?>  
<?php 
   for ($i=9; $i >=  1 ; $i--) { 
     for ($j=1; $j < $i  ; $j++) { 
       echo "*";
     }
     echo "<br>";
   }
   ?>   -->
   <!-- /*basic calculator*/
    // var a = 10;
    // var b = 20 ;
    // var c = 30;
    // var d = a+b+c;
    // console.log (d);
    // document.write (d);
    // var d = a-b-c;
    // console.log (d);
    // document.write (d);
    // var d = a*b*c;
    // console.log (d);
    // document.write (d);
    // var d = a/b/c;
    // console.log (d);
    // document.write (d);
      // var fname , lname,name;
      // fname = 'john';
      // lname = 'smith';
      // name = `${fname} ${lname}`;
      // console.log (name);
      // document.write (name);
      /*end*/
      /*condition*/
    // var marks = 120; 
    //  if(marks >= 33 && marks <= 39)
    //  {
    //      console.log ("Grade E");
    //  }
    //  else if(marks >= 40 && marks <= 49)
    //  {
    //       console.log ("Grade D");
    //  }
    //  else if(marks >= 50 && marks <= 59)
    //  {
    //       console.log ("Grade C");
    //  } 
    //  else if(marks >= 60 && marks <= 69)
    //  {
    //   console.log ("Grade B");
    //  }
    //  else if(marks >= 70 && marks <= 79)
    //  {
    //   console.log ("Grade A");
    //  }
    //  else if(marks >= 80 && marks <= 100)
    //  {
    //   console.log ("Grade A+");
    //  }
    //  else 
    //  {
    //   console.log ("Invalid"); 
    //  }
          /*end*/
          /*Switch case*/
     // var option = 2 ;
     // switch (option){
     // case 1:
     
     //   console.log ("Inquiry");
     //   break;
     
     // case 2:
     
     //   console.log ("With draw");
     //   break;
     
     // case 3:
     
     //   console.log ("Transfer");
     //   break;
     
     // case 4:
     
     //   console.log ("Exit");
     //   break;
     
     //   default:
       
     //    console.log ("Invalid");
     //   }
           /*end*/
           /*loops*/
    // for (var i=1; i <= 10; i++) {
    //   console.log("Answer ",i);
    // }
    // for (var i =10; i >= 1; i--) {
    //   console.log("Answer ",i);
    // }

    // var table = 2 ;
    // for (var i=1; i <= 10; i++) {
    //   console.log(table +'x' +i +'='+table*i);
    // }
     // var i = 10 ; 
     // while (i >= 1)
     // {
     //  console.log(i);
     //  i--;
     // }
     // var i = 1 ; 
     // while (i <= 10)
     // {
     //  if (i %  2 == 0)
     //  console.log("Even",i);
     //  i++;
     // }
     // var i = 1 ; 
     // while (i <= 10)
     // {
     //  if (i %  2 != 0)
     //  console.log("Odd",i);
     //  i++;
     // }
         /*end*/
         /*function*/
     // function add() {
     //   var a= 10;
     //   var b= 5;
     //    var sum = a + b;
     //   console.log("Addition ",sum); 
     // }

     // function sub() {
     //   var a= 10;
     //   var b= 5;
     //    var sum = a - b;
     //   console.log("Subtract ",sum); 
     // }
     // function mul() {
     //   var a= 10;
     //   var b= 5;
     //    var sum = a * b;
     //   console.log("Multiply ",sum); 
     // }
     // function div() {
     //   var a= 10;
     //   var b= 5;
     //    var sum = a / b;
     //   console.log("divide ",sum); 
     // }
     // var option = "add";
     // switch (option){
     //    case "add":
     //    add();
     //    break;

     //    case "sub":
     //    sub();
     //    break;

     //    case "mul":
     //    mul();
     //    break;

     //    case "div":
     //    div();
     //    break;

     //    default:
     //    console.log("Invalid");

     // }
          /*end*/
 	      /*parameter*/
        //  add(10,5);  
        // function add(a,b) {
        //     var sum = a + b;
        //    console.log("Addition ",sum); 
        //  }
        //   min(10,5);  
        // function min(a,b) {
        //     var min = a - b;
        //    console.log("Subtract ",min); 
        //  }
        //   mul(10,5);  
        // function mul(a,b) {
        //     var mul = a * b;
        //    console.log("Multiply ",mul); 
        //  }
        //   div(10,5);  
        // function div(a,b) {
        //     var div = a / b;
        //    console.log("divide ",div); 
        //  }
         //   add(100,200);
         // function add(a=10,b=20) {
         //    var add = a + b;
         //   console.log("add ",add); 
         // }
         /*end*/
         /*index array*/
     //     var fruits = ['apple','cherry','banana','mango'];
     // for (var i =0; i < fruits.length; i++) {
     //    console.log(fruits[i]);
     // }
            /*end*/
 -->