<?php
include 'config.php';

// Mengambil daftar kursus dari tabel kursus
$kursus_sql = "SELECT id_kursus, bidang FROM kursus";
$kursus_result = $mysqli->query($kursus_sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pengajar | Admin</title>
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

        .content-section {
            width: 90%;
            margin: 50px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .content-section h2 {
            font-family: 'Montserrat', sans-serif;
            font-size: 36px;
            margin-bottom: 20px;
            color: #007BFF;
            text-align: center;
        }

        .form-container {
            max-width: 600px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group textarea {
            height: 100px;
            resize: vertical;
        }

        .form-group button {
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

        .form-group button:hover {
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
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <h1>Admin | Siswa</a></h1>
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
            <li><a href="siswa.php" class="active">Daftar Siswa</a></li>
            <li><a href="tambah_siswa.php">Tambah Siswa</a></li>
        </ul>
        <div class="logout">
        <a href="menu.php" style="display: block; text-align: center; padding: 10px; background-color: navy; color: #ecf0f1; border-radius: 5px; text-decoration: none;"><Main></Main>Menu</a>
        </div>
    </div>
    <main>
        <section class="content-section">
            <div class="container">
                <div class="form-container">
                    <h2>Form Tambah Siswa</h2>
                    <form action="tambah_siswa_exe.php" method="POST">
                    <div class="form-group">
                            <label for="student_id">ID:</label>
                            <input type="text" id="student_id" name="student_id" required>
                        </div>
                        <div class="form-group">
                            <label for="full_name">Nama Siswa:</label>
                            <input type="text" id="full_name" name="full_name" required>
                        </div>
                        <div class="form-group">
                        <label for="bidang">Bidang :</label>
                            <select id="bidang" name="bidang" required>
                                <?php while($data = $kursus_result->fetch_assoc()) { ?>
                                    <option value="<?php echo $data['bidang']; ?>"><?php echo $data['bidang']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                        <a href="siswa.php" class="btn">Batal</a>
                            <button type="submit">Tambah Siswa</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
</body>
</html>
