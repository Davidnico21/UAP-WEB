<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Learning</title>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
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

        .content {
            margin-left: 270px;
            padding: 20px;
            width: calc(100% - 270px);
            box-sizing: border-box;
        }

        .table-container {
            overflow-x: auto;
            display: flex;
            justify-content: center;
            margin-top: 50px;
            margin-left: 25%;
        }

        .table {
            width: 90%;
            max-width: 1000px; /* Atur lebar maksimum tabel */
            margin: 0 auto;
            border-collapse: collapse;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            left: 50px;
        }

        .table td, .table th {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .table th {
            background-color: #f4f4f9;
            color: #333;
        }

        .table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .table tbody tr:hover {
            background-color: #f0f0f5;
        }

        .add-button {
            text-align: center;
            margin-top: 20px;
        }

        .btn {
            text-decoration: none;
            color: #fff;
            font-weight: 500;
            padding: 10px 20px;
            transition: background-color 0.3s ease, color 0.3s ease;
            border-radius: 5px;
            background-color: #007BFF;
            border: 1px solid #007BFF;
            display: inline-flex;
            align-items: center;
        }

        .btn i {
            margin-right: 8px;
        }

        .btn:hover {
            background-color: #0056b3;
            color: #fff;
        }

    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
            <h1>Admin | Kursus</a></h1>
            </div>
            <nav>
                <ul>
                </ul>
            </nav>
            <div class="auth">
                <a>Admin</a>
            </div>
        </div>
    </header>
    </div>
        <div class="sidebar">
        <h2>Learnify</h2>
        <br>
        <br>
        <ul>
            <li><a href="kursus_online.php" class="active">Daftar Kursus</a></li>
            <li><a href="tambah_kursus.php">Tambah Kursus</a></li>
        </ul>
        <div class="logout">
            <a href="menu.php" style="display: block; text-align: center; padding: 10px; background-color: navy; color: #ecf0f1; border-radius: 5px; text-decoration: none;">Menu</a>
        </div>
    </div>
    <h2>Daftar Kursus</h2>
        <div class="container">
            <div class="table-container">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Bidang</th>
                            <th>Biaya</th>
                            <th>Benefit</th>
                            <th>aksi</th>
                        </tr>
                        <?php 
                include "config.php";

                // Mengirim kode database untuk mendapatkan data dari table mahasiswa
                $ambil_data = mysqli_query($mysqli, "SELECT * FROM kursus");

                // Menampilkan data yang telah didapat dari database dengan menggunakan Looping
                while ($data = mysqli_fetch_array($ambil_data)) {
            ?>
                    </thead>
                    <tbody>
                        <tr>
                        <td><?php echo $data['id_kursus']; ?></td>
                        <td><?php echo $data['bidang']; ?></td>
                        <td><?php echo $data['biaya']; ?></td>
                        <td><?php echo $data['benefit']; ?></td>
                        <td>
                            <a href="edit_kursus.php?id_kursus=<?php echo $data['id_kursus']; ?>" class="btn">Edit</a>
                            <br>
                            <br>
                            <br>
                            <a href="hapus_kursus.php?id_kursus=<?php echo $data['id_kursus']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus Kursus ini?')" class="btn">Hapus</a>
                        </td>
                        </tr>
                        <tr>
                            
                        </tr>
                        <?php } ?>
                    </tbody>

                </table>
            </div>
        </div>
        <div class="add-button">
            <a href="menu.php" class="btn"><i class='bx bxs-graduation'></i>Kembali</a>
            <a href="tambah_kursus.php" class="btn"><i class='bx bxs-graduation'></i>Tambah Kursus</a>
</div>
    </section>                     