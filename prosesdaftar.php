<?php
session_start();

   require_once("conn.php");
   $urname = $_POST['username'];
   $pass = md5($_POST['password']);
   
   $sql = "SELECT * FROM user WHERE username = '$urname'";
   $query = $conn->query($sql);
  
  if($query->num_rows != 0) {
    echo "<div align='center'>Username Sudah Terdaftar! <a href='daftar.php'>Back</a></div>";
  } 
  else {
    if(!$urname || !$pass) {
      echo "<div align='center'>Masih ada data yang kosong! <a href='daftar.php'>Back</a>";
    }
      $data = "INSERT INTO user VALUES (NULL, '$urname', '$pass')";
      $simpan = $conn->query($data);
      if($simpan) {
        echo "<div align='center'>Pendaftaran Sukses, Silahkan <a href='login.php'>Login</a></div>";
      }
      else {
        echo "<div align='center'>Proses Gagal!</div>";
      }
  }
?>
