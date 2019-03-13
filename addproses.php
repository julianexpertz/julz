<?php
	include('conn.php');

	$gambar = $_FILES['gambar']['name'];
	$tmp = $_FILES['gambar']['tmp_name'];
	$judul = $_POST['title'];
	$konten = $_POST['content'];
	$gambarbaru=$gambar;
	$path="pic/".$gambarbaru;

	if(move_uploaded_file($tmp, $path)){
		$sql=mysqli_query($conn, "INSERT INTO web VALUES (NULL,'$gambarbaru','$judul','$konten',NULL)");
		if($sql){
			header('location:admin.php');
		}
		else{
			echo "gagal!";
			echo "<br><a href='add.php'>Kembali Ke Form</a>";
		}
	}
	else{
		echo "gambar gagal diupload";
		echo "<br><a href='add.php'>Kembali Ke Form</a>";
	}
?>