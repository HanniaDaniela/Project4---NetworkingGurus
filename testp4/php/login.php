<html>
<head>
  <title>User Login and Sign Up</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
    
</head>
<body>
    <div class="container"> </div>
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
    </div>
</body>
</html>