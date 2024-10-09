<?php
include('../connect.php');

// Kiểm tra nếu có dữ liệu từ URL
if (isset($_GET['user_id']) && isset($_GET['name']) && isset($_GET['email']) && isset($_GET['password'])) {
    $user_id = htmlspecialchars($_GET['user_id']);
    $name = htmlspecialchars($_GET['name']);
    $email = htmlspecialchars($_GET['email']);
    $password = htmlspecialchars($_GET['password']);
} else {
    // Nếu không có dữ liệu, quay về trang quản lý người dùng
    header('Location: User.php');
    exit();
}

// Nếu form được submit (Phương thức POST)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $new_name = htmlspecialchars($_POST['name']);
    $new_password = htmlspecialchars($_POST['password']);

    // Cập nhật thông tin người dùng
    $stmt = $conn->prepare("UPDATE users SET name = ?, password = ? WHERE user_id = ?");
    $stmt->bind_param("sss", $new_name, $new_password, $user_id);

    if ($stmt->execute()) {
        echo "<script>alert('Cập nhật thông tin thành công');</script>";
    } else {
        echo "<script>alert('Lỗi. Cập nhật thông tin thất bại');</script>" . $conn->error;
    }

    $stmt->close();
    $conn->close();

    // Sau khi cập nhật xong, quay về trang User.php
    header('Location: User.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý Tài Khoản</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gowun+Batang:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./Assets/fontawesome-free-6.6.0-web/fontawesome-free-6.6.0-web/css/all.min.css">
    <link rel="stylesheet" href="./Assets/css/UserForm.css">
    <link rel="stylesheet" href="../styleChatbox.css">
</head>

<body>
    <!-- Header with Title and Create Post Button -->
    <header class="bg-primary text-white p-4">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <a href="../GiaoDienPOST/User.php"><img src="./Assets/img-logo/Logo-DH-Phenikaa-V-Bl.webp" alt="Logo"
                        class="logo me-2"></a>
                <h1 class="mb-0">Quản lý Tài Khoản</h1>
            </div>
            <div class="search-box">
                <input type="text" class="input-search" placeholder="Type to Search...">
                <button class="btn-search"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </header>
    <div class="container mt-5">
        <h2>Cập Nhật Thông Tin Người Dùng</h2>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="name" class="form-label">Tên</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= $name ?>" required>
            </div>
            <div class="mb-3">
                <label for="user_id" class="form-label">UserId</label>
                <input type="text" class="form-control" id="user_id" name="user_id" value="<?= $user_id ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= $email ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mật Khẩu</label>
                <input type="text" class="form-control" id="password" name="password" value="<?= $password ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Lưu Thay Đổi</button>
            <a href="User.php" class="btn btn-secondary">Hủy Bỏ</a>
        </form>
    </div>
    <script src="../script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>