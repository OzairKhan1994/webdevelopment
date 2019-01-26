
 <?php

   require_once('header.php');
 ?>
 
 <?php

   require_once('slider.php');
 ?>


	

 <?php

   require_once('footer.php');
 ?>
 <script type="text/javascript">
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
    var marks = 120; 
     if(marks >= 33 && marks <= 39)
     {
         console.log ("Grade E");
     }
     else if(marks >= 40 && marks <= 49)
     {
          console.log ("Grade D");
     }
     else if(marks >= 50 && marks <= 59)
     {
          console.log ("Grade C");
     } 
     else if(marks >= 60 && marks <= 69)
     {
      console.log ("Grade B");
     }
     else if(marks >= 70 && marks <= 79)
     {
      console.log ("Grade A");
     }
     else if(marks >= 80 && marks <= 100)
     {
      console.log ("Grade A+");
     }
     else 
     {
      console.log ("Invalid");
     }
 </script>
</body>
</html>




