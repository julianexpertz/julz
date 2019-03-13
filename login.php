<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:daftar.php'); }
  
  require_once("conn.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
      <title>Signin</title>
      <link href="bootstrap.min.css" rel="stylesheet">
      <link href="signme.css" rel="stylesheet">

  </head>

    <body>

    <div class="container">

      <form form action="proseslogin.php" method="POST" class="form-signin" role="form">
        <h2 class="form-signin-heading"><center>Please sign in<center></h2>
        <input type="username" class="form-control" name="username" placeholder="Username" required="">
        <input type="password" class="form-control" name="password" placeholder="Password" required="">
        
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" value="submit" type="submit">Sign in</button>
        <br>
        <div><center>Belum Punya akun ?<a href="daftar.php"><h3><b>Register Now!</b></h3></a></center></div>
        <br>
        <div><center><a href="home.php"><h3><b>Masuk Sebagai Tamu</b></h3></a></center></div>
      </form>

    </div>
    </body>
</html>