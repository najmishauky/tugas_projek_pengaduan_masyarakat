<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<div class="login-box">
   <i class="fa-solid fa-user"></i>

  <form action="proses_login.php" method="POST">
    <div class="user-box">
      <input type="username" required="" name="username">
      <label>Username</label>
    </div>
    <div class="user-box">
      <input type="password"  required="" name="password">
      <label>Password</label>
    </div>
    <div class="user-box">
      <input type="password"  required="" name="password">
      <label>no hp</label>
    </div>
    <div class="user-box">
      <input type="password"  required="" name="password">
      <label>Nik</label>
    </div>
    
    <center>
    <input class="btn btn-primary" type="submit" value="register"> 
    </center>
   
  </form>
</div>
<link rel="stylesheet" href="bootstrap-5.3.1-dist/css/bootstrap.min.css">
</body>
</html>


