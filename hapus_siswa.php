<?php
	include "config.php";

	$student_id= $_GET['student_id'];
	$delete=mysqli_query($mysqli, "DELETE FROM siswa WHERE student_id='$student_id'");
	
	if($delete){
		header('Location:siswa.php');
	}
?>