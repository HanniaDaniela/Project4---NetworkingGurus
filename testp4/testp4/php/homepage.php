

 <!DOCTYPE html>
 <html lang="en">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
         <title>Home</title>
        <link href="style.css" rel="stylesheet" type="text/css">
   </head>
 <body>

   <div class="content">
 		  <header>

       </header>

       <div class="rightSection">
         <div class="login-box">
           <div class="row">

                 <div class="column2 login-left">
                     <h2> Login Here</h2>
                     <?php
                     include("login.php");
                     ?>
                 </div>

                 <div class="column2 login-right">
                 <h2> Register Here</h2>

                   <?php
                   include("register.php");
                   ?>
                </div>

             </div>
           </div>
       </div>


   </div>

   <script>
   function myFunction() {
       var x = document.getElementById("myTopnav");
       if (x.className === "nav") {
           x.className += " responsive";
       } else {
           x.className = "nav";
       }
   }
   </script>
 </body>
 </html>
