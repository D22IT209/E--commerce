<html>
<head>
<title>User Login And Registration</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>

<body background="digital2.jpg">
<div class="container">
    <div class="login-box">
    <div class="row">
    <div class="col-md-6 login-left">
        <h2> <center>Login</center> </h2>
        <form action="registration.php" method="post">
         <div class="form-group">
           <label> EMAIL</label>
           <input type="text" name="Email" class="form-control" required>
           </div>
        <div class="form-group">
            <label>PASSWORD</label>
            <input type="password" name="password" class="form-control" required>
           </div>
           <button type="submit" name="submit" class="btn btn-primary"> Login</button>
        </form>
      <p> <center> Don't have an account?<a href="signup.php"><b style="color:blue">SignUp</a></b></center></p>
    </div>
        
    </div>

    </div>
    </div>

</div>
</body>
</html>