<?php
	$host='localhost';
	$urname='root';
	$pass='';
	$dbname='blog';

	$conn= new mysqli($host,$urname,$pass,$dbname);
	
	function upload(){
		$newgambar = $_FILES['gambar']['name'];
		$tmp = $_FILES['gambar']['tmp_name'];
		
		move_uploaded_file($tmp, 'pic/' . $newgambar);
		return $newgambar;
	}

	/*function edit($row){
		global $conn;
		$id=$row['id'];
		$gambarlama=htmlspecialchars($row['imglama']);
		$judul=htmlspecialchars($row['title']);
		$konten=htmlspecialchars($row['content']);

		if($_FILES['img']['error']===4){
			$gambar = $gambarlama;
		}
		else{
			$gambar = upload();
		}

		$update = "UPDATE web SET img='$gambar', title='$judul', content='$konten' WHERE id='$id'";
	}*/
	
?>