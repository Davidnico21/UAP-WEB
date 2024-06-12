<?php
    // Menghubungkan ke database
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "web_uap";
    $mysqli = mysqli_connect($host, $user, $pass, $db);

    // pengkondisian jika gagal menghubungkan ke database
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        exit();
    }

?> 