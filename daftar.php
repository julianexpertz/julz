<?php
   session_start();
   
   if(isset($_SESSION['username'])){
    header('location:login.php'); 
   }
   require_once("conn.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <style>.error {color: #FF0000;}</style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Register</title>

    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="signme.css" rel="stylesheet">
    
  </head>

  <body>
    <?php
      $urnameErr = $passErr = "";
      $urname = $pass = "";

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST['username'])){
          $urnameErr="Username is required";
        } else{
          $urname = test_input($_POST['username']);
        }

        if (empty($_POST['password'])){
          $passErr="Password is required";
        } else{
          $pass= test_input($_POST['password']);
        }
      }
    ?>

    <div class="container">

      <form form action="prosesdaftar.php" method="POST" class="form-signin" role="form">
        <p><span class="error">* required field</span></p>
        <h2 class="form-signin-heading"><center>Form Register<center></h2>
        <div>
          <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $urname;?>">
          <span class="error">* <?php echo $urnameErr;?></span>
        </div>

        <div>
          <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo $pass;?>">
          <span class="error">* <?php echo $passErr;?></span>
        </div>
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" value="submit" type="submit">Register</button>
        <br>
        <div><center>Sudah Punya akun ?<a href="login.php"><h3><b>Sign in Now!</b></h3></a></center></div>
        <br>
        <div><center><a href="home.php"><h3><b>Back to Halaman Artikel</b></h3></a></center></div>
      </form>

    </div>
  </body>
</html>