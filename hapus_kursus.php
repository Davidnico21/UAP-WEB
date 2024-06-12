<?php
include "config.php";

$id_kursus = $_GET['id_kursus'];

if (isset($id_kursus) && !empty($id_kursus) && is_numeric($id_kursus)) {
    $delete = mysqli_query($mysqli, "DELETE FROM kursus WHERE id_kursus='$id_kursus'");

    if ($delete) {
        header('Location: kursus_online.php');
        exit();
    } else {
        echo "Error: " . mysqli_error($mysqli);
    }
} else {
    echo "ID kursus tidak valid.";
}

$mysqli->close();
?>
