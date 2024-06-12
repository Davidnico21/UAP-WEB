<?php
	include "config.php";

	$id_kelas= $_GET['id_kelas'];
	$delete=mysqli_query($mysqli, "DELETE FROM kelas WHERE id_kelas='$id_kelas'");
	
	if($delete){
		header('Location:kelas.php');
	}
?>