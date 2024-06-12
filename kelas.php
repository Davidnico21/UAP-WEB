<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }

        header {
            background: #fff;
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
            position: sticky;
            top: 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 90%;
            margin: 0 auto;
        }

        .logo h1 {
            margin: 0;
            color: #007BFF;
            font-family: 'Montserrat', sans-serif;
            font-weight: 550;
            font-size: 20px;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 20px;
        }

        nav ul li {
            display: inline;
        }

        nav ul li a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            padding: 10px 20px;
            transition: background-color 0.3s ease, color 0.3s ease;
            display: flex;
            align-items: center;
            border-radius: 5px;
        }

        nav ul li a i {
            margin-right: 8px;
        }

        nav ul li a:hover, nav ul li a.active {
            background-color: #007BFF;
            color: #fff;
        }

        .auth {
            display: flex;
            gap: 15px;
        }

        .auth a {
            text-decoration: none;
            color: #007BFF;
            font-weight: 500;
            padding: 10px 20px;
            transition: background-color 0.3s ease, color 0.3s ease;
            border-radius: 5px;
            border: 1px solid #007BFF;
        }

        .auth a:hover {
            background-color: #007BFF;
            color: #fff;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #2c3e50;
            padding: 20px;
            box-sizing: border-box;
            position: fixed;
        }

        .sidebar h2 {
            color: #ecf0f1;
            text-align: center;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
            margin-top: 20px;
        }

        .sidebar ul li {
            margin: 15px 0;
        }

        .sidebar ul li a {
            color: #ecf0f1;
            text-decoration: none;
            display: block;
            padding: 10px;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .sidebar ul li a:hover {
            background-color: #34495e;
        }

        .sidebar .logout {
            position: absolute;
            bottom: 20px;
            width: 100%;
            margin-bottom: 10rem;
            right: 2px;
        }

        .logout a {
            display: block;
            text-align: center;
            padding: 10px;
            background-color: #e74c3c;
            color: #ecf0f1;
            border-radius: 5px;
            text-decoration: none;
        }

        .main-content {
            margin-left: 200px; 
            padding: 10px;
            width: calc(100% - 220px);
            height: calc(100vh - 40px);
            overflow-y: auto;
        }

        .box_antrian {
            text-align: left;
            width: 70%;
            margin-top: 10px;
            border: 2px solid #6284CD;
            background-color: rgb(206, 198, 208);
            border-radius: 25px;
            padding: 10px;
            text-decoration: none;
            transition: background-color 0.3s ease;
            position: relative;
            margin-left:100px;
        }

        .box_antrian:hover {
            background-color: rgba(97, 203, 210, 0.5);
        }

        .box_antrian p {
            margin: 0;
            font-size: 14px; /* Reduced font size */
        }

        .box_antrian h2 {
            margin-top: 10px; /* Reduced margin */
            font-size: 16px; /* Reduced font size */
        }

        .delete-btn {
            position: absolute;
            bottom: 10px; /* Adjusted positioning */
            right: 10px; /* Adjusted positioning */
            background-color: #e74c3c;
            color: #ecf0f1;
            padding: 5px 10px; /* Reduced padding */
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .delete-btn:hover {
            background-color: #c0392b;
        }

        h3{
            margin-left:120px;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <h1>Admin | Kelas</a></h1>
            </div>
            <nav>
                <ul>
                    <li></li>
                    <li></li>
                </ul>
            </nav>
            <div class="auth">
                <a>Admin</a>
            </div>
        </div>
    </header>

    <div class="sidebar">
        <h2>Learnify</h2>
        <ul>
            <li><a href="kelas.php" class="active">Daftar Kelas</a></li>
            <li><a href="tambah_kelas.php">Tambah Kelas</a></li>
        </ul>
        <div class="logout">
        <a href="menu.php" style="display: block; text-align: center; padding: 10px; background-color: navy; color: #ecf0f1; border-radius: 5px; text-decoration: none;"><Main></Main>Menu</a>
        </div>
    </div>

    <div class="main-content">
        <h3>Daftar Kelas</h3>

            <?php 
                include "config.php";

                // Mengirim kode database untuk mendapatkan data dari table mahasiswa
                $ambil_data = mysqli_query($mysqli, "SELECT * FROM kelas");

                // Menampilkan data yang telah didapat dari database dengan menggunakan Looping
                while ($data = mysqli_fetch_array($ambil_data)) {
            ?>
                <div class="box_antrian">
                    <p>Bidang: <?php echo $data['bidang']; ?></p>
                    <p>Jumlah Siswa: <?php echo $data['jumlah_siswa']; ?></p>
                    <p>Waktu: <?php echo $data['waktu']; ?></p>
                    <h2>ID Kelas: <?php echo $data['id_kelas']; ?></h2>
                    <a href="edit_kelas.php?id_kelas=<?php echo $data['id_kelas']; ?>">Edit</a>
                    <a href="hapus_kelas.php?id_kelas=<?php echo $data['id_kelas']; ?>" class="delete-btn" onclick="return confirm('Apakah Anda yakin ingin menghapus pengajar ini?')">Hapus</a>

                </div>
            </a>
            <?php
                }
            ?>
    </div>
</body>
</html>
