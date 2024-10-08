<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="GiaoDienPOST/Assets/css/dangnhap.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-md-7 login-image">
                <img src="images/dai-hoc-phenikaa.jpg" class="back">
            </div>

            <div class="col-md-5">
                <div class="login-form">
                    <div class="school-logo">
                        <img src="images/logopka.png" alt="Logo trường">
                        <h3>Sổ tay sinh viên</h3>
                    </div>

                    <form action="login-authentication.php" method="POST">
                        <div class="form-group">
                            <label for="user">Email:</label>
                            <input class="form-control" name="user" placeholder="Nhập tài khoản hoặc email">
                        </div>
                        <div class="form-group">
                            <label for="pass">Mật khẩu:</label>
                            <input type="password" class="form-control" name="pass" placeholder="Nhập mật khẩu">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
                        <div class="text-right mt-2">
                            <a href="#">Quên mật khẩu?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>