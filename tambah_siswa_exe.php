<?php
    include "config.php";

    $full_name = $_POST['full_name'];
    $student_id = $_POST['student_id'];
    $email = $_POST['email'];
    $bidang = $_POST['bidang'];

    $sql = "INSERT INTO siswa (student_id, full_name, bidang) VALUES('$student_id', '$full_name', '$bidang')";

    if (mysqli_query($mysqli, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }

    header('Location: siswa.php');
?>
