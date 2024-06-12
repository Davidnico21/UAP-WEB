<?php
include "config.php";

// Mengambil daftar kursus dari tabel kursus
$kursus_sql = "SELECT id_kursus, bidang FROM kursus";
$kursus_result = $mysqli->query($kursus_sql);

if (!isset($_GET['student_id'])) {
    echo "Student ID is required.";
    exit;
}

$student_id = $_GET['student_id'];

$query = mysqli_query($mysqli, "SELECT * FROM siswa WHERE student_id='$student_id'");
$data = mysqli_fetch_array($query);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $full_name = $_POST['full_name'];
    $new_student_id = $_POST['student_id'];
    $bidang = $_POST['bidang'];

    // Check if the new student_id already exists in the database
    $check_query = mysqli_query($mysqli, "SELECT * FROM siswa WHERE student_id='$new_student_id'");
    
    if (mysqli_num_rows($check_query) > 0 && $new_student_id != $student_id) {
        $error = "Error: student_id already exists.";
    } else {
        // Update the record
        $update = mysqli_query($mysqli, "UPDATE siswa SET full_name = '$full_name', student_id = '$new_student_id', bidang = '$bidang' WHERE student_id = '$student_id'");

        if ($update) {
            header('Location: siswa.php');
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
    <title>Edit Siswa</title>
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
        <div class="navbar">
            <div class="logo">
                <h1>Admin | Siswa</a></h1>
            </div>
            <div class="auth">
                <a>Admin</a>
            </div>
        </div>
    </header>

    <div class="sidebar">
        <h2>Learnify</h2>
        <br><br>
        <ul>
            <li><a href="siswa.php" class="active">Daftar Siswa</a></li>
            <li><a href="tambah_siswa.php">Tambah Siswa</a></li>
        </ul>
        <div class="logout">
        <a href="menu.php" style="display: block; text-align: center; padding: 10px; background-color: navy; color: #ecf0f1; border-radius: 5px; text-decoration: none;"><Main></Main>Menu</a>
        </div>
    </div>

    <div class="content">
        <div class="container">
            <h1>Edit Siswa</h1>
            <form action="" method="post">
                <label for="full_name">Nama:</label>
                <input type="text" id="full_name" name="full_name" value="<?php echo htmlspecialchars($data['full_name']); ?>" required>
                <label for="student_id">ID:</label>
                <input type="text" id="student_id" name="student_id" value="<?php echo htmlspecialchars($data['student_id']); ?>" required>
                
                <div class="form-group">
                        <label for="bidang">Bidang :</label>
                            <select id="bidang" name="bidang" required>
                            <option value="<?php echo htmlspecialchars($data['bidang']); ?>"><?php echo htmlspecialchars($data['bidang']); ?></option>
                                <?php while($data = $kursus_result->fetch_assoc()) { ?>
                                    <option value="<?php echo $data['bidang']; ?>"><?php echo $data['bidang']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                <a href="siswa.php" class="btn">Batal</a>
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
