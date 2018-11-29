 <!DOCTYPE html>
 <html lang="en">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
         <title>Home - Hannia Morales</title>
        <link href="css/style.css" rel="stylesheet" type="text/css">
         <script src="https://use.fontawesome.com/66638def64.js"></script>
   </head>
 <body>

   <div class="content">
 		  <header>
         <ul class="nav" id="myTopnav">
           <li>
             <a href="#">Home</a>
             <a href="#">Resources</a>
             <a href="#">Profile</a>
             <a href="#">Logout</a>
             <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
           </li>
         </ul>
       </header>


       <div class="login-box">
       <div class="row">
       <div class="col-md-6 login-left">
           <h2> Login Here</h2>
           <form action="validation.php" method="post">
               <div class="form-group">
                   <label>Username</label>
                   <input type="text" name="user" class="form-control" required>
               </div>

               <div class="form-group">
                   <label>Password</label>
                   <input type="password" name="password" class="form-control" required>
               </div>

               <button type="submit" class="btn btn-primary">Login</button>

           </form>
       </div>

           <div class="col-md-6 login-right">
           <h2> Register Here</h2>
           <form action="registration.php" method="post">

               <div class="form-group">
                   <label>Username:</label>
                   <input type="text" name="user" class="form-control" required>
               </div>

               <div class="form-group">
                   <label>Password:</label>
                   <input type="password" name="password" class="form-control" required>
               </div>

               <div class="form-group">
                   <label>Password again:</label>
                   <input type="email" name="email" class="form-control" required>
               </div>

               <div class="form-group">
                   <label>University E-mail:</label>
                   <input type="email" name="email" class="form-control" required>
               </div>

               <button type="submit" class="btn btn-primary">Register</button>

           </form>
       </div>
           </div>



       <footer>
         <h4>FOOTER</h4>
       </footer>

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
