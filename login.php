<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>

        body {
            background: -webkit-linear-gradient(rgb(233, 233, 233));
            background-repeat: no-repeat;
        }
        label {
            font-family: "Raleway", sans-serif;
            font-size: 11pt;
        }
        #forgot-pass {
            color: #2dbd6e;
            font-family: "Raleway", sans-serif;
            font-size: 10pt;
            margin-top: 3px;
            text-align: right;
        }
        #card {
            background: #fbfbfb;
            border-radius: 8px;
            box-shadow: 1px 2px 8px rgba(18, 121, 255, 0.65);
            height: 410px;
            margin: 6rem auto 8.1rem auto;
            width: 329px;
        }
        #card-content {
            padding: 12px 44px;
        }
        #card-title {
            font-family: "Raleway Thin", sans-serif;
            letter-spacing: 4px;
            padding-bottom: 23px;
            padding-top: 13px;
            text-align: center;
        }
        #signup {
            color: #6ab4ff;
            font-family: "Raleway", sans-serif;
            font-size: 10pt;
            margin-top: 16px;
            text-align: center;
        }
        #signup:hover{
            transform: translateY(-1.2px);
        }
        #submit-btn {
            background: rgb(87, 159, 253);
            border: none;
            border-radius: 21px;
            box-shadow: 0px 1px 8px #86c3ff;
            cursor: pointer;
            color: rgb(243, 243, 243);
            font-family: "Raleway SemiBold", sans-serif;
            height: 42.3px;
            margin: 0 auto;
            margin-top: 50px;
            transition: 0.25s;
            width: 153px;
        }
        #submit-btn:hover {
            box-shadow: 0px 1px 18px #2c3e50;
        }
        .form {
            align-items: left;
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
            background: (rgb(55, 208, 255));
            height: 2px;
            margin: -1.1rem auto 0 auto;
            width: 100px;
        }
    </style>
</head>
<body>
    <div id="card">
        <div id="card-content">
            <div id="card-title">
                <h2>Selamat Datang</h2>
                <div class="underline-title"></div>
            </div>
            <form class="form" action="login_exe.php" method="post">
                <label for="username">Username</label>
                <input id="username" class="form-content" type="text" name="username" required>
                <div class="form-border"></div>
                <label for="password" style="padding-top: 22px">Password</label>
                <input id="password" class="form-content" type="password" name="password" required>
                <div class="form-border"></div>
                <input id="submit-btn" type="submit" value="LOGIN">
                <a href="daftar.php" id="signup">Belum punya akun? Daftar Disini</a>
            </form>
        </div>
    </div>
</body>
</html>
