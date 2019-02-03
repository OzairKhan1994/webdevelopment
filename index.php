
 <?php

   require_once('header.php');
 ?>

 <!-- <?php
           
   require_once('slider.php');
 ?> -->

   <input  class="form-control test" type="text" name="test" id="id123" value="">
   <button class="btn btn-primary submit"> submit </button>
	

 <?php

   require_once('footer.php');
 ?>

 <script type="text/javascript">
    $(document).ready(function(){
      $('.submit').click(function(){
        var value = $('.test').attr('name1','test2');
        $('.test').removeAttr('id');
        console.log(value);
      });
    });     

</script>


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

 
</body>
</html>




