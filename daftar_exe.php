<?php
    include "config.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO adminn (username, password) VALUES('$username', '$password')";

    if (mysqli_query($mysqli, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }

    header('Location: login.php');
?>
