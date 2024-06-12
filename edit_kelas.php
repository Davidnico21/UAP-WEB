<?php
include "config.php";

// Mengambil daftar kursus dari tabel kursus
$kursus_sql = "SELECT id_kursus, bidang FROM kursus";
$kursus_result = $mysqli->query($kursus_sql);

if (!isset($_GET['id_kelas'])) {
    echo "ID kelas is required.";
    exit;
}

$id_kelas = $_GET['id_kelas'];

$query = mysqli_query($mysqli, "SELECT * FROM kelas WHERE id_kelas='$id_kelas'");
$data = mysqli_fetch_array($query);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $new_id_kelas = $_POST['id_kelas'];
    $jumlah_siswa = $_POST['jumlah_siswa'];
    $waktu = $_POST['waktu'];
    $bidang = $_POST['bidang'];

    // Check if the new id_kelas already exists in the database
    $check_query = mysqli_query($mysqli, "SELECT * FROM kelas WHERE id_kelas='$new_id_kelas'");
    
    if (mysqli_num_rows($check_query) > 0 && $new_id_kelas != $id_kelas) {
        $error = "Error: id_kelas already exists.";
    } else {
        // Update the record
        $update = mysqli_query($mysqli, "UPDATE kelas SET id_kelas = '$new_id_kelas', jumlah_siswa = '$jumlah_siswa', waktu = '$waktu', bidang = '$bidang' WHERE id_kelas = '$id_kelas'");

        if ($update) {
            header('Location: kelas.php');
            exit;
        } else {
            $error = "Error updating record: " . mysqli_error($mysqli);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit kelas</title>
    <link rel="stylesheet" type="text/css" href="style.css">
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
            width: 90%;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin-left: 270px;
        }

        .navbar {
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
            margin-left: 20px;
            padding: 20px;
            width: calc(100% - 270px);
            box-sizing: border-box;
        }

        form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        form input[type="text"],
        form select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        form input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        form input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .error {
            color: red;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <header>
        <div class="navbar">
            <div class="logo">
                <h1>Admin | pengajar</a></h1>
            </div>
            <nav>
                <ul>
                    <!-- Tambahkan navigasi di sini jika perlu -->
                </ul>
            </nav>
            <div class="auth">
                <a>Admin</a>
            </div>
        </div>
    </header>

    <div class="sidebar">
        <h2>Learnify</h2>
        <br><br>
        <ul>
            <li><a href="kelas.php" class="active">Daftar kelas</a></li>
            <li><a href="tambah_kelas.php">Tambah kelas</a></li>
        </ul>
        <div class="logout">
        <a href="menu.php" style="display: block; text-align: center; padding: 10px; background-color: navy; color: #ecf0f1; border-radius: 5px; text-decoration: none;"><Main></Main>Menu</a>
        </div>
    </div>

    <div class="content">
        <div class="container">
            <h1>Edit kelas</h1>
            <form action="" method="post">

                <label for="id_kelas">ID:</label>
                <input type="text" id="id_kelas" name="id_kelas" value="<?php echo htmlspecialchars($data['id_kelas']); ?>" required>

                <label for="biaya">Jumlah Siswa:</label>
                <input type="text" id="jumlah_siswa" name="jumlah_siswa" value="<?php echo htmlspecialchars($data['jumlah_siswa']); ?>" required>
                
                <div class="form-group">
                <label for="waktu">Waktu:</label>
                <select id="waktu" name="waktu" required>
                    <option value="">Pilih Waktu</option>
                    <option value="08.00" <?php if ($data['waktu'] === '08.00') echo 'selected'; ?>>08.00</option>
                    <option value="10.00" <?php if ($data['waktu'] === '10.00') echo 'selected'; ?>>10.00</option>
                    <option value="13.00" <?php if ($data['waktu'] === '13.00') echo 'selected'; ?>>13.00</option>
                    <option value="15.00" <?php if ($data['waktu'] === '15.00') echo 'selected'; ?>>15.00</option>
                </select>

                <div class="form-group">
                    <label for="bidang">Bidang:</label>
                    <select id="bidang" name="bidang" required>
                        <option value="">Pilih Bidang</option>
                        <?php
                        while ($row = $kursus_result->fetch_assoc()) {
                            $selected = ($data['bidang'] === $row['bidang']) ? 'selected' : '';
                            echo "<option value='{$row['bidang']}' $selected>{$row['bidang']}</option>";
                        }
                        ?>
                    </select>
                </div>

                <input type="submit" value="Perbarui">
            </form>
            <?php
            if (isset($error)) {
                echo "<p class='error'>$error</p>";
            }
            ?>
        </div>
    </div>
</body>
</html>

