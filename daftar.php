<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah User</title>
    <style>
        body {
            background: -webkit-linear-gradient(rgb(233, 233, 233));
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: "Raleway", sans-serif;
        }
        label {
            font-family: "Raleway", sans-serif;
            font-size: 10pt;
        }
        #card {
            background: #fbfbfb;
            border-radius: 8px;
            box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
            width: 329px;
            margin: auto;
            padding: 12px 44px;
        }
        #card-title {
            font-family: "Raleway Thin", sans-serif;
            letter-spacing: 4px;
            padding-bottom: 23px;
            padding-top: 13px;
            text-align: center;
        }
        .btn {
            background: rgb(87, 159, 253);
            border: none;
            border-radius: 21px;
            box-shadow: 0px 1px 8px #2c3e50;
            cursor: pointer;
            color: white;
            font-family: "Raleway SemiBold", sans-serif;
            height: 42.3px;
            margin-top: 20px;
            transition: 0.25s;
            width: 153px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            text-align: center;
        }
        .btn:hover {
            box-shadow: 0px 1px 18px #2c3e50;
        }
        .form {
            display: flex;
            flex-direction: column;
        }
        .form-border {
            background: -webkit-linear-gradient(right, #bdc3c7, #2c3e50);
            height: 1px;
            width: 100%;
        }
        .form-content {
            background: #fbfbfb;
            border: none;
            outline: none;
            padding-top: 14px;
        }
        .underline-title {
            background: -webkit-linear-gradient(right, #bdc3c7, #2c3e50);
            height: 2px;
            margin: -1.1rem auto 0 auto;
            width: 220px;
        }
        .btn-group {
            display: flex;
            justify-content: space-between;
        }
        a{
            font-size: 10pt;
        }
    </style>
</head>
<body>
    <div id="card">
        <div id="card-content">
            <div id="card-title">
                <h2>DAFTAR AKUN</h2>
                <div class="underline-title"></div>
            </div>
            <form class="form" action="daftar_exe.php" method="POST">
                <label for="username">Username</label>
                <input id="username" class="form-content" type="text" name="username" required>
                <div class="form-border"></div>
                <label for="password" style="padding-top: 22px">Password</label>
                <input id="password" class="form-content" type="password" name="password" required>
                <div class="form-border"></div>
                <div class="btn-group">
                    <a href="login.php" id="cancel-btn" class="btn">BATAL</a>
                    <button id="submit-btn" type="submit" class="btn">TAMBAH</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
