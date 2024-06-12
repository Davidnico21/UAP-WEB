<?php
include 'config.php';

$id_kelas = $_POST['id_kelas'];
$bidang = $_POST['bidang'];
$jumlah_siswa = $_POST['jumlah_siswa'];
$waktu = $_POST['waktu'];

$sql = "INSERT INTO kelas (id_kelas, bidang, jumlah_siswa, waktu) VALUES ('$id_kelas','$bidang', '$jumlah_siswa', '$waktu')";

if ($mysqli->query($sql) === TRUE) {
    echo "Kursus baru berhasil ditambahkan";
    header('Location:kelas.php');
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();
?>
