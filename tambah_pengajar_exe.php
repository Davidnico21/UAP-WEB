<?php
    include "config.php";

    $full_name = $_POST['full_name'];
    $teacher_id = $_POST['teacher_id'];
    $email = $_POST['email'];
    $bidang = $_POST['bidang'];

    $sql = "INSERT INTO pengajar (teacher_id, full_name, email, bidang) VALUES('$teacher_id', '$full_name', '$email', '$bidang')";

    if (mysqli_query($mysqli, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }

    header('Location: pengajar.php');
?>
