<?php
	include "config.php";

	$teacher_id= $_GET['teacher_id'];
	$delete=mysqli_query($mysqli, "DELETE FROM pengajar WHERE teacher_id='$teacher_id'");
	
	if($delete){
		header('Location:pengajar.php');
	}
?>