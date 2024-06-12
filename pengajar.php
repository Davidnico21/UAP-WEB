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

        .hero {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 50px 0;
            background: #007BFF;
            color: #fff;
        }

        .hero-content {
            max-width: 50%;
            text-align: left;
        }

        .hero-content id_kelas {
            font-size: 48px;
            margin-bottom: 20px;
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
        }

        .hero-content p {
            font-size: 20px;
            margin-bottom: 20px;
            font-family: 'Roboto', sans-serif;
        }

        .hero-content button {
            padding: 15px 30px;
            font-size: 18px;
            background-color: #fff;
            color: #007BFF;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease;
            border-radius: 5px;
            font-family: 'Roboto', sans-serif;
        }

        .hero-content button:hover {
            background-color: #0056b3;
            color: #fff;
        }

        .hero-image {
            max-width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .hero-image img {
            width: 80%;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .content-section {
            width: 90%;
            margin: 50px auto;
        }

        .content-section h2 {
            font-family: 'Montserrat', sans-serif;
            font-size: 36px;
            margin-bottom: 20px;
            color: #007BFF;
            text-align: center;
        }

        .video-grid {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .video {
            flex: 1;
            min-width: 300px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .video iframe {
            width: 100%;
            height: 200px;
            border: none;
        }

        .package-section {
            width: 90%;
            margin: 50px auto;
            text-align: center;
        }

        .package-section h2 {
            font-family: 'Montserrat', sans-serif;
            font-size: 36px;
            margin-bottom: 20px;
            color: #007BFF;
        }

        .package-grid {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .package {
            flex: 1;
            min-width: 300px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            padding: 20px;
            transition: transform 0.3s ease;
        }

        .package:hover {
            transform: scale(1.05);
        }

        .package h3 {
            font-family: 'Montserrat', sans-serif;
            font-size: 24px;
            margin-bottom: 10px;
            color: #007BFF;
        }

        .package p {
            font-family: 'Roboto', sans-serif;
            font-size: 16px;
            color: #666;
            margin-bottom: 20px;
        }

        .package .price {
            font-size: 20px;
            color: #333;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .package .free {
            color: #28a745;
        }

        .package button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease;
            border-radius: 5px;
            font-family: 'Roboto', sans-serif;
        }

        .package button:hover {
            background-color: #0056b3;
            color: #fff;
        }

        .table-container {
    overflow-x: auto;
    display: flex;
    justify-content: center;
    margin-left: 17%;
    margin-top:3%;
}

.table {
    width: 90%;
    max-width: 1000px; /* Atur lebar maksimum tabel */
    margin: 0 auto;
    border-collapse: collapse;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding-left: 90%
}


.table td {
    padding: 30px; /* Menyesuaikan padding agar sejajar dengan teks di header */
    text-align: left; /* Mengatur teks agar selaras dengan header */
    border-bottom: 1px solid #ddd;
}

.table th {
    background-color: #f4f4f9;
    color: #333;
    text-align: left; /* Mengatur teks header agar selaras dengan konten di bawahnya */
    padding: 12px 30px; 
}

.table tbody tr:nth-child(even) {
    background-color: #f9f9f9;
}

.table tbody tr:hover {
    background-color: #f0f0f5;
}

.add-button {
    text-align: center;
    margin-top: 2%;
    margin-right: 20%;
}

.btn {
    text-decoration: none;
    color: #fff;
    font-weight: 500;
    padding: 10px 10px;
    transition: background-color 0.3s ease, color 0.3s ease;
    border-radius: 5px;
    background-color: #007BFF;
    border: 1px solid #007BFF;

    align-items: center;
}

.btn i {
    margin-right: 8px;
}

.btn:hover {
    background-color: #0056b3;
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


    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <h1>Admin | Pengajar</a></h1>
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
    </div>
        <div class="sidebar">
        <h2>Learnify</h2>
        <br>
        <br>
        <ul>
            <li><a href="pengajar.php" class="active">Daftar Pengajar</a></li>
            <li><a href="tambah_pengajar.php">Tambah Pengajar</a></li>
        </ul>
        <div class="logout">
            <a href="menu.php" style="display: block; text-align: center; padding: 10px; background-color: navy; color: #ecf0f1; border-radius: 5px; text-decoration: none;">Menu</a>
        </div>
    </div>
<main>
    
    <section class="content-section">
        
    <h2>Daftar Pengajar</h2>
        <div class="container">
            <div class="table-container">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Bidang</th>
                            <th>aksi</th>
                        </tr>
                        <?php 
                include "config.php";

                // Mengirim kode database untuk mendapatkan data dari table mahasiswa
                $ambil_data = mysqli_query($mysqli, "SELECT * FROM pengajar");

                // Menampilkan data yang telah didapat dari database dengan menggunakan Looping
                while ($data = mysqli_fetch_array($ambil_data)) {
            ?>
                    </thead>
                    <tbody>
                        <tr>
                        <td><?php echo $data['teacher_id']; ?></td>
                        <td><?php echo $data['full_name']; ?></td>
                        <td><?php echo $data['email']; ?></td>
                        <td><?php echo $data['bidang']; ?></td>
                        <td>
                            <a href="edit_pengajar.php?teacher_id=<?php echo $data['teacher_id']; ?>" class="btn">Edit</a>
                            <br>
                            <br>
                            <br>
                            <a href="hapus_pengajar.php?teacher_id=<?php echo $data['teacher_id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus pengajar ini?') " class="btn">Hapus</a>
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
            <a href="tambah_pengajar.php" class="btn"><i class='bx bxs-graduation'></i>Tambah Pengajar</a>
</div>
    </section>
</main>