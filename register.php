<?php
    session_start();

    include("db.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $username = mysqli_real_escape_string($con, $_POST['fname']);
        $loginname = mysqli_real_escape_string($con, $_POST['lname']);
        $Email = mysqli_real_escape_string($con, $_POST['email']);
        $Phone = mysqli_real_escape_string($con, $_POST['phone']);
        $Password = mysqli_real_escape_string($con, $_POST['password']);
        $CongViec = mysqli_real_escape_string($con, $_POST['congviec']);

        if(!empty($Email) && !empty($Password) && !is_numeric($Email)){
            // Sử dụng prepared statement để tránh SQL injection
            $query = "INSERT INTO form (fname, lname, email, phone, password, congviec) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = mysqli_prepare($con, $query);
            mysqli_stmt_bind_param($stmt, "ssssss", $username, $loginname, $Email, $Phone, $Password, $CongViec);
            mysqli_stmt_execute($stmt);
            
            if(mysqli_stmt_affected_rows($stmt) > 0) {
                echo "<script>alert('Đăng ký thành công');</script>";
            } else {
                echo "<script>alert('Đăng ký không thành công');</script>";
            }
            mysqli_stmt_close($stmt);
        } else {
            echo "<script>alert('Vui lòng điền đầy đủ thông tin và email không được chứa ký tự số');</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <header>Đăng ký</header>
            <form method="POST">
                <div class="field input">
                    <label for="fname">Tên người dùng</label>
                    <input type="text" name="fname" id="fname" required>
                </div>

                <div class="field input">
                    <label for="lname">Tên đăng ký</label>
                    <input type="text" name="lname" id="lname" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>
                </div>

                <div class="field input">
                    <label for="phone">Số điện thoại</label>
                    <input type="text" name="phone" id="phone" required>

                </div>
                <div class="field input">
                    <label for="password">Mật khẩu</label>
                    <input type="password" name="password" id="password" required>

                </div>

                <div class="field input">
                    <label for="congviec">Công việc</label>
                    <input type="text" name="congviec" id="congviec" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Đăng nhập" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="cancel" value="Hủy bỏ">
                </div>
            </form>
            
        </div>
    </div>
</body>
</html>
