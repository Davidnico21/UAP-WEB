<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        body {
            background-color: #f0f5f9; /* Warna latar belakang */
            font-family: "Arial", sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            max-width: 800px;
            margin-top: -50px; /* Menggeser container ke atas */
        }
        .box {
            background-color: #a1eafb; /* Warna background box */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 200px;
            text-align: center;
            text-decoration: none;
            color: #2c3e50; /* Warna teks */
            transition: background-color 0.3s, transform 0.3s, box-shadow 0.3s;
        }
        .box:hover {
            background-color: #7fdbda; /* Warna background saat hover */
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .box h2 {
            margin: 0;
            font-size: 1.5rem; /* Ukuran font judul */
            color: #2c3e50; /* Warna judul */
        }
        .box p {
            margin: 10px 0 0;
            color: #546e7a; /* Warna deskripsi */
        }
        #card-title h1 {
            font-size: 2rem; /* Ukuran font judul utama */
            margin-bottom: 120px;
            color: #2c3e50; /* Warna judul utama */
            text-align: center;
        }

        .logout {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #7fdbda; /* Warna background tombol logout */
            border: none;
            border-radius: 21px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            color: white; /* Warna teks tombol logout */
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s, box-shadow 0.3s;
        }
        .logout:hover {
            background-color: #4CAF50; /* Warna background saat hover */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body>
    <div id="card">
        <div id="card-content">
            <div id="card-title">
                <h1>MENU</h1>
                <div class="underline-title"></div>
            </div>
            <div class="container">
                <a href="kursus_online.php" class="box">
                    <h2 >KURSUS ONLINE</h2>
                    <p>Daftar Kursus <i class='bx bxs-book-content'></i></p>
                </a>
                <a href="pengajar.php" class="box">
                    <h2>PENGAJAR</h2>
                    <p>Daftar Pengajar <i class='bx bx-user-pin'></i></p>
                </a>
                <a href="siswa.php" class="box">
                    <h2>SISWA</h2>
                    <p>Daftar Siswa <i class='bx bxs-graduation' ></i></p>
                </a>
                <a href="kelas.php" class="box">
                    <h2>KELAS</h2>
                    <p>Daftar Kelas<i class='bx bxs-school' ></i></p>
                </a>
            </div>
            <a href="logout.php" class="logout">Logout</a>
        </div>
    </div>
</body>
</html>
