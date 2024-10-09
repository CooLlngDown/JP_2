<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật thông tin cá nhân</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 80%;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        input:disabled {
            background-color: #e9e9e9;
        }

        button {
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        #edit-info {
            background-color: #007bff;
            color: white;
            margin-top: 10px;
            font-size: 12px;
            padding: 5px 10px;
            float: right;
        }

        .update-btn {
            width: 100%;
            background-color: #28a745;
            color: white;
            font-size: 16px;
            margin-top: 10px;
        }

        .update-btn:hover {
            background-color: #218838;
        }

        .backbutton {
            text-decoration: none;
            height: 40px;
            width: 70px;
            color: #28a745;
            margin-right: 20px;
        }
    </style>
</head>

<?php
session_start();
include("connect.php");

// Kiểm tra người dùng đã đăng nhập chưa
if (!isset($_SESSION["success"]) || $_SESSION["success"] == false) {
    header("Location: dangnhap.php"); // Điều hướng nếu chưa đăng nhập
    exit();
}

// Lấy thông tin người dùng từ session
$user_id = $_SESSION['user_id'];

// Truy vấn thông tin người dùng từ DB để hiển thị trong form
$stmt = $conn->prepare("SELECT name, email FROM users WHERE user_id=?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
$stmt->close();

// Xử lý cập nhật thông tin người dùng
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['name'])) {
        $new_name = $_POST['name'];

        // Cập nhật chỉ thông tin name vào DB
        $update_stmt = $conn->prepare("UPDATE users SET name=? WHERE user_id=?");
        $update_stmt->bind_param("si", $new_name, $user_id);

        if ($update_stmt->execute()) {
            $_SESSION['user'] = $new_name;
            echo "<script>alert('Cập nhật thông tin thành công.');</script>";
        } else {
            echo "<script>alert('Cập nhật thông tin thất bại.');</script>";
        }
        $update_stmt->close();
    } else {
        echo "<script>alert('Không nhận được thông tin từ form.');</script>";
    }
}

?>


<body>
    <a href="home_user.php" class="backbutton">
        <butto>Quay lại</button>
    </a>
    <div class="container">
        <h2>Cập nhật thông tin cá nhân</h2>
        <form method="POST">
            <div class="form-group">
                <label for="name">Tên</label>
                <input type="text" id="name" name="name" value="<?php echo $user['name']; ?>" disabled>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="<?php echo $user['email']; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="gender">Giới tính</label>
                <select id="gender" name="gender">
                    <option value="Nam" selected>Nam</option>
                    <option value="Nu">Nữ</option>
                    <option value="Khac">Khác</option>
                </select>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" value="khidir#python@1234$aimauduoctpassowrd" readonly>
            </div>
            <button type="button" id="edit-info">Chỉnh sửa</button>
            <button type="submit" class="update-btn">Cập nhật</button>
        </form>

    </div>


    <script>
        document.getElementById('edit-info').addEventListener('click', function () {
            // Bật/tắt chế độ chỉnh sửa cho cả tên và email
            const nameField = document.getElementById('name');

            nameField.disabled = !nameField.disabled;

            // Thay đổi nút "Chỉnh sửa" thành "Lưu" nếu đang ở chế độ chỉnh sửa
            this.textContent = nameField.disabled ? "Chỉnh sửa" : "Lưu";
        });
    </script>
</body>

</html>