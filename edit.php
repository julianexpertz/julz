<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit</title>
</head>
<body>
	
<?php

 session_start();
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
    die("Oops Anda belum login");//jika belum login jangan lanjut
}

 require_once("conn.php");
 $id=$_GET['id'];

 $sql="SELECT * FROM web WHERE id=$id";
 $result = $conn->query($sql);
 if ($result->num_rows > 0) {
 
    while($row = $result->fetch_assoc()) {
    	

?>
 
	<form action="prosesedit.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?= $row['id'] ?>">
	<input type="hidden" name="oldgambar" value="<?= $row['gambar']?>" >
	
<h1>Form Edit</h1>
<table align="center">
	
  <tr>
    <td><img src="pic/<?= $row['gambar']; ?>" width="200" height="150"> </td>
  </tr>
  <tr>
  		<td><input type="file" name="gambar"></td>
  </tr>
	<tr>
   <td>Judul : <input type="text" name="title" placeholder="judul" value="<?= $row['title'] ?>"></td>
  </tr>
 	<tr>
 	 <td>Content : <textarea name="content"><?= $row['content'] ?></textarea></td>
    </tr>
  <tr>
   <td colspan="2"><input type="submit" name="submit" value="Submit">
   </td>
  </tr>
  </table>
		
		</form>
		<?php
	}
}
?>

</body>
</html>
