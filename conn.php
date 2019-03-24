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
?>