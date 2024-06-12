<?php
include 'config.php';

// Ambil nilai id_kursus dari form
$id_kursus = $_POST['id_kursus'];
$bidang = $_POST['bidang'];
$biaya = $_POST['biaya'];
$benefit = $_POST['benefit'];

// Pastikan id_kursus diisi
if(empty($id_kursus)) {
    echo "ID Kursus harus diisi.";
    exit();
}

$sql = "INSERT INTO kursus (id_kursus, bidang, biaya, benefit) VALUES ('$id_kursus','$bidang', '$biaya', '$benefit')";

if ($mysqli->query($sql) === TRUE) {
    echo "Kursus baru berhasil ditambahkan";
    header('Location: kursus_online.php');
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();
?>
