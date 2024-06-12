<?php
// memulai sesi
session_start();

// import file koneksi.php
include "config.php";

// memasukan data yang diinputkandalam form ke dalam variable 
$username = $_POST['username'];
$password = $_POST['password'];

// mengirim kode ke database
$query = mysqli_query($mysqli, "SELECT * FROM adminn where username='$username' and password='$password'");

$cek = mysqli_num_rows($query);

if ($cek > 0) {
    header("location:menu.php");
} else {
    header("location:login.php");
}
