<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <header>Đăng nhập</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Tên người dùng</label>
                    <input type="text" name="username" id="username" required>
                </div>

                <div class="field input">
                    <label for="password">Mật khẩu</label>
                    <input type="password" name="password" id="password" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Đăng nhập" required>
                </div>
                <div class="links">
                    <div class="regis">
                        <a href="register.html">Đăng ký ngay</a>
                    </div>
                    <div class="fogetpass">
                        <a href="">Quên mật khẩu?</a>
                    </div>
                </div>
               
            </form>
            
        </div>
    </div>
</body>
</html>