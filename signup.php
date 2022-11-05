<html>
<head>
<title>User Login And Registration</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>

<body background="digital2.jpg">
<div class="container">
    <div class="login-box">
    <div class="row"><div class="col-md-6" login-right>
         <h2><center> Register</center></h2>
         <form action="register.php" method="post">
          <div class="form-group">
            <label>Full Name</label>
            <input type="text" name="fullname" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="text" name="Email" class="form-control" required>
              </div>
           <div class="form-group">
             <label> username</label>
             <input type="text" name="username" class="form-control" required>
             </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
            </div>
           <button type="submit" name="submit" class="btn btn-primary"> Register</button>
        </form>
    </div>

</div>


</div>

</div>
</body>
</html>