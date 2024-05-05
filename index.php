<?php
    include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  <div class="login">
    <form action="login.php" method="POST">
      <div>
        <h1>Login Page</h1>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Username" name="UserName"required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Password"name="Password" required>
        <i class='bx bxs-lock-alt'></i>
      </div>
      <div class="remember-forget">
        <label><input type="checkbox"> Remember me </label> 
        <a href="#">Forget password?</a>
      </div>
      <button type="submit" class="btn">Login</button>
      <div class="register-link">
        <p>Don't have an account?<a href="#">Register</a></p>
      </div>
    </form> 
  </div>
</body>
</html>
